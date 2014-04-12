<?php
/**
 * The template for displaying Add-ons
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
<section class="section columns columns-2 addons">

	<div class="wrapper">
		<h1>Official Developer Add-ons</h1>
		<h2>Coming soon</h2>
	</div>	

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'item', 'box' ) ); ?>> 
		    
		    	<?php if ( current_user_can( 'manage_options' ) ) : ?>
					<h2>
						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
				    		<?php the_title(); ?>
				    	</a>
			    	</h2>
			    	<?php affwp_post_thumbnail(); ?>
				<?php else : ?>
						<h2><?php the_title(); ?></h2>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
				<?php endif; ?>	

		   	
		       	<?php 
			 		the_excerpt();
			 	?>
		</article>

	<?php endwhile; ?>
	<div class="gap"></div>
	<div class="gap"></div>
	<?php endif; ?>
</section>

<?php get_footer();
