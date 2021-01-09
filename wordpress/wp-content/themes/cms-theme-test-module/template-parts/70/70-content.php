<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-70">
    <div class="container">
    	<div class="cover-type70">
    		<div class="title-type70">
	    		<div class="text-title">
	    			<h3>Icon box</h3>
	    		</div>
	    	</div>
	    	<div class="content">
	    		<div class="row">
	    			<div class="col-md-4">
	    				<div class="sub-content">
			    			<div class="icon-content">
			    				<i class="fa fa-tint"></i>
			    			</div>
			    			<div class="sub-text">
			    				<div class="title-sub-text">
			    					<p>Swimingpool</p>
			    				</div>
			    				<div class="text">
			    					Our lessons are available for both beginner and advanced levels. For beginners we have an introductory course as well as a full course
			    				</div>
			    			</div>
			    		</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="sub-content">
			    			<div class="icon-content">
			    				<i class="fa fa-thumbs-o-up"></i>
			    			</div>
			    			<div class="sub-text">
			    				<div class="title-sub-text">
			    					<p>Pro-Trainers</p>
			    				</div>
			    				<div class="text">
			    					Sports but we offer other exciting adventure sports as well our bearch side is not only terific
			    				</div>
			    			</div>
			    		</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="sub-content">
			    			<div class="icon-content">
			    				<i class="fa fa-map-marker"></i>
			    			</div>
			    			<div class="sub-text">
			    				<div class="title-sub-text">
			    					<p>Super Location</p>
			    				</div>
			    				<div class="text">
			    					Our lessons are available for both beginner and advanced levels. For beginners we have an introductory course as well as a full course
			    				</div>
			    			</div>
			    		</div>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    </div>
</div>