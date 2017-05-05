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
<title>Castle | My Properties</title>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


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

<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" ><i class="icon-icons230"></i>Meus Dados</a></li>
          <li><a href="my_tipos.php" class="active"><i class="icon-icons215"></i> Dados de Imóveis</a></li>
          <li><a href="my_properties.php" ><i class="icon-icons215"></i> Meus Imóveis</a></li>
          <li><a href="submit_property.php"><i class="icon-icons215"></i> Adicionar Imóvel</a></li>
          <li><a href="login.php?log=out"><i class="icon-lock-open3"></i>Sair</a></li>
        </ul>
      </div>
    </div>
    <div class="row bottom30">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase">Dados do Imóvel</h2>
      </div>
    </div>
  </div>


  <div class="container list-t-border col-md-10 col-md-offset-1">

    <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-10 col-sm-10 col-xs-10">
            <form class="callus clearfix border_radius submit_property">
              <div class="row">
                
                    <div class="container-2">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="search-form-group white bottom10">
                            <input type="radio" name="item-imovel">
                            <span>Tipo do imóvel</span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="search-form-group white bottom10">
                            <input type="radio" name="item-imovel">
                            <span>Cidade do Imóvel</span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="search-form-group white bottom10">
                            <input type="radio" name="item-imovel">
                            <span>Bairro do Imóvel</span>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="search-form-group white bottom10">
                            <input type="radio" name="item-imovel">
                            <span>Características do Imóvel</span>
                          </div>
                        </div>
                      </div>
                    </div>

              </div>
            </form>
        </div>
      </div>
    </div>  
    <div class="row bg-hover-gray">
      <form class="callus clearfix border_radius submit_property">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
                <div class="single-query form-group bottom20">
                  <label align="center" style="width: 100%;">Bairro / Tipo / Cidade / Caracteristicas de imóvel</label>
                  <input type="text" class="keyword-input" placeholder="Cadastre um tipo de imóvel">
                  
                </div>
            <div class="single-query bottom20">
              <label>Cidade </label>
              <div class="intro">
                <select >
                  <option class="active">Navegantes</option>
                  <option>Piçarras</option>
                  <option>Penha </option>
                  
                  <!-- <option>For Rent</option> -->
                </select>
              </div>
            </div>  
            <button type="submit" class="btn-blue border_radius margin40">Cadastrar</button>              
          </div>
        </div>
      </form>
    </div>  
    <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-8 col-sm-10 col-xs-10">
            <form class="callus clearfix border_radius submit_property">
              <div class="row">
                <div class="col-md-12">
                    <div class="single-query bottom20">
                      <!-- <label>Tipo </label> -->
                      <div class="intro">
                        <select id="tabela-teste">
                          <option class="active">Apartamento</option>
                          <option>Casa</option>
                          <option>Chácara </option>
                          <option>Sala Comercial</option>
                          <!-- <option>For Rent</option> -->
                        </select>
                      </div>
                    </div>
                </div>
              </div>
            </form>
        </div>
        <div class="col-md-4 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#" data-toggle="modal" data-target="#myModal"><i class="icon-pen2"></i></a>
            <a href="#" data-toggle="modal" data-target="#myModal"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>
    
    

    
    
  </div>

  <div class="container">
    <div class="row padding_top">
      <div class="col-md-12">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- My - Property end -->



<!--Footer-->
<footer class="footer_third">
  <div class="container contacts">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul class="text-center">
            <li><strong>Phone Number</strong></li>
            <li>+1 900 234 567 - 68</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul class="text-center">
            <li><strong>Manhattan Hall,</strong></li>
            <li>Castle Melbourne, australia</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons142"></i></div>
          <ul class="text-center">
            <li><strong>Email Address</strong></li>
            <li><a href="#.">info@castle.com</a></li>
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
          <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
            tempor cum consectetuer 
            adipiscing.
          </p>
          <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Search by Area</h4>
          <table style="width:100%;">
            <tbody>
              <tr>
                <td>
                  <ul class="links">
                    <li><a href="#."><i></i>About</a></li>
                    <li class="active"><a href="#."><i></i>News</a></li>
                    <li><a href="#."> <i></i>Contacts</a></li>
                    <li><a href="#."><i></i>Testimonials</a></li>
                    <li><a href="#."><i></i>Typography</a></li>
                  </ul>
                </td>
                <td class="text-right">
                  <ul class="links text-left">
                    <li><a href="#."><i></i>Services</a></li>
                    <li class="active"><a href="#."><i></i>Careers</a></li>
                    <li><a href="#."><i></i>Our team</a></li>
                    <li><a href="#."><i></i>Shop</a></li>
                    <li><a href="#."><i></i>Our approach</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Latest News</h4>
          <div class="media bottom30">
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Subscribe</h4>
          <p>Sign up with your email to get latest updates and offers</p>
          <form class="top30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a class="button_s" href="#.">
            <i class="icon-mail-envelope-open"></i>
            </a>
          </form>
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
