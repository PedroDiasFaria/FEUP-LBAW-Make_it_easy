<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:28:01
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/out_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18777060255395416436f881-61680236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e75ab7e12677d1d19494269adf1fd724e33aa3' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/out_message.tpl',
      1 => 1402290980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18777060255395416436f881-61680236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53954164444dc5_71200425',
  'variables' => 
  array (
    'messageType' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53954164444dc5_71200425')) {function content_53954164444dc5_71200425($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Mensagem enviada"), 0);?>

<!-- register-form -->
<div class="container last-cont text-center">
	<div class="col-md-12 info-message">
		<div class="alert alert-warning fade in">
			<?php if ($_smarty_tpl->tpl_vars['messageType']->value=="register") {?>
			<h3><span class="glyphicon glyphicon-envelope"></span> Foi enviado um e-mail para confirmação da sua conta. <br>Confirme a sua conta para poder efetuar o <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login.php"><b><u>login</u></b></a>.</h3>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['messageType']->value=="contact") {?>
			<h3><span class="glyphicon glyphicon-envelope"></span> A sua mensagem foi enviada com sucesso. Vai receber uma resposta da nossa parte brevemente.</h3>
			<?php }?>
		</div>
	</div>
</div>
<!-- final register-form -->
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
