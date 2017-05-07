<?php

	require_once("PHPMailer/PHPMailerAutoload.php");
	require_once("../class.php");
	
	$params = $_POST;	
	var_dump($_POST);
	 $mail = new PHPMailer();
	// // Define os dados do servidor e tipo de conexão
	// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->IsSMTP(); // Define que a mensagem será SMTP
	 $mail->Host = "br850.hostgator.com.br"; // Endereço do servidor SMTP	 
	 $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	 $mail->Username = 'envio@dalmirimoveis.imb.br'; // Usuário do servidor SMTP
	 $mail->Password = 'd@lmirim0veis'; // Senha do servidor SMTP
	 $mail->Port = 587;
	 $mail->SMTPSecure = 'tls';
	 // Define o remetente
	 // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->From = "envio@dalmirimoveis.imb.br"; // Seu e-mail
	 $mail->FromName = "Administrativo"; // Seu nome
	 $mail->CharSet = 'utf-8';
	// // Define os destinatário(s)
	// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 $mail->AddAddress('alberto.pimentel.94@gmail.com', 'Interesse em Imóvel');
	 //$mail->AddAddress('alberto_bc_sc@hotmail.com');
	 //$mail->AddCC('administrativo@queromorarem.com.br', 'Ciclano'); // Copia
	 // $mail->AddBCC('administrativo@queromorarem.com.br', 'Interesse em Imóvel'); // Cópia Oculta
	
	 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML	 
	 $mail->Subject  = "Contato - Quero morar em "; // Assunto da mensagem
	 // $email = file_get_contents('visitante-proprietario-email.php');
	 // $email = str_replace("#URL#", $url, $email);
	 // $email = str_replace("#COD_IMOVEL#", $imagem['cod_imovel_char'], $email);
	 // $email = str_replace('#NOME#', $arrayContatoProprietario['nome_pessoa'], $email);
	 // $email = str_replace('#CONTATO#', $arrayContatoProprietario['contato_pessoa_telefone'].' - '.$arrayContatoProprietario['contato_pessoa_email'], $email);
	 // $email = str_replace('#MSG#', $arrayContatoProprietario['comentario'], $email);
	 // $mail->body =  file_get_contents('visitante-proprietario-email.php');
	 // $mail->body = str_replace("#URL#", $url, $mail->body);
	 $mail->Body = 	"$email";
	// $mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
	 // Define os anexos (opcional)
	 // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	 //$mail->AddAttachment("contrato.pdf", "contrato.pdf");  // Insere um anexo
	// Envia o e-mail
	$enviado = $mail->Send();
	 $result = array();

	 if($enviado){
	 	$result["status"] = "success";
	 }else{
	 	$result["status"] = "error";
	 }

	 echo json_encode($result);
	
?>