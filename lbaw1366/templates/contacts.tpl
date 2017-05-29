{include file="common/header.tpl" titulo="Contatos"}
<script type="text/javascript" src="{$BASE_URL}js/contacts.js"></script> 
<div class="container contact-form last-cont ">
	{if $s_nome}
	<div class="col-md-6 well">
	{else}
	<div class="col-md-8 well">
	{/if}
		<span class="page-title">Fale connosco</span>
		<form>
			<div class="row">
				<div class="col-md-12">
					<a id="message"></a>
					<div class="form-group">
					<label class="control-label">Nome</label>
						<input id="name" name="name" type="text" class="form-control" placeholder="Insira o seu nome" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o seu nome';val_completename();"/>
						<a id="name_error"></a>
					</div>
					<div class="form-group">
					<label class="control-label">Email</label>
						<input id="email" name="email" type="text" class="form-control" placeholder="Insira o seu e-mail" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o seu e-mail';val_email();"/>
						<a id="email_error"></a>
					</div>
					<div class="form-group">
					<label class="control-label">Assunto</label>
						<input id="subject" name="subject" type="text" class="form-control" placeholder="Insira o assunto" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o assunto';val_subject();"/>
						<a id="subject_error"></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Mensagem</label>
						<textarea id="contents" class="form-control" rows="9" cols="25" placeholder=" Insira a sua mensagem" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira a sua mensagem';val_contents();"></textarea>
						<a id="contents_error"></a>
					</div>
				</div>
				<div class="col-md-12">
					<a class="btn btn-primary pull-right" onclick="val_contact();" id="btnContactUs">Enviar</a>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-4 text-center">
		<legend>
			<span class="glyphicon glyphicon-exclamation-sign"></span> Nossa Equipa
		</legend>
		<table class="elem-team">
			<tr>
				<td colspan="2" rowspan="2">
					<img class="img-responsives" src="{$BASE_URL}images/faria.png" width="100" height="100"/>
				</td>
				<td>
					<h4>Pedro Faria</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>ei11167@fe.up.pt</h4>
				</td>
			</tr>
		</table>
		<table class="elem-team">
			<tr>
				<td colspan="2" rowspan="2">
					<img class="img-responsives" src="{$BASE_URL}images/rafa.png" width="100" height="100"/>
				</td>
				<td>
					<h4>Rafaela Faria</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>ei12129@fe.up.pt</h4>
				</td>
			</tr>
		</table>
		<table class="elem-team">
			<tr>
				<td colspan="2" rowspan="2">
					<img class="img-responsives" src="{$BASE_URL}images/tiago.png" width="100" height="100"/>
				</td>
				<td>
					<h4>Tiago Coelho</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>ei11012@fe.up.pt</h4>
				</td>
			</tr>
		</table>
		<table class="elem-team">
			<tr>
				<td colspan="2" rowspan="2">
					<img class="img-responsives" src="{$BASE_URL}images/vitor.png" width="100" height="100"/>
				</td>
				<td>
					<h4>Vítor Araújo</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4>ee07206@fe.up.pt</h4>
				</td>
			</tr>
		</table>
		<h2>Make it Easy</h2>
		<br>
	</div>
</div>
{include file="common/footer.tpl" menu_contacts=1}
