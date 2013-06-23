@extends('site.layouts.default')
@section('content')

<!-- http://css-tricks.com/snippets/css/prevent-long-urls-from-breaking-out-of-container/ -->

<style>

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




</style>

<div class="jumbotron masthead">


	<h1>My Tools!<small> building blocks for this site include:</small></h1>
	<!-- <h2>blah</h2> -->
	<img src="http://gristech.com/img/mini-tools.jpg" alt="">
	<!-- <p>If you're interested...</p> -->
	<h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple</em>
	</h5>

</div>
<!-- jumbotron -->


<style>

.delta img{
	width: 100%;
}
.delta { 
	margin-top: 20px;
   position: relative; 
   /*width: 100%;  for IE 6 */
   /*background-color: blue;*/
       background-color: #cccccc;
    box-shadow: 10px 10px 5px #666666;
}

.delta h1, h4{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}
.kilo p{ 
   position: absolute; 
   top: 50px; 
   left: 0; 
   /*width: 100%; */
}

.kilo p{
	top: 30%;
	left: 10%;
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
	/*max-width: 80%;*/
	word-wrap:break-word;
}

</style>



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
						<p>Laravel is an implementation of PHP.  The result of tens of thousands of hours of community effort.  I think of a framework doing for programming what an assembly line does for manufacturing.  A framework has tons of functionality built into it, and a </p>
						<ul>
							<li>Eloquent ORM</li>
							<li>Artisan CLI</li>
							<li>Polymorphic Relations</li>
							<li>Eager Loading</li>
							<li><a href="http://vschart.com/compare/laravel/vs/ruby-on-rails">Laravel vs. Rails</a></li>
						</ul>
						<!-- <p>The best thing since sliced bread.</p> -->
						<a href="http://laravel.com/docs/requests#old-input"><p class="photocredit">http://laravel.com/docs/requests#old-input</p></a>
		      		</div>

		      		<div class="span4 thumbnail delta">
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
						<h5>PHP</h5></a>
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
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://lorempixum.com/">
		      			<img src="http://lorempixum.com/g/350/200/city" alt="lorempixum">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li>lorempixum</li>
							<li><a href="http://www.flickr.com/creativecommons/">flickr</a></li>
							<li><a href="http://www.kozzi.com/?ref=146452">Kozzi</a></li>
							<li><a href="http://www.deviantart.com/"></a>deviantart</li>
							<li><a href="http://search.creativecommons.org/">Creative Commons</a></li>
							<li><a href="http://pixabay.com/en/rome-italy-fontana-statue-statues-107889/">pixabay</a></li>
							<li><a href="http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html">About copyrighting</a></li>
						</ul>

						<!-- http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html -->
		      		</div>



		      		<div class="span4 thumbnail delta">
		      			<a href="http://www.sublimetext.com/">
		      			<img src="http://www.gristech.com/img/screen/sublime.png" alt="Sublime Text">
						<h4><span>Sublime Text</span></h4>
						</a>
						<h6>It's Awesome</h6>
						<p>You can use it for free for a while, but DBAD.</p>
						<h5>$70</h5>
						<p>You also need <a href="http://wbond.net/sublime_packages/sftp">SFTP</a> $16.</p>

		      		</div>

		      		<div class="span4 thumbnail delta">
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

		      		<div class="span4 thumbnail delta">
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


		      		<div class="span4 thumbnail delta">
		      			<a href="http://bootswatch.com/">
		      			<img src="http://www.gristech.com/img/screen/bootswatch.png" alt="Bootswatch">
						<h4><span><i class="icon-font-awesome"></i>Bootswatch</span></h4>
						</a>
						<h6>It's Awesome</h6>
<!-- 						<ul>
							<li><a href="http://opensource.org/licenses/mit-license.html"><i class="icon-beer"></i>Free: MIT License</a></li>
						</ul> -->
						<p>The best thing since sliced bread.</p>
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



<div id="prettified">
	
<h3>Prettified Code Snippets</h3>
<h5>Javascript:</h5>
<pre class="prettyprint">
{{{e('// javascript
<script type="text/javascript">
// Say hello world until the user starts questioning
// the meaningfulness of their existence.
function helloWorld(world) {
  for (var i = 42; --i >= 0;) {
    alert(\'Hello \' + String(world));
  }
}
</script>
<style>
p { color: pink }
b { color: blue }
u { color: "umber" }
</style>')}}}</pre>

<h5>PHP</h5>
<pre class="prettyprint">
<code class="language-php">{{e('<?php
	echo "foobar!";
	die("You\'ve been hacked!");
	class Foo extends Bar{
		__construct($baz){
			//code here
		}
		echo "bar";
	}')}}</code></pre>

<h5>CSS:</h5>
<pre class="prettyprint"><code class="lang-css">{{e('/* css */
/*http://stackoverflow.com/questions/5506258/horizontal-scroll-overflowing-html-lis-without-knowing-width*/
ul.tag li{
    display: inline-block;
    background-color: orange;
    padding: 5px;
    margin:2px;
}')}}</code></pre>

</div>


<div class="kilo delta">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->

						<!-- Default -->  
	<!-- <div class="delta"> -->
	<img src="http://lorempixum.com/1680/1250/nature" alt="" />  
<!-- </div>				 -->
<h1><span>The New Colossus</span></h1>

<p><span>Not like the brazen giant of Greek fame,
With conquering limbs astride from land to land;
Here at our sea-washed, sunset gates shall stand
A mighty woman with a torch, whose flame
Is the imprisoned lightning, and her name
Mother of Exiles. From her beacon-hand
Glows world-wide welcome; her mild eyes command
The air-bridged harbor that twin cities frame.
"Keep, ancient lands, your storied pomp!" cries she
With silent lips. "Give me your tired, your poor,
Your huddled masses yearning to breathe free,
The wretched refuse of your teeming shore.
Send these, the homeless, tempest-tost to me,
I lift my lamp beside the golden door!"</span></p>

</div>
<!-- <div class="jumbotron masthead">
  <div class="container-fluid">
    <h1>Jumbotron Masthead</h1>
    <p>Not very responsive.</p>
    <p>
      <a href="assets/bootstrap.zip" class="btn btn-primary btn-large" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 2.3.2']);">Download Bootstrap</a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="http://github.com/twitter/bootstrap" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'GitHub project']);">GitHub project</a>
      </li>
      <li>
        <a href="./getting-started.html#examples" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'Examples']);">Examples</a>
      </li>
      <li>
        <a href="./extend.html" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'Extend']);">Extend</a>
      </li>
      <li>
        Version 2.3.2
      </li>
    </ul>
  </div>
</div> -->


<!-- 	<div class="jumbotron masthead">

		<a href="https://groups.google.com/forum/?fromgroups#!topic/twitter-bootstrap/hCUy_n1Mkks
		"><em>Jumbotron Masthead</em></a>

		<div class="span1">&copy; Ryan Grissinger 
			<img src="http://lorempixel.com/400/200/nature.png" alt="thinker.png"></div>

		<h1>Partners<small> This building blocks for this site include:</small></h1>
		<img src="http://gristech.com/img/mini-tools.jpg" alt="">
		 <h2>PS: Help Wanted!</h2>

	</div> -->
<div>
	<p>
		By the way, this page is an example of a fluid grid system

	</p>
</div>



		
@stop