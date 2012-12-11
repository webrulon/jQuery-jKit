<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />

<meta name="viewport" content="width=960, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title>jKit - jQuery Plugin - UI Library</title>

<meta property="og:title" content="jKit - jQuery Plugin - UI Library"/>
<meta property="og:description" content="A very easy to use, cross platform jQuery UI library that's still small in size, has the features you need and doesn't get in your way."/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://jquery-jkit.com/jkit-facebook-logo.gif"/>
<meta property="og:site_name" content="jKit - jQuery Plugin - UI Library"/>
<meta property="og:url" content="http://jquery-jkit.com/"/>
<meta property="fb:app_id" content="108151702665072"/>

<meta itemprop="name" content="jKit - jQuery Plugin - UI Library">
<meta itemprop="description" content="A very easy to use, cross platform jQuery UI library that's still small in size, has the features you need and doesn't get in your way.">
<meta itemprop="image" content="http://jquery-jkit.com/jkit-facebook-logo.gif">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="css/jkit.css" />

<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="jquery.jkit.1.0.46.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	
	$('body').jKit({ 
		'plugins': {
			date: { 'path': "plugins/datepicker/js/datepicker.js", 'fn': 'DatePicker' },
			hint: { 'path': "plugins/jquery.ztinputhint-1.2.js", 'fn': 'ztInputHint' },
			maxlength: { 'path': "plugins/maxlength/jquery.maxlength-min.js", 'fn': 'maxlength' },
			grow: { 'path': "plugins/jquery.jgrow-0.4.js", 'fn': 'jGrow' },
			confirm: { 'path': "plugins/jquery.confirm-1.3.js", 'fn': 'confirm' },
			time: { 'path': "plugins/timePicker/jquery.timePicker.min.js", 'fn': 'timePicker' },
			mask: { 'path': "plugins/jquery.maskedinput-1.2.2.min.js", 'fn': 'mask', 'option': 'mask' }
		},
		'replacements': {
			'encode': specialEncodeCommand
		}
	});
	
	$('ul#navigation > li > a').each( function(){
		$('body').data('jKit').executeCommand(this, 'scroll', { 'speed': 1000, 'dynamic': 'no' });
	});

});

function specialEncodeCommand(that, type, options){
	
	var s = this.settings; // we don't need this one, but I'll leave it here so you know how to get the plugin settings in case you need them
	var $that = $(that);
	
	this.executeCommand(that, type, options); // execute the original command
	
	// now add some additional functionality:
	
	if (options.format == 'uppercase'){
		$that.html($that.html().toUpperCase());
	}
	
}

</script>

</head>
<body>
	
	<img data-jkit="[background:distort=no]" id="bg" src="images/jkit_bg.png" width="1920" height="1080">
	
	<div id="container">
		
		<!-- Download Button -->
		
		<div id="download">
			<a href="http://jquery-jkit.com/jkit.1.0.43.zip">
				<strong><span>[</span> DOWNLOAD <span>]</span></strong> &nbsp; <small>Version 1.0.43, only 41.8k!</small>
			</a>
		</div>
		
		
		<h1><img src="images/jkit_logo.png" alt="jKit" title="jKit"></h1>
		
		
		<!-- slogan -->
		
		<p class="note">
			A very easy to use, cross platform jQuery UI library that's still small in size, has the features you need and doesn't get in your way.
		</p>
		<p class="info">Tested browsers: Chrome, Firefox, Safari, IE7+, Opera and Safari Mobile</p>
		
		
		<!-- basics -->
		
		<h2>Basics</h2>
		<pre>&lt;script type="text/javascript" src="jquery.jkit.1.0.43.min.js"&gt;&lt;/script&gt;</pre>
		<p class="info">Attach it to the whole body or any other element:</p>
		<pre>&lt;script type="text/javascript"&gt;
$(document).ready(function(){
	<span>$('body').jKit();</span>
});
&lt;/script&gt;</pre>
		<p class="info">Apply one of the many commands to some element with the rel attribute:</p>
		<pre>rel="<span>jKit[command:option=value;anotheroption=anothervalue]</span>"</pre>
		<p class="info">Or if you don't want to misuse the rel attribute, do it the HTML5 way:</p>
		<pre><span>data-jkit</span>="<span>[command:option=value;anotheroption=anothervalue]</span>"</pre>
		<p class="info">And of course you can execute a command through JavaScript if needed:</p>
		<pre><span>$('#myelement').jKit('scroll', { 'speed': 1000, 'dynamic': 'no' });</span></pre>
		
		<!-- commands -->
		
		<h2>Commands</h2>
		<ul id="navigation">
			<li><a href="#command_background">background</a></li>
			<li><a href="#command_hide">hide</a></li>
			<li><a href="#command_remove">remove</a></li>
			<li><a href="#command_show">show</a></li>
			<li><a href="#command_showandhide">showandhide</a></li>
			<li><a href="#command_loop">loop</a></li>
			<li><a href="#command_limit">limit</a></li>
			<li><a href="#command_scroll">scroll</a></li>
			<li><a href="#command_lightbox">lightbox</a></li>
			<li><a href="#command_partially">partially</a></li>
			<li><a href="#command_random">random</a></li>
			<li><a href="#command_slideshow">slideshow</a></li>
			<li><a href="#command_gallery">gallery</a></li>
			<li><a href="#command_tabs">tabs</a></li>
			<li><a href="#command_accordion">accordion</a></li>
			<li><a href="#command_carousel">carousel</a></li>
			<li><a href="#command_parallax">parallax</a></li>
			<li><a href="#command_animation">animation</a></li>
			<li><a href="#command_menu">menu</a></li>
			<li><a href="#command_tooltip">tooltip</a></li>
			<li><a href="#command_form">form</a></li>
			<li><a href="#command_validate">validate</a></li>
			<li><a href="#command_plugin">plugin</a></li>
			<li><a href="#command_lorem">lorem</a></li>
			<li><a href="#command_binding">binding</a></li>
			<li><a href="#command_macro">macro</a></li>
			<li><a href="#command_template">template</a></li>
			<li><a href="#command_chart">chart</a></li>
			<li><a href="#command_encode">encode</a></li>
			<li><a href="#command_split">split</a></li>
			<li><a href="#command_live">live</a></li>
			<li><a href="#command_key">key</a></li>
			<li><a href="#command_ajax">ajax</a></li>
			<li><a href="#command_replace">replace</a></li>
			<li><a href="#command_cycle">cycle</a></li>
			<li><a href="#command_fontsize">fontsize</a></li>
			<li><a href="#command_swap">swap</a></li>
			<li><a href="#command_ticker">ticker</a></li>
			<li><a href="#command_sort">sort</a></li>
			<li><a href="#command_zoom">zoom</a></li>
		</ul>
		<p class="info" style="clear:both">More to come ...</p>
		
		
		<!-- background command -->
		
		<h2 id="command_background">Background</h2>
		<p class="info">Ideally added right after the body tag, and don't forget the "width" and "height" attribute:</p>
		<pre>&lt;img rel="<span>jKit[background:distort=no]</span>" id="bg" src="images/bg5.jpeg" width="2048" height="1536"&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>distort:</strong> <span>yes</span> <span class="default">no</span></li>
		</ul>
		
		
		<!-- hide command -->
		
		<h2 id="command_hide">Hide</h2>
		<p class="info">Hide any element easily:</p>
		<pre>&lt;div class="box" id="mydiv1" rel="<span>jKit[hide:delay=2000;speed=500;animation=fade]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>delay:</strong> <span>Int (Milliseconds)</span> <span class="default">0</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">fade</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		
		
		<!-- remove command -->
		
		<h2 id="command_remove">Remove</h2>
		<p class="info">Or just completelly remove an element from the DOM:</p>
		<pre>&lt;div class="box" id="mydiv2" rel="<span>jKit[remove:delay=4000]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>delay:</strong> <span>Int (Milliseconds)</span> <span class="default">0</span></li>
		</ul>
		
		
		<!-- show command -->
		
		<h2 id="command_show">Show</h2>
		<p class="info">You can of course show an element, as well:</p>
		<pre>&lt;div class="box" id="mydiv3" style="display:none" rel="<span>jKit[show:delay=6000;speed=1500]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>delay:</strong> <span>Int (Milliseconds)</span> <span class="default">0</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">fade</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		
		
		<!-- showandhide command -->
		
		<h2 id="command_showandhide">Show and Hide</h2>
		<p class="info">Or do both things, show and hide, in succession:</p>
		<pre>&lt;div class="box" id="mydiv4" style="display:none" rel="<span>jKit[showandhide:delay=2000;speed=500;duration=5000]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>delay:</strong> <span>Int (Milliseconds)</span> <span class="default">0</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>duration:</strong> <span>Int (Milliseconds)</span> <span class="default">10000</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">fade</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		
		
		<!-- loop command -->
		
		<h2 id="command_loop">Loop</h2>
		<p class="info">Or do the whole loop (duration1 is the hidden phase, duration2 the shown):</p>
		<pre>&lt;div class="box" id="mydiv4b" style="display:none" rel="<span>jKit[loop:speed1=2000;duration1=250;speed2=250;duration2=2000]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>speed1:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>speed2:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>duration1:</strong> <span>Int (Milliseconds)</span> <span class="default">2000</span></li>
			<li><strong>duration2:</strong> <span>Int (Milliseconds)</span> <span class="default">2000</span></li>
			<li><strong>easing1:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
			<li><strong>easing2:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">fade</span></li>
		</ul>
		<div class="box" id="mydiv4b" style="display:none" rel="jKit[loop:speed1=2000;duration1=250;speed2=250;duration2=2000]">Loop me!</div>
		
		
		<!-- limit command -->
		
		<h2 id="command_limit">Limit</h2>
		<p class="info">Remove any childrens inside an element that exceed a limit of 3:</p>
		<pre>&lt;ul rel="<span>jKit[limit:count=3]</span>"&gt;
	&lt;li&gt;Entry 1&lt;/li&gt;
	&lt;li&gt;Entry 2&lt;/li&gt;
	&lt;li&gt;Entry 3&lt;/li&gt;
	&lt;li&gt;Entry 4&lt;/li&gt;
