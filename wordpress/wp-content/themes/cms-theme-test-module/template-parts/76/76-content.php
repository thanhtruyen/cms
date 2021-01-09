<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-76">
	<div class="cover-type76">
		<div class="title-type76">
			<p>Buttons</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a class="panel_grid" href="#">
						<i class="fa fa-ambulance"></i>
						<span>Buy Adrenaline Now!</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a class="list_panel_grid1" href="#">
						<i class="fa fa-shopping-cart"></i>
						<span>Buy Adrenaline Now!</span>
					</a >
				</div>
				<div class="col-md-3">
					<a class="list_panel_grid2" href="#">
							Buy Adrenaline Now!
					</a >
				</div>
				<div class="col-md-3">
					<div class="list_panel_grid3">
						<span>Buy Adrenaline Now!</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="list_panel_grid4">
						<i class="fa fa-chevron-right"></i>
						<span>Buy Adrenaline Now!</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>