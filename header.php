<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'custom-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<section class="head">
		
		<nav id="site-navigation" class="main-navigation">
			<div class="work-time">
			<p>Пн-Пт / 11:00 - 20:00</p>
            <p>Сб-Вс / 11:00 - 18:00</p>
			</div>
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'Phone-menu',
					'menu_id'        => 'Phone-header-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</section>
		<section class="header-section-2">
		<div class="logo">
			</div>
			<div class="search_form">

			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">

			<?php aws_get_search_form( true ); ?>
		</div>
		<div class="icon-menu">
		<a href="/wishlist/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.png" alt=""></a>
        <a href="/my-account/edit-account/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/profile.png" alt=""></a>
        <a href="/cart/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/cart.png" alt="">
		</div>
		</section>
	</header><!-- #masthead -->
