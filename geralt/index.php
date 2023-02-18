<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php get_header(); ?>

<main class="container">
  <div class="row g-5">
	  
    <div class="col-md-8">
		<?php
			if (have_posts()) : while (have_posts()) :the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
		<nav class="blog-pagination" aria-label="Pagination">
			<a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
			<a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
		  </nav>
	</div>


    <?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>
