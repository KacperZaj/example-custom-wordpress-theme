<?php 
$logo = get_field('logo_nav', 'option');
$footer_background = get_field('footer_background', 'option');
$footer = get_field('footer', 'option');
$phone_number = get_field('phone_number', 'option');
$social_media = get_field('social_media', 'option');
$e_mail = get_field('e_mail', 'option');
$turn_off_contact = get_field('turn_off_contact');
$turn_off_cta = get_field('turn_off_cta');

if(!$turn_off_cta){
$cta = get_field('cta', 'option');
$background = $cta['background'];
$heading = $cta['heading'];
$under_heading = $cta['under_heading'];
$button_1 = $cta['button_1'];
$button_2 = $cta['button_2'];
$image = $cta['image'];
$section_5_args = [
    'background' => $background,
    'heading' => $heading,
    'under_heading' => $under_heading,
    'button_1' => $button_1,
    'button_2' => $button_2,
    'image' => $image,
];
get_template_part('template-parts/blocks/section_5/section_5', '', $section_5_args); 
}
?>
<footer id="footer" class="footer pattern-white" <?php if($footer_background):?>style="background: no-repeat left bottom url('<?= $footer_background['url']; ?>'), #1C1E24;"<?php endif; ?>>
    <?php if(!$turn_off_contact){ ?>
    <div class="container">
        <?php get_template_part('template-parts/blocks/section_12/section_12'); ?>
    </div>
    <?php } ?>
    <?php if($footer){ 
        $column_1 = $footer['column_1'];
        $column_2 = $footer['column_2'];
        $column_3 = $footer['column_3'];
        $column_4 = $footer['column_4'];
    ?>
    <div class="container">
        <div class="footer__cols<?php if($turn_off_contact){ ?> footer__turned-off-contact<?php } ?>">
            <?php if($column_1){ 
            $under_logo = $column_1['under_logo'];
            ?>
            <div class="footer__col footer__col--1">
                <div class="footer__col-1-top">
                    <?php if(!empty($logo)){?>
                        <a href="/">
                            <img class="footer__logo" width="<?= $logo['width']?>" height="<?= $logo['height']?>" src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
                        </a>
                    <?php } ?>
                    <p class="footer__under-logo"><?=  $under_logo; ?></p>
                </div>
                <?php if($social_media){ ?>
                    <div class="footer__social-media">
                        <?php foreach($social_media as $item){ 
                            $link = $item['link'];
                            $icon = $item['icon'];
                            if($link && $icon){
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a rel="noopener nofollow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <img class="footer__social-icon" width="<?= $icon['width']?>" height="<?= $icon['height']?>" src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                            </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
            <?php if($column_2){ 
            $heading = $column_2['heading'];
            $links = $column_2['links'];
            ?>
            <div class="footer__col footer__col--2">
                <?php if($heading){ ?>
                    <h3><?= $heading; ?></h3>
                <?php } ?>
                <?php if($links){ ?>
                <ul class="footer__links">
                    <?php foreach($links as $item){ 
                        $link = $item['link'];
                        if($link){
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <li class="footer__link-item">
                            <a class="footer__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>
            <?php if($column_3){ 
            $heading = $column_3['heading'];
            ?>
            <div class="footer__col footer__col--3">
                <?php if($heading){ ?>
                    <h3><?= $heading; ?></h3>
                <?php } ?>
                <ul class="footer__links">
                    <?php if($phone_number){ 
                    $icon = $phone_number['icon'];
                    $phone_number = $phone_number['phone_number'];
                    ?>
                        <?php if($icon && $phone_number){ ?>
                        <li class="footer__link-item">
                            <a class="footer__link footer__link--bold" href="tel:<?= $phone_number; ?>">
                                <?php if(!empty($icon)){ ?>
                                    <img width="<?= $icon['width']?>" height="<?= $icon['height']?>" src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                                    <span><?= $phone_number; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                        <?php } ?>
                    <?php } ?>
                    <?php if($e_mail){ 
                    $icon = $e_mail['icon'];
                    $e_mail = $e_mail['e_mail'];
                    ?>
                        <?php if($icon && $e_mail){ ?>
                        <li class="footer__link-item">
                            <a class="footer__link" href="tel:<?= $e_mail; ?>">
                                <?php if(!empty($icon)){ ?>
                                    <img width="<?= $icon['width']?>" height="<?= $icon['height']?>" src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                                    <span><?= $e_mail; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
            <?php if($column_4){ 
            $heading = $column_4['heading'];
            $under_heading = $column_4['under_heading'];
            $form = $column_4['form'];
            ?>
            <div class="footer__col footer__col--4">
                <?php if($heading){ ?>
                    <h3><?= $heading; ?></h3>
                <?php } ?>
                <?php if($under_heading){ ?>
                    <p class="footer__text"><?= $under_heading; ?></p>
                <?php } ?>
                <?php if($form){ ?>
                <div class="footer__call-form"><?= do_shortcode($form); ?></div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    <?php $bar = get_field('bar', 'option'); ?>
    <?php if($bar){ 
    $text = $bar['text'];    
    $link_1 = $bar['link_1'];    
    $link_2 = $bar['link_2'];    
    ?>
    <div class="footer__bar">
        <div class="container">
            <div class="footer__bar-cols">
                <div class="footer__bar-col footer__bar-col--1">
                    <?php if($text){ ?>
                    <p class="footer__bar-text">© <?php echo date("Y"); ?> <?= $text; ?></p>
                    <?php } ?>
                </div>

                <div class="footer__bar-col footer__bar-col--2">
                    <?php 
                    if($link_1){
                        $link_1_url = $link_1['url'];
                        $link_1_title = $link_1['title'];
                        $link_1_target = $link_1['target'] ? $link_1['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_1_url ); ?>" target="<?php echo esc_attr( $link_1_target ); ?>"><?php echo esc_html( $link_1_title ); ?></a>
                    <?php } ?>
                    <?php 
                    if($link_2){
                        $link_2_url = $link_2['url'];
                        $link_2_title = $link_2['title'];
                        $link_2_target = $link_2['target'] ? $link_2['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_2_url ); ?>" target="<?php echo esc_attr( $link_2_target ); ?>"><?php echo esc_html( $link_2_title ); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>  
</footer>
<?php wp_footer(); ?>
</body>
</html>
