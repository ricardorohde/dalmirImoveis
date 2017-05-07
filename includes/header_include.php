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
        <div class="page-banner-contact page-banner padding-b-80 padding-t-80">
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
                          <?php
                                $params = Imovel::emptyFiltro();
                                $params['cod_transacao'] = '1';
                                Imovel::listImoveisMenu($params);
                          ?>
                        </div>
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
          </ul>
        </div>
    </div>
  </nav>
</header>