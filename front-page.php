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

<?php get_footer(); ?>