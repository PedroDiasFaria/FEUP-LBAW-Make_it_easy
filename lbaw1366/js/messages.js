var messagesArray;

function charge_messages(id_user){

	received = $(".messages-received");
	received.empty();
	sent = $(".messages-sent");
	sent.empty();
	
		var dataString = "id="+id_user;
		
        $.ajax({
			async: false,
            url: '../actions/charge_messages.php',
			data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
                messagesArray = answer;
					if( answer.length == 0 )
					alert("There was nothing found on the database!");
					else{
						for(k = 0 ; k < answer.length  ; k++){
							if(answer[k]['attachmentpresence'])atc = "<span class=\"glyphicon glyphicon-paperclip\">"; else atc = "";
							
							if(answer[k]['folder'] == "recebidas" && answer[k]['touser'] == id_user){
								if(!answer[k]['readstatus'])readStatus = "class=\"sms_unreaded\"";else readStatus ="class=\"sms_readed\"";
								datesent = answer[k]["datesent"];
								datesentarr = datesent.split(".");
								
								received.append(
									'<tr id='+answer[k]["id"]+' '+readStatus+' >'+
										'<td><div class="checkbox"><label><input id='+answer[k]["id"]+' type="checkbox"></label></div></td>'+
										'<td class="msg_line">'+answer[k]["fromusername"]+'</td>'+
										'<td class="msg_line">'+answer[k]["subject"]+'</td>'+
										'<td class="msg_line">'+atc+'</td>'+
										'<td class="msg_line">'+datesentarr[0]+'</td>'+
									'</tr>');
									
							}
							
							if(answer[k]['folder'] == "recebidas" && answer[k]['fromuser'] == id_user){
								datesent = answer[k]["datesent"];
								datesentarr = datesent.split(".");
								
								sent.append(
									'<tr id='+answer[k]["id"]+' >'+
										'<td><div class="checkbox"><label><input id='+answer[k]["id"]+' type="checkbox"></label></div></td>'+
										'<td class="msg_sent">'+answer[k]["tousername"]+'</td>'+
										'<td class="msg_sent">'+answer[k]["subject"]+'</td>'+
										'<td class="msg_sent">'+atc+'</td>'+
										'<td class="msg_sent">'+datesentarr[0]+'</td>'+
									'</tr>');
							}
							
						}
					$('#messages-received').dataTable();
					$('#messages-sent').dataTable();
					
				}
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
        });
}


function check_nr_msg_to_read(base_dir, id_user){
	var dataString = "id="+id_user;
	$.ajax({
            url: base_dir+'/actions/count_unread_msg.php',
			data: dataString,
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var answer = JSON.parse(jqXHR.responseText);
				$(".msg-2-read").empty();
				if(answer["count"] == 1) {
					$(".msg-2-read").append(answer["count"] + ' mensagem');
				}
				else {
					$(".msg-2-read").append(answer["count"] + ' mensagens');
				}
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
    });
}

