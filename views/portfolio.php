<div class="portfolio">
	<h4>Portfolio - Últimos trabalhos</h4>
	<?php foreach($portfolio as $item): ?>
		<img src="./assets/images/<?php echo $item['imagem']; ?>" title="<?php echo $item['descricao'];?>"/>
	<?php endforeach; ?>
</div>
<div style="clear: both;"></div>