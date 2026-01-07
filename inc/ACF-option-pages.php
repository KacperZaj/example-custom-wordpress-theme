<?php 
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Sekcje powtarzalne',
        'menu_title'    => 'Sekcje powtarzalne',
        'menu_slug'     => 'repeatable-sections',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Ustawienia szablonu',
        'menu_title'    => 'Ustawienia szablonu',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Dane firmy',
        'menu_title'    => 'Dane firmy',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Nawigacja',
        'menu_title'    => 'Nawigacja',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Stopka',
        'menu_title'    => 'Stopka',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Strona 404',
        'menu_title'    => 'Strona 404',
        'parent_slug'   => 'theme-general-settings',
    ));
}
?>