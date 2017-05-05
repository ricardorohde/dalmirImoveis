<?php
  include('data/class.php');
  $user = new User();
  if(!$user->logado)
  {
    $user->logout();
    header("Location: login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imóves - Área Administrativa</title>
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
<section id="agent-2-peperty" class="profile padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" class="active"><i class="icon-icons230"></i>Meus Dados</a></li>
          <li><a href="my_tipos.php"><i class="icon-icons215"></i> Tipos de Imóveis</a></li>
          <li><a href="my_properties.php"><i class="icon-icons215"></i> Meus Imóveis</a></li>
          <li><a href="submit_property.php"><i class="icon-icons215"></i> Adicionar Imóvel</a></li>
          <li><a href="login.php?log=out"><i class="icon-lock-open3"></i>Sair</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-3">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase bottom30">Administrador</h2>
        <div class="profile-form">
          <div class="row">
            <form class="callus">
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Seu Nome:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" placeholder="Informe seu nome" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>E-mail:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" placeholder="Informe seu e-mail" class="keyword-input">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 profile-form margin40">
                <h3 class=" bottom30 margin40">Mude sua senha:</h3>
                <div class="row">
                  <form class="callus">
                    <div class="col-sm-4">
                      <div class="single-query">
                        <label>Senha atual:</label>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="single-query form-group">
                        <input type="password" class="keyword-input">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="single-query">
                        <label>Nova Senha:</label>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="single-query form-group">
                        <input type="password" class="keyword-input">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="single-query">
                        <label>Confirma Senha:</label>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="single-query form-group">
                        <input type="password" class="keyword-input">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <a class="btn-blue border_radius" href="#.">Salvar Alterações</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-2 hidden-xs"></div>
      
    </div>
  </div>
</section>

<!--Footer-->
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
            <!-- <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
            <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


<script src="js/jquery-2.1.4.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/selectbox-0.2.min.js"></script>
<script src="js/zelect.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
