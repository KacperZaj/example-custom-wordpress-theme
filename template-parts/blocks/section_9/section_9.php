<?php 
$choose_direction = get_field('choose_direction');
$background = get_field('background');
$image = get_field('image');
$heading = get_field('heading');
$text_field = get_field('text_field');
$custom_list_checkbox = get_field('custom_list_checkbox');
$custom_list = get_field('custom_list');
$old_price = get_field('old_price');
$new_price = get_field('new_price');
$button = get_field('button');
?>
</div>
<section class="section_9<?php echo $choose_direction == 'right' ? ' section_9--reverse' : ''; ?><?php if($background){ ?> section_9__before-background pattern-white<?php } ?>" <?php if($background){ ?>style="background-image: url('<?= esc_url( $background['url'] ); ?>'); "<?php } ?>>
    <div class="container">
        <div class="section_9__content">
            <div class="section_9__col section_9__col--1">
                <?php if($heading){ ?>
                <h2 data-aos="fade-up" ><?= $heading; ?></h2>
                <?php } ?>
                <?php if($text_field){ ?>
                <div data-aos="fade-up" class="section_9__text-field">
                <?= $text_field; ?>
                </div>
                <?php if($custom_list_checkbox && $custom_list){ ?>
                    <ul class="section_9__custom-list">
                    <?php foreach($custom_list as $item){
                        $text_1 = $item['text_1'];
                        $text_2 = $item['text_2'];
                        $text_3 = $item['text_3'];
                        $text_4 = $item['text_4'];
                        $text_5 = $item['text_5'];
                        $text_6 = $item['text_6'];
                    ?>
                    <li data-aos="fade-up">
                        <p>
                            <span class="section_9__span_1"><?= $text_1; ?>&nbsp;&nbsp;</span>
                            <span class="section_9__span_2"><?= $text_2; ?>&nbsp;&nbsp;</span>
                            <span class="section_9__span_3"><?= $text_3; ?>&nbsp;&nbsp;</span>
                            <span class="section_9__span_4"><?= $text_4; ?></span>
                            <span class="section_9__span_5"><?= $text_5; ?>&nbsp;&nbsp;</span>
                            <?php if($text_6){ ?>
                            <span class="section_9__span_6"><?= $text_6; ?>&nbsp;&nbsp;</span>
                            <?php } ?>
                        </p>
                    </li>
                    <?php } ?>
                    </ul>
                <?php } ?>
                <?php } ?>
                <?php if($new_price){ ?>
                <p data-aos="fade-up" class="section_9__prices">
                    <span class="section_9__new-price"><?= $new_price; ?></span>
                    <?php if($old_price){ ?>
                    <span class="section_9__old-price"><?= $old_price; ?></span>
                    <?php } ?>
                </p>
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
            <div class="section_9__col section_9__col--2">
                <?php if($image){ ?>
                    <img data-aos="fade-up" width="<?= $image['width']; ?>" height="<?= $image['height']; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php } ?>
            </div>
            <?php ?>
        </div>
    </div>
</section>
<div class="container">