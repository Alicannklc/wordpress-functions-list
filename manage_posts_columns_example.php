<?php 
 
function manage_posts_columns_example( $columns ) {

	//if( $sütunlar['Başlık'] ) unset die Öldür Durdur( $sütunlar['Başlık'] );
	unset( $columns['author'] );    
    unset( $columns['categories'] );
    unset( $columns['tags'] );
    unset( $columns['comments'] );
    return $columns;
    
}

add_filter( 'manage_posts_columns', 'manage_posts_columns_example' );


?>