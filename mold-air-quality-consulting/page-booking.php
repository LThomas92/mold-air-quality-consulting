<?php get_header(); ?>

<div class="content">

<div class="c-booking">
    <?php 
    $title = get_field('title');
    $description = get_field('description'); ?>
    <h2 class="c-booking__title"><?php echo $title; ?></h2>
    <p class="c-booking__description"><?php echo $description; ?></p>

    <div class="c-booking__calendar">
        <?php the_content();?>
    </div>
</div>

</div>

<?php get_footer(); ?>