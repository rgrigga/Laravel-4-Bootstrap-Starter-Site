

<!-- @section('contact') -->

{{Form::open(array('url'=>'tags/','method'=>'get'))}}
<input name="tag" id="tag" type="text" class="search-query" placeholder="Search for anything" value="foo">
{{Form::close()}}

<div class="iconbar pull-right" style="padding-top:5px">
<!-- 	<div class="iconbutton">
		
	</div> -->
    <a href="mailto:ryan.grissinger@gmail.com" class="social-icon">
        <i class="icon-envelope-alt icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
    </a>
    <a href="tel:6142039405" class="social-icon">
        <i class="icon-phone-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
    </a>
	<a href="http://facebook.com/ryangrissinger" class="social-icon">
	    <!-- <img src="http://gristech.com/img/facebook.png" class="img-circle"> -->
		<i class="icon-facebook-sign icon-2x"></i>
	</a>
    <a href="http://twitter.com/ryangrissinger" class="social-icon">
    	<i class="icon-twitter-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/img/twitter.png" class="img-circle"> -->
    </a>
    <a href="http://linkedin.com/ryangrissinger" class="social-icon">
    	<i class="icon-linkedin-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/linkedin.png" class="img-circle"> -->
    </a>


</div>