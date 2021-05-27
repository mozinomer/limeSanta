<?php /* Template Name: HomePage */  get_header(); ?>

<section class="home-text-sec">
	<div class="container">
		<div class="home-text-area">
			<h4  data-aos="fade-up" data-aos-delay="1600"><?php the_field('main_text'); ?></h4>
		</div>
	</div>
</section>
<section class="home-box-sec">
	<?php $j=0; $i=0;  if( have_rows('content_repeater') ): while( have_rows('content_repeater') ) : the_row(); ?>
		<div class="home-deatil-box">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="home-deatil-img">
						<img src="<?php the_sub_field('Mainimage'); ?>" <?php echo $i===0 ? 'data-aos-delay="2600"' : '' ?> data-aos="fade-up" >
					</div>
				</div>
				<div class="col-md-4">
					<div class="home-text-detail">
						<?php if($j % 2 == 0) {
							$fadeLeft = 'fade-left';
						} else {
							$fadeLeft = 'fade-right';
						} ?>

						<h2  <?php echo $i===0 ? '  data-aos-delay="1000" ' : '' ?> data-aos="<?php echo $fadeLeft; ?>" ><?php the_sub_field('headingNMamea'); ?></h2>
						<p <?php echo $i===0 ? '  data-aos-delay="1000" ' : '' ?> data-aos="<?php echo $fadeLeft; ?>" ><?php the_sub_field('sub_heading'); ?></p>
						<h4 <?php echo $i===0 ? '  data-aos-delay="1000" ' : '' ?> data-aos="<?php echo $fadeLeft; ?>" ><?php the_sub_field('nameHeadingis'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	<?php $i++; $j++; endwhile; else : endif; ?>

</section>
<section class="btn-view-all">
	<div class="container">
		<a href="#"><span>VIEW ALL MIXERS</span></a>
	</div>
</section>

<?php get_footer(); ?>