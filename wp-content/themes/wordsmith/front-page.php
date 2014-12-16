<?php
/**
* The homepage.
*
* @package Wordsmith
*/

get_header(); ?>

<section id="homeDescription">

  <div class="homeDescription">
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </div>

</section>

<section id="homeWelcome">
  <div class="homeWelcome wrap">
    <h5>Naturally engaging advertorials. Sharp and insightful editorials. Attention-grabbing copy for brochures. Concise website content. Engaging blog posts. Quality photographs. I can do it all, and more.</h5>
  </div>
</section>

<section id="homePosts">
  <div class="homePosts">
    <?php $posts = get_posts( "numberposts=3" ); ?>
    <?php if( $posts ) : ?>
    <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

    <div class="post wrap">
      <?php the_post_thumbnail(); ?>
      <div class="post-content">
        <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
        <?php the_excerpt(); ?>
      </div>
    </div>

  </div>
</section><!-- /posts -->

  <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
