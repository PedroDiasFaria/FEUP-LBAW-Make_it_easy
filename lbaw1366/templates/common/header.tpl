<!DOCTYPE html>
<html>
<head>
	<title>Make it Easy - {$titulo}</title>
	
	<!-- codificação de caracteres para visualizar caracteres portugueses -->
	<!-- <meta charset="iso-8859-1"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- tornar o sistema responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- css do bootstrap -->
	<link type="text/css" href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet">

	<!-- nosso css -->
	<link type="text/css" href="{$BASE_URL}css/style.css" rel="stylesheet">
	<link type="text/css" href="{$BASE_URL}css/timeTo.css" rel="stylesheet">
	<!-- css para calendário. REF: http://arshaw.com/fullcalendar/-->
	<link type="text/css" href="{$BASE_URL}css/fullcalendar.css" rel="stylesheet">
	<link type="text/css" href="{$BASE_URL}css/fullcalendar.print.css" rel="stylesheet" media="print">
	<!--<link type="text/css" rel="stylesheet" href="{$BASE_URL}bootstrap-calendar/css/calendar.css">
	<script type="text/javascript" src="{$BASE_URL}bootstrap-calendar/js/language/pt-BR.js"></script>-->

	<!-- Ficheiros javascript no final para a página carregar mais depressa -->
	<script type="text/javascript" src="{$BASE_URL}js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/jquery-ui.custom.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/js.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/search.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/jquery.cookie.js"></script>
	<script type="text/javascript" src="{$BASE_URL}js/jquery.timeTo.min.js"></script>
</head>
	
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- header -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!-- menu para dispositivos com ecrãs pequenos -->
		<div class="navbar-header">
				<!-- botão para mostrar zona omissa em sistemas com ecrãs pequenos -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button><!-- botão para mostrar zona omissa em sistemas com ecrãs pequenos -->
				<!-- logotipo c/ link para página inicial -->
				<a class="brand" href="{$BASE_URL}index.php">
					<img class="img-responsive" src="{$BASE_URL}images/logoTop.png" alt="Logo"/>
				</a><!-- final logotipo c/ link para página inicial -->
			</div><!-- final menu para dispositivos com ecrãs pequenos -->
			
			<!-- zona que fica omissa em sistemas com ecrãs pequenos, -->
			<div class="collapse navbar-collapse">
				<!-- menu principal -->
				{if $s_nome}
				<ul class="nav navbar-nav">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span> Bem-vindo,<b class="color-theme"> {$s_nome}</b> !
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{$BASE_URL}user/profile.php?id={$s_id}"></i> Perfil</a></li>
								<li class="divider"></li>
								<li><a href="{$BASE_URL}actions/logout.php"></i> Sair</a></li>
							</ul>
						</li>
					</ul>
				{else}
					<ul class="nav navbar-nav">
					<li {if $menu_index} class="active" {/if}><a href="{$BASE_URL}index.php">Início</a></li>
					<li {if $menu_login} class="active" {/if}><a href="{$BASE_URL}login.php">Login</a></li>
					<!--TODO menu_Register -->
					<li {if $menu_register} class="active" {/if}><a href="{$BASE_URL}register.php">Registar</a></li>
				</ul><!-- final menu principal -->
				{/if}
				<!-- barra de pesquisa -->
				<div class="col-sm-3 col-md-3 pull-right" id="searchbar">
					<form class="navbar-form" role="search">
						<div class="input-group">
			                <div class="input-group-btn search-panel">
			                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			                    	<span id="search_concept" value="users">Utilizadores</span><!--  <span class="caret">--></span>
			                    </button>
			                    <!-- <ul class="dropdown-menu" role="menu">
			                     <li><a href="#all">Tudo</a></li>
			                      <li class="divider"></li>
			                      <li><a href="#projects">Projetos</a></li>
			                      <li><a href="#users">Utilizadores</a></li>
			                    </ul>-->
			                </div>
			                <input id="search_param" type="text" class="form-control" name="x" placeholder="Pesquisar"></input>
			                <span class="input-group-btn">
			                    <button class="btn btn-default" type="button" onclick="runSearch('{$BASE_URL}');"><span class="glyphicon glyphicon-search"></span></button>
			                </span>
			            </div>
					</form>
				</div><!-- barra de pesquisa -->
			</div><!-- final zona que fica omissa em sistemas com ecrãs pequenos, -->	
		</div><!-- final header -->
		
		<div class="container footer-push col-md-10 col-md-offset-1">
		{if $s_nome && $s_type != 'ADMIN'}
			<div class="container-logged">
				<div class="row">
					<div class="col-md-2">
						<div>
							<ul class="nav nav-stacked">
								<li {if $ultimas}class="active-sb"{/if}><a href="{$BASE_URL}index.php"><span class="glyphicon glyphicon-globe"></span> Dashboard</a></li>
								<li {if $mensagens}class="active-sb"{/if}><a href="{$BASE_URL}user/messages.php"><span class="glyphicon glyphicon-envelope"></span> Mensagens</a></li>
								<li {if $projetos}class="active-sb"{/if}><a href="{$BASE_URL}project/projects.php"><span class="glyphicon glyphicon-folder-open"></span> Projetos</a></li>
								<li {if $tarefas}class="active-sb"{/if}><a href="{$BASE_URL}project/tasks.php"><span class="glyphicon glyphicon-tasks"></span> Tarefas</a></li>
								<li {if $calendario}class="active-sb"{/if}><a href="{$BASE_URL}user/calendar.php"><span class="glyphicon glyphicon-calendar"></span> Calendário</a></li>
							</ul>
						</div>
					</div>
		{/if}
		{if $s_type == 'ADMIN'}
			<div class="container-logged">
			   <div class="row">
				  <div class="col-md-2">
					 <div>
						<ul class="nav nav-stacked">
						   <li {if $admin}class="active-sb"{/if}><a href="{$BASE_URL}admin/admin.php"><span class="glyphicon glyphicon-user"></span> Utilizadores</a></li>
						   <li {if $adminprojects}class="active-sb"{/if}><a href="{$BASE_URL}admin/admin-projects.php"><span class="glyphicon glyphicon-folder-open"></span> Projetos </a></li>
						</ul>
					 </div>
				  </div>
		{/if}