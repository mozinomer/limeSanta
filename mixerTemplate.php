<?php /* Template Name: Mixer Template */  get_header(); ?>

<div class="innerSectionLImeMixer">
	<div class="row">
		<?php 
		$args = array( 'post_type' => 'mixer');
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-6">
					<a href="<?php the_permalink(); ?>">
						<div class="imageBackgroudn">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							<h2><?php the_title(); ?></h2>
						</div>
					</a>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
		</div>
	</div>

	<?php get_footer(); ?>