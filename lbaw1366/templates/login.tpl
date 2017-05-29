{include file="common/header.tpl" titulo="Login" menu_login=1}
<script type="text/javascript" src="{$BASE_URL}js/formval.js"></script> 
<div class="container login-form">
<div class="panel panel-default">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-lock"></span> Login
	</div>
	<div class="panel-body">
		<form class="form-horizontal">					
			<div id="error-login">
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Utilizador</label>
				<div class="col-sm-9">
					<input id="username_login" name="username" type="text" class="form-control" autofocus
					{if $username} value="{$username}"
					{else} placeholder="Indique o seu nome de utilizador"
					{/if}
					onChange="this.placeholder = ''"
					onBlur="this.placeholder='Indique o seu nome de utilizador'">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-9">
					<input id="password_login" name="password" type="password" class="form-control" placeholder="Indique a sua password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Indique a sua password'">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<div class="checkbox">
						<label><input id="rememberme" type="checkbox"/>Lembrar-me</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a class="btn btn-success btn-block btn-enter" onclick="validate_login();">Entrar</a>
			</div>
		</form>
	</div>
	<div class="panel-footer">
		Não tem conta? <a href="{$BASE_URL}register.php"><b>Registe-se!</b></a>
	</div>
</div>
<!-- forgot-pass -->
<div class="forgot-pass">
	<div class="panel-group">
		<div class="panel panel-default">
			<div id="header-forgot" class="panel-heading">
				<h4 class="panel-title">
					<span class="glyphicon glyphicon-question-sign"></span> Esqueceu a password?
				</h4>
			</div>
			<div>
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div id="error-forgot">
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">E-mail</label>
									<div class="col-sm-9">
										<input type="text" class="form-control forgot-password" placeholder="Insira o seu e-mail de registo">
									</div>
								</div>
								<div class="panel-footer">
									<div>
										<a onclick="forgot_password();" class="btn btn-success btn-block">Pedir nova password</a>
									</div>
								</div>
							</form>
						</div>
						<div class="panel-footer">
							Uma <u>nova password</u> irá ser enviada para o seu e-mail.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- final forgot-pass -->
{include file="common/footer.tpl"}
