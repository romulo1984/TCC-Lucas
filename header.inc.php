<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $config['titulo']; ?> - Gerenciador Administrativo (GA)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="src/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="src/css/geral.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
	        <div class="container">
		        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </a>
		        <a class="brand" href="./"><img src="src/img/logo.png"/></a>
				<ul style="margin-top: 10px;" class="nav pull-right">
					<div class="media">
						<img class="media-object pull-right" src="src/img/foto_vazio.jpg">
						<div class="media-body" style="text-align:right;">
							<h4 class="media-heading">Pedro Fonseca</h4>
							<span>
								Matricula: G00052<br />
								Núcleo da Tecnologia da Informação<br />
								<a href="#">Alterar Senha</a>
							</span>
						</div>
					</div>
				</ul>
	        </div>
	    </div>
	    <div class="navbar">
	    	<div class="navbar-inner nav-ga" style="min-height:30px; height:30px;">
	    		<div class="container">
	    			<ul class="breadcrumb">
						<li><a href="./">Página Inicial</a> <span class="divider">/</span></li>
						<li class="active"><?php echo $config['titulo']; ?></li>
					</ul>
	    		</div>
	    	</div>
	    </div>
	</div>
  	<div class="container" style="margin-top:180px;">
		<div class="row">