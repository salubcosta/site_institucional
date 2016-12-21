<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="uft-8">
	<title>Site Institucional</title>
	<link rel="stylesheet" href="./assets/css/template.css" />
</head>
<body>
	<!--topo-->
	<div class="topo">
		<div class="topo1"></div>
		<div class="banner"></div>
	</div>
	<!--fim topo-->

	<!--menu-->
	<div class="menu">
		<ul>
			<a href="./"><li>HOME</li></a>
			<a href="./portfolio"><li>PORTFOLIO</li></a>
			<a href="./sobre"><li>SOBRE</li></a>
			<a href="./servicos"><li>SERVIÇOS</li></a>
			<a href="./contato"><li>CONTATO</li></a>
		</ul>
	</div>
	<!--fim menu-->
	<!--container onde ficará o conteúdo dinâmico-->
	<div class="container">
		<?php	$this->carregarViewNoTemplate($view, $array); 	?>
 </div>
 <!--fim container-->

 <div class="rodape"></div>
</body>
</html>
