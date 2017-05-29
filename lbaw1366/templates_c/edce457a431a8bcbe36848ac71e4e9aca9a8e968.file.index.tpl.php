<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:06:48
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:645278733539540e86cbc06-23385784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edce457a431a8bcbe36848ac71e4e9aca9a8e968' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/index.tpl',
      1 => 1402288026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645278733539540e86cbc06-23385784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539540e875d430_83774826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539540e875d430_83774826')) {function content_539540e875d430_83774826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Homepage",'menu_index'=>1), 0);?>

<script type='text/javascript' src='js/jquery.fittext.js'></script>
<script type='text/javascript'>
function runFittext() {
	$('h2').fitText(4, { minFontSize: '12px', maxFontSize: '30px' });
};
</script>
<!-- conteúdo da página -->
	<!-- jumbotron -->
	<div class="jumbotron text-center">
		<div class="centerfy col-md-12"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index.png"/>
		<h2 class="slogan-text">A melhor forma de gerir os seus projetos</h2>
		</div>
		<!-- botão para demonstração do sistema com abertura de um modal -->
		<a href="#modal-state" class="btn btn-default btn-info" data-toggle="modal">Demonstração</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
register.php" class="btn btn-default btn-info">Registar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login.php" id="button-login" class="btn btn-default btn-success">Login</a>
	</div><!-- final jumbotron -->
<script type='text/javascript'>
runFittext();
</script>
	<!-- Algumas funcionalidades do sistema em 4 colunas-->
	<div class="container last-cont">
		<!-- row -->
		<div class="row">
			<div class="col-md-3 text-center">
				<h3>Criação de projetos</h3>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php"><img id="project.png"  class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index/project.png" width="100px" height="100px" alt="project" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Neste sistema pode criar o seu projeto para ser mais fácil construí-lo. Convide toda a sua equipa para ser mais fácil comunicar e dividir responsabilidades.
				</p>
			</div>
			<div class="col-md-3 text-center">
				<h3>Fóruns de projeto</h3>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php"><img id="forum.png" class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index/forum.png" width="100px" height="100px" alt="forum" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Todos os projetos têm disponível um fórum individual onde se podem discutir temas relacionados com o projeto, como novas tarefas ou bugs.
				</p>
			</div>
			<div class="col-md-3 text-center">
				<h3>Gestão de tarefas</h3>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php"><img  id="icon_tarefa.png"  class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index/icon_tarefa.png" width="100px" height="100px" alt="icon_tarefa" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Neste sistema é possível gerir todas as tarefas do seu projeto. Podem ser adicionadas tarefas por cada elemento da equipa e podem ser anuladas pelo coordenador do projeto.
				</p>
			</div>
			<!--<div class="col-md-3 text-center">
				<h3>Informações</h3>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php"><img id="email.png" class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index/email.png" width="100px" height="100px" alt="Smiley face" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Sempre que houver uma atualização sobre um projeto, o utilizador tem a opção de receber um e-mail com essa informação para estar sempre a par de tudo sobre o projeto.
				</p>
			</div>-->
			<div class="col-md-3 text-center">
				<h3>Calendário</h3>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php"><img id="calendar.png" class="text-center" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/index/calendar.png" width="100px" height="100px" alt="calendar" onmouseover="hover(this, this.id);" onmouseout="unhover(this, this.id);"></a>
				<p align="justify">
					Cada utilizador tem acesso a um calendário pessoal, onde pode adicionar eventos. Uma ferramenta fundamental na gestão do seu tempo.
				</p>
			</div>
		</div><!-- final row -->
	</div><!-- final algumas funcionalidades do sistema em 4 colunas-->

<!-- modal para demonstração do sistema -->		
<div class="modal fade text-center" id="modal-state" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4> Demonstração </h4>
				</div>
				<div class="modal-body">
					<div class="video">
						<iframe width="560" height="315" src="http://www.youtube.com/embed/Fvs5AYlgzuk"></iframe>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center pad-rht-15 pad-bot-15">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
register.php" id="btn-st-reg" class="btn btn-primary btn-login">Registar</a>
						<a class="btn btn-default btn-login" data-dismiss="modal">Fechar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><!-- final modal para demonstração do sistema -->
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
