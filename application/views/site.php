<html>
	<head>
		<style type ="text/css">
/*General Styling*/
			body
			{	font-family	:Georgia;
			}
			h1
			{	font-style	:italic;
			}
			p 
			{	
				font-size	:18px;
				text-align	:left;
			}
			/*IDs*/
			/*Classes*/
			.title .content .login
			{
				font-family :Georgia;
			}
			.login
			{
				position	:relative;
				font-size	:12px;
				text-align	:right;
			}
			
			.home
			{
				position	:relative;
				font-size	:12px;
				text-align :center;
			}
			
			.title
			{
				position	:relative;
				font-size	:30px;
				text-align	:left;
			}
			.content
			{
				position	:relative;
				font-size	:20px;
				text-align	:left;
				//top			:-50px;
			}
			.details
			{	position	:relative;
				font-size	:10px;
				font-family	:Arial;
				text-align	:right;
				//top			:-50px;
			}
			
			/*Divisions*/
			div.par
			{	
				position 	:relative;
				padding		:1%;
				border		:10px;
				margin 		:2%;
			}
			div.ex
			{	
				position 	:relative;
				width		:30%;
				left		:30%;
				padding		:1%;
				border		:10px;
				margin 		:2%;
			}
			
		</style>
		<title>Home</title>
		
	</head>
	<body>
		
		<div class="login">
		<?PHP
			echo View::factory('loginpart');
		?>
		</div>
		
		<div class="par">
		<?PHP 
			$session = Session::instance();
			$sesdat = $session->as_array();
			
			//each post gets it's own box, with style attached.
			//Set title as a link, inline the p_id for $_GET to use.
			if(isset($sesdat['loggedin']))
			{
				echo View::factory('makepost');
			}
			
				
			$count = 2;
			
			if(isset($posts))
			{
				foreach($posts as $post)
				{
					if($count > 0)
					{
						$content = (strlen($post['content']) < 50) ? $post['content'] : (substr($post['content'], 0, 50)."...");
						echo '<div class="ex">';
							//title edit button conditional below. If we are logged in show a button.
							//this code is ugly and I know it, just trying to make it work.
							echo '<div class="title">';
							if(isset($sesdat['loggedin']))
							{	
								echo Form::open(Route::get('modify')->uri(array('controller'=>'editpost', 'action'=>'index')));
								echo Form::hidden('p_id', $post['p_id']);
								echo Form::submit('modify', 'editpost');
								echo Form::close();						
							}
							echo '<a href="'.URL::site(Route::get('view')->uri(array('controller'=>'viewpost', 'action' => 'index'))).'?p_id='.$post['p_id'].'" class="title">';
							echo $post['title'].'</a>';
							echo '</div> </br></br>';
							
						echo '<p class="content">'.$content.'</p></br>';
						echo '<p class="details">'.$post['author'].' | '.$post['timestamp'].'</p>';
						echo '<hr>';
						
						if(isset($sesdat['loggedin']))
						{					
							echo '<div class="delete">';
							echo Form::open(Route::get('modify')->uri(array('controller'=>'editpost', 'action'=>'delete')));
							echo Form::hidden('p_id', $post['p_id']);
							echo Form::hidden('hidden', 'delete');
							echo Form::submit('submit', 'Delete');
							echo Form::close();
							echo '</div>';
							
						}
						
						echo "</div>";
						
						//if a count is set, count down remaining posts we can add.
						if(isset($limit))
						{
							$count = $count - 1;
						}
					}
				}
			}
		?>
		</div>
		
		<div class="home">
			<?PHP
			
			$viewall_route = Route::get('viewall')->uri(array('controller'=>'front', 'action'=>'allposts'));
			echo '<a href="'.URL::site($viewall_route).'"> View All Posts</a></br>';
			?>
			<a href="<?PHP echo URL::site(); ?>">HOME</a><br/>
		</div>
		
	</body>
</html>