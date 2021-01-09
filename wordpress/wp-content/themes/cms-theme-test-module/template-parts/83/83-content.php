<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-83">
    <div class="type-83__title">
        FULL-WIDTH COLUMNS WITH BACKGROUND
    </div>
    <div class="row">
        <div class="type-83__item col-xl-4 col-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus,ipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus, culpa.</div>
        <div class="type-83__item col-xl-4 col-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus,ipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus, culpa.</div>
        <div class="type-83__item col-xl-4 col-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus,ipisicing elit. Reprehenderit exercitationem dolorum recusandae, perferendis omnis ratione ad quibusdam minima repellendus doloribus nihil assumenda facere, placeat doloremque accusantium aspernatur provident! Temporibus, culpa.</div>
    </div>
</div>