<div class="portfolio espacamento">
	<h4>Portfolio - Últimos trabalhos</h4>
	<hr />
	<?php foreach($portfolio as $item): ?>
		<img src="./assets/images/<?php echo $item['imagem']; ?>" title="<?php echo $item['descricao'];?>"/>
	<?php endforeach; ?>
</div>
<div style="clear: both;"></div>