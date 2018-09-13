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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div class="wrapper">

        <header class="jr-header" >

            <div class="container js-header__inner">
                <div class="jr-header__branding">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo bloginfo('url'); ?>"><h1 class="jr-header__slogan">Journo<br/>Resources</h1></a>
                </div>

                <nav class="jr-header__nav">
                    <?php wp_nav_menu( array( 
						'theme_location' => 'primary',
                        'menu_class'=> 'jr-header__nav-menu',
                        'container' => false
                    )) ?>
                </nav>
            </div>
        </header>


        <?php if(!is_front_page() && is_page()){ ?>
            <div class="container">    
                <h1 class="jr-page-title"><?php echo interface_header_title(); ?></h1>
            </div>
        <?php } ?>

        <?php if(is_front_page()){ ?>
        <?php } else if(is_single() && get_post_meta( $post->ID, 'interface_sidebarlayout', 'true') == 'long-read'){ ?>
        <?php } else if(is_archive() && is_category('advice')){ ?>
        <?php } else { ?>
            <div id="main">
            <div class="container clearfix">            
        <?php }?>