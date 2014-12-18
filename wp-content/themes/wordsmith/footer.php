<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wordsmith
 */
?>
	<footer id="site-footer">
		<div class="site-footer">
			<div class="footer-content">

				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wordsmith' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wordsmith' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wordsmith' ), 'Wordsmith', '<a href="http://www.endboss.ca" rel="designer">EndBoss</a>' ); ?>

			</div><!-- /footer-content -->
		</div><!-- /site-footer -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>
