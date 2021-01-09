<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-72">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="title-type72">Social Icon</p>
				<div class="social-icons">
					<i class="fa fa-twitter"></i>
					<i class="fa fa-facebook"></i>
					<i class="fa fa-youtube"></i>
					<i class="fa fa-google-plus"></i>
					<i class="fa fa-pinterest"></i>
					<i class="fa fa-tumblr"></i>
					<i class="fa fa-xing"></i>
					<i class="fa fa-vimeo"></i>
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-youtube-square"></i>
					<i class="fa fa-google-plus-square"></i>
					<i class="fa fa-pinterest-square"></i>
					<i class="fa fa-tumblr-square"></i>
					<i class="fa fa-vimeo-square"></i>
					<i class="fa fa-linkedin-square"></i>
				</div>
			</div>
			<div class="col-md-4">
				<p class="title-type72">Skype</p>
				<div class="the-block">
					<div class="call-block">
						<div class="text-block">Call us on skype</div>
						<div class="icon-block"><i class="fa fa-skype"></i></div>
					</div>
					<div class="call-block">
						<div class="text-block">Call us on phone</div>
						<div class="icon-block"><i class="fa fa-phone"></i></i></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<p class="title-type72">Facebook</p>
				<div class="_li">
					<div>
						<div id="u_0_0">
							<div class="">
								<div class="_2p3a">
									<div class="_2lqh">
										<div class="_1drm _1ds3" id="u_0_1">
											<div class="uiScaledImageContainer _2zfr">
												<img class="scaledImageFitHeight img" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-0/p130x130/129901162_1871316513021028_80535954353751219_n.png?_nc_cat=107&amp;ccb=2&amp;_nc_sid=dd9801&amp;_nc_ohc=ZNPZ7FMxkXYAX9X6Zfy&amp;_nc_ht=scontent.fsgn2-1.fna&amp;_nc_tp=30&amp;oh=9495d6f710448aed84fc7d940aa4b56e&amp;oe=5FF3E383" data-src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-0/p130x130/129901162_1871316513021028_80535954353751219_n.png?_nc_cat=107&amp;ccb=2&amp;_nc_sid=dd9801&amp;_nc_ohc=ZNPZ7FMxkXYAX9X6Zfy&amp;_nc_ht=scontent.fsgn2-1.fna&amp;_nc_tp=30&amp;oh=9495d6f710448aed84fc7d940aa4b56e&amp;oe=5FF3E383"alt="Ảnh của Proteus Themes." width="342" height="130" caption="Ảnh của Proteus Themes.">
											</div>
											<div class="_1dro _2ph- clearfix">
												<div class="_2zfs"></div>
												<a class="_3-8_ lfloat" href="https://www.facebook.com/ProteusThemes/" target="_blank">
													<img class="_1drn _-s img" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-1/cp0/p50x50/1898233_299698916849470_499109083_n.png?_nc_cat=103&amp;ccb=2&amp;_nc_sid=dbb9e7&amp;_nc_ohc=uZONdtn46PgAX-PX6rJ&amp;_nc_ht=scontent.fsgn2-2.fna&amp;_nc_tp=30&amp;oh=ddeb22b749df9b44ecace40fe38acbf1&amp;oe=5FF61F8A" height="50" width="50" alt="">
												</a>
												<div class="lfloat"><div>
													<a style="max-width: 240px;" class="_1drp _5lv6" title="Proteus Themes" href="https://www.facebook.com/ProteusThemes/" target="_blank">Proteus Themes</a>
												</div>
												<div class="_1drq" style="max-width: 260px;">3.495 lượt thích</div>
											</div>
										</div>
										<div class="_1z7u _2ph-">
											<span class="lfloat">
												<div class="_4o5p">
													<div class="pluginConnectButton" id="u_0_2">
														<a role="button" class="_42ft _4jy0 _opc pluginConnectButtonDisconnected _4jy3 _517h _51sy" title="" href="https://www.facebook.com/ProteusThemes/" target="_blank">
															<i class="fa fa-facebook-official" style="margin-right: 5px; color: #4867aa;"></i>Thích Trang
														</a>
														<a role="button" class="_42ft _4jy0 _opc _opd pluginConnectButtonConnected hidden_elem _4jy3 _517h _51sy" title="" href="https://www.facebook.com/ProteusThemes/" target="_blank">
															<i class="_3-8_ img sp_5mhmaH8rzNW sx_ccb777"></i>Đã thích
														</a>
													</div>
												</div>
											</span>
											<span class="_3kvp rfloat _102v" id="u_0_3">
												<a role="button" class="_42ft _4jy0 _opc pluginConnectButtonDisconnected _4jy3 _517h _51sy" title="" href="https://www.facebook.com/ProteusThemes/" target="_blank">
													<i class="fa fa-briefcase" style="margin-right: 5px;"></i>Mua ngay
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>