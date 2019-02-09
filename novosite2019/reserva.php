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
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> <!-- this icon shows in browser toolbar -->
   
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

    </header>
    <!--HEADER END-->


    <!--Banner-->
    <section>
        <div class="csi-banner csi-banner-inner csi-reserva">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading-area">
                                <h2 class="csi-heading">
                                    Faça sua reserva
                                </h2>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"><i class="icon-home6"></i>Início</a></li>
                                    <li class="active">Reserva</li>
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


    <!--RESERVATION-->
    <section>
        <div id="csi-reservation" class="csi-reservation">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-reservaton-area">
                                <figure>
                                    <a href="#"><img src="assets/img/background-reserva.jpg" alt="Special Food"></a>
                                    <figcaption>

                                        <form id="foodiebooking">
                                            <div class="form-group  csi-form-left">
                                                <input class="form-control" name="fb_name" id="foodiebooking_name" placeholder="Nome" aria-required="true" type="text">
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <input class="form-control" name="fb_email" id="foodiebooking_email" placeholder="Email" aria-required="true" type="email">
                                            </div>
                                            <div class="form-group csi-form-left">
                                                <input class="form-control" name="fb_phone" id="foodiebooking_phone" placeholder="Telefone" type="text">
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <select class="form-control" name="fb_person" id="foodiebooking_person" aria-required="true">
                                                    <option value="">Quantidade de pessoas</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="8">9</option>
                                                    <option value="10">10</option>
                                                    <option value="more">Mais de 10</option>
                                                </select>
                                            </div>
                                            <div class="form-group csi-form-full csi-form-left">
                                                <div class="input-group date" id="datetimepicker2">
                                                    <input name="fb_date" id="foodiebooking_date" class="form-control" placeholder="mm-dd-aaaa" aria-required="true" type="text">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <select class="form-control" name="fb_time" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Horário</option>
                                                    <option value="1">Café da Manhã</option>
                                                    <option value="2">Almoço</option>
                                                    <option value="3">Jantar</option>
                                                </select>
                                            </div>
                                            <div class="csi-form-group">
                                                <input id="fb_submit" class="csi-btn csi-submit" value="Fazer reserva" type="submit">
                                            </div>
                                        </form>
                                    </figcaption>
                                </figure>
                                <div class="call-phone">
                                    <h4 class="title">Ou Ligue-nos</h4>
                                    <ul class="list-inline">
                                        <li>(83) 3245-3780</li>
                                        <li>(83) 3245-4401</li>
                                       
                                    </ul>
                                </div>
                            </div> <!--//.reservaton-area-->
                        </div>
                    </div>

                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--RESERVATION END-->
    


 <?php
require_once 'includes/rodape.php';
?>
