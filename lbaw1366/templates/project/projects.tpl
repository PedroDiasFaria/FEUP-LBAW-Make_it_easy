{include file="common/header.tpl" titulo="Homepage" projetos=1}
<script type="text/javascript" src="{$BASE_URL}js/another.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
window.onload = function () {
	charge_projects({$s_id});
}
</script>
	<div class="col-md-10">
		<!-- <span id="clock-1" class="pull-right"></span> -->
		<ul class="breadcrumb">
			<li class="active">Projetos</li>
		</ul>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info fade in">
					<span class="glyphicon glyphicon-folder-open"></span>
					<a href="{$BASE_URL}project/newproject.php"> Criar um novo projeto </a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-folder-open"></span>
						<h4 class="panel-title"> Meus projetos</h4>
					</div>
					<div class="panel-body">
						<div>
							 <table id="my-projects" class="table" cellspacing="0" width="100%">
								<thead>
								   <tr style="border: 1px solid #DDD;">
									  <th width="50%"> Nome do projeto <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
									  <th width="30%"> Coordenador <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
									  <th width="20%"> Data limite <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
								   </tr>
								</thead>
								<tbody class="my-projects">
								</tbody>
							 </table>
                        </div>
					</div>
				</div>
	</div>
</div>
</div>
{include file="common/footer.tpl"}
