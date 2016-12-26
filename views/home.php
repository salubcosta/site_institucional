<div class="home_sobre">
 	<img src="./assets/images/<?php echo $portfolio[0]['imagem']; ?>"/>
 	<h4>Sobre</h4>
 	<p><?php echo $sobre['descricao']; ?></p>
</div>

<div class="home_portfolio">
	<h4>Últimos Trabalhos</h4>
	<hr />
	<?php foreach($portfolio as $item): ?>
	<div class="portfolio_item">
		<img src="./assets/images/<?php echo $item['imagem'] ?>" title="<?php echo $item['descricao'];?>">
	</div>
	<?php endforeach; ?>
	<div style="clear: both;"></div> <!--DIV apenas pra não quebrar o layout-->
</div>