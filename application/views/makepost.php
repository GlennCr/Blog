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
				top			:-50px;
			}
			.delete
			{	position	:relative;
				font-size	:10px;
				font-family	:Arial;
				text-align	:right;
				top			:+20px;
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
				left		:35%;
				padding		:1%;
				border		:10px;
				margin 		:2%;
			}
			
			div.danger
			{	
				position 	:relative;
				width		:30%;
				left		:48%;
				padding		:1%;
				border		:10px 0xFF0000;
				margin 		:2%;
			}
		</style>
	<title>Create Post</title>
	</head>
	
	<body>
	
		<p class="home">
			<a href="http://dev.vm/blog/">HOME</a>
		</p>
		
		<?PHP
			$sesdat = Session::instance()->as_array();
			
			echo '<div class="ex">';
			//echo "<div><form action=\"http://dev.vm/blog/editpost/create\" method=\"post\"></div>";
			echo Form::open(Route::get('modify')->uri(array('controller'=>'editpost', 'action'=>'create')));
			echo Form::hidden('hidden', 'add_post');
			echo Form::hidden('author', $sesdat['username']);
			echo '<div>Title: '.Form::input('title', '').'</div>';
			echo '<div>Author: '.$sesdat['username'].'</div>';
			echo '<div>'.Form::textarea('content').'</div>';
			echo Form::submit('submit', 'Add Post');
			echo Form::close();
			echo '</div>';
		?>
		
	</body>


</html>