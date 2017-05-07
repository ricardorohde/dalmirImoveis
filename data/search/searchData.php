<?php
	require('../class.php');

	$resource = null;
	
	// var_dump($_POST);
	if(isset($_POST))
	{

		$params = $_POST;

		if($params['mode'] == 'index')
				Imovel::listImoveisIndex($params);

		if($params['mode'] == 'page'){
				// var_dump($params);
				Imovel::listImoveisPage($params);
		}

		if($params['mode'] == 'page_admin')
				Imovel::listImoveisAdmin($params);

		if($params['mode'] == 'update_imovel')
				Imovel::getValuesImovel($params);

		if($params['mode'] == 'imoveis_menu'){
				Imovel::listImoveisMenu($params);			
		}

		

	}

	// var_dump($_POST);



