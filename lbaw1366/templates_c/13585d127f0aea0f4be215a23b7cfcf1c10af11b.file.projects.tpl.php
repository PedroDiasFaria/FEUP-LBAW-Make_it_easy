<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:32:55
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/project/projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252513752539547070dc1e8-19464071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13585d127f0aea0f4be215a23b7cfcf1c10af11b' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/project/projects.tpl',
      1 => 1402288027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252513752539547070dc1e8-19464071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    's_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53954707198806_36020304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53954707198806_36020304')) {function content_53954707198806_36020304($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Homepage",'projetos'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/another.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
window.onload = function () {
	charge_projects(<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
}
</script>
	<div class="col-md-10">
		<!-- <span id="clock-1" class="pull-right"></span> -->
		<ul class="breadcrumb">
			<li class="active">Projetos</li>
		</ul>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info fade in">
					<span class="glyphicon glyphicon-folder-open"></span>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
project/newproject.php"> Criar um novo projeto </a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-folder-open"></span>
						<h4 class="panel-title"> Meus projetos</h4>
					</div>
					<div class="panel-body">
						<div>
							 <table id="my-projects" class="table" cellspacing="0" width="100%">
								<thead>
								   <tr style="border: 1px solid #DDD;">
									  <th width="50%"> Nome do projeto <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
									  <th width="30%"> Coordenador <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
									  <th width="20%"> Data limite <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
								   </tr>
								</thead>
								<tbody class="my-projects">
								</tbody>
							 </table>
                        </div>
					</div>
				</div>
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
