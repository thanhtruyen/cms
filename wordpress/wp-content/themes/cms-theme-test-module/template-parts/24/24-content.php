<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<?php
$lastposts = get_posts(array(
    'posts_per_page' => 6
));
if ($lastposts) {
    foreach ($lastposts as $post) :
        setup_postdata($post); ?>
        <div class="type-24 col-sm-6">
            <div class="type-24__image-container">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <img class="img-fluid type-24__image" src="<?php echo $url ?>" alt="image">
            </div>
            <div class="px-4">
                <div class="type-24__date">
                    <?php echo get_the_date(); ?>
                </div>
                <div class="type-24__author">
                    <i class="fa fa-user" aria-hidden="true"></i> BY <?php the_author(); ?>
                </div>
                <h3 class="type-24__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="type-24__description">
                    <?php the_excerpt(); ?>
                </div>
                <div class="type-24__read-more">
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div>
            </div>
        </div>
<?php endforeach;
    wp_reset_postdata();
    

} ?>