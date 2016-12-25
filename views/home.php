<div class="home_sobre">
 	<img src="" width="150" height="150"/>
 	<h4>Sobre</h4>
 	<p>Nesta parte fica uma pequena descrição sobre a instituição</p>
</div>

<div class="home_portfolio">
	<h4>Últimos Trabalhos</h4>
	<?php foreach($portfolio as $item): ?>
	<div class="portfolio_item">
		<img src="./assets/images/<?php echo $item['imagem'] ?>" title="<?php echo $item['descricao'];?>" border="0" width="200" height="150">
	</div>
	<?php endforeach; ?>

	<div style="clear: both;"></div> <!--DIV apenas pra não quebrar o layout-->
</div>