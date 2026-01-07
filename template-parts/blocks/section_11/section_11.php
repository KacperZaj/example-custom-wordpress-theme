
<?php 
$phone_number = get_field('phone_number', 'option')['phone_number'];
$e_mail = get_field('e_mail', 'option')['e_mail'];
$block_1 = get_field('block_1');
$block_2 = get_field('block_2');
?>
<section class="section_11 vertical-mobile-margin--80">
    <div class="section_11__content">
        <?php if($block_1){
            $icon = $block_1['icon'];
            $text = $block_1['text'];
        ?>
        <?php if($phone_number){ ?>
        <a data-aos="fade-up" href="tel:<?= $phone_number; ?>" class="section_11__col section_11__col--1">
            <div class="section_11__col-left">
                <img width="<?= $icon['width']; ?>" height="<?= $icon['height']; ?>" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
            </div>
            <div class="section_11__col-right">
                <?php if($text){ ?>
                <h3><?= $text; ?></h3>
                <?php } ?>
                <p class="section_11__under-heading"><?= $phone_number; ?></p>
            </div>
        </a>
        <?php } ?>
        <?php } ?>
        <?php if($block_2){
            $icon = $block_2['icon'];
            $text = $block_2['text'];
        ?>
        <?php if($e_mail){ ?>
        <a data-aos="fade-up" href="mailto:<?= $e_mail; ?>" class="section_11__col section_11__col--2">
            <div class="section_11__col-left">
                <img width="<?= $icon['width']; ?>" height="<?= $icon['height']; ?>" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
            </div>
            <div class="section_11__col-right">
                <?php if($text){ ?>
                <h3><?= $text; ?></h3>
                <?php } ?>
                <p class="section_11__under-heading"><?= $e_mail; ?></p>
            </div>
        </a>
        <?php } ?>
        <?php } ?>
    </div>
</section>