<?php 


function only_run_in_main_loop( $content ) {
    if ( is_main_query() ) {
   
    }
        
}
add_filter( 'the_content', 'only_run_in_main_loop' );

?>