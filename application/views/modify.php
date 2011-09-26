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
			$title = $post['title'];
			$content = $post['content'];
			
			echo $title.'</br>';
			echo "<div><form action=\"http://dev.vm/blog/editpost/update\" method=\"post\"></div>"; 
			//Form::open('update') seems intent on ignoring my URI shortening rules...?
			echo '<div>'.Form::hidden('hidden', 'form_sent').'</div>';
			echo '<div>'.Form::hidden('p_id', $post['p_id']).'</div>';
			echo '<div>'.Form::input('title', $post['title']).'</div>';
			echo '<div>'.Form::textarea('content', $post['content']).'</div>';
			echo Form::submit('submit', 'Modify Post');
			echo Form::close();
			
			echo '<div>';
			echo "<div><form action=\"http://dev.vm/blog/editpost/create\" method=\"post\"></div>"; 
			echo Form::hidden('hidden', 'add_post');
			echo '<div>Title: '.Form::input('title', 'Title').'</div>';
			echo '<div>Author: '.Form::input('author', 'Author').'</div>';
			echo '<div>'.Form::textarea('content').'</div>';
			echo Form::submit('submit', 'Add Post');
			echo Form::close();
			echo '</div>';

			echo '<div class="delete">';
			echo "<div><form action=\"http://dev.vm/blog/editpost/delete\" method=\"post\"></div>"; 
			echo Form::hidden('p_id', $post['p_id']);
			echo Form::hidden('hidden', 'delete');
			echo Form::submit('submit', '!DELETE POST!');
			echo Form::close();
			echo '</div>';
			

			?>
		</div>
		
		<p class="home">
			<a href="http://dev.vm/blog/">HOME</a>
		</p>
		
	</body>
</html>