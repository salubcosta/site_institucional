<?php

class core{

	//função irá arrancar o projeto
	public function run(){
		$this->processarURL();
	}

	//função irá trabalhar a URL chamando os controllers e actions respectivamente
	public function processarURL(){
		
		$params = array();
		if(isset($_GET['url'])){
			
			/*
			 * rtrim - remove espaços 
			 * strtolower - torna toda string  minúscula
			 * filter_var - remove caracteres ilegais
			 */
			$url = filter_var(strtolower(rtrim($_GET['url'])), FILTER_SANITIZE_URL);

			$url = explode("/", $url); // explode a string e retorna um array

			$controller = $this->verificarArray($url,0) ? $this->verificarArray($url,0).'Controller' : 'homeController';
			$action = $this->verificarArray($url,1) ? $this->verificarArray($url,1) : 'index';

			if($this->verificarArray($url,2)){
				unset($url[0]);
				unset($url[1]);
				$params = $url;
			}
		}else{
			$controller = 'homeController';
			$action = 'index';
		}

		if(!$this->validarController($controller)){ 
			// incluir 404.php ou 404.html
			include DIRETORIO . '/views/include/404.php';
			exit;
		}

		$_controller = new $controller();

		if(!$this->validarAction($_controller, $action)){
			// incluir 404.php ou 404.html
			include DIRETORIO . '/views/include/404.php';
			exit;
		}

		call_user_func_array(array($_controller, $action), $params);
	} // fim processarURL()

	// retona o array em posição específica ou false
	public function verificarArray($array, $key){
		if(isset($array[$key])){
			return $array[$key];
		}
		return false;
	}

	// retorna true ou false
	public function validarController($controller){
		return (file_exists(DIRETORIO.'/controllers/'.$controller.'.php'));
	}

	// retorna true ou false
	public function validarAction($obj, $action){
		return (method_exists($obj, $action));
	}
} // fim core()