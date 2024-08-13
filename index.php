<?php 
/*
    Template Name: Home
*/

    get_header(); 
?>
<div class="main">
    <div class="content-block">
        <img class="content-block__image" src="<?= get_template_directory_uri() ?>/assets/image/home/original.jpg"/>
        <div class="content-block__overlay">
            <div>
                <div class="content-block__title">Nieuwe eigenaar bij Peek Juwelier: Arman!</div>
                <div class="content-block__text">
                    Arman vervolgt het werk van Simona en Rita als nieuwe eigenaar van Peek Juwelier. Verwacht spannende vernieuwingen en updates!
                </div>
            </div>
            <div class="content-block__button wow animate__animated animate__fadeInUp">
                <a href="#" class="content-block__link">more</a>
            </div>
        </div>
    </div>
    
    <div class="product-collection wow animate__animated animate__fadeInUp">
        <div class="product-collection__card product-collection__card--big">
            <div class="product-collection__card-content">
                <div class="product-collection__card-collection">Arior Barcelona</div>
                <div class="product-collection__card-title">Handgemaakte Sieraden met 50 Jaar Ervaring</div>
                <div class="product-collection__card-description">Bij Arior creëren we al 50 jaar sieraden die schoonheid en emotie uitstralen. Laat onze creaties uw merk verlichten.</div>
            </div>
            <div class="product-collection__card-image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/assets/image/home/arior.png" class="product-collection__card-image">
            </div>
        </div>
        <div class="product-collection__card-group">
            <div class="product-collection__card product-collection__card--group">
                <div class="product-collection__card-content">
                    <div class="product-collection__card-collection">R&C</div>
                    <div class="product-collection__card-title product-collection__card-title--size">Wij maken niet alleen maar sieraden wij creeren tekens van liefde, emotie en herinneringen</div>
                </div>
                <div class="product-collection__card-image-wrapper">
                    <img src="<?= get_template_directory_uri() ?>/assets/image/home/R&C.png" class="product-collection__card-image">
                </div>
            </div>

            <div class="product-collection__card product-collection__card--group" style ="margin-top: 20px">
                <div class="product-collection__card-content">
                    <div class="product-collection__card-collection">Aller Spanninga</div>
                    <div class="product-collection__card-title product-collection__card-title--size">Aller Spanninga smeedt al vanaf 1863 geelgouden ringen. Van klassieke tot hypermoderne ringen. Gouden trouwringen, verlovingsringen, relatieringen. Voor elke gelegenheid hebben wij de juiste ringen, wil je meer weten lees dan onze blog.</div>
                </div>
                <div class="product-collection__card-image-wrapper">
                    <img src="<?= get_template_directory_uri() ?>/assets/image/home/aller-spanninga.png" class="product-collection__card-image" style="width: 200px">
                </div>
            </div>
        </div>
    </div>

    <?php
        $loop = CFS()->get("custom_slide_home_items");
        if($loop != null) :
    ?>
    <div>
        <div class="custom-slider swiper-container">
            <div class="custom-slider__wrapper swiper-wrapper">
                <?php
                    foreach($loop as $row){
                ?>
                <div class="custom-slider__slide swiper-slide">
                    <div class="custom-slide-content">
                        <div class="custom-slide-content__overlay custom-slide-content__style">
                            <div class="custom-slide-content__animation">
                                <div class="custom-slide-content__title"><?= $row["custom_slide_home_title"];?></div>
                                <div class="custom-slide-content__text">
                                    <?= $row["custom_slide_home_description"];?>
                                </div>
                            </div>
                            <div class="content-block__button">
                                <a href="#" class="content-block__link"><?= $row["custom_slide_home_button"];?></a>
                            </div>
                        </div>
                    </div>
                    <img class="custom-slide__image" src="<?= $row["custom_slide_home_image"];?>"/>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    <?php
        endif;
    ?>

    <?php
        $loopQuestionAnswer = CFS()->get("question_answer_loop");
        if($loopQuestionAnswer != null) :
    ?>

    <div class="jewelry-service wow animate__animated animate__fadeInUp">
        <div class="jewelry-service__content">
            <div class="jewelry-service__title">Sieraden: Reparatie, ontwerp en verkoop</div>
            <ul class="jewelry-service__list">
                <?php
                    foreach($loopQuestionAnswer as $rowQuestionAnswer){
                ?>
                <li class="jewelry-service__item">
                    <div class="jewelry-service__question"><div class="icon-plus jewelry-service__icon"></div><?= $rowQuestionAnswer["question_text"];?></div>
                    <div class="jewelry-service__answer"><?= $rowQuestionAnswer["answer_text"];?></div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <img class="jewelry-service__image" src="<?= CFS()->get("question_answer_image");?>"/>
    </div>

    <?php
        endif;
    ?>



    <?php
        $loopLogo = CFS()->get("logos");
        if($loopLogo != null) :
    ?>
    <div class="logo-collection wow animate__animated animate__fadeInUp">
        <ul class="logo-collection__list">
            <?php
                foreach($loopLogo as $rowLogo){
            ?>
            <li class="logo-collection__item">
                <a href="<?= $rowLogo["link"];?>" target="_blank"><img class="logo-collection__image" src="<?= $rowLogo["logo"];?>"/></a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>

    <?php
        endif;
    ?>

    <div class="other-jewelry">
        <div class="other-jewelry__title">Overige juwelen en sieraden</div>
            <a class="lightBg__return-button-link" href="https://www.mijnjuwelier.online/"  target="_blank">
                <div class="lightBg__return-button">Bekijk onze collectie</div>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
