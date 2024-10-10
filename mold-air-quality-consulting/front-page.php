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
                <a class="c-homepage__header-cta" href="<?php echo $headerCTA['url']; ?>"><?php echo $headerCTA['title']; ?></a>
            </div>
            <div class="c-homepage__header-images">
            <figure class="c-homepage__header-image">
                <img src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt']; ?>">
            </figure>
            </div>
        </div>   <!-- header --> 


        <section class="c-homepage__highlights-section">
            <div class="c-homepage__highlights-main-content gutenberg-styles">
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
<a href="<?php echo $highlightsCTA['url']; ?>" class="c-homepage__highlights-cta"><?php echo $highlightsCTA['title']; ?></a>
            </div>
        </div>
    </section>

    <!-- Affilated LOGOS -->
     <section class="c-homepage__affiliated_logos-section gutenberg-styles">

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