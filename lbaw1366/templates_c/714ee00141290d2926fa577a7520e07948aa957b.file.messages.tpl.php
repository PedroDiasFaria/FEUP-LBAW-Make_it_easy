<?php /* Smarty version Smarty-3.1.15, created on 2014-06-09 06:32:52
         compiled from "/opt/lbaw/lbaw1366/public_html/final/templates/user/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6313329945395470418ea22-14022213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '714ee00141290d2926fa577a7520e07948aa957b' => 
    array (
      0 => '/opt/lbaw/lbaw1366/public_html/final/templates/user/messages.tpl',
      1 => 1402290860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6313329945395470418ea22-14022213',
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
  'unifunc' => 'content_539547041fab00_07385768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539547041fab00_07385768')) {function content_539547041fab00_07385768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titulo'=>"Mensagens",'mensagens'=>1), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/messages.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	check_nr_msg_to_read('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   	charge_messages(<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
);
   }
</script>
      <div class="col-md-10">
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <span class="glyphicon glyphicon-envelope"></span>
                     <h4 class="panel-title"> Mensagens</h4>
                     <span class="pull-right"> <b><span class="msg-2-read">0</span> por ler</b></span>
                  </div>
                  <div id="show_message" class="panel panel-info">
                  <div class="panel-heading">
                     <span class="glyphicon glyphicon-envelope"></span>
                     <h4 class="panel-title"><b> Nome </b> <span class="name"></span> | <b> Assunto </b> <span class="subject"></span><b> | Data</b> <span class="date"></span></h4>
                     <span class="pull-right"><span id="btn-close-msg" class="glyphicon glyphicon-remove"></span></span>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                     	<p class="message-body">
                     	</p>
                     </div>
                     <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Responder</button>
                  </div>
               </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-12">
                           <!-- Single button -->
                           <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
user/compose.php">
                           <span class="glyphicon glyphicon-pencil"></span>
                           Compor
                           </a>
                           <!-- Split button -->
                           <div class="btn-group">
                              <button type="button" class="btn btn-default">
                                 <div class="checkbox">
                                    <label>
                                    Marcar 
                                    </label>
                                 </div>
                              </button>
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a class="sel_all_sms">Todas</a></li>
                                 <li><a class="un_all_sms">Nenhuma</a></li>
                                 <li><a class="sel_read_sms">Lidas</a></li>
                                 <li><a class="sel_unread_sms">Não lidas</a></li>
                              </ul>
                           </div>
                           <button type="button" class="btn btn-default btn-refresh" data-toggle="tooltip" title="Atualizar">
                           <span class="glyphicon glyphicon-refresh"></span>   </button>
                           <button type="button" class="btn btn-default btn-delete"  title="Eliminar marcadas">
                           <span class="glyphicon glyphicon-trash"></span>   </button> 
                        </div>
                     </div>
                     <hr />
                     <div class="row">
                        <div class="col-md-12">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#received" data-toggle="tab"><span class="glyphicon glyphicon-download">
                                 </span> Recebidas</a>
                              </li>
                              <li><a href="#sent" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span>
                                 Enviadas</a>
                              </li>
                           </ul>
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="received">
                                 <table id="messages-received" class="table" cellspacing="0" width="100%">
                                    <thead>
                                       <tr style="border: 1px solid #DDD;">
                                          <th width="1%"></th>
                                          <th width="19%"> Nome <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
                                          <th width="50%"> Assunto <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                          <th width="1%"></th>
                                          <th width="20%"> Data <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                       </tr>
                                    </thead>
                                    <tbody class="messages-received">
                                    </tbody>
                                 </table>
                              </div>
                              <div class="tab-pane fade in" id="sent">
                                 <table id="messages-sent" class="table" cellspacing="0" width="100%">
                                    <thead>
                                       <tr style="border: 1px solid #DDD;">
                                          <th width="1%"></th>
                                          <th width="19%"> Para <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
                                          <th width="50%"> Assunto <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                          <th width="1%"></th>
                                          <th width="20%"> Data <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                       </tr>
                                    </thead>
                                    <tbody class="messages-sent">
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
      </div>
   </div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
