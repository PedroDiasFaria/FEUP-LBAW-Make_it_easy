{include file="common/header.tpl" titulo="Homepage" tarefas=1}
		<div class="col-md-10">
			<span id="clock-1" class="pull-right"></span>
			<ul class="breadcrumb">
				<li class="active">Criar tarefa</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-folder-open"></span>
							<h4 class="panel-title"> Criar tarefa</h4>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label">Nome da tarefa *</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Insira o nome da tarefa" autofocus>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Descrição *</label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="5" cols="25" placeholder="Insira a descrição da tarefa"></textarea>
										</div>
										<div class="form-group">
											<label class="col-lg-2 control-label">Prioridade</label>
											<div class="col-lg-10">
												<div class="radio-inline">
													<label>
													<input type="radio" name="radioOpt" >Muito urgente
													</label>
												</div>
												<div class="radio-inline">
													<label>
													<input type="radio" name="radioOpt" >Urgente
													</label>
												</div>
												<div class="radio-inline">
													<label>
													<input type="radio" name="radioOpt" >Normal
													</label>
												</div>
												<div class="radio-inline">
													<label>
													<input type="radio" name="radioOpt" >Tempo não definido
													</label>
												</div>
											</div>
										</div>
									</div>
										<label class="col-sm-2 control-label">Membros destacados </label>
									<div class="form-group">
										<div class="col-sm-9">
											<div id="searchfield">
								<form>Pesquisar elementos <input type="text" name="currency" class="biginput" id="autocomplete"></form>
								</div>
								<div id="outputbox">
								<p id="outputcontent">Membros selecionados: (clique em cima do elemento caso queira eliminá-lo)<br></p>
								</div>
								</div>
								</div>
								<a href="{$BASE_URL}project/simpleproject.php" class="btn btn-default btn-success">Criar</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}
