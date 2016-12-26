<div class="espacamento">
	<h4>Contato</h4>

	<?php
		if(isset($aviso) && !empty($aviso)){
			echo "<br />{$aviso}<hr />";
		}
	?>
	<form method="POST" class="contato">
	<p>
		<input type="text" required="true" name="nome" placeholder="Informe seu nome" />
	</p>
	<p>
		<input type="e-mail" required="true" name="email" placeholder="Informe seu e-mail" />
	</p>
	<p>
		<textarea name="mensagem" required="true" rows="5" placeholder="Digite sua mensagem"></textarea>
	</p>
	<p><button>Enviar</button></p>
	</form>
</div>