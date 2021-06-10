<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Veg_Groups
 */

?>

<a name="support"></a>
<div class="container_parent veg_support">
	<div class="container">
		<div class="col-sm-12 no-padding">
			<div class="col-sm-12 veg_hero_title text-center">Please consider donating if you enjoy our work.</div>
			<div class="col-sm-12 veg_hero_body">
				<p>We offer our websites for free and we keep them clutter-free. If you love one of them and want to support their continuation, chip in what you can.</p>
				<p>Your support will allow us to continue our work, continue to maintain and grow existing projects, and create new projects. Your support makes a difference!</p>
				<p><a class="btn btn-primary btn-lg" href="https://donorbox.org/veggroups?utm_source=veggroups&utm_medium=veggroups&utm_campaign=vg_media_footer&utm_term=donate" role="button" target="_blank">Donate Now</a></p>
			</div>
		</div>
	</div>
</div>

	<footer id="colophon" class="site-footer veg_footer">
		<div class="container">
		<div class="col-xs-7 col-xs-push-5 veg_footer_links">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'container'		 => ''
				)
			);
			?>
		</div>
		<div class="col-xs-5 col-xs-pull-7 veg_footer_copyright">
		&copy; 2017-<?php echo date("Y"); ?> Veg Groups
		</div>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<link href="https://fonts.googleapis.com/css?family=Londrina+Solid|Roboto+Condensed|Roboto|Nunito+Sans|Open+Sans:600" rel="stylesheet">
</body>
</html>
