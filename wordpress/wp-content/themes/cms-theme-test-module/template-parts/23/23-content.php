<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
    <input class="type-23__input" type="text" placeholder="Search">
    <button class="type-23__search btn" type="button"></button>
<h4>CATEGORIES</h4>
<ul id="slider-id" class="slider-class">
   <li>
   <?php wp_list_categories( array(
       'title_li' => '',
        'orderby'    => 'name',
        'exclude'    => array( 5 )
    ) ); ?> 
   </li> 
</ul>



    <h4>RECENT POSTS</h4>
    <ul id="slider-id" class="slider-class">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 4, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
        foreach ($recent_posts as $post) : ?>
            <li>
                <a href="<?php echo get_permalink($post['ID']) ?>">
                    <p class="slider-caption-class"><?php echo $post['post_title'] ?></p>
                </a>
            </li>
        <?php endforeach;
        wp_reset_query(); ?>
    </ul>
</div>