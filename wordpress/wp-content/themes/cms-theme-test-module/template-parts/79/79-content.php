<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-78">
	<div class="cover-type78">
		<div class="container">
			<div class="title">
				Google Map Widget
			</div>
			<div class="content">
				Google Map Widget allows you to upload a custom style of map from Snazzy Maps. It also  allows you to upload your own map market (pin). You can choose from full-width map like on "Contact Us" page to boxed version like here. 
			</div>
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1165428927184!2d106.73874101428717!3d10.8023851616691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526116a00db67%3A0x2a83ec9f23dbe496!2zVmluY29tIE1lZ2EgTWFsbCBUaOG6o28gxJBp4buBbg!5e0!3m2!1svi!2s!4v1608474351834!5m2!1svi!2s" frameborder="0" style="border:0;width: 100%; height: 500px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
		</div>
	</div>
</div>