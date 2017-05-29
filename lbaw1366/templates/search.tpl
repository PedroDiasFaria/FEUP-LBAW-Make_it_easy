{include file="common/header.tpl" titulo="Pesquisa"}
<script type="text/javascript" src="{$BASE_URL}js/search.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
window.onload = function () {
	performSearch('{$BASE_URL}', '{$searchQuery}', '{$searchRange}');
}
</script>
{if $s_nome}
<div class="col-md-10 well">
{else}
<div class="col-md-12 well">
{/if}
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Resultados da pesquisa: <span id="searchTerms"></span></h3>
						</div>
							<div class="panel-body">
								 <table id="search-results" class="table" cellspacing="0" width="100%">
									<thead>
									   <tr style="border: 1px solid #DDD;">
										  <th width="50%"> Username <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></i></th>
										  <th width="50%"> Nome <i style="font-size: 0.8em;" class="glyphicon glyphicon-sort"></th>
									   </tr>
									</thead>
									<tbody class="search-results">
									</tbody>
								 </table>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}
