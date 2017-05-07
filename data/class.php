<?php

class Session {

	public static function startSession(){

    		if(session_status() == PHP_SESSION_NONE){
                session_start();	
    		}
    		
            return true;
	}

}

class System {

    public static function base64ToJpeg($base64_string, $output_file)
    {
        $ifp = fopen($output_file, "wb"); 
        $data = explode(',', $base64_string);
        fwrite($ifp, base64_decode($data[1])); 
        fclose($ifp); 
        return $output_file; 
    }

    public static function resizeImage($path, $name) {
        // Fichero y nuevo tamaño
        $nombre_fichero = $path;
        $porcentaje = 0.3;

        // Tipo de contenido
        header('Content-Type: image/png');

        // Obtener los nuevos tamaños
        list($ancho, $alto) = getimagesize($nombre_fichero);
        $nuevo_ancho = $ancho * $porcentaje;
        $nuevo_alto = $alto * $porcentaje;

        // Cargar
        $thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

        $file_parts = pathinfo($path);
        $origen = null;
        switch($file_parts['extension'])
        {
            case "jpg":
                $origen = imagecreatefromjpeg($nombre_fichero);
            break;

            case "png":
                $origen = imagecreatefrompng($nombre_fichero);
            break;

            case "gif":
                $origen = imagecreatefromgif($nombre_fichero);
            break;

            case NULL: // Handle no file extension
                //
            break;
        }        
        

        // Cambiar el tamaño
        imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);

        // Imprimir
        $path_thumb = 'upload/thumb_'.$name;
        imagejpeg($thumb, $path_thumb);
        return $path_thumb;
    }    
}

class MysqlCustom extends Mysqli{

    public static function conectar(){
        	
            $c = mysqli_connect("localhost", "dalmi603_user","dalmir", "dalmi603_db");
        	mysqli_set_charset( $c, 'utf8');
        	return $c;
    }

    public static function execQuery($sql, $retId = false)
    {
            
            $conection = 0;
            $q = MysqlCustom::querySql($sql, $conection);
            if($retId)
            {
                return mysqli_insert_id($conection);
            }
            
            return 0;
    }

    public static function querySql($sql, &$conection = null)
    {

        	$c = MysqlCustom::conectar();            
        	$q = mysqli_query($c, $sql);

            if($conection == 0)
            {
                $conection = $c;
            }
        	return $q;
    }

    public static function fetch($resource)
    {
            return mysqli_fetch_assoc($resource);
    }

}


class User {

	public $login;
	public $senha;
    public $logado;

	function __construct() {        
        
        if (Session::startSession())
        {
            // echo 'kwshjdslkasjdklas';
        	if(isset($_SESSION['objUser']))
        	{
                // var_dump( unserialize( $_SESSION['objUser']));
        		$u = unserialize($_SESSION['objUser']);
	        	$this->login = $u->login;
	        	$this->senha = $u->senha;	
                $this->logado = true;
        	}
        }
    }

    // $this->logado = $this->logar($l, $p);

    public function logar($l, $p)
    {
        $comando = "select * from usuario where UPPER(login) = UPPER('".$l."') and UPPER(password) = UPPER('".$p."') "; 
        // echo $comando;   
        $result = MysqlCustom::querySql($comando);

        
        if(mysqli_num_rows($result) > 0)
        {            
            $this->login = $l;
            $this->senha = $p;
            $this->logado = true;            
            $_SESSION['objUser'] = serialize($this);
        }else{
            if(isset($_SESSION['objUser']))
            {
                session_unset($_SESSION['objUser']);
            }
            $this->logado = false;
        }


    }

    public static function logout()
    {
            session_unset();
    }

    public static function hasUser()
 	{

 	}

}

class Imovel{

    public $currentCidade = '1';
 
    public function getCidades()
    {

            $comando = "select * from cidades";
            $r_c = MysqlCustom::querySql($comando);
            $arrayCidades = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayCidades[$i]["nome_cidade"] = $row["nome_cidade"];
              $arrayCidades[$i]["cod_cidade"] = $row["cod_cidade"];
              $i++;
            }  
             
