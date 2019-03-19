<?php
 
function custom_body_classes( $classes ) {

	if ( 'post' == get_post_type() ) {
		$classes[] = "custom-class";
	}	

    return $classes;
}

add_filter( 'body_class', 'custom_body_classes' );
 
?>