<?php
  require('data/class.php');

  $imovel = new Imovel();

?>


<!DOCTYPE html>
<html lang="pt">
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
<div class="rev_slider_wrapper">
  <div id="rev_overlaped" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE -->
      <li data-transition="fade">
        <img src="images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
      </li>
      <div class="tp-static-layers">
        <div class="tp-caption tp-static-layer" 
          id="slide-37-layer-2" 
          data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
          data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"  
          data-whitespace="nowrap"
          data-visibility="['on','on','on','on']"
          data-fontsize="['48','48','28','28']"
          data-start="500" 
          data-responsive_offset="on"
          data-basealign="slide" 
          data-startslide="0" 
          data-endslide="5" 
          style="z-index: 5;">
          <h1 style="text-shadow: 0px 0px 10px black;"><span class="t_white">Há mais de 20 anos <br>realizando sonhos</span></h1>
        </div>
        <div class="tp-caption tp-static-layer" 
          id="slide-37-layer-2" 
          data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
          data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" 
          data-whitespace="nowrap"
          data-visibility="['on','on','on','on']"
          data-start="500" 
          data-basealign="slide" 
          data-startslide="0" 
          data-endslide="5" 
          style="z-index: 5;"><a onclick="searchAjax('page')" class="btn-white border_radius uppercase">Nossos Imóveis</a>
        </div>
      </div>
    </ul>
  </div>
</div>

<div id="mainMenuBarAnchor"></div>
<header class="white_header">
  <nav id="navegador" class="navbar navbar-default bootsnav" style="background: #1f1a17; color: white;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="attr-nav">
            <div class="upper-column info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong style="color:white">Contato</strong></li>
                <li>(47) 3319-2272 / 99909-3456</li>
              </ul>
            </div>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index6.php"><img src="images/logo.png" class="logo" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
              <li class="dropdown active">
                <a href="index.php" >Home</a>
              </li>
              <li class="dropdown active">
                <a href="gallery.php" >Quem Somos</a>
              </li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">Destaques</h5>
                        <div class="row">
                          <div id="nav_slider" class="sale-imoveis owl-carousel">
                              <?php
                                $params = Imovel::emptyFiltro();
                                $params['cod_transacao'] = '1';
                                Imovel::listImoveisMenu($params);
                              ?>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Locação</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">Destaques</h5>
                        <div class="row">
                          <div id="nav_slider" class="locacao-imoveis owl-carousel">
                              <?php
                                $params = Imovel::emptyFiltro();
                                $params['cod_transacao'] = '2';
                                Imovel::listImoveisMenu($params);
                              ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>              
              <li><a href="contact.php">Fale conosco</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->




<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
  <div class="topbar clearfix">
    <ul class="breadcrumb_top">
      <li><a href="profile.php"><i class="icon-icons230"></i></a></li> 
    </ul>
  </div>
  
  <form class="callus top30 clearfix centered">
  <h2 class="text-uppercase t_white bottom20 text-center">Procure seu imóvel</h2>
    <div class="row">
      <div class="col-sm-12">
        <div class="single-query bottom15">
          <input id="keyImovel" type="text" class="keyword-input" placeholder="Palavras-Chave">
        </div>
      </div>

      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select id="tipoImovel">
              <option value="-1" selected="selected">Tipo</option>
              <?php
                  $imovel->showTipos(false);
              ?>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select id="bairroImovel">
              <option value="-1" selected="selected">Localização</option>
              <?php
                  $imovel->showBairros(false);
              ?>
            </select>
          </div>
        </div>
      </div>
      <div class="search-2">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select id="quartosMin">
                <option class="active" value="-1">Quartos (Min)</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
                <!-- <option>6</option> -->
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
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
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input id="areaMin" type="text"  class="keyword-input" placeholder="Área Min. (m²)">
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input id="areaMax" type="text" class="keyword-input" placeholder="Área Max. (m²)">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
        <div class="single-query-slider">
          <div class="clearfix top20">
            <label class="pull-left">Preço:</label>
            <div class="price text-right">
              <span>R$</span>
              <div class="leftLabel"></div>
              <span>até R$</span>
              <div class="rightLabel"></div>
            </div>
          </div>
          <div data-range_min="0" data-range_max="2000000" data-cur_min="0" data-cur_max="2000000" class="nstSlider">
            <div class="bar"></div>
            <div class="leftGrip"></div>
            <div class="rightGrip"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
        <button type="button" class="border_radius btn-yellow text-uppercase" onclick="searchAjax('page')">Buscar</button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="group-button-search">
          <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
            <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
            <div class="text-1">Mais opções de busca</div>
            <div class="text-2 hide">Menos opções de busca</div>
          </a>
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
    </div>
  </form>
