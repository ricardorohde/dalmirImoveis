<?php
require('../class.php');
$comando = "update imoveis set ";
$comando .= " oculto =  0 ";
$comando .= " where cod_imovel = ".$_POST['codigo_imovel'];
var_dump($comando);
MysqlCustom::execQuery($comando);