<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="type-31">
                <div class="title-hour-working">
                    <h4>HOSTEL WORKING HOURS</h4>
                </div>
                <div class="time-table">
                    <div class="inner-time">
                        <dl class="week-day">
                            <dt>MONDAY</dt>
                            <dd>8:00-16:00</dd>
                        </dl>
                        <dl class="week-day">
                            <dt>TUESDAY</dt>
                            <dd>10:00-19:00</dd>
                        </dl>
                        <dl class="week-day">
                            <dt>WEDNESDAY</dt>
                            <dd>8:00-16:00</dd>
                        </dl>
                        <dl class="week-day today">
                            <dt>THURSDAY</dt>
                            <dd>7:00-15:00</dd>
                        </dl>
                        <dl class="week-day">
                            <dt>FRIDAY</dt>
                            <dd>8:00-16:00</dd>
                        </dl>
                        <dl class="week-day">
                            <dt>SATURDAY</dt>
                            <dd>8:00-16:00</dd>
                        </dl>
                        <dl class="week-day">
                            <dt>SUNDAY</dt>
                            <dd>CLOSED</dd>
                        </dl>
                    </div>
                </div>
                <div class="widget-box">
                    <div class="widget-box__file">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        <a href="#">
                            <h5>SURF SHAP CHILDREN FORM</h5>
                        </a>
                    </div>
                    <div class="widget-box__file">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <a href="#">
                            <h5>SAFE TRIP INSURANCE</h5>
                        </a>
                    </div>
                    <div class="widget-box__file">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        <a href="#">
                            <h5>ANIMATOR CARE AGREEMENT</h5>
                        </a>
                    </div>
                </div>
                <div class="btn-book-trip">
                    <p><a href="#">BOOK TRIP NOW</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="type-32">
                <div class="panel-gird">
                    <div class="contact-field">
                        <h4 class="apply_contact">WRITE US A MESSAGE OR APPLY HERE</h4>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="firstname" placeholder="FIRST NAME">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputPassword4" placeholder="LAST NAME">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <input type="email" class="form-control" id="inputEmail1" placeholder="EMAIL">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputsubject" placeholder="SUBJECT">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="FormControlTextarea1" rows="8" placeholder="MESSENGER"></textarea>
                        </div>
                        <div class="panel-field-bottom">

                            <button type="submit" class="btn btn-primary btn-send-messenger">SEND MESSENGER</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>