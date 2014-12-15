<?php
/**
* The homepage.
*
* @package Wordsmith
*/

get_header(); ?>

<section id="homeHero">

  <div class="homeHero">
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </div>

</section>


<div id="primary" class="content-area">
  <main id="main" class="site-main wrap" role="main">

    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() );?>

      <?php endwhile; ?>

      <?php wordsmith_paging_nav(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<p class=" wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non eros commodo nulla placerat aliquam ut hendrerit urna. Ut imperdiet felis at enim tempus, at faucibus nibh tincidunt. Aliquam egestas augue sit amet egestas bibendum. Nunc tempor euismod commodo. Sed viverra dolor sed pulvinar mollis. Mauris urna diam, vehicula eget justo ac, fermentum convallis ante. Aliquam nisl tortor, egestas et rutrum in, tincidunt in erat. Sed sed purus a nisi euismod pretium lacinia ac odio. In scelerisque arcu eros, in mattis sapien aliquam eu. Ut est tellus, porta sit amet lacus quis, sollicitudin accumsan ligula. Praesent eget consequat risus, sed consequat odio. In ullamcorper non tellus ac luctus. Pellentesque magna lorem, tristique eu mollis a, laoreet eget est. Integer viverra hendrerit lacus, quis vehicula eros. In hac habitasse platea dictumst. Nulla suscipit dolor ac faucibus lacinia.

  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis mollis porta neque, ac malesuada dui molestie eu. Nam gravida enim eu efficitur sagittis. Aenean porta vel turpis sed rutrum. Proin ac lobortis lectus. Vestibulum aliquet sollicitudin tempor. Nullam cursus aliquam sem, ut molestie sem. Morbi id accumsan ligula, vitae luctus nunc. Curabitur consequat sem eget diam convallis, vitae cursus eros dapibus. Donec ut metus sit amet ligula maximus vehicula vel non dui. Ut mattis, tortor ut vulputate mattis, nisi arcu tempor enim, in euismod lacus dui ut felis. Suspendisse potenti. Morbi tempor congue enim a interdum. Suspendisse eget odio accumsan, pretium nulla sit amet, ullamcorper tortor. Nunc ex magna, hendrerit et ultrices et, elementum eu nulla.

  Donec lacinia magna tempus elit dignissim, non porttitor eros aliquet. Donec consequat lorem in blandit pharetra. Fusce in erat sed diam pellentesque imperdiet. Nullam odio risus, convallis sed tristique in, convallis non justo. Mauris a fringilla nibh, id posuere massa. Aenean vel enim fringilla, eleifend justo ac, ullamcorper mi. Aliquam rhoncus urna eu semper sollicitudin.

  Mauris a leo iaculis, ultrices nulla non, suscipit libero. Etiam dapibus maximus nisl. Donec pharetra felis purus, in ultrices libero sodales sed. Maecenas in sem vitae enim egestas porta. Aliquam justo nibh, posuere aliquet pretium in, blandit nec tellus. Fusce ut magna id orci dignissim consequat. In ac molestie felis. Proin dictum metus tortor, quis iaculis urna posuere a. Ut sagittis quis lorem eu dapibus. Morbi nec convallis leo, at imperdiet nisl. Nullam sed nunc id orci mattis molestie. Integer at quam et enim faucibus faucibus a non ante. Fusce nec augue sollicitudin, consectetur augue id, facilisis enim.

  Morbi aliquam neque fermentum dictum sollicitudin. Nunc maximus ex eget ipsum fringilla, vel interdum nulla eleifend. Phasellus sit amet nisi et quam tristique molestie vel et nisl. Quisque sit amet mauris quis metus ultrices consequat ac quis sem. Fusce rutrum mi quis venenatis rutrum. Aenean magna nibh, scelerisque et hendrerit in, lacinia ac lacus. Cras vel pellentesque ante. Duis varius odio ac urna sagittis luctus. Sed in porttitor nisi. Pellentesque in luctus neque. Nulla et dui eget erat tempus consequat ut a magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue quam, interdum eget convallis vel, posuere et diam. Nunc ut sodales arcu, ac eleifend ante.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non eros commodo nulla placerat aliquam ut hendrerit urna. Ut imperdiet felis at enim tempus, at faucibus nibh tincidunt. Aliquam egestas augue sit amet egestas bibendum. Nunc tempor euismod commodo. Sed viverra dolor sed pulvinar mollis. Mauris urna diam, vehicula eget justo ac, fermentum convallis ante. Aliquam nisl tortor, egestas et rutrum in, tincidunt in erat. Sed sed purus a nisi euismod pretium lacinia ac odio. In scelerisque arcu eros, in mattis sapien aliquam eu. Ut est tellus, porta sit amet lacus quis, sollicitudin accumsan ligula. Praesent eget consequat risus, sed consequat odio. In ullamcorper non tellus ac luctus. Pellentesque magna lorem, tristique eu mollis a, laoreet eget est. Integer viverra hendrerit lacus, quis vehicula eros. In hac habitasse platea dictumst. Nulla suscipit dolor ac faucibus lacinia.

  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis mollis porta neque, ac malesuada dui molestie eu. Nam gravida enim eu efficitur sagittis. Aenean porta vel turpis sed rutrum. Proin ac lobortis lectus. Vestibulum aliquet sollicitudin tempor. Nullam cursus aliquam sem, ut molestie sem. Morbi id accumsan ligula, vitae luctus nunc. Curabitur consequat sem eget diam convallis, vitae cursus eros dapibus. Donec ut metus sit amet ligula maximus vehicula vel non dui. Ut mattis, tortor ut vulputate mattis, nisi arcu tempor enim, in euismod lacus dui ut felis. Suspendisse potenti. Morbi tempor congue enim a interdum. Suspendisse eget odio accumsan, pretium nulla sit amet, ullamcorper tortor. Nunc ex magna, hendrerit et ultrices et, elementum eu nulla.

  Donec lacinia magna tempus elit dignissim, non porttitor eros aliquet. Donec consequat lorem in blandit pharetra. Fusce in erat sed diam pellentesque imperdiet. Nullam odio risus, convallis sed tristique in, convallis non justo. Mauris a fringilla nibh, id posuere massa. Aenean vel enim fringilla, eleifend justo ac, ullamcorper mi. Aliquam rhoncus urna eu semper sollicitudin.

  Mauris a leo iaculis, ultrices nulla non, suscipit libero. Etiam dapibus maximus nisl. Donec pharetra felis purus, in ultrices libero sodales sed. Maecenas in sem vitae enim egestas porta. Aliquam justo nibh, posuere aliquet pretium in, blandit nec tellus. Fusce ut magna id orci dignissim consequat. In ac molestie felis. Proin dictum metus tortor, quis iaculis urna posuere a. Ut sagittis quis lorem eu dapibus. Morbi nec convallis leo, at imperdiet nisl. Nullam sed nunc id orci mattis molestie. Integer at quam et enim faucibus faucibus a non ante. Fusce nec augue sollicitudin, consectetur augue id, facilisis enim.

  Morbi aliquam neque fermentum dictum sollicitudin. Nunc maximus ex eget ipsum fringilla, vel interdum nulla eleifend. Phasellus sit amet nisi et quam tristique molestie vel et nisl. Quisque sit amet mauris quis metus ultrices consequat ac quis sem. Fusce rutrum mi quis venenatis rutrum. Aenean magna nibh, scelerisque et hendrerit in, lacinia ac lacus. Cras vel pellentesque ante. Duis varius odio ac urna sagittis luctus. Sed in porttitor nisi. Pellentesque in luctus neque. Nulla et dui eget erat tempus consequat ut a magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue quam, interdum eget convallis vel, posuere et diam. Nunc ut sodales arcu, ac eleifend ante.
  </p>

<?php get_footer(); ?>
