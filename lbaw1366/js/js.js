var currentYear = new Date().getFullYear();

function hover(element, id) {
    element.setAttribute('src', 'images/index/focus-'+id);
}
function unhover(element, id) {
    element.setAttribute('src', 'images/index/'+id);
}

function changeDays(val){
	
	var lastValue = parseInt($('.days-of-month option:last-child').val(), 10);
	var checkYear = parseInt($('.years :selected').val(), 10);
	
	if(val == '01' || val == '03' || val == '05' || val == '07' || val == '08' || val == '09' || val == '11'){
		var i=lastValue+1;
		for (i;i<=31;i++){
			if(i<10)
				$('.days-of-month').append('<option value="0'+i+'">'+i+'</option>');	
			else
				$('.days-of-month').append('<option value="'+i+'">'+i+'</option>');	
		}
	}else if(val != '2'){
		var i=lastValue+1;
		for (i;i<=30;i++){
			if(i<10)
				$('.days-of-month').append('<option value="0'+i+'">'+i+'</option>');	
			else
				$('.days-of-month').append('<option value="'+i+'">'+i+'</option>');	
		}
	}
	
	if(val == '2'){
	  if ( (!(checkYear % 4) && checkYear % 100) || !(checkYear % 400)) {
		if(lastValue == 28)
			$('.days-of-month').append('<option value="'+29+'">'+29+'</option>');
		else{
			for(var i=lastValue;i>29;i--)
				$('.days-of-month option[value="'+i+'"]').remove();
		}
	  }else
		for(var i=lastValue;i>28;i--)
			$('.days-of-month option[value="'+i+'"]').remove();
	}
	
}

/*function changeSearchText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}*/

window.onload = function(){
	footerChanges();
}

window.onresize = function(){
	footerChanges();
}

function getWinDim() { 
	var body = document.documentElement || document.body; 
	
	return { 
		x : window.innerWidth || body.clientWidth,
		y : window.innerHeight || body.clientHeight,
	} 
	
}

function footerChanges(){
	
	winDim = getWinDim();
	
	if(winDim.y < 368)
		document.getElementById("footer").className = "footer navbar navbar-default navbar-static-bottom";
	else
		document.getElementById("footer").className = "footer navbar navbar-default navbar-fixed-bottom";
		
}

function logout(){
	
	//window.location("../actions/logout.php"); 
	$.ajax({
            url: '/actions/logout.php',
            dataType: 'json',
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
				window.location.replace("index.php");  
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            }
    });
}

function charge_urgent_projects(baseURL, id){

	$.ajax({
        url: 'actions/charge_projects.php',
        data: "id="+id+"&bool="+"true",
        dataType: 'json',
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
        	answer = JSON.parse(jqXHR.responseText);
        	if(answer['http'] == "404 Not Found"){
        		$('#urgent-projects').append('<p class="list-group-item">Sem projetos a terminar na próxima semana.</p>');
        		$('.nr-urgent-projects').empty();
        		$('.nr-urgent-projects').append('0 projetos');
        	}else{
        		if(answer.length <5)
        			comp = answer.length;
        		else
        			comp =5;
	        	for (var i = 0; i < comp; i++) {
	        		datedue = answer[i]["datedue"];
					date = datedue.split(" ");
	        		$('#urgent-projects').append('<a href="'+baseURL+'project/simpleproject.php?id='+answer[i]["id"]+'" class="list-group-item">'+
															'<span class="label label-warning pull-right">Data limite: '+date[0]+'</span> '+
															answer[i]["name"]+
														 '</a>');
	        	}
	        	$('.nr-urgent-projects').empty();
				if(answer.length == 1) {
					$(".nr-urgent-projects").append(answer.length + ' projeto');
				}
				else {
					$(".nr-urgent-projects").append(answer.length + ' projetos');
				}
       		 }
			
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        }
    });
}

function charge_recents_projects(baseURL, id){

	$.ajax({
        url: 'actions/charge_projects.php',
        data: "id="+id+"&bool="+"false",
        dataType: 'json',
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
        	answer = JSON.parse(jqXHR.responseText);
        	if(answer['http'] == "404 Not Found")
        		$('#recent-projects').append('<p class="list-group-item">Sem projetos recentes.</p>');
        	else{
        		if(answer.length <5)
        			comp = answer.length;
        		else
        			comp =5;
	        	for (var i = 0; i<comp; i++) {
	        		var datestart = answer[i]["datestart"];
					date = datestart.split(" ");
	        		$('#recent-projects').append('<a href="'+baseURL+'project/simpleproject.php?id='+answer[i]["id"]+'" class="list-group-item">'+
															'<span class="label label-info pull-right">Data início: '+date[0]+'</span> '+
															answer[i]["name"]+
														 '</a>');
	        	}
       		 }
			
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        }
    });
}

function charge_recents_tasks(baseURL, id){

	$.ajax({
        url: 'actions/charge_tasks.php',
        data: "id="+id+"&bool="+"false",
        dataType: 'json',
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
        	var answer = JSON.parse(jqXHR.responseText);
        	if(answer['http'] == "404 Not Found")
        		$('#recent-tasks').append('<p class="list-group-item">Sem tarefas recentes.</p>');
        	else{
        		if(answer.length <5)
        			comp = answer.length;
        		else
        			comp =5;
	        	for (var i = 0; i < comp; i++) {
	        		priority = answer[i]["taskpriority"];
	        		if(priority == "ALTA")
	        			classe = 'class="label label-warning pull-right"';
	        	    if(priority == "MEDIA")
	        			classe = 'class="label label-info pull-right"';
	        	    if(priority == "BAIXA")
	        			classe = 'class="label label-default pull-right"';
	        		$('#recent-tasks').append('<a href="'+baseURL+'project/simpleproject.php?id='+answer[i]["project"]+'" class="list-group-item">'+
															'<span '+classe+'>Prioridade: '+priority+'</span> '+
															answer[i]["name"]+
														 '</a>');
	        	}
       		 }
			
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        }
    });
}


function charge_urgent_tasks(baseURL, id){

	$.ajax({
        url: 'actions/charge_tasks.php',
        data: "id="+id+"&bool="+"true",
        dataType: 'json',
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
        	var answer = JSON.parse(jqXHR.responseText);

        	if(answer['http'] == "404 Not Found"){
        		$('#urgent-tasks').append('<p class="list-group-item">Sem tarefas com alta prioridade.</p>');
        		$('.nr-urgent-tasks').empty();
        		$('.nr-urgent-tasks').append('0 tarefas');
        	}else{
        		if(answer.length <5)
        			comp = answer.length;
        		else
        			comp = 5;
				for (var i = 0; i <comp; i++) {
	        		$('#urgent-tasks').append('<a href="'+baseURL+'project/simpleproject.php?id='+answer[i]["project"]+'" class="list-group-item">'+
												'<span class="label label-warning pull-right">Prioridade: ALTA</span>'+
												answer[i]["name"]+
											  '</a>');
	        	}
	        	$('.nr-urgent-tasks').empty();
				
				if(answer.length == 1) {
					$(".nr-urgent-tasks").append(answer.length + ' tarefa');
				}
				else {
					$(".nr-urgent-tasks").append(answer.length + ' tarefas');
				}
       		 }
			
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        }
    });

}
