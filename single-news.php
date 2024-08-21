    <div class="news-post external-indentation-box">
        <div class="news-post__title"><?php the_title();?></div>
        <div class="news-post__date"><?= CFS()->get("card_data")?></div>
        <img class="news-post__image" src="<?= CFS()->get("image")?>" alt="Christmas Gift Guide"/>
        <div class="single-post-descriptions">
            <?php if($text_arr = CFS()->get("text")): ?>
                <?php foreach($text_arr as $row): ?>
                <div class="single-post-descriptions__text"><?= $row["crad_text"];?></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if($loop = CFS()->get("add_slider_images")): ?>
        <div style="display: flex; flex-direction: column; align-items: center;">
            <div class="slider-v2 swiper-container" style="width: 400px;">
                <div class="slider-v2__wrapper swiper-wrapper">
                    <?php foreach($loop as $rowImage): ?>
                        <div class="slider-v2__slide swiper-slide">
                            <img src="<?= $rowImage["add_image"]; ?>" class="slider__image">
                        </div>
                    <?php endforeach; ?>
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
        <?php endif; ?>
    </div>
