<?php
  require('data/class.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imóveis - Contato</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
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
 
 

<?php
  include('includes/header_include.php');
?>


<!--Contact-->
<section id="contact-us">
  <div class="contact">
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.31261806768!2d-48.64230548495632!3d-26.861807083149486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8ce78225d2ff3%3A0x3868484a8c8ff7f!2sAv.+Pref.+Jos%C3%A9+Juvenal+Mafra+-+Gravat%C3%A1%2C+Navegantes+-+SC%2C+88372-506!5e0!3m2!1ses!2sbr!4v1492194952868" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="container">
      <div class="row">
        
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 col-sm-4 col-xs-12  contact-text">

            	<div class="agent-p-contact">
                	<div class="our-agent-box bottom30">
                        <h2>Onde Estamos</h2>
                    </div>
                    <div class="agetn-contact-2 bottom30">
                      	 <p><i class="icon-telephone114"></i> (47) 99909-3456</p>
                         <p><i class=" icon-icons142"></i> dalmirimoveis@hotmail.com</p>
                         
                         <p><i class="icon-browser2"></i>www.dalmirimoveis.com</p>
                         <p><i class="icon-icons74"></i> Av. Pref. José Juvenal Mafra, 6783. CEP-88372-506. Gravatá - Navegantes / SC</p>
                      </div>
                    <ul class="social_share bottom20">
                    <li><a href="https://www.facebook.com/dalmir.demarch?hc_ref=SEARCH&fref=nf" target="_blank"  class="facebook"><i class="icon-facebook-1"></i></a></li>
          </ul>
                </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>Fale Conosco</h2>
                    </div>
                    
                    <div class="row">
                      <form action="#" class="callus">
                        <div class="col-md-12">
                          <div class="single-query form-group">
                            <input type="text" placeholder="Seu nome" id="edtName" class="keyword-input">
                            </div>
                            <div class="single-query form-group">
                            <input type="text" placeholder="Telefone" id="edtTelefone" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <input type="text" placeholder="E-mail" id="edtEmail" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <textarea placeholder="Mensagem" id="edtMensagem" class="form-control"></textarea>
                          </div>
                          <input type="button" value="Enviar Agora" onclick="sendContact()" class="btn-blue">
                          </div>
                      </form>
                      
                    </div>
                	
                </div>
                
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Contact End -->
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
<!--Revolution Slider-->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>

<script src="js/neary-by-place.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="js/gmaps.js.js"></script>
<script src="js/contact.js"></script>

<script src="js/google-map.js"></script> 
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax/email/contato-imobiliaria.js"></script>



</body>
</html>
