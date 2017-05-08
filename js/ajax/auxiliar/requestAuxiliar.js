
function buildObject()
{
	$object = {};
	$object['action'] = '';
	$object['value'] = $("#valueToInsert").val();
	


	switch($("#attr-view").val())
	{
	    case '1':
	    		$object['tabela'] = 'cidades';
	    		$object['atributo'] = 'nome_cidade';	    		
	    		$object['pk'] = 'cod_cidade';
	        break;
	    case '2':
	    		$object['tabela'] = 'bairros';
	    		$object['atributo'] = 'descricao';
	    		$object['cod_cidade'] = $("#cidade-bairro").val();
	    		$object['pk'] = 'cod_bairro';
	        break;
	    case '3':
				$object['tabela'] = 'diferencial_imovel';
				$object['atributo'] = 'descricao';
				$object['pk'] = 'cod_diferencial';
	        break;
	    default:
	        //
	}

	return $object;
}

function crudValue()
{
	$object = buildObject();
	$object['action'] = 'insert';
	
	if($object['value'] == '')
			return false;

	$.ajax({
        url: 'data/auxiliar/auxiliarData.php',
        type: 'post',
        data: $object,
        success: function(response){
        	$("#myModal").modal();
        }
    });	
}

function updateValue($elem, $value)
{
	$object = buildObject();
	$object['action'] = 'update';
	$object['codigo'] = $elem.toString();
	$object['value'] = $($value.toString()).val();
	
	if($object['value'] == '')
			return false;
		
	$.ajax({
        url: 'data/auxiliar/auxiliarData.php',
        type: 'post',
        data: $object,
        success: function(response){
        	console.log(response);
        	$("#myModal").modal();
        }
    });	
}

function listData()
{
	$object = buildObject();
	$object['action'] = 'list';

	$.ajax({
        url: 'data/auxiliar/auxiliarData.php',
        type: 'post',
        data: $object,
        success: function(data){
        	console.log(data);
        	$("#content-return-data").html(data.toString());
        }
    });	
}

function listDataBairros()
{

}


$(window).load(function(){

	$("#attr-view").change(function(){
		if($(this).val() == "2")
		{
			$(".cidade-choose").show();
		}else{
			$(".cidade-choose").hide();
		}
		listData();
	});

	$("#cidade-bairro").change(function(){
		listData();
	});	

});