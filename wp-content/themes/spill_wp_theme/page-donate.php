<?php
/*
Template Name: donate page
*/
?>

<?php get_header(); ?>

<div class="container">
<h1>Donate</h1>

  <div class="flex-row justify-between">
    <div class="sml-12 lrg-7 links-secondary">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
              <!-- <?php the_post_thumbnail('medium'); ?> -->

              <p><?php the_content(); ?></p>
      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>


  <div class="sml-12 lrg-4">
  <?php if ( dynamic_sidebar('donate-page-widget') ) : else : endif; ?>

  </div>
  </div><!-- .flex-row -->

</div><!-- .container -->

<?php get_footer(); ?>
