<?php //Route::	url or route::get() for routing  
//$this->request->redirect(uri) 

//note to self: clean up code. remove redundants
//keep model classes in models
  //this file is located at
//repository/blog/application/classes/post.php
	//Class representing a post. Will use to make working with posts easier.
	class Model_Post extends Model_Database
	{

		public $posts; //array of posts. Save query results to this.
		private $query;
		private $results;
		private $database;
		
		public function __construct()
		{ //gets instance of database
			$database = Database::instance();
		}
		
		public function select_posts($start, $quantity)		
		{ //select which post in the array to start at, and a quantity of posts after that.
			$output = array();
			$end = $start + $quantity - 1;
			$ind = 0;
			if($start <= $end AND $end < $this->length())
			{ 
				for($i = $start; $i <= $end; $i++)
				{
					$output[$ind] = $this->posts[$i];
					$ind++;
				}
			} 
			else
			{
				die('Error! @Model_Post->select_posts: Attempted to access a value out of range! Values: Start: '.$start.' Quantity: '.$quantity.' '.$end.'errr');
			}
			
			return $output;
		}
		
		public function add_post($post)
		{//insert new post row to table 'posts'
			$query = DB::query(Database::INSERT, "INSERT INTO `posts` (title, content, author) VALUES (\"".$post['title']."\", \"".$post['content']."\", \"".$post['author']."\")")->execute();
		}
		
		public function edit_post($post)
		{	//pass in a post, what ever is stored in the title and content will be updated to match in the table
			//update a post row with the revised information.
			$query = DB::query(Database::UPDATE, 'UPDATE `posts` SET `title` = \''.$post['title'].'\', `content` = "'.$post['content'].'" WHERE p_id = '.$post['p_id'] )->execute();
		}
		
		public function delete_post($p_id)
		{//delete the post with the id $p_ido
			$query = DB::query(Database::DELETE, 'DELETE FROM posts WHERE p_id = '.$p_id)->execute();
		}
		
		public function query_posts($p_id = -1, $quantity = 0)
		{	//query for $quantity posts. Start from $p_id if specified. Use newest first
			$query;
			
			if($p_id <= 0)
			{	//get all posts
				$query = DB::query(Database::SELECT, 'SELECT * FROM posts ORDER BY p_id DESC');
			}
			else
			{	//get quantity of posts specified starting at $p_id
				$query = DB::query(Database::SELECT,
											'SELECT * 
											FROM posts 
											WHERE p_id BETWEEN '.$p_id.' AND '.($p_id + $quantity)
											.' ORDER BY p_id DESC'
											);
			}
			
			$this->posts = $query->execute()->as_array(); //query for results and store as an array.
			
		}
		

		public function __toString()
		{
			return "err";
			$outputstring = "";
			foreach($posts as $ind -> $post)
			{//title, content, author, timestamp
				$outputstring = $outputstring."[".$ind.", [title [ ".$this->post['title']."] [content [ ".$this->post['content']."] [author [ ".$this->post['author']."] [timestamp [ ".$this->post['timestamp']."] ]";			
			}
			return $outputstring;
		}
		
		//returns a portion of the Content string.
		//default value is zero.
		public function content_preview($ind, $length = 0, $start = 0)
		{
			$output = "";
			if(is_int($length) AND is_int($start))
			{
				$output = substr($this->$posts[$ind]['content'], $start, $length); 
			}
			
			return $output;
		}
		
		//returns details as a string
		public function details($delim = '|')
		{
			$details = $this->author." ";
			$details = $details.$delim;
			$details = $details." ".$this->timestamp;
			
			return $details;
		}
		
		public function length()
		{
			return count($this->posts);
		}
		
	}

?>