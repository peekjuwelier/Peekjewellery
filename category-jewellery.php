<?php
   get_header();  
?>
<div class="main">
    <?php
        $category_slug = 'jewellery';
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
            'category_name' => $category_slug,
            'paged' => $paged,
        ));
        if($query->have_posts()){
        ?>
            <section class="cards">
                <div class="card-row container__cards">
                    <?php
                    while($query->have_posts()){
                        $query->the_post();
                        ?>
                            <div class="card-section">
                                <div class="card-section-content">
                                    <div>
                                        <div class="card-section-content__title"><?php the_title();?></div>
                                        <div class="card-section-content__text"><?= CFS()->get("card_info")?></div>
                                    </div>
                                    <div class="button">
                                        <a href="<?php the_permalink() ?>" class="button__link"><?= CFS()->get("card_more")?></a>
                                    </div>
                                </div>
                                <img src="<?= CFS()->get("card_image")?>" class="card-section-content__image">
                            </div>
                        <?php
                    }
                    ?>
                            </div>
                        </section>
                    <?php
                } else {
                    ?>
                    <div class="error">
                        <div class="error__code">Hier is voorlopig niets</div>
                        <div class="error__message">
                            Pagina komt binnenkort beschikbaar
                        </div>
                        <a class="lightBg__return-button-link" href="<?= home_url() ?>">
                            <div class="lightBg__return-button">Terug naar startpagina</div>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
    ?>
    <?php
        the_posts_pagination(array(
            'prev_text' => __('Vorige'),
            'next_text' => __('Volgende'),
        ));
    ?>
</div>
<?php
    get_footer();  
?>
