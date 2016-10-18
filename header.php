<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<div class="container">
    <nav  class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/logo.png" alt="SeLoger">
                </a>
            </div>



            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>


    <header role="banner">
        <nav id="navbar-primary" class="navbar" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">ACCUEIL</a></li>
                        <li><a href="#">LOCATION</a></li>
                        <li><a href="#"><img id="logo-navbar-middle" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/logo.png" width="200" alt="Logo Thing main logo"></a></li>
                        <li><a href="#">AVIS</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header><!-- header role="banner" -->
</div>