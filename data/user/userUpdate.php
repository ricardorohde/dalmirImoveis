<?php

	
	require('../class.php');
	$params = $_POST;
	$update = "update usuario set login = '".$params['login_admin']."' , ";
	$update .= " name = '".$params['nome_admin']."' , ";
	
	if($params['new_pass'] != '')
		$update .= " password = '".$params['new_pass']."' ";
	// var_dump($update);
	MysqlCustom::execQuery($update);


