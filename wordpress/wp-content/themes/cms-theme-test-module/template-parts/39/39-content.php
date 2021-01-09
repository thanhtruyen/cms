<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-39">

    <div class="container">
        <div class="row">
            <div class="hentry__header">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <img src="<?php echo $url ?>" alt="hinhanhprovip">
            </div>
            <div class="entry-content">
                <a class="hentry-date" href="#"><?php the_date();?></a>
                <h1 class="hentry__title"><?php the_title();?></h1>
                <p><?php the_content();?></p> 
            </div>
        </div>
    </div>

</div>
