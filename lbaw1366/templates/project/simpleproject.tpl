{include file="common/header.tpl" titulo="Detalhes do projeto" projetos=1}
<script type="text/javascript" src="{$BASE_URL}js/simpleproject.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	window.onload = function () {
		loadProject('{$projectid}', '{$coordinator}', '{$BASE_URL}');
		get_usernames();
	}
</script>
		<div class="col-md-10">
			<span id="clock-1" class="pull-right"></span>
			<ul class="breadcrumb">
				<li>Projetos</li>
				<li class="active">Detalhes do projeto</li>
			</ul>
			<div class="preloader text-center">
				<h3>A carregar ... <h3>
				<img width="200" height="20" src="{$BASE_URL}images/barra_load.gif"></img><br>
				<img width="100" height="100" src="{$BASE_URL}images/preloader.gif"></img></div>
			<div class="row" id="projectcontent"></div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}
