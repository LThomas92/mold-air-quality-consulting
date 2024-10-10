<?php get_header(); ?>

<div class="content">
    <div class="c-privacy-policy">
        <div class="c-privacy-policy__main-content">
            <h1 class="c-privacy-policy__title"><?php echo get_the_title(); ?></h1>
            <?php echo the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>