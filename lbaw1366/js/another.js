function charge_projects(id){

	projects = $(".my-projects");
	projects.empty();
	
	dataString = "id="+id+"&bool=false";
	
	$.ajax({
		url: '../actions/charge_projects.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			for(i = 0; i<answer.length; i++){
				projects.append('<tr id="'+answer[i]["id"]+'" onclick="redirectToProject(this.id);">'+
									'<td>'+answer[i]["name"]+'</td>'+
									'<td>'+answer[i]["username"]+'</td>'+
									'<td>'+answer[i]["datedue"]+'</td>'+
								'</tr>');
			}
			
			$('#my-projects').dataTable();

		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
    });

}

function redirectToProject(id){
	window.location.replace("../project/simpleproject.php?id="+id);
}

function charge_tasks(baseURL, id){

	tasks = $(".my-tasks");
	tasks.empty();
	
	dataString = "id="+id+"&bool=false";
	
	$.ajax({
		url: '../actions/charge_tasks.php',
		data: dataString,
		dataType: 'json',
		type: 'POST',
		success: function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			for(i = 0; i<answer.length; i++){
				priority = answer[i]["taskpriority"];
	        		if(priority == "ALTA")
	        			classe1 = 'style="color: red;"';
	        	    if(priority == "MEDIA")
	        			classe1 = 'style="color: orange;"';
	        	    if(priority == "BAIXA")
	        			classe1 = 'style="color: green;"';
					tasks.append('<tr id="'+answer[i]["project"]+'" onclick="redirectToProject(this.id);">'+
									'<td>'+answer[i]["name"]+'</td>'+
									'<td '+classe1+'>'+answer[i]["taskpriority"]+'</td>'+
									'<td> '+answer[i]["taskstatus"]+'</td>'+
									'<td>'+answer[i]["datedue"]+'</td>'+
								'</tr>');
			}
			
			$('#my-tasks').dataTable();

		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
    });
}
