<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:25:37
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916337766539545518e2c22-70100552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad64d0be36f3f28a34b8d4e526b9e46290f4ab7' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/login.tpl',
      1 => 1402288026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916337766539545518e2c22-70100552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539545519b1b96_29315015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539545519b1b96_29315015')) {function content_539545519b1b96_29315015($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Login",'menu_login'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/formval.js"></script> 
<div class="container login-form">
<div class="panel panel-default">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-lock"></span> Login
	</div>
	<div class="panel-body">
		<form class="form-horizontal">					
			<div id="error-login">
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Utilizador</label>
				<div class="col-sm-9">
					<input id="username_login" name="username" type="text" class="form-control" autofocus
					<?php if ($_smarty_tpl->tpl_vars['username']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"
					<?php } else { ?> placeholder="Indique o seu nome de utilizador"
					<?php }?>
					onChange="this.placeholder = ''"
					onBlur="this.placeholder='Indique o seu nome de utilizador'">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-9">
					<input id="password_login" name="password" type="password" class="form-control" placeholder="Indique a sua password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Indique a sua password'">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<div class="checkbox">
						<label><input id="rememberme" type="checkbox"/>Lembrar-me</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a class="btn btn-success btn-block btn-enter" onclick="validate_login();">Entrar</a>
			</div>
		</form>
	</div>
	<div class="panel-footer">
		Não tem conta? <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
register.php"><b>Registe-se!</b></a>
	</div>
</div>
<!-- forgot-pass -->
<div class="forgot-pass">
	<div class="panel-group">
		<div class="panel panel-default">
			<div id="header-forgot" class="panel-heading">
				<h4 class="panel-title">
					<span class="glyphicon glyphicon-question-sign"></span> Esqueceu a password?
				</h4>
			</div>
			<div>
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div id="error-forgot">
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">E-mail</label>
									<div class="col-sm-9">
										<input type="text" class="form-control forgot-password" placeholder="Insira o seu e-mail de registo">
									</div>
								</div>
								<div class="panel-footer">
									<div>
										<a onclick="forgot_password();" class="btn btn-success btn-block">Pedir nova password</a>
									</div>
								</div>
							</form>
						</div>
						<div class="panel-footer">
							Uma <u>nova password</u> irá ser enviada para o seu e-mail.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- final forgot-pass -->
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
