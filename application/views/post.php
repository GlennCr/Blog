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
			.details
			{	position	:relative;
				font-size	:10px;
				font-family	:Arial;
				text-align	:right;
				top			:-50px;
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
		<title>Post: </title>
		
	</head>
	<body>
		
		<p class="home">
			<a href="http://dev.vm/blog/">HOME</a>
		</p>
			
		<?PHP 
			//Take the post passed over and display it nicely. Include a link back to the frontpage.
			//Offer an edit post button if you are logged in.
			foreach($posts as $post)
			{ //iterate incase multiple posts somehow included
				?>
				<div class="ex">
				<p class="title">
				<?PHP echo $post['title'] ?></p> </br>
				<p class="content"><?PHP echo $post['content'] ?></p> </br>
				<p class="details"><?PHP echo $post['author']." | ".$post['timestamp'] ?></p>
				
				</div>
				<?PHP
			}
		?>
		</div>
		
		<p class="home">
			<a href="<?PHP echo Site::url; ?>">HOME</a>
			
		</p>
		
	</body>
</html>