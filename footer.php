
<?php if(is_front_page()){ ?>
<?php } else if(is_single() && get_post_meta( $post->ID, 'interface_sidebarlayout', 'true') == 'long-read'){ ?>
<?php } else if(is_archive() && is_category('advice')){ ?>
<?php } else { ?>
        </div>
    <!-- .container -->
    </div>
    <!-- #main -->           
<?php }?>

<?php
		/** 
		 * interface_business_template_ourclients hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * interface_display_business_template_ourclients 10
		 */
		
			if( is_page_template( 'page-templates/page-template-business.php' ) ) {
				do_action( 'interface_business_template_ourclients' );
			}

	?>
<?php
	      /** 
	       * interface_after_main hook
	       */
	      do_action( 'interface_after_main' );
	   ?>
<?php 
	   	/**
	   	 * interface_before_footer hook
	   	 */
	   	do_action( 'interface_before_footer' );
	   ?>

<footer class="jr-footer clearfix">
    <div class="jr-footer__inner container">

        <aside class="jr-footer__column">
            <div class="jr-footer__logo">
                <?php the_custom_logo(); ?>
            </div>
            <?php bloginfo( 'name' ); ?><br/>
            <?php bloginfo( 'description' ); ?>
            <ul class="jr-footer__social">
            <?php if(get_theme_mod('jr-footer-fb')){ ?>
                <li><a href="<?php echo get_theme_mod('jr-footer-fb') ?>">Facebook</a></li>
            <?php } ?>
            <?php if(get_theme_mod('jr-footer-linkedin')){ ?>
                <li><a href="<?php echo get_theme_mod('jr-footer-linkedin') ?>">LinkedIn</a></li> 
            <?php } ?>                        
            <?php if(get_theme_mod('jr-footer-twitter')){ ?>
                <li><a href="<?php echo get_theme_mod('jr-footer-twitter') ?>">Twitter</a></li> 
            <?php } ?>                           
            </ul>
        </aside>

        <aside class="jr-footer__column">
            <?php dynamic_sidebar( 'jr-footer-centre' ); ?>
        </aside>    

        <aside class="jr-footer__column">
            <?php dynamic_sidebar( 'jr-footer-right' ); ?>
            <p>© <?php bloginfo( 'name' )?> <?php echo date('Y');?>. Created with <a target="blank" href="http://joshuahackett.com/smallwins">Small Wins</a>.</p>
        </aside>
        
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>