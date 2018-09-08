<?php if(get_theme_mod('jr-cta-headline')){?> 
    <section class="jr-cta">
        <div class="jr-cta__inner container">
            <aside class="jr-cta__text">
                <h2 class="jr-cta__section-title"><?php echo get_theme_mod('jr-cta-headline'); ?></h2>
                <p class="jr-cta__slogan"><?php echo get_theme_mod('jr-cta-subheadline'); ?></p>
                <a href="<?php echo get_theme_mod('jr-cta-button-href'); ?>" class="jr-cta__button jr-button"><?php echo get_theme_mod('jr-cta-button-label'); ?></a>
            </aside>
            <img class="jr-cta__image" src="<?php if(get_theme_mod('jr-cta-image')){ echo get_theme_mod('jr-cta-image'); } else { echo get_stylesheet_directory_uri() . '/img/donate.png'; } ?>"/>
        </div>
    </section>
<?php }; ?>