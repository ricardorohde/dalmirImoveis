<?php

require("../class.php");

$result = array();
$result["status"] = "success";
$result["action"] = "redirect";
// $result["url"] = "success";
$result["data"] = "";


if(isset($_POST)){
	$user = new User();
	$success = $user->logar($_POST['login'], $_POST['senha']);
	$result["data"] = "submit_property.php";
	$result["logado"] = $user->logado;
	echo json_encode($result);

}


// $obj = new User();


