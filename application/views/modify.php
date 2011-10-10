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
		<title><?PHP echo $pagetitle; ?></title>
		
	</head>
	<body>
		
		<p class="home">
			<a href="http://dev.vm/blog/">HOME</a>
		</p>
		
		<div class="ex">
		<?PHP
			$session = Session::instance();
			$sesdata = $session->as_array();
			
			$title = $posts['title'];
			$content = $posts['content'];
			
			echo $title.'</br>';
			//echo "<div><form action=\"http://dev.vm/blog/editpost/update\" method=\"post\"></div>";
			echo Form::open(Route::get('modify')->uri(array( 'controller'=>'editpost', 'action'=>'update')));
			echo '<div>'.Form::hidden('hidden', 'form_sent').'</div>';
			echo '<div>'.Form::hidden('p_id', $posts['p_id']).'</div>';
			echo '<div>'.Form::input('title', $posts['title']).'</div>';
			echo '<div>'.Form::textarea('content', $posts['content']).'</div>';
			echo Form::submit('submit', 'Modify post');
			echo Form::close();

			?>
		</div>
		
		<p class="home">
			<a href="<?PHP echo URL::site(); ?>">HOME</a>
		</p>
		
	</body>
</html>