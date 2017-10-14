<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!--BOOTSTRAP CORE CSS-->

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
    <!--Custom CSS-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('stylesheet_directory'); ?><!--/assets/css/custom.css">-->
    <!--Font Awesome-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- ================ -->

	<?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstraptowordpress' ); ?></a>

    <!--Header-->
    <header class="site-header" role="banner">
        <!--Navbar-->
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div><!--navbar-header-->
                    <div class="collapse navbar-collapse">
                        <?php
                        //Assign our bootstrap navigation classes
                        if(has_nav_menu('social_primary')) {
                            wp_nav_menu([
                                'theme_location'    => 'social_primary',
                                'container'         => 'nav',
                                'container_class'   => 'menu-social',
                                'menu_id'           => 'primary-social-items',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'link_before'       => '<span class="sr-only">',
                                'link_after'        => '</span>'
                            ]);
                        }
                        //Assign our bootstrap navigation classes
                        if(has_nav_menu('primary')) {
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => 'nav',
                                'container_class' => false,
                                'menu_class' => 'nav navbar-nav navbar',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                            ]);
                        }
                        ?>
                    </div>
                </div><!--container-->
            </div><!--navbar-->
        </div><!--navbar-wrapper-->
    </header>