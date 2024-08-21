    <div class="single-jewellery external-indentation-box">  
        <?php if($loop = CFS()->get("add_slider_images")): ?>
        <div class="single-jewellery__first-content">
            <div class="slider-v3 swiper-container">
                <div class="slider-v3__wrapper swiper-wrapper">
                    <?php foreach($loop as $rowImage): ?>
                    <div class="slider-v3__slide swiper-slide">
                        <img src="<?= $rowImage["add_image"];?>" class="slider__image">
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-v3__tools">
                    <div class="slider-v3__pagination swiper-pagination"></div>
                    <div class="slider-v3__buttons">
                        <div class="slider-v3__prev swiper-button-prev icon-left"></div>
                        <div class="slider-v3__next swiper-button-next icon-right"></div>
                    </div>
                </div>
            </div>
            <div class="jewellery-post">
                <div class="jewellery-post_title"><?php the_title();?></div>
                <div class="jewellery-post_text"><?= CFS()->get("card_info")?></div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="single-post-descriptions">
            <?php if($text_arr = CFS()->get("text")): ?>
                <?php foreach($text_arr as $row): ?>
                <div class="single-post-descriptions__text"><?= $row["crad_text"];?></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div>
            <img src="<?=CFS()->get("image")?>">
        </div>
    </div>
