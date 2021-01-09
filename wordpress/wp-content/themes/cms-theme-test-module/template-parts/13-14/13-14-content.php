<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13-14">
    <div class="type-13-14__container">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="lastest-new" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/images/13.jpg');">
                        <div class="lastest-new__content">
                            <div class="lastest-new__date">
                                <span>JUNE 21, 2016</span>
                                <canvas id="myCanvas" class="funky-item-draw"></canvas>
                            </div>
                            <div class="lastest-new__title">
                                <a href="#">
                                    <h4>Sailing in bad weather</h4>
                                </a>

                            </div>
                            <div class="lastest-new__excerpt">
                                <p>
                                    About One Windsurfer Tim Bennet is the esteemed founder as well as a leading instructor at Shaka. He has over… </p>
                            </div>
                            <div class="lastest-new__read-more">
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-profile">

                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/14.1.jpg" alt="" />
                        <div class="contact-profile__container">
                            <p class="text-holder">JUNE 21, 2016</p>
                            <h4 class="card-title">CATCHING THAT FIRST WAVE</h4>

                            <div class="contact-profile__social-icons">
                                <a href="#">READ MORE</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-profile">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/14.2.jpg" alt="" />
                        <div class="contact-profile__container">
                            <p class="text-holder">JUNE 21, 2016</p>
                            <h4 class="card-title">SCUBA DIVING IN A TSUNAMI</h4>

                            <div class="contact-profile__social-icons">
                                <a href="#">READ MORE</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>