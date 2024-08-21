<?php 
/*
    Template Name: Winkel
*/

    get_header(); 
?>
<div class="main">
    <div class="page-title"><?= get_the_title();?></div>
    <div class="external-indentation">
        <div class="external-indentation-box">
            <div class="other">
                <div class="other__title"><?= CFS()->get("other_information_title");?></div>
                <div class="other__description"><?= CFS()->get("other_information_descripton");?></div>
            </div>
            <div class="slider-v2 swiper-container">
                <div class="slider-v2__wrapper swiper-wrapper">
                    <?php
                        $loopSliderImage = CFS()->get("slider_images");
                        foreach($loopSliderImage as $rowImage){
                    ?>
                    <div class="slider-v2__slide swiper-slide">
                        <img src="<?= $rowImage["slider_image"];?>" class="slider__image">
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="slider-v2__tools">
                    <div class="slider-v2__pagination swiper-pagination"></div>
                    <div class="slider-v2__buttons">
                        <div class="slider-v2__prev swiper-button-prev icon-left"></div>
                        <div class="slider-v2__next swiper-button-next icon-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>