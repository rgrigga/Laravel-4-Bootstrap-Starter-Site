@extends('site.layouts.russ')

{{-- Content --}}
@section('content')



<style>
.jumbotron{
	padding-left: 5%;
}
.jumbotron h1{
	font-size: 5em;
	text-align: left;
}
</style>
<div class="jumbotron masthead">
<div class="row">
		<div class="span6">
		<h1><small> mobile mower repair</small></h1>
		<h1>Buckeye Mower</h1>
	</div>
	
	<div class="span6">
		<h2>Buckeye Mower</h2>
		<h3>Buckeye Mower</h3>
		<h4>Buckeye Mower</h4>
		<h5>Buckeye Mower</h5>
		<h6>Buckeye Mower</h6>
	</div>
</div>
	<!-- <h2>blah</h2> -->
	<!-- <img src="http://gristech.com/img/mini-tools.jpg" alt=""> -->
	<!-- <p>If you're interested...</p> -->


</div>

<div class="row">
	<style>
.carousel img{
	height:400;
}
.carousel-inner>.item>img, .carousel-inner>.item>a>
	 img {
		display: block;
		line-height: 1;
		width: 100%;
		max-height: 450px;
	}
/*	.container-fluid{
		padding-left: 0;
		padding-right: 0;
	}*/
	@media (max-width: 767px){
		.carousel-inner>.item>img, .carousel-inner>.item>a>
		 img {
			display: block;
			line-height: 1;
			width: 100%;
			max-height: 350px;
		}
	}
	
</style>
<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item">
			<!-- <img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt=""> -->
			<img src="http://gristech.com/img/grass.jpg" alt="">
			<div class="carousel-caption">
				<h4>Push Mower Repair</h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		</div>
		<div class="item">
			<img src="http://gristech.com/img/grass2.jpg" alt="">
			<div class="carousel-caption">
				<h4>Second Thumbnail label</h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		</div>
		<div class="item active">
			<img src="http://gristech.com/img/ladybug.jpg" alt="">
			<div class="carousel-caption">
				<h4>Third Thumbnail label</h4>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	</div>
</div>

	<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">



	<div class="row-fluid">

		<div class="span6">
			<img class="img-circle pull-left" src="http://gristech.com/img/russ/fire.png" alt="lawn mower repair">
		</div>



		<div class="span6">
			<h1>Buckeye Mower <small>Mobile Mower Repair</small></h1>
			<p class="text-center"><a class="btn btn-primary btn-large" href="tel:7405076198" > Call (740)507-6198</a></p>
				<!-- <div class="beta">	
				-->
				<h2>Buckeye Mower Repair!</h2>			 
				<h3>Mobile Lawn Mower and Small Engine Repair Services</h3>
				<!-- <h1>FREE!</h1> -->
				<p>Save yourself time, gas, money, and hassle: no need to load your mower up and haul it somewhere, we will come to you.  </p>

				<h3><em>Fast. Affordable.  Easy.</em></h3>
			<!-- </div> -->
		</div>
	</div>


			
			<!-- </div> -->
	<!-- </div> -->

</div>
<!-- end hero-unit -->



<div class="span9">
	<h4>Areas Served:</h4>
	<p>
		We serve the Greater Columbus, Ohio Area as well as Near Columbus & Central Ohio Areas such as Hilliard, Delaware, Marysville, Westerville, Worthington, Lewis Center, and more!
	</p>

	<p>
		<a href="http://columbus.craigslist.org/sks/3847721791.html">Craigslist!</a>
	</p>

