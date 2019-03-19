<?php 

// Filtrenin var olup olmadığını kontrol et, sonra özel kod ekle
if ( has_filter( 'custom_plugin_filter' ) ) {
	add_filter( 'custom_plugin_filter', 'my_custom_code' );
}

// İşlevin filtreye takılıp kalmadığını kontrol edin ve ardından değiştirin
if ( has_filter( 'the_content', 'custom_plugin_function' ) ) {
	remove_filter( 'the_content', 'custom_plugin_function' );
	add_filter( 'the_content', 'my_content_code' );
}

?>