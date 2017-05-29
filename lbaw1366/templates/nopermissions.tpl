{include file="common/header.tpl" titulo="403" menu_index=1}
<div id="forbidden-page">
	<h1>Erro 403</h1>
	<h1>Não tem permissões para ver esta página</h1>
</div>

<script type="text/javascript">
window.setTimeout(function(){
        window.location.href = "{$BASE_URL}index.php";
    }, 2500);
</script>

{include file="common/footer.tpl"}
