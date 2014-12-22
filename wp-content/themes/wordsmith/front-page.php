<?php
/**
* The homepage.
*
* @package Wordsmith
*/

get_header(); ?>

<section id="description" class="alt-colors">
  <div class="description">
    <h2><?php bloginfo( 'description' ); ?></h2>
  </div>
</section><!-- /description -->

<?php if ( is_active_sidebar( 'welcome' ) ) : ?>
  <section id="welcome" class="wrapper">
    <?php dynamic_sidebar( 'welcome' ); ?>
  </section><!-- /welcome -->
<?php endif; ?>


<section id="home-post" class="wrapper">
<?php $posts = get_posts( "numberposts=3" ); ?>
<?php if( $posts ) : ?>
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

  <div class="home-post">
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
<?php endif; ?>

</section><!-- /posts -->
<?php get_footer(); ?>
