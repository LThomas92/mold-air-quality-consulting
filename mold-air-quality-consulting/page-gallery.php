<?php get_header(); ?>

<div class="content">
    <div class="c-gallery">
    <h2 class="c-gallery__title"><?php echo get_the_title(); ?></h2>

    <section class="c-gallery__image-section">
    <?php if( have_rows('images') ): ?>

    <ul class="c-gallery__images">
    <?php while( have_rows('images') ) : the_row();

        $image = get_sub_field('image'); 
        $title = get_sub_field('image_title');
        ?>
        <li class="c-gallery__item">
            <figure class="c-gallery__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <h5 class="c-gallery__image-title"><?php echo $title; ?></h5>
        </li>

    <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif; ?>
    </section>








    </div>
</div>

<?php get_footer(); ?>