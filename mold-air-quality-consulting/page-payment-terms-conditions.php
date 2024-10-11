<?php get_header(); ?>

<div class="content">
    <div class="c-payment-terms">
        <h2 class="c-payment-terms__title"><?php echo get_the_title(); ?></h2>

    <?php if( have_rows('payment_terms') ): ?>
    <ul class="c-payment-terms__list">
    <?php while( have_rows('payment_terms') ) : the_row();

        $title = get_sub_field('payment_term_title'); 
        $desc = get_sub_field('payment_term_description');
        ?>
        <li class="c-payment-terms__list-item">
            <h4 key="<?php echo $title; ?>" class="c-payment-terms__list-item-title"><?php echo $title; ?>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 100 125" style="enable-background:new 0 0 100 125;" xml:space="preserve">
        <path d="M38,78.2l26.1-26.1c1.2-1.2,1.2-3.1,0-4.2L38,21.8L33.8,26l24,24l-24,24L38,78.2z"/>
        </svg>
            </h4>
            <div key="<?php echo $title; ?>" class="c-payment-terms__wrapper">
            <div class="c-payment-terms__list-item-desc"><?php echo $desc; ?></div>
            </div> 
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
    </div>
</div>

<?php get_footer(); ?>