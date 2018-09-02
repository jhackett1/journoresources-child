<?php get_header(); ?>

<section class="jr-hero">
    <div class="jr-hero__image" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/img/hero.jpg' ?>')"></div>
    <div class="container jr-hero__inner">
        <h1 class="jr-hero__headline">Welcome to the tools you need to break into the journalism industry</h1>
        <p class="jr-hero__slogan">Journo Resources is your complete kit to starting out in the journalism industry.</p>  
        <a href="#" class="jr-hero__button jr-button">Learn more →</a>
    </div> 
</section>

<section class="container jr-search">
    <?php get_search_form() ?>
</section>

<section class="container jr-directory">
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article> 
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>   
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>     
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article> 
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>   
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>    
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article> 
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>   
    <article class="jr-directory__service">
        <a href="#" class="jr-directory__link"><h4 class="jr-directory__headline">Service name</h4></a>
        <p class="jr-directory__description">Service description goes in here</p>
    </article>        
</section>

<section class="container jr-advice">
    <h2 class="jr-advice__section-title">Advice</h2>
    <?php 
    $query = new WP_Query(array(
        'posts_per_page' => 3
    ));
    if ( $query->have_posts() ) : ?>
        <ul class="jr-advice__list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li class="jr-advice__story">
            <a class="jr-advice__link" href="<?php the_permalink(); ?>">
                <img class="jr-advice__image" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="<?php echo get_the_title(); ?>"/>
                <h4 class="jr-advice__headline"><?php the_title(); ?></h4>
            </a>
            <p class="jr-advice__excerpt"><?php echo get_the_excerpt(); ?></p>
        </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts to show.' ); ?></p>
    <?php endif; ?>
<section>


<?php get_footer(); ?>