            return $arrayCidades;        
    }

    public function getTransacao()
    {

            $comando = "select * from transacao";
            $r_c = MysqlCustom::querySql($comando);
            $arrayTrans = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayTrans[$i]["cod_transacao"] = $row["cod_transacao"];
              $arrayTrans[$i]["descricao"] = $row["descricao"];
              $i++;
            }  
             
            return $arrayTrans;        
    }    

    public function getCaracter()
    {

            $comando = "select * from diferencial_imovel";
            $r_c = MysqlCustom::querySql($comando);
            $arrayDif = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayDif[$i]["cod_diferencial"] = $row["cod_diferencial"];
              $arrayDif[$i]["descricao"] = $row["descricao"];
              $i++;
            }  
             
            return $arrayDif;        
    } 



    public function getBairros($cod_cidade)
    {

            $comando = "select * from bairros where cod_cidade = ".$cod_cidade;
            $r_c = MysqlCustom::querySql($comando);
            $arrayBairros = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayBairros[$i]["descricao"] = $row["descricao"];
              $arrayBairros[$i]["cod_bairro"] = $row["cod_bairro"];
              $i++;
            }  
             
            return $arrayBairros; 
    }

    public function getBairrosCidades()
    {

            $comando = "select * from bairros b, cidades c where (b.cod_cidade = c.cod_cidade)";
            $r_c = MysqlCustom::querySql($comando);
            $arrayBairros = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayBairros[$i]["descricao"] = $row["descricao"];
              $arrayBairros[$i]["cod_bairro"] = $row["cod_bairro"];
              $arrayBairros[$i]["cod_cidade"] = $row["cod_cidade"];
              $arrayBairros[$i]["nome_cidade"] = $row["nome_cidade"];
              $i++;
            }  
             
            return $arrayBairros; 
    }    

    public function getTipos()
    {

            $comando = "select * from tipo_imovel";
            $r_c = MysqlCustom::querySql($comando);
            $arrayTipo = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
                $arrayTipo[$i]["nome_tipo"] = $row["nome_tipo"];
                $arrayTipo[$i]["cod_tipo"] = $row["cod_tipo"];
                $i++;
            }  

            return $arrayTipo;
    }



    public function showTipos($sel = true, $cod_tipo = '0')
    {
        $arrayTipo = $this->getTipos();

        $ind_p = 0;
        foreach ($arrayTipo as $key => $value) {
              if($ind_p == 0  && $sel)
              {
                    echo '<option value="'.$value['cod_tipo'].'" selected="selected">'.$value['nome_tipo'].'</option>';
              }else{
                    if($cod_tipo == $value['cod_tipo']){
                        echo '<option value="'.$value['cod_tipo'].'" selected="selected">'.$value['nome_tipo'].'</option>';     
                    }else{
                        echo '<option value="'.$value['cod_tipo'].'" >'.$value['nome_tipo'].'</option>';     
                    }
              }
              $ind_p++;
        }        
    }

    public function showCidades()
    {
        $arrayCidades = $this->getCidades();

        $ind_p = 0;
        foreach ($arrayCidades as $key => $value) {
              if($ind_p == 0)
              {
                    $this->currentCidade = $value['cod_cidade'];
                    echo '<option value="'.$value['cod_cidade'].'" selected="selected">'.$value['nome_cidade'].'</option>';
              }else{
                    echo '<option value="'.$value['cod_cidade'].'" >'.$value['nome_cidade'].'</option>';
              }

              $ind_p++;
        }        
    }  

    public function showBairros($sel = true, $cod_bairro = '0')
    {
        $arrayBairros = $this->getBairrosCidades();

        $ind_p = 0;
        foreach ($arrayBairros as $key => $value) {
              if($ind_p == 0 && $sel)
              {
                    echo '<option value="'.$value['cod_bairro'].'" selected="selected">'.$value['descricao'].' / '.$value['nome_cidade'].'</option>';
              }else{
                    if($cod_bairro == $value['cod_bairro']){
                        echo '<option value="'.$value['cod_bairro'].'" selected="selected">'.$value['descricao'].' / '.$value['nome_cidade'].'</option>';
                    }else{
                        echo '<option value="'.$value['cod_bairro'].'" >'.$value['descricao'].' / '.$value['nome_cidade'].'</option>';
                    }
              }

              $ind_p++;
        }        
    }   

    public function showCaracter($array_caracter = null)
    {
        $arrayDif = $this->getCaracter();
        if($array_caracter != null)
        {
            Session::startSession();
            $_SESSION['dif_imoveis'] = $array_caracter;
        }

        foreach ($arrayDif as $key => $value) {
                    echo '  <div class="col-md-4 col-sm-4">
                                <div class="search-form-group white">
                                  <input value="'.$value['cod_diferencial'].'" type="checkbox"   name="check-box" />
                                  <span>'.$value['descricao'].'</span>
                                </div>
                            </div>';  
        
        }        
    } 

    public function showTransacao($cod_transacao = '0')
    {
        $arrayTrans = $this->getTransacao()  ;
        $ind_p = 0;
        foreach ($arrayTrans as $key => $value) {
              if(($ind_p == 0) && ($cod_transacao == '0') )
              {
                    echo '<option value="'.$value['cod_transacao'].'" selected="selected">'.$value['descricao'].'</option>';
              }else{
                    if($cod_transacao == $value['cod_transacao']){
                        echo '<option value="'.$value['cod_transacao'].'" selected="selected">'.$value['descricao'].'</option>';
                    }else{
                        echo '<option value="'.$value['cod_transacao'].'" >'.$value['descricao'].'</option>';
                    }
              }

              $ind_p++;
        }         
    } 

    public function buildImovelSingle($code)
    {
        $filtro = Imovel::emptyFiltro();
        $filtro['cod_imovel'] = $code;
        $select = Imovel::buildSelect($filtro);
        var_dump($select);
        $resource = MysqlCustom::querySql($select);

        $row = MysqlCustom::fetch($resource);

        return $row;
    }

    public function buildCharactersImovel($code)
    {
        $select = " select di.descricao as descricao  from imoveis iq
                    left join rel_imovel_dif rif on rif.cod_imovel = iq.cod_imovel
                    left join diferencial_imovel di on di.cod_diferencial = rif.cod_dif
                    where iq.cod_imovel = ".$code;



        $resource = MysqlCustom::querySql($select);
        $character = array();
        $i = 0;
        while($row = MysqlCustom::fetch($resource))
        {
            $character[$i]['descricao'] = $row['descricao'];
            $i++;
        }

        return $character; 

    }

    public function getPicturesSingleImovel($code)
    {

        $select = ' select *  from imagens iq
                    left join imoveis im on im.cod_imovel = iq.cod_imovel
                    where iq.cod_imovel = '.$code;

        $resource = MysqlCustom::querySql($select);
        $return = array();
        $i = 0;

        while($row = MysqlCustom::fetch($resource))
        {
            $return[$i]['caminho_img'] = $row['caminho_img'];
            $return[$i]['caminho_thumb'] = $row['caminho_thumb'];
            $i++;
        }

        
        
        return $return;
    }

    //STATIC FUNCTIONS IMOVEL
    public static function emptyFiltro()
    {
        $filtro =  array();
        $filtro['cod_bairro'] = '-1';
        $filtro['cod_tipo'] = '-1';
        $filtro['key_word'] = '';
        $filtro['quarto_max'] = '-1';
        $filtro['quarto_min'] = '-1';
        $filtro['area_min'] = '-1';
        $filtro['area_max'] = '-1';
        $filtro['cod_transacao'] = '-1';
        $filtro['valor_min'] = '-1';
        $filtro['valor_max'] = '-1';
        $filtro['order_attr'] = "";
        $filtro['order_list'] = "asc";
        $filtro['diferencial'] = array();
        $filtro['mode'] = '';
        $filtro['cod_imovel'] = '-1';
        $filtro['num_page'] = '1';
        $filtro['imoveis_count'] = '0';
        $filtro['pointer'] = 'next';
        $filtro['pagination ']= 'false';  

        return  $filtro;      
    }


    public static function getCaracterStatic($where = "")
    {

            $comando = "select di.descricao as descricao from imoveis i ";
            $comando .= "left join rel_imovel_dif rid on rid.cod_imovel = i.cod_imovel ";
            $comando .= "left join diferencial_imovel di on di.cod_diferencial = rid.cod_dif ";
            $comando .= $where;
            $comando .= " group by di.descricao ";

            $r_c = MysqlCustom::querySql($comando);
            $arrayDif = array();
            $i = 0;

            while($row = MysqlCustom::fetch($r_c))
            {
              $arrayDif[$i]["descricao"] = $row["descricao"];
              $i++;
            }  
             
            return $arrayDif;        
    } 

    public static function showCaracterStatic($where = "")
    {
        $arrayDif = Imovel::getCaracterStatic($where);
        $return = "";
        foreach ($arrayDif as $key => $value) {
            $return .= '  <span>'.$value['descricao'].'</span>';
        }        

        return $return;
    }   

    public static function buildSelect($filtro, $group = true)
    {

        $select =  " select i.cod_imovel as cod_imovel, i.suite as suite, i.endereco as endereco, i. quartos as quartos, i.garagem as garagem, ";
        $select .= " i.area as area, i.cod_bairro as cod_bairro, i.cod_transacao as cod_transacao, i.cod_tipo as cod_tipo, ";
        $select .= " i.valor as valor, b.descricao as bairro, i.titulo as titulo, i.descricao as descricao, i.banheiro as banheiro, p.caminho_thumb as caminho_thumb, ";
        $select .= " p.caminho_img as caminho_img, rid.cod_dif as cod_dif, i.video as video ";
        $select .= " from imoveis i ";
        $select .= " left join imagens p ";
        $select .= " on p.cod_imovel = i.cod_imovel ";
        $select .= " left join rel_imovel_dif rid  ";
        $select .= " on rid.cod_imovel = i.cod_imovel "; 
        $select .= " left join bairros b on b.cod_bairro = i.cod_bairro ";
        

        $select .= ' where (i.oculto <> 1) and (i.deletado <> 1) ';

        if(($filtro['area_max'] != "-1") && ($filtro['area_max'] != ""))
        {
            $select .= " and (i.area <= '".$filtro['area_max']."') ";
        }

        if(($filtro['area_min'] != "-1") && ($filtro['area_min'] != ""))
        {
            $select .= " and (i.area >= '".$filtro['area_min']."') ";
        }

        if($filtro['cod_bairro'] != "-1")
        {
            $select .= " and (i.cod_bairro = ".$filtro['cod_bairro'].") ";
        }

        if($filtro['cod_tipo'] != "-1")
        {
            $select .= " and (i.cod_tipo = '".$filtro['cod_tipo']."') ";
        }

        if($filtro['cod_transacao'] != "-1")
        {
            $select .= " and (i.cod_transacao = '".$filtro['cod_transacao']."') ";
        }

        if($filtro['key_word'] != "")
        {
            $select .= " and ((i.titulo like '%".$filtro['key_word']."%') or (i.descricao like '%".$filtro['key_word']."%')) ";
        }

        if($filtro['quarto_max'] != "-1")
        {
            $select .= " and (i.quartos <= '".$filtro['quarto_max']."') ";
        }

        if($filtro['quarto_min'] != "-1")
        {
            $select .= " and (i.quartos >= '".$filtro['quarto_min']."') ";
        }

        if($filtro['valor_max'] != "-1")
        {
            $select .= " and (i.valor <= '".$filtro['valor_max']."') ";
        }

        if($filtro['valor_min'] != "-1")
        {
            $select .= " and (i.valor >= '".$filtro['valor_min']."') ";
        }

        if(isset($filtro['diferencial']))
        {

            if(sizeof($filtro['diferencial']) > 0)
            {
                $cont = 0;
                $select .= 'and ( ';
                foreach ($filtro['diferencial'] as $key => $value) {
                    $cont++;
                    if(sizeof($filtro['diferencial']) == $cont)
                    {
                        $select .= ' ( rid.cod_dif = '.$value.')';
                    }else{
                        $select .= ' ( rid.cod_dif = '.$value.') or ';
                    }
                }                
                $select .= ' ) ';
            }
        }

        if(($filtro['cod_imovel'] != "-1") && ($filtro['cod_imovel'] != ""))
        {
            $select .= " and (i.cod_imovel = '".$filtro['cod_imovel']."') ";
        }

        if($group)
            $select .= ' group by i.cod_imovel ';

        if($filtro['order_attr'] != '')
        {
            $select .= ' order by '.$filtro['order_attr'].' '.$filtro['order_list'];
        }



        if (isset($filtro['pagination']))
                if($filtro['pagination'] == 'true')
                {
                    
                    // if($filtro['mode'] != 'index'){
                        Session::startSession();
                        $_SESSION['page_filtro'] = serialize($filtro);
                    // }

                    $inicial = (((int)$filtro['num_page'] - 1) * (int)$filtro['imoveis_count']) + ((int)$filtro['num_page'] -1);            

                    if($inicial == 1)
                            $inicial = 0;

                    $final = ((int)$filtro['num_page'] * (int)$filtro['imoveis_count']) + ((int)$filtro['num_page'] -1);

                    $select .= ' limit '.$inicial.', '.$filtro['imoveis_count'].' ';

                    $_SESSION['page_inicial'] = $inicial;
                    $_SESSION['page_final'] = $final;
                    $_SESSION['page_count'] = Imovel::getCountImoveis();
                }

        // echo $select;

        return $select;
    }

    public static function getCountImoveis()
    {
        $select = 'select count(*) as acm from imoveis ';
        $r = MysqlCustom::querySql($select);
        $a = MysqlCustom::fetch($r);
        return $a['acm'];
    }

    public static function buildPagination()
    {

            $page_inicial = (int)$_SESSION['page_inicial'];
            $page_final = (int)$_SESSION['page_final'];
            $page_count = (int)$_SESSION['page_count'];
            $page_current = ($page_inicial / 10) + 1;
            $template = '';

            if($page_current == 1)
            {
                $template =  '<li class="active"><a onclick="searchByPage(\'1\')">1</a></li>
                              <li ><a onclick="searchByPage(\'2\')">2</a></li>
                              <li><a onclick="searchByPage(\'3\')">3</a></li> ';
            }else if($page_final >=  $page_count)
            {
                $template =  '<li><a onclick="searchByPage('.($page_current - 2).')">'.($page_current - 2).'</a></li>
                              <li ><a onclick="searchByPage('.($page_current - 1).')">'.($page_current - 1).'</a></li>
                              <li class="active"><a onclick="searchByPage('.($page_current).')">'.$page_current.'</a></li> '; 
            }else{
                $template =  '<li><a onclick="searchByPage('.($page_current - 1).')">'.($page_current - 1).'</a></li>
                              <li class="active"><a onclick="searchByPage('.($page_current).')">'.($page_current).'</a></li>
                              <li ><a onclick="searchByPage('.($page_current + 1).')">'.($page_current + 1).'</a></li> '; 
            }

            return $template; 
    }

    public static function buildTemplate($filtro)
    {
        $select = Imovel::buildSelect($filtro);
        $resource = MysqlCustom::querySql($select);        
        $cod_imovel = 0;
        $template = '';
        
        while($row = MysqlCustom::fetch($resource))
        {    
            if($row['cod_imovel'] != $cod_imovel){
                $cod_imovel = $row['cod_imovel'];
               
                $template .= '      <div class="cbp-item latest sale">
                                    <div class="property_item">
                                      <div class="image">
                                        <a href="property_detail1.php?c='.$cod_imovel.'"><img src="data/imovel/'.$row['caminho_thumb'].'" alt="latest property" class="img-responsive"></a>
                                        <div class="price clearfix"> 
                                          <span class="tag pull-right">'.$row['valor'].'</span>
                                        </div>';

                                    if($row['cod_transacao'] == '1'){
                                        $template .= '<span class="tag_t">À Venda</span> ';
                                    }else{
                                        $template .= '<span class="tag_t">Locação</span> ';
                                    }
                                        
                $template .= '<span class="tag_l">Código: '.$row['cod_imovel'].'</span>
                                      </div>
                                      <div class="proerty_content">
                                        <div class="proerty_text">
                                          <h3 class="captlize"><a href="property_detail1.php?c='.$cod_imovel.'">'.$row['titulo'].'</a></h3>
                                        </div>
                                        <div class="property_meta transparent"> 
                                          <span><i class="icon-select-an-objecto-tool"></i>'.$row['area'].' m²</span> 
                                          <span><i class="icon-bed"></i>'.$row['quartos'].' Quarto(s)</span> 
                                          <span><i class="icon-safety-shower"></i>'.$row['banheiro'].' Banheiro(s)</span>   
                                        </div>
                                        <div class="property_meta transparent bottom30">
                                          <span><i class="icon-garage"></i>'.$row['garagem'].' Garagem(ns)</span>
                                          <span></span>
                                        </div>
                                        <div class="property_meta transparent bottom30">';
                $template .= Imovel::showCaracterStatic(" where i.cod_imovel = ".$cod_imovel);          
                $template .= '          </div>
                                        <div class="favroute clearfix">
                                          <!-- <p><i class="icon-calendar2"></i>&nbsp;5 Dias atrás </p> -->
                            <!--               <ul class="pull-right">
                                            <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                            <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                          </ul> -->
                                        </div>
                                        <div class="toggle_share collapse" id="seventy">
                                          <ul>
                                            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>';
            }

        }  

        return $template;     
    }

    public static function buildTemplateAdmin($filtro)
    {

        $select = Imovel::buildSelect($filtro);
        $resource = MysqlCustom::querySql($select);        
        $cod_imovel = 0;
        $template = '';  

        while($row = MysqlCustom::fetch($resource))
        { 
            $template .='   <div class="row bg-hover">
                              <div class="my-pro-list">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                  <img src="data/imovel/'.$row['caminho_thumb'].'" alt="image"/>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <div class="feature-p-text">
                                    <h4>'.$row['titulo'].'</h4>';


                                    switch ($row['cod_transacao']) {
                                        case '1':
                                                $template .=  '<span><b>Status:</b>  À Venda</span><br>';
                                            break;
                                        case '2':
                                                $template .=  '<span><b>Status:</b>  Locação</span><br>';
                                            break;
                                        default:
                                            # code...
                                            break;
                                    }

                              $template.=    '  <div class="button-my-pro-list">
                                      <a href="">R$ '.$row['valor'].'</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                  <div class="select-pro-list">
                                    <a href="submit_property.php?c='.$row['cod_imovel'].'"><i class="icon-pen2"></i> <input type="hidden" value="'.$row['cod_imovel'].'"></a>
                                    <a href="#"><i class="icon-cross"></i><input type="hidden" value="'.$row['cod_imovel'].'"></a>
                                  </div>
                                </div>
                              </div>
                            </div>';


        }   
        return $template;           

    }

    public static function buildImoveisMenu($filtro)
    {        
        $select = Imovel::buildSelect($filtro);
        // echo $select;
        $resource = MysqlCustom::querySql($select);        
        $cod_imovel = 0;
        $template = ''; 

        while($row = MysqlCustom::fetch($resource))
        {
            if($filtro['cod_tipo'] == '1')
            {
                $t_d = 'À Venda';
            }else{
                $t_d = 'Locação';
            }

            $template .= '          <div class="item">
                              <div class="image bottom15"> 
                                <img src="data/imovel/'.$row['caminho_thumb'].'" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">'.$t_d.'</span>
                              </div>
                              <h4><a class="title-imovel" href="property_detail1.php">'.$row['titulo'].'</a></h4>
                              <p>Código: '.$row['cod_imovel'].'</p>
                            </div>'   ;
        }

        return $template;
    }

    public static function buildTemplateRecentsImoveis()
    {        

        $select =  " select i.cod_imovel as cod_imovel, i.suite as suite, i.endereco as endereco, ";
        $select .= " i.area as area, i.cod_bairro as cod_bairro, i.cod_transacao as cod_transacao , i.cod_tipo as cod_tipo, ";
        $select .= " i.valor as valor, i.data_insert as data_insert, i.titulo as titulo, i.descricao as descricao, p.caminho_thumb as caminho_thumb ";
        $select .= " from imoveis i ";
        $select .= " left join imagens p ";
        $select .= " on p.cod_imovel = i.cod_imovel ";
        $select .= " left join rel_imovel_dif rid ";
        $select .= " on rid.cod_imovel = i.cod_imovel ";   
        $select .= " group by cod_imovel ";
        $select .= " order by  data_insert desc ";
        $select .= " limit 0, 3 ";

        $resource = MysqlCustom::querySql($select);
        $template = '';
        while($row = MysqlCustom::fetch($resource))
        {
            $template .= '       
                            <div class="row bottom20">
                              <div class="col-md-4 col-sm-4 col-xs-6 p-image">
                               
                                <img src="data/imovel/'.$row['caminho_thumb'].'" alt="image">

                              </div>
                              <div class="col-md-8 col-sm-8 col-xs-6">
                                <div class="feature-p-text">
                                  <h4><a href="property_detail1.php?c='.$row['cod_imovel'].'">'.$row['titulo'].' </a></h4>
                                  <p class="bottom15"><a href="property_detail1.php?c='.$row['cod_imovel'].'">'.$row['endereco'].' </a></p>
                                  <a href="property_detail1.php?c='.$row['cod_imovel'].'">R$'.$row['valor'].'</a>
                                </div>
                              </div>
                            </div> ';
        }

        return $template;    

    }

    public static function listMoreImoveis($bairro)
    {        

            $filtro = Imovel::emptyFiltro();
            $filtro['cod_bairro'] = $bairro;
            $template = Imovel::buildTemplate($filtro);
            $template = str_replace("cbp-item latest sale", "item", $template);
            echo $template;  

    }    

    public static function listImoveisRecents()
    {
        $template = Imovel::buildTemplateRecentsImoveis();
        echo $template;
    }

    public static function listImoveisMenu($filtro)
    {
        $template = Imovel::buildImoveisMenu($filtro);
        echo $template;
    }

    public static function listImoveisIndex($filtro)
    {
            $template = Imovel::buildTemplate($filtro);
            echo $template;
    }    

    public static function listImoveisPage($filtro)
    {
        Session::startSession();         
        $template = Imovel::buildTemplate($filtro);        
        $template = str_replace("cbp-item latest sale", "col-sm-6", $template);
        $_SESSION['page_imoveis'] = $template;
        $result['page'] = 'listing1.php';
        // var_dump(json_encode($result));
        echo(json_encode($result));
        // 
    }


    public static function  listImoveisAdmin($filtro)
    {
            $template = Imovel::buildTemplateAdmin($filtro);
            echo $template;      
    }


    public static function listImoveisPageCurrent()
    {   
        echo $_SESSION['page_imoveis'];
    }    


    public static function collectData($filtro)
    {
        $select = Imovel::buildSelect($filtro, false);
        $resource = MysqlCustom::querySql($select);
        $array_imovel = MysqlCustom::fetch($resource);

        if(isset($array_imovel['cod_dif']))
        {
            $array_temp = array();
            $i = 0;
            $array_temp[$i] = $array_imovel['cod_dif'];
            while($row = MysqlCustom::fetch($resource))
            {
                $i++;
                $array_temp[$i] = $row['cod_dif'];
            }
            $array_imovel['cod_dif'] = $array_temp;
        }

        return $array_imovel;
    }

    public static function listaPagesIndex()
    {
        $template = Imovel::buildPagination();
        echo $template;
    }


    public static function getValuesImovel($filtro)
    {
        echo json_encode(Imovel::collectData($filtro));
    }

        

}



