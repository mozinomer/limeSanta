<?php get_header(); ?>


	<div class="innerSectionLImeMixerss">
		<div class="container">
			<h2><?php the_title(); ?></h2>
			<div class="row">
				<div class="col-md-12">
					<div class="imageBackgroudn">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<div class="innerNwe">
							<h4><?php the_field('headingMain'); ?></h4>
							<h5><?php the_field('location'); ?></h5>
						</div>
					</div>
				</div>
				<?php if( have_rows('mixer_gallery') ): while( have_rows('mixer_gallery') ) : the_row(); ?>
				<div class="col-md-4">
					<div class="imageBackgroudn">
						<img src="<?php the_sub_field('Mixerimage'); ?>">
						<h4><?php the_sub_field('name_Image'); ?></h4>
					</div>
				</div>
				<?php endwhile; else : endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>