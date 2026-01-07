<?php 
if(!empty($args)){
    $above_heading = $args['above_heading'] ?? '';
    $heading = $args['heading'] ?? '';
    $button = $args['button'] ?? null;
    $category_slug = $args['category_slug'] ?? null;
    $post_id = $args['post_id'] ?? null;
    $query_args = array(
        'posts_per_page' => 10,
    );

    if ($post_id) {
        $query_args['post__not_in'] = [$post_id];
    }

    if ($category_slug) {
        $query_args['category_name'] = $category_slug;
    }
}
else{
    $above_heading = get_field('above_heading');
    $heading = get_field('heading');
    $button = get_field('button');
    $query_args = array(
        'posts_per_page' => 10,
    );
}

$query = new WP_Query( $query_args );
if(!$query->have_posts()){
    return;
}
?>
<section class="section_7 vertical-mobile-margin">
    <div class="section_7__content">
        <?php if($above_heading){ ?>
        <div class="section_7__red-text-wrapper" data-aos="fade-up">
            <p class="red-text"><?= $above_heading; ?></p>
        </div>
        <?php } ?>
        <?php if($heading){ ?>
        <h2 class="section_7__heading" data-aos="fade-up"><?= $heading; ?></h2>
        <?php } ?>
        <?php if($query->have_posts()){ ?>
        <div class="section_7__slider-wrapper" data-aos="fade-up">
            <div class="swiper section-7-swiper">
                <div class="swiper-wrapper">
                        <?php while($query->have_posts()){ ?>
                        <?php
                            $query->the_post();    
                            $postID = get_the_ID();
                            $categories = get_the_terms( $postID, 'category' );
                        ?>
                        <article class="swiper-slide slider-post-block">
                            <a href="<?= get_permalink($postID); ?>">
                                <?php if(has_post_thumbnail($postID)){ ?>
                                    <div href="<?php echo get_permalink($postID); ?>" class="slider-post-block__image-wrapper">
                                        <img src="<?php echo get_the_post_thumbnail_url($postID, 'medium_large'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php }else{ ?>
                                    <div class="slider-post-block__image-wrapper slider-post-block__image-wrapper--no-image"></div>
                                <?php } ?>
                                <div class="slider-post-block__info">
                                    <h3 class="heading-6"><?php the_title(); ?></h3>
                                    <div class="slider-post-block__date-and-button">
                                        <div class="slider-post-block__date">
                                            <?php
                                            $date = $date = get_the_date('j F Y'); 
                                            if($date){
                                            ?>
                                            <div class="date-block">
                                                <p><?= strtoupper($date); ?></p>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="slider-post-block__button">
                                            <div class="red-text-button">
                                                <span>
                                                    Zobacz
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </article>
                        <?php } ?>
                    
                </div>
            </div>
            <div class="custom-swiper-button-next"></div>
            <div class="custom-swiper-button-prev"></div>
        </div>
        <?php } ?>
        <?php if($button){ 
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';    
        ?>
        <div class="section_7__button-wrapper" data-aos="fade-up">
            <a class="cs-button cs-button--red-white" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>">
                <span><?php echo esc_html( $button_title ); ?></span>
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 12L10.5 8L6.5 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <?php } ?>
    </div>
</section>
<?php wp_reset_postdata(); ?>