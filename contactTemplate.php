<?php /* Template Name: Contact Template */  get_header(); ?>

<section class="contact-us-sec">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 bordr">
				<div class="contact-no">
					<img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png">
					<h2><?php the_field('phoneNumber', 'options'); ?></h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="location-sec">
					<img src="<?php echo get_template_directory_uri(); ?>/images/location.png">
					<h2><?php the_field('adress','options'); ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="email-sec">
	<div class="container">
		<div class="email-sec-flex">
			<div class="email-sec-text">
				<h2>Executive producer la -</h2> 
				<p><?php the_field('executive_producer_la'); ?> </p>					
			</div>
		</div>
		<div class="email-sec-flex">
			<div class="email-sec-text">
				<h2>Executive producer -</h2> 
				<p><?php the_field('executive_producer'); ?> </p>
			</div>
		</div>
		<div class="email-sec-flex">
			<div class="email-sec-text">
				<h2>Senior producer -</h2> 
				<p><?php the_field('senior_producer'); ?> </p>
			</div>
		</div>
		<div class="email-sec-flex">
			<div class="email-sec-text">
				<h2>producer - </h2> 
				<p><?php the_field('producer'); ?> </p>
			</div>
		</div>
	</div>
	<div class="email-button">
		<a href="mailto:<?php the_field('email','options'); ?>">EMAIL US</a>
	</div>
	<div class="social-icons">
		<a href="<?php the_field('facebook_link', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
		<a href="<?php the_field('instagram_link', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png"></a>
	</div>
</section>


<?php get_footer(); ?>













