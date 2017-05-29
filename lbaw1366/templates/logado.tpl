{include file="common/header.tpl" titulo="Homepage" ultimas=1}
<script type="text/javascript" src="{$BASE_URL}js/messages.js"></script>
<script type="text/javascript">
	window.onload = function () {
   		charge_urgent_projects('{$BASE_URL}',{$s_id});
   		charge_urgent_tasks('{$BASE_URL}',{$s_id});
   		check_nr_msg_to_read('{$BASE_URL}',{$s_id});
   		charge_recents_projects('{$BASE_URL}',{$s_id});
   		charge_recents_tasks('{$BASE_URL}',{$s_id});
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
{include file="common/footer.tpl"}
