<?php
$config['titulo'] = "Siga-me";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h1>Siga-me</h1>
	</div>
	<div class="well">
		<h4>REQUISIÇÕES</h4>
		<a href="#">RME - Requisição de Material de Estoque</a><br />
		<a href="#">RAV - Requisição de Autorização de Viagem</a><br />
		<a href="#">RIA - Requisição Interna Administrativa</a>
		<br />
		<br />
		<h4>ACESSO RESTRITO NÚCLEO FINANCEIRO CONTÁBIL</h4>
		<a href="#">Cadastro/Atualização Referenciais de Diárias</a>
		<br />
		<br />
		<h4>ACESSO RESTRITO NÚCLEO DE SERVIÇOS E PROTOCOLOS</h4>
		<a href="#">Cadastro de Fornecedores</a>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");