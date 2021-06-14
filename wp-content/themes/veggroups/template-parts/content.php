<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Veg_Groups
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12' ); ?>>

	<?php
	if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				veggroups_posted_on();
				?>
			</div><!-- .entry-meta -->
	<?php endif; ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->
	<?php veggroups_post_thumbnail(); ?>

	<?php
	if ( is_singular() ) :
	?>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'veggroups' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'veggroups' ),
				'after'  => '</div>',
			)
		);
		?>
		<h2>About Veg Groups</h2>
		<p class="site_body"><a href="https://www.veggroups.org/" target="_blank">Veg Groups</a> builds websites to help people go vegan or stay vegan. Our goal is to meet people where they are and encourage them to make changes that will help animals, the environment, humanity, and their own health. We do this through the operation of <a href="https://www.vegevents.com/" target="_blank">VegEvents.com</a>, <a href="https://www.vegmealdelivery.com/" target="_blank">VegMealDelivery.com</a>, <a href="https://www.vegmovies.com/" target="_blank">VegMovies.com</a>, and <a href="https://www.vegresources.com/" target="_blank">VegResources.com</a>.</p>
	</div><!-- .entry-content -->
	<?php
	endif;
	?>
</article><!-- #post-<?php the_ID(); ?> -->
