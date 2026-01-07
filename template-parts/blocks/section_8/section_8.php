<?php 
$above_heading = get_field('above_heading');
$heading = get_field('heading');
$under_heading = get_field('under_heading');
$gallery = get_field('gallery');
?>
<section class="section_8">
    <div class="section_8__content">
        <?php if($above_heading){ ?>
        <div class="section_8__red-text-wrapper" data-aos="fade-up">
            <p class="red-text"><?= $above_heading; ?></p>
        </div>
        <?php } ?>
        <?php if($heading){ ?>
        <h2 class="section_8__heading" data-aos="fade-up"><?= $heading; ?></h2>
        <?php } ?>
        <?php if($under_heading){ ?>
        <div class="section_8__text" data-aos="fade-up"><?= $under_heading; ?></div>
        <?php } ?>
    </div>
</section>
</div> <!-- /container -->
<?php if($gallery){ ?>
<section class="section_8__slider vertical-mobile-margin" data-aos="fade-up">
    <div class="container-fluid">
        <div class="swiper section-8-swiper">
            <div class="swiper-wrapper">
                <?php foreach($gallery as $image){ ?>
                <div class="swiper-slide">
                    <a href="<?php echo esc_url($image['url']); ?>" data-fslightbox="section-8-lightbox">
                        <img width="<?= $image['width']; ?>" height="<?= $image['height']; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<div class="container">