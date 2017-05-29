{include file="common/header.tpl" titulo="Registar" menu_register=1}
<script type="text/javascript" src="{$BASE_URL}js/formval.js"></script> 
<script type="text/javascript">
window.onload = function () {
	document.getElementById("gender").selectedIndex = -1;
	for (var i=1;i<=31;i++){
		if(i<10)
				$('.days-of-month').append('<option value="0'+i+'">'+i+'</option>');	
			else
				$('.days-of-month').append('<option value="'+i+'">'+i+'</option>');	
	}
		
	for (var i=currentYear;i>=1900;i--)
		$('.years').append('<option>'+i+'</option>');
}
</script>
<!-- register-form -->
<div class="container register-form last-cont">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-pencil"></span> Registar
			<p class="muted pull-right">* Campos obrigatórios</p>
		</div>
		<div class="panel-body">
			<form class="form-horizontal">
				<a id="message"></a>
				<div class="form-group">
					<label class="col-sm-3 control-label">Primeiro nome*</label>
					<div class="col-sm-9">
						<input id="name" name="name" type="text" class="form-control"
							{if $name} value="{$name}"
							{else} placeholder="Insira o seu primeiro nome"
							{/if}
							onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o seu primeiro nome';val_name();">
							<a id="name_error"></a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Último nome*</label>
					<div class="col-sm-9">
						<input id="surname" name="surname" type="text" class="form-control" placeholder="Insira o seu último nome" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o seu último nome';val_surname();">
						<a id="surname_error"></a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nome de utilizador*</label>
					<div class="col-sm-9">
						<input id="username" name="username" type="text" class="form-control" placeholder="Insira um nome de utilizador" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira um nome de utilizador';val_username();">
						<a id="username_error"></a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">E-mail*</label>
					<div class="col-sm-9">
						<input id="email" name="email" type="text" class="form-control" placeholder="Insira o seu e-mail" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira o seu e-mail';val_email();">
						<a id="email_error"></a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Password*</label>
					<div class="col-sm-9">
						<input id="password" name="password" type="password" class="form-control" placeholder="Escolha uma password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Escolha uma password';val_password();">
						<a id="password_error"></a>
					</div>
				</div>
				<div id="password-ver-form" class="form-group">
					<label class="col-sm-3 control-label">Verificar Password*</label>
					<div class="col-sm-9">
						<input id="password_ver" name="password_check" type="password" class="form-control" placeholder="Re-escreva a sua password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Re-escreva a sua password';val_password_ver();">
						<a id="password_ver_error"></a>
					</div>
				</div>
				<label for="">Data de nascimento* </label>
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
				<!-- fileinput credits too http://jasny.github.io/bootstrap/-->
				<div class="form-group">
					<!-- <div class="avatar col-sm-7">-->
						<label class="col-sm-2 control-label">Género</label>
						<div class="col-sm-3">
							<select id="gender" name="gender" class="form-control">
								<option value="masculino">Masculino</option>
								<option value="feminino">Feminino</option>
								<option value="outro">Outro</option>
							</select>
						</div>
						<div class="col-sm-6">
							<div class="checkbox">
								<label> * <input id="terms" type="checkbox"/>Concordo com os <a href="{$BASE_URL}/terms.php" target="_blank" style="color: #3498DB">termos e condições.</a></label>
								<a id="terms_error"></a>
							</div>
						</div>
				</div>
				<div class="panel-footer">
					<a class="btn btn-lg btn-success btn-block mg-top" onclick="val_register();">Registar</a>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- final register-form -->
{include file="common/footer.tpl"}
