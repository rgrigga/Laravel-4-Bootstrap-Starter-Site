<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Buckeye Mower : Mobile Lawn Mower Repair, Small Engine Service
			@show
		</title>
		<meta name="keywords" content="lawnmower repair, mower repair, john deere, push mower, small engine, riding mower, mower service, columbus, ohio" />
		<meta name="author" content="Ryan Grissinger" />
		<meta name="description" content="Buckeye Mower serves the Greater Columbus Area" />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- CSS
		================================================== -->
        @stylesheets("public-css")
        <link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/russstyle.css">

<!-- font-awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">


		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

		<link rel="shortcut icon" href="{{{ asset('http://gristech.com/russ/buckeye32.png') }}}">

		<!-- <link rel="shortcut icon" href="{{{ asset('http://gristech.com/ico/favicon.png') }}}"> -->


	</head>

	<body>


<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41528506-1', 'gristech.com');
  ga('send', 'pageview');

</script>


		<!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
<style>
.foobar{
    background-color: red;
/*    background-color: rgba(235,200,176,.5);*/
    padding:5px; 
    /*margin-top: 40px; */
    margin-right: 20px;
    border-bottom-left-radius:20px;
    border-bottom-right-radius:20px;
    text-align: center;
}


.india{
    position:fixed; right:0;
    background-color: rgba(235,200,176,.5);
    /*padding:10px; */
    line-height: 300px;
    margin-top: -120px; 
    /*margin-right: -20px;*/
    width: 200px;
    height:200px;
    /*border-top:50px;*/
    border-radius: 50%;
    /*border-bottom-left-radius:50%;*/
    /*border-bottom-right-radius:50%;*/
    text-align: center;
    z-index: 4;
}
.navbar{
	position:fixed;
	z-index: 5;
}

body {
	padding-top: 40px;
}

    /* Landscape phones and down */
    @media (max-width: 480px) { 
            .hotel{
                background-color: orange;
            }
            .navbar-inner{
                padding-left: 50px;
            }

        }
</style>
	<div class="india pull-right">
			<!-- <div>phone, email, chat, anything!</div> -->
		<div>
			<img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design">
		</div>
	        
	</div>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">

				<div class="container-fluid">

<div class="brand">Buckeye Mower</div>
					<a class="btn btn-navbar pull-right" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					
					
					<div class="nav-collapse collapse">
						@include('site.partials.contact')
						<ul class="nav">
							
							<li {{ (Request::is('russ*') ? ' class="active"' : '') }}><a href="{{{ URL::to('/russ') }}}">Home</a></li>
							<!-- <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('diy') }}}">DIY</a></li>  -->   
						</ul>

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
			                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
			                            @endif
			                        </ul>

					</div>
					<!-- ./ nav-collapse -->
				
				</div>
			</div>

		</div>

		<!-- ./ navbar -->

<!-- <div class="foobar pull-right">



		<div>phone, email, chat, anything!</div>
		<div><img src="http://gristech.com/img/contactus.png" alt="buckeye mower"></div>
        <span>Whatever works for you.</span>
        
</div> -->
		<!-- Container -->
		<div class="container-fluid">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
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
	        <p class="muted credit">&copy; 2013</p>



	      </div>


	    </div>

		<!-- Javascripts
		================================================== -->
        @javascripts('public-js')
	</body>
</html>
