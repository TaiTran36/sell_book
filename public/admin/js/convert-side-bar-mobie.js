$(document).ready(function(){
	$('.glyphicon-align-justify').on('click', function () {
        $('#side-bar').toggleClass("active",1000);
        var windowsize = $(window).width();
			if(windowsize > 1100){
        		$('#contain-main').toggleClass("deactive",1000);
        	}
    });
	resizeScreenAuto();

	function resizeScreenAuto(){
		$(window).resize(function(){
			var windowsize = $(window).width();
			if(windowsize >= 1200){
				$('#contain-main').removeClass('deactive');
				$('#side-bar').removeClass("active");
				
			}
			if(windowsize < 1200){
				
			}
		});
	}

	$('.user-info').click(function () {
		if (!$("#dropdown-menu-user").hasClass("show-drop")) {
	        $(".dropdown-menu-user").animate({
	        	opacity: 1,
			 	width:'250px',
			 	height:'170px'
	        	}, 200);
	        $('#dropdown-menu-user').addClass('show-drop') ; 
	        $('.user-info-items').html('<div><img src= " '+'{{asset("client/img/preloader.gif")}}'+ ' width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');                          
	    } 
	    else {
	    	$(".dropdown-menu-user").animate({
	        	opacity: 0,
			 	width:'0',
			 	height:'0'
	        	}, 200);
	    	$('#dropdown-menu-user').removeClass('show-drop') ;
		}

	});

});