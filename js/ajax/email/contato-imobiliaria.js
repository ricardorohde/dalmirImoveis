

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
        // contentType: false,
        // processData: false,
        // dataType: 'json',
        success: function(response){
        	console.log(response);
        }
    });
}