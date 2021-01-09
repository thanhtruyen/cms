<?php
/*
Template Name: About Us
*/

get_header();
?>

<main id="primary" class="site-main">
    
    <?php
    get_template_part('template-parts/26/26', 'content');
    get_template_part('template-parts/27/27', 'content');
    get_template_part('template-parts/28/28', 'content');
    get_template_part('template-parts/29/29', 'content');

    while (have_posts()) :
        the_post();


        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
