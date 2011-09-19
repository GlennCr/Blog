
<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Hello extends Controller_Template
{
	public $template = 'site';
	private $database;
	
	public function action_index()
	{
		$database = Database::instance();
		
		//$query = DB::select()->from('posts')->where('author', '=', ':author');
		$query = DB::query(Database::SELECT, 'SELECT * FROM posts WHERE author = :author;');
		$query->param(':author', "Glenn");
		
		$results = $query->execute();
		$link = mysql_connect('localhost', 'root', 'synapse');
		
		$output = $results->as_array();

		$top_posts = Helper::Top_Posts($output, 3);
		
		//DEBUG//echo ((string) $query);
		//DEBUG// print_r($output);

		$this->template->top_posts = $top_posts;
	}
}
?>