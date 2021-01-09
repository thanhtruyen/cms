<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11">
    <div class="container">
        <div class="row">

            <div class="widget-testimonials">
                <div class="testimonial__container">
                    <h3 class="widget-title"><span class="widget-title__inline">Testimonials</span></h3>
                    <div id="carousel-testimonials-widget-10-0-0" class="carousel  slide  testimonial" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xs-12  col-sm-12">
                                        <blockquote>
                                            <p class="testimonial__quote"> I can't believe how much I had fun on this trip. I learned new techniques that I didn't even think were possible. I recommend anybody and everybody to come here and hit the waves with these guys. They are unbelievably friendly too!</p>
                                        </blockquote>
                                        <div class="testimonial__author-container"> <a class="testimonial__carousel  testimonial__carousel--left" href="#carousel-testimonials-widget-10-0-0" data-slide="prev"><i class="fa  fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only" role="button">Next</span></a>
                                            <div class="testimonial__author"> <cite class="testimonial__author-name"> Grace Harris, </cite>
                                                <div class="testimonial__author-description"> Sydney surf girl</div>
                                            </div> <a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-10-0-0" data-slide="next"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only" role="button">Previous</span></a>
                                            <div class="testimonial__rating"> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xs-12  col-sm-12">
                                        <blockquote>
                                            <p class="testimonial__quote"> I wasn't a very confident surfer before I came to stay here. Now that I have spent time learning with these guys, I feel ready to take on any challenge. They were so patient and knowledgable. I could not have had a better time anywhere in the world.</p>
                                        </blockquote>
                                        <div class="testimonial__author-container"> <a class="testimonial__carousel  testimonial__carousel--left" href="#carousel-testimonials-widget-10-0-0" data-slide="prev"><i class="fa  fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only" role="button">Next</span></a>
                                            <div class="testimonial__author"> <cite class="testimonial__author-name"> Joshua Lee, </cite>
                                                <div class="testimonial__author-description"> Occasional surfer</div>
                                            </div> <a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-10-0-0" data-slide="next"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only" role="button">Previous</span></a>
                                            <div class="testimonial__rating"> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xs-12  col-sm-12">
                                        <blockquote>
                                            <p class="testimonial__quote"> Amazing fun water experience, friendly and knowledgable staff. Lovely accomodation and it was easy to find the main building. Nightlife on the west coast near the see is amazing and wild. Will come again next year with friends.</p>
                                        </blockquote>
                                        <div class="testimonial__author-container"> <a class="testimonial__carousel  testimonial__carousel--left" href="#carousel-testimonials-widget-10-0-0" data-slide="prev"><i class="fa  fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only" role="button">Next</span></a>
                                            <div class="testimonial__author"> <cite class="testimonial__author-name"> Jacob Robinson, </cite>
                                                <div class="testimonial__author-description"> Tour guide</div>
                                            </div> <a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-10-0-0" data-slide="next"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only" role="button">Previous</span></a>
                                            <div class="testimonial__rating"> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xs-12  col-sm-12">
                                        <blockquote>
                                            <p class="testimonial__quote"> Came as customers, left as friend. It was a blast to be in resort for one week. Perfect weather, perfect waves, lots of activities. I need to come again to improve my diving and climbing skills..................</p>
                                        </blockquote>
                                        <div class="testimonial__author-container"> <a class="testimonial__carousel  testimonial__carousel--left" href="#carousel-testimonials-widget-10-0-0" data-slide="prev"><i class="fa  fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only" role="button">Next</span></a>
                                            <div class="testimonial__author"> <cite class="testimonial__author-name"> Ella Thomas, </cite>
                                                <div class="testimonial__author-description"> Local</div>
                                            </div> <a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-10-0-0" data-slide="next"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only" role="button">Previous</span></a>
                                            <div class="testimonial__rating"> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i> <i class="fa  fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>