&lt;/ul></pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>elements:</strong> <span>"children" or "chars"</span> <span class="default">children</span></li>
			<li><strong>count:</strong> <span>Int</span> <span class="default">5</span></li>
			<li><strong>endstring:</strong> <span>String</span> <span class="default">...</span> <span>(used if type = chars)</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">none</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
			<ul rel="jKit[limit:count=3]">
				<li>Entry 1</li>
				<li>Entry 2</li>
				<li>Entry 3</li>
				<li>Entry 4</li>
			</ul>
		</div>
		<p class="info">Limit a string to 25 characters:</p>
		<pre>&lt;span rel="<span>jKit[limit:elements=chars;count=25]</span>"&gt;1234567890123456789012345678901234567890123456789&lt;/span&gt;</pre>
		<div class="box">
			<span rel="jKit[limit:elements=chars;count=25]">1234567890123456789012345678901234567890123456789</span>
		</div>
		
		<!-- scroll command -->
		
		<h2 id="command_scroll">Scroll</h2>
		<p class="info">Smoothly scrolls to an anchor or the top on click:</p>
		<pre>&lt;a href="" rel="<span>jKit[scroll]</span>">To the top!&lt;/a&gt;</pre>
		<pre>&lt;a href="#command_random" rel="<span>jKit[scroll:speed=1000;easing=easeOutBounce]</span>">To the top!&lt;/a&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
			<li><strong>dynamic:</strong> <span>"yes" or "no"</span> <span class="default">yes</span></li>
		</ul>
		<div class="box">
			<a href="" rel="jKit[scroll]">To the top!</a> &nbsp; &nbsp; <a href="#command_random" rel="jKit[scroll:speed=1000;easing=easeOutBounce]">To the animation command anchor.</a>
		</div>
		
		
		<!-- lightbox command -->
		
		<h2 id="command_lightbox">Lightbox</h2>
		<p class="info">Simple lightbox functionality for images and iframed urls:</p>
		<pre>&lt;a href="images/sky.jpg" rel="<span>jKit[lightbox]</span>" title="Paragliders in the sky">Open Image&lt;/a&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>group:</strong> <span>String</span> <span class="default">''</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>opacity:</strong> <span>Float 0-1</span> <span class="default">0.7</span></li>
			<li><strong>clearance:</strong> <span>Int (pixels)</span> <span class="default">200</span></li>
			<li><strong>closer:</strong> <span>HTML</span> <span class="default">x</span></li>
			<li><strong>next:</strong> <span>HTML</span> <span class="default">></span></li>
			<li><strong>prev:</strong> <span>HTML</span> <span class="default"><</span></li>
			<li><strong>modal:</strong> <span>"yes" or "no"</span> <span class="default">no</span></li>
			<li><strong>width:</strong> <span>CSS width</span> <span class="default">''</span></li>
			<li><strong>height:</strong> <span>CSS height</span> <span class="default">''</span></li>
			<li><strong>titleHeight:</strong> <span>Int (pixels)</span> <span class="default">'20'</span></li>
		</ul>
		<div class="box">
			<a href="images/sky.jpg" rel="jKit[lightbox:group=images]" title="Paragliders in the sky">Open image</a> &nbsp; &nbsp; 
			<a href="images/oversized.jpg" rel="jKit[lightbox:group=images]" title="Beautiful!">Oversized image</a> &nbsp; &nbsp; 
			<a href="images/square.jpg" rel="jKit[lightbox:group=images]" title="Watermelons, square!">Open square image</a> &nbsp; &nbsp; 
			<a href="http://reddit.com" rel="jKit[lightbox]" title="Reddit: The social news platform">Open website (iFrame)</a> &nbsp; &nbsp; 
			<a href="modal.html" rel="jKit[lightbox:modal=yes;width=500px;height=300px]">Modal dialog (iFrame)</a>
		</div>
		
		
		<!-- partially command -->
		
		<h2 id="command_partially">Partially</h2>
		<p class="info">Too much of something? Than only show part of it:</p>
		<pre>&lt;div class="box" id="mydiv5" style="width:400px;padding:6px;background:#ffd;border:1px #eeb solid" rel="<span>jKit[partially:height=50;speed=500;easing=easeOutBounce]</span>"&gt;Text ...&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>height:</strong> <span>Int (Pixels)</span> <span class="default">200</span></li>
			<li><strong>text:</strong> <span>Text or HTML</span> <span class="default">more ...</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box" id="mydiv5" style="width:400px;padding:6px;background:#ffd;border:1px #eeb solid" rel="jKit[partially:height=50;speed=500;easing=easeOutBounce]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
		
		
		<!-- random command -->
		
		<h2 id="command_random">Random</h2>
		<p class="info">Another way to show only part of something is to randomly pick one or more from something:</p>
		<pre>&lt;div class="box" id="randomly" rel="<span>jKit[random:count=2]</span>"&gt;
	&lt;p id="rand1" style="color:#c30"&gt;
		Text 1 (red)
	&lt;/p&gt;
	&lt;p id="rand2" style="color:#0c3"&gt;
		Text 2 (green)
	&lt;/p&gt;
	&lt;p id="rand2" style="color:#03c"&gt;
		Text 3 (blue)
	&lt;/p&gt;
&lt;/div&gt;</pre>
		<div class="box" id="randomly" rel="jKit[random:count=2]">
			<p id="rand1" style="color:#c30">
				Text 1 (red)
			</p>
			<p id="rand2" style="color:#0c3">
				Text 2 (green)
			</p>
			<p id="rand2" style="color:#03c">
				Text 3 (blue)
			</p>
		</div>
		
		
		<!-- slideshow command -->
		
		<h2 id="command_slideshow">Slideshow</h2>
		<p class="info">Create a slideshow the easy way, with many options for different usecases:</p>
		<pre>&lt;div id="mydiv7" rel="<span>jKit[slideshow:interval=4000;speed=250;animation=fade]</span>"&gt;
	&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="slides/p1.jpg"&gt;&lt;/a&gt;
	&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="slides/p2.jpg"&gt;&lt;/a&gt;
	&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="slides/p3.jpg"&gt;&lt;/a&gt;
	&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="slides/p4.jpg"&gt;&lt;/a&gt;
	&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="slides/p5.jpg"&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>shuffle:</strong> <span>"yes" or "no"</span> <span class="default">no</span></li>
			<li><strong>interval:</strong> <span>Int (Milliseconds)</span> <span class="default">3000</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">fade</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
			<div id="mydiv7" rel="jKit[slideshow:interval=4000;speed=250;animation=fade]">
				<a href="http://fredibach.ch" target="_blank"><img src="slides/p1.jpg"></a>
				<a href="http://fredibach.ch" target="_blank"><img src="slides/p2.jpg"></a>
				<a href="http://fredibach.ch" target="_blank"><img src="slides/p3.jpg"></a>
				<a href="http://fredibach.ch" target="_blank"><img src="slides/p4.jpg"></a>
				<a href="http://fredibach.ch" target="_blank"><img src="slides/p5.jpg"></a>
			</div>
		</div>
		<p class="info">You can create a slideshow with almost anything, for example with headings:</p>
		<pre>&lt;div id="mydiv8" style="text-align:center;font-size:2em" rel="<span>jKit[slideshow:interval=2000;speed=500;animation=fade]</span>"&gt;
	&lt;h3>First Headline&lt;/h3&gt;
	&lt;h3>Another Headline&lt;/h3&gt;
	&lt;h3>Even More of a Headline&lt;/h3&gt;
	&lt;h3>Still not the last headline&lt;/h3&gt;
	&lt;h3>The last headline&lt;/h3&gt;
&lt;/div&gt;</pre>
		<div class="box">
			<div id="mydiv8" style="text-align:center;font-size:2em" rel="jKit[slideshow:interval=2000;speed=500;animation=fade]">
				<h3>First Headline</h3>
				<h3>Another Headline</h3>
				<h3>Even More of a Headline</h3>
				<h3>Still not the last headline</h3>
				<h3>The last headline</h3>
			</div>
		</div>
		
		
		<!-- gallery command -->
		
		<h2 id="command_gallery">Gallery</h2>
		<p class="info">Another thing you can create with images is a gallery:</p>
		<pre>&lt;div id="mydiv9" rel="<span>jKit[gallery:event=click;active=4]</span>"&gt;
	&lt;img src="slides/p1.jpg" title="Image caption one"&gt;
	&lt;img src="slides/p2.jpg" title="Image caption two"&gt;
	&lt;img src="slides/p3.jpg" title="Image caption three"&gt;
	&lt;img src="slides/p4.jpg" title="Image caption four"&gt;
	&lt;img src="slides/p5.jpg" title="Image caption five"&gt;
