$(document).ready(function(){
	
		
	$('.color1').click(function(){	
		$('body').addClass('color_one').removeClass('color_two color_three color_four color_five color_six color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
		
	$('.color2').click(function(){	
		$('body').addClass('color_two').removeClass('color_one color_three color_four color_five color_six  color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
		
	$('.color3').click(function(){	
		$('body').addClass('color_three').removeClass('color_one color_two color_four color_five color_six  color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
		
	$('.color4').click(function(){	
		$('body').addClass('color_four').removeClass('color_one color_two color_three color_five color_six  color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
		
	$('.color5').click(function(){	
		$('body').addClass('color_five').removeClass('color_one color_two color_three color_four color_six  color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
		
	$('.color6').click(function(){	
		$('body').addClass('color_six').removeClass('color_one color_two color_three color_four color_five color_seven color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
	$('.color7').click(function(){	
		$('body').addClass('color_seven').removeClass('color_one color_two color_three color_four color_five color_six color_eight color_nine color_ten color_eleven color_twelve');
	} ); 
	
	$('.color8').click(function(){	
		$('body').addClass('color_eight').removeClass('color_one color_two color_three color_four color_five color_six color_seven color_nine color_ten color_eleven color_twelve');
	} ); 
	
	$('.color9').click(function(){	
		$('body').addClass('color_nine').removeClass('color_one color_two color_three color_four color_five color_six color_seven color_eight color_ten color_eleven color_twelve');
	} ); 
	
	$('.color10').click(function(){	
		$('body').addClass('color_ten').removeClass('color_one color_two color_three color_four color_five color_six color_seven color_eight color_nine color_eleven color_twelve');
	} ); 
	
	$('.color11').click(function(){	
		$('body').addClass('color_eleven').removeClass('color_one color_two color_three color_four color_five color_six color_seven color_eight color_nine color_ten color_twelve');
	} ); 
	
	$('.color12').click(function(){	
		$('body').addClass('color_twelve').removeClass('color_one color_two color_three color_four color_five color_six color_seven color_eight color_nine color_ten color_eleven ');
	} ); 
	
	
	
	
	
	
	
	
	
	
	
	
	

	$(".site-color-panel-box .color-panel-spinner").on('click', function (event) {
        event.preventDefault();
        if ($(this).hasClass("color-panel-icon")) {
            $(".site-color-panel").stop().animate({
                left: "-200px"
            }, 500);
        } else {
            $(".site-color-panel").stop().animate({
                left: "0px"
            }, 500);
        }
        $(this).toggleClass("color-panel-icon");
        return false;
    });

	
	
	
	
} );
