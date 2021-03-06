<?php

// Remove the built in Interface meta boxes, the hard way
add_action( '_admin_menu', function(){
    remove_action( 'add_meta_boxes', 'interface_add_custom_box' );
}, 999 );

// And add our boxes
add_action( 'add_meta_boxes', function () {
	add_meta_box(
		'siderbar-layout',
		__( 'Select layout for this specific Page only ( Note: This setting only reflects if page Template is set as Default Template and Blog Type Templates.)', 'interface' ),
		'jr_layout',
		'page'
	); 
	add_meta_box(
		'siderbar-layout',
		__( 'Select layout for this specific Post only', 'interface' ),
		'jr_layout',
		'post'
	); 
});


global $jr_layouts;
$jr_layouts = array(
    'default-sidebar' 		=> array(
                                    'id'			=> 'interface_sidebarlayout',
                                    'value' 		=> 'default',
                                    'label' 		=> __( 'Default Layout Set in', 'interface' ).' '.'<a href="'.wp_customize_url() .'?autofocus[section]=interface_default_layout" target="_blank">'.__( 'Customizer', 'interface' ).'</a>',
                                    'thumbnail' => ' '
                                    ),
    'no-sidebar' 				=> array(
                                    'id'			=> 'interface_sidebarlayout',
                                    'value' 		=> 'no-sidebar',
                                    'label' 		=> __( 'No sidebar', 'interface' ),
                                    'thumbnail' => ''
                                    ), 
    'no-sidebar-full-width' => array(
                                    'id'			=> 'interface_sidebarlayout',
                                    'value' 		=> 'no-sidebar-full-width',
                                    'label' 		=> __( 'No sidebar, Full Width', 'interface' ),
                                    'thumbnail' => ''
                                    ),
    
    'left-sidebar' => array(
                                    'id'			=> 'interface_sidebarlayout',
                                    'value' 		=> 'left-sidebar',
                                    'label' 		=> __( 'Left sidebar', 'interface' ),
                                    'thumbnail' => ''
                                    ),
    'right-sidebar' => array(
                                    'id' 			=> 'interface_sidebarlayout',
                                    'value' 		=> 'right-sidebar',
                                    'label' 		=> __( 'Right sidebar', 'interface' ),
                                    'thumbnail' => ''
                                    ),
    'long-read' => array(
                                    'id' 			=> 'interface_sidebarlayout',
                                    'value' 		=> 'long-read',
                                    'label' 		=> __( 'Long read', 'interface' ),
                                    'thumbnail' => ''
                                    )
);


function jr_layout() {  
	global $jr_layouts, $post;  
	// Use nonce for verification  
	wp_nonce_field( basename( __FILE__ ), 'custom_meta_box_nonce' ); // for security purpose

	// Begin the field table and loop  ?>

<table id="sidebar-metabox" class="form-table" width="100%">
  <tbody>
    <tr>
      <?php  
				foreach ($jr_layouts as $field) {  
					$meta = get_post_meta( $post->ID, $field['id'], true );
					if(empty( $meta ) ){
						$meta='default';
					}
					if( ' ' == $field['thumbnail'] ): ?>
      <label class="description">
        <input type="radio" name="<?php echo $field['id']; ?>" value="<?php echo $field['value']; ?>" <?php checked( $field['value'], $meta ); ?>/>
        &nbsp;&nbsp;<?php echo $field['label']; ?> </label>
      <?php else: ?>
      <td><label class="description">
          <input type="radio" name="<?php echo $field['id']; ?>" value="<?php echo $field['value']; ?>" <?php checked( $field['value'], $meta ); ?>/>
          &nbsp;&nbsp;<?php echo $field['label']; ?> </label></td>
      <?php endif;
				} // end foreach 
				?>
    </tr>
  </tbody>
</table>
<?php 
}

add_action('save_post', function( $post_id ) { 
	global $jr_layouts, $post; 
	
	// Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'custom_meta_box_nonce' ] ) || !wp_verify_nonce( $_POST[ 'custom_meta_box_nonce' ], basename( __FILE__ ) ) )
      return;
		
	// Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)  
      return;
		
	if ('page' == $_POST['post_type']) {  
      if (!current_user_can( 'edit_page', $post_id ) )  
         return $post_id;  
   } 
   elseif (!current_user_can( 'edit_post', $post_id ) ) {  
      return $post_id;  
   }  
	
	foreach ($jr_layouts as $field) {  
		//Execute this saving function
		$old = get_post_meta( $post_id, $field['id'], true); 
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {  
			update_post_meta($post_id, $field['id'], $new);  
		} elseif ('' == $new && $old) {  
			delete_post_meta($post_id, $field['id'], $old);  
		} 
	} // end foreach   
});