&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>active:</strong> <span>Int</span> <span class="default">1</span></li>
			<li><strong>event:</strong> <span>"mouseover" or "click"</span> <span class="default">click</span></li>
			<li><strong>showcaptions:</strong> <span>"yes" or "no"</span> <span class="default">yes</span></li>
		</ul>
		<div class="box">
			<div id="mydiv9" rel="jKit[gallery:event=click;active=4]">
				<img src="slides/p1.jpg" title="Image caption one">
				<img src="slides/p2.jpg" title="Image caption two">
				<img src="slides/p3.jpg" title="Image caption three">
				<img src="slides/p4.jpg" title="Image caption four">
				<img src="slides/p5.jpg" title="Image caption five">
			</div>
		</div>
		
		
		<!-- tabs command -->
		
		<h2 id="command_tabs">Tabs</h2>
		<p class="info">A good way to work with a lot of content that can be easily separated:</p>
		<pre>&lt;div id="mytabs" style="height:300px;width:420px;" rel="<span>jKit[tabs:animation=none]</span>"&gt;
	&lt;div&gt;
		&lt;h3&gt;Title 1&lt;/h3&gt;
		&lt;div&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.&lt;/div&gt;
	&lt;/div&gt;
	&lt;div&gt;
		&lt;h3&gt;Title 2&lt;/h3&gt;
		&lt;div&gt;&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="images400x250/paragliding1.jpeg"&gt;&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div&gt;
		&lt;h3&gt;Title 3&gt;/h3&lt;
		&lt;div&gt;&lt;ul&gt;&lt;li&gt;List Item 1&lt;/li&gt;&lt;li&gt;List Item 2&lt;/li&gt;&lt;li&gt;List Item 3&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>active:</strong> <span>Int</span> <span class="default">1</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">none</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
			<div id="mytabs" style="width:100%;" rel="jKit[tabs:animation=none]">
				<div>
					<h3>Some lorem text</h3>
					<div rel="jKit[lorem:paragraphs=2]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</div>
				</div>
				<div>
					<h3>jKit Slideshow</h3>
					<div>
						<div id="mydiv7" rel="jKit[slideshow:interval=4000;speed=250;animation=fade]">
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p1.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p2.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p3.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p4.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p5.jpg"></a>
						</div>
					</div>
				</div>
				<div>
					<h3>A list</h3>
					<div><ul><li>List Item 1</li><li>List Item 2</li><li>List Item 3</li></ul></div>
				</div>
				<div>
					<h3>jKit Parallax</h3>
					<div>
						<div class="parallax-container" rel="jKit[parallax:strength=2;axis=x]">
							<div class="parallax parallax1">Background Layer</div>
							<div class="parallax parallax2">Middle Layer</div>
							<div class="parallax parallax3">Foreground Layer</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- accordion command -->
		
		<h2 id="command_accordion">Accordion</h2>
		<p class="info">Similar like tabs, but with a different concept:</p>
		<pre>&lt;div id="myaccordion" style="width:420px;" rel="<span>jKit[accordion]</span>"&gt;
	&lt;div&gt;
		&lt;h3&gt;Title 1&lt;/h3&gt;
		&lt;div>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.&lt;/div&gt;
	&lt;/div&gt;
	&lt;div&gt;
		&lt;h3>Title 2&lt;/h3&gt;
		&lt;div&gt;&lt;a href="http://fredibach.ch" target="_blank"&gt;&lt;img src="images400x250/paragliding1.jpeg"&gt;&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div&gt;
		&lt;h3>Title 3&lt;/h3&gt;
		&lt;div&gt;&lt;ul&gt;&lt;li&gt;List Item 1&lt;/li&gt;&lt;li&gt;List Item 2&lt;/li&gt;&lt;li&gt;List Item 3&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>active:</strong> <span>Int</span> <span class="default">1</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>animation:</strong> <span>"slide" or "none"</span> <span class="default">slide</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
			<div id="myaccordion" rel="jKit[accordion]">
				<div>
					<h3>Title 1</h3>
					<div>
						<div rel="jKit[lorem:length=4000]"></div>
					</div>
				</div>
				<div>
					<h3>Title 2</h3>
					<div>
						<div id="mydiv7" rel="jKit[slideshow:interval=4000;speed=250;animation=fade]">
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p1.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p2.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p3.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p4.jpg"></a>
							<a href="http://fredibach.ch" target="_blank"><img src="slides/p5.jpg"></a>
						</div>
					</div>
				</div>
				<div>
					<h3>Title 3</h3>
					<div><ul><li>List Item 1</li><li>List Item 2</li><li>List Item 3</li></ul></div>
				</div>
			</div>
		</div>
		
		
		<!-- carousel command -->
		
		<h2 id="command_carousel">Carousel</h2>
		<p class="info">Let different content go around and around ... and around:</p>
		<pre>&lt;div class="carousel" rel="<span>jKit[carousel]</span>"&gt;
	&lt;div class="carousel-item"&gt;
		DIV 1 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 2 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 3 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 4 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 5 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 6 ...
	&lt;/div&gt;
	&lt;div class="carousel-item"&gt;
		DIV 7 ...
	&lt;/div&gt;
&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>autoplay:</strong> <span>"yes" or "no"</span> <span class="default">"yes"</span></li>
			<li><strong>limit:</strong> <span>Int</span> <span class="default">5</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>animation:</strong> <span>"slide" or "none"</span> <span class="default">grow</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
			<li><strong>interval:</strong> <span>Int (Milliseconds)</span> <span class="default">5000</span></li>
			<li><strong>prevhtml:</strong> <span>HTML</span> <span class="default">&lt;</span></li>
			<li><strong>nexthtml:</strong> <span>HTML</span> <span class="default">&gt;</span></li>
		</ul>
		<div class="box">
			<div class="carousel" rel="jKit[carousel]">
				<div class="carousel-item">
					DIV 1 ...
				</div>
				<div class="carousel-item">
					DIV 2 ...
				</div>
				<div class="carousel-item">
					DIV 3 ...
				</div>
				<div class="carousel-item">
					DIV 4 ...
				</div>
				<div class="carousel-item">
					DIV 5 ...
				</div>
				<div class="carousel-item">
					DIV 6 ...
				</div>
				<div class="carousel-item">
					DIV 7 ...
				</div>
			</div>
		</div>
		
		
		<!-- parallax command -->
		
		<h2 id="command_parallax">Parallax</h2>
		<p class="info">Create a parallax scrolling effect with multiple elements of different content:</p>
		<pre>&lt;div class="parallax-container" rel="<span>jKit[parallax:strength=3]</span>"&gt;
	&lt;div class="parallax parallax1"&gt;Background Layer&lt;/div&gt;
	&lt;div class="parallax parallax2"&gt;Middle Layer&lt;/div&gt;
	&lt;div class="parallax parallax3"&gt;Foreground Layer&lt;/div&gt;
&lt;/div&gt;</pre>
		<ul class="options">
			<li><strong>strength:</strong> <span>Int (1-10)</span> <span class="default">5</span></li>
			<li><strong>axis:</strong> <span>"x", "y" or "both"</span> <span class="default">x</span></li>
			<li><strong>scope:</strong> <span>"local" or "global"</span> <span class="default">global</span></li>
		</ul>
		<div class="box">
			<div class="parallax-container" rel="jKit[parallax:strength=2;axis=both]">
				<div class="parallax parallax1">Background Layer</div>
				<div class="parallax parallax2">Middle Layer</div>
				<div class="parallax parallax3">Foreground Layer</div>
			</div>
		</div>
		
		
		<!-- animation command -->
		
		<h2 id="command_animation">Animation</h2>
		<p class="info">Create an animation with frames of different content:</p>
		<pre>&lt;div class="animation-container" rel="<span>jKit[animation:fps=30;loop=yes]</span>"&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=100;action=fadeout]</span>" style="font-size:90px;background:#000"&gt;&lt;img src="images/jkit_logo.png" alt="jKit" title="jKit" style="margin-top:110px">&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=7]</span>" style="font-size:90px;line-height:260%">animation&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=10]</span>" style="font-size:90px;line-height:260%">made&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=50;action=tween;easing=easeOutBounce]</span>" style="font-size:200px;padding-top:110px">easy&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=1]</span>" style="font-size:20px;opacity:0;padding-top:110px">easy&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=25]</span>">&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=75;action=fadeinout]</span>" style="font-size:50px;line-height:500%;color:#E01B49;background:#fff">really easy!&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=50]</span>">&lt;/div&gt;
	&lt;div class="animation" rel="<span>jKit[frame:steps=50;action=fadein]</span>" style="background:#000"&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
		<p class="info">Animation options:</p>
		<ul class="options">
			<li><strong>fps:</strong> <span>Int (1-10)</span> <span class="default">25</span></li>
			<li><strong>loop:</strong> <span>"yes" or "no"</span> <span class="default">no</span></li>
		</ul>
		<p class="info">Frame options:</p>
		<ul class="options">
			<li><strong>steps:</strong> <span>Int</span> <span class="default">1</span></li>
			<li><strong>action:</strong> <span>"show", "fadeout", "fadein", "fadeinout" or "tween"</span> <span class="default">show</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
			<div class="animation-container" rel="jKit[animation:fps=30;loop=yes]">
				<div class="animation" rel="jKit[frame:steps=100;action=fadeout]" style="font-size:90px;background:#000"><img src="images/jkit_logo.png" alt="jKit" title="jKit" style="margin-top:110px"></div>
				<div class="animation" rel="jKit[frame:steps=7]" style="font-size:90px;line-height:260%">animation</div>
				<div class="animation" rel="jKit[frame:steps=10]" style="font-size:90px;line-height:260%">made</div>
				<div class="animation" rel="jKit[frame:steps=50;action=tween;easing=easeOutBounce]" style="font-size:200px;padding-top:110px">easy</div>
				<div class="animation" rel="jKit[frame:steps=1]" style="font-size:20px;opacity:0;padding-top:110px">easy</div>
				<div class="animation" rel="jKit[frame:steps=25]"></div>
				<div class="animation" rel="jKit[frame:steps=75;action=fadeinout]" style="font-size:50px;line-height:500%;color:#E01B49;background:#fff">really easy!</div>
				<div class="animation" rel="jKit[frame:steps=50]"></div>
				<div class="animation" rel="jKit[frame:steps=50;action=fadein]" style="background:#000"></div>
			</div>
		</div>
		
		
		<!-- menu command -->
		
		<h2 id="command_menu">Menu</h2>
		<p class="info">Create a dropdown menu from a multi-level unordered list:</p>
		<pre>&lt;ul class="dropdown" rel="<span>jKit[menu]</span>"&gt;
	&lt;li&gt;&lt;a href="#"&gt;Main 1&lt;/a&gt;
      		&lt;ul class="sub_menu"&gt;
      			 &lt;li>&lt;a href="#"&gt;Sub 1A&lt;/a>&lt;/li&gt;
      			 &lt;li>&lt;a href="#"&gt;Sub 1B&lt;/a>&lt;/li&gt;
      			 &lt;li>&lt;a href="#"&gt;Sub 1C&lt;/a>&lt;/li&gt;
      			 &lt;li>&lt;a href="#"&gt;Sub 1D&lt;/a>&lt;/li&gt;
      		&lt;/ul&gt;
      	&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;Main 2&lt;/a&gt;
      		&lt;ul class="sub_menu"&gt;
      			 &lt;li&gt;&lt;a href="#"&gt;Sub 2A&lt;/a&gt;&lt;/li&gt;
      			 &lt;li&gt;&lt;a href="#"&gt;Sub 2B&lt;/a&gt;&lt;/li&gt;
      		&lt;/ul&gt;
      	&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;Main 3&lt;/a&gt;
      		&lt;ul class="sub_menu"&gt;
      			 &lt;li&gt;&lt;a href="#"&gt;Sub 3A&lt;/a&gt;&lt;/li&gt;
      			 &lt;li&gt;&lt;a href="#"&gt;Sub 3B&lt;/a&gt;&lt;/li&gt;
      			 &lt;li&gt;
				&lt;a href="#"&gt;Sub 3C&lt;/a&gt;
				&lt;ul&gt;
      					&lt;li&gt;&lt;a href="#"&gt;Sub 3C1&lt;/a&gt;&lt;/li&gt;
      					&lt;li&gt;&lt;a href="#"&gt;Sub 3C2&lt;/a&gt;&lt;/li&gt;
      				&lt;/ul&gt;
			&lt;/li&gt;
      		&lt;/ul&gt;
      	&lt;/li&gt;
