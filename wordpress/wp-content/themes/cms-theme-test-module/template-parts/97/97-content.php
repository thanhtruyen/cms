<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-97">
        <div class="type-97__container">
            <div class="container">
                <div class="textwidget">
                    <h3 style="text-align: center">Brochure Box</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a class="brochure-box" href="#" target="_self"> <span class="brochure-box__icon"><i class="fa  fa-file-word-o"></i></span>
                            <h5 class="brochure-box__text">Download Our Brochure</h5>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="brochure-box" href="#" target="_self"> <span class="brochure-box__icon"><i class="fa  fa-file-word-o"></i></span>
                            <h5 class="brochure-box__text">Download Our Brochure</h5>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="brochure-box" href="#" target="_self"> <span class="brochure-box__icon"><i class="fa  fa-file-word-o"></i></span>
                            <h5 class="brochure-box__text">Download Our Brochure</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>