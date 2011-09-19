<?PHP
	//helper functions for getting things onto the front page.
	
	class Helper
	{
		public static function Hello()
		{
			return "hi";
		}
	
		static function Top_Posts($posts = array(), $num_posts = 1)
		{
			$top_posts = array();
			
			for($i = 0; $i < $num_posts; $i++)
			{
				$title = $posts[$i]['title'];
				$content = $posts[$i]['post'];
				$author = $posts[$i]['author'];
				$timestamp = $posts[$i]['post_time'];
				
				//$a_post = Post();//$title, $content, $author, $post_time);
				$top_posts[$i]['title'] = $title;
				$top_posts[$i]['content'] = $content;
				$top_posts[$i]['details'] = $author.' | '.$timestamp;
			}
			
			return $top_posts;
		}
		
	}

?>