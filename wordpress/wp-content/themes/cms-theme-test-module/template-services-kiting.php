<?php
/*
Template Name: Kiting
*/

get_header();
?>

<main id="primary" class="site-main">
    <div class="type-33 type-33-all-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget_product_categories">
                        <ul class="product-categories">
                            <li class="cat-item"><a href="./services">All Services</a></li>
                            <!-- <canvas width="225" height="64" id="myCanvas" class="funky-item-draw" style="position: absolute;top: -7px;left: -7px;bottom: -7px;"></canvas> -->
                            <li class="cat-item"><a href="./services/surfing">Surfing</a></li>
                            <li class="cat-item"><a href="./services/windsurfing">WINDSURFING</a></li>
                            <li class="cat-item cat-item-active"><a href="./services/kiting">Kiting</a></li>
                            <li class="cat-item"><a href="./services/waterskiing-and-suping">WATER-SKIING AND SUPING</a></li>
                            <li class="cat-item"><a href="./services/diving-and-snorkeling">DIVING AND SNORKELING</a></li>
                            <li class="cat-item"><a href="./services/sailing-and-navigation">SAILING AND NAVIGATION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                  <h4>Chủ nhân module 59-61 chưa làm</h4>
                </div>
            </div>
        </div>
    </div>

    <?php
    //get_template_part('template-parts/30/30', 'content');
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
