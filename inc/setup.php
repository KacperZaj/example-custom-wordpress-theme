<?php
function remove_wp_version(){
	return'';
}

add_filter('the_generator','remove_wp_version');

if ( !function_exists( 'custom_setup' ) ) {
	function custom_setup() {

		load_theme_textdomain( 'text-domain-name', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 1568, 9999 );

		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
}
add_action( 'after_setup_theme', 'custom_setup' );

// Disable comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
//Redirect after succes registration
add_filter( 'woocommerce_registration_redirect', 'custom_redirection_after_registration', 10, 1 );
function custom_redirection_after_registration( $redirection_url ){
    // Change the redirection Url
    $redirection_url = get_permalink( wc_get_page_id( 'myaccount' )); // Home page
    return $redirection_url; // Always return something
}

function custom_upload_mimes( $existing_mimes ) {
    // Dodaj nowy typ MIME dla .stldr
    $existing_mimes['stldr'] = 'application/stldr';

    // Zwróć zaktualizowaną tablicę typów MIME
    return $existing_mimes;
}
add_filter( 'mime_types', 'custom_upload_mimes' );