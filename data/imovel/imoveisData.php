<?php

require('../class.php');
Session::startSession();

$result = array();
$result['status'] = 'success';

		if(isset($_POST)){
			
			$imovelData = $_POST;
			// var_dump($_SESSION);
			if(isset($_SESSION['status'])){
				$imovelData['status'] = $_SESSION['status'];
				$imovelData['cod_imovel'] = $_SESSION['cod_imovel'];
			}
			
			//insert imoveis			
			$comando = '';
			if($imovelData['status'] == 'insert'){
				$comando = "insert into imoveis set";
			}else{
				$comando = "update imoveis set ";
			}

			$comando .= " titulo = '".addslashes($imovelData['titulo_imovel'])."', "  ;
			$comando .= " valor = ".$imovelData['valor_imovel'].", "  ;
			$comando .= " suite = ".$imovelData['suite_imovel'].", "  ;
			$comando .= " quartos = ".$imovelData['quartos_imovel'].","  ;
			$comando .= " oculto =  0,";
			$comando .= " garagem = ".$imovelData['imovel_garagem']." , ";
			$comando .= " endereco = '".addslashes($imovelData['endereco_imovel'])."', " ;
			$comando .= " descricao = '".addslashes($imovelData['descricao'])."', " ;
			$comando .= " video = '".addslashes($imovelData['video_imovel'])."', " ;
			$comando .= " deletado = 0, " ;
			$comando .= " cod_tipo = ".$imovelData['cod_tipo'].", " ;
			$comando .= " cod_bairro = ".$imovelData['cod_bairro'].", " ;
			$comando .= " cod_transacao = ".$imovelData['transacao_imovel'].", " ;
			$comando .= " banheiro = ".$imovelData['banheiros_imovel'].", " ;
			$comando .= " area = '".$imovelData['area_imovel']."' ";
			
			$cod_imovel = 0;
			if($imovelData['status'] == 'update'){
				$comando .= " where cod_imovel = ".$imovelData['cod_imovel'];
				// echo $comando;
				$cod_imovel = $imovelData['cod_imovel'];
				MysqlCustom::execQuery($comando);
			}else{
				$cod_imovel = MysqlCustom::execQuery($comando, true);	
			}
		
			if (!$cod_imovel > 0)
			{
				$result['status'] = 'error';				
			}


			if(isset($imovelData['images']) && ($cod_imovel > 0))
			{
				if($imovelData['status'] == 'update'){
					$comando = " delete from imagens where cod_imovel = ".$cod_imovel;
					MysqlCustom::execQuery($comando);
				}

				foreach ($imovelData['images'] as $key => $value) {
						
					$path_origin = 'upload/'.$value;
					$path_thumb = System::resizeImage($path_origin, $value);

					$comando = " insert into imagens set ";
					$comando .= " cod_imovel = ".$cod_imovel.", ";
					$comando .= " caminho_img = '".$path_origin."', ";
					$comando .= " caminho_thumb = '".$path_thumb."' ";
				
					MysqlCustom::execQuery($comando);
				}
			}

			if(isset($imovelData['diferenciais']) && ($cod_imovel > 0))
			{
				if($imovelData['status'] == 'update'){
					$comando = "delete from rel_imovel_dif where cod_imovel = ".$cod_imovel;
					MysqlCustom::execQuery($comando);
				}

				foreach ($imovelData['diferenciais'] as $key => $value) {
						$comando = "insert into rel_imovel_dif set ";
						$comando .= " cod_imovel = ".$cod_imovel.", ";
						$comando .= " cod_dif = ".$value;

						MysqlCustom::execQuery($comando);
				}	
			}
		}

// echo $cod_imovel;
echo json_encode($result);
// echo $comando;
// var_dump($_POST);








