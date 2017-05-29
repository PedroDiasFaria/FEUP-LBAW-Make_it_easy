/******************************************NOSSO CÓDIGO*****************************************/
name ="";
var name_isValid = false;

description ="";
var description_isValid = false;

dateDue = "";
var dateDue_isValid = false;

createdBy = "";
var createdBy_isValid = false;

function val_name(){
	name = $("#name").val();
	var user_pat = /^[a-zA-Z0-9àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
	if (user_pat.test(name)) {
		$("#name_error").empty();
		name_isValid = true;
		$('#name').addClass('form-success');
		$("#name").removeClass( "form-error" );
	} else if (!name) {
		$("#name_error").empty();
		$("#name_error").append("<label class=\"col-sm-12 error bradius\"> O nome não pode estar vazio.</label>");
		$('#name').removeClass('form-success');
		$('#name').addClass('form-error');
		name_isValid = false;
	} else {
		name_isValid = false;
		$("#name_error").empty();
		$("#name_error").append("<label class=\"col-sm-12 error bradius\"> O nome não é valido.</label>");
		$('#name').removeClass('form-success');
		$('#name').addClass('form-error');
	}
}

function val_description(){
	description = $("#description").val();
	if (description) {
		$("#description_error").empty();
		description_isValid = true;
		$('#description').addClass('form-success');
		$("#description").removeClass( "form-error" );
	} else if (!description) {
		$("#description_error").empty();
		$("#description_error").append("<label class=\"col-sm-12 error bradius\"> A mensagem não pode estar vazia.</label>");
		$('#description').addClass('form-error');
		$('#description').removeClass('form-success');
		description_isValid = false;
	} else {
		description_isValid = false;
		$("#description_error").empty();
		$('#description').addClass('form-error');
	}
}


function val_project(){

	var years = $('#years').val();
	var months = $('#months').val();
	var days = $('#days').val();

	var dateDue = years+'-'+months+'-'+days+" 00:00:00";

	if( !name || !description || !dateDue) {
		$("#message").empty();
		$("#message").append("<label class=\"text-center col-sm-12 error bradius\">Preencha todos os campos obrigatórios.</label>");
		
		if(!name){
			$("#name").removeClass("form-error form-success");
			$('#name').addClass('form-error');
		}
		
		if(!description){
			$("#description").removeClass("form-error form-success");
			$('#description').addClass('form-error');
		}
		
		if(!dateDue){
			$("#dateDue").removeClass("form-error form-success");
			$('#dateDue').addClass('form-error');
		}
	}
	
	if(name_isValid && description_isValid){
		
		var dataString = "name="+name + "&description="+description + "&dateDue="+ dateDue;
		$.ajax({
			assync: false,
			url: '../actions/action_new_project.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				if(answer > 0){
					window.location.replace("simpleproject.php?id="+answer);
				} else {
					$("#message").empty();
					$("#message").append("<label class=\"text-center col-sm-12 error bradius\">Houve um erro a enviar a mensagem. Tente mais tarde.</label>");
					$("#name").removeClass("form-error form-success");
					$('#name').addClass('form-error');	
					$("#description").removeClass("form-error form-success");
					$('#description').addClass('form-error');
					$("#dateDue").removeClass("form-error form-success");
					$('#dateDue').addClass('form-error');
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
		});

	}


}