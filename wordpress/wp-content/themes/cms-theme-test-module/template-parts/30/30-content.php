<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-30">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/30.jpg" alt="">
                    <div class="contact-profile__container">
                        <p class="text-holder">B&B HOSTEL</p>
                        <h4 class="card-title">THE BEST HAWAIIAN HOSTEL</h4>
                        <div class="contact-profile__skills">
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-map-marker"></i></div>
                                <p class="contact-profile__text"> Hawaiian Hostel, 227 Savion Street, 110056 Fuertaventura</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-phone"></i></div>
                                <p class="contact-profile__text">+386 1234 569</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-envelope-o"></i></div>
                                <p class="contact-profile__text">info@hawaiianhostel.com</p>
                            </div>
                        </div>
                        <div class="contact-profile__social-icons">
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
            <div class="contact-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/30.jpg" alt="">
                    <div class="contact-profile__container">
                        <p class="text-holder">B&B HOSTEL</p>
                        <h4 class="card-title">THE BEST HAWAIIAN HOSTEL</h4>
                        <div class="contact-profile__skills">
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-map-marker"></i></div>
                                <p class="contact-profile__text"> Hawaiian Hostel, 227 Savion Street, 110056 Fuertaventura</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-phone"></i></div>
                                <p class="contact-profile__text">+386 1234 569</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-envelope-o"></i></div>
                                <p class="contact-profile__text">info@hawaiianhostel.com</p>
                            </div>
                        </div>
                        <div class="contact-profile__social-icons">
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
            <div class="contact-profile">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/30.jpg" alt="">
                    <div class="contact-profile__container">
                        <p class="text-holder">B&B HOSTEL</p>
                        <h4 class="card-title">THE BEST HAWAIIAN HOSTEL</h4>
                        <div class="contact-profile__skills">
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-map-marker"></i></div>
                                <p class="contact-profile__text"> Hawaiian Hostel, 227 Savion Street, 110056 Fuertaventura</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-phone"></i></div>
                                <p class="contact-profile__text">+386 1234 569</p>
                            </div>
                            <div class="contact-profile__skill">
                                <div class="contact-profile__icon"> <i class="fa  fa-envelope-o"></i></div>
                                <p class="contact-profile__text">info@hawaiianhostel.com</p>
                            </div>
                        </div>
                        <div class="contact-profile__social-icons">
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                            <a class="contact-profile__social-icon" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>