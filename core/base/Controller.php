<?php 
class Controller{
	protected $template  = 'default',
			  $starpage  = 'start.php',
			  $endpage   = 'end.php',
			  $view      = 'landing.php',
			  $routeView = '';

			  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}
		$this->routeView = TEMPLATES . $this->template . DS;
		if(file_exists(VIEWS . $view . '.php')){
			$this->view = $view . '.php';
		}

		require_once $this->routeView . $this->starpage;
		require_once VIEWS . $this->$view;
		require_once $this->routeView . $this->endpage;
	}
}