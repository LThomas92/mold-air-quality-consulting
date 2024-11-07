<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mold_&_Air_Quality_Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<?php 
			$logo = get_field('logo', 'option');
			$scheduleBtn = get_field('schedule_phone_number', 'option');
		?>
	
		<div class="site-header__navigation">
		<a class="site-header__logo" href="<?php echo site_url(); ?>">
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
		</a>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<a href="tel:9255388064" class="site-header__schedule-btn"><?php echo $scheduleBtn; ?></a>
		</div>
	</header><!-- #masthead -->

	<div class="mobile-header">

	<a href="<?php echo site_url(); ?>">
<img title="Mold & Air Quality Consulting Logo" class="mobile-menu-overlay__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mold & Air Quality Consulting Logo"/>
</a>

<div id="nav-icon3" class="mobile-header__menu-icon">
  <span></span>
  <span></span>
  <span></span>
</div>



</div>

<div class="mobile-menu-overlay">
<div class="mobile-menu-overlay__container">
<div class="mobile-menu-overlay__header">

<a href="<?php echo site_url(); ?>">
<img title="Mold & Air Quality Consulting Logo" class="mobile-menu-overlay__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mold & Air Quality Consulting Logo"/>
</a>

<img class="mobile-menu-overlay__close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg" alt="Close Icon"/>

</div>
<nav class="mobile-navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	
	</nav><!-- #site-navigation -->
	<a href="tel:9255388064"" class="mobile-menu-overlay__schedule-appt"><?php echo $scheduleBtn; ?></a>
	</div>
</div>

