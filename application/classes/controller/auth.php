
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/auth.php
/*
//To Do: Figure out Kohana::Auth and Add in auth methods.
*/
	class Controller_Auth extends Controller_Template
	{
		public $template = 'login';
		private $auth_model;
		
		public function action_index()
		{
			$auth_model = Model::factory('Login'); //for some reason using 'auth' wouldn't work...
			//display site view with 'logged in' message if success
			$this->template->debug = "Hello World!";
			
			//unable to get $_POST values so this doesn't do much here
			
			$view_input = array();
			if(Arr::get($_POST, 'hidden') == 'log_auth')
			{	
				$keys = array('username', 'password');
				$view_input = Arr::extract($_POST, $keys, NULL);
				$username = $view_input['username'];
				$password = $view_input['password'];
				die('got $_POST values! Remove this die! Figure out Auth!');
			}
		}
	}

?>