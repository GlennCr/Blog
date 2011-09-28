
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/front.php
/*Loads up a certain number of posts to display on the page.
*/
	class Controller_Front extends Controller
	{
		public $template = 'site';
		private $post_model;
		
		public function action_index()
		{
			$post_model = Model::factory('Post');
			
			$post_model->query_posts();
			
			
			$view = View::factory('site')->set('posts', $post_model->select_posts(0,2));
			$this->response->body($view);
			
		}
		
		public function action_allposts()
		{
			$post_model = Model::factory('Post');
			
			$post_model->query_posts();
		
			$view = View::factory('site')->set('posts', $post_model->posts);
			$this->response->body($view);
		}

	}

			
?>