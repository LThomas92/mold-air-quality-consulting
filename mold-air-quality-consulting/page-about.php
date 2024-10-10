<?php get_header(); ?>

<div class="content">

<div class="c-about">
  <div class="c-about__header">
    <h2 class="c-about__header-title"><?php echo get_the_title(); ?></h2>
  </div>

  <section class="c-about__main-section">
    <?php $aboutImage = get_field('about_image'); ?>
    <figure class="c-about__main-image">
      <img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">
    </figure>
    <?php if( have_rows('company_values') ): ?>

   <ul class="c-about__company-values">
    <?php while( have_rows('company_values') ) : the_row();
        $valueImage = get_sub_field('company_value_image');
        $valueTitle = get_sub_field('company_value_title');
        $valueDesc = get_sub_field('company_value_description'); ?>

        <li class="c-about__company-value">
          <figure class="c-about__company-value-image">
            <img src="<?php echo $valueImage['url']; ?>" alt="<?php echo $valueImage['alt']; ?>">
          </figure>
          <h4 class="c-about__company-value-title"><?php echo $valueTitle; ?></h4>
          <p class="c-about__company-value-desc"><?php echo $valueDesc; ?></p>
        </li>
        
    <?php endwhile; ?>
    </ul>

<?php else :
endif; ?>
  </section>
</div>

</div>

<?php get_footer(); ?>