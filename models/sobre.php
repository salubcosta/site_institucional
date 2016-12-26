<?php

class Sobre extends model{

	public function getInformacoes(){
		$dados = array();

		$sql = 'select * from instituicao';

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}
		return $dados;
	}
}