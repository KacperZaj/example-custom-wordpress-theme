</div>
<?php 
$background = get_field('background');
$above_heading = get_field('above_heading');
$heading = get_field('heading');
$text_field = get_field('text_field');
$blocks = get_field('blocks');
?>
<section class="section_2 pattern-white vertical-mobile-margin" <?php if($background){ ?>style="background-image: url('<?= esc_url( $background['url'] ); ?>'); "<?php } ?>>
    <div class="container">
        <div class="section_2__content">
            <?php if($above_heading){ ?>
            <div data-aos="fade-up" class="section_2__red-text-wrapper">
                <p class="red-text"><?= $above_heading; ?></p>
            </div>
            <?php } ?>
            <?php if($heading){ ?>
            <h2 data-aos="fade-up" ><?= $heading; ?></h2>
            <?php } ?>
            <?php if($text_field){ ?>
            <div data-aos="fade-up" class="section_2__text-field">
            <?= $text_field; ?>
            </div>
            <?php } ?>
            <?php if($blocks){ ?>
            <div class="section_2__blocks">
            <?php foreach($blocks as $block){ 
                $middle_text = $block['middle_text'];
                $text_field_2 = $block['text_field_2'];
                $link = $block['link'];
                $hero = $block['background'];
                $heading = $block['heading'];
                $text_field = $block['text_field'];
            ?>
            
            <?php if($link){ 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="section_2__block js-section-2-block<?php if($middle_text){echo ' section_2__block--see-more';} else {echo ' section_2__block--classic'; } ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <?php } else { ?>
            <div class="section_2__block js-section-2-block<?php if($middle_text){echo ' section_2__block--see-more';} else {echo ' section_2__block--classic'; } ?>">
            <?php } ?>
                <div class="section_2__block-wrapper" data-aos="fade-up">
                <?php if($middle_text && $text_field_2){ ?>
                    <div class="section_2__middle-text">
                        <p><?= $text_field_2; ?></p>
                    </div>
                <?php } else { ?>
                    <?php if($hero){ ?>
                        <img class="section_2__hero-image" width="<?= $hero['width']; ?>" height="<?= $hero['height']; ?>" src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>" />
                    <?php } ?>
                    <div class="section_2__block-content js-block-content">
                    <?php if($heading){ ?>
                        <h3 class="section_2__block-heading"><?= $heading; ?></h3>
                    <?php } ?>
                    <div class="section_2__block-text-field js-block-text-field">
                        <?php if($text_field){ ?>
                        <p><?= $text_field; ?></p>
                        <?php } ?>
                        <button class="red-text-button"><?php _e('Zobacz', 'custom-strings'); ?></button>    
                    </div>
                    </div>
                <?php } ?>
                </div>
            <?php if($link){ ?> 
            </a>
            <?php } else { ?>
            </div>
            <?php } ?>

            <!-- /foreach -->
            <?php } ?>
            </div>
            <!-- /if -->
            <?php } ?>
        </div>
    </div>
</section>
<div class="container">