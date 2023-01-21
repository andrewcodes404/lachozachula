<?php get_header(); ?>

<div class="container">
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );


if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");

        echo '<div class="flex-row">';

        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>

                   <div class="sml-4">

                      <li>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </li>

                      <li>
                        <?php the_post_thumbnail('thumbnail');?>
                      </li>

                  </div>


                 <?php
                        }
                    }else{
                ?>
                  <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                  <div class="alert alert-info">
                  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                  </div>
                <?php } ?>

  </div><!-- .flex-grid -->
</div><!-- .container -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
