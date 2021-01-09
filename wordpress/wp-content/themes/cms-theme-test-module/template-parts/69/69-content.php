<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
	<div class="row">
		<div class="textwidget">
			<p style="text-align: center">
				Hey there. You probably&nbsp;already search few pages of our Adrenaline&nbsp;WordPress theme before you came here. You could see many different elements or widgets nicely spread through the demo site but we also want to show you all of them in one place. With the list bellow, you can make unlimited different layouts where the limit is only your imagination.
			</p>
		</div>

		<div class="col-md-8">
			<div class="type-69">
				<div class="cover-type69">
					<div class="weather">
						<div class="weather__location">KARPATHOS, GREECE</div>
						<div class="weather__current">
							<img class="weather__current-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" alt="cloud" width="100" height="100" />
							<div class="weather__current-temperature">
								<p class="weather__current-temp">17<sup>°C</sup></p>
								<p class="weather__current-description">Cloudy</p>
							</div>
							<div class="weather__current-wind">
								<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 40px;"></i>
								<div class="weather__current-windy-sl">
									<span class="weather__current-wind-speed">6</span>
									<span class="weather__current-wind-speed-unit">m/s</span>
								</div>
							</div>
						</div>
						<div class="weather__forecast">
							<div class="weather__fore">
								<span class="weather__forecast-day forecast">Fri</span>
								<div class="weather__forecast-temperature forecast">
									<i class="fa fa-cloud" style="font-size: 16px"></i>
									<span style="font-size: 15px">16°C</span>
								</div>
								<div class="weather__forecast-wind forecast">
									<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
									<span>7 m/s</span>
								</div>
							</div>
							<div class="weather__fore">
								<span class="weather__forecast-day forecast">Sat</span>
								<div class="weather__forecast-temperature forecast">
									<i class="fa fa-cloud" style="font-size: 16px"></i>
									<span style="font-size: 15px">17°C</span>
								</div>
								<div class="weather__forecast-wind forecast">
									<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
									<span>6 m/s</span>
								</div>
							</div>
							<div class="weather__fore">
								<span class="weather__forecast-day forecast">Sun</span>
								<div class="weather__forecast-temperature forecast">
									<i class="fa fa-sun-o" style="font-size: 16px"></i>
									<span style="font-size: 15px">16°C</span>
								</div>
								<div class="weather__forecast-wind forecast">
									<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
									<span>3 m/s</span>
								</div>
							</div>
							<div class="weather__fore">
								<span class="weather__forecast-day forecast">Mon</span>
								<div class="weather__forecast-temperature forecast">
									<img class="weather__current-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" alt="cloud" width="25" height="25" />
									<span style="font-size: 15px">16°C</span>
								</div>
								<div class="weather__forecast-wind forecast">
									<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
									<span>5 m/s</span>
								</div>
							</div>
						</div>
						<a href="#" class="weather__custom-link">
							More details
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>


		</div>

		<div class="col-md-4">
			<div class="type-69">
				<div class="cover-type69">
					<div class="weather">
						<div class="weather__location">KARPATHOS, GREECE</div>
						<div class="weather__current">
							<img class="weather__current-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/cloud.png" alt="cloud" width="100" height="100" />
							<div class="weather__current-temperature">
								<p class="weather__current-temp">17<sup>°C</sup></p>
								<p class="weather__current-description">Cloudy</p>
							</div>
							<div class="weather__current-wind">
								<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 40px;"></i>
								<div class="weather__current-windy-sl">
									<span class="weather__current-wind-speed">6</span>
									<span class="weather__current-wind-speed-unit">m/s</span>
								</div>
							</div>
						</div>
						<div class="weather__forecast">
							<div class="weather__fore">
								<span class="weather__forecast-day forecast">Fri</span>
								<div class="weather__forecast-temperature forecast">
									<i class="fa fa-cloud" style="font-size: 16px"></i>
									<span style="font-size: 15px">16°C</span>
								</div>
								<div class="weather__forecast-wind forecast">
									<i class="fa fa-map-marker" style="transform: rotate( 322deg ); font-size: 17px; margin-right: 10px;"></i>
									<span>7 m/s</span>
								</div>
							</div>
						</div>
						<a href="#" class="weather__custom-link">
							More details
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>

</div>