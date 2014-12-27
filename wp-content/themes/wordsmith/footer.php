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

		<?php if ( is_active_sidebar( 'hero-secondary' ) ) : ?>
			<section id="hero-secondary" class="wrapper">
				<?php dynamic_sidebar( 'hero-secondary' ); ?>
			</section><!-- /hero-secondary -->
		<?php endif; ?>

		<div class="site-footer">
			<div class="footer-content">

				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widget widget-area">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- /footer-1 -->
				<?php endif; ?>

			</div><!-- /footer-content -->
		</div><!-- /site-footer -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>
