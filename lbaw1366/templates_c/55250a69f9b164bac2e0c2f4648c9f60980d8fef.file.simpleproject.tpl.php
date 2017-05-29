<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:34:05
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/project/simpleproject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17338786475395474dba0d42-30572778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55250a69f9b164bac2e0c2f4648c9f60980d8fef' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/project/simpleproject.tpl',
      1 => 1402290786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17338786475395474dba0d42-30572778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'projectid' => 0,
    'coordinator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5395474dc8bd12_76480070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395474dc8bd12_76480070')) {function content_5395474dc8bd12_76480070($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Detalhes do projeto",'projetos'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/simpleproject.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	window.onload = function () {
		loadProject('<?php echo $_smarty_tpl->tpl_vars['projectid']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['coordinator']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
');
		get_usernames();
	}
</script>
		<div class="col-md-10">
			<span id="clock-1" class="pull-right"></span>
			<ul class="breadcrumb">
				<li>Projetos</li>
				<li class="active">Detalhes do projeto</li>
			</ul>
			<div class="preloader text-center">
				<h3>A carregar ... <h3>
				<img width="200" height="20" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/barra_load.gif"></img><br>
				<img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/preloader.gif"></img></div>
			<div class="row" id="projectcontent"></div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
