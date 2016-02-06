<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?></title>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Cargando la Hoja de Estilos  -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >


    <!--================================= Style Sheets =================================-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jquery.vegas.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Pingbacks -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#sticktop" data-offset="70">

    <!--========================= Header ===========================-->
    <header>
        <nav id="sticktop" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php bloginfo('name');?></a>
                </div>
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'menu-principal',
                        'container'       => 'div',
                        'container_class' => 'navbar-collapse collapse',
                        'menu_class'      => 'nav navbar-nav',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                ?>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!--========================= Head ===========================-->
    <div class="page-head">
        <div class="container">
            <h3><?php if ( is_category() ): single_cat_title(); elseif ( is_tag() ) : single_tag_title(); elseif ( is_day() ) : _e('Archivo', 'amk');?>: <?php the_date(); elseif ( is_month() ) : _e('Archivo', 'amk');?>: <?php the_date('F Y'); elseif ( is_year() ) : _e('Archivo', 'amk');?>: <?php the_date('Y');  elseif ( is_search() ) : _e('Resultados para', 'amk');?>: <?php echo the_search_query();  elseif ( is_author() ) : _e('Artículos por', 'amk');?>: <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name;  elseif ( is_404() ) : _e('Error 404', 'amk');?>: <?php _e('Página no encontrada', 'amk'); else: bloginfo('name'); endif; ?></h3>
        </div><!--container-->
    </div><!--head-->