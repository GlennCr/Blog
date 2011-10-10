<html>
<body>
	<?PHP

		$session = Session::instance();
		$sesdat = $session->as_array();
		//display login form
		$session = Session::instance();
		$sesdat = $session->as_array();
		if(isset($sesdat['loggedin']))
		{
			echo "<form action=\"http://dev.vm/blog/auth/logout\" method=\"post\">";
			echo Form::hidden('hidden', 'logout');
			echo $sesdat['username']." | ".Form::submit('Logout', 'Logout');
			echo Form::close();
		}
		else
		{
			//echo "<div><form action=\"http://dev.vm/blog/auth/\" method=\"post\"></div>";
			echo Form::open(Route::get('auth')->uri(array('controller'=>'auth', 'action'=>'index')));
			echo Form::input('userfield', 'username');
			echo Form::password('passfield', 'password');
			echo Form::submit('req_type', 'Login');
			echo Form::submit('req_type', 'Register');
			echo Form::close();
		}
		
	?>
	</body>
</html>