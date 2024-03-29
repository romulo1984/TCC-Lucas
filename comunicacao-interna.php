<?php
$config['titulo'] = "Criar Comunicação Interna";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Criar Comunicação Interna</h3>
	</div>
	<div class="well">
		<form>
			<label>Unidade Administrativa de Destino:</label>
			<select>
				<option>Assessoria de Comunicação</option>
				<option>Diretoria</option>
				<option>Administrativo</option>
			</select>
			<br /><br />
			<label>Assunto:</label>
			<input type="text" placeholder="Digite aqui o Assunto"/>
			<br /><br />
			<label>Conteúdo:</label>
			<textarea rows="8" class="input-xxlarge"></textarea>
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A CI foi criada com êxito!'); window.location = './src/img/comunicacao_interna_print.pdf'">Finalizar</button>
		</form>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");
?>