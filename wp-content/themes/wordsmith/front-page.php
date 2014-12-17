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

<section id="welcome" class="wrapper">
  <div class="welcome">
    <h5>Naturally engaging advertorials. Sharp and insightful editorials. Attention-grabbing copy for brochures. Concise website content. Engaging blog posts. Quality photographs. I can do it all, and more.</h5>
  </div>
</section><!-- /welcome -->

<section id="home-post">
<?php $posts = get_posts( "numberposts=3" ); ?>
<?php if( $posts ) : ?>
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

  <div class="home-post wrapper">
    <div class="post-img">
      <?php the_post_thumbnail(); ?>
    </div>

    <div class"post-content">
      <h4><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h4>
      <?php the_excerpt(); ?>
    </div>
  </div><!-- /post -->


<?php endforeach; ?>
<?php endif; ?>

</section><!-- /posts -->
<?php get_footer(); ?>
