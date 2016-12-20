<!DOCTYPE html>
<html lang="ptbr">
<head>
	<meta charset="uft-8">
	<title>404 - Página não encontrada</title>
</head>
<body>
	<h1>404 - Página não encontrada</h1>
	<p>A página que foi solicitada não foi encontrada</p>
	<hr />
	<p>URL Solicitada: <?php echo URL.'/'.$_GET['url']; ?> </p>
	<p>Hoje: <?php echo date('d/m/Y') ?></p>
</body>
</html>