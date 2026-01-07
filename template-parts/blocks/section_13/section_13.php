<?php 
    $choose_direction = get_field('choose_direction');
    $image = get_field('image');
    $text = get_field('text');
?>
<section class="section_13<?php echo $choose_direction == 'right' ? ' section_13--reverse' : ''; ?>">
    <div class="section_13__content">
        <?php if($image){ ?>
            <img class="section_13__image" width="<?= $image['sizes']['large-width']; ?>" height="<?= $image['sizes']['large-height']; ?>" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php } ?>
        <?php if($text){ ?> 
            <div class="section_13__text">
                <?= $text; ?>
            </div>
        <?php } ?>
    </div>
    <div class="section_13__clear"></div>
</section>