<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-08">
    <div class="container">
        <div class="row call-to-action-panel">

            <div class="col-sm-6 mb-3 mb-md-0 call-to-action-text">
                <h4 class="call-to-action-title">SUMMER JUNIOR SURF LESSONS -20% OFF </h4>
                <p class="call-to-action-sub">We offer the best surfing experience for kids and teenagers on the West Coast. </p>
            </div>

            <div class="col-sm-6 call-to-action-button">
                 <a class="btn  btn-primary" href="./events" target="_self"> EVENTS</a>
                <a class="btn  btn-light" href="./events" target="_self"> BUY NOW FOR $79</a>
            </div>

        </div>
    </div>
</div>