<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 6, 'paged' => $paged);
query_posts($args); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <div class="type-25">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="type-25__previous">
                        <?php previous_posts_link('<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'); ?>

                    </div>
                </div>
                <div class="col-4">
                    <div class="type-25__pagination">
                        <a href="#" class="type-25__pagination__item--active">1</a>
                        <a href="#" class="type-25__pagination__item">2</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="type-25__next">
                        <?php next_posts_link('<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php else : ?>
<?php endif; ?>