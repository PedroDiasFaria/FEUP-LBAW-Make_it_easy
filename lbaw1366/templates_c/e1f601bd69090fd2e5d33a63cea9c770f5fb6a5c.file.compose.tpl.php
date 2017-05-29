<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:37:04
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/user/compose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174270305153954800307447-53012534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f601bd69090fd2e5d33a63cea9c770f5fb6a5c' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/user/compose.tpl',
      1 => 1402290864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174270305153954800307447-53012534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    's_id' => 0,
    's_username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5395480035b6b1_24827585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395480035b6b1_24827585')) {function content_5395480035b6b1_24827585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Nova mensagem",'mensagens'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/messages.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	get_usernames();
   }
</script>
		<div class="col-md-10">
			<ul class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
messages.php">Mensagens</a>
				<li class="active">Compor</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-envelope"></span>
							<h4 class="panel-title"> Compor nova mensagem</h4>
							<span class="pull-right"> <b>* Campos obrigatórios</b></span>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">De</label>
										<div class="col-sm-9">
											<input id="from" type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['s_username']->value;?>
" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Destinatário *</label>
										<div class="col-sm-9">
											<input id="auto_users" type="text" class="form-control" placeholder="Insira o nome de utilizador do destinatário" list="usernames">
											<datalist id="usernames">
											</datalist>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Assunto </label>
										<div class="col-sm-9">
											<input id="subject" type="text" class="form-control" placeholder="Insira o assunto da mensagem">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Mensagem*</label>
										<div class="col-sm-9">
											<textarea id="message" class="form-control" rows="9" cols="25" placeholder="Mensagem"></textarea>
										</div>
									</div>
									<div class="col-md-11">
											<!--<span class="list-group-item">
												<div class="file-wrapper">	
														<input name="SelectedFile" class="btn btn-primary teste" type="file" id="_file">
														<span class="btn btn-primary button"><span class="glyphicon glyphicon-paperclip"></span>Anexo</span>
												</div>
												<div class="btn-pro">
													<input type="button" id="_submit" name="_sMessage" class="btn btn-primary" value="Upload Anexo"></div>
												<div class="progress_outer">
													<div id="_progress" class="progress"></div>
												</div>
											</span>-->
										<button class="btn btn-primary pull-right" id="btn-send-msg">Enviar Mensagem</button>
									</div>
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
