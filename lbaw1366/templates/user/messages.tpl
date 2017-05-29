{include file="common/header.tpl" titulo="Mensagens" mensagens=1}
<script type="text/javascript" src="{$BASE_URL}js/messages.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	check_nr_msg_to_read('{$BASE_URL}',{$s_id});
   	charge_messages({$s_id});
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
                           <a class="btn btn-primary" href="{$BASE_URL}user/compose.php">
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
{include file="common/footer.tpl"}