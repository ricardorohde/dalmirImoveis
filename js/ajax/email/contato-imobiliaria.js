

function sendContact()
{
	$object = {};
	$object['nome_visitante'] = $("#edtName").val();
	$object['telefone_visitante'] = $("#edtTelefone").val();
	$object['email_visitante'] = $("#edtEmail").val();
	$object['mensagem_visitante'] = $("#edtMensagem").val();
	// $object['nome_visitante'] = $("#edtName").val();


	$.ajax({
        url: 'data/email/contato-imobiliaria.php',
        type: 'post',
        data: $object,
        success: function(response){
        	$("#modalEmail").modal();
        }
    });
}

function sendVisit()
{
	$object = {};
	$object['nome_visitante'] = $("#edtName").val();
	$object['telefone_visitante'] = $("#edtTelefone").val();
	$object['email_visitante'] = $("#edtEmail").val();
	$object['mensagem_visitante'] = $("#edtMensagem").val();
	$object['codigo_imovel'] = $("#p_cod_imovel").html();
	$object['titulo_imovel'] = $("#p_titulo_imovel").html();

	$.ajax({
        url: 'data/email/contato-imovel.php',
        type: 'post',
        data: $object,
        success: function(response){
        	$("#modalEmail").modal();
        }
    });
}