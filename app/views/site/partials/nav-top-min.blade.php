		<style>
/*		.mytopnav{
			position:fixed;
		}*/
		.body{
			/*padding-top: 60px;*/
		}
		</style>
		<div class="navbar navbar-fixed-top nav-top-min user-top">
			<div class="navbar-inner">
				<!-- <div class="container-fluid"> -->
					<a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse">
						<!-- <i class="icon-collapse icon-2x"></i> -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" style="margin-left:30px;" href="#">{{{$company->brand}}}</a>

					<div class="nav-collapse collapse">

	                		<ul class="nav">
	                			<li>
	                				<a href="/">home</a>
	                			</li>

							    @foreach($company->menus() as $item)
							        <li><a class="{{ (Request::is($item) ? 'active' : '') }}"
							        	href="{{{$item}}}{{--URL::to('#'.$item)--}}">{{{$item}}}</a></li> 
							    @endforeach

	    					</ul>

							<!-- admin/user nav -->
		                	<ul class="nav pull-right bam">

		                        @if (Auth::check())
		                        	<!-- User Roles go here -->
    

		                            @if (Auth::user()->hasRole('admin'))
		                             <li class="{{ (Request::is('admin/blogs/create*') ? 'active' : '') }}">
		                                <a href="{{{ URL::to('admin/blogs/create') }}}"><i class="icon-bullhorn icon-white"></i> New</a>
		                            </li>

		                            <li>
		                            	<a href="{{{ URL::to('admin') }}}">Dash</a>
		                            </li>
		                            @endif


		                            <li>
		                            	<a href="{{{ URL::to('user') }}}">Name: {{{ Auth::user()->username }}}</a>
		                            </li>
		                            <li>
		                            	<a href="{{{ URL::to('user/logout') }}}">Logout</a>
		                            </li>
		                        @else
		                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}>
		                            	<a href="{{{ URL::to('user/login') }}}">Login</a>
		                            </li>
		                        @endif
		                    </ul>

	    			</div>
					<!-- ./ nav-collapse -->
				<!-- </div> -->
				<!-- ./container-fluid -->
			</div>
			<!-- navbar-inner -->
					
		</div>
		<!-- navbar -->

			<!-- </div> -->
			<!-- //this is the only place to put india! -->
			<!-- <div class="india pull-right"> -->
					<!-- <div>phone, email, chat, anything!</div> -->
				<!-- <div> -->
					<!-- <img src="http://gristech.com/img/contactus.png" alt="learn php laravel web design"> -->
				<!-- </div> -->
			        
			<!-- </div> -->
		<!-- </div> -->
		<!-- ./ navbar -->