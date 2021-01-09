<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-07">
    <div class="container">
        <div class="row">
            <div class="title-about-us">
                <a class="btn  btn-dark  js-funky-box  btn-funky  is-btn-title" href="#">
                    ABOUT US
                </a>
            </div>

            <div class="col-md-12">
                <div class="title-widget">
                    <h2>We’re a bold bunch of riders, explorers & <br>hard-core thrill seekers that bring it.</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content__text-widget">
                    <p>Our lessons are available for both beginner and advanced levels. For beginners we have an introductory course as well as a full course.</p>
                    <p>The beginners’ introductory course has one hour of coaching and an hour of practice in the morning with an extremely nominal fee for equipment. The entire duration of the course is 3 days. For the full beginners’ course, the duration is 6 days with an hour of coaching and 2 hours of practice daily.</p>
                    <hr class="hr--dotted">
                    <h6 class="textwidget-bottom">DO YOU AND YOUR FAMILY NEED A VACATION?</h6>
                    <h6 class="textwidget-bottom"><a href="#"> VIEW OUR SERVICES</a></h6>
                    <h6 class="textwidget-bottom"><a href="#">EVENTS AND PACKAGES</a> </h6>

                </div>
            </div>
            <div class="col-md-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/7.1.jpg" alt="" />
            </div>
            <div class="col-md-4">
                <div class="column">
                    <div class="images-editor">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/7.2.jpg" alt="" />
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/7.3.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>