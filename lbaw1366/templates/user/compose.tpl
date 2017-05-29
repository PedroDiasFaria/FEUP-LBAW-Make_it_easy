{include file="common/header.tpl" titulo="Nova mensagem" mensagens=1}
<script type="text/javascript" src="{$BASE_URL}js/messages.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	get_usernames();
   }
</script>
		<div class="col-md-10">
			<ul class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="{$BASE_URL}messages.php">Mensagens</a>
				<li class="active">Compor</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-envelope"></span>
							<h4 class="panel-title"> Compor nova mensagem</h4>
							<span class="pull-right"> <b>* Campos obrigatórios</b></span>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">De</label>
										<div class="col-sm-9">
											<input id="from" type="text" class="form-control" name="{$s_id}" value="{$s_username}" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Destinatário *</label>
										<div class="col-sm-9">
											<input id="auto_users" type="text" class="form-control" placeholder="Insira o nome de utilizador do destinatário" list="usernames">
											<datalist id="usernames">
											</datalist>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Assunto </label>
										<div class="col-sm-9">
											<input id="subject" type="text" class="form-control" placeholder="Insira o assunto da mensagem">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Mensagem*</label>
										<div class="col-sm-9">
											<textarea id="message" class="form-control" rows="9" cols="25" placeholder="Mensagem"></textarea>
										</div>
									</div>
									<div class="col-md-11">
											<!--<span class="list-group-item">
												<div class="file-wrapper">	
														<input name="SelectedFile" class="btn btn-primary teste" type="file" id="_file">
														<span class="btn btn-primary button"><span class="glyphicon glyphicon-paperclip"></span>Anexo</span>
												</div>
												<div class="btn-pro">
													<input type="button" id="_submit" name="_sMessage" class="btn btn-primary" value="Upload Anexo"></div>
												<div class="progress_outer">
													<div id="_progress" class="progress"></div>
												</div>
											</span>-->
										<button class="btn btn-primary pull-right" id="btn-send-msg">Enviar Mensagem</button>
									</div>
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
