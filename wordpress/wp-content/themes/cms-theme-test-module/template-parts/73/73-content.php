<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-73">
	<div class="cover-type73">
		<div class="title-type73">
			<h3>Counter</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="counters">
						<div class="number_counter">
							<div class="number_counter_number">
								130
							</div>
							<div class="number_counter_text">
								Tent Spaces
							</div>
						</div>
						<div class="number_counter">
							<div class="number_counter_number">
								150
							</div>
							<div class="number_counter_text">
								RV Parking
							</div>
						</div>
						<div class="number_counter">
							<div class="number_counter_number">
								30
							</div>
							<div class="number_counter_text">
								Cabins
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="cover_counter">
						<div class="counters">
							<div class="number_counter">
								<div class="number_counter_number">
									80
								</div>
								<div class="number_counter_text">
									Tent Spaces
								</div>
								<div class="number_counter__bar">
									<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 70%;"></div>
								</div>
							</div>
							<div class="number_counter">
								<div class="number_counter_number">
									200
								</div>
								<div class="number_counter_text">
									RV Parking
								</div>
								<div class="number_counter__bar">
									<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 30%;"></div>
								</div>
							</div>
							<div class="number_counter">
								<div class="number_counter_number">
									450
								</div>
								<div class="number_counter_text">
									Cabins
								</div>
								<div class="number_counter__bar">
									<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 20%;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="counters">
						<div class="number_counter">
							<div class="number_counter_number">
								80
							</div>
							<div class="number_counter_text">
								Tent Spaces
							</div>
							<div class="number_counter__bar">
								<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 70%;"></div>
							</div>
						</div>
						<div class="number_counter">
							<div class="number_counter_number">
								200
							</div>
							<div class="number_counter_text">
								RV Parking
							</div>
							<div class="number_counter__bar">
								<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 30%;"></div>
							</div>
						</div>
						<div class="number_counter">
							<div class="number_counter_number">
								450
							</div>
							<div class="number_counter_text">
								Cabins
							</div>
							<div class="number_counter__bar">
								<div class="number_counter__bar_progress  js-nc-progress-bar" data-progress-bar-value="80" style="width: 20%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>