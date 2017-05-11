<?php
  require('data/class.php');

  $imovel = new Imovel();
  $buildedImovel = array();
  $imagens = array();
  $dif = array();

  if(isset($_GET['c'])){
    $buildedImovel = $imovel->buildImovelSingle($_GET['c']);
    // var_dump($buildedImovel);
    $imagens = $imovel->getPicturesSingleImovel($_GET['c']);
    $dif = $imovel->buildCharactersImovel($_GET['c']);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Dalmir Imóveis - <?php echo $buildedImovel['titulo'] ?> </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="icon" href="images/icon.png">
</head>
<style type="text/css">
body.modal-open #wrap{
    -webkit-filter: blur(7px);
    -moz-filter: blur(15px);
    -o-filter: blur(15px);
    -ms-filter: blur(15px);
    filter: blur(15px);
}
  
.modal-backdrop {background: #f7f7f7;}

.close {
    font-size: 50px;
    display:block;
}  
</style>
<body>


<div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        <br><br>
        <h1 style="font-size: 170pt"><i class="fa fa-envelope-o" aria-hidden="true"></i></h1>
        <h2>Enviado com sucesso!</h2>
        <h4>Retornaremos o mais breve possível, Obrigado!</h4>
        <hr>
      </div>
    </div>
  </div>
</div>


<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>

<?php
  include('includes/header_include.php');
?>
<!--Header Ends-->
<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase" id="p_titulo_imovel"><?php echo $buildedImovel['titulo'] ?></h2>
        <p class="bottom30">Código: <span id="p_cod_imovel"><?php echo $buildedImovel['cod_imovel'] ?></span></p>
        <div id="property-d-1" class="owl-carousel">
 
        <?php
            foreach ($imagens as $key => $value) {
        ?>
          <div class="item"><img src="data/imovel/<?php echo $value['caminho_img'] ?>" alt="image"/></div>
        <?php
            }
        ?>
        </div>
        <div id="property-d-1-2" class="owl-carousel">
        <?php
            foreach ($imagens as $key => $value) {
        ?>
          <div class="item"><img src="data/imovel/<?php echo $value['caminho_thumb'] ?>" alt="image"/></div>
        <?php
            }
        ?>
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i><?php echo $buildedImovel['area'] ?> m²</span>
          <span><i class="fa fa-bed" aria-hidden="true"></i><?php echo $buildedImovel['quartos'] ?> Quarto(s)</span>
          <span><i class="fa fa-bed" aria-hidden="true"></i><?php echo $buildedImovel['suite'] ?> Suite(s)</span>
          <span><i class="icon-safety-shower"></i><?php echo $buildedImovel['banheiro'] ?> Banheiro(s)</span>
          <span><i class="icon-garage"></i><?php echo $buildedImovel['banheiro'] ?> Vaga(s) de Garagem</span>
        </div>
        <h2 class="text-uppercase">Descrição</h2>       
        <div class="text-it-p bottom40">
          <p><?php echo $buildedImovel['descricao'] ?></p>
        </div>
        <h2 class="text-uppercase bottom20">Detalhes</h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Bairro</b></td>
                  <td class="text-right"><?php echo $buildedImovel['bairro'] ?></td>
                </tr>
                <tr>
                  <td><b>Valor</b></td>
                  <td class="text-right valor-imovel-price"><?php echo $buildedImovel['valor'] ?></td>
                </tr>
                <tr>
                  <td><b>Área</b></td>
                  <td class="text-right"><?php echo $buildedImovel['area'] ?> m²</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Banheiros</b></td>
                  <td class="text-right"><?php echo $buildedImovel['banheiro'] ?></td>
                </tr>
                <tr>
                  <td><b>Quartos</b></td>
                  <td class="text-right"><?php echo $buildedImovel['quartos'] ?></td>
                </tr>
                <tr>
                  <td><b>Suíte</b></td>
                  <td class="text-right"><?php echo $buildedImovel['suite'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Diferenciais</h2>
        <div class="row bottom40">

        <?php
          $i = 1;
          $fechou = false;
          foreach ($dif as $key => $value) {
            $flag = ($i - 1) % 4;
            $fechou = false;
            if($flag == 0)
            {
              ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
              <?php
            }
              ?>
              <li><?php echo $value['descricao'] ?></li>
             <?php

            if($i % 4 == 0)
            {
                $fechou = true;
              ?>
             
                </ul>
              </div>
            <?php

            }

            if(!$fechou)
            {
              ?>
                </ul>
              </div>
              <?php
            }
          }
        ?>
        </div>
        <div class="row bottom40">

          <?php
              if($buildedImovel['video'] != '')
              {

          ?>
              <div class="col-md-12 padding-b-20">
                <h2 class="text-uppercase bottom20">Apresentação em vídeo</h2>
                <div class="pro-video">
                  <figure class="wpf-demo-gallery">
                    <?php echo $buildedImovel['video'] ?>
                  </figure>
                </div>
              </div>

          <?php
              }
          ?>

          


        </div>        
        <h2 class="text-uppercase bottom20">Entre em contato</h2>
        <div class="col-sm-12 bottom40">
            <form class="callus">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" id="edtName" class="form-control" placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <input type="tel" id="edtTelefone" class="form-control" placeholder="Telefone">
                  </div>
                  <div class="form-group">
                    <input type="email" id="edtEmail" class="form-control" placeholder="E-mail">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <textarea class="form-control" id="edtMensagem" placeholder="Mensagem"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 row">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="button" onclick="sendVisit()" class="btn-blue uppercase border_radius" value="Enviar Agora">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <div class="row">
            <div class="col-sm-10">
            <!-- <h2 class="text-uppercase top20">Imóveis similares</h2> -->
            </div>
            <div class="col-sm-12"><div id="two-col-slider" class="owl-carousel">
              <?php
                Imovel::listMoreImoveis($buildedImovel['cod_bairro']);

              ?>
              
            </div></div>
          </div>

      </div>
    
      <?php
        include('includes/search_include.php');
      ?>
    </div>
  </div>
</section>
<!-- Property Detail End -->
<?php
  include('includes/footer_include.php');
?>

</div>
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
<script src="js/ajax/search/loadPrice.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax/search/search.js"></script>
<script src="js/ajax/email/contato-imobiliaria.js"></script>
</body>
</html>

