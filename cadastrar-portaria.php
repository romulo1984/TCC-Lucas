<?php
$config['titulo'] = "Portaria / Cadastrar Portaria";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Cadastrar Portaria</h3>
	</div>
	<div class="well">
		<form>
			<label>Número da Portaria<label />
			<input type="text" placeholder="Digite aqui o número da portaria"/><br /><br />

			<label>Ano da Portaria:</label>
			<select>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
			</select><br /><br />

			<label>Tipo da Portaria:</label>
			<select>
				<option>Revogação</option>
				<option>Não lembro</option>
				<option>Depois eu coloco</option>
			</select><br /><br />

			<label>Data de Publicação da Portaria<label />
			<input type="text" placeholder="Digite aqui a data de publicação da portaria"/><br /><br />

			<label>Arquivo da Portaria Digitalizado:</label>
			<input type="file" /><br /><br />

			<label>Resumo da Portaria:</label>
			<textarea rows="8" class="input-xxlarge"></textarea>
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A Portaria foi cadastrada com êxito!')">Cadastrar</button>
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