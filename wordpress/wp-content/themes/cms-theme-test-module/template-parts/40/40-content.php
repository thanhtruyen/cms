<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-40">
    <div class="container">
        <div class="row">
            <div class="hentry">
                <div class="hentry__meta meta clearfix">
                    <span class="meta__item author">
                        <i class="fa fa-user"></i>
                        <?php the_author(); ?>
                    </span>

                    <span class="meta__item categories">
                        <?php $categories = get_the_category();
                        foreach ($categories as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                        } ?>
                    </span>

                    <span class="meta__item tags">
                        <?php $post_tags = get_the_tags();
                        if ($post_tags) {
                            foreach ($post_tags as $tag) {
                                echo  '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                            }
                        } ?>
                    </span>


                </div>
            </div>

        </div>
    </div>
</div>