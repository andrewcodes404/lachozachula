<?php
/*
Template Name: archive
*/
get_header(); ?>

<div class="container">
	<div class="flex-row">

    <div class="sml-12 lrg-7">
    		<?php the_post(); ?>
    		<h1 class="entry-title"><?php the_title(); ?></h1>

    		<?php get_search_form(); ?>

    		<h2>Archives by Month:</h2>
    		<ul>
    			<?php wp_get_archives('type=monthly'); ?>
    		</ul>

    		<h2>Archives by Subject:</h2>
    		<ul>
    			 <?php wp_list_categories(); ?>
    		</ul>
	</div>



  <div class="sidebar any-name lrg-3">
    <?php if ( ! dynamic_sidebar( 'any-name' ) ); ?>
  </div>
  </div><!-- .flex-row -->
</div><!-- #container -->
<?php get_footer(); ?>
