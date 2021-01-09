<?php
/*
Template Name: Contact
*/

get_header();
?>

<main id="primary" class="site-main">
    
    <?php
    get_template_part('template-parts/30/30', 'content');
    get_template_part('template-parts/31-32/31&32', 'content');

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
