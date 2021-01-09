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
				ACCORDION
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="accordion">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" href="#collapse-widget11111"> How can I apply for the skydiving course? </a>
								</h4>
							</div>
							<div id="collapse-widget11111" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget2">  Transport and paths on the Rush Mountain?  </a>
								</h4>
							</div>
							<div id="collapse-widget2" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home. StrusturePress provides you with the guidance and the tools that are necessary.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget3">  Wild animals in the Rush Mountain forest?  </a>
								</h4>
							</div>
							<div id="collapse-widget3" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">  By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home. StrusturePress provides you with the guidance and the tools that are necessary.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget4">   Parking space or public transport?  </a>
								</h4>
							</div>
							<div id="collapse-widget4" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> Surfing requires very strong legs which can come from swimming lessons. Swimming also increases a person’s endurance and stamina to paddle in water which constitutes over 50 percent of the surfing time.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" href="#collapse-widget5">  What is The Adventure Park at Rush Mountain?  </a>
								</h4>
							</div>
							<div id="collapse-widget5" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget6">  When is The Rush Park Open? </a>
								</h4>
							</div>
							<div id="collapse-widget6" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home. StrusturePress provides you with the guidance and the tools that are necessary.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget7">   Are reservations required at The RushPark? </a>
								</h4>
							</div>
							<div id="collapse-widget7" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">  By choosing to build green, you aremaking an effort to reduce the burden on the environment and also add value to your home. StrusturePress provides you with the guidance and the tools that are necessary.</div>
							</div>
						</div>
						<hr class="hr--dotted">
						<div class="accordion__panel  panel  panel-default">
							<div class="accordion__heading  panel-heading" role="tab" id="heading-widget-33-0-0-1">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-widget8">  What does The Rush Park cost?  </a>
								</h4>
							</div>
							<div id="collapse-widget8" class="accordion__content  panel-collapse collapse" style="height: 0px;">
								<div class="panel-body"> Surfing requires very strong legs which can come from swimming lessons. Swimming also increases a person’s endurance and stamina to paddle in water which constitutes over 50 percent of the surfing time.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>