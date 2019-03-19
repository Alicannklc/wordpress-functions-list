<?php 

// First create a function and hook it into new example hook
function example_callback( $string ) {
	$new_value = $string . " NEW!";
	return $new_value;
}
add_filter( 'example_filter', 'example_callback' );

// Then use apply_filters in your code when you want the filter to run
echo $value = apply_filters( 'example_filter', 'Default value' );

// From http://wpseek.com/function/apply_filters/
?>


