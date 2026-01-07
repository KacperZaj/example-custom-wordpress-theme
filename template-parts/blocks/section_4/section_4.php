<?php 
$above_heading = get_field('above_heading');
$heading = get_field('heading');
$questions_and_answers = get_field('questions_and_answers');
?>

<section class="section_4 vertical-mobile-margin--120">
    <?php if($above_heading){ ?>
    <div data-aos="fade-up" class="section_3__red-text-wrapper">
        <p class="red-text"><?= $above_heading; ?></p>
    </div>
    <?php } ?>
    <?php if($heading){ ?>
    <h2 data-aos="fade-up" class="section_4__heading"><?= $heading; ?></h2>
    <?php } ?>
    <?php if($questions_and_answers){ ?>
    <div data-aos="fade-up" class="section_4__questions-and-answers js-faq-items" itemscope itemtype="https://schema.org/FAQPage">
        <?php foreach($questions_and_answers as $item){ 
            $question = $item['question'];
            $answer = $item['answer'];
        ?>
        <div class="section_4__question-and-answer js-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="section_4__question-and-answer__top js-faq-top">
                <div class="section_4__question-and-answer__left">
                    <svg class="section_4__question-and-answer__top-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6667 25.3333C20.5577 25.3333 25.3333 20.5577 25.3333 14.6667C25.3333 8.77563 20.5577 4 14.6667 4C8.77563 4 4 8.77563 4 14.6667C4 20.5577 8.77563 25.3333 14.6667 25.3333Z" stroke="#F20731" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M28.0012 27.9997L22.2012 22.1997" stroke="#F20731" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <?php if($question){ ?>
                        <h3 class="heading-4" itemprop="name"><?= $question; ?></h3>
                    <?php } ?>
                </div>
                <div class="section_4__question-and-answer__right">
                    <div class="section_4__question-and-answer__button">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.5 12.75L17 21.25L25.5 12.75" stroke="#131313" stroke-width="2.83333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="section_4__question-and-answer__bottom js-faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <?php if($answer){ ?>
                    <div class="section_4__question-and-answer__text-field" itemprop="text">
                        <?= $answer; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>