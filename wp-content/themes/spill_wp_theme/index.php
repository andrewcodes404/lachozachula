<?php get_header(); ?>
<small class="phpinfo">--//this is the index.php//--</small>

<div class="container">

  <div class="flex-row justify-between">

    <div class="flex-col sm-12 med-8 lrg-7 p1 ">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1 class="front-page-title"><?php the_title(); ?></h1>

          <div class="flex-row mb1">
            <div class="flex-col sm-5">
              <div class="front-page-img-cont pr1">
                <?php the_post_thumbnail('full') ?>
              </div>
            </div>

            <div class="flex-col sm-7">
              <div class="front-page-excerpt">
                <?php the_excerpt(); ?>
              </div>
            </div>
        </div>

      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>


    <div class="flex-col p1 sm-12 med-4 lrg-4">
       <?php get_sidebar(); ?>
    </div>


  </div>
</div>



</div>



<?php get_footer(); ?>
