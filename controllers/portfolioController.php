<?php

class portfolioController extends controller{

	public function index(){
		$dados = array();
		$portfolio = new Portfolio();
		$dados['portfolio'] = $portfolio->getTrabalhos();
		$this->carregarTemplate('portfolio',$dados);
	}
}