<?php get_header(); ?>

<div class="content">

<div class="c-how-it-works">
  <div class="c-how-it-works__header">
    <?php 
      $title = get_field('title');
      $desc = get_field('description');
      $summary = get_field('summary');
    ?>
    <h2 class="c-how-it-works__title"><?php echo $title; ?></h2>
    <p class="c-how-it-works__description"><?php echo $desc; ?></p>
  </div>

  <?php if( have_rows('how_it_works_items') ): ?>
    <ul class="c-how-it-works__list-items gutenberg-styles">
  <?php while( have_rows('how_it_works_items') ) : the_row();

        $howItWorksNumber = get_sub_field('how_it_works_number');
        $howItWorksTitle = get_sub_field('how_it_works_title');
        $howItWorksDesc = get_sub_field('how_it_works_description');
        $howItWorksImage = get_sub_field('how_it_works_image');
        ?>
      <li class="c-how-it-works__list-item">
        <div class="c-how-it-works__list-item-content">
        <p class="c-how-it-works__list-item-number"><?php echo $howItWorksNumber; ?></p>
        <h4 class="c-how-it-works__list-item-title"><?php echo $howItWorksTitle; ?></h4>
        <p class="c-how-it-works__list-item-description"><?php echo $howItWorksDesc; ?></p>
        </div>
        <figure class="c-how-it-works__list-item-image">
          <img src="<?php echo $howItWorksImage['url']; ?>" alt="<?php echo $howItWorksImage['alt']; ?>">
        </figure>
      </li>

    <?php 
    endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>

<p class="c-how-it-works__summary">
  <?php echo $summary; ?>
</p>




</div>
</div>

<?php get_footer(); ?>