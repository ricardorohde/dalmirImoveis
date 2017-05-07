<?php
  include('data/class.php');
  Session::startSession();
  $user = new User();
  if(!$user->logado)
  {
    $user->logout();
    header("Location: login.php");
  }

  //Criação dos objetos
  $imovel = new Imovel();
  $array_imovel = array();

  if(isset($_GET['c']))
  {
      $_SESSION['status'] = 'update';
      $_SESSION['cod_imovel'] = $_GET['c'];
      $cod_imovel = $_GET['c'];
      $array_filtro = Imovel::emptyFiltro();
      $array_filtro['cod_imovel'] = $cod_imovel;

      $array_imovel = Imovel::collectData($array_filtro);

  }else{
    $_SESSION['status'] = 'insert';
    $_SESSION['cod_imovel'] = '0';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imóveis</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="stylesheet" type="text/css" href="css/editor.css">
<link rel="stylesheet" type="text/css" href="css/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="images/icon.png">
</head>
<body>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->               
<header class="layout_double">
  <div class="topbar dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>Nós somos os melhores da cidade com 20 anos de experiência</p>
        </div>
        <div class="col-md-7 text-right">
      <ul class="breadcrumb_top text-right">
        <li><a href="index.php" target="_blank"><i class="fa fa-arrow-left" aria-hidden="true"></i>Ir para home</a></li>   
        <li><a href="profile.php"><i class="icon-icons230"></i></a></li> 
      </ul>          
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Page Banner End -->
<!-- My Properties  -->
<section id="property" class="padding listing1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" ><i class="icon-icons230"></i>Meus Dados</a></li>
          <li><a href="my_tipos.php"><i class="icon-icons215"></i> Dados de Imóveis</a></li>
          <li><a href="my_properties.php" ><i class="icon-icons215"></i> Meus Imóveis</a></li>
          <li><a href="submit_property.php" class="active"><i class="icon-icons215" ></i> Adicionar Imóvel</a></li>
          <li><a href="login.php?log=out"><i class="icon-lock-open3"></i>Sair</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      
      <div class="col-sm-1 col-md-2"></div>
      <div class="col-sm-10 col-md-8">
      <h2 class="text-uppercase bottom40">Adicione seu imóvel</h2>
      <form class="callus clearfix border_radius submit_property">
      <div class="row">
      <div class="col-sm-6">
      
      <div class="single-query form-group bottom20">
      <label>Título</label>
              <input id="titulo-imovel" type="text" class="keyword-input" placeholder="Título do imóvel">
            </div>
      </div>
       <div class="col-sm-6">
            <div class="single-query form-group bottom20">
              <label>Endereço</label>
              <input id="endereco-imovel" type="text" class="keyword-input" placeholder="Endereço do imóvel">
            </div>
      </div>
      <div class="col-sm-6">
            <div class="single-query bottom20">
              <label>Tipo </label>
              <div class="intro">
                <select id="tipo-imovel">
                <?php
                  if(isset($array_imovel['cod_tipo'])){
                      $imovel->showTipos(false, $array_imovel['cod_tipo']);
                  }else{                   
                      $imovel->showTipos();
                  }
                ?>
                </select>
              </div>
            </div>
      </div>
      <div class="col-sm-6">
            <div class="single-query bottom20">
              <label>Transação </label>
              <div class="intro">
                <select id="transacao-imovel">
                <?php
                  if(isset($array_imovel['cod_transacao'])){
                      $imovel->showTransacao($array_imovel['cod_transacao']);
                  }else{                                
                      $imovel->showTransacao();
                  }
                ?>
                </select>
              </div>
            </div>
      </div>      
      <div class="col-sm-6">
            <div class="single-query bottom20">
              <label>Bairro / Cidade </label>
              <div class="intro">
                <select id="select-bairros">
                <?php
                  if(isset($array_imovel['cod_bairro'])){
                      $imovel->showBairros(false, $array_imovel['cod_bairro']);
                  }else{                
                    $imovel->showBairros();
                  }
                ?>
                </select>
              </div>
            </div>
      </div>            
      <div class="col-sm-6">
      <div class="single-query form-group bottom20">
      <label>Valor</label>
              <input type="text" id="valor-imovel" class="keyword-input" placeholder="Ex. (R$ 23.000,00)">
            </div>
      </div>
      </div>
      </form>
      <div class="row">
      <div class="col-sm-12">
        <h3 class="margin40 bottom15">Imagens do imóvel <i class="fa fa-info-circle help" data-toggle="tooltip" title="Adicione imagens do imóvel!"></i></h3>
      
        <div class="file_uploader bottom20">
          <div class="container" style="margin-left: 0px; margin-right: 0px; width: 100%">
              <input type="file" name="file" id="file" multiple="multiple">

              <!-- Drag and Drop container-->
              <div class="upload-area"  id="uploadfile">
                  <h1>Arraste as aqui<br/>Ou<br/>Clique para selecionar</h1>
              </div>
          </div>       
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <h3 class="bottom15 margin40">Detalhes do imóvel</h3>
      </div>
      </div>
      <form class="callus clearfix border_radius submit_property">
          <div class="row">
              
              <div class="col-sm-4">
                    <div class="single-query form-group bottom20">
                      <label>Quartos</label>
                      <input type="text" id="quartos-imovel" class="keyword-input" placeholder="Quantidade de quartos">
                    </div>
              </div>
              <div class="col-sm-4">
                    <div class="single-query form-group bottom20">
                      <label>Banheiros</label>
                      <input type="text" id="banheiros-imovel" class="keyword-input" placeholder="Quantidade de banheiros">
                    </div>
              </div>
              <div class="col-sm-4">
                    <div class="single-query form-group bottom20">
                      <label>Garagem</label>
                      <input type="text" id="imovel-garagem" class="keyword-input" placeholder="Quantidade de garagens">
                    </div>
              </div>
              <div class="col-sm-4">
                    <div class="single-query form-group bottom20">
                      <label>Suíte</label>
                      <input type="text" id="suite-imovel" class="keyword-input" placeholder="Quantidade de suítes">
                    </div>
              </div>      
              <div class="col-sm-4">
                    <div class="single-query form-group bottom20">
                      <label>Área</label>
                      <input type="text" id="area-imovel" class="keyword-input" placeholder="Área do Imóvel">
                    </div>
              </div>         
              <div class="col-sm-12">
                <h3 class="bottom15 margin40">Descrição do imóvel </h3>
                <textarea id="txtEditor"></textarea> 
              </div>
              <div class="col-sm-12">
                <h3 class="bottom15 margin40">Características Adicionais</h3>
                <div class="search-propertie-filters">
                  <div class="container-2">
                    <div id="imovel-caracter" class="row">
                            <?php
                              if(isset($array_imovel['cod_dif']))
                              {
                                $imovel->showCaracter($array_imovel['cod_dif']);
                              }else{
                                $imovel->showCaracter();
                              }
                              
                            ?>        
                    </div>
                    
                  </div>
                </div>
              </div>
              
              <div class="col-sm-12">
                <h3 class="bottom15 margin40">Apresentação em Vídeo</h3>
                <div class="single-query form-group bottom15">
                <label>Link do Vímeo ou Youtube</label>
                      <input id="video-imovel" type="text" class="keyword-input" placeholder="https://vimeo.com">
                    </div>
              </div>
              <div class="col-md-4">
                <button type="button" id="enviar-imovel" class="btn-blue border_radius margin40">Cadastrar Imóvel</button>
              </div>
          
          </div>
      </form>
          
          
      </div>
      <div class="col-sm-1 col-md-2"></div>
     
      <div class="col-sm-4">
      </div>
      
    </div>
    
  </div>
</section>
<!-- My Properties End -->

<footer class="footer_third">
  <div class="container contacts">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul class="text-center">
            <li><strong>Telefone</strong></li>
            <li>(47) 99909-3456</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul class="text-center">
            <li><strong>Endereço</strong></li>
            <li>Av. Pref. José Juvenal Mafra, 6783. CEP-88372-506. Gravatá / Navegantes / SC</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons142"></i></div>
          <ul class="text-center">
            <li><strong>E-mail</strong></li>
            <li><a href="#.">dalmirimoveis@hotmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding_top">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="#." class="logo bottom30"><img src="images/logo-white.png" alt="logo"></a>
          <p class="bottom15">A mais de 20 anos no comércio imobiliário, agora com sede na Av. Prefeito José Juvenal Mafra, 6783, Balneário de Gravatá em Navegantes/SC. Atendendo ao público em geral com clareza, honestidade e a certeza de realizar um bom negócio com transparência e confiança.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Mapa do Site</h4>
          <table style="width:100%;">
            <tbody>
              <tr>
                <td>
                  <ul class="links">
                    <li><a href="#."><i></i>Home</a></li>
                    <li class="active"><a href="#."><i></i>Quem Somos</a></li>
                    <li><a href="#."> <i></i>À Venda</a></li>
                    <li><a href="#."><i></i>Fale Conosco</a></li>                    
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Inscreva-se</h4>
          <p>Receba os últimos lançamentos</p>
          <form class="top30">
            <input class="search" placeholder="Cadastre seu Email" type="search">
            <a class="button_s" href="#">
            <i class="icon-mail-envelope-open"></i>
            </a>
          </form>
        </div>
      </div>
    </div>
    <!--CopyRight-->
    <div class="copyright_simple">
      <div class="row">
        <div class="col-md-6 col-sm-5 top20 bottom20">
          <p>Desenvolvido por: <span><a target="_blank" href="https://www.facebook.com/GabbaComunica/">HeyGabba</a></span>.</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right top15 bottom10">
          <ul class="social_share">
            <li><a href="https://www.facebook.com/dalmir.demarch?hc_ref=SEARCH&fref=nf" target="_blank" class="facebook"><i class="icon-facebook-1"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Modal -->
<div id="modalResponse" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro de Imóveis</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="actionImovel()">Fechar</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript" language="javascript">
function myMap() {
  var mapCanvas = document.getElementById("single_map");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
	animation:google.maps.Animation.BOUNCE,
    icon: "images/map_marker.png"
  });
  marker.setMap(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 

<script src="js/jquery-2.1.4.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/editor.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/selectbox-0.2.min.js"></script>
<script src="js/zelect.js"></script>
<script src="js/jquery.fancybox.js"></script>
<!-- <script src="js/dropzone.min.js"></script> -->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax/user/requestUser.js"></script>
<script src="js/ajax/imovel/requestImovel.js"></script>
<script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 
</script>
</body>
</html>

