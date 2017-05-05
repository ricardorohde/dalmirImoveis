

function requestLogin()
{
	var objUserLogin = {
		login : $("input[name=loginAdm").val(),
		senha : $("input[name=senhaAdm").val()
	}

	$.ajax({
	    type: 'POST',
	    url: 'data/user/userData.php',
	    // dataType: 'json',
	    data: objUserLogin,
	    success: function(data) 
	    { 
	    	console.log(data);
	    	var objJSON = jQuery.parseJSON(data);
	    	
	    	if(objJSON.logado) 
	    	{	    		
	    		$(location).attr("href", objJSON.data);
	    	}
	   	}
	    
	});
}

function requestLogout()
{
	$.ajax({
	    type: 'POST',
	    url: 'data/user/userLogout.php',
	    success: function(data) 
	    { 
	    	$(location).attr("href", 'login.php');
	   	}
	    
	});	
}