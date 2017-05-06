<?php
  require('data/class.php');
  Session::startSession();
  $imovel = new Imovel();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imoveis</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
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
 
 

<!--Header-->
<header class="layout_double">
  <div class="topbar dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>Nós somos os melhores da cidade com 20 anos de experiência</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
            <li><a href="profile.php"><i class="icon-icons230"></i></a></li> 
          </ul>          
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo">
          <a href="index.php"><img alt="" src="images/logo-white.png" class="img-responsive"></a>
          </div>
        </div>
      <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Telefone</strong></li>
              <li>(47) 99909-3456</li>
            </ul>
          </div>
          <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul>
            <li><strong>Endereço</strong></li>
            <li>Av. Pref. José Juvenal Mafra, 6783. <br> CEP-88372-506. Gravatá - Navegantes / SC</li>
          </ul>
        </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>E-mail</strong></li>
              <li><a href="mailto:dalmirimoveis@hotmail.com">dalmirimoveis@hotmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container" style="margin:0; padding: 0; width: 100%;">
        <div class="attr-nav">
            <ul class="social_share clearfix">
              <li><a href="https://www.facebook.com/dalmir.demarch?hc_ref=SEARCH&fref=nf" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div> 
            
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand sticky_logo" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
        </div><!-- End Header Navigation -->
        <!-- Page Banner Start-->
        <div class="page-banner-listiimovel page-banner padding-b-80 padding-t-80">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1 class="p-white text-uppercase" style="margin-top: 25px; text-shadow: 1px 1px 1px black;">Há mais de 20 anos realizando sonhos </h1>
                <ol class="breadcrumb text-center ">
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Banner End -->

        <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Quem Somos</a></li>
            <li><a href="contact.php">Fale Conosco</a></li>   
            <li class="dropdown megamenu-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas</a>
              <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title">Tipos</h5>
                      <div class="content">
                        <ul class="menu-col" style="color:gray">
                          <li><a href="listing1.php">Apartamentos</a></li>
                          <li><a href="index.php">Casas</a></li>
                          <li><a href="listing1.php">Chácaras</a></li>
                          <li><a href="listing1.php">Galpões</a></li>
                          <li><a href="listing1.php">Comercial</a></li>
                          <li><a href="listing1.php">Sítios</a></li>
                          <li><a href="listing1.php">Sobrados</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-9">
                      <h5 class="title bottom20">Destaques</h5>
                      <div class="row">
                        <div id="nav_slider" class="owl-carousel">
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15"> 
                              <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                              <span class="nav_tag yellow text-uppercase">À Venda</span>
                            </div>
                            <h4><a class="title-imovel" href="property_detail1.php">Ótimo Apartamento!</a></h4>
                            <p>Código: 500</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>           
          </ul>
        </div>
    </div>
  </nav>
</header>
<!--Header Ends-->



<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">Lista de Imóveis</h2>
            <!-- <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p> -->
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select id="order-price">
                  <option class="active" value="1">Maior Preço</option>
                  <option value="2">Menor Preço</option>
                  <option value="3">Maior Área</option>
                  <option value="4">Menor Área</option>
                </select>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="row">          
          <?php
                Imovel::listImoveisPageCurrent();
          ?>
        </div>
        
        <div class="padding_bottom text-center">
          <ul class="pager" style="margin-top: 10px">
              <?php
                Imovel::listaPagesIndex();
              ?>
          </ul>
        </div>
      </div>
      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Pesquisa</h3>
          </div>
          <form class="callus">
            <div class="single-query form-group col-sm-12">
              <input type="text" id="keyImovel" class="keyword-input" placeholder="Palavras-Chave">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select id="bairroImovel">
                  <option value="-1" selected="selected">Localização</option>
                  <?php
                    $imovel->showBairros(false);
                  ?>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select id="tipoImovel">
                  <option value="-1" selected="selected">Tipo</option>
                  <?php
                    $imovel->showTipos(false);
                  ?>
                </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select id="quartosMin">
                        <option class="active" value="-1">Quartos (Min)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select id="quartosMax">
                        <option class="active" value="-1">Quartos (Max)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" id="areaMin" class="keyword-input" placeholder="Min Área">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" id="areaMax" class="keyword-input" placeholder="Max Área">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Preço:</strong></label>
                <div class="price text-right">
                  <span>R$</span>
                  <div class="leftLabel"></div>
                  <span>até R$</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="2000000" data-cur_min="0" data-cur_max="2000000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="button" class="btn-blue border_radius" onclick="searchAjax('page')">Pesquisar</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Mais opções de pesquisa</div>
                <div class="text-2 hide">Menos opções de pesquisa</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
              <div class="col-sm-12">
                  <div class="search-propertie-filters">
                    <div class="container-2">
                      <div id="imovel-caracter" class="row">
                              <?php
                                $imovel->showCaracter();
                              ?>        
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Imóveis Recentes</h3>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Ótima Casa</h4>
              <p class="bottom15">Juvenal Mafra, centro, Navegantes.</p>
              <a href="#.">R$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Ótima Casa</h4>
              <p class="bottom15">Juvenal Mafra, centro, Navegantes.</p>
              <a href="#.">R$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Ótima Casa</h4>
              <p class="bottom15">Juvenal Mafra, centro, Navegantes.</p>
              <a href="#.">R$128,600</a>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Listing end -->


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

<!--CopyRight-->

<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootsnav.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.cubeportfolio.min.js"></script>
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
<script src="js/neary-by-place.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script> 
<script src="js/google-map.js"></script> 
<script src="js/jquery.fancybox.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax/search/search.js"></script>
</body>
</html>

