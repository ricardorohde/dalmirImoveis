<?php

	require('../class.php');
	$params = $_POST;
	
	if($params['action'] == 'insert')
	{
		$insert = "insert into ".$params['tabela']." set ";
		$insert .= " ".$params['atributo']." = '".$params['value']."' ";

		if($params['tabela'] == 'bairros')
			$insert .= ", cod_cidade = '".$params['cod_cidade']."' ";

		MysqlCustom::execQuery($insert);

	}

	if($params['action'] == 'update')
	{
		$update = "update ".$params['tabela']." set ";
		$update .= " ".$params['atributo']." = '".$params['value']."' ";

		if($params['tabela'] == 'bairros')
			$update .= ", cod_cidade = '".$params['cod_cidade']."' ";

		$update .= " where ".$params['pk']." = ".$params['codigo'];
		echo $update;
		MysqlCustom::execQuery($update);

	}


	if($params['action'] == 'list')
	{
		$select = "select * from ".$params['tabela'];
		if($params['tabela'] == 'bairros') 
				$select .= ' where cod_cidade = '.$params['cod_cidade'];

		$resource = MysqlCustom::querySql($select);
		$echo = '';

		$i = 0;
		while($row = MysqlCustom::fetch($resource))
		{
			$i++;
	        $echo .= '<div class="col-md-8 col-sm-10 col-xs-10">
	            <form class="callus clearfix border_radius submit_property">
	              <div class="row">
	                <div class="col-md-12">
	                    <div class="single-query bottom20">
	                      <div class="single-query form-group bottom20">
	                        <input value="'.$row[$params['atributo']].'" id="inputTable_'.$i.'" type="text" class="keyword-input" placeholder="">
	                      </div>
	                    </div>
	                </div>
	              </div>
	            </form>
	        </div>
	        <div class="col-md-4 col-sm-2 col-xs-12">
	          <div class="select-pro-list">
	            <a href="#" data-toggle="modal" onclick="updateValue('.$row[$params['pk']].', \'#inputTable_'.$i.'\')"><span style="display: none" class="codigo">'.$row[$params['pk']].'</span><i class="icon-pen2"></i></a>
	            

	          </div>
	        </div>';	

	        //	            <a href="#" data-toggle="modal" data-target="#myModal"><span style="display: none" class="codigo">'.$row[$params['pk']].'</span><i class="icon-cross"></i></a>		
		}

		echo $echo;
	}

