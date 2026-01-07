<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged, 
);
$query = new WP_Query( $args );
?>
<section class="section_6 vertical-mobile-margin">
    <div class="section_6__content">
        <?php if($query->have_posts()){ ?>
        <div class="section_6__blog-posts">
            <?php while($query->have_posts()){ ?>
            <?php
                $query->the_post();    
                $postID = get_the_ID();
                $categories = get_the_terms( $postID, 'category' );
            ?>
            <article data-aos="fade-up" class="post-block">
                <?php if(has_post_thumbnail($postID)){ ?>
                    <a href="<?php echo get_permalink($postID); ?>" class="post-block__image-wrapper">
                        <img src="<?php echo get_the_post_thumbnail_url($postID, 'medium_large'); ?>" alt="<?php the_title(); ?>">
                    </a>
                <?php }else{ ?>
                    <a href="<?php echo get_permalink($postID); ?>" class="post-block__image-wrapper post-block__image-wrapper--no-image"></a>
                <?php } ?>
                <div class="post-block__right">
                    <div class="post-block__center">
                        <?php if($categories): ?>
                        <div class="post-block__categories">
                            <?php $cat_i = 0; ?>
                            <?php $cat_len = count($categories); ?>
                            <?php foreach($categories as $category): ?>
                                <span class="post-block__category">
                                    <?php echo $category->name; ?>
                                </span>
                                <?php $cat_i++; ?>
                            <?php endforeach;?>
                        </div>
                        <?php endif; ?>
                        <a class="post-block__heading-link" href="<?php echo get_permalink($postID); ?>">
                            <h2 class="heading-4"><?php the_title(); ?></h2>
                        </a>
                        <div class="post-block__excerpt"><?php the_excerpt(); ?></div>
                        <?php 
                            $date = $date = get_the_date('j F Y'); 
                            if($date){
                            ?>
                            <div class="date-block">
                                <p><?= strtoupper($date); ?></p>
                            </div>
                            <?php } ?>
                    </div>
                    <div class="post-block__button-wrapper">
                        <a class="cs-button cs-button--red-white" href="<?php echo get_permalink($postID); ?>">
                            <span>Pokaż</span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96875 12.3701L10.9688 8.37006L6.96875 4.37006" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
        <div class="custom-pagination">
            <?php 
                $big = 999999999; // need an unlikely integer
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $query->max_num_pages,
                    'prev_text' => __('
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.2109 23.1201L11.7109 15.6201L19.2109 8.12012" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ', 'textdomain'),
                    'next_text' => __('
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7617 23.1201L19.2617 15.6201L11.7617 8.12012" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ', 'textdomain'),
                    'show_all' => false,
                ));
            ?>
        </div>
        <?php }else{ ?>
        <h2 class="heading-4">Brak wpisów na blogu. Zapraszam wkrótce!</h2>
        <?php } ?>
    </div>
</section>