<?php 
$choose_direction = get_field('choose_direction');
$image = get_field('image');
$above_heading = get_field('above_heading');
$heading = get_field('heading');
$text_field = get_field('text_field');
$button = get_field('button');
?>
<section class="section_1 vertical-mobile-margin<?php echo $choose_direction == 'right' ? ' section_1--reverse' : ''; ?>"> 
    <div class="section_1__content">
        <div class="section_1__col section_1__col--1">
            <?php if($above_heading){ ?>
            <p data-aos="fade-up" class="red-text"><?= $above_heading; ?></p>
            <?php } ?>
            <?php if($heading){ ?>
            <h2 data-aos="fade-up" ><?= $heading; ?></h2>
            <?php } ?>
            <?php if($text_field){ ?>
            <div data-aos="fade-up" class="section_1__text-field">
            <?= $text_field; ?>
            </div>
            <?php } ?>
            <?php if($button){ ?>
            <div data-aos="fade-up">
                <?php if($button){ 
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <a class="cs-button cs-button--red-white" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>">
                    <span><?php echo esc_html( $button_title ); ?></span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <div class="section_1__col section_1__col--2">
            <?php if($image){ ?>
                <img data-aos="fade-up" width="<?= $image['width']; ?>" height="<?= $image['height']; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>
        </div>
    </div>
</section>