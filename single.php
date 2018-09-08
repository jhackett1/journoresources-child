<?php

if(get_post_meta( $post->ID, 'interface_sidebarlayout', 'true') == 'long-read' ){
    get_template_part('single-long-read');
} else {
    get_template_part('index');
}