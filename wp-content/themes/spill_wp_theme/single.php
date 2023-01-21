<?php get_header(); ?>
<small class="phpinfo">####this is the single.php</small>
<!-- hide all alerts by display: none in .phpinfo -->




<div class="container">

  <a href="http://lachozachula.org/blog/">
    <p class=" back-btn mb1">&lt; back</p>
  </a>

  <div class="flex-row justify-between">
    <div class="sml-12 lrg-7 links-secondary">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
              <!-- <?php the_post_thumbnail('medium'); ?> -->

              <p><?php the_content(); ?></p>
      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>


  <div class="sml-12 lrg-4">
  <?php get_sidebar(); ?>
  </div>
  </div><!-- .flex-row -->

</div><!-- .container -->

<?php get_footer(); ?>
