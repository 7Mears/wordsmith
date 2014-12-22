<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wordsmith
 */

get_header(); ?>

<!-- Start the loop -->
<?php while ( have_posts() ) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

		<!-- Grab the featured image and set it as a class -->
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			$image = $image[0]; ?>
		<?php else :
			$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
		<?php endif; ?>

		<div class="singlePost-bg-wrapper">
				<div class="singlePost-bg" style="background-image: url('<?php echo $image; ?>')" >
				</div><!-- /featured image -->
		</div>

		<div id="primary" class="singlePost-content-area">
				<div class="singlePost">

					<div class ="singlePost-header">
						<h2><?php the_title(); ?></h2>
						<small>By <?php the_author() ?>, on <?php the_time('F jS, Y') ?> </small>
					</div>

					<?php the_content(); ?>

				</div>
			</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
