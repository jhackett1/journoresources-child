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

            <div class="container js-header__inner">
                <div class="jr-header__branding">
                    <?php the_custom_logo(); ?>
                    <h1 class="jr-header__slogan">Journo<br/>Resources</h1>
                </div>

                <!-- <button class="jr-header__menu-toggle">Menu</button> -->

                <nav class="jr-header__nav">
                    <?php wp_nav_menu(array(
                        'menu'=> 'primary',
                        'menu_class'=> 'jr-header__nav-menu',
                        'container' => false
                    )) ?>
                </nav>
            </div>
        </header>

        <?php if(!is_front_page()){ ?>
            <div id="main">
            <div class="container clearfix">            
        <?php }?>