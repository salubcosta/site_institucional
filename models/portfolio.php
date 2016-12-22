<?php

class Portfolio extends model{

	public function getTrabalhos($qtd = null){
		$array = array();

		$sql = "SELECT * FROM portfolio ";
		if(!empty($qtd)){
			$sql .= ' LIMIT ' . $qtd;
		}
		$sql = $this->db->query($sql);
		if($sql->rowCount()>0){
			$array = $sql->fetchAll();
		}
		return $array;
	}
}
