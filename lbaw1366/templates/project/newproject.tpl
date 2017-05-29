{include file="common/header.tpl" titulo="Novo projeto" projetos=1}
<script type="text/javascript" src="{$BASE_URL}js/val_newProject.js"></script> 
<script type="text/javascript">
window.onload = function () {
	for (var i=1;i<=31;i++){
		if(i<10)
				$('.days-of-month').append('<option value="0'+i+'">'+i+'</option>');	
			else
				$('.days-of-month').append('<option value="'+i+'">'+i+'</option>');	
	}
		
	for (var i=currentYear;i<=currentYear+100;i++)
		$('.years').append('<option>'+i+'</option>');
}
</script>
		<div class="col-md-10">
			<span id="clock-1" class="pull-right"></span>
			<ul class="breadcrumb">
				<li>Projetos</li>
				<li class="active">Criar projeto</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-folder-open"></span>
							<h4 class="panel-title"> Criar projeto</h4>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label">Nome do projeto *</label>
										<div class="col-sm-9">
											<input id="name" name="name" type="text" class="form-control" placeholder="Insira o nome do projeto" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o nome do projeto';val_name();"/>
											<a id="name_error"></a>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Descrição *</label>
										<div class="col-sm-9">
											<textarea id="description" class="form-control" rows="5" cols="25" placeholder="Insira a descrição do projeto" onFocus="this.placeholder=''" onBlur="this.placeholder='Insira a descrição do projeto';val_description();"></textarea>
											<a id="description_error"></a>
										</div>
									</div>
									<label for="">Deadline* </label>
							<div class="row">
							<div class="col-md-4">
									<select id="years" class="form-control years" onchange="changeDays(document.getElementById('months').value)">
										<option value="Ano">Ano</option>
									</select>
								</div>
								<div class="col-md-4">
									<select id="months" class="form-control" onchange="changeDays(this.value);">
										<option value="Mes">Mês</option>
										<option value="01">Janeiro</option>
										<option value="02"> Fevereiro</option>
										<option value="03">Março</option>
										<option value="04">Abril</option>
										<option value="05">Maio</option>
										<option value="06">Junho</option>
										<option value="07">Julho</option>
										<option value="08">Agosto</option>
										<option value="09">Setembro</option>
										<option value="10">Outubro</option>
										<option value="11">Novembro</option>
										<option value="12">Dezembro</option>
									</select>
								</div>
								<div class="col-md-4">
									<select id="days" class="form-control days-of-month">
										<option value="Dia">Dia</option>
									</select>
								</div>
							</div>
							<a id="dob_error"></a>
							<br><br>
								<a class="btn btn-default btn-success" onclick="val_project();">Criar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}
