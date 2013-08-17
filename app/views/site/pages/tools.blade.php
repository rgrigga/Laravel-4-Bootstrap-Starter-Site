@extends('site.layouts.bs3')

@section('main')

<!-- <a href="http://www.bootstrapcdn.com/">http://www.bootstrapcdn.com/</a> -->

<!-- http://css-tricks.com/snippets/css/prevent-long-urls-from-breaking-out-of-container/ -->

<style>

	.jumbotron img{
		max-width: 100%;
	}
	/*.jumbotron{*/
		/*font-family: font-awesome;*/
	/*}*/
	/*.golf {*/
		/*color: white;*/
		/*background-color: #4C58AD;*/
		/*background-opacity:50%;*/
		/*font-family: font-awesome;*/
		/*margin:10px;*/
		/*border-radius: 30px;*/
	    /*background-color: #cccccc;*/
	    /*box-shadow: 10px 10px 5px #666666;*/
	    /*padding: 0px;*/
	    /*border-width: 0px;*/
  		/*border-color: #4C58AD;*/
	/*}*/

	.thumbnail img {
		max-width: 100%;
	}

</style>

<div class="jumbotron">


	<h1>Tools<small> building blocks for this site</small></h1>
	<img src="http://gristech.com/img/mini-tools.jpg" alt="">
	<p>If you're interested...</p>
	<h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple</em>
	</h5>

	<!-- <!- our new, semanticized HTML --> -->
<article>
  <section class="main">secion.main</section>
  <aside><a href="#" class="annoying">Click me!</a></aside>
</article>

</div>
<!-- jumbotron -->


<style>

.delta img{
	width: 100%;
}
.delta { 
	margin-top: 20px;
   position: relative; 
   width: 100%;  /*for IE 6 */

   background-color: #34495e;
   /*background-color: #cccccc;*/
    /*box-shadow: 10px 10px 5px #666666;*/
}

.delta h1, h4{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   width: 100%; 
}


.delta h4 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.delta p { 

}

.delta h1 span {
	color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.6);
   padding: 10px; 
}

.kilo p{ 
   position: absolute; 
   /*top: 50px; */
   /*left: 0; */
   /*width: 100%; */

	top: 30%;
	left: 10%;

   color: white; 
   font:  20px/32px Helvetica, Sans-Serif; 
   /*letter-spacing: 1px;*/
   background: rgb(0, 0, 0); 
   background: rgba(0, 0, 0, 0.6);
   opacity: 70%;
   padding: 20px; 
   /*float: right;*/
   max-width: 80%;
}

.foxtrot{
	background-color: #666666;
}

p.photocredit {
	font-style: italic;
	font-size: small;
	color: #333333;
	text-align: right;
	max-width: 80%;
	word-wrap:break-word;
}

/*// http://nicolasgallagher.com/pure-css-speech-bubbles/*/
/* Bubble with an isoceles triangle
------------------------------------------ */

