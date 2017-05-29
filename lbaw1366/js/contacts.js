/******************************************NOSSO CÓDIGO*****************************************/
name ="";
var name_isValid = false;

email ="";
var email_isValid = false;

subject = "";
var subject_isValid = false;

contents = "";
var contents_isValid = false;

function val_completename(){
	name = $("#name").val();
	var user_pat = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
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

function val_email() {
    // validate email
    email = $("#email").val();
    var email_pat = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i;
    if (email_pat.test(email)) {
    	$("#email_error").empty();
    	email_isValid = true;
    	$('#email').addClass('form-success');
    	$("#email").removeClass( "form-error" );
    } else if(!email) {
    	$("#email_error").empty();
    	$("#email_error").append("<label class=\"col-sm-12 error bradius\"> O email não pode estar vazio.</label>");
    	$('#email').addClass('form-error');
    	$('#email').removeClass('form-success');
    	email_isValid = false;
    } else {
    	email_isValid = false;
    	$("#email_error").empty();
    	$("#email_error").append("<label class=\"col-sm-12 error bradius\"> O email não é valido.</label>");
    	$('#email').addClass('form-error');
    	$('#email').removeClass('form-success');
    }
}

function val_subject(){
	subject = $("#subject").val();
	if (subject) {
		$("#subject_error").empty();
		subject_isValid = true;
		$('#subject').addClass('form-success');
		$("#subject").removeClass( "form-error" );
	} else if (!subject) {
		$("#subject_error").empty();
		$("#subject_error").append("<label class=\"col-sm-12 error bradius\"> O assunto não pode estar vazio.</label>");
		$('#subject').addClass('form-error');
		$('#subject').removeClass('form-success');
		subject_isValid = false;
	} else {
		subject_isValid = false;
		$("#subject_error").empty();
		$('#subject').addClass('form-error');
	}
}

function val_contents(){
	contents = $("#contents").val();
	if (contents) {
		$("#contents_error").empty();
		contents_isValid = true;
		$('#contents').addClass('form-success');
		$("#contents").removeClass( "form-error" );
	} else if (!contents) {
		$("#contents_error").empty();
		$("#contents_error").append("<label class=\"col-sm-12 error bradius\"> A mensagem não pode estar vazia.</label>");
		$('#contents').addClass('form-error');
		$('#contents').removeClass('form-success');
		contents_isValid = false;
	} else {
		contents_isValid = false;
		$("#contents_error").empty();
		$('#contents').addClass('form-error');
	}
}

function val_contact(){

    /*if (name_isValid && surname_isValid && username_isValid && email_isValid && password_isValid && password_ver_isValid) {

		//adicionar ao if a verificação da data também e fazer ajax aqui.


	}*/
	if( !name || !email || !subject || !contents) {
		$("#message").empty();
		$("#message").append("<label class=\"text-center col-sm-12 error bradius\">Preencha todos os campos obrigatórios.</label>");
		
		if(!name){
			$("#name").removeClass("form-error form-success");
			$('#name').addClass('form-error');
		}
		
		if(!email){
			$("#email").removeClass("form-error form-success");
			$('#email').addClass('form-error');
		}
		
		if(!subject){
			$("#subject").removeClass("form-error form-success");
			$('#subject').addClass('form-error');
		}
		
		if(!contents){
			$("#contents").removeClass("form-error form-success");
			$('#contents').addClass('form-error');
		}
	}
	
	if(name_isValid && email_isValid && subject_isValid && contents_isValid){
		
		var dataString = "name="+name + "&email="+email + "&subject="+ subject + "&contents="+ contents;
		$.ajax({
			url: 'actions/action_contacts.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				if(answer == "Sucesso"){
					window.location.replace("out_message.php?type=contact");
				} else {
					$("#message").empty();
					$("#message").append("<label class=\"text-center col-sm-12 error bradius\">Houve um erro a enviar a mensagem. Tente mais tarde.</label>");
					$("#name").removeClass("form-error form-success");
					$('#name').addClass('form-error');	
					$("#email").removeClass("form-error form-success");
					$('#email').addClass('form-error');
					$("#subject").removeClass("form-error form-success");
					$('#subject').addClass('form-error');
					$("#contents").removeClass("form-error form-success");
					$('#contents').addClass('form-error');
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
		});

	}


}