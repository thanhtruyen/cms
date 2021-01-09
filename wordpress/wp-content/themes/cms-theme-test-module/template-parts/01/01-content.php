<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-01">

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="top__left">
                        <div class="widget  widget-icon-box">
                            <div class="icon-box">
                                <i class="fa  fa-home"></i>
                                <h4 class="icon-box__title">Surfing School, 227 Marrion Street, 110056 Fuertaventura
                                </h4>
                                <span class="icon-box__subtitle"></span>
                            </div>
                        </div>
                    </div>
                    <div class="top__right">
                        <div class="widget  widget_nav_menu">
                            <div class="menu-top-menu-container">
                                <ul id="menu-top-menu" class="menu">
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44">
                                        <a href="./extras">Extras</a>
                                    </li>
                                    <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a href="#">Documentation</a></li>
                                    <li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a href="#">Buy Theme</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__container">
        <div class="container">
            <div class="header">

                <div class="header__logo">
                    <a href="./home">
                        <img src="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png" alt="Shaka" srcset="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png, https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo2x.png 2x" class="img-fluid" width="244" height="50">
                    </a>
                </div>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class'
                ));
                ?>

            </div>
        </div>
    </div>

    <div class="type-22">
		<div class="container">
			<div class="type-16">
				<div class="container">
					<nav class="navbar navbar-expand-sm navbar-dark">
						<!-- Links -->
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-twitter " aria-hidden="true"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto social-icon__right">
							<li class="nav-item">
								<a class="nav-link icon-box" href="#"> <i class="fa fa-envelope" aria-hidden="true"></i>INFO&#64;SURFING.COM</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-headphones" aria-hidden="true"></i>031 567 653</a>
							</li>

							<!-- Dropdown -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/en.png" alt="english">ENGLISH
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/de.png" alt=""> Deutsch</a>
									<a class="dropdown-item" href="#">WPML support</a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<h2 class="type-22__title">
				<?php wp_title(''); ?>
			</h2>
			<div class="type-22__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php
				if (function_exists('bcn_display')) {
					bcn_display();
				} ?>
			</div>
		</div>
	</div>

</div>