&lt;/ul&gt;</pre>
		<ul class="dropdown" rel="jKit[menu]">
			<li><a href="#">Main 1</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Sub 1A</a></li>
        			 <li><a href="#">Sub 1B</a></li>
        			 <li><a href="#">Sub 1C</a></li>
        			 <li><a href="#">Sub 1D</a></li>
        		</ul>
        	</li>
			<li><a href="#">Main 2</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Sub 2A</a></li>
        			 <li><a href="#">Sub 2B</a></li>
        		</ul>
        	</li>
			<li><a href="#">Main 3</a>
        		<ul class="sub_menu">
        			 <li><a href="#">Sub 3A</a></li>
        			 <li><a href="#">Sub 3B</a></li>
        			 <li>
						<a href="#">Sub 3C</a>
						<ul>
        					<li><a href="#">Sub 3C1</a></li>
        					<li><a href="#">Sub 3C2</a></li>
        				</ul>
					</li>
        		</ul>
        	</li>
		</ul>
		<div style="clear:both">&nbsp;</div>
		
		
		<!-- tooltip command -->
		
		<h2 id="command_tooltip">Tooltip</h2>
		<p class="info">Show additional info with a tooltip:</p>
		<pre>&lt;a href="#" rel="<span>jKit[tooltip:color=#fff;background=#999;text=Test Tooltip Text]</span>"&gt;Test Link&lt;/a&gt; &nbsp; &nbsp; 
&lt;a href="#" rel="<span>jKit[tooltip:color=#333;background=#E01B49;text=Test Tooltip Text 2]</span>"&gt;Test Link 2&lt;/a&gt;
&lt;a href="#" rel="<span>jKit[tooltip:classname=mytooltip;text=Test Tooltip Text 3]</span>"&gt;Test Link with a class for styling&lt;/a&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>text:</strong> <span>String</span> <span class="default">""</span></li>
			<li><strong>color:</strong> <span>CSS color</span> <span class="default">#fff</span></li>
			<li><strong>background:</strong> <span>CSS color</span> <span class="default">#000</span></li>
		</ul>
		<div class="box">
			<a href="#" rel="jKit[tooltip:color=#fff;background=#999;text=Test Tooltip Text]">Test Link</a> &nbsp; &nbsp; 
			<a href="#" rel="jKit[tooltip:color=#333;background=#E01B49;text=Test Tooltip Text 2]">Test Link 2</a> &nbsp; &nbsp;
			<a href="#" rel="jKit[tooltip:classname=mytooltip;text=Test Tooltip Text 3]">Test Link with a class for styling</a>
		</div>
		
		
		<!-- plugin command -->
		
		<h2 id="command_plugin">Plugin</h2>
		<p class="info">Register some plugins (plugins with single and multiple options are possible):</p>
		<pre>$('body').jKit({ 
	'plugins': {
		date: { 'path': "plugins/datepicker/js/datepicker.js", 'fn': 'DatePicker' },
		hint: { 'path': "plugins/jquery.ztinputhint-1.2.js", 'fn': 'ztInputHint' },
		maxlength: { 'path': "plugins/maxlength/jquery.maxlength-min.js", 'fn': 'maxlength' },
		grow: { 'path': "plugins/jquery.jgrow-0.4.js", 'fn': 'jGrow' },
		confirm: { 'path': "plugins/jquery.confirm-1.3.js", 'fn': 'confirm' },
		time: { 'path': "plugins/timePicker/jquery.timePicker.min.js", 'fn': 'timePicker' },
		mask: { 'path': "plugins/jquery.maskedinput-1.2.2.min.js", 'fn': 'mask', 'option': 'mask' }
	}
});</pre>
		<p class="info">And than apply the plugin to an element in a similar way as with native jKit commands:</p>
		<pre>&lt;input name="hint" id="hint" title="My Hint Text" rel="<span>jKit[plugin:script=hint;hintClass=hint]</span>"&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>script:</strong> <span>registered key or script path</span></li>
			<li>+ plugin specific options ...</li>
		</ul>
		<div class="box">
			<input name="hint" id="hint" title="My Hint Text" rel="jKit[plugin:script=hint;hintClass=hint]">
		</div>
		<p class="info">A few more examples, here's a growing textfield:</p>
		<pre>&lt;textarea name="comment" id="comment" rel="<span>jKit[plugin:script=grow]</span>"&gt;&lt;/textarea&gt;</pre>
		<div class="box">
			<textarea name="comment" id="comment" rel="jKit[plugin:script=grow]"></textarea>
		</div>
		<p class="info">A maximun number of characters:</p>
		<pre>>&lt;input name="tweet" id="tweet" rel="<span>jKit[plugin:script=maxlength;maxCharacters=140]</span>">&gt;</pre>
		<div class="box">
			<input name="tweet" id="tweet" rel="jKit[plugin:script=maxlength;maxCharacters=140]">
		</div>
		
		
		<!-- form command -->
		
		<h2 id="command_form">Form</h2>
		<p style="color:#ccc">An example with the Ajax Mailer that is bundled with the script:</p>
		<pre>&lt;form class="box" method="post" action="ajaxmailer.php" rel="<span>jKit[form:success=Thank you;error=Please check all fields]</span>"&gt;
...
&lt;/form&gt;</pre>
		<p style="color:#ccc">Or just validate:</p>
<pre>&lt;form class="box" method="post" action="?" rel="<span>jKit[form:validateonly=true]</span>"&gt;
...
&lt;/form&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>success:</strong> <span>Text or element ID</span></li>
			<li><strong>error:</strong> <span>Text</span></li>
			<li><strong>validateonly:</strong> <span>"yes" or "no"</span> <span class="default">no</span></li>
		</ul>
		
		<form class="box" method="post" action="?" rel="jKit[form:validateonly=true]">
			<p>
				<label for="miniusername">Benutzername:</label><br />
				<input name="miniusername" id="miniusername" rel="jKit[validate:required=true;min=3;max=10;error=Bitte gib deinen Benutzernamen ein (3-10 Zeichen)]">
			</p>
			<p>
				<label for="minipassword">Passwort:</label><br />
				<input name="minipassword" id="minipassword" type="password" rel="jKit[validate:required=true;strength=50;error=Bitte gib ein sicheres Passwort ein]">
			</p>
			<p>
				<input name="send" type="submit" value="Senden" />
			</p>
		</form>
		<div style="clear:both">&nbsp;</div>
		
		
		<!-- validate command -->
		
		<h2 id="command_validate">Validate</h2>
		<p class="info">Validation without a type, just min. and max. length and the field is required:</p>
		<pre>&lt;input name="username" id="username" rel="<span>jKit[validate:required=true;min=3;max=10;error=Bitte gib deinen Benutzernamen ein (3-10 Zeichen)]</span>"&gt;</pre>
		<p class="info">Validation with type "custom" that takes a custom function to validate:</p>
		<pre>&lt;input name="custom" id="custom" title="127-785-145" rel="<span>jKit[validate:type=custom;checkfunction=checkCustom;error=Bitte gib deinen Custom Code ein][plugin:script=hint;hintClass=hint]</span>"&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>type:</strong> <span>"email", "url", "date", "time", "phone", "float", "int", "group", "extension" or "custom"</span></li>
			<li><strong>required:</strong> <span>Bool</span> <span class="default">false</span></li>
			<li><strong>error:</strong> <span>String</span></li>
			<li><strong>min:</strong> <span>Int, Float or String</span></li>
			<li><strong>max:</strong> <span>Int, Float or String</span></li>
			<li><strong>length:</strong> <span>String length</span></li>
			<li><strong>bigger:</strong> <span>DOM Element</span></li>
			<li><strong>smaller:</strong> <span>DOM Element</span></li>
			<li><strong>older:</strong> <span>DOM Element</span></li>
			<li><strong>younger:</strong> <span>DOM Element</span></li>
			<li><strong>longer:</strong> <span>DOM Element</span></li>
			<li><strong>shorter:</strong> <span>DOM Element</span></li>
			<li><strong>strength:</strong> <span>Int 1-100</span></li>
			<li><strong>same:</strong> <span>DOM Element</span></li>
			<li><strong>different:</strong> <span>DOM Element</span></li>
			<li><strong>options:</strong> <span>Strings (comma separated)</span></li>
			<li><strong>checkfunction:</strong> <span>Function name</span></li>
			<li><strong>name:</strong> <span>Group name</span></li>
		</ul>
		
		<form method="post" action="ajaxmailer.php" rel="jKit[form:success=Vielen Dank;error=Bitte überprüfen sie nochmals alle Felder]">
		
		<input type="hidden" name="recipient" value="osxcode+jkit@gmail.com">
		<input type="hidden" name="subject" value="Example Form">
		<input type="hidden" name="code" value="123456"> <!-- <-- replace with captcha solution -->
		
		<p class="info">Example where we check if the values of two fields are the same:</p>
		<pre>&lt;input name="password" id="password" type="password" rel="<span>jKit[validate:required=true;strength=50;error=Please enter a secure password]</span>"&gt;</pre>
		<pre>&lt;input name="passwordtest" id="passwordtest" type="password" rel="<span>jKit[validate:required=true;same=#password;error=The two passwords don't match, please try again]</span>"&gt;</pre>
		<div class="box">
			<label for="password">Password:</label><br />
			<input name="password" id="password" type="password" rel="jKit[validate:required=true;strength=50;error=Please enter a secure password]">
			<br />
			<label for="passwordtest">Repeat password:</label><br />
			<input name="passwordtest" id="passwordtest" type="password" rel="jKit[validate:required=true;same=#password;error=The two passwords don't match, please try again]">
		</div>
		
		<p class="info">Phone number check (Currently supported formats: +41 78 450 45 21 or 078 450 45 21):</p>
		<pre>&lt;input name="phone" id="phone" title="+41 78 450 45 21" rel="<span>jKit[validate:type=phone;required=true;error=Please enter a valid phone number]</span>"&gt;</pre>
		<div class="box">
			<input name="phone" id="phone" title="+41 78 450 45 21" rel="jKit[validate:type=phone;required=true;error=Please enter a valid phone number]">
		</div>
		
		<p class="info">Email check:</p>
		<pre>&lt;input name="email" id="email" title="me@abc.ch" rel="<span>jKit[validate:type=email;required=true;error=Please enter a valid email address]</span>"&gt;</pre>
		<div class="box">
			<input name="email" id="email" title="me@abc.ch" rel="jKit[validate:type=email;required=true;error=Please enter a valid email address]">
		</div>
		
		<p class="info">URL check:</p>
		<pre>&lt;input name="homepage" id="homepage" title="http://www.abc.ch" rel="<span>jKit[validate:type=url;error=This isn't a valid URL]</span>"&gt;</pre>
		<div class="box">
			<input name="homepage" id="homepage" title="http://www.abc.ch" rel="jKit[validate:type=url;error=This isn't a valid URL]">
		</div>
		
		<p class="info">File extension check:</p>
		<pre>&lt;input name="avatar" type="file" id="avatar" rel="<span>jKit[validate:type=extension;options=jpg,jpeg,gif;error=Please choose a valid image format]</span>"&gt;</pre>
		<div class="box">
			<input name="avatar" type="file" id="avatar" rel="jKit[validate:type=extension;options=jpg,jpeg,gif;error=Please choose a valid image format]">
		</div>
		
		<p class="info">Check if a radiogroup has one option checked:</p>
		<pre>&lt;div id="radiogroup" rel="<span>jKit[validate:type=group;name=group1;error=Please choose one option]</span>"&gt;
	&lt;input type="radio" id="group1_milk" name="group1" value="Milk"&gt; Milk&lt;br&gt;
	&lt;input type="radio" id="group1_butter" name="group1" value="Butter"&gt; Butter&lt;br&gt;
	&lt;input type="radio" id="group1_cheese" name="group1" value="Cheese"&gt; Cheese
