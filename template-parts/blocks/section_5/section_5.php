<?php 
$background = $args['background'];
$heading = $args['heading'];
$under_heading = $args['under_heading'];
$button_1 = $args['button_1'];
$button_2 = $args['button_2'];
$image = $args['image'];
?>
<section data-aos="fade-up" class="section_5 pattern-white" <?php if($background){ ?>style="background-image: url('<?= esc_url( $background['url'] ); ?>'); "<?php } ?>>
    <div class="section_5__hero"></div>
    <div class="container">
        <div class="section_5__content">
            <div class="section_5__col section_5__col--1">
                <?php if($heading){ ?>
                <h2 class="section_5__heading"><?= $heading; ?></h2>
                <?php } ?>
                <?php if($under_heading){ ?>
                <div class="section_5__text-field"><?= $under_heading; ?></div>
                <?php } ?>
                <?php if($button_1 || $button_2){ ?>
                <div class="section_5__buttons">
                    <?php if($button_1){ 
                        $button_1_url = $button_1['url'];
                        $button_1_title = $button_1['title'];
                        $button_1_target = $button_1['target'] ? $button_1['target'] : '_self';    
                    ?>
                    <a class="cs-button cs-button--white-black" href="<?php echo esc_url( $button_1_url ); ?>" target="<?php echo esc_attr( $button_1_target ); ?>">
                        <span><?php echo esc_html( $button_1_title ); ?></span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#131313" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <?php } ?>
                    <?php if($button_2){ 
                        $button_2_url = $button_2['url'];
                        $button_2_title = $button_2['title'];
                        $button_2_target = $button_2['target'] ? $button_2['target'] : '_self';    
                    ?>
                    <a class="cs-button cs-button--white-black" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>"><?php echo esc_html( $button_2_title ); ?></a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="section_5__col section_5__col--2">
            <?php if($image){ ?>
                <img width="<?= $image['width']; ?>" height="<?= $image['height']; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>
            </div>
        </div>
    </div>
</section>
