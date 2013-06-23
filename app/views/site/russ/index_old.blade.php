@extends('site.layouts.russ')

{{-- Content --}}
@section('content')

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

		<a href="http://lorempixel.com/400/200/sports/">LOREMPIXEL</a>
		<!-- <img src="http://www.loc.gov/exhibits/haventohome/images/hh0041s.jpg" alt="manuscript" class="img-circle"> -->
<div class="well">
	<h4>lorem ipsum</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, deleniti, natus impedit praesentium alias exercitationem consectetur recusandae architecto labore ducimus.</p>
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
