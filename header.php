<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/style/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('url'); ?>/wp-content/themes/seloger/bootstrap/js/bootstrap.min.js">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>


</head>

<body>
<nav id="navbar-primary" class="navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
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


                <?php $defaults = array(
                    'theme_location' => '',
                    'menu' => 'menu-left',
                    'container' => '',
                    'container_class' => 'navbar navbar-default navbar-fixed-top',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="nav navbar-nav navbar-left pull-left">%3$s</ul>',
                    'depth' => '',
                    'walker' => ''
                );
                wp_nav_menu( $defaults );
                ?>

                <span><img class="navbar-logo" src="<?php bloginfo('url'); ?>/wp-content/themes/seloger/img/logo.png" width="200" alt="Logo Thing main logo"></span>

                <?php $defaults = array(
                    'theme_location' => '',
                    'menu' => 'menu-right',
                    'container' => '',
                    'container_class' => 'navbar navbar-default navbar-fixed-top',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="nav navbar-nav navbar-right pull-right">%3$s</ul>',
                    'depth' => '',
                    'walker' => ''
                );
                wp_nav_menu( $defaults );
                ?>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
