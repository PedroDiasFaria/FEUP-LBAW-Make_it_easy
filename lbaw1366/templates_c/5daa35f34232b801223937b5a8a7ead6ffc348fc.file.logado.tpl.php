<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:32:47
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/logado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1962568617539546ff0809a0-85015857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5daa35f34232b801223937b5a8a7ead6ffc348fc' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/logado.tpl',
      1 => 1402288026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962568617539546ff0809a0-85015857',
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
  'unifunc' => 'content_539546ff16aa50_64962188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539546ff16aa50_64962188')) {function content_539546ff16aa50_64962188($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Homepage",'ultimas'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/messages.js"></script>
<script type="text/javascript">
	window.onload = function () {
   		charge_urgent_projects('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   		charge_urgent_tasks('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   		check_nr_msg_to_read('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   		charge_recents_projects('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   		charge_recents_tasks('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   	}
</script>
		<div class="col-md-10">
			<ul class="breadcrumb">
				<li class="active">Últimas</li>
			</ul>
		<div class="row">
				<div class="col-md-4">
					<div class="alert alert-warning fade in">
						<span class="glyphicon glyphicon-exclamation-sign"></span>
						Tem <span class="nr-urgent-projects">0 projetos</span> a terminar o prazo.
					</div>
				</div>
				<div class="col-md-4">
					<div class="alert alert-warning fade in">
						<span class="glyphicon glyphicon-exclamation-sign"></span>
						Tem <span class="nr-urgent-tasks">0 tarefas</span> com alta prioridade.
					</div>
				</div>
				<div class="col-md-4">
					<div class="alert alert-info fade in">
						<span class="glyphicon glyphicon-envelope"></span>
						Tem <span class="msg-2-read">0 mensagens</span> por ler.
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-md-6">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading pointer" data-toggle="collapse" href="#collapseProjects1">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								<h4 class="panel-title"> Projetos urgentes</h4>
								<span class="glyphicon glyphicon-sort pull-right"></span>
							</div>
							<div id="collapseProjects1" class="panel-collapse collapse in">
								<div class="panel-body">
									<div id="urgent-projects" class="list-group"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading pointer" data-toggle="collapse" href="#collapseTasks1">
								<span class="glyphicon glyphicon-exclamation-sign"></span>
								<h4 class="panel-title"> Tarefas urgentes</h4>
								<span class="glyphicon glyphicon-sort pull-right"></span>
							</div>
							<div id="collapseTasks1" class="panel-collapse collapse in">
								<div class="panel-body">
									<div id="urgent-tasks" class=" list-group">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading pointer" data-toggle="collapse" href="#collapseProjects2">
								<span class="glyphicon glyphicon-folder-open"></span>
								<h4 class="panel-title"> Projetos recentes</h4>
								<span class="glyphicon glyphicon-sort pull-right"></span>
							</div>
							<div id="collapseProjects2" class="panel-collapse collapse in">
								<div class="panel-body">
									<div id="recent-projects" class="list-group"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading pointer" data-toggle="collapse" href="#collapseTasks2">
								<span class="glyphicon glyphicon-tasks"></span>
								<h4 class="panel-title"> Tarefas recentes</h4>
								<span class="glyphicon glyphicon-sort pull-right"></span>
							</div>
							<div id="collapseTasks2" class="panel-collapse collapse in">
								<div class="panel-body">
									<div id="recent-tasks" class="list-group"></div>
								</div>
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
