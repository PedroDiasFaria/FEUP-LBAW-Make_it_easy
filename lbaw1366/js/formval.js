/******************************************NOSSO CÓDIGO*****************************************/
var name ="";
var name_isValid = false;

var surname ="";
var surname_isValid = false;

var username = "";
var username_isValid = false;

var email = "";
var email_isValid = false;

var password = "";
var password_ver = "";
var password_isValid = false;
var password_ver_isValid = false;

// Função para que, ao carregar na tecla ENTER, se acione o click do botão de efetuar o registo
$(document).keyup(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $(".btn-enter").click();
    }	
});

function val_name(){
	name = $("#name").val();
	var user_pat = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
	 if (user_pat.test(name)) {
        $("#name_error").empty();
        name_isValid = true;
		$('#name').addClass('form-success');
		$("#name").removeClass( "form-error" );
    } else if (!name) {
        $("#name_error").empty();
		$( "#name" ).removeClass( "form-error form-success" );
        name_isValid = false;
    } else {
        name_isValid = false;
        $("#name_error").empty();
        $("#name_error").append("<label class=\"col-sm-12 error bradius\"> O nome não é valido.</label>");
		$('#name').addClass('form-error');
    }
}

function val_surname(){

	surname = $("#surname").val();
	var user_pat = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
	 if (user_pat.test(surname)) {
        $("#surname_error").empty();
        surname_isValid = true;
		$('#surname').addClass('form-success');
		$("#surname").removeClass( "form-error" );
    } else if (!surname) {
        $("#surname_error").empty();
		$( "#surname" ).removeClass( "form-error form-success" );
        surname_isValid = false;
    } else {
        surname_isValid = false;
        $("#surname_error").empty();
        $("#surname_error").append("<label class=\"col-sm-12 error bradius\"> O nome não é valido.</label>");
		$('#surname').addClass('form-error');
    }
}

