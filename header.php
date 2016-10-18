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
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo AMG" class="img-responsive"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="index.html">Accueil</a></li>
                <li><a href="amg.html">Amg gt-s</a></li>
                <li><a href="cab.html">Cabriolet</a></li>
                <li><a href="story2.html">Histoire</a></li>
                <li><a href="contact2.html"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>

            </ul>
        </div>
    </div>
</nav>