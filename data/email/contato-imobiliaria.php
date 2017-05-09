<?php

	require_once("PHPMailer/PHPMailerAutoload.php");
	require_once("../class.php");
	
	try 
	{
			$params = $_POST;	
			$mail = new PHPMailer(true);
			$mail->IsSMTP(); // Define que a mensagem será SMTP
			$mail->Host = "br850.hostgator.com.br"; // Endereço do servidor SMTP	 
			$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
			$mail->Username = 'envio@dalmirimoveis.imb.br'; // Usuário do servidor SMTP
			$mail->Password = 'd@lmirim0veis'; // Senha do servidor SMTP
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->From = "envio@dalmirimoveis.imb.br"; // Seu e-mail
			$mail->FromName = "Contato ".$params['nome_visitante']; // Seu nome
			$mail->CharSet = 'utf-8';			
			$mail->AddAddress('contato@dalmirimoveis.imb.br', 'Interesse em Imóvel');
			$mail->AddCC('dalmirimoveis@hotmail.com');
			$mail->IsHTML(true); // Define que o e-mail será enviado como HTML	 
			$mail->Subject  = "Contato - Imobiliária "; // Assunto da mensagem
			$email = file_get_contents('email_template.html');			 
			$email = str_replace("#ASSUNTO", "Contato com Imobiliária", $email);
			$email = str_replace("#NOME", $params['nome_visitante'], $email);
			$email = str_replace("#TELEFONE", $params['telefone_visitante'], $email);
			$email = str_replace("#EMAIL", $params['email_visitante'], $email);
			$email = str_replace("#TEXTO", $params['mensagem_visitante'], $email);
			$mail->Body = $email;
			$result = array();

			if(!$mail->Send()) {
			   $result["status"] = $mail->ErrorInfo;
			} else {
			   $result["status"] = 'success';
			}			
	}catch(Exception $e){
			$result["status"] = $e->getMessage();
	}
	echo json_encode($result);
	
?>