<?php
/*
Template Name: lcc page template
*/
?>

<?php get_header(); ?>

<div class="container links-secondary page-img">

  <div class="flex-row justify-center">
    <div class="sml-10">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="page-title-h1">
            <?php
            $page_title = get_the_title();

            if ($page_title == "contact") {
                  echo "Hello!";
            }elseif($page_title == "about"){
              echo "All about us...";
            }
            else {

              echo ucwords("$page_title" );
            }

            ?>
        </h1>

        <?php the_content(); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </div>

  </div>


</div>

<?php get_footer(); ?>
