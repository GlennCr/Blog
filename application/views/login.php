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
		<title>Login</title>
		
	</head>
	<body>
		<div class="home">
		<?PHP 
			echo "Login Failed: <br/>"; 
			echo "<div><form action=\"http://dev.vm/blog/auth/\" method=\"post\"></div>";
			echo Form::hidden('hidden', 'log_auth');
			echo "Username | Password </br>";
			echo Form::input('userfield');
			echo Form::password('passfield')."</br>";
			echo Form::submit('Login', 'login');
		?>
		</div>
		
	</body>
</html>