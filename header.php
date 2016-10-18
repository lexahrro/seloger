<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<section id="sec1">
<nav id="navbar-primary" class="navbar-inverse navbar-fixed-top" role="navigation">
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
