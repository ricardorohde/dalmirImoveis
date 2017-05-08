

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

function updateUser()
{

	$object = {};
	if( $("#newConfirmPass").val() != '' && $("#newPass").val() != '' )
	{
		$object['new_pass'] = $("#newPass").val();
		$object['new_confirm_pass'] = $("#newConfirmPass").val();	

		if( $("#newConfirmPass").val() != $("#newPass").val() )	
		{
			$("#content-profile-modal").html('<i class="fa fa-user-times" aria-hidden="true"></i>');
			$("#content-description-modal").html('Senhas não são iguais');
			$("#modalProfile").modal();
			return false;		
		}

	}

	if( $("#edtNameAdmin").val() != '' )
	{	
		$object['nome_admin'] = $("#edtNameAdmin").val();
	}

	if( $("#edtLogin").val() != '' )
	{	
		$object['login_admin'] = $("#edtLogin").val();
	}		

	$("#content-profile-modal").html('<i class="fa fa-user" aria-hidden="true"></i>');
	$("#content-description-modal").html('Usuário cadastrado com sucesso!');
	
	$.ajax({
	    type: 'POST',
	    url: 'data/user/userUpdate.php',
	    data: $object,
	    success: function(data) 
	    { 
	    	console.log(data);
	    	$("#modalProfile").modal();	
	   	}
	    
	});	
}