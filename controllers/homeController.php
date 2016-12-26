<?php

class homeController extends controller{

	public function index(){
		
		$dados = array();

		$portfolio = new Portfolio();
		$sobre = new Sobre();

		$dados['portfolio'] = $portfolio->getTrabalhos(8);
		$dados['sobre'] = $sobre->getInformacoes();

		$this->carregarTemplate('home', $dados);
	}
}