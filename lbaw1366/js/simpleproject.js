function loadProject(id, coordenador,baseurl) {

	projectcontent = $("#projectcontent");
	var label;
	var buttons;

	var dataString = "project=" + id;

	$.ajax({
		async: false,
		url : '../api/simpleproject_loadById.php',
		data : dataString,
		dataType : 'json',
		type : 'POST',
		success : function (data, textStatus, jqXHR) {
			var project = JSON.parse(jqXHR.responseText);
			if (project.length == 0)
				alert("Project not found on the database!");
			else {
				dataString = "users=" + project['id'];
				$.ajax({
					async: false,
					url : '../api/simpleproject_loadById.php',
					data : dataString,
					dataType : 'json',
					type : 'POST',
					success : function (data, textStatus, jqXHR) {
						var users = JSON.parse(jqXHR.responseText);
						var usersDiv = "";

						for (k = 0; k < users.length; k++) {
							if (k == 0) {
								usersDiv += "<p id='"+ users[k]['id'] +"' class='list-group-item'> <a href='../user/profile.php?id=" + users[k]['id'] + "'>Coordenador: " + users[k]['username'] + "</a></p>";
							} else {
								usersDiv += "<p id='"+ users[k]['id'] +"' class='list-group-item'> <a href='../user/profile.php?id=" + users[k]['id'] + "'>Participante: " + users[k]['username'] +"</a>";

								if(coordenador == 1)
									usersDiv += "<span title='Eliminar da equipa' id='"+ users[k]['id'] +"' onclick='delete_user_from_team("+id+",this.id)' class='glyphicon glyphicon-remove pull-right pointer'></span></p>";
								else
									usersDiv += "</p>";
							}
						}

						//load each task and its respective comment thread
						var taskcommentsDiv = "";
						dataString = "tasks=" + project['id'];
						$.ajax({
							async: false,
							url : '../api/simpleproject_loadById.php',
							data : dataString,
							dataType : 'json',
							type : 'POST',
							success : function (data, textStatus, jqXHR) {
								var tasks = JSON.parse(jqXHR.responseText);
								var tasksDiv = "";
								
								for (j = 0; j < tasks.length; j++) {								
									tasksDiv +=	"<div class='panel panel-default'>" +
													"<div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion' href='#collapse" + (j + 1) + "'>#" + (j + 1) + " " + tasks[j]['name'] + "</a><span id='"+tasks[j]['id']+"' onclick='edit_task(this.id)' title='Editar' class='glyphicon glyphicon-pencil pull-right pointer'></span></h4>" +
													"</div>" +
													"<div id='collapse" + (j + 1) + "' class='panel-collapse collapse'>" +
														"<div class='panel-body'>" +
															"<div class='col-md-3'><b>Prioridade</b>" +
															"</div>" +
															"<div id='priority-"+tasks[j]['id']+"' class='col-md-9'>" + tasks[j]['taskpriority'] +
															"</div>" +
															"<div class='col-md-3'><b'>Objectivo</b>" +
															"</div>" +
															"<div class='col-md-9 task-obje-"+tasks[j]['id']+"'>" + tasks[j]['description'] +
															"</div>" +
															"<div class='col-md-3'><b>Estado</b>" +
															"</div>" +
															"<div class='col-md-9'><span class='label label-success'><b><span class='task-status-"+tasks[j]['id']+"'>" + tasks[j]['taskstatus'] + "</span></b></span>" +
															"</div>" +
															"<div class='col-md-3'><b>Progresso (<span class='progress-nr-"+tasks[j]['id']+"'>" + tasks[j]['progress'] + "</span>%)&nbsp;</b><span id='"+tasks[j]['id']+"' onclick='dec_prog(this.id)' class='glyphicon glyphicon-minus-sign pointer'></span><span id='"+tasks[j]['id']+"' onclick='inc_prog(this.id)' class='glyphicon glyphicon-plus-sign pointer'></span>" +
															"</div>" +
															"<div class='col-md-9'>" +
																"<div class='progress'>" +
																	"<div class='progress-bar progress-bar-success progress-bar-sucess-"+tasks[j]['id']+"' role='progressbar' aria-valuenow='" + tasks[j]['progress'] + "' aria-valuemin='0' aria-valuemax='100' style=\"width: " + tasks[j]['progress'] + "%\">"+
																	"</div>" +
																"</div>" +
															"</div>"+
															"<div id='edit-task-"+tasks[j]["id"]+"' class='col-md-12'><div class='col-md-12'><b>Objectivo</b>" +
															"</div>" +
																"<input id='task-edit-"+tasks[j]["id"]+"' type=\"text\" class=\"form-control\" placeholder=\"Insira o objectivo da tarefa\" ><br>"+
																"<div id='radio-form' class=\"form-group\">"+
																	"<label class=\"col-lg-2 control-label\">Prioridade</label>"+
																	"<div id='pri-edit' class=\"col-lg-10\">"+
																		"<div class=\"radio-inline\">"+
																			"<label>"+
																			"<input type=\"radio\" name='radioEdit"+tasks[j]["id"]+"' id='BAIXA'>Baixa"+
																			"</label>"+
																		"</div>"+
																		"<div class=\"radio-inline\">"+
																			"<label>"+
																			"<input type=\"radio\" name='radioEdit"+tasks[j]["id"]+"' id='MEDIA'>Média"+
																			"</label>"+
																		"</div>"+
																		"<div class=\"radio-inline\">"+
																			"<label>"+
																			"<input type=\"radio\" name='radioEdit"+tasks[j]["id"]+"' id='ALTA'>Alta"+
																			"</label>"+
																		"</div>"+
																	"</div>"+
																"</div><a id='"+tasks[j]['id']+"' onclick='update_task(this.id)' class=\"btn btn-primary\">Editar tarefa</a></div>"+
														"</div>" +
													"</div>"+
												"</div>";
								}
								
								//load each comment thread
								var projectcommentsDiv = "";
								dataString = "projectcomments=" + project['id'];
								$.ajax({
									async: false,
									url : '../api/simpleproject_loadById.php',
									data : dataString,
									dataType : 'json',
									type : 'POST',
									success : function (data, textStatus, jqXHR) {
										var projectcomments = JSON.parse(jqXHR.responseText);
										if (projectcomments == false) {
											projectcommentsDiv =	"<div class='col-md-12'><h3><span class='glyphicon glyphicon-comment'></span>Comentários: 0</h3><hr>"+
																		"<div class='list-group'>Sem comentários."+
																		"</div>"+
																	"</div>"+
																	"<div class='col-md-12'><hr><h3><span class='glyphicon glyphicon-comment'></span>Seja o primeiro a comentar</h3><hr><textarea class='form-control' rows='5' cols='20' placeholder='Comentário'></textarea>"+
																	"</div>";
										} else {
											//gets each comment feedback count and displays the comment
											projectcommentsDiv+= "<table id='forum-comments' class='table' cellspacing='0' width='100%'>"+
											                                    "<tbody class='forum-comments'>";
											for (j = 0; j < projectcomments.length; j++) {
												dataString = "commentfeedback=" + projectcomments[j]['id'];
												$.ajax({
													async: false,
													url : '../api/simpleproject_loadById.php',
													data : dataString,
													dataType : 'json',
													type : 'POST',
													success : function (data, textStatus, jqXHR) {
														var commentfeedback = JSON.parse(jqXHR.responseText);
														var projectcommentsSize = projectcomments.length;
														/*projectcommentsDiv =	"<div class='col-md-12'><h3></span>Comentários: " + projectcommentsSize + "</h3><hr>"+
																				"</div>"+
																				"<div class='col-md-12'><h3>Título do tópico</h3>"+
																					"<div class='col-md-1'><img class='img-responsives' src='../" + projectcomments[j]['avatar']+ "' width='100%' height='100%' style=\"max-width:100px;\" alt='Avatar'/>"+
																					"</div>"+
																					"<div class='col-md-11' style='text-align:justify;'><b>"+ projectcomments[j]['name'] + " " + projectcomments[j]['surname']+ ":</b><br><hr>"+
																						"<div class='list-group'>" + projectcomments[j]['comment'] +
																						"</div>"+
																						"<br><b><span class='glyphicon glyphicon-thumbs-up'></span> Gosto (" + commentfeedback['pos'] + ") </b><b><span class='glyphicon glyphicon-thumbs-down'></span> Não gosto (" + commentfeedback['neg'] +") </b>"+//<b><span class='glyphicon glyphicon-share-alt'></span>Responder</b>"+
																					"</div>" + 
																				"</div>";*/
														projectcommentsDiv+= "<tr><td><div class='media'>"+
																					  "<a class='pull-left'>"+
																					    "<img class='media-object' src='"+baseurl+projectcomments[j]['avatar']+"' alt='Avatar'>"+
																					  "</a>"+
																					  "<div class='media-body'>"+
																					  "<h4 class='media-heading'>"+projectcomments[j]['username']+"</h4>"+
																					    projectcomments[j]['comment']+
																					  "</div>"+
																					"</div>"+
																					"</td></tr>";
											                                
													},
													error : function (jqXHR, textStatus, errorThrown) {
														alert(textStatus + ": " + errorThrown);
													}
												});
											}

											projectcommentsDiv+=    "</tbody>"+"</table>";
											projectcommentsDiv +=	"<div class='col-md-12'><hr><h3><span class='glyphicon glyphicon-comment'></span>Novo Comentário</h3><hr><textarea class='form-control' rows='5' cols='20' placeholder='Comentário'></textarea>"+
																"</div>";// +
																//"<ul class='pagination pagination-sm'><li class='disabled'><span>&laquo;</span></li><li class='active'><span>1 <span class='sr-only'>(current)</span></span></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>4</a></li><li><a href='#'>5</a></li><li><a href='#'>&raquo;</a></li></ul>";
										}

										var create_task = "<div id='add-new-task'><span title='Fechar formulário de criar tarefa' onclick='hide_new_task();' class='glyphicon glyphicon-remove pull-right pointer'></span><div class=\"\">"+
													"<div class=\"panel-heading\">"+
														"<span class=\"glyphicon glyphicon-folder-open\"></span>"+
														"<h4 class=\"panel-title\"> Criar tarefa</h4>"+
													"</div>"+
													"<div class=\"panel-body\">"+
														"<div class=\"list-group\">"+
															"<form class=\"form-horizontal\" role=\"form\">"+
																"<div class=\"form-group\">"+
																	"<label class=\"col-sm-2 control-label\">Nome da tarefa *</label>"+
																	"<div class=\"col-sm-9\">"+
																		"<input id='task-name' type=\"text\" class=\"form-control\" placeholder=\"Insira o nome da tarefa\" >"+
																	"</div>"+
																"</div>"+
																"<div class=\"form-group\">"+
																	"<label class=\"col-sm-2 control-label\">Descrição *</label>"+
																	"<div class=\"col-sm-9\">"+
																		"<textarea id='taks-description' class=\"form-control\" rows=\"5\" cols=\"25\" placeholder=\"Insira a descrição da tarefa\"></textarea>"+
																	"</div>"+
																	"<div id='radio-form' class=\"form-group\">"+
																		"<label class=\"col-lg-2 control-label\">Prioridade</label>"+
																		"<div class=\"col-lg-10\">"+
																			"<div class=\"radio-inline\">"+
																				"<label>"+
																				"<input type=\"radio\" name=\"radioOpt\" id='BAIXA'>Baixa"+
																				"</label>"+
																			"</div>"+
																			"<div class=\"radio-inline\">"+
																				"<label>"+
																				"<input type=\"radio\" name=\"radioOpt\" id='MEDIA'>Média"+
																				"</label>"+
																			"</div>"+
																			"<div class=\"radio-inline\">"+
																				"<label>"+
																				"<input type=\"radio\" name=\"radioOpt\" id='ALTA'>Alta"+
																				"</label>"+
																			"</div>"+
																		"</div>"+
																	"</div>"+
																"</div>"+
															"<a onclick='create_new_task("+id+")' class=\"btn btn-primary\">Criar</a>"+
															"</form>"+
														"</div>"+
													"</div>"+
												"</div></div>";

										var htmlContent =	"<div class='col-md-8'>"+
																"<div id='projectname' class='alert alert-info fade in'>" + project['name'] +
																"</div>"+
															"</div>"+
															"<div class='col-md-4'>"+
																"<div class='alert alert-warning fade in'>Data limite: "+project['datedue']+
																"</div>"+
															"</div>"+
															/*"<div class='col-md-3'>"+
																"<div class='alert alert-warning fade in'><h3>Exportar para PDF</h3>"+
																"</div>"+
															"</div>"+*/
															"<div class='col-md-12'><!-- Nav tabs --><ul class='nav nav-tabs'><li class='active'><a href='#description' data-toggle='tab'><span class='glyphicon glyphicon-book'></span> Descrição</a></li><li><a href='#team' data-toggle='tab'><span class='glyphicon glyphicon-bookmark'></span>Equipa</a></li><li><a href='#tasks' data-toggle='tab'><span class='glyphicon glyphicon-tasks'></span>Tarefas</a></li><li><a href='#forum-for-project' data-toggle='tab'><span class='glyphicon glyphicon-comment'></span>Fórum do projeto</a></li></ul><!-- Tab panes -->"+
																"<div class='tab-content last-cont'>"+
																	"<div class='tab-pane fade in active' id='description'>"+
																		"<div class='col-md-12 tab-content' style='text-align: justify;'>"+
																			"<div class='tab-inside-content'>" + project['description'] +
																			"</div>"+
																		"</div>"+
																	"</div>"+
																//"</div>"+
																"<div class='tab-pane fade in' id='team'>"+
																	"<div class='col-md-12 tab-content' style='text-align: justify;'>"+
																		"<div class='tab-inside-content'>" + usersDiv;
																		
																		if(coordenador == 1)
																			htmlContent+= "<h1 onclick='show_add_element();' class='btn btn-default btn-success btn-block'>Adicionar elemento</h1>"+
																				"<div id='add-element' class='form-group'>"+
																					"<div class='col-md-12'>"+
																						"<label class='control-label'>Novo elemento </label><span title='Fechar formulário de adicionar elemento' onclick='hide_add_element();' class='glyphicon glyphicon-remove pull-right pointer'></span>"+
																						"<input id='new-element' type='text' class='form-control' placeholder=\"Insira o novo elemento da equipa\" onFocus='this.placeholder=\"\"' onBlur='this.placeholder=\"Insira o novo elemento da equipa\"' list='usernames'>"+
																						"<datalist id='usernames'></datalist>"+
																					"</div>"+
																					"<div class='col-md-2'>"+
																						"<button onclick='add_element_team("+id+")' class='btn btn-primary btn-group-xs'>Adicionar</button>"+
																					"</div>"+
																				"</div>";


																		htmlContent+="</div>"+
																	"</div>"+
																"</div>"+
																//"<div class='tab-pane fade in' id='timer'>"+
																	//"<div class='tab-inside-content'><span id='countdown' class='text-center'></span>"+
																	//"</div>"+
																//"</div>"+
																"<div class='tab-pane fade in' id='tasks'>"+
																	"<div class='col-md-12 tab-content' style='text-align: justify;'>"+
																		"<div class='tab-inside-content'>"+
																			"<div class='panel-group' id='accordion'>" + tasksDiv +
																			"</div>"+
																		"</div>"+
																		"<div class='col-md-12'><h2 onclick='show_new_task();' class='btn btn-default btn-success btn-block'>Adicionar nova tarefa</h2>"+
																		"</div>"+
																	"</div>"+create_task+
																"</div>"+
																//"<div class='tab-pane fade in' id='forecasts'>"+
																//"</div>"+
																"<div class='tab-pane fade in' id='forum-for-project'>" + projectcommentsDiv +
																"</div>"+
															"</div>";

										projectcontent.append(htmlContent);
										comments = $(".forum-comments");
										
										$('#forum-comments').dataTable();

										$( ".preloader" ).css("display", "none");
									},
									error : function (jqXHR, textStatus, errorThrown) {
										alert(textStatus + ": " + errorThrown);
									}
								});
							},
							error : function (jqXHR, textStatus, errorThrown) {
								alert(textStatus + ": " + errorThrown);
							}
						});
					},
					error : function (jqXHR, textStatus, errorThrown) {
						alert(textStatus + ": " + errorThrown);
					}
				});
			}
		},
		error : function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}


function delete_user_from_team(projectID, userID){

	dataString = "projid="+projectID+"&userid="+userID;
	
	$.ajax({
		url: '../actions/delete_user_from_team.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			$( "#team .tab-inside-content #"+userID).css("display", "none");
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
    });

}

function show_add_element(){
	$('#add-element').css("display", "inline");
}

function show_new_task(){
	$('#add-new-task').css("display", "inline");
}

function hide_new_task(){
	$('#add-new-task').css("display", "none");
}

function hide_add_element(){
	$('#add-element').css("display", "none");
}

function add_element_team(projectID){
	correctUserSelected = false;
	$('#usernames').children('option').each(function () {
		if(this.value == $('#new-element').val()){
			var id = this.id;
			correctUserSelected = true;
			
			dataString = "projid="+projectID+"&userid="+id;
	
			$.ajax({
				url: '../actions/add_element_team.php',
				data: dataString,
				dataType: 'json',
				type: 'POST',
				success: function (data, textStatus, jqXHR) {
					var answer = JSON.parse(jqXHR.responseText);
					hide_add_element();
					$("#team .tab-inside-content p:last-of-type").after("<p  class='list-group-item'><a>Participante: " + $('#new-element').val()  +"</a><span title='Eliminar da equipa' class='glyphicon glyphicon-remove pull-right pointer'></span></p>");

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
}

function get_usernames(){
	
	$.ajax({
		async: false,
		url: '../actions/get_usernames.php',
		dataType: 'json',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			for(i = 0; i < answer.length; i++){
				$("#usernames").append('<option id='+answer[i]["id"]+' value="'+answer[i]["username"]+'">');
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}

function inc_prog(id){
	
	inr = $('.progress-nr-'+id).text();
	parse = parseInt(inr);
	if(parse < 100){
		fnr = parse + 5;
		$('.progress-nr-'+id).empty();
		$('.progress-nr-'+id).append(fnr);
		$('.progress-bar-sucess-'+id).css("width", fnr+"%");

		if(fnr >= 100){
			dataString = "id="+id+"&comp="+fnr+"&status=FECHADO";
			$('.task-status-'+id).empty();
			$('.task-status-'+id).append('FECHADO');
		}else{
			dataString = "id="+id+"&comp="+fnr+"&status=ABERTO";
		}

			$.ajax({
				url: '../actions/update_task.php',
				data: dataString,
				dataType: 'json',
				type: 'POST',
				success: function (data, textStatus, jqXHR) {
					var answer = JSON.parse(jqXHR.responseText);
					for(i = 0; i < answer.length; i++){
						$("#usernames").append('<option id='+answer[i]["id"]+' value="'+answer[i]["username"]+'">');
					}
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert(textStatus + ": " + errorThrown);
				}
			});
	}

}

function dec_prog(id){
	
	inr = $('.progress-nr-'+id).text();
	parse = parseInt(inr);
	if(parse > 0){
	fnr = parse - 5;
		$('.progress-nr-'+id).empty();
		$('.progress-nr-'+id).append(fnr);
		$('.progress-bar-sucess-'+id).css("width", fnr+"%");
	}

	dateString = "id="+id+"&comp="+fnr+"&status=ABERTO";
	if(parse == 100){
		$('.task-status-'+id).empty();
		$('.task-status-'+id).append('ABERTO');
	}

		$.ajax({
			url: '../actions/update_task.php',
			data: dateString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				for(i = 0; i < answer.length; i++){
					$("#usernames").append('<option id='+answer[i]["id"]+' value="'+answer[i]["username"]+'">');
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
		});
}

function create_new_task(id){

	title = $("#task-name").val();
	description =  $("#taks-description").val();
	priority = $('input[name=radioOpt]:checked').attr('id');

	dataString = "id="+id+"&title="+title+"&description="+description+"&priority="+priority;


	$.ajax({
			url: '../actions/create_new_task.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				alert("Tarefa criada com sucesso");
				location.reload(true);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
	});

}

function edit_task(id){
	priority = $('#priority-'+id).text();
	$('#pri-edit #'+priority).prop('checked', true);
	$('#edit-task-'+id).toggle();
}

function update_task(idTask){

	description = $('#task-edit-'+idTask).val();
	priority = $('input[name=radioEdit'+idTask+']:checked').attr('id');

	dataString = "id="+idTask+"&description="+description+"&priority="+priority;

		$.ajax({
			url: '../actions/edit_task.php',
			data: dataString,
			dataType: 'json',
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
				var answer = JSON.parse(jqXHR.responseText);
				//sucesso
				$('.task-obje-'+idTask).empty();
				$('.task-obje-'+idTask).append(description);
				alert('Tarefa editada com sucesso');
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert(textStatus + ": " + errorThrown);
			}
	});


}