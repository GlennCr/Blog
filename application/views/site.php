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
			.title
			{
				position	:relative;
				top			:-25px;
				font-size	:30px;
				text-align	:left;
				}
			.content
			{
				font-size	:20px;
				position	:relative;
				top			:-50px;
			}
			
			.details
			{
				font-size	:10px;
				font-family	:Arial;
				text-align	:right;
				position 	:relative;
				top 		:-60px;
				
			}
			/*Divisions*/
			div.ex
			{	
				align 	:center;
				width	:300px;
				height	:125px;
				padding	:1%;
				border	:10px solid gray;
				margin 	:2%;
				}
			
		</style>
		<title>Frontpage View</title>
		
	</head>
	<body>
	
		<?PHP 
			//Take each post, and arrange it into a box. One for each element in the array.
			foreach($top_posts as $post)
			{
				?>
				<div class="ex">
				<p class="title"><?PHP echo $post['title'] ?></p>
				<p class="content"><?PHP echo $post['content'] ?></p>
				<p class="details"><?PHP echo $post['details'] ?></p>
				</div>
				<?PHP
			}
		?>

		</div>
	</body>
</html>