<?php 

add_filter( 'excerpt_length', 'excerpt_length_example' );
 
function excerpt_length_example( $words ) {
    return 15;
}



?>