<div class="row-fluid">






	<div class="span4 thumbnail">
		<h2><a href="#">Riding <p>Lawn Mower Service</p></a></h2>
		<div class="delta">starting at <span class="price">$85.00</span> *plus parts</div>
		<img src="http://gristech.com/img/russ/riding400.png" alt="">
		<h3>Basic Service</h3>

		<p>Approx time: 1-2 hours</p>
		<p>CHANGE OIL, OIL FILTER, SPARK  PLUG 'S', AIR and FUEL FILTER.</p>

		<ul>
			<li>DECK CLEANING</li>
			<li>DECK LEVELING</li>
			<li>BLADE SHARPENING</li>
			<li>PTO CLUTCH ADJUSTMENT IF APPLICABLE</li>
			<li>TEST CHARGING SYSTEM AND BATTERY</li>
			<li>TIRE PRESSURE ADJUSTMENT</li>
			<li>GREASE ENTIRE MACHINE</li>
			<li>INSPECTION OF ENTIRE MACHINE (belts, hoses, pulleys, etc)
			</li>
		</ul>
		

		<a class="btn btn-primary btn-large" href="tel:7405076198" >(740)507-6198</a>
	</div>

	<div class="span4 thumbnail">
		<h2>Push <p>Lawn Mower Service</p></h2>
				<div class="delta">starting at <span class="price">$50.00</span> *plus parts</div>
		<img src="http://gristech.com/img/russ/push400.png" alt="">
		
		<h3>Basic Service</h3>
		<p>Approx time: 1-2 hours</p>
		<p>CHANGE OIL, OIL FILTER, SPARK  PLUG 'S', AIR and FUEL FILTER.</p>

		<ul>
			<li>CHANGE OIL, AIR FILTER, SPARK PLUG</li>
			<li>DECK CLEANING</li>
			<li>BLADE SHARPENING</li>
			<li>INSPECTION OF ENTIRE MACHINE  (belt, cables, drive system etc)</li>
		</ul>

		<p class="text-center">
			<a class="btn btn-primary btn-large" href="tel:7405076198" >(740)507-6198</a>
		</p>
	</div>

	<div class="span4">
		<div class="thumbnail">
			<h2>Other <p>Small Engine Service</p></h2>
			<div class="delta">starting at <span class="price">$50.00</span> *plus parts</div>
			<img src="http://gristech.com/img/russ/chainsaw400.png" alt="chainsaw repair">
		</div>
		<h3>Maintenance</h3>
			<ul>
				<li>Compact tractors</li>
				<li>Utility Vehicles</li>
				<li>Commercial Mowers</li>
				<li>Trimmers and Hedgers</li>  
				<li>Chainsaws Leaf Blowers</li> 
				<li>Rototillers</li>
				<li>Snow Blowers</li> 
				<li>All 2 & 4 Cycle Equipment</li>
			</ul>
			<p>Call us!</p>
			<p>
				<a class="btn btn-primary btn-large" href="tel:7405076198" >(740)507-6198</a>
			</p>
	</div>
</div>
<!-- end row -->


<p class="text-center">
<a class="btn btn-primary btn-large" href="http://www.jackssmallengines.com/jacks-parts-lookup/" >Need Parts?</a>
</p>
</div>
<!-- span9 -->
	<!-- span8 -->
	<div id="about" name="about" class="alpha well span3 pull-right" >
		<h3>Layman's Guide to Lawn Mower Maintenance</h3>
		<p class="text-center"><i class="icon-circle-arrow-down icon-4x"></i></p>

		<img src="http://gristech.com/img/grass.jpg" alt="grass">
		<!-- <img src="http://lorempixel.com/400/200/sports/"> -->
		<!-- <img src="http://www.loc.gov/exhibits/haventohome/images/hh0041s.jpg" alt="manuscript" class="img-circle"> -->
