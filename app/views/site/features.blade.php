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


	<h1>Features<small> available features include:</small></h1>
	<!-- <h2>blah</h2> -->
	<img src="http://gristech.com/img/features.jpg" alt="">
	<!-- <p>If you're interested...</p> -->
	<h5><em>Modular, Extensible, Testable, Expressive, Elegant, Simple</em>
	</h5>

</div>
<!-- jumbotron -->


<style>

.jumbotron{


  margin-right: -20px;
  margin-left: -20px;
  position: relative;
  padding: 40px 0;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.4), 0 0 30px rgba(0,0,0,.075);
  background: #020031; /* Old browsers */
  background: -moz-linear-gradient(45deg, #020031 0%, #6d3353 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#020031), color-stop(100%,#6d3353)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(45deg, #020031 0%,#6d3353 100%); /* IE10+ */
  background: linear-gradient(45deg, #aa3311 0%,rgb(53,7,4) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#020031', endColorstr='#6d3353',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
     -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
          box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
}


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
						<ul>
							<li>Eloquent ORM</li>
							<li>Artisan CLI</li>
							<li>Polymorphic Relations</li>
							<li>Eager Loading</li>
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
						<p>The best thing since sliced bread.</p>
		      		</div>

		      		<div class="span3 thumbnail delta">
		      			<a href="http://http://www.lorempixum.com/">
		      			<img src="http://www.lorempixum.com/g/350/200/city" alt="lorempixum">
						<h4><span>Free Images</span></h4>
						</a>
						<h6>Awesome</h6>
						<p>The best thing since sliced bread.</p>
						<ul>
							<li>lorempixum</li>
							<li>flickr</li>
							<li>other creative commons resources</li>
							<li><a href="http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html">About copyrighting</a></li>
						</ul>

						<!-- http://yourbusiness.azcentral.com/give-copyright-credit-images-2791.html -->
		      		</div>


		      		<div class="span4 thumbnail delta">
		      			<a href="http://http://www.sublimetext.com/">
		      			<img src="http://www.gristech.com/img/screen/sublime.png" alt="Sublime Text">
						<h4><span>Sublime Text</span></h4>
						</a>
						<h6>It's Awesome</h6>
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


<h3>Chat</h3>
<ul>
	<li><a href="https://gristech.hipchat.com/chat">Hipchat</a></li>
</ul>


					  
					<!-- Black and White -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100" alt="" />   -->
					  
					<!-- Tagged -->  
					<!-- <img src="http://www.lorempixum.com/g/400/100/nature" alt="" /> -->
		</div>






<div class="kilo delta">
<!-- 				<img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->

						<!-- Default -->  
	<!-- <div class="delta"> -->
	<img src="http://www.lorempixum.com/1680/1250/nature" alt="" />  
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
	<p>landscape photo &copy; <a href="http://www.flickr.com/photos/65978013@N03/6472678173/">flickr</a></p>
</div>



		
@stop