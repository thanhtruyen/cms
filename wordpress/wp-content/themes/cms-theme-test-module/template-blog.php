<?php
/*
Template Name: Blog
*/

get_header();
?>
<main id="primary" class="site-main">

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <?php get_template_part('template-parts/24/24', 'content'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php
                get_template_part('template-parts/23/23', 'content');

                ?>
               
            </div>
        </div>
        <div>
            <?php
            get_template_part('template-parts/25/25', 'content');

            ?>
        </div>



    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
