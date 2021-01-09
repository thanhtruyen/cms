<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-22">
    <div class="container">
        <h2 class="type-22__title">
            SHOP
        </h2>
        <div class="type-22__breadcrumb">
            <div>
                <a class="type-22__breadcrumb__item" href="#">SHAKA</a>
            </div>
            <div>
                <a class="type-22__breadcrumb__item-primary" href="#">PRODUCTS</a>
            </div>
        </div>
    </div>
</div>