$( document ).ready(function() {
	$( "#btn-send-msg" ).click(function() {
		correctUserSelected = false;
		$('#usernames').children('option').each(function () {
			if(this.value == $('#auto_users').val()){
				var id = this.id;
				correctUserSelected = true;
			dataString="from="+$("#from").attr("name")+"&dest="+$('#auto_users').val()+"&subj="+$('#subject').val()+"&msg="+$('#message').val();
					
			$.ajax({
				url: '../actions/send_message.php',
				data : dataString,
				dataType: 'json',
				type: 'POST',
				success: function (data, textStatus, jqXHR) {
					/*var _file = document.getElementById('_file');
					var _progress = document.getElementById('_progress');

					if(_file.files.length === 0){
						return;
					}else{

						var data = new FormData();
						data.append('SelectedFile', _file.files[0]);

						var request = new XMLHttpRequest();
						request.onreadystatechange = function(){
							if(request.readyState == 4){
								try {
									var resp = JSON.parse(request.response);
								} catch (e){
									var resp = {
										status: 'error',
										data: 'Unknown error occurred: [' + request.responseText + ']'
									};
								}
								//console.log(resp.status + ': ' + resp.data);
							}
						};

						request.upload.addEventListener('progress', function(e){
							_progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
						}, false);

						request.open('POST', '../actions/uploadMsgAtc.php');
						request.send(data);
					}
					*/
					alert('Mensagem enviada');
					window.location.replace('messages.php');
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert(textStatus + ": " + errorThrown);
				}
			
			});
			}
		});
		if(correctUserSelected != true) {
			alert("Por favor escolha um dos utilizadores sugeridos");
		}
	});

	$('.sel_all_sms').click(function() {
		var tab = $('.tab-content .tab-pane.active').attr('id');
		$(' #'+tab+' input[type="checkbox"]').prop('checked',true);
	});	
			
	$('.un_all_sms').click(function() {
		var tab = $('.tab-content .tab-pane.active').attr('id');
		$('#'+tab+' input[type="checkbox"]').prop('checked',false);
	});	

	$('.sel_read_sms').click(function() {
		var tab = $('.tab-content .tab-pane.active').attr('id');
		$('#'+tab+' input[type="checkbox"]').prop('checked',false);
		$('#'+tab+' .sms_readed input[type="checkbox"]').prop('checked',true);
	});

	$('.sel_unread_sms').click(function() {
		var tab = $('.tab-content .tab-pane.active').attr('id');
		$('#'+tab+' input[type="checkbox"]').prop('checked',false);
		$('#'+tab+' .sms_unreaded input[type="checkbox"]').prop('checked',true);
	});

	$('.btn-refresh').click(function() {
		location.reload();
	});	
	
	$('.btn-delete').click(function() {
		var tab = $('.tab-content .tab-pane.active').attr('id');
		var msg2delete ="";
		
		$('#'+tab+' input[type="checkbox"]:checked').each(function( index ) {
				msg2delete += $(this).attr('id') + " ";
		});
		
		dataString = "ids="+msg2delete;

		if(dataString != "ids="){
		
			$.ajax({
				async: false,
				url: '../actions/delete_messages.php',
				data : dataString,
				dataType: 'json',
				type: 'POST',
				success: function (data, textStatus, jqXHR) {
					location.reload();
	            },
	            error: function (jqXHR, textStatus, errorThrown) {
	                alert(textStatus + ": " + errorThrown);
	            }
			
			});
		}
		
	});

	$('#btn-close-msg').click(function() {
		$( "#show_message" ).css("display", "none");
	});	


	$('.tab-content').on('click', 'tr .msg_line', function () {

		id = $(this).parent().attr('id');
		pos = -1;
		for(k = 0 ; k < messagesArray.length  ; k++){
			if(messagesArray[k]['id'] == id){
				pos = k;
				break;
			}
		}

		clean_message_zone();

    	$('#show_message .name').append(messagesArray[pos]['fromusername']);
    	$('#show_message .subject').append(messagesArray[pos]['subject']);
    	datesent = messagesArray[pos]["datesent"];
    	datesentarr = datesent.split(".");
    	$('#show_message .date').append(datesentarr[0]);
    	$('#show_message .message-body').append(messagesArray[pos]['contents']);

    	if(!messagesArray[pos]['readstatus']){
    		$('#messages-received #'+id).removeClass('sms_unreaded');
    		$('#messages-received #'+id).addClass('sms_readed');

    		dataString = "id="+id;
    		$.ajax({
				async: false,
				url: '../actions/change_msg_status.php',
				data : dataString,
				dataType: 'json',
				type: 'POST',
				success: function (data, textStatus, jqXHR) {
					//sucesso completar
	            },
	            error: function (jqXHR, textStatus, errorThrown) {
	                alert(textStatus + ": " + errorThrown);
	            }
			
			});

    	}

    	$('#show_message').show();
    	$('html,body').animate({ scrollTop: 0 }, 'slow');

	} );

$('.tab-content').on('click', 'tr .msg_sent', function () {

		id = $(this).parent().attr('id');
		pos = -1;
		for(k = 0 ; k < messagesArray.length  ; k++){
			if(messagesArray[k]['id'] == id){
				pos = k;
				break;
			}
		}

		clean_message_zone();

    	$('#show_message .name').append(messagesArray[pos]['tousername']);
    	$('#show_message .subject').append(messagesArray[pos]['subject']);
    	datesent = messagesArray[pos]["datesent"];
    	datesentarr = datesent.split(".");
    	$('#show_message .date').append(datesentarr[0]);
    	$('#show_message .message-body').append(messagesArray[pos]['contents']);

    	$('#show_message').show();
    	$('html,body').animate({ scrollTop: 0 }, 'slow');

	} );

});

function clean_message_zone(){
	$('#show_message .name').empty();
    $('#show_message .subject').empty();
    $('#show_message .date').empty();
    $('#show_message .message-body').empty();

}

function get_usernames(){
	
	$.ajax({
		async: false,
		url: '../actions/get_usernames.php',
		dataType: 'json',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			for(i = 0; i < answer.length; i++){
				$("#usernames").append('<option value="'+answer[i]["username"]+'">');
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}