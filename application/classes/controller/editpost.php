
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/editpost.php
//handles directing modifications to posts including content edits and deletion

	class Controller_Editpost extends Controller_Template
	{
		public $template = 'modify';		
		private $post_model;
		
		public function action_index()
		{
			$template = 'modify';
			
			$post_model = Model::factory('Post');
			if(isset($_GET['p_id']))
			{
				$p_id = $_GET['p_id'];
		
				$post_model->query_posts($p_id);
			}
			
			$post = $post_model->select_posts(0,1);
			$this->template->post = $post[0];
			$this->template->pagetitle = 'Modify '.$post[0]['title'];
			//below are from an example, what are these for?
			//$this->template->content = View::factory('elements/form');
			//$this->template->navigation = $this->_simple_nav();

		}
		
		public function action_update()
		{
			$post_model = Model::factory('Post');
			//get information from modify's form.
			$view_input = array();
			if(Arr::get($_POST, 'hidden') == 'form_sent')
			{
				$keys = array('p_id', 'title', 'content');
				$view_input = Arr::extract($_POST, $keys, NULL);

				$p_id = $view_input['p_id'];
				$title = $view_input['title'];
				$content = $view_input['content'];
				$postedit = array('p_id' => $p_id, 'title' => $title, 'content' => $content);
				
				$post_model->edit_post($postedit);
			
			}
			else
			{
				die('Something in Controller_Editpost::action_update() failed!');
			}
			
			//redirect would be better here?
			$post_model->query_posts($p_id);
			$post = $post_model->select_posts(0,1);
			$this->template->post = $post[0];
			$this->template->pagetitle = 'Modify '.$post[0]['title'];
			
			
			
		}
		
		public function action_create()
		{
			$post_model = Model::factory('Post');
			if(Arr::get($_POST, 'hidden') == 'add_post')
			{
				$keys = array('title', 'author', 'content');
				$view_input = Arr::extract($_POST, $keys, NULL);
				
				$post_model->add_post($view_input);
			}
			else
			{
				die('Something in Controller_Editpost::action_create() failed!');
			}

			$post_model->query_posts();
			$post = $post_model->select_posts(0,1);
			$this->template->post = $post[0];
			$this->template->pagetitle = 'Modify '.$post[0]['title'];
			
		}
		
		public function action_delete()
		{
		
			$post_model = Model::factory('Post');
			//get information from modify's form.
			$p_id = -1;
			if(Arr::get($_POST, 'hidden') == 'delete')
			{
				$p_id = Arr::get($_POST, 'p_id');
				
				//die(''.count($post_model->posts));
				$post_model->delete_post($p_id);
				
			}
			else
			{
				die('Something in Controller_Editpost::action_update() failed!');
			}
			
			$post_model->query_posts();
			$post = $post_model->select_posts(0,1);
			$this->template->post = $post[0];
			$this->template->pagetitle = 'Modify '.$post[0]['title'];
			
			
		}
		
	}

?>