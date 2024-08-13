<?php 
    get_header(); 
?>
<div class="main">
    <div class="external-indentation">
        <div>
            <div class="contents">
                <div class="contents__title"><?php the_title();?></div>
                <?php 
                        $text_arr = CFS()->get("text");
                        if($text_arr != null):
                ?>
                    <div class="content">
                        <div class="content__text">
                            <?php
                            
                            foreach($text_arr as $row){
                                ?>
                                    <div class="content__title"><?= $row["crad_text"];?></div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php endif;?>
            </div>

            <div>
                <img src="<?=CFS()->get("image")?>">
            </div>

            <?php
                $loop = CFS()->get("add_slider_images");
                if($loop != null) :
            ?>
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;"
            >
                <div class="slider-box">
                    <div class="slider">
                        <div class="slider-image">
                            <?php
                                    foreach($loop as $row){
                                        ?>
                                        <img src="<?= $row["add_image"];?>" class="slider-image__item">
                                        <?php
                                    }
                                ?>
                        </div>
                    </div>

                    <div class="slider-controllers">
                        <div class="slider-controllers__circles"></div>
                        <div class="slider-controllers__arrow">
                            <div class="button">
                                <div class="button__link slider-controllers__arrow-icon icon-left"></div>
                            </div>
                            <div class="button">
                                <div class="button__link slider-controllers__arrow-icon icon-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>