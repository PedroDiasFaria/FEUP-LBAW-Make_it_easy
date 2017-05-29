<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:06:48
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1998207606539540e8761542-66972307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c180ec2b2ee99744020aa87e34e635fa16f338c' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/common/header.tpl',
      1 => 1402288027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998207606539540e8761542-66972307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'BASE_URL' => 0,
    's_nome' => 0,
    's_id' => 0,
    'menu_index' => 0,
    'menu_login' => 0,
    'menu_register' => 0,
    's_type' => 0,
    'ultimas' => 0,
    'mensagens' => 0,
    'projetos' => 0,
    'tarefas' => 0,
    'calendario' => 0,
    'admin' => 0,
    'adminprojects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539540e88dad92_04914760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539540e88dad92_04914760')) {function content_539540e88dad92_04914760($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Make it Easy - <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	
	<!-- codificação de caracteres para visualizar caracteres portugueses -->
	<!-- <meta charset="iso-8859-1"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- tornar o sistema responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- css do bootstrap -->
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">

	<!-- nosso css -->
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" rel="stylesheet">
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/timeTo.css" rel="stylesheet">
	<!-- css para calendário. REF: http://arshaw.com/fullcalendar/-->
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/fullcalendar.css" rel="stylesheet">
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/fullcalendar.print.css" rel="stylesheet" media="print">
	<!--<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
bootstrap-calendar/css/calendar.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
bootstrap-calendar/js/language/pt-BR.js"></script>-->

	<!-- Ficheiros javascript no final para a página carregar mais depressa -->
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-ui.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/js.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/search.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.timeTo.min.js"></script>
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
				<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php">
					<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logoTop.png" alt="Logo"/>
				</a><!-- final logotipo c/ link para página inicial -->
			</div><!-- final menu para dispositivos com ecrãs pequenos -->
			
			<!-- zona que fica omissa em sistemas com ecrãs pequenos, -->
			<div class="collapse navbar-collapse">
				<!-- menu principal -->
				<?php if ($_smarty_tpl->tpl_vars['s_nome']->value) {?>
				<ul class="nav navbar-nav">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span> Bem-vindo,<b class="color-theme"> <?php echo $_smarty_tpl->tpl_vars['s_nome']->value;?>
</b> !
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
user/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
"></i> Perfil</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/logout.php"></i> Sair</a></li>
							</ul>
						</li>
					</ul>
				<?php } else { ?>
					<ul class="nav navbar-nav">
					<li <?php if ($_smarty_tpl->tpl_vars['menu_index']->value) {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php">Início</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['menu_login']->value) {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login.php">Login</a></li>
					<!--TODO menu_Register -->
					<li <?php if ($_smarty_tpl->tpl_vars['menu_register']->value) {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
register.php">Registar</a></li>
				</ul><!-- final menu principal -->
				<?php }?>
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
			                    <button class="btn btn-default" type="button" onclick="runSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
');"><span class="glyphicon glyphicon-search"></span></button>
			                </span>
			            </div>
					</form>
				</div><!-- barra de pesquisa -->
			</div><!-- final zona que fica omissa em sistemas com ecrãs pequenos, -->	
		</div><!-- final header -->
		
		<div class="container footer-push col-md-10 col-md-offset-1">
		<?php if ($_smarty_tpl->tpl_vars['s_nome']->value&&$_smarty_tpl->tpl_vars['s_type']->value!='ADMIN') {?>
			<div class="container-logged">
				<div class="row">
					<div class="col-md-2">
						<div>
							<ul class="nav nav-stacked">
								<li <?php if ($_smarty_tpl->tpl_vars['ultimas']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php"><span class="glyphicon glyphicon-globe"></span> Dashboard</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['mensagens']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
user/messages.php"><span class="glyphicon glyphicon-envelope"></span> Mensagens</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['projetos']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
project/projects.php"><span class="glyphicon glyphicon-folder-open"></span> Projetos</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['tarefas']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
project/tasks.php"><span class="glyphicon glyphicon-tasks"></span> Tarefas</a></li>
								<li <?php if ($_smarty_tpl->tpl_vars['calendario']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
user/calendar.php"><span class="glyphicon glyphicon-calendar"></span> Calendário</a></li>
							</ul>
						</div>
					</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['s_type']->value=='ADMIN') {?>
			<div class="container-logged">
			   <div class="row">
				  <div class="col-md-2">
					 <div>
						<ul class="nav nav-stacked">
						   <li <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin.php"><span class="glyphicon glyphicon-user"></span> Utilizadores</a></li>
						   <li <?php if ($_smarty_tpl->tpl_vars['adminprojects']->value) {?>class="active-sb"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/admin-projects.php"><span class="glyphicon glyphicon-folder-open"></span> Projetos </a></li>
						</ul>
					 </div>
				  </div>
		<?php }?><?php }} ?>
