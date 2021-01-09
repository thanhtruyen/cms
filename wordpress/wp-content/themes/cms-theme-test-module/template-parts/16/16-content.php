<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
    <div class="container">

        <nav class="navbar navbar-expand-sm navbar-dark">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-twitter " aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto social-icon__right">
                <li class="nav-item">
                    <a class="nav-link icon-box" href="#"> <i class="fa fa-envelope" aria-hidden="true"></i>INFO&#64;SURFING.COM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-headphones" aria-hidden="true"></i>031 567 653</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="./images/en.png" alt="english">ENGLISH
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><img src="./images/de.png" alt=""> Deutsch</a>
                        <a class="dropdown-item" href="#">WPML support</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>


</div>