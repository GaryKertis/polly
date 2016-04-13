<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			Follow Polly on <a href="https://www.facebook.com/polly.bresnick">Facebook</a>
			<?php get_sidebar( 'main' ); ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
	<script src="./wp-content/themes/polly/bower_components/trees/build/build.js"></script>
	<script src="./wp-content/themes/polly/bower_components/trees/node_modules/sat/SAT.js"></script>
</body>
</html>