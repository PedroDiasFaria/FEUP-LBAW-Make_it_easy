function chargeTable(value){

	table = $(".user-table");
	table.empty();
	
	var label;
	var buttons;
	
        $.ajax({
            url: '../actions/charge_users.php',
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
				if( answer.length == 0 )
					alert("There was nothing found on the database!");
				else{
					for(k = 0 ; k < answer.length  ; k++){
						if(answer[k]["userstatus"] == "ATIVO"){
							label = "<span class=\"label label-success\">";
							buttons = "<button onclick=\"changeUserStatus(this.value, this.title);\" value="+answer[k]["id"]+" title=\"reativar\" class=\"btn btn-success disabled\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-ok\"></span>  </button><button id=\""+answer[k]["username"]+"\" value="+answer[k]["id"]+" value="+answer[k]["id"]+" title=\"suspender\" class=\"btn btn-warning suspender\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-bullhorn\"></span>  </button><button  value="+answer[k]["id"]+" title=\"banir\"class=\"btn btn-danger\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-remove\"></span> </button>";
						}
						if(answer[k]["userstatus"] == "BANIDO"){
							label = "<span class=\"label label-danger\">";
							buttons = "<button onclick=\"changeUserStatus(this.value, this.title);\" value="+answer[k]["id"]+" title=\"reativar\" class=\"btn btn-success\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-ok\"></span>  </button><button id=\""+answer[k]["username"]+"\" value="+answer[k]["id"]+" title=\"suspender\" class=\"btn btn-warning suspender\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-bullhorn\"></span>  </button><button onclick=\"changeUserStatus(this.value, this.title);\" value="+answer[k]["id"]+" title=\"banir\"class=\"btn btn-danger disabled\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-remove\"></span> </button>";
						}
						if(answer[k]["userstatus"] == "SUSPENSO"){
							label = "<span class=\"label label-warning\">";
							buttons = "<button onclick=\"changeUserStatus(this.value, this.title);\" value="+answer[k]["id"]+" title=\"reativar\" class=\"btn btn-success\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-ok\"></span>  </button><button id=\""+answer[k]["username"]+"\" value="+answer[k]["id"]+" title=\"suspender\" class=\"btn btn-warning disabled suspender\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-bullhorn\"></span>  </button><button onclick=\"changeUserStatus(this.value, this.title);\" value="+answer[k]["id"]+" title=\"banir\"class=\"btn btn-danger\" href=\"table.php#\"><span class=\"glyphicon glyphicon-admin glyphicon-remove\"></span> </button>";
						}
						table.append("<tr><td><h5>"+answer[k]["id"]+"</h5></td><td><h5>"+answer[k]["username"]+"</h5></td><td><h5>"+label+answer[k]["userstatus"]+"</span></h5></td><td>"+buttons+"</td>");
					}
					$('#usersTable').dataTable();
				}
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
}

function changeUserStatus(id, status){
	
	var dataString = "id="+id+"&status="+status;
        $.ajax({
            url: '../actions/change_user_status.php',
            data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
				
				if(answer){
					alert('Alteração efetuada com sucesso');
					window.location.reload();
				}
				     
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
}

function suspendUser(id, date){
	
	var dataString = "id="+id+"&date="+date;
        $.ajax({
            url: '../actions/suspend_user.php',
            data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
				
				if(answer){
					alert('Alteração efetuada com sucesso.');
					window.location.reload();
				}
				     
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
}
	

$( document ).ready(function() {

	$('#btn-close-sus').click(function() {
		$( "#show-susp" ).css("display", "none");
	});	

	$('.user-table').on('click', 'tr .suspender', function () {

		$(".username").empty();
		$(".id-username").empty();
		$(".username").append($(this).attr('id'));
		$(".id-username").append($(this).attr('value'));

    	$('#show-susp').show();
    	$('html,body').animate({ scrollTop: 0 }, 'slow');

	} );

	$('#btn-susp').click(function(){

		$('.error').empty();
		years = $( "#years option:selected" ).text();
		months = $( "#months option:selected" ).attr('value');
		days = $( "#days option:selected" ).text();
		if(years == "Ano" || months == "Months" || days =="Dia"){
			$('#error').append('<div class="error">Preencha todos os campos corretamente.</div>')
		}else{
			$('#error').empty();
			date = years+'-'+months+'-'+days;
			suspendUser($(".id-username").text(), date);
			$( "#show-susp" ).css("display", "none");
		}
		
	});

});