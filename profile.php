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
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