&lt;/div&gt;</pre>
		<div class="box">
			<div id="radiogroup" rel="jKit[validate:type=group;name=group1;error=Please choose one option]">
				<input type="radio" id="group1_milk" name="group1" value="Milk"> Milk<br>
				<input type="radio" id="group1_butter" name="group1" value="Butter"> Butter<br>
				<input type="radio" id="group1_cheese" name="group1" value="Cheese"> Cheese
			</div>
		</div>
		
		<p class="info">Check if at least one option, but not more than two are checked:</p>
		<pre>&lt;div id="checkgroup" rel="<span>jKit[validate:type=group;min=1;max=2;error=Please choose at least one option, but not more than two]</span>"&gt;
	&lt;input type="checkbox" id="group2_milk" name="group2_milk" value="Milk"&gt; Milk&lt;br&gt;
	&lt;input type="checkbox" id="group2_butter" name="group2_butter" value="Butter"&gt; Butter&lt;br&gt;
	&lt;input type="checkbox" id="group2_salt" name="group2_salt" value="Salt"&gt; Salt&lt;br&gt;
	&lt;input type="checkbox" id="group2_cheese" name="group2_cheese" value="Cheese"&gt; Cheese
&lt;/div&gt;</pre>
		<div class="box">
			<div id="checkgroup" rel="jKit[validate:type=group;min=1;max=2;error=Please choose at least one option, but not more than two]">
				<input type="checkbox" id="group2_milk" name="group2_milk" value="Milk"> Milk<br>
				<input type="checkbox" id="group2_butter" name="group2_butter" value="Butter"> Butter<br>
				<input type="checkbox" id="group2_salt" name="group2_salt" value="Salt"> Salt<br>
				<input type="checkbox" id="group2_cheese" name="group2_cheese" value="Cheese"> Cheese
			</div>
		</div>
		
		<p class="info">Date format check:</p>
		<pre>&lt;input name="mydate" id="mydate" title="Example: 21.04.12" rel="<span>jKit[validate:type=date;required=true;error=Please add a valid date]</span>"&gt;</pre>
		<div class="box">
			<input name="mydate" id="mydate" title="Example: 21.04.12" rel="jKit[validate:type=date;required=true;error=Please add a valid date]">
		</div>
		
		<p class="info">Time format check in combination with a time select plugin:</p>
		<pre>&lt;input name="mytime" id="mytime" title="Example: 12:05" rel="<span>jKit[validate:type=time;required=true;error=Please add a time][plugin:script=time]</span>"&gt;</pre>
		<div class="box">
			<input name="mytime" id="mytime" title="Example: 12:05" rel="jKit[validate:type=time;required=true;error=Please add a time][plugin:script=time]">
		</div>
		
		<p class="info">Integer check that is above zero:</p>
		<pre>&lt;input name="myint" id="myint" rel="<span>jKit[validate:type=int;min=1;required=true;error=Please add a valid positiv Integer above zero]</span>"&gt;</pre>
		<div class="box">
			<input name="myint" id="myint" rel="jKit[validate:type=int;min=1;required=true;error=Please add a valid positiv Integer above zero]">
		</div>
		
		<p class="info">Float check that is between 1 and 2.5:</p>
		<pre>&lt;input name="myfloat" id="myfloat" title="1.72" rel="<span>jKit[validate:type=float;min=1;max=2.5;required=true;error=Please enter a float between 1 and 2.5]</span>"&gt;</pre>
		<div class="box">
			<input name="myfloat" id="myfloat" title="1.72" rel="jKit[validate:type=float;min=1;max=2.5;required=true;error=Please enter a float between 1 and 2.5]">
		</div>
		
		<p class="info">String length check (exactly six characters):</p>
		<pre>&lt;input name="length" id="length" rel="<span>jKit[validate:length=6;error=Please enter exactly six characters]</span>"&gt;</pre>
		<div class="box">
			<input name="length" id="length" rel="jKit[validate:length=6;error=Please enter exactly six characters]">
		</div>
		
		<p class="info">Submit confirmation with a plugin (validation errors will show up after clicking "yes"):</p>
		<pre>&lt;input name="send" type="submit" value="Senden" rel="<span>jKit[plugin:script=confirm;msg=Everything filled out correctly?]</span>"&gt;</pre>
		<div class="box">
			<input name="send" type="submit" value="Senden" rel="jKit[plugin:script=confirm;msg=Everything filled out correctly?]">
		</div>
		
		</form>
		<div style="clear:both">&nbsp;</div>
		
		<script>
			var checkCustom = function(string){

				var filter = /^[0-9]{3}-[0-9]{3}-[0-9]{3}$/i;
				return filter.test(string);

			}
		</script>
		
		
		<!-- lorem command -->
		
		<h2 id="command_lorem">Lorem</h2>
		<pre>&lt;div class="box" id="loremdiv" rel="<span>jKit[lorem:paragraphs=2]</span>"&gt;&lt;/div&gt;</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>paragraphs:</strong> <span>Int</span> <span class="default">0</span></li>
			<li><strong>length:</strong> <span>Int</span> <span class="default">100</span></li>
			<li><strong>random:</strong> <span>"yes" or "no"</span> <span class="default">no</span></li>
		</ul>
		<div class="box" id="loremdiv" rel="jKit[lorem:paragraphs=2]"></div>
		
		
		<!-- binding command -->
		
		<h2 id="command_binding">Binding</h2>
		<pre>&lt;input type="text" id="bindingsource" value="test"&gt;
&lt;p style="font-size:32px" rel="<span>jKit[binding:selector=#bindingsource;mode=bindingFilter]</span>"&gt;&lt;/p&gt;</pre>
		<p class="info">The custom function used:</p>
		<pre>var bindingFilter = function(value,el){
	el.text(value.length+' chars entered');
}</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>selector:</strong> <span>String: '#mydiv' or '#mydiv1|#mydiv2|#mydiv3' or "this"</span> <span class="default">''</span></li>
			<li><strong>source:</strong> <span>"text", "html", "val", "attr.id", "css.height", "css.height.max"</span> <span class="default">val</span></li>
			<li><strong>variable:</strong> <span>String</span> <span class="default">''</span></li>
			<li><strong>mode:</strong> <span>"text", "html", "val", "attr.id", "css.height", or some custom function</span> <span class="default">text</span></li>
			<li><strong>interval:</strong> <span>Int (-1 = no interval)</span> <span class="default">100</span></li>
		</ul>
		<div class="box" id="bindingdiv">
			<input type="text" id="bindingsource" value="test">
			<p style="font-size:32px" rel="jKit[binding:selector=#bindingsource;mode=bindingFilter]"></p>
		</div>
		<p class="info">Binding the width of the background image (try resizing the browser window):</p>
		<pre>&lt;h3 style="margin:12px;font-size:32px;text-align:center" rel="<span>jKit[binding:selector=#jkit-background;source=css.width;mode=text]</span>"&gt;&lt;/h3&gt;</pre>
		<div class="box" id="bindingdiv2">
			<h3 style="margin:12px;font-size:32px;text-align:center" rel="jKit[binding:selector=#jkit-background;source=css.width;mode=text]"></h3>
		</div>
		<p class="info">Making three divs the same height:</p>
		<pre>On every div: rel="<span>jKit[binding:selector=#d1|#d2|#d3;source=css.height.max;mode=css.height</span>]</pre>
		<div class="box" id="bindingdiv3" style="overflow:hidden">
			<div class="box" id="d1" style="width:255px;float:left;margin-right:10px" rel="jKit[binding:selector=#d1|#d2|#d3;source=css.height.max;mode=css.height]">
				<p>
					klfhdkljsfhg jdfjg dfjhg jfdhgs djhgjh dsfhg jdfhsgjk hfjkghs djkfhgkfldshjfgh dfskjhg kfdhgsk kjls v cb fsgbh g bf gb gfsh ff gh h ft h dfg hgfdh gfd h  hgf dh gf dh fgd df sd fa df as d f asd fdsafdsadfdfa  dfsafdsa f dfsa ffdsa fsd f ds f sd af dsf 
				</p>
			</div>
			<div class="box" id="d2" style="width:255px;float:left;margin-right:10px" rel="jKit[binding:selector=#d1|#d2|#d3;source=css.height.max;mode=css.height]">
				<p>
					dhf kljdhgsjklfhglkfd shg ksl
				</p>
			</div>
			<div class="box" id="d3" style="width:255px;float:left;margin-right:10px" rel="jKit[binding:selector=#d1|#d2|#d3;source=css.height.max;mode=css.height]">
				<p>
					 fhjkldgh fdhgjlfdhs gdfhjg hfsdjhg jfdshg jfhdjls hgjh ghfdsjö hfk fg sdf g fd gs fg s f dfgsdg  dfgs fd g fds gdfsg fd s fgd sfgdfsgfds fgdsgfds
				</p>
			</div>
		</div>
		<p class="info">Hiding empty div:</p>
		<pre>rel="<span>jKit[binding:selector=this;source=text;mode=css.display</span>]</pre>
		<div class="box" id="bindingdiv4">
			<h3>Paragraph with content</h3>
			<p style="border:1px #f30 dotted" rel="jKit[binding:selector=this;source=text;mode=css.display]">dfsadf dsf sdf dsf dsafsdf sdaf dsf dsafsda</p>
			<h3>Paragraph without content</h3>
			<p style="border:1px #f30 dotted" rel="jKit[binding:selector=this;source=text;mode=css.display]"></p>
		</div>
		
		
		<!-- macro command -->
		
		<h2 id="command_macro">Macro</h2>
		<p class="info">Not really a command, but a way to create your own custom commands or as we named them, macros. You can create macros for stuff you're often using, let's say you want to have easier access to the above code for hiding an empty div, than just add it as a macro on init like this:</p>
		<pre>&lt;script type="text/javascript"&gt;
