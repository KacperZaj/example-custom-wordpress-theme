<?php get_header(); ?>
<div id="main">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
<div class="container">
    <?php
    $turn_off_similar_posts = get_field('turn_off_similar_posts');
    if(!$turn_off_similar_posts){
        $taxonomy = 'category'; 
        $primary_cat_id = get_post_meta(get_the_ID(),'_yoast_wpseo_primary_' . $taxonomy, true);
        $primary_cat_slug = null;

        if($primary_cat_id){
            $primary_cat = get_term($primary_cat_id, $taxonomy);

            if($primary_cat && !is_wp_error($primary_cat)) {
                $primary_cat_slug = $primary_cat->slug;
            }
        }
        $section_7_args = array(
            'above_heading' => 'Proponowane',
            'heading' => "Zobacz podobne wpisy",
            'category_slug' => $primary_cat_slug,
            'post_id' => get_the_ID(),
        );

        get_template_part('template-parts/blocks/section_7/section_7', '', $section_7_args); 
    }
    ?>
</div>
<?php get_footer(); ?>