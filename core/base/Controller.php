<?php 
class Controller{
	protected $template = 'default';
			  
	public function view($view, $data = []){
		$url = Url::parse();
		print_r($url);
		require_once TEMPLATES . $this->template . DS . 'start.php';
		require_once VIEWS . $view . '.php';
		require_once TEMPLATES . $this->template . DS . 'end.php';
	}
}