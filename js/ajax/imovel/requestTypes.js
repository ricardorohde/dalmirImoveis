function callModalDelete($code)
{
	$(".container-buttons-modal").find('button').show();
	$("#content-description-modal").html('Deseja ocultar este imóvel?');
    $("input[name=codigo_imovel_modal]").val($code);
    $("input[name=action_imovel_modal]").val('hide');
    $("#modalTypes").modal();
}

function callModalShow($code)
{
	$(".container-buttons-modal").find('button').show();
	$("#content-description-modal").html('Deseja que este imóvel apareça novamente?');
	$("input[name=codigo_imovel_modal]").val($code);
    $("input[name=action_imovel_modal]").val('show');
    $("#modalTypes").modal();	
}


function manipulateImovel()
{
	var $action = $("input[name=action_imovel_modal]").val();
	var $code = $("input[name=codigo_imovel_modal]").val();
	var $path = 'data/imovel/imovelHidden.php';
	var $msg = '';
	if($action == 'hide'){
		$path = 'data/imovel/imovelHidden.php';
		$msg = 'Imóvel ocultado com sucesso!';
	}else{
		$path = 'data/imovel/imovelShow.php';
		$msg = 'Imóvel desocultado com sucesso!'
	}

	$.ajax({
	    type: 'POST',
	    url: $path,
	    data: { codigo_imovel: $code },
	    success: function(data) 
	    { 
	    	console.log(data);
	    	$("#msgCallback").html($msg);
	    	$(".container-buttons-modal").find('button').hide();
	    	location.reload();
	   	}
	    
	});	
}

