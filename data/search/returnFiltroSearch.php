<?php
	require('../class.php');

		
	Session::startSession();
	$object = null;
	$result['status'] = 'success';
	$result['object'] = $object;

	

	if(isset($_SESSION['page_filtro']))
	{
		$object = unserialize($_SESSION['page_filtro']);		
	}else{
		$object = Imovel::emptyFiltro();
		$_SESSION['page_filtro'] = serialize($object); 
	}

	$result['object'] = $object;
	if($object == null)
	{
		$result['result'] = 'error';
	}

	echo json_encode($result);