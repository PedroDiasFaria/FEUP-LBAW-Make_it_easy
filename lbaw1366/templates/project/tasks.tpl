{include file="common/header.tpl" titulo="Tarefas" tarefas=1}
<script type="text/javascript" src="{$BASE_URL}js/another.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	charge_tasks('{$BASE_URL}',{$s_id});
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
{include file="common/footer.tpl"}
