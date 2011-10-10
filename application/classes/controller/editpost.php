
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/editpost.php
//handles directing modifications to posts including content edits and deletion

	class Controller_Editpost extends Controller
	{	
		private $post_model;
		
		public function action_index()
		{
			$template = 'modify';
			
			$post_model = Model::factory('Post');
			
			
			$p_id = Arr::get($_POST, 'p_id');
			if($p_id > 0)
			{
				$post_model->query_posts($p_id);
			}
			
			$post = $post_model->select_posts(0,1);
			$view = View::factory('modify')->set('posts', $post[0]);			
			$view->set('pagetitle', $post[0]['title']);
			$this->response->body($view);
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
			$view = View::factory('modify')->set('posts', $post[0]);			
			$view->set('pagetitle', 'Modified Post '.$post[0]['title']);
			$this->response->body($view);
			
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

			$front_route = Route::get('default')->uri(array('controller'=>'front', 'action'=>'index'));
			$this->request->redirect($front_route);
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
			
			/*
			$post_model->query_posts();
			$post = $post_model->select_posts(0,1);
			$view = View::factory('modify')->set('posts', $post[0]);			
			$view->set('pagetitle', "Deleted Post: ".$p_id);
			$this->response->body($view);
			*/
			$front_route = Route::get('default')->uri(array('controller'=>'front', 'action'=>'index'));
			$this->request->redirect($front_route);
			
		}
		
	}

?>