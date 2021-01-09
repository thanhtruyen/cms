<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
    	<div class="cover-type6">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="panel-grid-cell">
                        <div class="cover_content">
                            <a class="page-box__picture" href="#">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/girl.jpg" width="352" height="198" class="wp-post-image" alt="Surfing">
                            </a>
                            <div class="page-box__content">
                                <h4 class="page-box__title">
                                    <a href="#">Surfing</a>
                                </h4>
                                <p class="page-box__text">Enjoy the thrill and pleasure of surfing under different winds and with large varieties of surfboards. With a large and uninterrupted coastline …</p>
                                <a href="#" class="page-box__more-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="panel-grid-cell">
                        <div class="cover_content">
                            <a href="#" class="fvp-dynamic">
                                <div class="icon_play"><i class="fa fa-play-circle-o"></i></div>
                                <img width="352" height="198" src="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/47.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="opacity: 0.75;">
                            </a>
                            <div class="page-box__content mr-top">
                                <h4 class="page-box__title">
                                    <a href="#">WINDSURFING</a>
                                </h4>
                                <p class="page-box__text">Our beach side is not only terrific for all types of water sports but we offer other exciting adventure sports as well. Take your family out …</p>
                                <a href="#" class="page-box__more-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="cover-type4">
                        <div class="weather">
                            <div class="weather__location">KARPATHOS, GREECE</div>
                            <div class="weather__current">
                                <img class="weather__current-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" alt="cloud" width="100" height="100"/>
                                <div class="weather__current-temperature">
                                    <p class="weather__current-temp">23<sup>°C</sup></p>
                                    <p class="weather__current-description">Rain</p>
                                </div>
                                <div class="weather__current-wind">
                                    <i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 40px;"></i>
                                    <div class="weather__current-windy-sl">
                                        <span class="weather__current-wind-speed">12</span>
                                        <span class="weather__current-wind-speed-unit">kts</span>
                                    </div>
                                </div>
                            </div>
                            <div class="weather__forecast">
                                <div class="weather__fore">
                                    <span class="weather__forecast-day forecast">Sun</span>
                                    <div class="weather__forecast-temperature forecast">
                                        <i class="fa fa-cloud" style="font-size: 16px; margin-right: 5px;"></i>
                                        <span style="font-size: 15px">23°C</span>
                                    </div>
                                    <div class="weather__forecast-wind forecast">
                                        <i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
                                        <span>12 kts</span>
                                    </div>
                                </div>
                                <div class="weather__fore">
                                    <span class="weather__forecast-day forecast">Mon</span>
                                    <div class="weather__forecast-temperature forecast">
                                        <img class="weather__current-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" alt="cloud" width="25" height="25" />
                                        <span style="font-size: 15px">23°C</span>
                                    </div>
                                    <div class="weather__forecast-wind forecast">
                                        <i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
                                        <span>7 kts</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="weather__custom-link">
                                More details
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>