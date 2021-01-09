<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-75">
	<div class="cover-type75">
		<div class="title-type75" style="text-align: center">
			<h3>Special Offer</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="special_offer">
						<div class="special-offer__image">
							<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/con-rua.jpg" alt="Hình con rùa"/>
						</div>
						<div class="special-offer__content">
							<div class="special-offer__label">FEB - OCT</div>
							<div class="special-offer__title">Diving</div>
							<div class="special-offer__price">$56</div>
							<div class="special-offer__text"> A highly experienced RYA Senior Dinghy Instructor and RYA Powerboat Instructor.</div>
							<a href="#" class="btn-primary  special-offer__cta">Book Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="special_offer">
						<div class="special-offer__image">
							<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/women.jpg" alt="Hình phụ nữ"/>
						</div>
						<div class="special-offer__content">
							<div class="special-offer__label">FEB - OCT</div>
							<div class="special-offer__title">Surfing</div>
							<div class="special-offer__price">$40</div>
							<div class="special-offer__text">At each civilization points we have our tie ups to ensure delicious.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>