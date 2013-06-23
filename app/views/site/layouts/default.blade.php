<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Gristech MyApp
			@show
		</title>
		<meta name="keywords" content="php, laravel, development, learning, software, business" />
		<meta name="author" content="Ryan Grissinger" />
		<meta name="description" content="A flexible, customizable web application" />

		<!-- Mobile Specific Metas
		================================================== -->

		<!-- MOre info on this: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- CSS
		================================================== -->
    @stylesheets("public-css")
		
		<link rel="stylesheet" href="/assets/css/style.css">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<!-- prettify -->

<!-- NOTE: I had an experience with a lengthy pageload on this today.  It's a good lesson NOT to include prettify on the main layout page -->

<!-- <link href="prettify.css" type="text/css" rel="stylesheet" /> -->
<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&amp;skin=sunburst&amp;lang=css"></script>

<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
		<meta name="google-site-verification" content="U8zCfNgj-23MojmUwyxkij6AqrU30NWhgJgTtiBl3WI" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>
	</head>

	<body>

<!-- google analytics -->




		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		<!-- Navbar -->

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">




<!-- search -->

<!-- search -->


<!-- <form action="{{ URL::to('tags') }}"> -->
<!-- action="" -->


<!-- <form class="navbar-search" action="/tags" method='get'> -->

<!-- </form> -->
<!-- //moved -->
<!-- </form> -->

<!-- 					<div class="pull-right">
						<a href="http://facebook.com" class="social-icon">
					    	<img src="http://gristech.com/img/facebook.png" class="img-circle">
					    </a>
					    <a href="http://twitter.com" class="social-icon">
					    	<img src="http://gristech.com/img/twitter.png" class="img-circle">
					    </a>
					    <a href="http://linkedin.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/linkedin.png" class="img-circle">
					    </a>
					    <a href="http://gmail.com" class="social-icon">
					    	<img src="http://gristech.com/buttons/email.png" class="img-circle">
					    </a>
					</div> -->

					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
						<!-- <div class="text-center">foo</div> -->
						<i class="icon-collapse icon-2x"></i>
<!-- 						<span class="icon-bar"></span>
	<span class="icon-bar"></span>
						<span class="icon-bar"></span> -->
					</a>

					<div class="nav-collapse collapse">
						
						<ul class="nav">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
							<li {{ (Request::is('technical') ? ' class="active"' : '') }}><a href="{{{ URL::to('/technical') }}}">Technical</a></li>
							<li {{ (Request::is('features') ? ' class="active"' : '') }}><a href="{{{ URL::to('/features') }}}">Features</a></li>
							<li {{ (Request::is('tags') ? ' class="active"' : '') }}><a href="{{{ URL::to('/tags') }}}">Tags</a></li>
						</ul>

						<!-- admin/user nav -->
                        <ul class="nav pull-right">
							

                            @if (Auth::check())
                                @if (Auth::user()->hasRole('admin'))

                                    <li{{ (Request::is('admin/blogs/create*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> Create</a></li>

		                            <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                                @endif
	                            <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
	                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                            @else
	                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
	                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Join (Free)</a></li>
                            @endif
                            @include('site.partials.contact')
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>

			</div>
			<!-- //this is the only place to put india! -->
			<div class="india pull-right">
					<!-- <div>phone, email, chat, anything!</div> -->
				<div>
					<img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design">
				</div>
			        
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
			<style>
			/*http://css-tricks.com/almanac/properties/z/z-index/*/
			.contentwrap{
				position: relative;
				/*z-index: -3;*/
			}
			</style>
<div class="contentwrap">
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
</div>
<!-- <div class="span8">
</div>
<div class="span3"><h2>sidebar</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, cumque praesentium sapiente ipsa incidunt quam. Perspiciatis officiis ut saepe totam quibusdam error hic aperiam obcaecati fugit velit! Ea, nemo esse laboriosam earum perferendis similique id ab nisi sapiente harum sed dolorem at nam quia aliquam itaque sit enim beatae ducimus unde hic repellendus quibusdam odio adipisci quam fuga quos consequuntur reprehenderit minus veniam nulla consequatur nesciunt iusto. Sequi, incidunt, odit, error dolore mollitia blanditiis voluptatum libero reiciendis tenetur minima pariatur dolorum sint illum. Vel, ipsam similique magni qui optio vero fugiat autem unde voluptatem illum aliquid consequuntur dignissimos repudiandae nesciunt!
</div> -->



		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

</div>
<!-- ./wrap -->


	    <div id="footer">


<div class="container">


	      	


</div>
<!-- container -->

	        <p class="muted credit">This site began as the Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.  Thank you Andrew!</p>

	      
<span><a href="http://en.wikipedia.org/wiki/Perpetual_beta">Always Beta</a></span>



	      </div>

	    </div>

<a href="/whyresponsive">



<div class="hotel hotelb">
<!-- 	<div style="color:black; padding-bottom:50px;">resize me</div> -->

	<div class="hotel pull-right">

		<div class="visible-phone">
			
			<i class="icon-mobile-phone icon-4x"></i>
		</div>
		<div class="visible-tablet">

			<i class="icon-tablet icon-4x"></i>
		</div>
			<div class="visible-desktop">
			<i class="icon-desktop icon-4x"></i>
		</div>
	</div>
</div>
</a>
		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
	</body>
</html>
