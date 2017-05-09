<?php
require('../class.php');
$comando = "update imoveis set ";
$comando .= " oculto =  1 ";
$comando .= " where cod_imovel = ".$_POST['codigo_imovel'];
var_dump($comando);
MysqlCustom::execQuery($comando);