</div>

<!-- Gallery -->
<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Nosso Imóveis</h2>
        <p class="heading_space">Temos novos imóveis em destaque</p>
      </div>
    </div>
<!--     <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".novidade" class="cbp-filter-item-active cbp-filter-item">Novidades</div>
        <div data-filter=".sale" class="cbp-filter-item">Todos</div>        
      </div>
    </div> -->
    <div id="property-gallery" class="cbp listing1">
    </div>
    <div class="col-sm-12 text-center top20">
       <a onclick="searchAjax('page')" class="btn-dark border_radius uppercase margin40">Mais imóveis</a>
    </div>
  </div>
</section>
<!-- Gallery End -->


<!--Deals-->



<!--Parallax-->
<section id="parallax_four" class="padding">
  <div class="container">
<!--     <div class="row">
      <div class="col-sm-12 bottom30">
        <h2 class="uppercase">Over then <strong>7000</strong> Happy Customer</h2>
      </div>
      <div class="col-sm-8 col-md-10">
        <div class="row">
          <div class="col-sm-6 margin40">
             <i class="icon-presentation"></i>
             <h4 class="bottom10">Good Sale & Marketing</h4>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
          </div>
          <div class="col-sm-6 margin40">
             <i class="icon-icons215"></i>
             <h4 class="bottom10">Good Sale & Marketing</h4>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
  <div id="agent-2" class="padding_bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">CORRETORES QUE VOCÊ PODE CONFIAR</h2>
        <p>Há mais de 20 anos no ramo.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-one.jpg" alt="Agents">
            <div class="img-info">
              <h3>Diego Dalmir Demarch</h3>
              <span>&nbsp;</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Telefone:</strong></td>
                    <td class="text-right">(47) 99909-3456</td>
                  </tr>
                  <tr>
                    <td><strong>E-mail:</strong></td>
                    <td class="text-right"><a href="#">diego@dalmirimoveis.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-five.jpg" alt="Agents">
            <div class="img-info">
              <h3>Dalmir João Demarch</h3>
              <span>CRECI 6730</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Telefone:</strong></td>
                    <td class="text-right">(47) 98475-5765</td>
                  </tr>
                  <tr>
                    <td><strong>E-mail:</strong></td>
                    <td class="text-right"><a href="#.">dalmirimoveis@hotmail.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container bg_white padding">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Compradores satisfeitos</h2>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
         <div id="testinomial-slider" class="owl-carousel display navigate">
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author2.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author2.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testinomials ends-->


<!--Partners-->
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-12 text-center">
      	<h2 class="uppercase" style="margin-bottom: 25px">Simule seu financiamento aqui</h2>
        <!-- <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p> -->
      </div>
    </div>
    <div class="row">
    <div id="partners" class="owl-carousel">
        <div class="item">
          <a href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso" target="_blank"><img src="images/logo1.png" alt="Featured Partner"></a>
        </div>
        <div class="item">
          <a href="https://www.itau.com.br/investimentos-previdencia/assessoria-financeira/projeto-vida/simulador-imovel/" target="_blank"><img src="images/logo2.png" alt="Featured Partner"></a>
        </div>
        <div class="item">
          <a href="https://www42.bb.com.br/portalbb/cim/creditoimobiliario/simular,802,2250,2250.bbx" target="_blank"><img src="images/logo3.png" alt="Featured Partner"></a>
        </div>
        <div class="item">
          <a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/index.shtm?par=1" target="_blank"><img src="images/logo5.png" alt="Featured Partner"></a>
        </div>
        <div class="item">
          <a href="https://www.santander.com.br/br/pessoa-fisica/santander/creditos-e-financiamentos/credito-imobiliario" target="_blank"><img src="images/logo4.png" alt="Featured Partner"></a>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--Partners Ends-->
<?php
  include('includes/footer_include.php');
?>


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
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/ajax/search/search.js"></script>
<script src="js/functions.js"></script>

</body>
</html>

