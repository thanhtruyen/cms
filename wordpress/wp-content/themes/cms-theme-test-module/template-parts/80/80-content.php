<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-80">
	<div class="cover-type80">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="panel-1259-39-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="77">
						<div class="so-widget-sow-editor so-widget-sow-editor-base">
							<h3 class="widget-title">
								<span class="widget-title__inline">EMBEDDED VIDEO</span>
							</h3>
							<div class="siteorigin-widget-tinymce textwidget">
								<p></p>
								<div class="embed-responsive  embed-responsive-16by9">
									<iframe width="1140" height="855" src="https://www.youtube.com/embed/pcWE1qN49ls?start=4&amp;feature=oembed" frameborder="0" allowfullscreen=""></iframe>
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mr_top_top">
					<div id="panel-1259-39-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="78">
						<div class="panel-widget-style panel-widget-style-for-1259-39-1-0">
							<div class="so-widget-sow-editor so-widget-sow-editor-base">
								<h3 class="widget-title">
									<span class="widget-title__inline"></span>
								</h3>
								<div class="siteorigin-widget-tinymce textwidget">
									<p></p>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="1140" height="855" src="https://www.youtube.com/embed/v8frz5Pw8oU?feature=oembed" frameborder="0" allowfullscreen=""></iframe>
									</div>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>