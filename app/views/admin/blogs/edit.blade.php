@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Blog Post Update ::
@parent
@stop

{{-- Content --}}
@section('content')


<div class="page-header">
					<h3>
						Blog Management

						<div class="pull-right">
							<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a>
						</div>
					</h3>
					<h4>
						<em>Title: </em>{{{ $post->title }}}
					</h4>
					<h5>
						<em>Link: </em><a href="{{{ URL::to('blog/'.$post->slug) }}}">{{{ URL::to('blog/'.$post->slug) }}}</a>
					</h5>



					<ul class='tag'>
						<li><i class="icon-tag"></i> tags:</li>
						@foreach($post->tags() as $tag)
				    <li>{{ $tag }}</li>
					    
					@endforeach
					</ul>


				</div>

<div class="page-header">



<!-- {{{ var_dump($post->tags()) }}} -->
<style>

/*	ul.tag li{
	    display: inline;
	    background-color: orange;
	    padding: 5px;
	}*/
</style>
		<div class="pull-right">
			<a href="{{{ URL::to('admin/blogs') }}}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back to Post List</a>
		</div>

<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<!-- ./ csrf token -->


 <div class="accordion" id="accordion">
<!--  	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
 				<h3>
						Blog Post Update

						
					</h3>
 			</a>
 		</div>
 		 		<!-- add class 'in' to the next div to expand on pageload ->

 		<div id="collapseOne" class="accordion-body collapse">
 			<div class="accordion-inner">
 				
 			</div>
 		</div> -->
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
 				<h3>Meta</h3>
 			</a>
 		</div>
 		<!-- add class 'in' to the next div to expand on pageload -->
 		<div id="collapseTwo" class="accordion-body collapse">
 			<div class="accordion-inner">

				<!-- Meta Title -->

				<p>Meta Title is the text that appears at the top of the browser window when the user looks at your page. It also helps search engines understand what your page is about.  Therefore, it should be simple, descriptive, and use a keyword or two.</p>
				<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
					<label class="control-label" for="meta-title">Meta Title</label>
					<div class="controls">
						
						<input type="text" name="meta-title" id="meta-title" 

						value="{{{ Input::old('meta-title', $post->meta_title) }}}" />
						{{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta title -->

				<!-- Meta Description -->
				<p><i class="icon-facebook"></i> Meta Description is a 158 character summary of your post.  The Meta-Description may be displayed as the text for a google result, for example...</p>
				<p>It is also used on facebook</p>

				<div class="control-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
					
					<label class="control-label" for="meta-description">Meta Description</label>

					<div class="controls">
						<!-- <textarea class="full-width span10 wysihtml5" name="content" value="content" rows="20">{{{ Input::old('content', $post->content) }}}</textarea> -->
					
						<textarea class="full-width span10 wysihtml5" rows="4" name="meta-description" id="meta-description">{{{ Input::old('meta-description', $post->meta_description) }}}</textarea>

						{{{ $errors->first('meta-description', '<span class="help-inline">:message</span>') }}}
					</div>

				</div>
				<!-- ./ meta description -->

				<!-- Meta Image -->
	<!-- 			<div class="control-group {{{ $errors->has('meta-image') ? 'error' : '' }}}">
					<label class="control-label" for="meta-image">Meta Image</label>
					<div class="controls">
						<input type="text" name="meta-image" id="meta-image" value="{{{ Input::old('meta-image', $post->meta_image) }}}" />
						{{{ $errors->first('meta-image', '<span class="help-inline">:message</span>') }}}
					</div>
				</div> -->
				<!-- ./ meta image -->

				<!-- Meta Keywords -->
				<p>Enter keywords and/or key phrases as a list separated by commas.  For example: "".  The keywords or "tags" are one of the most important factors in SEO.  These also help your content appear correctly.  Your posts already automagically contain an internal tag that links your post to your site.  </p>
				<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
					<label class="control-label" for="meta-keywords">Meta Keywords</label>


					<div class="controls">
						<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', $post->meta_keywords) }}}" />
						{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta keywords -->

 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
 				<h3>General</h3>
 			</a>
 		</div>
 		<div id="collapseThree" class="accordion-body collapse">
 			<div class="accordion-inner">
<!-- Post Title -->
			<div class="control-group {{{ $errors->has('title') ? 'error' : '' }}}">
				<label class="control-label" for="title">Post Title</label>
				<div class="controls">
					<input type="text" name="title" id="title" value="{{{ Input::old('title', $post->title) }}}" />
					{{{ $errors->first('title', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ post title -->



			<!-- Content -->
			<div class="control-group {{{ $errors->has('content') ? 'error' : '' }}}">
				<label class="control-label" for="content">Content</label>
				<div class="controls">
					<textarea class="full-width span10 wysihtml5" name="content" value="content" rows="20">{{{ Input::old('content', $post->content) }}}</textarea>
					{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
				</div>
			</div>
			<!-- ./ content -->

			<!-- Image -->

			
			<div class="control-group {{{ $errors->has('image') ? 'error' : '' }}}">
				<label class="control-label" for="image">http://gristech.com/img/</label>
				<div class="controls">
<!-- 					<textarea class="full-width span10 wysihtml5" name="image" value="image" rows="1">{{{ Input::old('image', $post->image()) }}}</textarea> -->
					<input type="text" name="image" id="image" value="{{{ Input::old('image', $post->image) }}}" />
					{{{ $errors->first('image', '<span class="help-inline">:message</span>') }}}
				</div>
				<div class="thumbnail span6 controls">
					<img src="http://gristech.com/img/{{ $post->image }}" alt="The Old Image should appear here">
					<p class="muted text-center">http://gristech.com/img/{{ $post->image }}</p>
				</div>
			</div>
			<!-- ./ image -->
 			</div>
 		</div>
 	</div>
 </div>



<!-- Tabs -->

	<!-- <ul class="nav nav-tabs">
		<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		<li><a href="#tab-meta-data" data-toggle="tab">Meta Data</a></li>
	</ul> -->

<!-- ./ tabs -->

<!-- Tabs Content -->

	<!-- <div class="tab-content"> -->
		<!-- General tab -->
		<!-- <div class="tab-pane active" id="tab-general">			 -->
			<!-- moved -->
		<!-- </div> -->
		<!-- ./ general tab -->


		<!-- Meta Data tab -->
		<!-- <div class="tab-pane" id="tab-meta-data"> -->
			<!-- moved -->
		<!-- </div> -->
		<!-- ./ meta data tab -->
	<!-- </div> -->
<!-- ./ tabs content -->

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{{ URL::to('admin/blogs') }}}">Cancel</a>
			<button type="reset" class="btn">Reset</button>
			<button type="submit" class="btn btn-success">Publish</button>
		</div>
	</div>
	<!-- ./ form actions -->
</form>
@stop
