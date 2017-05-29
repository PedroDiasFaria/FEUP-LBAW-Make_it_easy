{include file="common/header.tpl" titulo="Homepage"}
<div class="container-logged">
	<div class="row">
		<div class="col-md-2">
			<div>
				<ul class="nav nav-stacked">
					<li><a href="{$BASE_URL}logado.php"><span class="glyphicon glyphicon-globe"></span>Últimas</a></li>
					<li><a href="{$BASE_URL}messages.php"><span class="glyphicon glyphicon-envelope"></span> Mensagens <span class="badge">5</span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-folder-open"></span> Projetos <span class="badge">3</span></a></li>
					<li><a href="{$BASE_URL}project/tasks.php"><span class="glyphicon glyphicon-tasks"></span> Tarefas</a></li>
					<li><a href="{$BASE_URL}user/calendar.php"><span class="glyphicon glyphicon-calendar"></span> Calendário</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
					  <h1>ERROR 404 <small> Ups...Página não encontrada! </small></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}
