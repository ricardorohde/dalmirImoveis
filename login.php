<?php

  include('data/class.php');

  $user = new User();
  if(isset($_GET['log'])) 
    if($_GET['log'])
    {
      $user->logout();
    }

  if($user->logado)
  {
    header("Location: submit_property.php");
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imóveis | Login</title>
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



<!-- Login -->
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <!-- <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li> -->
            
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
          <h3 align="center" style="color:white; margin-bottom: 10px">Login</h3>
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
                <form action="#" class="callus clearfix">
                  <div class="single-query form-group col-sm-12">
                    <input type="text" class="keyword-input" placeholder="Login" name="loginAdm">
                  </div>
                  <div class="single-query form-group  col-sm-12">
                    <input type="password" class="keyword-input" placeholder="Senha" name="senhaAdm">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6">
                        <div class="search-form-group white form-group text-left">
                          <!-- <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div> -->
                          <!-- <span>Remember Me</span> -->
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <!-- <a href="#" class="lost-pass">Lost your password?</a> -->
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="button" value="Entrar" class="btn-slide border_radius" onclick="requestLogin()"> 
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login end -->
<?php
  include('includes/footer_include.php');
?>


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
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax/user/requestUser.js"></script>
</body>
</html>

