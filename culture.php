<?php
/*Template Name:isotope-page*/
get_header();?>
<section class="isotope parallax-window"  style="background-image: url(<?php the_field('isotope_image');?>);" data-parallax="scroll" data-image-src="<?php the_field('isotope_image');?>">

</section>
<div class="grid-new">
	<?php 
	$images = get_field('gallery_iso');

	if( $images ): ?>
	<div class="grid-colum">
		<?php foreach( $images as $image ): ?>

		<a data-fancybox="img" href="<?php echo esc_url($image['url']); ?>">
			<div class="same-image">
				<img src="<?php echo esc_url($image['url']); ?>" alt="">
			</div>
		</a>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>

</div>
<?php get_footer();?>