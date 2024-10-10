<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mold_&_Air_Quality_Consulting
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-footer__social-section">
        <?php  
          $socialTitle = get_field('social_title', 'option');
          $socialAddress = get_field('social_address', 'option');
        ?>
        <h3 class="site-footer__social-title"><?php echo $socialTitle; ?></h3>
        <p class="site-footer__social-address"><?php echo $socialAddress; ?></p>
			<?php if( have_rows('social_icons', 'option') ): ?>

			<ul class="site-footer__social-icons">
		<?php while( have_rows('social_icons', 'option') ) : the_row();

        $socialIcon = get_sub_field('social_icon_image');
		    $socialURL = get_sub_field('social_icon_url'); ?>
		<li class="site-footer__social-icon">
			<a target="_blank" href="<?php echo $socialURL; ?>" class="site-footer__social-icon__url">
			<img src="<?php echo $socialIcon['url']; ?>" alt="<?php echo $socialIcon['alt']; ?>" class="site-footer__social-icon__image"/>
			</a>
		</li>

    <?php endwhile; ?>
	</ul>
		<?php else :
			// Do something...
		endif; ?>
			</div>

			<div class="site-footer__contact-section">
				<?php 
          $contactTitle = get_field('contact_title', 'option');
          $contactPhone = get_field('contact_phone', 'option');
          $contactEmail = get_field('contact_email', 'option');
        ?>
        <h3 class="site-footer__contact-title"><?php echo $contactTitle; ?></h3>
        <a href="tel:<?php echo $contactPhone; ?>" class="site-footer__contact-phone"><?php echo $contactPhone; ?></a>
        <a href="mailto:<?php echo $contactEmail; ?>" class="site-footer__contact-email"><?php echo $contactEmail; ?></a>
			</div>
      <nav id="site-footer" class="site-footer__navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div><!-- .site-info -->
    <div class="site-footer__copyright">
      <?php $copyright = get_field('copyright_text', 'option'); ?>
      <h4 class="site-footer__copyright-text"><?php echo $copyright; ?></h4>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
