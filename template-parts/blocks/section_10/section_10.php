<?php 
$metamorphosis = get_field('metamorphosis');
$button_1 = get_field('button_1');
$button_2 = get_field('button_2');
?>
<section class="section_10 vertical-mobile-margin--80">
    <div class="section_10__content vertical-mobile-margin">
        <?php if($metamorphosis){ ?>
        <div class="section_10__metamorphosis">
            <?php foreach($metamorphosis as $item){ 
                $name = $item['name'];
                $weight = $item['weight'];
                $before = $item['before'];
                $after = $item['after'];
            ?>
            <div class="section_10__item" data-aos="fade-up">
                <div class="section_10__item-images">
                    <div class="section_10__item-images-content">
                        <a class="section_10__image-before" href="<?php echo esc_url($before['sizes']['large']); ?>" data-fslightbox="section-10-lightbox">
                            <img width="<?= $before['sizes']['large-width']; ?>" height="<?= $before['sizes']['large-height']; ?>" src="<?php echo esc_url($before['sizes']['large']); ?>" alt="<?php echo esc_attr($before['alt']); ?>" />
                        </a>
                        <a class="section_10__image-after" href="<?php echo esc_url($after['sizes']['large']); ?>" data-fslightbox="section-10-lightbox">
                            <img width="<?= $after['sizes']['large-width']; ?>" height="<?= $after['sizes']['large-height']; ?>" src="<?php echo esc_url($after['sizes']['large']); ?>" alt="<?php echo esc_attr($after['alt']); ?>" />
                        </a>
                    </div>
                </div>
                <div class="section_10__item-text">
                    <p>
                        <?php if($name){ ?>
                        <span class="section_10__item-name"><?= $name; ?></span>
                        <?php } ?>
                        <?php if($weight){ ?>
                        <span class="section_10__item-weight-wrapper">
                            <span class="section_10__item-weight"><?= $weight; ?></span><span class="section_10__item-kg">kg</span>
                        </span>
                        <?php } ?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    <?php if($button_1 || $button_2){ ?>
    <div data-aos="fade-up" class="section_10__buttons">
        <?php
            if($button_1){
            $button_1_url = $button_1['url'];
            $button_1_title = $button_1['title'];
            $button_1_target = $button_1['target'] ? $button_1['target'] : '_self';
        ?>
        <a class="cs-button cs-button--transparent-black" href="<?php echo esc_url( $button_1_url ); ?>" target="<?php echo esc_attr( $button_1_target ); ?>">
            <span><?php echo esc_html( $button_1_title ); ?></span>
        </a>
        <?php } ?>
        <?php
            if($button_2){
            $button_2_url = $button_2['url'];
            $button_2_title = $button_2['title'];
            $button_2_target = $button_2['target'] ? $button_2['target'] : '_self';
        ?>
        <a class="cs-button cs-button--red-white" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>">
            <span><?php echo esc_html( $button_2_title ); ?></span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <?php } ?>
    </div>
    <?php } ?>
</section>