function val_username() {
    // validate username
    username = $("#username").val();
    var user_pat = /^[a-z0-9-_\.]{5,20}$/i;
    if (user_pat.test(username)) {
		var dataString = "username=" + username;
        $.ajax({
            url: 'actions/check_username.php',
            data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
                if ( answer== "Esse nome de utilizador já existe na nossa base de dados.") {
					$("#username").removeClass("form-success");
					$("#username").addClass("form-error");
					$("#username_error").empty();
					$("#username_error").append("<label class=\"col-sm-12 error bradius\">"+answer+"</label>");
					username_isValid = false;
                } else {
					$("#username_error").empty();
					username_isValid = true;
					$("#username").addClass("form-success");
					$("#username").removeClass( "form-error" );
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
    } else if (!username) {
        $("#username_error").empty();
		$( "#username" ).removeClass( "form-error form-success" );
        username_isValid = false;
    } else {
        username_isValid = false;
		$("#username").removeClass( "form-success" );
		$("#username").addClass("form-error");
        $("#username_error").empty();
        $("#username_error").append("<label class=\"col-sm-12 error bradius\"> O nome de utilizador tem de ter entre 5-20 caracteres e não pode ter espaços.</label>");
		$('#username').addClass('form-error');
    }
}

function val_email() {
    // validate email
    email = $("#email").val();
    var email_pat = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i;
    if (email_pat.test(email)) {
		var dataString = "email=" + email;
		$.ajax({
            url: 'actions/check_email.php',
            data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
                if ( answer== "Esse e-mail já existe na nossa base de dados.") {
					$("#email").removeClass("form-success");
					$("#email").addClass("form-error");
					$("#email_error").empty();
					$("#email_error").append("<label class=\"col-sm-12 error bradius\">"+answer+"</label>");
					email_isValid = false;
                } else {
					$("#email_error").empty();
					email_isValid = true;
					$("#email").addClass("form-success");
					$("#email").removeClass( "form-error" );
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
    } else if (!email) {
        $("#email_error").empty();
		$("#email").removeClass("form-error form-success");
        email_isValid = false;
    } else {
        email_isValid = false;
        $("#email_error").empty();
        $("#email_error").append("<label class=\"col-sm-12 error bradius\"> Insira um e-mail válido.</label>");
		$('#email').addClass('form-error');
		$("#email").removeClass("form-success");
    }
}

function val_password(){
	password = $("#password").val();
	password_ver = $("#password_ver").val();
	var password_pat = /((?=.*\d)(?=.*[a-z]).{6,20})/i;
	
	if(password_pat.test(password)){
		$("#password_error").empty();
		$("#password").addClass("form-success");
		$("#password").removeClass("form-error");	
		password_isValid = true;
	}else if(!password){
		$("#password_error").empty();
		$("#password" ).removeClass("form-error form-success");
        password_isValid = false;
	}else{
		$("#password").removeClass("form-success");
		$("#password").addClass("form-error");
		$("#password_error").empty();
        $("#password_error").append("<label class=\"col-sm-12 error bradius\">A password tem de ter entre 6 e 20 caracteres. <br>Deve ainda conter pelo menos uma letra ou um número.</label>");
		password_isValid = false;
	}
	
	if(password != password_ver && password_ver){
		$("#password").removeClass("form-error form-success");
		$("#password_ver").removeClass("form-error form-success");
		$("#password").addClass("form-error");
		$("#password_ver").addClass("form-error");
		$("#password_ver_error").empty();
		$("#password_ver_error").append("<label class=\"col-sm-12 error bradius\"> As passwords estão diferentes.<br>Confirme as passwords novamente.</label>");
	}else if(password && password == password_ver){
		$("#password_ver_error").empty();
		$("#password").removeClass("form-error form-success");
		$("#password").addClass("form-success");
		$("#password_ver").removeClass("form-error form-success");
		$("#password_ver").addClass("form-success");
	}
	
}

function val_password_ver() {

	password = $("#password").val();
    password_ver = $("#password_ver").val();
	
	if(password_ver == password && password_isValid){
		$("#password_error").empty();
		$("#password_ver_error").empty();
		$("#password").removeClass("form-error form-success");
		$("#password").addClass("form-success");
		$("#password_ver").removeClass("form-error form-success");
		$("#password_ver").addClass("form-success");
		password_ver_isValid = true;
	}else if(!password_ver){
		$("#password_ver_error").empty();
		$("#password").removeClass("form-error form-success");
		$("#password_ver").removeClass("form-error form-success");
        password_ver_isValid = false;
	}else{
		$("#password").removeClass("form-error form-success");
		$("#password_ver").removeClass("form-error form-success");
		$("#password").addClass("form-error");
		$("#password_ver").addClass("form-error");
		$("#password_ver_error").empty();
		$("#password_ver_error").append("<label class=\"col-sm-12 error bradius\"> As passwords estão diferentes.<br>Confirme as passwords novamente.</label>");
		password_ver_isValid = false;
	}
}


function val_register(){
	var years = $('#years').val();
	var months = $('#months').val();
	var days = $('#days').val();
	var gender = $("#gender").val();

	var inputdate = years+'-'+months+'-'+days;
	dob = new Date(inputdate);
	var today = new Date();
	var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
	if(age >= 13){
		age_isValid = true;
		$("#dob_error").empty();
		$("#dob_error").removeClass("form-error form-success");
	}
	else{
		$("#dob_error").empty();
        $("#dob_error").append("<label class=\"col-sm-12 error bradius\">Tem de ter, no mínimo, 13 anos.</label>");
		$('#dob_error').addClass('form-error');
		age_isValid = false;
	}

	if($('input[type="checkbox"]').is(':checked')){
		terms_isValid = true;
		$("#terms_error").empty();
		$("#terms_error").removeClass("form-error");
	}else{
		$("#terms_error").empty();
        $("#terms_error").append("<label class=\"col-sm-12 error bradius\">Tem de aceitar os termos e condições.</label>");
		$('#terms_error').addClass('form-error');
		terms_isValid = false;
	}

    if( !name || !surname || !username || !email || !password || !password_ver || $('#years').val() == 'Ano' || $('#months').val() == 'Mes' || $('#days').val() == 'Dia') {
       	 $("#message").empty();
       	 $("#message").append("<label class=\"text-center col-sm-12 error bradius\">Preencha todos os campos obrigatórios.</label>");
		
		if(!name){
			$("#name").removeClass("form-error form-success");
			$('#name').addClass('form-error');
		}
		
		if(!surname){
			$("#surname").removeClass("form-error form-success");
			$('#surname').addClass('form-error');
		}
		
		if(!username){
			$("#username").removeClass("form-error form-success");
			$('#username').addClass('form-error');
		}
		
		if(!email){
			$("#email").removeClass("form-error form-success");
			$('#email').addClass('form-error');
		}
		
		if(!password){
			$("#password").removeClass("form-error form-success");
			$('#password').addClass('form-error');
		}
		
		if(!password_ver){
			$("#password_ver").removeClass("form-error form-success");
			$('#password_ver').addClass('form-error');
		}

		if($('#years').val() == 'Ano'){
			$("#years").removeClass("form-error form-success");
			$('#years').addClass('form-error');
		}

		if($('#months').val() == 'Mes'){
			$("#months").removeClass("form-error form-success");
			$('#months').addClass('form-error');
		}

		if( $('#days').val() == 'Dia'){
			$("#days").removeClass("form-error form-success");
			$('#days').addClass('form-error');
		}

    }
	
	if(name_isValid && surname_isValid && username_isValid && email_isValid && password_isValid && password_ver_isValid && age_isValid && terms_isValid){
		var dataString = "name="+name+"&surname="+surname+"&username="+username+"&email="+email+"&password="+password+"&year="+years+ "&month="+months+ "&day="+days+"&gender="+gender;
		$.ajax({
            url: 'actions/action_register.php',
            data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
				window.location.replace("out_message.php?type=register");     
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
	
	}
}

function forgot_password(){
	email = $('.forgot-password').val();

	dataString = "email="+email;

	$.ajax({
		url: 'actions/forgot_password.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			$("#error-forgot").empty();
			if(answer["http"] == "200 OK")
				$("#error-forgot").addClass('success');
			else if(answer["http"] == "404 Not Found")
				$("#error-forgot").addClass('error');
			$("#error-forgot").append("<label class=\"control-label\">"+answer["answer"]+"</label>");
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});

} 			

function validate_login() {
	username = $("#username_login").val();
	password = $("#password_login").val();
	
	var dataString = "username="+username+"&password="+password;
	
	 $.ajax({
		url: 'actions/action_login.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			
			if(answer["answer"]){
				$("#error-login").empty();
				$("#error-login").addClass('error');
				$("#error-login").append("<label class=\"control-label\">"+answer["answer"]+"</label>");
			}else{
				
				var expires_day = 365;
				if ($('#rememberme').is(':checked')) {
					$.cookie('pm[username]', $('#username_login').val(), { expires: expires_day });
					$.cookie('pm[password]', $('#password_login').val(), { expires: expires_day });
					$.cookie('pm[remember]', true, { expires: expires_day });
				}
				else {
					$.cookie('pm[username]', '');
					$.cookie('pm[password]', '');
					$.cookie('pm[remember]', false);
				}
				window.location.replace("index.php");   
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}

$(document).ready(function() {
  var remember = $.cookie('pm[remember]');
  if (remember) {
    user = $('#username_login').val($.cookie('pm[username]'));
    $('#password_login').val($.cookie('pm[password]'));
   	if(user.val() =='') 
   		$('#rememberme').attr("checked", false);
   	else
   		$('#rememberme').attr("checked", true);
  }
});