<?php get_header(); ?>
<small class="phpinfo">####this is the home.php</small>

<div class="container">
<h1>The blog</h1>
<h2>keep up to date with what's happening in El Parédon</h2>
<br>
  <div class="flex-row justify-between">
    <div class=" med-7">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="mb3">
          <a href="<?php echo get_permalink();  ?>">

          <h2 class=""><?php the_title(); ?></h2>

          <div class="flex-row">
            <div class="sml-6  pr1">
              <?php the_post_thumbnail('full') ?>
            </div>

            <div class="sml-6">
              <?php the_excerpt(); ?>
            </div>
        </div>

          </a>
        </div>

      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>



      <!-- //////Pagination////////////// -->


      <?php get_template_part('template-parts/pagination') ?>

    </div>



    <div class=" med-4">
       <?php get_sidebar(); ?>
    </div>


  </div>
</div>



</div>



<?php get_footer(); ?>
