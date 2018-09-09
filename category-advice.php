

<?php get_header(); ?>

<?php if( have_posts() ):
    $i = 0; ?>
    <div class="container">
    <h1 class="jr-page-title"><?php single_cat_title(); ?></h1>
    <p class="jr-page-description"><?php echo strip_tags(get_the_archive_description());  ?></p>
    </div>
    <main class="jr-posts-grid container">
    <?php while( have_posts() ):
        the_post(); ?>
        <? if($i==0){ ?>

                <a class="jr-posts-grid__wide-story" href="<?php the_permalink(); ?>">
                    <article class="jr-wide-story">
                        <div class="jr-wide-story__image" style="background-image: url(' <?php the_post_thumbnail_url( 'large' ); ?>"></div>
                        <h4 class="jr-wide-story__headline"><?php the_title(); ?></h4>
                        <p class="jr-wide-story__time-ago">By <?php the_author(); ?></p>                        
                    </article>
                </a>
        <?php } else if($i==2 && get_theme_mod('jr-advice-widget') == 'true' && !is_paged()) { ?>

            <article class="jr-story">
                <a class="jr-story__link" href="<?php the_permalink(); ?>">
                    <img class="jr-story__image" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php echo get_the_title(); ?>"/>
                    <h4 class="jr-story__headline"><?php the_title(); ?></h4>
                </a>
                <p class="jr-story__excerpt"><?php echo get_the_excerpt(); ?></p>
            </article>

            <aside class="jr-posts-grid__widget"><?php dynamic_sidebar( 'jr-advice-page' ); ?></aside>

            <aside class="jr-posts-grid__widget jr-posts-grid__widget--tall"><?php dynamic_sidebar( 'jr-advice-page-tall' ); ?></aside>


        <?php } else { ?>

            <article class="jr-story">
                <a class="jr-story__link" href="<?php the_permalink(); ?>">
                    <img class="jr-story__image" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php echo get_the_title(); ?>"/>
                    <h4 class="jr-story__headline"><?php the_title(); ?></h4>
                </a>
                <p class="jr-story__excerpt"><?php echo get_the_excerpt(); ?></p>
            </article>

        <?php } ?>
    <?php 
    $i++;    
    endwhile; ?>
    </main>
    <section class="jr-page-navigation container">
    <?php previous_posts_link( '← Newer articles' ); ?>
    <?php next_posts_link( 'Older articles →' ); ?>
    </section>
    <?php endif; ?>

<?php get_template_part('cta'); ?>

<?php get_footer(); ?>