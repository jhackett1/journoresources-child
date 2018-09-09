<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form clearfix">
  <label class="assistive-text">
    <?php _e( 'Search', 'jr' ); ?>
  </label>
  <input type="search" placeholder="<?php esc_attr_e( 'What are you searching for?', 'jr' ); ?>" class="s field" name="s">
  <input type="submit" value="<?php esc_attr_e( 'Search', 'jr' ); ?>" class="search-submit">
</form>