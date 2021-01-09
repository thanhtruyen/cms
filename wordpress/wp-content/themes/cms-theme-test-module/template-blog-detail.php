<?php
/*
Template Name: Blog Details
* Template Post Type: post
*/

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    get_template_part('template-parts/39/39', 'content');
                    get_template_part('template-parts/40/40', 'content'); ?>
                </div>

                <div class="col-md-3">
                    <?php
                    get_template_part('template-parts/23/23', 'content');
                    ?>
                </div>
            </div>
        </div>


    <?php
    endwhile; // End of the loop.
    ?>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
