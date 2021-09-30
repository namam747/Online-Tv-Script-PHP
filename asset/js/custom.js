/*===preloader===*/
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 1000);
	
	$('a.page-scroll').on('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 500, 'easeInOutExpo');
		event.preventDefault();
	});
	
	
//Menu Fixed Top
		
var fixed_top = $(".menu-scroll");

$(window).on('scroll', function() {
	
	if( $(this).scrollTop() > 200 ){
		fixed_top.addClass("menu-fixed animated fadeInDown");
	}
	else{
		fixed_top.removeClass("menu-fixed animated fadeInDown");
	}
	
});

			


/*-----sponser----*/
 var swiper = new Swiper('.swiper-container1', {
        slidesPerView:6,
        paginationClickable: true,
        spaceBetween: 30,
		nextButton: '.swiper-button-next1',
        prevButton: '.swiper-button-prev1',
		loop: true,
		breakpoints: {
			1200: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

  
  
  
 /*---scroll-up--*/
var link,
	toggleScrollToTopLink = function(){
		
		if($("body").scrollTop() > 600 || $("html").scrollTop() > 0){
			link.fadeIn(500);
		}else{
			link.fadeOut(0);
		}
		
	};
	link = $(".scrollUp");
	
	$(window).scroll(toggleScrollToTopLink);
	
	toggleScrollToTopLink();
	
	link.on("click", function(){
		
		$("body").animate({scrollTop: 0});
		$("html").animate({scrollTop: 0});
		
	});


/*=====flexslider===*/
  
$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 90,
    itemMargin: 30,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
  


