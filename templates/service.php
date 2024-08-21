<?php 
/*
    Template Name: Over ons
*/

get_header(); 
?>
<div class="main wow animate__animated animate__fadeInUp">
    <div class="page-title"><?= get_the_title();?></div>
    <div class="service-content-container-1 <?= CFS()->get("service_design_checkbox") ? "service-content-container-1__left-style" : "service-content-container-1__right-style";?> service-content-container-padding">
        <div class="service-content-container-1__image-box">
            <img class="service-content-container-1__image" src="<?= CFS()->get("service_design_image");?>"/>
        </div>
        <div class="service-content-container-1__info">
            <div class="service-content-container-1__title"><?= CFS()->get("service_design_title");?></div>
            <div class="service-content-container-1__description"><?= CFS()->get("service_design_descriptin");?></div>
        </div>
    </div>

    <?php
        $serviceSectionContent = CFS()->get("service_section_content_loop");
        if($serviceSectionContent):
    ?>
    
    <div class="service-content-container-2">
        <?php foreach($serviceSectionContent as $rowServiceSectionContent): ?>
        <div class="service-content-container-2__block" style="background-color: <?= $rowServiceSectionContent["service_section_content_color"]?>">
            <div class="service-content-container-2__content">
                <div class="service-content-container-2__title"><?= $rowServiceSectionContent["service_section_content_title"];?></div>
                <div class="service-content-container-2__description">
                    <?= $rowServiceSectionContent["service_section_content_description"];?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php
        $serviceSectionContentOther = CFS()->get("other_content_section_details");
        if($serviceSectionContentOther):
    ?>
    <div class="service-content-container-3 service-content-container-padding">
        <div class="service-content-container-3__main">
            <div class="service-content-container-3__main-box">
                <div class="service-content-container-3__title">
                <?= CFS()->get("other_content_section_title");?>
                </div>
                <div class="service-content-container-3__description"><?= CFS()->get("other_content_section_description");?></div>
            </div>
            <img class="service-content-container-3__image" src="<?= CFS()->get("other_content_section_image");?>"/>
            <div class="service-content-container-3__details">
                <?php foreach($serviceSectionContentOther as $rowServiceSectionContentOther): 
                    ?>
                <div class="service-content-container-3__detail-item" style="margin-bottom: 20px;">
                    <div class="service-content-container-3__title"><?= $rowServiceSectionContentOther["other_content_section_details_title"];?></div>
                    <div class="service-content-container-3__description"><?= $rowServiceSectionContentOther["other_content_section_details_description"];?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>