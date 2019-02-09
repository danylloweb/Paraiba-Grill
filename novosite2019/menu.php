<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Paraíba Grill</title>
    <meta name="description" content="Food, Restaurant & Cafe HTML Template" />
    <meta name="keywords" content="Food, Restaurant, Cafe, Responsive, HTML5" />
    <meta name="author" content="httpcoder.com" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://yourdomain.com" />
    <meta name="twitter:title" content="Your home page title, max 140 char" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg" />  <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg" /> <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />  <!-- this icon shows in browser toolbar -->
  
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cCookie"/>


    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="assets/libs/datepicker/bootstrap-datetimepicker.min.css" media="all"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="csi-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body class="page page-template">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="csi-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

    <!--HEADER-->
    <?php
require_once 'includes/topo-internas.php';
?>

    <!--HEADER END-->


    <!--Banner-->
    <section>
        <div class="csi-banner csi-banner-inner csi-menu">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading-area">
                                <h2 class="csi-heading">
                                    Nosso Menu
                                </h2>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"><i class="icon-home6"></i>Início</a></li>
                                    <li class="active">Menu</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div>
                <!-- //.container -->
            </div>
        </div>
    </section>
    <!--Banner END-->


    <!--MENU ITEMS-->
    <section>
        <div id="csi-menu" class="csi-menu csi-menu-inner">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="csi-nav-pills-area">
                                <ul class="nav nav-pills csi-nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#home">Saladas</a></li>
                                    <li><a data-toggle="pill" href="#menu1"> Quentinhas</a></li>
                                    <li><a data-toggle="pill" href="#menu2"> Self Service</a></li>
                                    <li><a data-toggle="pill" href="#menu3"> Guarnições</a></li>
                                    <li><a data-toggle="pill" href="#menu4"> Pratos Invididuais</a></li>
                                    <li><a data-toggle="pill" href="#menu5"> Pratos para 2 pessoas</a></li>
                                    <li><a data-toggle="pill" href="#menu6"> Petiscos</a></li>
                                    <li><a data-toggle="pill" href="#menu7"> Ensopado</a></li>
                                    <li><a data-toggle="pill" href="#menu8"> Tapioca</a></li>
                                    <li><a data-toggle="pill" href="#menu9"> Sanduíches</a></li>
                                    <li><a data-toggle="pill" href="#menu10"> Salgados</a></li>
                                    <li><a data-toggle="pill" href="#menu11"> Sobremesas</a></li>
                                    <li><a data-toggle="pill" href="#menu12"> Bebidas</a></li>
                                      

                                </ul>
                            </div>

                            <div class="tab-content csi-tab-content">
                                <div id="home" class="tab-pane fade in active" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Verão</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Folhas de alface, cenoura palito cozida, tomates, pepino regado com azeite aromatizado.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Crocante</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Repolho branco, em corte bem fino, cenoura ralada, tomate, cebola com molho de ervas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                      <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Mix</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Mix de folhas, tomates e molho de laranja.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Refrescante</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Tomate, pepino, cebola, manjericão fresco, molho pesto.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Grelhada</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text"> 2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Batata doce, cenoura, vagem grelhada na chapa, acompanhado de mostarda.                    </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Natural</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) -
                                                    Alface, beterraba e cenoura ralada, tomate, acompanhada de molho de azeite e limão.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Salex</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) - 
                                                    Mix de folhas, beterrabas cozidas em cubos no molho agridoce e abacaxi grelhado.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salada Tropical</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    2 pedaços de proteína (frango, peixe ou fígado) -
                                                    Acelga em corte bem fino, alface, lascas de melão, manga e abacaxi, molho de mostarda.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     
                                </div>


                                    <!--//.MARMITAS-->

                                <div id="menu1" class="tab-pane fade">
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="single-item.html"><img src="assets/img/menu/quentinha-1.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Quentinha até 800g</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 11,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Frango, linguiça ou suíno
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="single-item.html"><img src="assets/img/menu/quentinha-2.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Quentinha até 800g</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 13,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Com 2 pedaços carne ou peixe.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                    
                                </div>

                                <!--//.SELF SERVICE-->
                                <div id="menu2" class="tab-pane fade" style="margin-left:100px;">

                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Self Service sem balança</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 15,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Com 2 pedaços de carne, linguiça, peixe ou suíno
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Self Service Kg</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 45,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Self Service só carne</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 59,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Kg
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Sopa</a></h3>
                                                    <p class="price">
                                                        <span>R$</span> 8,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                </div>

                                <!--//.guarnicoes-->
                                <div id="menu3" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Arroz Branco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Arroz à Grega</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Espaguete</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Fritas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>13,90
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Purê de batatas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Macaxeira Cozida</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Macaxeira Frita</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Feijão Verde</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>10,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->

                                </div>
                                <!--//.pratos individuais-->
                                <div id="menu4" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Picanha Grelhada</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>18,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Carne de Sol</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>18,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé Mignon a Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>18,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz ou espaguete, fritas ou purê de batatas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé Frango a Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>14,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                     Arroz ou espaguete, fritas ou purê de batatas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Frango Desossado</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>14,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão ao Molho de Coco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>24,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão a Delicia</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>24,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão à Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>24,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão Crocante</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>24,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Pescada Amarela</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>19,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Tilápia</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>19,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Cioba</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>19,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->

                                </div>

                                <!--//.pratos para 2 pessoas-->
                                <div id="menu5" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Peixada à Brasileira</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>59,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, legumes e pirão.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé Mignon à Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>38,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Frango Desossado</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>29,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Feijão verde, arroz, macaxeira, vinagrete, farrofa, maionese e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Frango à Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>29,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz ou espaguete, fritas ou purê de batatas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Frango à Cordon Blue</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>29,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Frango recheado com queijo e presento, arroz, fritas e banana à milanesa.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Churrasco Misto com Calabresa</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>65,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Calabresa, filé de frango, arroz, feijão verde, macaxeira, vinagrete, farrofa, maionese e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Picanha Nacional</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>38,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                   Arroz, feijão verde, macaxeira, vinagrete, farrofa, maionese e fritas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Carne de Sol</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>38,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, feijão verde, macaxeira, vinagrete, farrofa, maionese e fritas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <<!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Picanha Argentina</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>71,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, feijão verde, macaxeira, vinagrete, farrofa, maionese e fritas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Churrasco Misto com Camarão</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>73,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Picanha, camarão, filé de frango, arroz, feijão verde, macaxeira, vinagrete, farrofa, maionese e fritas.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão à Parmegiana</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>49,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e Purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão a Delicia</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>49,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e Purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão ao Molho de Coco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>49,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e Purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão Crocante</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>49,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz e Purê.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Pescada Amarela</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Tilápia</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                   Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                    <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé de Cioba</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Arroz, fritas e salada ou arroz, purê e saladas
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->

                                </div>
                                <!--//.PETISCOS-->
                                <div id="menu6" class="tab-pane fade" style="margin-left:100px">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Fritas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>13,90
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão ao alho e oleo</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>38,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão ao Molho de Coco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão ao Molho de Tomate</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Isca de Frango</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>14,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Filé Mignon com Fritas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Carne de Sol com Fritas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>34,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Picanha Nacional</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>36,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Picanha Argentina</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>49,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Camarão com Fritas</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>39,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->


                                </div>

                                <!--//.ENSOPADOS-->
                                <div id="menu7" class="tab-pane fade" style="margin-left:100px">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Ensopado de Peixe</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Ensopado de Carangueijo</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>12,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Ensopado de Camarão</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>14,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    

                                </div>

                                <!--//.TAPIOCA-->
                                <div id="menu8" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Tapioca com Coco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Tapioca com Queijo e Coco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Tapioca com Coco e Leite Condensado</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                    
                                </div>

                                 <!--//.SANDUICHES-->
                                <div id="menu9" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Misto Quente</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,90
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão, queijo e presunto.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Hamburguer</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão e hambuguer.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cheeseburguer</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão, hambuguer e queijo.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cheese Egg Burguer</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão, hambuguer, queijo e ovo.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cheese Bacon Burguer</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão, hambuguer, queijo e bacon
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cheese Tudo Burguer</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Pão, hambuguer, queijo, ovo, bacon e calabresa.
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                    
                                </div>

                                <!--//.SALGADOS-->
                                <div id="menu10" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Salgados Variados</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>3,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Variados
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                
                                </div>
                                 <!--//.SOBREMESAS-->
                                <div id="menu11" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Mousse</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Fatia
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Pudim de Leite</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Bolo</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>3,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Fatia
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Vitamina</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Copo
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Torta</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Fatia
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                </div>
                                 <!--//.bebidas-->
                                <div id="menu12" class="tab-pane fade" style="margin-left:100px;">
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Café Expresso</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                   
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Suco Copo</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Adicional de leite ao suco R$ 1,00
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Suco Jarra</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>12,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Adicional de leite ao suco R$ 1,00
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Água sem gás</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>3,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Água com gás</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">H2o/Limoneto</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Água Tônica(Lata)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Refrigerante Ks(290ml)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Refrigerante Lata</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Refrigerante (1 Litro)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Heineken Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Budweiser Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Skol Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Stella Artois Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Malzebier Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Sem Álcool Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cachaça Serra Limpa</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cachaça Triunfo</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cachaça Rainha</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Bacardi/Carta Branca</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Montila cristal</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Smirnoff</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Smirnoff Ice Long Neck</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Orloff</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>5,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Absolut</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Teacher's</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,50
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Johnnie Walker red label (8 anos)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Johnnie Walker black label (12 anos)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>11,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Chivas Regal (12 anos)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>11,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Old Par (12 anos)</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>11,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Black & White</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Cointreau</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>6,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab--> 
                                    <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Amarula</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Frangelico</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>7,00
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Martini Bianco</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,50
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Martini Rose</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,50
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                        <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Martini Campari</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>4,50
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->
                                     <div class="csi-single-tab">
                                       <!--<div class="menu-thumb">
                                            <a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>
                                        </div>-->
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="single-item.html">Red Bull</a></h3>
                                                    <p class="price">
                                                        <span>R$</span>9,99
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    
                                                </p>
                                            </div> <!--//.single tab-->
                                        </div>
                                    </div><!--//.csi-single-tab-->

                                    
                                    
                                </div>
                                 
                                    
                                    
                
                            </div>

                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
         <a href="https://webapp.ifood.com.br/delivery/joao-pessoa-pb/lex-restaurante-manaira/236fef1f-fdbf-4aee-9bce" class="icon_ifood_bottom" target="_blank">
          <img src="assets/img/ifood-logo.png" style="max-width: 100%;" title="Fale conosco agora" alt="Fale conosco agora">
        </a>
         <a href="https://www.ubereats.com/pt-BR/joao-pessoa/food-delivery/paraiba-grill/PJa9l-QRRUaZ0WVtVeR-xg/" class="icon_uber_bottom" target="_blank">
          <img src="assets/img/uber-logo.png" style="max-width: 100%;" title="Fale conosco agora" alt="Fale conosco agora">
        </a>
         <a href="https://api.whatsapp.com/send?phone=5583981464401" class="icon_whatsapp_bottom" target="_blank">
          <img src="assets/img/img-whats.png" style="max-width: 100%;" title="Fale conosco agora" alt="Fale conosco agora">
        </a>
    </section>
    <!--MENU ITEMS END-->
    


 <?php
require_once 'includes/rodape.php';
?>
