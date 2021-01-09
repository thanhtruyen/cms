<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-09">
    <div class="container">
        <div class="row">
            <div class="title-shop-a-surf">
                <a class="btn  btn-dark  js-funky-box  btn-funky  is-btn-title" href="./shop">
                    SHOP A SURF
                </a>
            </div>

            <div class="card-deck">
                <?php echo do_shortcode("[products limit= '4' columns='4' category='events' cat_operator='NOT IN']");?>
                
            </div>

        </div>
    </div>
</div>