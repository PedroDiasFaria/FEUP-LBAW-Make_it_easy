<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:36:54
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/project/tasks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197921269539547f6f244e0-27348310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '147ea9413004fe8cc27fe420f13ebd606d0d8241' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/project/tasks.tpl',
      1 => 1402290807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197921269539547f6f244e0-27348310',
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
  'unifunc' => 'content_539547f70c4126_77977892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539547f70c4126_77977892')) {function content_539547f70c4126_77977892($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Tarefas",'tarefas'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/another.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	charge_tasks('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   }
</script>
		<div class="col-md-10">
			<!-- <span id="clock-1" class="pull-right"></span> -->
			<ul class="breadcrumb">
				<li class="active">Tarefas</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-tasks"></span>
						<h4 class="panel-title">  Minhas tarefas</h4>
					</div>
					<div class="panel-body">
						<div>
							 <table id="my-tasks" class="table" cellspacing="0" width="100%">
								<thead>
								   <tr style="border: 1px solid #DDD;">
									  <th width="40%"> Nome da tarefa <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
									  <th width="20%"> Prioridade <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
									  <th width="20%"> Estado <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
									  <th width="20%"> Data limite<i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
								   </tr>
								</thead>
								<tbody class="my-tasks">
								</tbody>
							 </table>
                        </div>
					</div>
		</div>
	</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
