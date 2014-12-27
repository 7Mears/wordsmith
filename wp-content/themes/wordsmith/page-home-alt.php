<?php
/**
* Template Name: Homepage alt
* Description: The front page with no posts.
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


<!-- /frontpageBottom -->


<?php get_footer(); ?>
