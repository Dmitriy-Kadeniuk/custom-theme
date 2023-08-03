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
	<section class="front-section">
	<!-- Слайдер главная страница -->
<div class="slider_baner lozad element-hidden">
		<div class="swiper mySwiper element-hidden">
    		<div class="swiper-wrapper">
			<?php if(get_field('swiper_image')):?>
			<?php while(has_sub_field('swiper_image')):?>

			<div class="swiper-slide"><a href="#"><img class="lozad" src="<?php the_sub_field('slider_image');?>" alt="slide"></a></div>


			<?php endwhile; ?>
			<?php endif; ?>
    		</div>
    	<div class="swiper-button-next"></div>
    	<div class="swiper-button-prev"></div>
		<div class="swiper-pagination-home"></div>
  	</div>
</div>

<!-- Конец слайдера -->
<section class="catigories">
<?php if(get_field('block_categories')):?>
<?php while(has_sub_field('block_categories')):?>
<div class="block-categores">

<a href="#">
<h1><?php the_sub_field('block-title'); ?></h1>
</a>
<img src="<?php the_sub_field('background_image'); ?>" alt="">

</div>
<?php endwhile; ?>
<?php endif; ?>
</section>
</section>

<section class="buy-now">
	<a href="#">
<picture>
	<img src="<?php the_field('img_block_buy_now'); ?>" alt="">
</picture>
<div>
<h1><?php the_field('title_block_buy_now'); ?></h1>
<span><?php the_field('sub_title_block_buy_now'); ?></span>
<button>Buy Now</button>
</div>
</a>
</section>

<section class="section-information">

<?php if(get_field('front-information')):?>
<?php while(has_sub_field('front-information')):?>
<div class="block-information">

<img src="<?php the_sub_field('info_image'); ?>" alt="">
<h3><?php the_sub_field('info_title'); ?></h3>
<span><?php the_sub_field('info_sub-title'); ?></span>

</div>
<?php endwhile; ?>
<?php endif; ?>

</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
