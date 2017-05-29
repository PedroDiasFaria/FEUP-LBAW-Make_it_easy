{include file="common/header.tpl" titulo="Mensagem enviada"}
<!-- register-form -->
<div class="container last-cont text-center">
	<div class="col-md-12 info-message">
		<div class="alert alert-warning fade in">
			{if $messageType == "register"}
			<h3><span class="glyphicon glyphicon-envelope"></span> Foi enviado um e-mail para confirmação da sua conta. <br>Confirme a sua conta para poder efetuar o <a href="{$BASE_URL}login.php"><b><u>login</u></b></a>.</h3>
			{/if}
			{if $messageType == "contact"}
			<h3><span class="glyphicon glyphicon-envelope"></span> A sua mensagem foi enviada com sucesso. Vai receber uma resposta da nossa parte brevemente.</h3>
			{/if}
		</div>
	</div>
</div>
<!-- final register-form -->
{include file="common/footer.tpl"}
