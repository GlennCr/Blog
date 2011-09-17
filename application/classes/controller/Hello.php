
<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Hello extends Controller_Template
{
	public $template = 'site';
	
	public function action_index()
	{
		$this->template->message = 'hello, world!';
	}
}
?>