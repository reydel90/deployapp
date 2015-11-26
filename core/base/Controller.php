<?php 
class Controller{
	public function view($view, $data = []){
		require_once VIEWS . $view . '.php';
	}
}