<?php get_header(); ?>

<section class="jr-hero">
    <div class="jr-hero__image" style="background-image: url('<?php echo get_theme_mod('jr-hero-image'); ?>')"></div>
    <div class="container jr-hero__inner">
        <?php if(get_theme_mod('jr-hero-headline')){ ?>
            <h1 class="jr-hero__headline"><?php echo get_theme_mod('jr-hero-headline'); ?></h1>
        <?php }; ?>
        <?php if(get_theme_mod('jr-hero-subheadline')){ ?>
            <p class="jr-hero__slogan"><?php echo get_theme_mod('jr-hero-subheadline'); ?>.</p> 
        <?php }; ?>
        <?php if(get_theme_mod('jr-hero-button-href') && get_theme_mod('jr-hero-button-label')){?> 
            <a href="<?php echo get_page_link(get_theme_mod('jr-hero-button-href')); ?>" class="jr-hero__button jr-button"><?php echo get_theme_mod('jr-hero-button-label'); ?></a>
        <?php }; ?>
    </div> 
</section>

<section class="container jr-search">
    <?php get_search_form() ?>
</section>

<section class="container jr-directory">


    <?php if(get_theme_mod('jr-directory-service-1-name') && get_theme_mod('jr-directory-service-1-description') && get_theme_mod('jr-directory-service-1-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-1-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-1-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-1-description') ?></p>
        </article> 
    <?php }; ?>    

    <?php if(get_theme_mod('jr-directory-service-2-name') && get_theme_mod('jr-directory-service-2-description') && get_theme_mod('jr-directory-service-2-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-2-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-2-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-2-description') ?></p>
        </article> 
    <?php }; ?>  

    <?php if(get_theme_mod('jr-directory-service-3-name') && get_theme_mod('jr-directory-service-3-description') && get_theme_mod('jr-directory-service-3-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-3-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-3-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-3-description') ?></p>
        </article> 
    <?php }; ?>     

    <?php if(get_theme_mod('jr-directory-service-5-name') && get_theme_mod('jr-directory-service-5-description') && get_theme_mod('jr-directory-service-5-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-5-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-5-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-5-description') ?></p>
        </article> 
    <?php }; ?>   

    <?php if(get_theme_mod('jr-directory-service-6-name') && get_theme_mod('jr-directory-service-6-description') && get_theme_mod('jr-directory-service-6-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-6-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-6-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-6-description') ?></p>
        </article> 
    <?php }; ?> 

    <?php if(get_theme_mod('jr-directory-service-7-name') && get_theme_mod('jr-directory-service-7-description') && get_theme_mod('jr-directory-service-7-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-7-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-7-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-7-description') ?></p>
        </article> 
    <?php }; ?>  

    <?php if(get_theme_mod('jr-directory-service-8-name') && get_theme_mod('jr-directory-service-8-description') && get_theme_mod('jr-directory-service-8-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-8-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-8-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-8-description') ?></p>
        </article> 
    <?php }; ?>    

    <?php if(get_theme_mod('jr-directory-service-9-name') && get_theme_mod('jr-directory-service-9-description') && get_theme_mod('jr-directory-service-9-href')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_page_link(get_theme_mod('jr-directory-service-9-href')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-9-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-9-description') ?></p>
        </article> 
    <?php }; ?> 

    <?php if(get_theme_mod('jr-directory-service-4-name') && get_theme_mod('jr-directory-service-4-description')){?> 
        <article class="jr-directory__service">
            <a href="<?php echo get_category_link(get_theme_mod('jr-advice-category')); ?>" class="jr-directory__link"><h4 class="jr-directory__headline"><?php echo get_theme_mod('jr-directory-service-4-name') ?></h4></a>
            <p class="jr-directory__description"><?php echo get_theme_mod('jr-directory-service-4-description') ?></p>
        </article> 
    <?php }; ?>  


</section>

<section class="container jr-advice">
    <h2 class="jr-advice__section-title"><? echo get_cat_name(get_theme_mod('jr-advice-category')); ?></h2>
    <?php 
    $query = new WP_Query(array(
        'posts_per_page' => 3,
        'cat' => get_theme_mod('jr-advice-category')
    ));
    if ( $query->have_posts() ) : ?>
        <ul class="jr-advice__list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li class="jr-story">
            <a class="jr-story__link" href="<?php the_permalink(); ?>">
                <img class="jr-story__image" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php echo get_the_title(); ?>"/>
                <h4 class="jr-story__headline"><?php the_title(); ?></h4>
            </a>
            <p class="jr-story__excerpt"><?php echo get_the_excerpt(); ?></p>
        </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts to show.' ); ?></p>
    <?php endif; ?>
    
    <a href="<?php echo get_category_link(get_theme_mod('jr-advice-category')); ?>" class="jr-advice__button jr-button">More <? echo get_cat_name(get_theme_mod('jr-advice-category')); ?> →</a>    
</section>

<?php get_template_part('cta'); ?>

<?php get_footer(); ?>