<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-68">
    <div class="container">
        <div class="cover-type68">
            <div class="row">
                <div class="col-md-8">
                    <div class="title">
                        SAILING LICENCE
                    </div>
                    <div class="content">
                        The sand paradise of Dominic Republic is terrific for all to experience a perfect beach holiday and bask in the glory of the sun by the sea. You can turn it adventurous as well with our range of water sports as well as other adventures like hiking. With fantastic weather and some awesome hiking trails, you can be confident of experiencing the adventure of a lifetime.
                    </div>
                    <hr class="hr--dotted">
                    <div class="sub_title">
                        HOW MANY HOURS OF TRAINING DO I GET?
                    </div>
                    <p class="content">
                        We Practice for many hours on sailing boats and nautical knowledge.
                    </p>
                    <div class="read_more">
                        <a href="#">READ MORE</a>
                    </div>
                    <hr class="hr--dotted">
                    <div class="sub_title">
                        CAN I RENT A BOAT FOR THE LESSONS?
                    </div>
                    <p class="content">
                        You can rent a boat by the hour or day depending on how adventurous you feel.
                    </p>
                    <div class="read_more">
                        <a href="#">READ MORE</a>
                    </div>
                    <hr class="hr--dotted">
                    <div class="sailing_form">
                        <div class="sailing_appli">
                            <i class="fa fa-file-o"></i>
                            Sailing application form
                        </div>
                        <div class="sailing_appli">
                            <i class="fa fa-file-pdf-o"></i>
                            Nautic regulation and ocean care
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img">
                        <a href="#">
                            <img loading="lazy" class="alignnone wp-image-61 size-full" src="<?php bloginfo('stylesheet_directory'); ?>/images/37.jpg" width="396" height="223" alt="37" style="cursor: zoom-in;" />
                        </a>
                    </div>
                    <div class="img">
                        <a href="#">
                            <img loading="lazy" class="alignnone wp-image-61 size-full" src="<?php bloginfo('stylesheet_directory'); ?>/images/25.jpg" width="396" height="223" alt="25" style="cursor: zoom-in;" />
                        </a>
                    </div>
                    <div class="img">
                        <a href="#">
                            <img loading="lazy" class="alignnone wp-image-61 size-full" src="<?php bloginfo('stylesheet_directory'); ?>/images/17.jpg" width="396" height="223" alt="17" style="cursor: zoom-in;" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>