.triangle-isosceles {
   position:relative;
   padding:15px;
   margin:1em 0 3em;
   color:#000;
   background:#f3961c;

   /* css3 */
   -moz-border-radius:10px;
   -webkit-border-radius:10px;
   border-radius:10px;
   background:-moz-linear-gradient(top, #f9d835, #f3961c);
   background:linear-gradient(top, #f9d835, #f3961c);
}

/* creates triangle */
.triangle-isosceles:after {
   content:"";
   display:block; /* reduce the damage in FF3.0 */
   position:absolute;
   bottom:-15px;
   left:50px;
   width:0;
   border-width:15px 15px 0;
   border-style:solid;
   border-color:#f3961c transparent;
}



/* END TRIANGLES */

/* ============================================================================================================================
== BUBBLE WITH AN OBTUSE TRIANGLE
** ============================================================================================================================ */

/* THE SPEECH BUBBLE
------------------------------------------------------------------------------------------------------------------------------- */

.triangle-obtuse {
	position:relative;
	padding:15px;
	margin:1em 0 3em;
	color:#fff;
	background:#c81e2b;
	/* css3 */
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#f04349), to(#c81e2b));
	background:-moz-linear-gradient(#f04349, #c81e2b);
	background:-o-linear-gradient(#f04349, #c81e2b);
	background:linear-gradient(#f04349, #c81e2b);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
}

/* Variant : for top positioned triangle
------------------------------------------ */

.triangle-obtuse.top {
	background:-webkit-gradient(linear, 0 0, 0 100%, from(#c81e2b), to(#f04349));
	background:-moz-linear-gradient(#c81e2b, #f04349);
	background:-o-linear-gradient(#c81e2b, #f04349);
	background:linear-gradient(#c81e2b, #f04349);
}

/* Variant : for left positioned triangle
------------------------------------------ */

.triangle-obtuse.left {
	margin-left:50px;
	background:#c81e2b;
}

/* Variant : for right positioned triangle
------------------------------------------ */

.triangle-obtuse.right {
	margin-right:50px;
	background:#c81e2b;
}

/* THE TRIANGLE
------------------------------------------------------------------------------------------------------------------------------- */

/* creates the wider right-angled triangle */
.triangle-obtuse:before {
	content:"";
	position:absolute;
	bottom:-20px; /* value = - border-top-width - border-bottom-width */
	left:60px; /* controls horizontal position */
	border:0;
	border-right-width:30px; /* vary this value to change the angle of the vertex */
	border-bottom-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :after */
	border-style:solid;
	border-color:transparent #c81e2b;
    /* reduce the damage in FF3.0 */
    display:block; 
    width:0;
}

/* creates the narrower right-angled triangle */
.triangle-obtuse:after {
	content:"";
	position:absolute;
	bottom:-20px; /* value = - border-top-width - border-bottom-width */
	left:80px; /* value = (:before's left) + (:before's border-right/left-width)  - (:after's border-right/left-width) */
	border:0;
	border-right-width:10px; /* vary this value to change the angle of the vertex */
	border-bottom-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :before */
	border-style:solid;
	border-color:transparent #fff;
    /* reduce the damage in FF3.0 */
    display:block; 
    width:0;
}

/* Variant : top
------------------------------------------ */

.triangle-obtuse.top:before {
	top:-20px; /* value = - border-top-width - border-bottom-width */
	bottom:auto;
	left:auto;
	right:60px; /* controls horizontal position */
	border:0;
	border-left-width:30px; /* vary this value to change the width of the triangle */
	border-top-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :after */
	border-color:transparent #c81e2b;
}

.triangle-obtuse.top:after {
	top:-20px; /* value = - border-top-width - border-bottom-width */
	bottom:auto;
	left:auto;
	right:80px; /* value = (:before's right) + (:before's border-right/left-width)  - (:after's border-right/left-width) */
	border-width:0;
	border-left-width:10px; /* vary this value to change the width of the triangle */
	border-top-width:20px; /* vary this value to change the height of the triangle. must be equal to the corresponding value in :before */
	border-color:transparent #fff;
}

/* Variant : left
------------------------------------------ */

.triangle-obtuse.left:before {
	top:15px; /* controls vertical position */
	bottom:auto;
	left:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:30px; /* vary this value to change the height of the triangle */
	border-left-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :after */
	border-color:#c81e2b transparent;
}

.triangle-obtuse.left:after {
	top:35px; /* value = (:before's top) + (:before's border-top/bottom-width)  - (:after's border-top/bottom-width) */
	bottom:auto;
	left:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:10px; /* vary this value to change the height of the triangle */
	border-left-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :before */
	border-color:#fff transparent;
}

/* Variant : right
------------------------------------------ */

.triangle-obtuse.right:before {
	top:15px; /* controls vertical position */
	bottom:auto;
    left:auto;
	right:-50px; /* value = - border-left-width - border-right-width */
	border:0;
	border-bottom-width:30px; /* vary this value to change the height of the triangle */
	border-right-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :after */
	border-color:#c81e2b transparent;
}

.triangle-obtuse.right:after {
	top:35px; /* value = (:before's top) + (:before's border-top/bottom-width)  - (:after's border-top/bottom-width) */
	bottom:auto;
	right:-50px; /* value = - border-left-width - border-right-width */
    left:auto;
	border:0;
	border-bottom-width:10px; /* vary this value to change the height of the triangle */
	border-right-width:50px; /* vary this value to change the width of the triangle. must be equal to the corresponding value in :before */
	border-color:#fff transparent;
}


/* ============================================================================================================================
== OVER THOUGHT BUBBLE, EMPTY, WITH BORDER (more CSS3)
** ============================================================================================================================ */

.oval-thought-border {
	position:relative; 
	padding:70px 30px;
	margin:1em auto 80px;
	border:10px solid #c81e2b; 
	text-align:center;
	color:purple; 
	background:green;
	/* css3 */
	/*
	NOTES:
	-webkit-border-radius:240px 140px; // produces oval in safari 4 and chrome 4
	-webkit-border-radius:240px / 140px; // produces oval in chrome 4 (again!) but not supported in safari 4
	Not correct application of the current spec, therefore, using longhand to avoid future problems with webkit corrects this
	*/
	-webkit-border-top-left-radius:240px 140px;
	-webkit-border-top-right-radius:240px 140px;
	-webkit-border-bottom-right-radius:240px 140px;
	-webkit-border-bottom-left-radius:240px 140px;
	-moz-border-radius:240px / 140px;
	border-radius:240px / 140px;
}

/* creates the larger circle */
.oval-thought-border:before {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-40px; 
	right:100px; 
	width:50px; 
	height:50px;
	border:10px solid #c81e2b;
	background:blue;
	/* css3 */
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
    /* reduce the damage in FF3.0 */
    display:block; 
}

/* creates the smaller circle */
.oval-thought-border:after {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-60px; 
	right:50px; 
	width:25px; 
	height:25px; 
	border:10px solid #c81e2b;
	background:orange;
	/* css3 */
	-webkit-border-radius:25px;
	-moz-border-radius:25px;
	border-radius:25px;
    /* reduce the damage in FF3.0 */
    display:block; 
}
</style>




    <style>
    #custom-search-form {
    margin:0;
    margin-top: 5px;
    padding: 0;
    }
    #custom-search-form .search-query {
    padding-right: 3px;
    padding-right: 4px \9;
    padding-left: 3px;
    padding-left: 4px \9;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    }
    #custom-search-form button {
    border: 0;
    background: none;
    /** belows styles are working good */
    padding: 2px 5px;
    margin-top: 2px;
    position: relative;
    left: -28px;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    }
    .search-query:focus + button {
    z-index: 3;
    }
    </style>
<!-- <img src="{{asset('assets/img/6125_1280x1024-wallpaper-cb1306851700.jpg')}}" alt=""> -->

<ul class="nav navbar">
	<li class="btn">
		<a href="https://github.com/cheeaun/mooeditable/wiki/Alternative-Javascript-WYSIWYG-editors#lightweight-versions">WYSIWYG</a>
	</li>
	<li class="btn">
		<a href="http://stackoverflow.com/questions/92720/jquery-javascript-to-replace-broken-images">replace-broken-images</a>
	</li>
</ul>

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>


<div class="kilo delta col-lg-6">
	
	<h1>h1</h1>
	<h2>h2</h2>
	<h3>h3</h3>	
	<h4>h4</h4>
	<h4><span>h4span</span></h4>
	<h5>h5</h5>
	<h6>h6</h6>
	<p>p</p>
	<p><span>pspan</span></p>
	
	<img src="holder.js/300x300" alt="HOLDER" class="img-circle">
	<h2>kilo delta</h2>

</div>


<div class="row">
	<div class="col-lg-4">
		<div class="thumbnail">
			<img src="{{asset('assets/img/large_jquery_logo.png')}}" alt="jquery">
			<article>
				<h1>JQuery</h1>
					<a href="http://www.codecademy.com/tracks/jquery">Codacademy jquery tutorials</a>
					<p>The Javascript Framework</p>

			</article>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="thumbnail">
			<article>
				<img src="{{asset('assets/img/ebay.jpg')}}" alt="Ebay">
				<h4>EBay</h4>
				<a href="http://developer.ebay.com/common/api/">
					
				</a>
				<p></p>
			</article>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="thumbnail">
			<article>
				<h1><span>OAuth</span></h1>
				<img src="{{asset('assets/img/oauth.png')}}" onerror="imgError(this);" alt="OAuth">
				<a href="http://www.socialphy.com/posts/computers-technology/12978/OAuth.html"></a>
				<p>OAuth allows one to acecss multiple applications.</p>
				<blockquote>Logging into another site with your Google, Twitter, or Facebook account isn't just convenient; it's more secure than creating a new account, or entering your Google, Twitter, or Facebook password into a third-party site. That's where OAuth comes in. Here's how it works, and how it keeps your passwords safe on third-party sites.
				</blockquote>
			</article>
		</div>
	</div>

http://piwik.org/docs/analytics-api/

</div>
<!-- row -->

<hr>
    <form id="custom-search-form" class="form-search form-horizontal pull-right">
    <div class="input-append span12">
    <input type="text" class="search-query" placeholder="Search">
    <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
    </form>
<hr>




<pre>
Tango Icons
------------
In the preparation of the 0.8.90 release Novell took care of tracking
down all the contributors to get them to relicense their artwork
into Public Domain.

The COPYING file of the tarball states the following:
| The icons in this repository are herefore released into the Public Domain.

Additionally the copyright status of the files was tracked in the CVS and the rdf properties of the SVGs adjusted for all files that were put into Public Domain (see rdf:about and rdf:resource).  Both fields contain a link to the Creative Commons Public Domain Dediciation[0] as reproduced below:
</pre>


<div class= thumbnail delta">
	<h3>Mysql</h3>
	<a href="http://www.thegeekstuff.com/2008/09/backup-and-restore-mysql-database-using-mysqldump/"><h4><span>Backup and Restore</span></h4></a>
	onerror="imgError(this);

<pre class="prettyprint">
	<code class="lang-php">

	</code>
</pre>
<?php
$code='<code>';
?>
	<p>
		{{{$code}}}
		<code>
		    gristech@serv01 [~/myapp]# mysqldump -u gristech --all > ~/sqldump/dump.sql 
		</code>
		{{{"</code>"}}}

	</p>


	<p>
		{{e('<pre>')}}
		<pre class="prettyprint">
		    gristech@serv01 [~/myapp]# mysqldump -u gristech --all > ~/sqldump/dump.sql 
		</pre>
		{{e('</code>')}}
	</p>


	<p>The difference between code and pre tags.</p>
	<p>It is also a good example of google prettify.</p>
</div>

{{e('foobar')}}

<div class="">
	<a href="http://www.cssdrive.com/imagepalette/index.php">Convert Image to Color Pallete</a>

<img src="http://gristech.com/img/myapp.png" alt="">
</div>

<div class="row-fluid">
	<div class="span6">
		<h2>The right tool for the job...</h2>
		<p class="HL">There are many things that might be </p>
		<ul>
			<li>Web Application Development</li>
			<li>Web Design</li>
		</ul>
			
		</p>
		<p>
			Every carpenter knows that there is nothing more time-saving than using the 
			right tool for the job.  It's faster, and your project turns out to be of better-quality,
			as compared to endless workarounds, trying to make a given tool do something it wasn't built to do.
			<!-- A web developer, web designer -->
		</p>
		<p>Each tool builds upon another: The collective end-product is the result of tens of thousands of hours of community effort.</p>

		<p>There are 2 types of workers:</p>
		<ol>
			<li>Web Designers</li>
			<li>Web Developers</li>
		</ol>
		<p>Designers work on the front end with, well, the design of a site.  
			Their tools include Javascript, CSS, HTML, and other content-related things.  
			The primary concern for the designer is the View.</p>
		<p>Developers work with the innards: the back-end code, so to speak.  The main 
			concern is the <em>architechture</em> of the application.  Their tools include PHP, Frameworks, and Databases.
			Designers work in code: Controllers, Models, and an assembly of other tools.
		</p>
	</div>
	<div class="span3 thumbnail">
		<img src="http://gristech.com/img/thinker.png" alt="think about it">

		
	</div>
	<div class="span3 triangle-obtuse">
		<p>Lorem ipsum <div class="HL">This is class=\"HL\"</div><a href="http://nicolasgallagher.com/pure-css-speech-bubbles/demo/">Speech Bubble</a></p>
		

	</div>
	<div class="span2 oval-thought-border">This bubble is entirely CSS.</div>

</div>
<h3>Search Laravel Docs:</h3>
<script>
  (function() {
    var cx = '012277204628171564007:sik_hha9myk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

<div class="row-fluid">

	      		<!-- http://davidwalsh.name/css-circles -->

				<div class="span10">

		      		<div class="span3 thumbnail delta">
		      			<a href="http://laravel.com">
		      			<img src="http://gristech.com/img/laravel-l-slant.png" alt="laravel rocks">
						<h4>
							<span>Laravel</span>
						</h4>
						</a>
						<h2>PHP Framework</h2>
						<p>Laravel is an implementation of PHP.  
							
							  I think of a framework as doing for programming what an assembly
							   line does for manufacturing.
							     A framework has tons of functionality built into it.  It makes for
							     more correct solutions to given probelm. Think: "standardization of parts."</p>
						
						<h5>A Few Features</h5>
						<ul>
							<li>Eloquent ORM</li>
							<li>Artisan CLI</li>
							<li>Polymorphic Relations</li>
							<li>Eager Loading</li>
							<li><a href="http://vschart.com/compare/laravel/vs/ruby-on-rails">Laravel vs. Rails</a></li>
							<li><a href="http://laravel.com/docs/requests#old-input">Old Input</a>
</li>
						</ul>
						<!-- <p>The best thing since sliced bread.</p> -->

						<h5>Some Fancy links</h5>
						<ul>
							<li><a href="http://laravel.io/">Laravel IO</a></li>
							<li><a href="http://reviewtechgame.blogspot.com/2013/04/laravel-4-elegant-php-framework-for-web.html">Recent Review of Laravel</a>
						</li>
						</ul>
						
						

		      		</div>
					
					<div class= "thumbnail delta">
		      			<a href="http://OAuth2.0">
		      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
						<h5><span>OAuth</span></h5>
						</a>
						<h6>Security</h6>
						<p>Supported by many APIs</p>
		      		</div>
					

		      		<div class= "thumbnail delta">
		      			<a href="http://twitter.github.io/bootstrap/scaffolding.html#responsive">
		      			<img src="http://gristech.com/img/logo/twitter-bootstrap.jpg" alt="laravel rocks">
						<h5><span>Bootstrap</span></h5>
						</a>
						<h6>Front-End Framework (Light, Responsive CSS & Javascript)</h6>
						<p>Allows rapid development</p>
		      		</div>

		      		<div class="span2 thumbnail delta">
		      			<a href="http://www.comentum.com/php-vs-asp.net-comparison.html">
			      			<img src="http://gristech.com/img/logo/php-med-trans.png" alt="laravel rocks">
							<h5>PHP</h5>
						</a>
						<h6>Web Application Language</h6>
						<p>Why PHP?</p>
						<p>Why use .png or .svg vs. .jpg?</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://www.shamusyoung.com/twentysidedtale/?p=18309">
		      			<img src="http://gristech.com/img/penguins.jpg" alt="linux">
						<h4><span>Linux</span></h4>
						</a>
						<p class="photocredit"><a href="http://www.flickr.com/photos/linpadgham/2589167851/">photo &copy; flickr</a></p>
						<h6>It's what runs the internet.</h6>
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://opensource.org/">
		      			<img src="http://gristech.com/img/logo/osi_standard_logo.png" alt="open source">
						<h4><span>Open Source</span></h4>
						</a>
						<p class="photocredit"><a href="http://opensource.org/">logo &copy; opensource.org</a></p>
						<h6>Free (as in freedom)</h6>
						<h6>Free (as in free beer)</h6>
						<h6><a href="http://opensource.org/licenses/MIT">MIT License</a></h6>
						<p>The best thing since sliced bread.</p>
						<p>Read about <a href="{{{ URL::to('security') }}}">Security</a> </p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://lorempixum.com/">
		      			<img src="http://lorempixum.com/g/350/200/city" alt="lorempixum">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li><a href="http://clipartist.info/RSS/openclipart.org/2011/May/29-Sunday/lawn_mower.svg.html">Open Clip Art Library</a>
							</li>
							<li>lorempixum</li>
							<li><a href="http://www.flickr.com/creativecommons/">flickr</a></li>
							<li><a href="http://www.kozzi.com/?ref=146452">Kozzi</a></li>
							<li><a href="http://www.deviantart.com/"></a>deviantart</li>
							<li><a href="http://search.creativecommons.org/">Creative Commons</a></li>
							<li><a href="http://pixabay.com/en/rome-italy-fontana-statue-statues-107889/">pixabay</a></li>
							<li><a href="http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html">About copyrighting</a></li>
							<li><a href="http://www.colorpicker.com/">ColorPicker</a></li>
							<li><a href="http://thenounproject.com/">THe Noun Project</a></li>
							<li><a href="http://colorschemedesigner.com/#4r42Ew0w0w0w0">Color Scheme Designer</a></li>
						</ul>

						<!-- http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html -->
		      		</div>



		      		<div class= "thumbnail delta">
		      			<a href="http://www.sublimetext.com/">
		      			<img src="http://www.gristech.com/img/screen/sublime.png" alt="Sublime Text">
						<h4><span>Sublime Text</span></h4>
						</a>
						<h6>Text Editor/IDE</h6>
						<a href="http://www.chromium.org/developers/sublime-text">http://www.chromium.org/developers/sublime-text</a>
						<p>You can use it for free for a while, but DBAD.</p>
						<h5>$70</h5>
						<p>You also need the <a href="http://wbond.net/sublime_packages/sftp">SFTP Plugin for Sublime.</a> $16.</p>

		      		</div>

		      		<div class= "thumbnail delta">
		      			<a href="https://www.facebook.com/">
		      			<img src="http://www.gristech.com/img/screen/facebook.png" alt="facebook">
						<h4><span>Facebook</span></h4>
						</a>
						<h6>The Social Network</h6>
						<p>Like it!.</p>
						<h5>$free</h5>
						<!-- <p>You also need <a href="http://wbond.net/sublime_packages/sftp">SFTP</a> $16.</p> -->

		      		</div>



		      		<div class= "thumbnail delta">
		      			<a href="http://www.inkscape.com/">
		      			<img src="http://www.gristech.com/img/screen/inkscape.png" alt="Inkscape">
						<h4><span>Inkscape</span></h4>
						</a>
						<h6>Vector Images</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li><a href="http://inkscapetutorials.wordpress.com/">tutorials</a></li>
							<li><a href="">Download</a></li>
						</ul>
		      		</div>

		      		<div class= "thumbnail delta">
		      			<a href="http://fortawesome.github.io/Font-Awesome/">
		      			<img src="http://www.gristech.com/img/screen/font-awesome.png" alt="Sublime Text">
						<!-- <h4><span><i class="icon-font-awesome"></i>Font Awesome</span></h4> -->
						</a>
						<h6>It's Awesome (seriously!)</h6>
						<p>Version 3.2.0 - 6/13/2013</p>
						<ul>
							<li><i class="icon-beer"></i> Free! <a href="http://opensource.org/licenses/mit-license.html"> MIT License</a></li>
						</ul>
						<i class="icon-android"></i>
						<i class="icon-thumbs-up"></i>
						<i class="icon-file"></i>
						<i class="icon-comments-alt"></i>
						<p>The best thing since sliced bread.</p>
		      		</div>
					

		      		<div class= "thumbnail delta">
		      			<a href="http://javascript.com/">
		    <img src="{{asset('assets/img/js.png')}}" alt="Javascript">
						<h4><span><i class="icon-arrow-right"></i>Javascript</span></h4>
						</a>
						<h6>About Javascript:</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i> Free: MIT License</a></li>
						</ul> -->
						<p>
							It's not Java, and it's not scripting: it's object oriented resource management.
							It's fully decoupled, modular system of many bits of heavily tested code.</p>

							
		      		</div>

		      		<div class= "thumbnail delta">
		      			<a href="http://bootswatch.com/">
		      			<img src="http://www.gristech.com/img/screen/bootswatch.png" alt="Bootswatch">
						<h4><span></i>Bootswatch</span></h4>
						</a>
						<h6>It's Awesome</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class= "thumbnail delta">
		      			<a href="http://google.com/docs">
		      			<a href=""></a>

		      			<img src="http://gristech.com/img/screen/googledocs.png" alt="Google Docs">
						<h4><span><i class="icon-file"></i>Google-Docs</span></h4>
						</a>
						<h6>It's Awesome</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>$5 per user per month</p>
		      		</div>
				</div>

				
				<!-- ./ span10 -->

				<!-- sidebar -->
	      		<div class="span2 pull-right text-center foxtrot">
	      			<!-- <a href="http://http://www.siteground.com/"> -->

					<h3>Siteground</h3>
					</a>
					<h6>Webhost</h6>
					<p>The best thing since sliced bread.</p>
	      			
	      			<div class="text-center">
	      			<a href="http://www.siteground.com" onClick="this.href='http://www.siteground.com/index.htm?afbannercode=090922b4e36a794ded5eb252b703ad39'" ><img  src="https://ua.siteground.com/img/banners/general/blue/120x600.gif" alt="Web Hosting" width="120" height="600" border="0"></a>
	      			</div>
	      		</div>
	




					  
					<!-- Black and White -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100" alt="" />   -->
					  
					<!-- Tagged -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100/nature" alt="" /> -->
		</div>

<div class="span12">
	<h3>some great things about Laravel</h3>
	<ul>
		<li>artisan</li>
		<li>Eloquent</li>
		<li>swiftmailer</li>
		<li>symfony components</li>
	</ul>
</div>

<div>
	<ul>
		<li>
			<a href="https://sites.google.com/a/webpagetest.org/docs/other-resources/optimization-resources">Webpage Speed Optimization</a>
		</li>
	</ul>
</div>

<div class="kilo delta">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->

						<!-- Default -->  
	<!-- <div class="delta"> -->
	<img src="http://lorempixum.com/1680/1250/nature" alt="" />  
<!-- </div>				 -->
<h1><span>The New Colossus</span></h1>

<p><span>A random nature image</span></p>

</div>

<div>
	<p>
		By the way, this page is an example of a fluid grid system

	</p>
	<blockquote>"I would never use beta code in a production environment."</blockquote>
								Facebook and Google do.  Both publish always-beta code.  The difference between beta and production is just terminology.  I'd rather think about how to make it easier to maintain or change.

								This is where unit testing comes in.  I need to get phpunit up and running: I have recently had difficulty doing so.

	Frankly I think it feels sort of arrogant to declare that the project is stable and complete.

								  <blockquote>
								  	That may be fine for small projects, but the rule should not apply to large, complex projects.
								  </blockquote>
								  Rolling out a major release is one thing, but what better testing is there than real-world use?

								  Composer manages dependencies, take care of dependancies.  Git takes care of version control.  Sublime SFTP automatically uploads over SFTP."
</div>



		
@stop