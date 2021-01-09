<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container">
        <div class="row">

            <div class="card-deck">
                <a href="./shop" class="card">
                    <img class="card-img-top" src="<?php bloginfo('stylesheet_directory');?>/images/categories/10-cate1" alt="..."/>
                    <div class="card-text">Boards</div>
                </a>

                <a href="./shop" class="card">
                <img class="card-img-top" src="<?php bloginfo('stylesheet_directory');?>/images/categories/10-cate2" alt="..."/>
                    <div class="card-text">Diving</div>
                </a>

                <a href="./shop" class="card">
                <img class="card-img-top" src="<?php bloginfo('stylesheet_directory');?>/images/categories/10-cate3" alt="..."/>
                    <div class="card-text">Bikinis</div>
                </a>

                <div class="container">
                    <div class="row btn-shopmore">
                        <p>
                            <a class="btn btn-dark" href="#">SHOP MORE</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>