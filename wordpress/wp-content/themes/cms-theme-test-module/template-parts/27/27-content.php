<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-27">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="featured-widget">
                    <div class="widget-text">
                        <h4>ACCOMODATION AND SCHOOL</h4>
                        <p>Windsurfing as an adventurous sport and recreational pastime first peaked in 1980s only to fall. However, with all sorts of advancement, the sport has suddenly caught the fancy of all those looking for unique adventure and fun. If you want to revel in the thrill and the tornado of gliding over waves at over 20-30 miles per hour, look no further than Shaka.</p>
                        <br>
                    </div>
                    <div class="gallery">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/27.1.jpg" alt="">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/27.2.jpg"alt="">
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="google-map-canvas">
                    
                </div>

                <div class="widget-icon-box">
                    <div class="icon-box">
                        <i class="fa  fa-thumbs-up"></i>
                        <h4 class="icon-box__title">BEST VACATION AND LEARNING EXPERIENCE</h4>
                        <span class="icon-box__subtitle">To make your stay as pleasurable as possible, we have a range of rooms right from the budget ones to the luxury five star beach huts.</span>
                    </div>

                    <div class="widget-icon-map">
                        <div class="icon-box">
                            <i class="fa  fa-map-signs"></i>
                            <h4 class="icon-box__title">COMFORT STAY AND FUN TRIPS</h4>
                            <span class="icon-box__subtitle">We also have an arrangement with a number of hotels in the vicinity to ensure that you have the most amazing deal.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>