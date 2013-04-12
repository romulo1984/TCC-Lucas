<?php
$config['titulo'] = "Portarias";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h1>Portarias</h1>
	</div>
	<div class="well">
		<a href="./portarias-cadastradas.php">Portarias Cadastradas (Consulta)</a><br />
		<br />
		<h4>ACESSO RESTRITO</h4>
		<a href="./cadastrar-portaria.php">Cadastro Portaria</a><br />
		<a href="./editar-portaria.php">Editar Portaria</a><br />
		<a href="./cadastrar-tipo-portaria.php">Cadastrar tipo de Portaria</a><br />
		<a href="./editar-tipo-portaria.php">Editar tipo de Portaria</a><br />
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");