<?php
   get_header();  
?>
<div class="main">
    <!-- <section calss="cards">
        <div class="card-row container__cards">

            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                        <div class="card-section">
                            <div class="card-section-content">
                                <div>
                                    <div class="card-section-content__title"><?php the_title();?></div>
                                    <div class="card-section-content__text"><?= CFS()->get("card_info")?></div>
                                </div>
                                <div class="button">
                                    <a href=<?php the_permalink( )?> class="button__link"><?= CFS()->get("card_more")?></a>
                                </div>
                            </div>
                            <img src="<?= CFS()->get("card_image")?>" class="card-section-content__image">
                        </div>
                        <?php
                    }
                }
                ?>
        </div>
    </section>
    <?php the_posts_pagination();?> -->



    <div class="error">
        <div class="error__code">404</div>
        <div class="error__message">
            Pagina komt binnenkort beschikbaar
        </div>
        <a class="lightBg__return-button-link" href="<?= home_url() ?>">
            <div class="lightBg__return-button">Terug naar startpagina</div>
        </a>
    </div>


</div>
<?php
    get_footer();  
?>