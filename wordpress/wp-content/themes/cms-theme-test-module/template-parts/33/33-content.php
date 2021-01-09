<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-33">
    <div class="container">
        <div class="row">
            <div class="widget_product_categories">
                <h4 class="sidebar_headings">PRODUCT CATEGORIES</h4>
                <ul class="product-categories">
                    <li class="cat-item"><a href="#">BEACH ACCESORIES 
                  </a></li>
                  <!-- <canvas width="225" height="64" id="myCanvas" class="funky-item-draw" style="position: absolute;top: -7px;left: -7px;bottom: -7px;"></canvas> -->
                    <li class="cat-item"><a href="#">DIVING</a></li>
                    <li class="cat-item"><a href="#">TRIPS</a></li>
                    <li class="cat-item"><a href="#">UNCATEGORIZED</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>