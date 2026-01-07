<?php 
$above_heading = get_field('above_heading');
$heading = get_field('heading');
$text_field = get_field('text_field');
$blocks = get_field('blocks');
?>

<section class="section_3 vertical-mobile-margin--120">
    <div class="section_3__content">
        <?php if($above_heading){ ?>
        <div data-aos="fade-up" class="section_3__red-text-wrapper">
            <p class="red-text"><?= $above_heading; ?></p>
        </div>
        <?php } ?>
        <?php if($heading){ ?>
        <h2 data-aos="fade-up"><?= $heading; ?></h2>
        <?php } ?>
        <?php if($text_field){ ?>
        <div data-aos="fade-up" class="section_3__text-field">
        <?= $text_field; ?>
        </div>
        <?php } ?>
        <?php if($blocks){ ?>
        <div class="section_3__blocks">
            <?php foreach($blocks as $block){ 
                $icon = $block['icon'];    
                $number = $block['number'];    
                $text = $block['text'];    
            ?>
            <div data-aos="fade-up" class="section_3__block">
                <?php if($icon){ ?>
                    <img width="<?= $icon['width']?>" height="<?= $icon['height']?>" src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                <?php } ?>
                <?php if($number){ ?>
                <p class="section_3__number"><?= $number; ?></p>
                <?php } ?>
                <?php if($text){ ?>
                <p class="section_3__block-text"><?= $text; ?></p>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>