<div class="well">
	<h4>Are you taking care of your mower?</h4>
	<p>Lawn mower maintenance is an important part of owning a lawn mower. No matter which type of lawn mower one owns, it will eventually require maintenance or repair. The maintenance needs will vary, depending on the type, age and style of the machine.One of the most important maintenance issues for every lawn mower is to keep the blades free from debris such as leaves, clippings, mud, etc. It is especially important that any wet debris be removed immediately to avoid rust and dulling of the blades. If left unattended, wet debris will interfere with the motion of the blades, causing the thing to be less or altogether inefficient, which will in time damage the engine.If your mower is a manual reel push mower, maintaining it could be as simple as keeping the mower clean and the blades sharpened. If you have a lawn mower with an engine, it is important to make sure that the oil is checked on a regular basis and changed if necessary. Just like a car engine, the engines need to be cared for regularly.If you have an electric mower, hover mower, robotic mower or really with any type, it needs to be kept clean and free of debris as well as checked at least once a year. Most manufacturers offer free check-ups twice a year.Some people prefer to replace their mowers every few years to avoid the hassle of maintenance. Others enjoy working on their mowers themselves and prefer to figure out any maintenance issues they encounter. There are numerous "how to" books which, combined with the owner's manual, can assist in explaining how to maintain and repair these special machinery if you are mechanically inclined.Most importantly, if you are unsure about proper mower maintenance, contact a lawn care or repair professional to maintain optimal use for your mower.Check out BUCKEYE MOWER for all your Lawn Mower needs today.

Article Source: http://EzineArticles.com/5938962</p>
</div>
		<h4>5 simple ways to extend the life of your mower</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem accusamus perferendis veniam expedita cum quia pariatur ipsum maxime nihil laudantium!</p>
	</div>


	<!-- Main hero unit for a primary marketing message or call to action -->

<!-- end hero-unit -->

<div class="span8">
<!-- <h1>Posts:</h1> -->
@foreach ($posts as $post)
<div class="row">
	<div class="span8 well">
		<!-- Post Title -->
		<div class="row">
			<div class="span8">
				
			</div>
		</div>
		<!-- ./ post title -->

		<!-- Post Content -->
		<div class="row">
			<div class="span4">
				<a href="{{{ $post->url() }}}" class="thumbnail">
					<!-- http://placehold.it/260x180 -->
					<img src="http://gristech.com/img/{{{$post->image}}} " alt="{{{$post->image}}}">
				</a>



		<!-- Tags -->
				<p>

					<ul class='tag'>
						<li><i class="icon-tag"></i></li>
				@foreach($post->tags() as $tag)
					
				    <li><a href="tag/{{ $tag }}">{{ $tag }}</a></li>
				    
				@endforeach
				</ul>
				</p>

			</div>
			<div class="span4">
				<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
				<p>
					{{ String::tidy(Str::limit($post->content, 300)) }}
				</p>
				<p>
					<a class="btn btn-info" href="{{{ $post->url() }}}">Read more</a>
				</p>

			</div>
		</div>
		<!-- ./ post content -->

		<!-- Post Footer -->
		<div class="row">
			<div class="span8">
				<p></p>
				<p>
							<!-- Edit/Delete Buttons -->
			<div class="metabuttons pull-left">
				@if (Auth::check())
	                @if (Auth::user()->hasRole('admin'))
						<p>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
							<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
						| </p>
					@endif
				@endif
			</div>

					&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
					| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
					| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
				</p>

			</div>
		</div>
		<!-- ./ post footer -->
	</div>

</div>

<hr />
@endforeach


{{ $posts->links() }}
</div>
<!-- span8 -->


<!-- <div class="charlie span5 well pull-right">
<h1>Contact Us</h1>
				    <a href="http://facebook.com" class="social-icon">
				    <img src="http://gristech.com/img/facebook.png" class="img-circle"></a>
				    <a href="http://twitter.com" class="social-icon"><img src="http://gristech.com/img/twitter.png" class="img-circle"></a>
				    <a href="http://linkedin.com" class="social-icon"><img src="http://gristech.com/buttons/linkedin.png" class="img-circle"></a>
				    <a href="http://gmail.com" class="social-icon"><img src="http://gristech.com/buttons/email.png" class="img-circle"></a>
</div> -->


<div class="row">
	<div class="span9">
		
	</div>
	<div class="offset9 span3 thumbnail pull-right">
		<h3>To do:</h3>
		<ul>
			<li>testimonials</li>
			<li>facebook</li>
			<li>twitter</li>
			<li>Angies List</li>
			<li>BBB</li>
			<li>yellow pages?</li>
			<li>Move Domain</li>
			<li>Map</li>
		</ul>
	</div>
</div>

@stop
