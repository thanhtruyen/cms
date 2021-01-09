<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-74">
	<div class="cover-type74">
		<div class="title-type74">
			<h3>Pricing Lists</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="panel-grid-cell">
						<div>
							<div class="featured-widget">
								<div class="pricing-list">
									<div class="pricing-list__item">
										<span class="pricing-list__badge">Top Offer</span>
										<span class="pricing-list__title">Proteusthemes</span>
										<span class="pricing-list__line"></span>
										<span class="pricing-list__price">$80/month</span>
										<p class="pricing-list__description">Our lessons are available for both beginner and advanced levels. For beginners we have an ntrodutory course as well as a full course</p>
									</div>
									<div class="pricing-list__item">
										<span class="pricing-list__title1">Camping</span>
										<span class="pricing-list__line"></span> <span class="pricing-list__price">Included</span>
										<p class="pricing-list__description">Most of the hotels and condominiums are just 5 to 10 minute walking distance from our center with a few situated right inside out center</p>
									</div>
									<div class="pricing-list__item">
										<span class="pricing-list__title1">Cabin Rent</span>
										<span class="pricing-list__line"></span>
										<span class="pricing-list__price">$100/night</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-grid-cell">
						<div>
							<div class="featured-widget">
								<div class="pricing-list__item">
									<span class="pricing-list__title1">Rafting</span>
									<span class="pricing-list__line"></span> <span class="pricing-list__price">$150/group</span>
								</div>
								<div class="pricing-list__item">
									<span class="pricing-list__title1">Waterfall jumping</span>
									<span class="pricing-list__line"></span>
									<span class="pricing-list__price">Free</span>
								</div>
								<div class="pricing-list__item">
									<span class="pricing-list__title1">Kayaking</span>
									<span class="pricing-list__line"></span> 
									<span class="pricing-list__price">$35</span>
								</div>
								<div class="pricing-list__item">
									<span class="pricing-list__title1">Fishing</span>
									<span class="pricing-list__line"></span>
									<span class="pricing-list__price">$20/Permit</span>
								</div>
								<div class="pricing-list__item">
									<span class="pricing-list__title1">Diving</span>
									<span class="pricing-list__line"></span>
									<span class="pricing-list__price">$30</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>