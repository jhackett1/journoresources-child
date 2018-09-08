<?php get_header(); ?>

<?php if( have_posts() ):
    while( have_posts() ):
        the_post(); ?>

        <section class="jr-full-width-image" style="background-image: url(' <?php the_post_thumbnail_url( 'large' ); ?> ')">
        </section>

        <p class="jr-time-since container"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>

        <h1 class="jr-long-read-headline container"><?php the_title(); ?></h1>

        <section class="jr-long-read-meta container">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
            <h3 class="jr-long-read-meta__byline"><?php the_author_posts_link(); ?></h3>
            <p class="jr-long-read-meta__role"><?php the_author_meta( 'position', get_the_author_meta( 'ID' ) ); ?> </p>
        </section>

        <main class="jr-long-read-content container">  
            <?php the_content(); ?>
        </main>

    <?php endwhile;
endif; ?>

<?php get_template_part('cta'); ?>

<?php get_footer(); ?>