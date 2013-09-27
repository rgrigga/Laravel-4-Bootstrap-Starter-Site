// $(document).ready(function() {
//     $('.wysihtml5').wysihtml5();
    // $('.page-header').css('background-color','red');
//     // $('.page-header').height($("#sidebar").height());
// });

    function loadXMLDoc(input)
    {
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      // alert(input);
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {

        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET",input,true);
    xmlhttp.send();
    }

function imgError(image){
    image.onerror = "";
    //could not get this to work with holder.js
    image.src = "http://placehold.it/300x300";
    return true;
}

$(document).ready(function(){
    // $('.page-header').css('background-color','red');

    // $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
    // $('.contentwrap') .css({'padding-top': (
    //     $('.user-top').height()
    //      + $('.admin-top').height()
    //      + 0 )+'px'
    // 	});

    // alert('jQuery loaded');
	$('.carousel-inner > .item:first').addClass('active');
	// $('.hero-unit').css('background-color','red');

    $('#side-wrapper').height($("#sidebar").height());
    
    // $(".nav").height()+2));
    $('.collapse-group .btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $collapse = $this.closest('.collapse-group').find('.collapse');
        $collapse.collapse('toggle');
    });

    // $('.wysihtml5').wysihtml5();
    // $('#about').tooltip({'placement':'top', 'trigger' : 'hover'});
    // $('.thumbnail').equalHeights();


});

$(window).resize(function(){
    // $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
    // $('.contentwrap') .css({'padding-top': (
    //     $('.user-top').height()
    //      + $('.admin-top').height()
    //      + 0 )+'px'
    // });
    columnConform();

});


