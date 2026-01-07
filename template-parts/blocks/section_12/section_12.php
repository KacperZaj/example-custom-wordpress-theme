<?php
if(get_field('contact_section')){
    $contact_section = get_field('contact_section');
}
else{
    $contact_section = get_field('contact_section', 'option');
}

$above_heading = is_array($contact_section) && array_key_exists('above_heading', $contact_section) ? $contact_section['above_heading'] : null;
$heading = is_array($contact_section) && array_key_exists('heading', $contact_section) ? $contact_section['heading'] : null;
$image = is_array($contact_section) && array_key_exists('image', $contact_section) ? $contact_section['image'] : null;
$contact_form = is_array($contact_section) && array_key_exists('contact_form', $contact_section) ? $contact_section['contact_form'] : null;
?>

<section class="section_12 section_1 section_1--reverse"> 
    <div class="vertical-mobile-margin--80">
        <div class="section_1__content">
            <div class="section_1__col section_1__col--1">
                <?php if($above_heading){ ?>
                <p data-aos="fade-up" class="red-text"><?= $above_heading; ?></p>
                <?php } ?>
                <?php if($heading){ ?>
                <h2 data-aos="fade-up" ><?= $heading; ?></h2>
                <?php } ?>
                <?php if($contact_form){ ?>
                <div data-aos="fade-up" class="section_1__contact-form">
                <?= do_shortcode($contact_form); ?>
                </div>
                <?php } ?>
            </div>
            <div class="section_1__col section_1__col--2">
                <?php if($image){ ?>
                    <img data-aos="fade-up" width="<?= $image['width']; ?>" height="<?= $image['height']; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php } ?>
            </div>
        </div>
    </div>
</section>