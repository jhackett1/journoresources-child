<?php
require_once 'includes/metaboxes.php';
require_once 'includes/customiser.php';
require_once 'includes/widgets.php';


// Stylesheets
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );    
} );


// Custom logo
add_theme_support( 'custom-logo' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


// Shorter excerpts
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Widgetised areas
register_sidebar( array (
    'name' => __( 'Footer Centre'),
    'id' => 'jr-footer-centre',
    'description' => __( 'The centre of the footer'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget__title">',
    'after_title' => '</h5>',
    ) );
register_sidebar( array (
    'name' => __( 'Footer Right'),
    'id' => 'jr-footer-right',
    'description' => __( 'The right side of the footer'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget__title">',
    'after_title' => '</h5>',
    ) );
register_sidebar( array (
    'name' => __( 'Advice Category Page'),
    'id' => 'jr-advice-page',
    'description' => __( 'Embedded in the grid of posts on the Advice category page'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget__title">',
    'after_title' => '</h5>',
    ) );

// Position field in user profile
add_action( 'show_user_profile', 'jr_user_position_field' );
add_action( 'edit_user_profile', 'jr_user_position_field' );
function jr_user_position_field( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="position"><?php _e("Role"); ?></label></th>
        <td>
            <input type="text" name="position" id="position" value="<?php echo esc_attr( get_the_author_meta( 'position', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("This will be displayed under your byline on some articles."); ?></span>
        </td>
    </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_jr_user_position_field' );
add_action( 'edit_user_profile_update', 'save_jr_user_position_field' );
function save_jr_user_position_field( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'position', $_POST['position'] );
}

// Pretty pagination link buttons
add_filter('next_posts_link', 'post_link_attributes');
add_filter('previous_posts_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="jr-button"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}