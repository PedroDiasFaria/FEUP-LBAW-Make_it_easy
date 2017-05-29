{include file="common/header.tpl" titulo="Perfil"}
<script type="text/javascript" src="{$BASE_URL}js/upload.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/profile.js"></script>
<script type="text/javascript" src="{$BASE_URL}js/formval.js"></script>
<script type="text/javascript">
   window.onload = function () {
   	charge_profile();
   	get_skills();
   }
</script>
<script type="text/javascript">
var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('Alterar avatar');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
 
$(document).ready(function() {
  $('.file-wrapper #_file').bind('change focus click', SITE.fileInputs);
});
</script>
		<div class="col-md-10">
			<ul class="breadcrumb" style="margin-bottom: 5px;">
				<li class="active">Perfil de {$s_username}</li>
				{if $is_mypro}<span class="glyphicon glyphicon-pencil pull-right edit"></span>{/if}
			</ul>
			<div class="row last-cont">
				<div class="col-md-12">
					<div class="media">
					  <div class="media-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumbnail">
									  <img id="avatar" class="img-responsive" src="{$BASE_URL}" alt="Avatar" style="max-width:100px;">
									  <div class="caption">
										<h3 id="username" class="text-center"><span id="username"></span></h3>
										{if $is_mypro}<p class="text-center"><a href="#" class="btn btn-primary passwordChange" role="button">Alterar password</a></p>{/if}
									  </div>
									</div>
								  </div>
								  <div class="col-sm-9">
								   <div class="panel panel-default">
									  <div class="panel-heading">
										  <h4 class="panel-title">
											 Informação pessoal
										  </h4>
									</div>
									<div class="panel-body list-group">
										<div class="list-group">
											<div class="list-group-item">
											<label class="col-sm-4"><b>Nome</b></label>
												<span id="name"></span>
											</div>
											
											<div class="list-group-item">
											<label class="col-sm-4"><b>Email</b></label>
												<span id="email"></span>
											</div>
											
											<div class="list-group-item">
											<label class="col-sm-4"><b>Data de Nascimento</b></label>
												<span id="birth"></span>
											</div>

											<div class="list-group-item">
											<label class="col-sm-4"><b>Sexo</b></label>
												<span id="gender"></span>
											</div>
											
											<div class="list-group-item">
											<label class="col-sm-4"><b>Registo</b></label>
												<span id="register"></span>
											</div>

											<div class="list-group-item">
											<label class="col-sm-4"><b>Página web</b></label>
												<span id="web-page"></span>
											</div>
											
											{if $is_mypro}
											<span class="list-group-item">
												<div class="file-wrapper">	
														<input name="SelectedFile" class="btn btn-primary teste" type="file" id="_file" accept="image/*">
														<span class="btn btn-primary button">Escolha um avatar</span>
												</div>
												<div class="btn-pro">
													<input type="button" id="_submit" name="_sAvatar" class="btn btn-primary" value="Enviar"></div>
												<div class="progress_outer">
													<div id="_progress" class="progress"></div>
												</div>
											</span>
											{/if}
										</div>
										</div>
									</div>
								  </div>
								  <div class="col-sm-12">
								   <div class="panel panel-default">
									  <div class="panel-heading">
										  <h4 class="panel-title">
											Sobre mim
										  </h4>
									</div>
									<div class="panel-body">
										<div class="list-group" style="text-align:justify;">
											<span id="bio"></span>
										</div>
										</div>
									</div>
								  </div>
								  <div class="col-sm-12">
								   <div class="panel panel-default">
									  <div class="panel-heading">
										  <h4 class="panel-title">
											Minhas skills
										  </h4>
									</div>
									<div class="panel-body">
										<div class="list-group" style="text-align:justify;">
											<span id="skills"></span>
										</div>
										</div>
									</div>
								  </div>
							</div>
					  </div>
					</div>
					
					<div id="show-profile" class="col-md-12 panel panel-default">
						<span class="page-title"> <span class="glyphicon glyphicon-pencil"></span> Editar perfil</span>
						<span class="pull-right"><span id="btn-close-edit-profile" class="glyphicon glyphicon-remove"></span></span>
						<form>
							<div class="row">
								<div class="col-md-12">
									<a id="profile"></a>
									<div class="form-group">
									<label class="control-label">Página web</label>
										<input id="wp-edit" name="subject" type="text" class="form-control" placeholder="Insira a sua página pessoal" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira a sua página pessoal';"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									<label class="control-label">Sobre mim</label>
										<textarea id="am-edit" class="form-control" rows="9" cols="25" placeholder="Escreva algo sobre si" onFocus="this.placeholder = ''" onBlur="this.placeholder='Escreva algo sobre si';"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									        <label class="col-sm-2 control-label">Skills</label>
									        <div class="col-sm-9">
									                <input id="auto_skills" type="text" class="form-control" placeholder="Insira uma skill" list="skills-edit">
									                <datalist id="skills-edit">
									                </datalist>
									        </div>
									</div>
								</div>
								<div class="col-md-12">
									<a class="btn btn-primary pull-right" onclick="saveProfile({$s_id});" id="btn-save-profile">Guardar</a>
								</div>
							</div>
						</form>
					</div>
					
					<div id="change-password" class="col-md-12 panel panel-default">
						<span class="page-title"> <span class="glyphicon glyphicon-pencil"></span> Alterar password</span>
						<span class="pull-right"><span id="btn-close-change-password" class="glyphicon glyphicon-remove"></span></span>
						<form>
							<div class="row">
								<div class="col-md-12">
									<a id="profile"></a>
									<div class="form-group">
									<label class="control-label">Password atual</label>
										<input id="current_password" name="subject" type="password" class="form-control" placeholder="Insira a sua password atual" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira a sua password atual';val_password_current('{$s_username}','{$BASE_URL}');"/>
										<a id="current_password_error"></a>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									<label class="control-label">Nova password</label>
										<input id="password" name="subject" type="password" class="form-control" placeholder="Insira a sua nova password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Insira a sua nova password';val_password();"/>
										<a id="password_error"></a>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									<label class="control-label">Confirmação da nova password</label>
										<input id="password_ver" name="subject" type="password" class="form-control" placeholder="Confirme a sua nova password" onFocus="this.placeholder = ''" onBlur="this.placeholder='Confirme a sua nova password';val_password_ver();"/>
										<a id="password_ver_error"></a>
									</div>
								</div>
								<div class="col-md-12">
									<a class="btn btn-primary pull-right" onclick="changePassword({$s_id});" id="btn-change-password">Modificar</a>
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
{include file="common/footer.tpl"}