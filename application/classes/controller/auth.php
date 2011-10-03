
<?PHP defined('SYSPATH') OR die('No direct script access'); 
//this file is located at
//repository/blog/application/classes/controller/auth.php
/*
//To Do: Figure out Kohana::Auth and Add in auth methods.
*/
	class Controller_Auth extends Controller
	{
		public $template = 'login';
		private $auth_model;
		
		public function action_index()
		{
			$auth_model = Model::factory('Login'); //for some reason using 'auth' wouldn't work...
			$view_input = array();
			
			$keys = array('userfield', 'passfield');
			$view_input = Arr::extract($_POST, $keys, NULL);
			
			$user = $view_input['userfield'];
			$pass = $view_input['passfield'];
			
			switch(Arr::get($_POST, 'req_type'))
			{
				case 'Login':
					$auth_model->login($user, $pass);	
					break;
				case 'Register':
					$auth_model->register($user, $pass);
				default:
			}
			/*
			if(Arr::get($_POST, 'req_type') == 'Login')
			{	
				$keys = array('userfield', 'passfield');
				$view_input = Arr::extract($_POST, $keys, NULL);
				
				$user = $view_input['userfield'];
				$pass = $view_input['passfield'];
				
				$auth_model->login($user, $pass);	
			}
			*/
			
			//$view = View::factory('site')->set('debug', "Hello World!");
			//$this->response->body($view);
			//if valid redirect to front page
			
			$front_route = Route::get('default')->uri(array('controller'=>'front','action'=>'index'));
			$this->request->redirect($front_route);
			//else, redirect to login failed page
		}
		
		public function action_logout()
		{
			$session = Session::instance();
			$sesdat = $session->as_array();
			$auth_model = Model::factory('Login');
			
			$auth_model->logout();

			$front_route= Route::get('default')->uri(array('controller'=>'front', 'action'=>'index'));
			$this->request->redirect($front_route);
		}
	}

?>