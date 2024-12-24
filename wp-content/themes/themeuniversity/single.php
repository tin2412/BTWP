<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>)"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"> <?php echo get_the_title() ?></h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
    </div>
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
    ?>
    <h1><?php the_title();  ?></h1>
    <div><?php the_content(); ?></div>
    <?php
endwhile; // End of the loop.

get_footer();
