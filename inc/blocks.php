<?php

add_filter( 'block_categories_all', 'misha_new_block_category' );

function misha_new_block_category( $cats ) {
	$new = [
		'literallyanything' => [
			'slug'  => 'zajac',
			'title' => 'Zając'
        ],
    ];

	$position = 0;
	$cats = array_slice( $cats, 0, $position, true ) + $new + array_slice( $cats, $position, null, true );
	$cats = array_values( $cats );

	return $cats;
}

function my_acf_init_block_types() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name'              => 'header-1',
            'title'             => __('Header 1'),
            'description'       => __('Header 1'),
            'render_template'   => 'template-parts/blocks/header_1/header_1.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'header', 'forma', 'misja' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/header_1/header_1_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'header-2',
            'title'             => __('Header 2'),
            'description'       => __('Header 2'),
            'render_template'   => 'template-parts/blocks/header_2/header_2.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'header', 'forma', 'misja' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/header_2/header_2_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'header-3',
            'title'             => __('Header 3'),
            'description'       => __('Header 3'),
            'render_template'   => 'template-parts/blocks/header_3/header_3.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'header' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/header_3/header_3_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-1',
            'title'             => __('Zdjęcie i pole tekstowe obok siebie'),
            'description'       => __('Sekcja 1'),
            'render_template'   => 'template-parts/blocks/section_1/section_1.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'tekst', 'pole', 'obrazek' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_1/section_1_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-2',
            'title'             => __('Bloczki'),
            'description'       => __('Sekcja 2'),
            'render_template'   => 'template-parts/blocks/section_2/section_2.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'bloczki', 'usługi', 'cele' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_2/section_2_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-3',
            'title'             => __('Wyniki'),
            'description'       => __('Sekcja 3'),
            'render_template'   => 'template-parts/blocks/section_3/section_3.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'statystyki', 'wyniki', 'inspiracja' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_3/section_3_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-4',
            'title'             => __('FAQ'),
            'description'       => __('Sekcja 4'),
            'render_template'   => 'template-parts/blocks/section_4/section_4.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'FAQ', 'odpowiedzi', 'pytania' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_4/section_4_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        // acf_register_block_type([
        //     'name'              => 'section-5',
        //     'title'             => __('CTA'),
        //     'description'       => __('Sekcja 5'),
        //     'render_template'   => 'template-parts/blocks/section_5/section_5.php',
        //     'render_callback' => 'block_render',
        //     'category'          => 'zajac',
        //     'icon'              => 'rabbit',
        //     'keywords'          => [ 'CTA', 'nie czekaj', 'czerwone' ],
        //     'example'         => array(
        //         'attributes' => array(
        //             'mode' => 'preview',
        //             'data' => array(
        //                 'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_5/section_5_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
        //             ),
        //         ),
        //     ),
        // ]);
        acf_register_block_type([
            'name'              => 'section-6',
            'title'             => __('Wpisy blogowe - lista'),
            'description'       => __('Sekcja 6'),
            'render_template'   => 'template-parts/blocks/section_6/section_6.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'blog', 'wpisy'],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_6/section_6_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-7',
            'title'             => __('Wpisy blogowe - slider'),
            'description'       => __('Sekcja 7'),
            'render_template'   => 'template-parts/blocks/section_7/section_7.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'blog', 'wpisy', 'slider'],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_7/section_7_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-8',
            'title'             => __('Certyfikaty - slider'),
            'description'       => __('Sekcja 8'),
            'render_template'   => 'template-parts/blocks/section_8/section_8.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'certyfikaty', 'doświadczenie', 'slider'],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_8/section_8_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-9',
            'title'             => __('Usługa'),
            'description'       => __('Sekcja 9'),
            'render_template'   => 'template-parts/blocks/section_9/section_9.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'usługa' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_9/section_9_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-10',
            'title'             => __('Metamorfozy'),
            'description'       => __('Sekcja 10'),
            'render_template'   => 'template-parts/blocks/section_10/section_10.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'metamorfozy' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_10/section_10_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-11',
            'title'             => __('Zadzwoń, napisz'),
            'description'       => __('Sekcja 11'),
            'render_template'   => 'template-parts/blocks/section_11/section_11.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'zadzwoń', 'napisz' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_11/section_11_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-12',
            'title'             => __('Kontakt'),
            'description'       => __('Sekcja 12'),
            'render_template'   => 'template-parts/blocks/section_12/section_12.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'kontakt', 'formularz' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_12/section_12_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
        acf_register_block_type([
            'name'              => 'section-13',
            'title'             => __('Zdjęcie i tekst obok siebie (dla bloga)'),
            'description'       => __('Sekcja 13'),
            'render_template'   => 'template-parts/blocks/section_13/section_13.php',
            'render_callback' => 'block_render',
            'category'          => 'zajac',
            'icon'              => 'rabbit',
            'keywords'          => [ 'blog' ],
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/section_13/section_13_preview.png' . '" style="display: block; width: 100%; height: auto; margin: 0 auto;">'
                    ),
                ),
            ),
        ]);
    }
}
add_action('acf/init', 'my_acf_init_block_types');


function block_render( $block, $content = '', $is_preview = false ) {
     if ( $is_preview && ! empty( $block['data'] ) ) {
          echo $block['data']['image'];
          return;
     } else {
          if ( $block ) :
               $template = $block['render_template'];
               $template = str_replace( '.php', '', $template );
               get_template_part( '/' . $template );
          endif;
     }
}