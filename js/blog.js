window.onload = function(){

	var navigationBarHeight = $('.page_header').outerHeight();
	var hasScrollTakenPlace, lastScrollTopPosition, scrollDelta;

	$(window).scroll(function(event){
	    hasScrollTakenPlace = true;
	});

	setInterval(function() {
	    if (hasScrollTakenPlace) {
	        hasScrolledEvent();
	        hasScrollTakenPlace = false;
	    }
	}, 250);

	function hasScrolledEvent() {
	    var scrollTop = $(this).scrollTop();

	    if(Math.abs(lastScrollTopPosition - scrollTop) <= scrollDelta)
	        return;
	   
	    if (!lastScrollTopPosition) {
	    	lastScrollTopPosition = scrollTop;
	    	return;
	    }

	    if (scrollTop > lastScrollTopPosition && scrollTop > navigationBarHeight){
	        $('.page_header').removeClass('swingInX').addClass('swingOutX');
	    } else {
	        if(scrollTop + $(window).height() < $(document).height()) {
	           $('.page_header').removeClass('swingOutX').addClass('swingInX');
	        }
	    }
	    
	    
	}
}

