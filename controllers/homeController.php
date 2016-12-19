<?php

class homeController extends controller{

	public function index(){
		//Primeira Action caso não seja informado...
		$this->carregarTemplate('home',array());
	}
}