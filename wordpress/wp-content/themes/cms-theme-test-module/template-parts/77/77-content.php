<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-77">
	<div class="cover-type77">
		<div class="container">
			<div class="wind_surfing">
				<div class="do_la">
					$1200
				</div>
				<div class="content">
					<h3 class="title">Windsurfing freestyle</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium asperiores, et iusto perferendis quis dignissimos molestias quas soluta incidunt non amet adipisci est magni unde veritatis labore libero porro laboriosam.</p>
					<div class="location check">
						<i class="fa fa-map-marker"></i> France - Hossergor
					</div>
					<div class="check">
						<i class="fa fa-check"></i> Accomodation
					</div>
				</div>
				<div class="bd_dot"></div>
				<div class="list_check">
					<div class="check_check">
						<i class="fa fa-check-square-o"></i> 10 Accomodations
					</div>
					<div class="check_check">
						<i class="fa fa-check-square-o"></i> 4 Meals/Day
					</div>
				</div>
				<div class="list_check">
					<div class="check_check">
						<i class="fa fa-check-square-o"></i> 20hrs of Lessons
					</div>
					<div class="check_check">
						<i class="fa fa-check-square-o"></i> Free Airport Traspost
					</div>
				</div>
				<div class="book_now">
					<a class="btn-primary  col-xs-12"> BOOK NOW</a>
				</div>		
			</div>
		</div>
	</div>
</div>