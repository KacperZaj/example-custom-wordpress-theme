<?php 
function project_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/libs/aos/aos.css', array(), '1.0.0' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.css', array(), '1.0.0' );

	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/libs/aos/aos.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/libs/swiper/swiper.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'fslightbox-js', get_template_directory_uri() . '/assets/libs/fslightbox/fslightbox.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'swipers-js', get_template_directory_uri() . '/assets/js/swipers.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'project_scripts' );

function admin_scripts() {
	wp_register_style( 'backoffice', get_template_directory_uri() . '/assets/css/backoffice/backoffice.css', false, '1.0.0' );
	wp_enqueue_style( 'backoffice' );
}

add_action( 'admin_enqueue_scripts', 'admin_scripts' );
?>