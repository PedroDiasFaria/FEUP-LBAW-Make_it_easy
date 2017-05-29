<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:06:48
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718579213539540e88de951-84942502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d25f60c7ffaabbb2eba9a0b7d84a9256836624d' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/common/footer.tpl',
      1 => 1402288027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718579213539540e88de951-84942502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_faq' => 0,
    'BASE_URL' => 0,
    'menu_functionalities' => 0,
    'menu_about' => 0,
    'menu_contacts' => 0,
    'menu_privacy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539540e8930db2_17005953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539540e8930db2_17005953')) {function content_539540e8930db2_17005953($_smarty_tpl) {?><div class="push"></div> <!-- Pushes content away from footer -->
</div> <!-- Closes container div-->

<footer id="footer" class="footer navbar navbar-default navbar-fixed-bottom">
	<div class="navbar-inner">
		<div class="container footer-mg-top">
			<p <?php if ($_smarty_tpl->tpl_vars['menu_faq']->value) {?> style="text-decoration: underline;" <?php }?> class="muted pull-left footer-txt"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
faq.php">FAQ</a></p>
			<p <?php if ($_smarty_tpl->tpl_vars['menu_functionalities']->value) {?> style="text-decoration: underline;" <?php }?> class="muted pull-left footer-txt"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
functionalities.php">Funcionalidades</a></p>
			<p <?php if ($_smarty_tpl->tpl_vars['menu_about']->value) {?> style="text-decoration: underline;" <?php }?> class="muted pull-right footer-txt"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
aboutus.php">Acerca</a></p>
			<p <?php if ($_smarty_tpl->tpl_vars['menu_contacts']->value) {?> style="text-decoration: underline;" <?php }?> class="muted pull-right footer-txt"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts.php">Contactos</a></p>
			<p <?php if ($_smarty_tpl->tpl_vars['menu_privacy']->value) {?> style="text-decoration: underline;" <?php }?> class="muted pull-right footer-txt"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
privacy.php">Privacidade</a></p>
			<!--
			<img style="border:0;width:88px;height:31px;" src="http://www.w3.org/Icons/valid-xhtml10" alt="" 
				onClick="window.open('http://validator.w3.org/check?uri='+location.href)" /> -->
		</div>
	</div>
</footer>
<!-- final rodapé -->

</div>
<!-- final wrapper -->
</body>
</html>
<?php }} ?>
