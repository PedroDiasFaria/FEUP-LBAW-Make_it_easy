$(document).ready(function(e){
	$('.search-panel span#search_concept').val('users');
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.search-panel span#search_concept').val(param);
		//$('.input-group #search_param').val(param);
	});
});

function runSearch(base_url) {
	var query = $("#search_param").val();
	var range = $("#search_concept").val();
	
	if(query.length < 3) {
		alert("Por favor introduza 3 ou mais caracteres");
	}
	else {
		var dataString = "?query=" + query + "&range=" + range;
		window.location.replace(base_url+'search.php'+dataString);
	}
}

function performSearch(base_url, query, range) {
	var dataString = "query=" + query + "&range=" + range;
	searchResults = $(".search-results");
	searchResults.empty();
	
	$.ajax({
		async: false,
		url : base_url+'api/search.php',
		data : dataString,
		dataType : 'json',
		type : 'POST',
		success : function (data, textStatus, jqXHR) {
			var answer = JSON.parse(jqXHR.responseText);
			$("#searchTerms").append(query);
			for(i = 0; i<answer.length; i++){
				searchResults.append('<tr id="'+answer[i]["id"]+'" onclick="redirectToUser(\''+base_url+'\', this.id);">'+
									'<td>'+answer[i]["username"]+'</td>'+
									'<td>'+answer[i]["name"]+' '+answer[i]["surname"]+'</td>'+
								'</tr>');
			}
			
			$('#search-results').dataTable();

		},
		error : function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ": " + errorThrown);
		}
	});
}

function redirectToUser(base_url, id){
	window.location.replace(base_url+"user/profile.php?id="+id);
}
