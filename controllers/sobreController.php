<?php

class sobreController extends controller{

	public function index(){
		$dados = array();

		$sobre = new Sobre();

		$dados['sobre'] = $sobre->getInformacoes();

		$this->carregarTemplate('sobre', $dados);
	}
}