
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/front.php
/*Loads up a certain number of posts to display on the page.
*/
	class Controller_Front extends Controller_Template
	{
		public $template = 'site';
		private $post_model;
		
		public function action_index()
		{
			$post_model = Model::factory('Post');
			
			$post_model->query_posts();
			
			$this->template->posts = $post_model->select_posts(0,2);
			
			
		}
		
		public function action_allposts()
		{
			$post_model = Model::factory('Post');
			
			$post_model->query_posts();
		
			$this->template->posts = $post_model->posts;
		}

	}

			
?>