<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-theme
 */

get_header();
?>
	<main id="primary" class="site-main">
<!-- Слайдер главная страница -->
<div class="slider_baner lozad element-hidden">
		<div class="swiper mySwiper element-hidden">
    		<div class="swiper-wrapper">
            		<div class="swiper-slide"><a href="#"><img class="lozad" src="<?php echo get_template_directory_uri();?>/img/swiper/swiper1.jpg" alt="slide"></a></div>
            		<div class="swiper-slide"><a href="#"><img class="lozad" src="<?php echo get_template_directory_uri();?>/img/swiper/swiper2.jpg" alt="slide"></a></div>
            		<div class="swiper-slide"><a href="#"><img class="lozad" src="<?php echo get_template_directory_uri();?>/img/swiper/swiper3.jpg" alt="slide"></a></div>
    		</div>
    	<div class="swiper-button-next"></div>
    	<div class="swiper-button-prev"></div>
		<div class="swiper-pagination-home"></div>
  	</div>
</div>
</div>
<!-- Конец слайдера -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
