<!-- This was written with bs 2.32 -->
<!-- navbar-post-edit -->
<!-- <h1>lorem10</h1> -->
	<style>

		.user-top{
			position:fixed;
		}
		.user-top .navbar-inner{
			/*padding-left: 20px;*/
		}
		.mybutton{
			display: inline-block;
		}

		.admin-blog-nav .brand {
			/*margin-left: 20px;*/
			/*background-color: red;*/
		}
	</style>
    <div class="navbar navbar-fixed-top user-top admin-blog-nav">
<div class="container">
<!-- 	<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	</div> -->

	    <div class="navbar-inner">
		    <a class="brand" href="#">Post:</a>
		    <div class="btn-group">

				<button type="submit" class="btn btn-success">
					<i class="icon-save"> </i>
					<span class="visible-sm visible-md mybutton">Save</span>
					
				</button>
		    	<button type="reset" class="btn btn-danger">
		    		<i class="icon-undo"> </i>
		    		<span class="visible-sm visible-md mybutton">Reset</span>
		    	</button>

			    <a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-info">
			    	<i class="icon-plus-sign icon-white"></i>
			      	<span class="visible-sm visible-md mybutton">New</span>
			    </a>

				<a href="{{{ URL::to('admin/blogs') }}}" class="btn btn-inverse">
					<i class="icon-circle-arrow-left icon-white"></i>
					<span class="visible-sm visible-md mybutton">Back to List</span>
				</a>
			</div>
			<!-- btn-group -->

		    <ul class="nav pull-right">
		    	<!-- http://css-tricks.com/make-a-view-source-button/ -->
				<li>
					<a href="{{{ URL::to('/') }}}">
					<i class="icon-home icon-white"></i>
					<span class="visible-sm visible-md">Homepage</span>
					</a>
				</li>
		    	<li>
		    		<a onClick='window.location="view-source:" + window.location.href'>
		    			<i class="icon-code"></i>
		    			<span class="visible-sm visible-md mybutton">source code</span>
		    		</a>
		    	</li>
			    <li>
			    	<a href="https://github.com/rgrigga/MyApp6">
			    		<i class="icon-code-fork"></i>
			    		<span class="visible-sm visible-md mybutton">fork</span>
			    	</a>
			    </li>

			    	<!-- <a class="btn btn-info" href="{{{ URL::to('admin/blogs') }}}">Cancel</a></li> -->
		    </ul>
	    </div>
</div>
    </div>