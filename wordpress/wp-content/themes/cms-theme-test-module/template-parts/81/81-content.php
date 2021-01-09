<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-81">
	<div class="cover-type81">
		<div class="container" style="display: flex; justify-content: space-between;">
			<div id="pgc-1259-40-0" class="panel-grid-cell">
				<div id="panel-1259-40-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="79">
					<div class="so-widget-sow-editor so-widget-sow-editor-base">
						<h3 class="widget-title">
							<span class="widget-title__inline">EMBEDDED FACEBOOK POST</span>
						</h3>
						<div class="siteorigin-widget-tinymce textwidget">
							<p></p>
							<div id="fb-root" class=" fb_reset">
								<div class="fb_fb">
									<div>
										
									</div>
								</div>
							</div>
							<p>
								<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
							</p>
							<div class="fb-post fb_iframe_widget" data-href="https://www.facebook.com/ProteusThemes/posts/774729356013088" data-width="750" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=508&amp;href=https%3A%2F%2Fwww.facebook.com%2FProteusThemes%2Fposts%2F774729356013088&amp;locale=ar_AR&amp;sdk=joey&amp;width=750">
								<span class="post_post">
									<iframe name="f398a7a5708f38c" width="750px" height="1000px" data-testid="fb:post Facebook Social Plugin" title="fb:post Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.3/plugins/post.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df5ffe2859c7bac%26domain%3Ddemo.proteusthemes.com%26origin%3Dhttps%253A%252F%252Fdemo.proteusthemes.com%252Ff26382daba245%26relation%3Dparent.parent&amp;container_width=508&amp;href=https%3A%2F%2Fwww.facebook.com%2FProteusThemes%2Fposts%2F774729356013088&amp;locale=ar_AR&amp;sdk=joey&amp;width=750" style="border: none; visibility: visible; width: 508px; height: 558px;" class=""></iframe>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>