<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cms-theme-test-module
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/06/06', 'content' );
			get_template_part( 'template-parts/07/07', 'content' );
			get_template_part( 'template-parts/08/08', 'content' );
			get_template_part( 'template-parts/09/09', 'content' );
			get_template_part( 'template-parts/10/10', 'content' );
			get_template_part( 'template-parts/29/29', 'content' );
			get_template_part( 'template-parts/11/11', 'content' );
			get_template_part( 'template-parts/13-14/13-14', 'content' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
