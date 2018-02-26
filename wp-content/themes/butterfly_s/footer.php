<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
global $redux_demo;
?>

	</div><!-- #content -->

	<footer id="copyright" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h6 class="copyright-text text-center"><?php echo $redux_demo['footer-copyright-text'] ?></h6>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
