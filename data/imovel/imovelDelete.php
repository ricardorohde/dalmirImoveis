<?php
require('../class.php');
$comando = "delete from imoveis ";
$comando .= " where cod_imovel = ".$_POST['codigo_imovel'];
var_dump($comando);
MysqlCustom::execQuery($comando);