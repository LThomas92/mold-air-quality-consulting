<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">
        <?php 
            $headerImage = get_field('header_image');
            $headerTitle = get_field('header_title');
            $headerDesc = get_field('header_description');
            $headerCTA = get_field('header_cta');
        ?>
        <div class="c-homepage__header">
            <div class="c-homepage__header-content">
                <h1 class="c-homepage__header-title"><?php echo $headerTitle; ?></h1>
                <div class="c-homepage__header-desc"><?php echo $headerDesc; ?></div>
                <a class="c-homepage__header-cta" href="tel:+19255388064"><?php echo $headerCTA; ?></a>
            </div>
            <div class="c-homepage__header-images">
            <figure class="c-homepage__header-image">
                <img src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt']; ?>">
            </figure>
            </div>
        </div>   <!-- header --> 


        <section id="services" class="c-homepage__highlights-section">
            <div class="c-homepage__highlights-main-content">
            <?php 
                $highlightsImage = get_field('highlights_image');
                $highlightsTitle = get_field('highlights_title');
                $highlightsSummary = get_field('highlights_description');
                $highlightsCTA = get_field('highlights_cta');
            ?>
            <div class="c-homepage__highlights-images">
                <figure class="c-homepage__highlights-image">
                    <img src="<?php echo $highlightsImage['url']; ?>" alt="<?php echo $highlightsImage['alt']; ?>">
                </figure>
            </div>  <!-- highlights images section -->
            <div class="c-homepage__highlights-content">
            <h2 class="c-homepage__highlights-title"><?php echo $highlightsTitle; ?></h2>
            <p class="c-homepage__highlights-summary"><?php echo $highlightsSummary; ?></p>
            <?php if( have_rows('highlights_list_items') ): ?>
            <ul class="c-homepage__highlights-items">
        <?php while( have_rows('highlights_list_items') ) : the_row();
        $highlightDesc = get_sub_field('highlights_list_item'); ?>
        <li class="c-homepage__highlights-item">
            <?php echo $highlightDesc; ?>
        </li>
    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
            </div>
        </div>
    </section>


<!-- ABOUT SECTION -->
<div id="why-us" class="c-about__header">
    <h2 class="c-about__header-title">Why Us</h2>
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

<!-- ABOUT SECTION -->

<!-- HOW IT WORKS -->

<div id="how-it-works" class="c-how-it-works">
  <div class="c-how-it-works__header">
    <?php 
      $title = get_field('hw_title');
      $desc = get_field('hw_description');
    ?>
    <h2 class="c-how-it-works__title"><?php echo $title; ?></h2>
    <p class="c-how-it-works__description"><?php echo $desc; ?></p>
  </div>

  <?php if( have_rows('how_it_works_items') ): ?>
    <ul class="c-how-it-works__list-items">
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

</div>

<!-- HOW IT WORKS -->

  <!-- Affilated LOGOS -->
  <section class="c-homepage__affiliated_logos-section">

<?php if( have_rows('affiliated_logos') ): ?>

<ul class="c-homepage__logos">
<?php while( have_rows('affiliated_logos') ) : the_row();

    $logo = get_sub_field('logo'); ?>
    
        <li class="c-homepage__logo">
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"/>
         </li>
    
<?php endwhile; ?>
</ul>

<?php 
else :
// Do something...
endif; ?>

</section>


<!-- Affilated LOGOS -->






    </div>

</div>

<?php get_footer(); ?>