<?php get_header(); ?>
<small class="phpinfo">####this is the page.php</small>
<!-- hide all alerts by display: none in .phpinfo -->

<div class="container">




<div class="grid">
  <div class="grid__col">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</div><!-- .grid -->
</div>

<?php get_footer(); ?>
