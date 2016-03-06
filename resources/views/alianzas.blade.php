<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genofood</title>
    <meta name="description" content="Genofood –">
    <meta name="keywords" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo url('/') ?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo url('/') ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('/') ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('/') ?>/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/font-awesome-4.3.0/css/font-awesome.css">

    <!-- Plugins CSS
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/animate.css"><!-- animation -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/bgndGallery.css"><!-- bgndGallery -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/js/fancybox/jquery.fancybox.css?v=2.1.5"><!-- Fancybox  -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/calendar/fullcalendar.min.css"><!-- Calendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/js/bxslider/jquery.bxslider.css"><!-- BxSlider -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/jquery.rs.selectbox.css"><!-- Selectbox --> 
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/js/owlcarousel/owl.carousel.css"><!-- owl carousel -->
    
    <!-- Custom Css 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/rs-wp-v1.2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/responsive.css">

    <!-- Fonts 
    ================================================== -->
    <link href='<?php echo url('/') ?>/fonts/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!-- Preloader -->
    <div id="pageLoading">
        <div class="bouncing">
            <em class="icon-food"></em>
        </div>
    </div>
    
    <!--- Wrapper -->
    <div id="wrapper" class="home-page">
        <header id="header">
            <div class="container">
                <div class="rst-table">
                    <div class="rst-table-row">
                        <a href="<?php echo url('/') ?>/index.html" class="rst-logo rst-table-cell"></a>
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="rst-nav-menu collapse navbar-collapse bs-navbar-collapse rst-table-cell">
                            <form class="rst-search-mobie" action="/">
                                <button class="rst-submit"><i class="fa fa-search"></i></button>
                                <input type="text" value="" />
                            </form>
                            @include("common/menu")
                            <a href="<?php echo url('/') ?>/#" class="rst-search-bottom"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="rst-account rst-table-cell">
                            <div class="rst-cart">
                                <a href="<?php echo url('/') ?>/#" class="rst-cart-icon"><span>2</span></a>
                                <div class="rst-form-login rst-cart-info">
                                    <div class="rst-list-product">
                                        <div class="rst-product-item">
                                            <a href="<?php echo url('/') ?>/#">Sashimi &amp; vasabi <span class="count">2</span> <span class="price">$20</span></a>
                                        </div>
                                        <div class="rst-product-item">
                                            <a href="<?php echo url('/') ?>/#">Dinner menu <span class="count">2</span> <span class="price">$25</span></a>
                                        </div>
                                        <div class="rst-product-item">
                                            <a href="<?php echo url('/') ?>/#">Salade menu <span class="count">2</span> <span class="price">$25</span></a>
                                        </div>
                                    </div>
                                    <div class="rst-checkout">
                                        <a href="<?php echo url('/') ?>/checkout.html" class="btn btn-success btn-sm">Comprar</a>
                                        <span class="price">$70</span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo url('/') ?>/comensal/add" class="rst-signup btn btn-success">Registrarte</a>
                        </div>
                    </div>
                </div><!-- End Top Header -->
                <div class="rst-search rst-table">
                    <div class="rst-table-row">
                        <div class="rst-table-cell">
                            <form action="/">
                                <input type="text" placeholder="Buscar tu termino" value="" />
                            </form>
                            <a href="<?php echo url('/') ?>/#" class="rst-hide-form"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                </div><!-- End Top Header -->
            </div>
        </header>   

        <!-- Hero Sliders -->
        <div id="main-slider">
            <div class="owl-carousel owl-theme">
                <div class="item active"><!-- Item Slider #1 -->
                    <div id="slider-item-1" class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="rst-table">
                                        <div class="rst-table-row">
                                            <div class="rst-table-cell" style="width: 100%">
                                                
                                                <h2>Genofood. <br />Encuentra tu genotipo.</h2>
                                                <p>Y come lo que necesitas.</p>

                                                <!--<a class="btn btn-lg btn-danger" href="<?php echo url('/') ?>/#">Ver menú</a>
                                                <a class="rst-down while" href="<?php echo url('/') ?>/#"><i class="fa fa-chevron-down"></i></a>-->
                                                
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="owl-main" src="<?php echo url('/') ?>/img/post/slides01.jpg" alt="" />
                </div>
                <!--<div class="item">
                    <div id="slider-item-2" class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="rst-table">
                                        <div class="rst-table-row">
                                            <div class="rst-table-cell" style="width: 50%;vertical-align: bottom;">
                                                <img src="<?php echo url('/') ?>/img/post/people.png" alt="" />
                                            </div>
                                            <div class="rst-table-cell" style="width: 50%">
                                                <div class="text-right">
                                                    <h2>We opened. <br />Tasty food & drinks.</h2>
                                                    <p>Sed in massa metus. Vestibulum eu felis fermentum.</p>
                                                    
                                                    <a class="btn btn-lg btn-danger" href="<?php echo url('/') ?>/#">Ver menú</a>
                                                    <a class="rst-down while" href="<?php echo url('/') ?>/#"><i class="fa fa-chevron-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="owl-main" src="<?php echo url('/') ?>/img/post/slides03.jpg" alt="" />
                </div>
                -->
                <!--
                <div class="item">
                    <a class="owl-video" href="<?php echo url('/') ?>/http://vimeo.com/23924346"></a>
                    <img class="owl-main" src="<?php echo url('/') ?>/img/post/slides01.jpg" alt="" />
                </div>
                <div class="item"> 
                    <div id="slider-item-3" class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="rst-table">
                                        <div class="rst-table-row">
                                            <div class="rst-table-cell" style="width: 50%">
                                                <h2>We opened. <br />Tasty food & drinks.</h2>
                                                <p>Sed in massa metus. Vestibulum eu felis fermentum.</p>
                                                
                                                <a class="btn btn-lg btn-danger" href="<?php echo url('/') ?>/#">Ver menú</a>
                                                <a class="rst-down while" href="<?php echo url('/') ?>/#"><i class="fa fa-chevron-down"></i></a>
                                                
                                            </div>
                                            <div class="rst-table-cell" style="width: 50%">
                                                <div class="rst-slider-menu">
                                                    <img src="<?php echo url('/') ?>/img/post/bg_slider.jpg" alt="" />
                                                    <h3>Menu</h3>
                                                    <p class="description-heading">Traditional or classic</p>
                                                    
                                                    <h5>Neapolitan pizza</h5>
                                                    <p class="rst-price">$19.95</p>
                                                    <h5>Premium pizza </h5>
                                                    <p class="rst-price">$22</p>
                                                    <h5>Classic pizza</h5>
                                                    <p class="rst-price">$19.95</p>
                                                    <h5>artisan pizza</h5>
                                                    <p class="rst-price">$19.95</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="owl-main" src="<?php echo url('/') ?>/img/post/slides04.jpg" alt="" />
                </div>
            -->
            </div>
        </div><!-- end Hero Sliders -->
    

    <div class="row" style="
    text-align: center;
    font-size: 50px;
    padding: 50px;
