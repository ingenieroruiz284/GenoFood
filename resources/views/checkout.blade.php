<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genofood — Multi-Purpose Food &amp; Restaurant Theme</title>
    <meta name="description" content="Genofood – Multi Page Oriented Template with pretty clean and simple design perfect for and Food &amp; Restaurant Business. Created, specially for food services. Has many functional blocks, shortcodes, including modal windows, dropdowns and many other cool items.">
    <meta name="keywords" content="bar, coffee shop, food, multi-purpose, bootstrap, html, responsive, business, restaurant">
    <meta name="author" content="JLP Media">
    
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
    
    <!-- Custom Css 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/rs-wp-v1.2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/responsive.css">

    <!-- Fonts 
    ================================================== -->
    <link href='fonts/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

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
            <i class="fa fa-circle-o-notch fa-spin" style="position: relative;top: 22px;"></i>
        </div>
    </div>
    
    <!--- Wrapper -->
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="rst-table">
                    <div class="rst-table-row">
                       <!-- <a href="<?php echo url('/') ?>/index.html" class="rst-logo rst-table-cell"><img src="<?php echo url('/') ?>/img/logo.png" alt="" /></a>-->
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
                            <a href="<?php echo url('/') ?>/comensal/add" class="rst-signup btn btn-success">Registrate</a>
                        </div>
                    </div>
                </div><!-- End Top Header -->
                <div class="rst-search rst-table">
                    <div class="rst-table-row">
                        <div class="rst-table-cell">
                            <form action="/">
                                <input type="text" placeholder="type and hit enter" value="" />
                            </form>
                            <a href="<?php echo url('/') ?>/#" class="rst-hide-form"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                </div><!-- End Top Header -->
            </div>
        </header>   

        <div id="content">
        <div class="container rst-main-content">
            <div class="text-center">
                <h1>Pasarela pagos</h1>
                <p class="description-heading">Sed in massa metus. Vestibulum eu felis fermentum.</p>
            </div>
            <br /><br /><br />
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-border-row table-card">
                        <thead>
                            <tr>
                                <th class="product-name">Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th class="price">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-name">
                                    <a class="remove" href="<?php echo url('/') ?>/#"><i class="fa fa-close"></i></a>
                                    <img class="img-circle" src="<?php echo url('/') ?>/img/post/product-card-01.jpg" alt="" />
                                    Sashimi & vasabi
                                </td>
                                <td>$10</td>
                                <td>
                                    <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="2" title="Qty" class="input-text qty text" size="4" /></div>
                                </td>
                                <td class="price">$20</td>
                            </tr>
                            <tr>
                                <td class="product-name">
                                    <a class="remove" href="<?php echo url('/') ?>/#"><i class="fa fa-close"></i></a>
                                    <img class="img-circle" src="<?php echo url('/') ?>/img/post/product-card-02.jpg" alt="" />
                                    Hamburger 
                                </td>
                                <td>$10</td>
                                <td>
                                    <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="1" title="Qty" class="input-text qty text" size="4" /></div>
                                </td>
                                <td class="price">$25</td>
                            </tr>
                            <tr>
                                <td class="product-name">
                                    <a class="remove" href="<?php echo url('/') ?>/#"><i class="fa fa-close"></i></a>
                                    <img class="img-circle" src="<?php echo url('/') ?>/img/post/product-card-03.jpg" alt="" />
                                    Pizza menu 
                                </td>
                                <td>$10</td>
                                <td>
                                    <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="1" title="Qty" class="input-text qty text" size="4" /></div>
                                </td>
                                <td class="price">$25</td>
                            </tr>
                            <tr class="subtotal">
                                <th></th>
                                <th></th>
                                <th>subtotal</th>
                                <th class="price">$70</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br /><br /><br />
            <div class="rst-form-input form-checkout">
                <div class="row">
                    <div class="col-sm-6 checkout-address">
                        <h4><span class="rst-circle">1</span>Direccion</h4>
                        <div class="form-group">
                            <label>Nombre completo</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Pais</label>
                            <select name="" class="form-control">
                                <option value="">USA</option>
                                <option value="1">VietNam</option>
                                <option value="2">England</option>
                                <option value="3">Russia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Número de teléfono</label>
                            <input type="text" name="name" class="form-control" value="+1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Comentarios</label>
                            <textarea class="form-control" name="comments" rows="10" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 checkout-payment">
                        <h4><span class="rst-circle">2</span>Tipo de pago</h4>
                        <div class="form-group">
                            <label>Selecciona</label>
                            <select name="" class="form-control">
                                <option value="">Mastercard</option>
                                <option value="1">Visa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Detalle</label>
                            <input type="text" name="name" class="form-control" value="" placeholder="×××× — ×××× — ×××× — ××××">
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*</label>
                                    <select name="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label> &nbsp; </label>
                                    <select name="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>CVC</label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="btn btn-lg btn-success" type="submit" value="Check out">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Content -->
        
    </div>
        <!--- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="rst-table">
                        <div class="rst-table-row">
                            <div class="rst-copyright rst-table-cell">
                                <a href="<?php echo url('/') ?>/#" class="rst-logo-footer"><img src="<?php echo url('/') ?>/img/logo-footer.png" alt="" /></a>&copy; Genofood.
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
    <script src="<?php echo url('/') ?>/https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places"></script>
    
    <!-- WoW Plugins -->
    <script src="<?php echo url('/') ?>/js/wow.min.js"></script>
    
    <script type='text/javascript' src='js/woocommerce.js'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='js/single-product.min.js'></script>
    
    <script type='text/javascript' src="<?php echo url('/') ?>/js/bootstrap-slider.js"></script>
    
    <script type='text/javascript' src="<?php echo url('/') ?>/js/owlcarousel/owl.carousel.min.js"></script>
    
    <script src='js/calendar/moment.min.js'></script>
    <script src='js/calendar/fullcalendar.min.js'></script>
    
    <script type="text/javascript" src="<?php echo url('/') ?>/js/main.js"></script>

  </body>
</html>