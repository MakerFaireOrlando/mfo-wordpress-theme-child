<?php
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css', 'bootstrap_css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


?>
