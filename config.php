<?php

require_once 'environment.php'; // inclui as constantes basilares...

/* se ENVIRONMENT == development então 
 *		deverá definir constantes com informações do servidor local
 * senão então
 * 		deverá definir constantes com informações do servidor de produção
 */

if(ENVIRONMENT == 'development'){

	define('HOST','localhost');
	define('DBNAME','dbinstitucional');
	define('DBUSER','root');
	define('DBPASS','root');
}else{
	define('HOST','');
	define('DBNAME','');
	define('DBUSER','');
	define('DBPASS','');
}

//Auto-load para carregamento das classes
spl_autoload_register(function($class){
	if(file_exists(DIRETORIO.'/controllers/'.$class.'.php'))
		require_once DIRETORIO.'/controllers/'.$class.'.php';
	elseif(file_exists(DIRETORIO.'/models/'.$class.'.php'))
		require_once DIRETORIO.'/models/'.$class.'.php';
	else
		require_once DIRETORIO.'/core/'.$class.'.php';
});