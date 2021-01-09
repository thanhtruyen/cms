<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-29">
    <div class="container">
       
            <div class="our-instagram-widget">
                <div class="siteorigin-widget-tinymce">
                    <h4>OUR INSTAGRAM WIDGET</h4>
                </div>
            </div>
            <div class="pw-instagram">
                <div class="pw-instagram__error">
                    <p>400 - The access_token provided is invalid.</p>
                </div>
            </div>
        
    </div>


</div>