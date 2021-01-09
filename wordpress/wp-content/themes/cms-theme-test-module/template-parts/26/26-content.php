<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-26">
    <div class="container">
    <h4 class="title-our-trainers">OUR TRAINERS AND TEACHERS</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="person-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/26.jpg" alt="">
                    <div class="person-profile__container">
                        <p class="text-holder">SURF INSTRUCTOR</p>
                        <h4 class="card-title">SIENNA WILLIAMS</h4>
                        <p class="card-description">Sienna teaches lessons for both beginners and at an advanced level. For beginners we have an introductory course as well as a full course. The beginners’ introductory course has one hour of coaching and an hour of practice in the morning with an extremely nominal rental for equipments. The entire duration of the course is 3 days. She is a patient and very friendly instructor who will teach you quickly.</p>
                        <div class="person-profile__skills">
                            <div class="person-profile__skill"> SWEETNESS
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="person-profile__skill"> SWIMMING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                            <div class="person-profile__skill"> DIVING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                        </div>
                        <div class="person-profile__tags">
                            <div class="person-profile__tag"> ENGLISH</div>
                            <div class="person-profile__tag"> GERMAN</div>
                            <div class="person-profile__tag"> SPANISH</div>
                        </div>
                        <div class="person-profile__social-icons"> SOCIAL:
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                    </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="person-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/26.jpg" alt="">
                    <div class="person-profile__container">
                        <p class="text-holder">SURF INSTRUCTOR</p>
                        <h4 class="card-title">SIENNA WILLIAMS</h4>
                        <p class="card-description">Sienna teaches lessons for both beginners and at an advanced level. For beginners we have an introductory course as well as a full course. The beginners’ introductory course has one hour of coaching and an hour of practice in the morning with an extremely nominal rental for equipments. The entire duration of the course is 3 days. She is a patient and very friendly instructor who will teach you quickly.</p>
                        <div class="person-profile__skills">
                            <div class="person-profile__skill"> SWEETNESS
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="person-profile__skill"> SWIMMING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                            <div class="person-profile__skill"> DIVING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                        </div>
                        <div class="person-profile__tags">
                            <div class="person-profile__tag"> ENGLISH</div>
                            <div class="person-profile__tag"> GERMAN</div>
                            <div class="person-profile__tag"> SPANISH</div>
                        </div>
                        <div class="person-profile__social-icons"> SOCIAL:
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                    </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="person-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/26.jpg" alt="">
                    <div class="person-profile__container">
                        <p class="text-holder">SURF INSTRUCTOR</p>
                        <h4 class="card-title">SIENNA WILLIAMS</h4>
                        <p class="card-description">Sienna teaches lessons for both beginners and at an advanced level. For beginners we have an introductory course as well as a full course. The beginners’ introductory course has one hour of coaching and an hour of practice in the morning with an extremely nominal rental for equipments. The entire duration of the course is 3 days. She is a patient and very friendly instructor who will teach you quickly.</p>
                        <div class="person-profile__skills">
                            <div class="person-profile__skill"> SWEETNESS
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="person-profile__skill"> SWIMMING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                            <div class="person-profile__skill"> DIVING
                                <span class="person-profile__skill-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            </div>
                        </div>
                        <div class="person-profile__tags">
                            <div class="person-profile__tag"> ENGLISH</div>
                            <div class="person-profile__tag"> GERMAN</div>
                            <div class="person-profile__tag"> SPANISH</div>
                        </div>
                        <div class="person-profile__social-icons"> SOCIAL:
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                        <a class="person-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>

</div>