<?php /* Template Name: LSD Template */  get_header(); ?>

<section class="home-text-sec">
	<section class="lime-text-sec">
		<div class="container">
			<div class="home-text-area">
				<h2>lIME SOUND DESIGN</h2>
			</div>
		</div>
	</section>
	<section class="home-box-sec">
		<?php if( have_rows('repeater_content') ): while( have_rows('repeater_content') ) : the_row(); ?>
			<div class="home-deatil-box">
				<div class="row align-items-center">
					<div class="col-md-8">
						<div class="home-deatil-img">
							<img src="<?php the_sub_field('Rimage'); ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="home-text-detail">
							<h2><?php the_sub_field('Sname'); ?> </h2>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; $j++; endwhile; else : endif; ?>
		</section>
		<section class="btn-view-all">
			<div class="container">
				<a href="<?php echo site_url(); ?>/mixers"><span>VIEW ALL MIXERS</span></a>
			</div>
		</section> 

		<?php get_footer(); ?>