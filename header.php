<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div class="wrapper">

        <header class="jr-header" >
            <div class="jr-header__branding">
                <?php the_custom_logo(); ?>
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            </div>
            <nav class="jr-header__nav">
                <?php wp_nav_menu('primary') ?>
            </nav>
        </header>

        <div id="main">
        <div class="container clearfix">
