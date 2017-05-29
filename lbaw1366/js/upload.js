$( document ).ready(function() {

	$('#_submit').click(function(){

		var _submit = document.getElementById('_submit');
		var _file = document.getElementById('_file');
		var _progress = document.getElementById('_progress');
		var _type = $('#_submit').attr('name');

		if(_file.files.length === 0){
	        return;
	    }

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
				if(resp.status == 'success') {
					location.reload(true);
				}

	            //console.log(resp.status + ': ' + resp.data);
	        }
	    };

	    request.upload.addEventListener('progress', function(e){
	        _progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
	    }, false);

	    if(_type === "_sAvatar"){
		    request.open('POST', '../actions/uploadAvatar.php');
		    request.send(data);
		}
	});

});