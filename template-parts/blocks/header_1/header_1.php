</div>
<?php 
    $background = get_field('background');
    $heading = get_field('heading');
    $text_field = get_field('text_field');
    $button_1 = get_field('button_1');
    $button_2 = get_field('button_2');
    $right_image = get_field('right_image');
?>
<section class="header_1 pattern-white vertical-mobile-margin" <?php if($background){ ?>style="background-image: url('<?= esc_url( $background['url'] ); ?>'); "<?php } ?>>
    <div class="header_1__wrapper">
        <div class="header_1__content">
            <div class="header_1__left">
                <?php if($heading){ ?>
                <h1 data-aos="fade-right"><?= $heading; ?></h1>
                <?php } ?>
                <?php if($text_field){ ?>
                <div data-aos="fade-right" data-aos-delay="100" class="header_1__text-field">
                <?= $text_field; ?>
                </div>
                <?php } ?>
                <?php if($button_1 || $button_2){ ?>
                <div data-aos="fade-right" data-aos-delay="200" class="header_1__buttons">
                    <?php if($button_1){ 
                        $button_1_url = $button_1['url'];
                        $button_1_title = $button_1['title'];
                        $button_1_target = $button_1['target'] ? $button_1['target'] : '_self';
                    ?>
                    <a class="cs-button cs-button--red-white" href="<?php echo esc_url( $button_1_url ); ?>" target="<?php echo esc_attr( $button_1_target ); ?>">
                        <span><?php echo esc_html( $button_1_title ); ?></span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <?php } ?>
                    <?php if($button_2){ 
                        $button_2_url = $button_2['url'];
                        $button_2_title = $button_2['title'];
                        $button_2_target = $button_2['target'] ? $button_2['target'] : '_self';
                    ?>
                    <a class="cs-button cs-button--transparent-white" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>">
                        <?php echo esc_html( $button_2_title ); ?>
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="header_1__right">
                <?php if($right_image){ ?>
                    <img data-aos="fade-up" data-aos-duration="1000" width="766" height="741" src="<?php echo esc_url($right_image['url']); ?>" alt="<?php echo esc_attr($right_image['alt']); ?>" />
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<div class="container">