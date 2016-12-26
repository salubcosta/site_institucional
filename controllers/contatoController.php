<?php

class contatoController extends controller{

	public function index(){

		$dados['aviso'] = '';
		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$msg = addslashes($_POST['mensagem']);

			$para = 'suporte@salumao.com.br';
			$assunto = '[Projeto-Institucional]';

			$mensagem = 'Nome: '.$nome."<br />E-mail: ".$email."<br />Mensagem: ".$msg;

			$cabecalho = 'From: suporte@salumao.com.br'."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();

			mail($para, $assunto, $mensagem, $cabecalho);

			$dados['aviso'] = 'E-mail enviado com sucesso!';
		}
		$this->carregarTemplate('contato',$dados);
	}
}