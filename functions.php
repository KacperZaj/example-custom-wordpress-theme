<?php
define('DISALLOW_FILE_EDIT',true); 
// Setup
require get_parent_theme_file_path( '/inc/setup.php' );
// Script and Styles
require get_parent_theme_file_path( '/inc/init-enqueue.php' );
// ACF Option Pages
require get_parent_theme_file_path( '/inc/ACF-option-pages.php' );
// Image Sizes
require get_parent_theme_file_path( '/inc/image-sizes.php' );
// Gutenberg Blocks
require get_parent_theme_file_path( '/inc/blocks.php' );