$(document).ready(function(){
	<span>$('body').jKit({ macros: { 'hide-if-empty': 'binding:selector=this;source=text;mode=css.display' } });</span>
});
&lt;/script&gt;</pre>
		<p class="info">Now you can use it in a way that's much easier to remember:</p>
		<pre>rel="<span>jKit[hide-if-empty]</span>"</pre>
		
		<script>
			var bindingFilter = function(value,el){
				el.text(value.length+' chars entered');
			}
		</script>
		
		
		
		<!-- template command -->
		
		<h2 id="command_template">Template</h2>
		<p class="info">Define a template like this:</p>
		<pre>rel="<span>jKit[template:action=set;name=mylist;vars=heading,text,info]</span>"</pre>
		<p class="info">And than apply the template like this:</p>
		<pre>rel="<span>jKit[template:action=apply;children=li;name=mylist]</span>"</pre>
		
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>action:</strong> <span>String: 'set' or 'apply'</span> <span class="default">set</span></li>
			<li><strong>name:</strong> <span>String</span> <span class="default">template</span></li>
			<li><strong>vars:</strong> <span>Comma separated class names of content elements</span></li>
			<li><strong>children:</strong> <span>String (optional)</span></li>
		</ul>
		
		<p class="info">Have a look at the source of this example to get a better idea:</p>
		
		<div class="box">
		
			<div rel="jKit[template:action=set;name=mylist;vars=heading,text,info]" style="display:none">
				<div class="mylist">
					<span class="if-entry-first entrynumber">First entry:</span>
					<span class="if-entry-3 entrynumber"> ... 3rd entry ...</span>
					<span class="if-entry-last entrynumber"> ... last entry.</span>
					<h3>
						<div><span class="info">Info Text</span></div>
						Title: "<span class="heading">Heading Text</span>"
					</h3>
					<p class="if-text">
						<strong>Description:</strong> <span class="text">Text ...</span>
					</p>
					<div class="if-text">&nbsp;</div>
				</div>
			</div>
		
			<ul class="myul" rel="jKit[template:action=apply;children=li;name=mylist]">
				<li>
					<h3 class="heading">List Entry 1</h3>
					<p class="info">250 character jKit lorem</p>
					<p class="text"><span rel="jKit[lorem:length=250]"></span></p>
				</li>
				<li>
					<h3 class="heading">List Entry 2</h3>
					<p class="info">350 character jKit lorem</p>
					<p class="text"><span rel="jKit[lorem:length=350]"></span></p>
				</li>
				<li>
					<h3 class="heading">List Entry 3</h3>
					<p class="info">150 character jKit lorem</p>
					<p class="text"><span rel="jKit[lorem:length=150]"></span></p>
				</li>
				<li>
					<h3 class="heading">List Entry 4</h3>
					<p class="info">2 paragraph jKit lorem</p>
					<p class="text"><span rel="jKit[lorem:paragraphs=2]"></span></p>
				</li>
				<li>
					<h3 class="heading">List Entry 5</h3>
					<p class="info">Without text (removed paragraph) ...</p>
				</li>
			</ul>
		</div>
		
		
		<h2 id="command_chart">Chart</h2>
		<p class="info">Create a table with your data like this:</p>
		<pre rel="jKit[encode]"><table rel="jKit[chart:style=bar;units=USD;align=vertical;max=1000]">
	<thead>
		<tr>
			<th class="label">Year</th>
			<th>Jan.</th><th>Feb.</th><th>Mar.</th><th>Apr.</th><th>Mai</th><th>Jun.</th><th>Jul.</th><th>Aug.</th><th>Sep.</th><th>Okt.</th><th>Nov.</th><th>Dez.</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="label">2011</th>
			<th>500</th><th>124</th><th>254</th><th>124</th><th>245</th><th>233</th><th>125</th><th>147</th><th>189</th><th>156</th><th>164</th><th>144</th>
		</tr>
		<tr>
			<th class="label">2012</th>
			<th>214</th><th>124</th><th>127</th><th>452</th><th>421</th><th>12</th><th>127</th><th>189</th><th>145</th><th>123</th><th>741</th><th></th>
		</tr>
	</tbody>
</table></pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>max:</strong> <span>Int</span> <span class="default">0</span></li>
			<li><strong>delaysteps:</strong> <span>Int</span> <span class="default">100</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">500</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<div class="box">
		
			<table rel="jKit[chart:style=bar;units=USD;align=vertical;max=1000]">
				<thead>
					<tr>
						<th class="label">Year</th>
						<th>Jan.</th><th>Feb.</th><th>Mar.</th><th>Apr.</th><th>Mai</th><th>Jun.</th><th>Jul.</th><th>Aug.</th><th>Sep.</th><th>Okt.</th><th>Nov.</th><th>Dez.</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="label">2011</th>
						<th>500</th><th>124</th><th>254</th><th>124</th><th>245</th><th>233</th><th>125</th><th>147</th><th>189</th><th>156</th><th>164</th><th>144</th>
					</tr>
					<tr>
						<th class="label">2012</th>
						<th>214</th><th>124</th><th>127</th><th>452</th><th>421</th><th>12</th><th>127</th><th>189</th><th>145</th><th>123</th><th>741</th><th></th>
					</tr>
				</tbody>
			</table>
			
		</div>
		
		
		<h2 id="command_encode">Encode</h2>
		<pre>rel="<span>jKit[encode:format=text</span>]</pre>
		<ul class="options">
			<li><strong>format:</strong> <span>String "code", "text", "esc" or "url"</span> <span class="default">"code"</span></li>
		</ul>
		<p class="info">Demos of the four decoding types, "code", "text", "esc" and "url":</p>
		<pre rel="jKit[encode]"><h2 id="command_encode">Encode</h2></pre>
		<div class="box" rel="jKit[encode:format=text]">
			<h2 id="command_encode">Encode</h2>
		</div>
		<div class="box" rel="jKit[encode:format=esc]">
			<h2 id="command_encode">Encode</h2>
		</div>
		<div class="box" rel="jKit[encode:format=uri]">
			<h2 id="command_encode">Encode</h2>
		</div>
		<p class="info">Here's an example where we first use the text format and than we're using an uppercase format that we added through jKits replacements feature (check the head source):</p>
		<div class="box" rel="jKit[encode:format=text][encode:format=uppercase]">
			<h2 id="command_encode">Encode</h2>
		</div>
		
		
		
		<h2 id="command_split">Split</h2>
		<pre>rel="<span>jKit[split]</span>"</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>separator:</strong> <span>String</span> <span class="default">""</span></li>
			<li><strong>container:</strong> <span>String (DOM element type)</span> <span class="default">"span"</span></li>
			<li><strong>before:</strong> <span>String</span> <span class="default">""</span></li>
			<li><strong>after:</strong> <span>String</span> <span class="default">""</span></li>
		</ul>
		<p class="info">Splitting a comma separated string into a "ul > li" list:</p>
		<pre rel="jKit[encode]"><div class="box" rel="jKit[split:separator=, ;container=li;before=<ul>;after=</ul>]">
	Sun, Stars, Moon, Asteroid
