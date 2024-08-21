<?php get_header(); ?>
<div class="main">
    <div class="single-post-content external-indentation">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_category('news')) : ?>
                <?php include('single-news.php'); ?>
            <?php endif; ?>
            <?php if (has_category('jewellery')) : ?>
                <?php include('single-jewellery.php'); ?>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
