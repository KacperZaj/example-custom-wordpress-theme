<?php 
    $background = get_field('background');
    $heading = get_the_title();
?>
</div>
<section class="header_2 pattern-white vertical-mobile-margin--smaller" <?php if($background){ ?>style="background-image: url('<?= esc_url( $background['url'] ); ?>'); "<?php } ?>>
    <div class="header_2__wrapper">
        <div class="container">
            <div class="header_2__content">
            <?php $categories = get_the_category();
            ?>
            <?php if($categories){ ?>
                <div class="header_2__categories">
                <?php foreach($categories as $category){ ?>
                <span class="header_2__category"><?= $category -> name; ?></span> 
                <?php } ?> 
                </div>
            <?php } ?>
            <?php if($heading){ ?>
            <h1 data-aos="fade-right" class="heading-2"><?= $heading; ?></h1>
            <?php } ?>
            <?php 
                $date = $date = get_the_date('j F Y'); 
                if($date){
                ?>
                <div class="date-block">
                    <p><?= strtoupper($date); ?></p>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
<div class="container">