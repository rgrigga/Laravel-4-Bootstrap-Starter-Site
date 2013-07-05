@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Post Update ::
@parent
@stop

{{-- Content --}}
@section('content')

<style>
	.alpha{
		/*height: 400px;*/
		background-color: rgba(25,20,15,.5);
	}
	.beta{
		/*height: 400px;*/
		background-color: rgba(250,200,150,.5);
	}

	ul.tag li{
	    display: inline;
	    background-color: orange;
	    padding: 5px;
	}

</style>
<div class="pull-right">
	<a class="btn btn-info" href="{{{ URL::to('admin/blogs') }}}">Cancel</a>
	<button type="reset" class="btn">Reset</button>
	<button type="submit" class="btn btn-success">Publish</button>
</div>

<h3><a href="{{{ URL::to('blog/'.$post->slug) }}}">{{{ URL::to('blog/'.$post->slug) }}}</a></h3>
<form method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<!-- ./ csrf token -->


	 	<div class="accordion-group">
<!-- 	 		<em>accordian group</em> -->
	 		<div class="accordion-heading">
	 			<!-- <em>accordian heading</em> -->
	 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
	 				<h1>{{$post->title}}</h1>
	 			</a>
	 		</div>
	 		<!-- add class 'in' to the next div to expand on pageload -->
	 		<div id="collapseTwo" class="accordion-body collapse">
	 			
	 			<div class="accordion-inner">

					<!-- Meta Title -->
					<div class="control-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
						<label class="control-label" for="meta-title"><i class="icon-circle-arrow-up"></i>Meta Title</label>
						<div class="controls">
							<input type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', $post->meta_title) }}}" />
							{{ $errors->first('meta-title', '<span class="help-inline">:message</span>') }}
							<div class="pull-right">
								<a class="btn btn-info" href="{{{ URL::to('admin/blogs') }}}">Cancel</a>
								<button type="reset" class="btn">Reset</button>
								<button type="submit" class="btn btn-success">Publish</button>
							</div>
						</div>
					</div>
					<p>Meta Title is the text that appears at the top of the browser window when the user looks at your page. It also helps search engines understand what your page is about.  Therefore, it should be simple, descriptive, and use a keyword or two.</p>
	 			</div>
	 		</div>
	 	</div>


<ul class='tag'>
	<li><i class="icon-tag"></i> tags:</li>
	@foreach($post->tags() as $tag)
		<li>{{ $tag }}</li>
	@endforeach
</ul>


	 	<div class="accordion-group">
<!-- 	 		<em>accordian group</em> -->
	 		<div class="accordion-heading">
	 			<!-- <em>accordian heading</em> -->
	 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
	 				<img src="{{asset('/assets/img/'.$post->image)}}" alt="{{$post->image}}">
	 			</a>
	 		</div>
	 		<!-- add class 'in' to the next div to expand on pageload -->
	 		<div id="collapseOne" class="accordion-body collapse">
	 			
	 			<div class="accordion-inner">
					<div class="control-group {{{ $errors->has('image') ? 'error' : '' }}}">
						<label class="muted text-center control-label" for="image">{{asset('/assets/img/'.$post->image)}}</label>
						<div class="controls">
		<!-- 					<textarea class="full-width span10 wysihtml5" name="image" value="image" rows="1">{{{ Input::old('image', $post->image()) }}}</textarea> -->
							<input type="text" name="image" id="image" value="{{{ Input::old('image', $post->image) }}}" />
							{{{ $errors->first('image', '<span class="help-inline">:message</span>') }}}
							
							
							<div class="pull-right">
								<a class="btn btn-info" href="{{{ URL::to('admin/blogs') }}}">Cancel</a>
								<button type="reset" class="btn">Reset</button>
								<button type="submit" class="btn btn-success">Publish</button>
							</div>
						</div>
	<!-- 					<div class="thumbnail span6 controls">
							<img src="{{asset('/assets/img/'.$post->image)}}" alt="{{$post->image}}">
							<!- - <img src="http://gristech.com/img/{{ $post->image }}" alt="The Old Image should appear here"> - ->
						</div> -->
					</div>
					<!-- Meta Title -->

					<p>Your image should pop!  This feature image will be seen everywhere...</p>
	 			</div>
	 		</div>
	 	</div>
	
				







	<!-- <div class="page-header"> -->
	<div class="row-fluid">

		<div class="span8 beta thumbnail">
			<textarea name="body" id="blog">{{$post->meta_description}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ratione nesciunt ullam adipisci suscipit magni minus facere praesentium vero doloribus!</textarea>
			<p></p>	
		</div>
		<div class="span4 alpha thumbnail">
			<h4>Elsewhere:</h4>
			<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-large btn-info"><i class="icon-plus-sign icon-white"></i> New</a>
			<a href="{{{ URL::to('admin/blogs') }}}" class="btn btn-large btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back to List</a>
		</div>
	</div>
		
	<!-- </div> -->

	<!-- {{{ var_dump($post->tags()) }}} -->



						
		<div class="control-group">
		     
		</div>


	 		 <!-- add class 'in' to the next div to expand on pageload -->
	 		<div id="collapseOne" class="accordion-body collapse">
	 			<div class="accordion-inner">
	 				<div class="page-header">
						
						<h4><em>Title: </em>{{{ $post->title }}}</h4>
						

					</div>
	 			</div>
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
						
							<textarea class="full-width span12 wysihtml5" rows="4" name="meta-description" id="meta-description">{{{ Input::old('meta-description', $post->meta_description) }}}</textarea>

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

					<p>Enter keywords and/or key phrases as a list separated by commas.  For example: "seo, php, security".  These also help your content appear correctly.  Your posts already automagically contain an internal tag that links your post to your site.  </p>
					<p>Once thought to be important to SEO, google stopped using keywords in 2009.  More info soon...</p>
					<p>The keywords tag is tied to tags on this site.  So, this is a comma-separated list of tags.  It works the same way in wordpress.</p>
					<div class="control-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
						<label class="control-label" for="meta-keywords">Tags, aka<br>Meta Keywords</label>



						<div class="controls">
							<input type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', $post->meta_keywords) }}}" />
							{{{ $errors->first('meta-keywords', '<span class="help-inline">:message</span>') }}}
						</div>
					</div>
					<!-- ./ meta keywords -->


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

		<!-- ./ form actions -->
</form>
@stop
