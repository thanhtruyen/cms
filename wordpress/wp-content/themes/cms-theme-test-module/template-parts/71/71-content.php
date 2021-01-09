<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-71">
	<div class="cover-type71">
		<div class="title-type71">
			<h3>Opening Time</h3>
		</div>
	    <div class="container">
	    	<div class="row">
	    	    <div class="col-md-4">
	    	    	<div class="open-time">
	    	    		Opening time
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Monday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Tuesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Wednesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Thursday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Friday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Saturday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Sunday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="cover-time-active">
	    				<div class="time-active">
	    	    		<span>Monday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Tuesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Wednesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Thursday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Friday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Saturday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Sunday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    			</div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="cover-time-active1">
	    				<div class="time-active">
	    	    		<span>Monday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Tuesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Wednesday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Thursday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Friday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Saturday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    	    	<div class="time-active">
	    	    		<span>Sunday</span>
	    	    		<span class="dot-time"></span>
	    	    		<span>8:00-16:00</span>
	    	    	</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>