
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
				echo "<div><form action=\"http://dev.vm/blog/auth/\" method=\"post\"></div>";
				echo Form::hidden('hidden', 'log_auth');
				echo Form::input('userfield', 'username');
				echo Form::password('passfield', 'password');
				echo Form::submit('Login', 'login');
				echo Form::close();
			?>
			</div>
		
		<div class="par">
		<?PHP 
			//each post gets it's own box, with style attached.
			//Set title as a link, inline the p_id for $_GET to use.
			foreach($posts as $post)
			{
			$content = (strlen($post['content']) < 50) ? $post['content'] : (substr($post['content'], 0, 50)."...");
				echo '<div class="ex">';
				echo '<a href="http://dev.vm/blog/viewpost/?p_id='.$post['p_id'].'" class="title">';
				echo $post['title'].'</a> </br>';
				echo '<p class="content">'.$content.'</p></br>';
				echo '<p class="details">'.$post['author'].' | '.$post['timestamp'].'</p>';
				echo '<hr>';
				
				echo '<form action="http://dev.vm/blog/editpost/?p_id='.$post['p_id'].'" method="post" class="details">';
				echo Form::submit('modify', 'editpost');
				echo Form::close();
				echo "</div>";
			}		
		?>
		</div>
		
		<div class="home">
			<a href="http://dev.vm/blog/front/allposts"> View All Posts</a></br></br>
			<a href="http://dev.vm/blog/">Home</a></br>
		</div>
		
	</body>
</html>