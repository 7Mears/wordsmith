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

				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widget widget-area">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- /footer-sidebar -->
				<?php endif; ?>

			</div><!-- /footer-content -->
		</div><!-- /site-footer -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>
