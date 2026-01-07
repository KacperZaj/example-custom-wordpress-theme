<?php 
    $background = get_field('background');
    $heading = get_the_title();
    $under_heading = get_field('under_heading');
    $custom_margin = get_field('custom_margin');
    $bottom_margin = get_field('bottom_margin');
?>
</div>
<section class="header_3 pattern-white<?php if(!$custom_margin){ ?> vertical-mobile-margin<?php } ?>" style="<?php if($background){ ?>background-image: url('<?= esc_url( $background['url'] ); ?>');<?php } ?><?php if($custom_margin){ ?> margin-bottom: <?= $bottom_margin; ?>rem;<?php } ?>">
    <div class="header_3__wrapper">
        <div class="container">
            <div class="header_3__content">
                <?php if($heading){ ?>
                <h1 data-aos="fade-right"><?= $heading; ?></h1>
                <?php } ?>    
                <?php if($under_heading){ ?>
                <p data-aos="fade-right" class="header_3__text"><?= $under_heading; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="header_3__image-wrapper">
        <div class="container detail-image-container">
            <img class="header_3__detail-image" width="780" height="500" src="/wp-content/uploads/2025/03/background-X.png" alt="X">
        </div>
    </div>
</section>
<div class="container">