<?PHP defined('SYSPATH') or die('No direct script access');
	
	class Controller_Viewpost extends Controller
	{
		public $template = 'post';

		private $post_model;
		
		public function action_index()
		{
			$post_model = Model::factory('Post');
			$post_model->query_posts($_GET['p_id']); //get a single post with p_id
			
			$view = View::factory('site')->set('posts', $post_model->select_posts(0,1));
			$this->response->body($view);
		}
	}

?>