<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-44">
    <div class="container">
        <div id="gallery-lightbox" class="row portfolio__gallery" data-toggle="modal" data-target="#exampleModal">

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images1.jpg" alt="First slide" data-target="#carouselExample" width="540" height="304" data-slide-to="0">

                <figcaption class="portfolio__gallery-item-caption  wp-caption-text gallery-caption"> Sandy beach resort</figcaption>
            </figure>

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images2.jpg" alt="Second slide" data-target="#carouselExample" width="540" height="304" data-slide-to="1">

            </figure>

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images3.jpg" alt="Third slide" data-target="#carouselExample" width="540" height="304" data-slide-to="2">
                <figcaption class="portfolio__gallery-item-caption  wp-caption-text gallery-caption"> Sandy beach resort</figcaption>
            </figure>

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images4.jpg" alt="Fourth slide" data-target="#carouselExample" width="540" height="304" data-slide-to="3">
            </figure>

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images5.jpg" alt="Fifth slide" data-target="#carouselExample" width="540" height="304" data-slide-to="4">
                <figcaption class="portfolio__gallery-item-caption  wp-caption-text gallery-caption"> Sandy beach resort</figcaption>
            </figure>

            <figure class="portfolio__gallery-item  gallery-item">
                <img class="img-slide img-fluid"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images6.jpg" alt="Sixth slide" data-target="#carouselExample" width="540" height="304" data-slide-to="5">
            </figure>

        </div>
        
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close m-0 p-3 text-white position-absolute right-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bg-transparent">
                    <div class="modal-body p-0">
                        <div id="carouselExample" class="carousel slide carousel-fade" data-ride="false">
                            <div class="carousel-item active">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images1.jpg" alt="First slide">
                                    <figcaption class="modal-gallery-caption"> Sandy beach resort</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images2.jpg" alt="Second slide">
                                </figure>

                            </div>
                            <div class="carousel-item">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images3.jpg" alt="Third slide">
                                    <figcaption class="modal-gallery-caption"> Sandy beach resort</figcaption>
                                </figure>
                            </div>

                            <div class="carousel-item">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images4.jpg" alt="Fourth slide">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images5.jpg" alt="Fifth slide">
                                    <figcaption class="modal-gallery-caption"> Sandy beach resort</figcaption>
                                </figure>
                            </div>

                            <div class="carousel-item">
                                <figure class="modal-gallery-item">
                                    <img class="d-block w-100"  src="<?php bloginfo('stylesheet_directory'); ?>/images/44-images6.jpg" alt="Sixth slide">
                                </figure>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>