</div></pre>
		<div class="box" rel="jKit[split:separator=, ;container=li;before=<ul>;after=</ul>]">
			Sun, Stars, Moon, Asteroid
		</div>
		
		
		
		<h2 id="command_live">Live</h2>
		<pre>rel="<span>jKit[live]</span>"</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>interval:</strong> <span>Int (seconds)</span> <span class="default">60</span></li>
		</ul>
		<p class="info">Reload a (webcam) image every 10 seconds:</p>
		<pre rel="jKit[encode]"><img src="http://www.pradaschier.ch/images/cam/image.jpg" width="500" rel="jKit[live:interval=10]"></pre>
		<div class="box">
			<img src="http://www.pradaschier.ch/images/cam/image.jpg" width="500" rel="jKit[live:interval=10]">
		</div>
		
		
		
		<h2 id="command_key">Key</h2>
		<pre>rel="<span>jKit[key:code=ctrl+shift+g]</span>"</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>code:</strong> <span>String (keycode combination, for example: "ctrl+shift+g")</span></li>
		</ul>
		<p class="info">Control links with your keyboard by adding keyboard shortcuts to them:</p>
		<div class="box">
			<ul>
				<li><a href="#command_split" rel="jKit[key:code=shift+up]">Move to the split command with key combo "shift+up"</a></li>
				<li><a href="http://fredibach.ch" target="_blank" rel="jKit[key:code=alt+shift+o]">Open a website in a blank window with "alt+shift+o"</a></li>
				<li><a href="#" onclick="alert('test')" rel="jKit[key:code=ctrl+shift+a]">Open an onclick alert with "ctrl+shift+a"</a></li>
				<li><a href="#" onclick="alert('f3 pressed')" rel="jKit[key:code=f3]">Open an onclick alert with "f3"</a></li>
			</ul>
		</div>
		
		
		
		<h2 id="command_ajax">Ajax</h2>
		<pre>rel="<span>jKit[ajax:element=#ajaxdiv]</span>"</pre>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>href:</strong> <span>String (url)</span> <span class="default">element href attribute</span></li>
			<li><strong>element:</strong> <span>String (dom element)</span> <span class="default">""</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">250</span></li>
			<li><strong>animation:</strong> <span>"fade", "slide" or "none"</span> <span class="default">slide</span></li>
			<li><strong>easing:</strong> <span>Easing plugin options</span> <span class="default">linear</span></li>
		</ul>
		<p class="info">Easely convert normal href links into ajax links:</p>
		<div class="box">
			<a href="ajax_sample_content_1.html" rel="jKit[ajax:element=#ajaxdiv]">Link 1</a>, <a href="ajax_sample_content_2.html" rel="jKit[ajax:element=#ajaxdiv]">Link 2</a>
			<div id="ajaxdiv">
				Initial text ...
			</div>
		</div>
		<p class="info">Load content into a div on page load (after the DOM is ready):</p>
		<pre rel="jKit[encode]"><div class="box" rel="jKit[ajax:when=load;href=ajaxcontent1.html]"></div></pre>
		<div class="box" rel="jKit[ajax:when=load;href=ajaxcontent1.html]">
			<!-- load this stuff after the dom has loaded -->
		</div>
		<p class="info">Lazy load content into a div as soon as the element comes into the viewport:</p>
		<pre rel="jKit[encode]"><div class="box" rel="jKit[ajax:when=viewport;href=ajaxcontent2.html]"></div></pre>
		<div class="box" rel="jKit[ajax:when=viewport;href=ajaxcontent2.html]">
			<!-- load this stuff after the div is inside the viewport -->
		</div>
		<p class="info">Lazy load an image:</p>
		<pre rel="jKit[encode]"><img src="images/fb_logo_min.jpg" rel="jKit[ajax:when=viewport;src=images/fb_logo_full.jpg]"></pre>
		<div class="box">
			<img src="images/fb_logo_min.jpg" rel="jKit[ajax:when=viewport;src=images/fb_logo_full.jpg]">
		</div>
		
		
		
		<h2 id="command_replace">Replace</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>modifier:</strong> <span>String</span> <span class="default">"g"</span></li>
			<li><strong>search:</strong> <span>String</span> <span class="default">""</span></li>
			<li><strong>replacement:</strong> <span>String</span> <span class="default">""</span></li>
		</ul>
		<p class="info">Replace the name "Fredi" with "Fredi Bach" in bold:</p>
		<pre>rel="<span>jKit[replace:search=Fredi;replacement=&lt;strong&gt;Fredi Bach&lt;/strong&gt;]</span>"</pre>
		<div class="box" rel="jKit[replace:search=Fredi;replacement=<strong>Fredi Bach</strong>]">
			Hi, my name is Fredi. I'm a programmer. Fredi is also a designer.
		</div>
		<p class="info">Replace all numbers with XXX:</p>
		<pre>rel="<span>jKit[replace:search=[0-9]+;replacement=XXX]</span>"</pre>
		<div class="box" rel="jKit[replace:search=[0-9]+;replacement=XXX]">
			This product costs 123 dollars more than the other product that costs just 77 dollars.
		</div>
		
		
		
		<h2 id="command_cycle">Cycle</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>what:</strong> <span>String, examples: "class", "html", "attr.attributename", "css.cssoption"</span> <span class="default">"class"</span></li>
			<li><strong>where:</strong> <span>String</span> <span class="default">"li"</span></li>
			<li><strong>scope:</strong> <span>String "children", "all"</span> <span class="default">"children"</span></li>
			<li><strong>sequence:</strong> <span>String (comma separated)</span> <span class="default">"odd,even"</span></li>
		</ul>
		<p class="info">Add "odd" and "even" classes to the immediate children lis:</p>
		<pre>rel="<span>jKit[cycle:what=class;where=li;scope=children;sequence=odd,even]</span>"</pre>
		<div class="box">
			<ul rel="jKit[cycle:what=class;where=li;scope=children;sequence=odd,even]">
				<li>List entry 1</li>
				<li>List entry 2</li>
				<li>List entry 3</li>
				<li>
					List entry 4
					<ul>
						<li>Sub entry 1</li>
						<li>Sub entry 2</li>
						<li>Sub entry 3</li>
					</ul>
				</li>
				<li>List entry 5</li>
			</ul>
		</div>
		<p class="info">Add "odd" and "even" classes to all lis:</p>
		<pre>rel="<span>jKit[cycle:what=class;where=li;scope=all;sequence=odd,even]</span>"</pre>
		<div class="box">
			<ul rel="jKit[cycle:what=class;where=li;scope=all;sequence=odd,even]">
				<li>List entry 1</li>
				<li>List entry 2</li>
				<li>List entry 3</li>
				<li>
					List entry 4
					<ul>
						<li>Sub entry 1</li>
						<li>Sub entry 2</li>
						<li>Sub entry 3</li>
					</ul>
				</li>
				<li>List entry 5</li>
			</ul>
		</div>
		<p class="info">Or do some direct inline css styling:</p>
		<pre>rel="<span>jKit[cycle:what=css.color;where=li;scope=all;sequence=#000,#666]</span>"</pre>
		<div class="box">
			<ul rel="jKit[cycle:what=css.color;where=li;scope=all;sequence=#000,#666]">
				<li>List entry 1</li>
				<li>List entry 2</li>
				<li>List entry 3</li>
				<li>
					List entry 4
					<ul>
						<li>Sub entry 1</li>
						<li>Sub entry 2</li>
						<li>Sub entry 3</li>
					</ul>
				</li>
				<li>List entry 5</li>
			</ul>
		</div>
		<p class="info">And of course you can cycle with more than two options, as many as you want actually:</p>
		<pre>rel="<span>jKit[cycle:what=css.color;where=li;scope=all;sequence=#000,#03f,#f30]</span>"</pre>
		<div class="box">
			<ul rel="jKit[cycle:what=css.color;where=li;scope=all;sequence=#000,#03f,#f30]">
				<li>List entry 1</li>
				<li>List entry 2</li>
				<li>List entry 3</li>
				<li>
					List entry 4
					<ul>
						<li>Sub entry 1</li>
						<li>Sub entry 2</li>
						<li>Sub entry 3</li>
					</ul>
				</li>
				<li>List entry 5</li>
			</ul>
		</div>
		<p class="info">And you can of course combine it with other commands, for example to create rainbow text:</p>
		<pre>rel="<span>jKit[split:container=span][cycle:what=css.color;where=span;sequence=#FF0000,#FF7F00,#FFFF00,#00FF00,#0000FF,#6600FF,#8B00FF]</span>"</pre>
		<div class="box">
			<div style="background:#fff;font-size:20px;font-weight:bold" rel="jKit[split:container=span][cycle:what=css.color;where=span;sequence=#FF0000,#FF7F00,#FFE100,#00FF00,#0000FF,#6600FF,#8B00FF]">This is some example text, it will look like a rainbow ... hopefully.</div>
		</div>
		<p class="info">Or just affect every 4th character:</p>
		<pre>rel="<span>jKit[split:container=span][cycle:what=css.color;where=span;sequence=,,,#f30]</span>"</pre>
		<div class="box">
			<div style="background:#fff;font-size:20px;font-weight:bold" rel="jKit[split:container=span][cycle:what=css.color;where=span;sequence=,,,#f30]">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div>
		</div>
		
		
		
		<h2 id="command_fontsize">Fontsize</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>steps:</strong> <span>Int</span> <span class="default">2</span></li>
			<li><strong>min:</strong> <span>Int</span> <span class="default">6</span></li>
			<li><strong>max:</strong> <span>Int</span> <span class="default">72</span></li>
			<li><strong>affected:</strong> <span>String (jQuery selector)</span> <span class="default">"p"</span></li>
		</ul>
		<pre rel="jKit[encode]">
			<input type="button" value="bigger" rel="jKit[fontsize:steps=2;affected=#fs-example p]">
			<input type="button" value="smaller" rel="jKit[fontsize:steps=-2;affected=#fs-example p]">
		</pre>
		<div class="box">
			<input type="button" value="bigger" rel="jKit[fontsize:steps=2;affected=#fs-example p]">
			<input type="button" value="smaller" rel="jKit[fontsize:steps=-2;affected=#fs-example p]">
			<div id="fs-example">
				<h3>Some heading</h3>
				<p>Some text ...<p>
				<p>Some more text ...</p>
			</div>
		</div>
		
		
		
		<h2 id="command_swap">Swap</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>versions:</strong> <span>String (comma separated)</span> <span class="default">"_off,_on"</span></li>
		</ul>
		<p class="info">Very easely swap images with preloaded image replacements:</p>
		<pre rel="jKit[encode]"><img src="images/sample_button_off.png" rel="jKit[swap]"></pre>
		<div class="box">
			<img src="images/sample_button_off.png" rel="jKit[swap]">
		</div>
		
		
		<h2 id="command_ticker">Ticker</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>delay:</strong> <span>Int (Milliseconds)</span> <span class="default">2000</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">100</span></li>
		</ul>
		<pre rel="jKit[encode]">
		<ul rel="jKit[ticker]">
			<li><a href="http://fredibach.ch" target="_blank">Ticker Text 1</a></li>
			<li><a href="index.php">Another one</a></li>
			<li>The third ticker text</li>
			<li>Even more text for the ticker</li>
		</ul></pre>
		<div class="box">
			<ul rel="jKit[ticker]">
				<li><a href="http://fredibach.ch" target="_blank">Ticker Text 1</a></li>
				<li><a href="index.php">Another one</a></li>
				<li>The third ticker text</li>
				<li>Even more text for the ticker</li>
			</ul>
		</div>
		
		
		<h2 id="command_sort">Sort</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>what:</strong> <span>"text", "html" or "class"</span> <span class="default">"text"</span></li>
			<li><strong>by:</strong> <span>"alphabetic" or "date"</span> <span class="default">"alphabetic"</span></li>
			<li><strong>start:</strong> <span>Int</span> <span class="default">0</span></li>
			<li><strong>end:</strong> <span>Int</span> <span class="default">0</span></li>
		</ul>
		<p class="info">Sort table rows on click (up an d down):</p>
		<pre rel="jKit[encode]">
		<table width="100%">
			<thead>
				<tr>
					<th data-jkit="[sort:what=text;start=4]">Name</th>
					<th data-jkit="[sort:what=text]">Location</th>
					<th data-jkit="[sort:what=text;by=date]">Birthday</th>
					<th data-jkit="[sort:what=text]">Category</th>
					<th data-jkit="[sort:what=text]">Status</th>
					<th data-jkit="[sort:what=text;start=2]">Superior</th>
					<th data-jkit="[sort:what=text;by=num]">Price (CHF)</th>
				</tr>
			</thead>
			<tbody>
				<tr><td>Mr. Max Keller</td><td>CH-7278 Davos Monstein</td><td>1-29-1986</td><td>freelancer</td><td>active</td><td>#120</td><td>1.00</td></tr>
				<tr><td>Ms. Sophia Roth</td><td>CH-3186 D&uuml;dingen</td><td>2-16-1955</td><td>freelancer</td><td>active</td><td>#120</td><td>25.25</td></tr>
				<tr><td>Mr. Fredi Baumann</td><td>CH-6543 Arvigo</td><td>11-21-1993</td><td>freelancer</td><td>active</td><td></td><td>2.99</td></tr>
				<tr><td>Ms. Hannah Zimmermann</td><td>LI-9493 Mauren</td><td>6-26-1967</td><td>freelancer</td><td>active</td><td>#1168</td><td>48.95</td></tr>
				<tr><td>Ms. Maja Brunner</td><td>D-21207 Seevetal</td><td>10-22-1934</td><td>trainee</td><td>active</td><td>#120</td><td>200.10</td></tr>
				<tr><td>Mr. Tom Fischer</td><td>LI-9492 Eschen</td><td>5-19-1955</td><td>freelancer</td><td>inactive</td><td>#1168</td><td>-5.05</td></tr>
				<tr><td>Ms. Alina Gerber</td><td>D-21710 Engelschoff</td><td>10-15-1981</td><td>employee</td><td>active</td><td>#1168</td><td>10</td></tr>
				<tr><td>Mr. Tim Gerber</td><td>CH-6543 Arvigo</td><td>12-8-1943</td><td>freelancer</td><td>active</td><td>#120</td><td>4721.45</td></tr>
				<tr><td>Mr. Felix Meier</td><td>LI-9486 Schaanwald</td><td>8-26-1975</td><td>guest</td><td>active</td><td>#120</td><td>12.55</td></tr>
				<tr><td>Mr. Fredi M&uuml;ller</td><td>LI-9486 Schaanwald</td><td>10-24-1953</td><td>trainee</td><td>active</td><td>#120</td><td>354.50</td></tr>
				<tr><td>Mr. Tim Gerber</td><td>CH-1773 L&eacute;chelles</td><td>12-25-1966</td><td>freelancer</td><td>active</td><td></td><td>42.85</td></tr>
				<tr><td>Ms. Lilli Meyer</td><td>D-21207 Seevetal</td><td>11-29-1938</td><td>guest</td><td>active</td><td></td><td>87.41</td></tr>
				<tr><td>Ms. Emilie Fischer</td><td>D-04299 Leipzig</td><td>11-7-1942</td><td>freelancer</td><td>active</td><td>#463</td><td>354.01</td></tr>
				<tr><td>Mr. Fredi Graf</td><td>CH-6534 S. Vittore</td><td>12-7-1971</td><td>employee</td><td>active</td><td>#120</td><td>14.12</td></tr>
				<tr><td>Ms. Cordelia Weber</td><td>CH-6543 Arvigo</td><td>2-23-1967</td><td>employee</td><td>active</td><td>#120</td><td>10.25</td></tr>
			</tbody>
		</table>
		</pre>
		<div class="box">
			<table width="100%">
				<thead>
					<tr>
						<th data-jkit="[sort:what=text;start=4]">Name</th>
						<th data-jkit="[sort:what=text]">Location</th>
						<th data-jkit="[sort:what=text;by=date]">Birthday</th>
						<th data-jkit="[sort:what=text]">Category</th>
						<th data-jkit="[sort:what=text]">Status</th>
						<th data-jkit="[sort:what=text;start=2]">Superior</th>
						<th data-jkit="[sort:what=text;by=num]">Price (CHF)</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Mr. Max Keller</td><td>CH-7278 Davos Monstein</td><td>1-29-1986</td><td>freelancer</td><td>active</td><td>#120</td><td>1.00</td></tr>
					<tr><td>Ms. Sophia Roth</td><td>CH-3186 D&uuml;dingen</td><td>2-16-1955</td><td>freelancer</td><td>active</td><td>#120</td><td>25.25</td></tr>
					<tr><td>Mr. Fredi Baumann</td><td>CH-6543 Arvigo</td><td>11-21-1993</td><td>freelancer</td><td>active</td><td></td><td>2.99</td></tr>
					<tr><td>Ms. Hannah Zimmermann</td><td>LI-9493 Mauren</td><td>6-26-1967</td><td>freelancer</td><td>active</td><td>#1168</td><td>48.95</td></tr>
					<tr><td>Ms. Maja Brunner</td><td>D-21207 Seevetal</td><td>10-22-1934</td><td>trainee</td><td>active</td><td>#120</td><td>200.10</td></tr>
					<tr><td>Mr. Tom Fischer</td><td>LI-9492 Eschen</td><td>5-19-1955</td><td>freelancer</td><td>inactive</td><td>#1168</td><td>-5.05</td></tr>
					<tr><td>Ms. Alina Gerber</td><td>D-21710 Engelschoff</td><td>10-15-1981</td><td>employee</td><td>active</td><td>#1168</td><td>10</td></tr>
					<tr><td>Mr. Tim Gerber</td><td>CH-6543 Arvigo</td><td>12-8-1943</td><td>freelancer</td><td>active</td><td>#120</td><td>4721.45</td></tr>
					<tr><td>Mr. Felix Meier</td><td>LI-9486 Schaanwald</td><td>8-26-1975</td><td>guest</td><td>active</td><td>#120</td><td>12.55</td></tr>
					<tr><td>Mr. Fredi M&uuml;ller</td><td>LI-9486 Schaanwald</td><td>10-24-1953</td><td>trainee</td><td>active</td><td>#120</td><td>354.50</td></tr>
					<tr><td>Mr. Tim Gerber</td><td>CH-1773 L&eacute;chelles</td><td>12-25-1966</td><td>freelancer</td><td>active</td><td></td><td>42.85</td></tr>
					<tr><td>Ms. Lilli Meyer</td><td>D-21207 Seevetal</td><td>11-29-1938</td><td>guest</td><td>active</td><td></td><td>87.41</td></tr>
					<tr><td>Ms. Emilie Fischer</td><td>D-04299 Leipzig</td><td>11-7-1942</td><td>freelancer</td><td>active</td><td>#463</td><td>354.01</td></tr>
					<tr><td>Mr. Fredi Graf</td><td>CH-6534 S. Vittore</td><td>12-7-1971</td><td>employee</td><td>active</td><td>#120</td><td>14.12</td></tr>
					<tr><td>Ms. Cordelia Weber</td><td>CH-6543 Arvigo</td><td>2-23-1967</td><td>employee</td><td>active</td><td>#120</td><td>10.25</td></tr>
				</tbody>
			</table>
		</div>
		
	
		<h2 id="command_zoom">Zoom</h2>
		<h4>Options:</h4>
		<ul class="options">
			<li><strong>scale:</strong> <span>Int</span> <span class="default">2</span></li>
			<li><strong>speed:</strong> <span>Int or "fast", "slow" (Milliseconds)</span> <span class="default">150</span></li>
		</ul>
		<p class="info">Zoom an image four times (the image has to be 4 times bigger than the embedded size!):</p>
		<pre rel="jKit[encode]"><img src="images/newyorkcity_1280x800.jpg" width="320" rel="jKit[zoom]"></pre>
		<div class="box"> 
			<img src="images/newyorkcity_1280x800.jpg" width="640" rel="jKit[zoom]">
		</div>
	
	
		
		<div id="footer">
			<div>jKit Facebook Page: <a href="http://www.facebook.com/jquery.jkit" target="_blank">www.facebook.com/jquery.jkit</a></div>
			<div>jKit Google+ Page: <a href="https://plus.google.com/108788332827966881496" target="_blank">plus.google.com/108788332827966881496</a></div>
			<div>My Facebook Profile: <a href="http://www.facebook.com/fredi.bach.ch/" target="_blank">www.facebook.com/fredi.bach.ch</a></div>
			<div>My Google+ Profile: <a href="http://www.fredibach.ch/+" target="_blank">www.fredibach.ch/+</a></div>
			<div>My personal Homepage: <a href="http://www.fredibach.ch/" target="_blank">www.fredibach.ch</a></div>
			<div>My Other Plugins:  <a href="http://www.fredibach.ch/jquery-plugins/" target="_blank">www.fredibach.ch/jquery-plugins</a></div>
			<div>My Next Big Adventure:  <a href="http://www.kiliadventure.ch" target="_blank">www.kiliadventure.ch</a></div>
		</div>
		
		<p style="color:#888;text-align:center">©2012 Fredi Bach</p>
		
	</div>
</body>
</html>