">
        Alianzas
    </div> 

    <div style="text-align:center;width:100%">
 
    </div>

    <div style="width:45%;position:relative;float:left;text-align:center">
        <img src="http://www.ivoy.mx/imgs/logo-ivoy.png" style="background: rgba(127, 127, 127, 0.18);">
        <h2>ivoy</h2>
        <h3>http://www.ivoy.mx/</h3>
        
    </div>

    <div style="width:45%;position:relative;float:left;text-align:center">
        <img src="http://chelajs.com/img/logo-conekta.png" style="max-width: 290px;">
        <h2>Conekta</h2>
        <h3>https://www.conekta.io</h3>
    </div>
    <div class="clearfix"></div>



        <!--- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="rst-table">
                        <div class="rst-table-row">
                            <div class="rst-copyright rst-table-cell">
                                <a href="<?php echo url('/') ?>/#" class="rst-logo-footer"><img src="<?php echo url('/') ?>/img/logo-footer.png" alt="" /></a>&copy; Genofood
                            </div>
                            <div class="rst-menu-footer rst-table-cell">
                                <ul> 
                                </ul>
                            </div>
                            <div class="rst-note rst-table-cell">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="rst-backtop" href="<?php echo url('/') ?>/#"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
        </footer>
    </div><!--- End Wrapper -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.1.11.1.js"></script>
  
    <!-- Bootstrap Js Compiled Plugins -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/bootstrap.min.js"></script>
    
    <!-- Backstretch Plugins -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.backstretch.js"></script>
    
    <!-- Form Js -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.rs.form.js"></script>
    
    <!-- BxSlider -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/bxslider/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo url('/') ?>/js/bxslider/jquery.bxslider.min.js"></script>
    
    <!-- Fancybox -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
    
    <!-- Selectbox Js -->
    <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.rs.selectbox.js"></script>
    
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places"></script>
    
    <!-- WoW Plugins -->
    <script src="<?php echo url('/') ?>/js/wow.min.js"></script>
    
    <script type='text/javascript' src='<?php echo url('/') ?>/js/woocommerce.js'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo url('/') ?>/js/single-product.min.js'></script>
    
    <script type='text/javascript' src="<?php echo url('/') ?>/js/bootstrap-slider.js"></script>
    
    <script type='text/javascript' src="<?php echo url('/') ?>/js/owlcarousel/owl.carousel.min.js"></script>
    
    <script src='<?php echo url('/') ?>/js/calendar/moment.min.js'></script>
    <script src='<?php echo url('/') ?>/js/calendar/fullcalendar.min.js'></script>
    
    <script type="text/javascript" src="<?php echo url('/') ?>/js/main.js"></script>

  </body>
</html>