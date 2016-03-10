<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wd2_framework
 */

get_header(); ?>
<div class="small-12 medium-6 large-8 columns">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>
<?php query_posts("showposts=1"); // show one latest post only ?>
 <?php while (have_posts()) : the_post(); ?>
  <div class="entry-head firstpost">
  <?php the_date(); ?><br />
      <?php the_title();?><br />
       <?php the_post_thumbnail( 'large' ); ?><br />
      <?php the_excerpt('<p>','</p>');?><br />
  </div>
 <?php endwhile; ?>
<?php query_posts("showposts=4&offset=1"); // show 4 latests posts excluding the latest ?>
<div class="small-12 medium-12 large-12 columns">
<div class="row small-up-1 medium-up-2 large-up-2">            
 <?php while (have_posts()) : the_post(); ?>
<div class="column">
    <div class="entry-head"> 
   <?php the_post_thumbnail( 'medium' ); ?><br />
   <?php the_category();?><br />
   <?php the_title();?><br />
   <?php the_excerpt('<p>','</p>');?><br />   
  </div>
</div>     
<?php endwhile; ?>
</div>
</div>    
<?php else: ?>
<!-- Error message when no post published -->
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<div class="small-12 medium-6 large-4 columns">
<?php
get_sidebar();
?>
</div>
<?php
get_footer();
