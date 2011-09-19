<?php
	//Class representing a post. Offers a way to structure posts and facilitates display.
	class Post
	{
		private $author;				//original author of post
		private $title;					//title of post
		private $content;				//what is written in the post
		private $timestamp;				//when post was made
		
		public function __construct($title, $content, $author, $timestamp)
		{
			$this->title 		= $title;
			$this->content 		= $content;
			$this->author 		= $author;
			$this->timestamp	= $timestamp;
		}
		
		//Returns a string containing all information from the post. 
		//Uses a '|' character by default, for easy delimiting (for explode())
		public function To_String($delimiter='|' )
		{
			$output = $this->author.$delimiter;
			$output = $output.$this->title.$delimiter;
			$output = $output.$this->content.$delimiter;
			$output = $output.$this->timestamp.$delimiter;
			
			return $output;
		}
		
		//returns a portion of the Content string.
		//default value is zero.
		public function Content_Preview($length = 0, $start = 0)
		{
			$output = "";
			if(is_int($length) AND is_int($start))
			{
				$output = substr($this->content, $start, $length); 
			}
			
			return $output;
		}
		
		//returns details as a string
		public function Details($delim = '|')
		{
			$details = $this->author." ";
			$details = $details.$delim;
			$details = $details." ".$this->timestamp;
			
			return $details;
		}
		
		/*
		//The functions below are Accessor Methods.
		//Used to enforce the interface of this object.
		//Here the rules are: Author and time of posting can NOT change.
		//You can edit the title and content of the post however.
		*/
		
		public function Get_Author()
		{
			return $this->author;
		}
		
		public function Get_Title()
		{
			return $this->title;
		}
		
		public function Set_Title($title)
		{
			$this->title = $title;
		}
		
		public function Get_Content()
		{
			return $this->content;
		}
		
		public function Set_Content($content)
		{
			$this->content = $content;
		}
		
		public function Get_Timestamp()
		{
			return $this->timestamp;
		}
		
	}

?>