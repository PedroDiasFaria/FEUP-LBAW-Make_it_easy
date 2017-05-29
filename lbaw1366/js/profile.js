var answer;

function charge_profile(){

	var results = new RegExp('[\?&]' + 'id' + '=([^&#]*)').exec(window.location.href);
 
	dataString =  "id="+ results[1];
	//dataString = "id="+id;

	$.ajax({
		assync: true,
		url: '../actions/charge_profile.php',
		data: dataString,
		dataType: 'json',
		type: 'GET',
		success: function (data, textStatus, jqXHR) {
			answer = JSON.parse(jqXHR.responseText);
			src = $('#avatar').attr("src");
			
			if(answer.length > 1) {
				$('.edit').attr('id', answer[0]["id"]);
				$('#avatar').attr("src",""+src+answer[0]["avatar"]);
				$('#username').append(answer[0]["username"]);
				$('#name').append(answer[0]["name"]+' '+answer[0]["surname"]);
				$('#email').append(answer[0]["email"]);
				$('#birth').append(answer[0]["birth"]);
				$('#gender').append(answer[0]["gender"]);
				$('#bio').append(answer[0]["bio"]);
				$('#web-page').append(answer[0]["webpage"]);
				datestart = answer[0]["datestart"];
				datestartattr = datestart.split(".");
				$('#register').append(datestartattr[0]);
				for(i = 0; i < answer.length-1; i++)
					$('#skills').append('<span class="label label-warning"><b>'+answer[i]["skill"]+'</b></span> ');
			}
			else {
				$('#avatar').attr("src",""+src+answer["avatar"]);
				$('#username').append(answer["username"]);
				$('#name').append(answer["name"]+' '+answer["surname"]);
				$('#email').append(answer["email"]);
				$('#birth').append(answer["birth"]);
				$('#gender').append(answer["gender"]);
				$('#bio').append(answer["bio"]);
				$('#web-page').append(answer["webpage"]);
				datestart = answer["datestart"];
				datestartattr = datestart.split(".");
				$('#register').append(datestartattr);
				$('#skills').append('<span><b>Sem skills</b></span>');
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
    });
}

$( document ).ready(function() {
	$('#btn-close-edit-profile').click(function() {
		$("#show-profile").css("display", "none");
		$('html,body').animate({ scrollTop: 0 }, 'slow');
	});
	$('.breadcrumb').on('click', '.edit', function () {
		$('#show-profile').show();
    	$("html, body").animate( { scrollTop: $("#show-profile").height()  } , 1000);
    	$('#wp-edit').val(answer[0]["webpage"]);
    	$('#am-edit').val(answer[0]["bio"]);
	} );
	
	$('#btn-close-change-password').click(function() {
		$("#change-password").css("display", "none");
		$('html,body').animate({ scrollTop: 0 }, 'slow');
	});	
	$('.passwordChange').on('click', function () {
		$('#change-password').show();
    	$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	} );
});


function saveProfile(id){
	webpage = $('#wp-edit').val();
	bio = $('#am-edit').val();

	if(!webpage)
		webpage = "	Sem webpage";

	if(!bio)
		bio = "Sem biografia";

		dataString = "id="+id+"&web="+webpage+"&bio="+bio;

		$.ajax({
			url: '../actions/update_profile.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				location.reload();
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
		});
}

function changePassword(id){
	newpassword = $('#password').val();

	dataString = "id="+id+"&pass="+newpassword;

	if(current_pass_isValid && password_isValid && password_ver_isValid){
		$.ajax({
			url: '../actions/change_password.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				alert("Password alterada com sucesso");
				$.cookie("pm[remember]", null, { path: '/' });
				$.cookie('pm[username]', null, { path: '/' });
				$.cookie('pm[password]', null, { path: '/' });
				location.reload();
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
		});
	}
}

function val_password_current(username, baseurl) {
	password = $("#current_password").val();	
	var dataString = "username="+username+"&password="+password;
	
	$.ajax({
		url: baseurl+'actions/action_login.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			if(answer["answer"]){
				$("#current_password_error").empty();
				$("#current_password_error").append("<label class=\"col-sm-12 error bradius\">Password incorreta</label>");
				$("#current_password").empty();
				$("#current_password").removeClass("form-error form-success");
				$("#current_password").addClass("form-error");
				password_ver_isValid = false;
			}else{	
				$("#current_password_error").empty();
				$("#current_password").removeClass("form-error form-success");
				$('#current_password').addClass('form-success'); 
				current_pass_isValid = true;
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}

function get_skills(){
        $.ajax({
            url: '../actions/get_skills.php',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                    var answer = JSON.parse(jqXHR.responseText);
                    for(i = 0; i < answer.length; i++){
                            $("#skills-edit").append('<option value="'+answer[i]["skill"]+'">');
                    }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                    alert(textStatus + ": " + errorThrown);
            }
        });
}
