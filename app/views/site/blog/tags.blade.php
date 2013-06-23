@extends('site.layouts.default')

{{-- Content --}}
@section('content')

<div class="hero-unit">
<ul class="tag">
	<li><i class="icon-tag"></i></li>


		@foreach ($tags as $mytag)
			<li><a href='/tags/{{$mytag}}'>{{$mytag}}</a></li>
		@endforeach
	
</ul>

<h3>Coming soon...</h3>
<ul class="tag">
	<li><i class="icon-tag"></i></li>
	<?php

		foreach ($tags as $mytag) {
			echo "<li><a href='/tags/$mytag'>$mytag</a></li>";
		}

	?>
</ul>

<!-- 	<li><a href="101">101</a></li>

	<li>foo</li>
	<li>bar</li>
	<li>wer</li>
	<li>ger</li>
	<li>dfg</li>
	<li>etg</li> -->



	<h1>Tags<small>Find what you came for:</small></h1>
	<!-- Route::get('russ', 'RussController@getIndex'); -->
</div>


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
								
							    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
							    
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

					<!-- Comments -->
						&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
						| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
						| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
					</p>

				</div>
				<!-- span8 -->
			</div>
			<!-- row -->
			<!-- ./ post footer -->
		</div>
		<!-- well -->

	</div>

	<!-- <hr /> -->
@endforeach
</div>

{{ $posts->links() }}
<!-- https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/issues/49 -->


@stop
