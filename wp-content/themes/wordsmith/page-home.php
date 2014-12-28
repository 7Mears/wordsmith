<?php
/**
* Template Name: Homepage
* Description: The front page.
*
* @package Wordsmith
*/

get_header(); ?>

<?php if ( is_active_sidebar( 'frontpageTop' ) ) : ?>
<section id="frontpageTop" class="alt-colors">
  <?php dynamic_sidebar( 'frontpagetop' ); ?>
</section>
<?php endif; ?>
<!-- /frontpageTop -->

<?php if ( is_active_sidebar( 'frontpageMiddle' ) ) : ?>
<section id="frontpageMiddle" class="wrapper">
  <?php dynamic_sidebar( 'frontpagemiddle' ); ?>
</section>
<?php endif; ?>
<!-- /frontpageMiddle -->

<?php $posts = get_posts( "numberposts=3" ); ?>
<?php if( $posts ) : ?>
<section id="frontpagebottom" class="wrapper">
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
  <div class="frontpageBottom">
    <div class="post-title">
      <h4><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h4>
    </div>

    <div class="post-info">
      <p>Date<br /><span><?php the_date(); ?></span></p>
      <p>Category<br /><span><?php the_category( ', ' ); ?></span></p>
    </div>

    <div id="post-content">
      <?php the_excerpt(); ?>
    </div>
  </div><!-- /post -->

<?php endforeach; ?>
</section>
<?php endif; ?>
<!-- /frontpageBottom -->


<?php get_footer(); ?>
