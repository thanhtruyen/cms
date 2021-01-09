<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-28">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="featured-widget">
                    <div class="so-widget-sow-editor">
                        <div class="siteorigin-widget">
                            <h5><i class="fa fa-home fa-2x" aria-hidden="true"></i></h5>
                            <h6>OUR SHAKA HOSTEL</h6>
                            <div class="experience">To make your stay a seamless experience</div>
                            <div>&nbsp;</div>

                            <p class="book-here"><span style="line-height: 1.5;"><a href="#">BOOK HERE</a></span></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-widget">
                    <div class="so-widget-sow-editor">
                        <div class="siteorigin-widget">
                            <h5><i class="fa fa-home fa-2x" aria-hidden="true"></i></h5>
                            <h6>OUR SHAKA HOSTEL</h6>
                            <div class="experience">To make your stay a seamless experience</div>
                            <div>&nbsp;</div>

                            <p class="book-here"><span style="line-height: 1.5;"><a href="#">BOOK HERE</a></span></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-widget">
                    <div class="so-widget-sow-editor">
                        <div class="siteorigin-widget">
                            <h5><i class="fa fa-home fa-2x" aria-hidden="true"></i></h5>
                            <h6>OUR SHAKA HOSTEL</h6>
                            <div class="experience">To make your stay a seamless experience</div>
                            <div>&nbsp;</div>

                            <p class="book-here"><span style="line-height: 1.5;"><a href="#">BOOK HERE</a></span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>