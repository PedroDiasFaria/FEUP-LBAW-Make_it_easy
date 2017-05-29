{include file="common/header.tpl" titulo="Painel de administrador" admin=1}
<script type="text/javascript" src="{$BASE_URL}js/admin.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	chargeTable("id");
   
   for (var i=1;i<=31;i++)
   	$('.days-of-month').append('<option value="'+i+'">'+i+'</option>');
   	
   for (var i=currentYear;i<=currentYear+100;i++)
   	$('.years').append('<option>'+i+'</option>');
   }
   
</script>
      <div class="col-md-10">
         <div class="row last-cont">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="box">
                        <div class="box-header" data-original-title>
                           <h2><i class="glyphicon glyphicon-user"></i><span class="break"></span>Utilizadores</h2>
                        </div>
                        <div id="show-susp" class="panel panel-info">
                           <div class="panel-heading">
                              <span class="glyphicon glyphicon-bullhorn"></span>
                              <h4 class="panel-title"><label class="suspend"> Suspender #<span class="id-username"></span> <span class="username" style="text-decoration: underline"></span> até:</label></h4>
                              <span class="pull-right"><span id="btn-close-sus" class="glyphicon glyphicon-remove"></span></span>
                           </div>
                           <div class="panel-body"> 
                                 <div class="row">
                                 	<div id="error"></div>
                                    <div class="col-md-3">
                                       <select id="years" class="form-control years" onchange="changeDays(document.getElementById('months').value)">
                                          <option value="1">Ano</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3">
                                       <select id="months" class="form-control" onchange="changeDays(this.value);">
                                          <option value="Month">Mês</option>
                                          <option value="1">Janeiro</option>
                                          <option value="2"> Fevereiro</option>
                                          <option value="3">Março</option>
                                          <option value="4">Abril</option>
                                          <option value="5">Maio</option>
                                          <option value="6">Junho</option>
                                          <option value="7">Julho</option>
                                          <option value="8">Agosto</option>
                                          <option value="9">Setembro</option>
                                          <option value="10">Outubro</option>
                                          <option value="11">Novembro</option>
                                          <option value="12">Dezembro</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3">
                                       <select id="days" class="form-control days-of-month">
                                          <option>Dia</option>
                                       </select>
                                    </div>
                                   <button class="btn btn-primary col-md-1 col-md-offset-1" id="btn-susp">Suspender</button>
                                 </div>
                           </div>
                        </div>
                        <div class="box-content">
                           <table id="usersTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                 <tr>
                                    <th> #ID <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
                                    <th> #Utilizador <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                    <th> #Estado <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                    <th> #Ação <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
                                 </tr>
                              </thead>
                              <tbody class="user-table">
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!--/col-->
               </div>
               <!--/row-->
            </div>
         </div>
      </div>
   </div>
</div>
{include file="common/footer.tpl"}