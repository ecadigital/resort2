$(document).ready(function(){
	
	//lightbox
				//Examples of how to assign the Colorbox event to elements
				$(".cgroup").each(function(item){
					item++;
					$(this).find("a").attr("rel","group"+item);
				});
				$(".cgroup a").colorbox({fixed: true,maxWidth: "100%",maxHeight: "100%",previous: "<span class=\"fa-stack fa-lg fa-2x\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-angle-left fa-stack-1x fa-inverse\"></i></span>",next: "<span class=\"fa-stack fa-lg fa-2x\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-angle-right fa-stack-1x fa-inverse\"></i></span>"});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});

	
	
	
	//area//
	$.fn.areaAnimate0 = function () {
		$("#area-wrapper").delay(200).queue(function(next) {
		  $(this).addClass("animated");
		  next();
		});
    };
	
	
	$.fn.areaAnimate1 = function () {
		$("#n1").delay(700).queue(function(next) {
		  $(this).addClass("scalefull");
		  next();
		});
    };
    
    $.fn.areaAnimate2 = function () {
		$("#n2").delay(900).queue(function(next) {
		  $(this).addClass("scalefull");
		  next();
		});
    };
    //end area//
	
	
	//home slide
	$.fn.homeloopslide = function () {
		var cur = 0;
		var count = $('.slider_item').length;
		
		$('.slider_item').hide();
		$('.slider_item').eq(0).show();
		
		setInterval(function() {    
		    $('.slider_item').eq(cur).fadeOut(1400,function () {
		        $(this).removeClass('active');
		        cur = (cur + 1) % count;
		        $('.slider_item').eq(cur).addClass('active').fadeIn(1700);
		    });
		}, 3800);
	}
	

	
	
	
	//gotop
	$(".gotop").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("body").offset().top
                    }, 2000);
                //});
    });
	
	$("img[usemap]").rwdImageMaps();
	var iAmHash = window.location.hash;
	$(iAmHash).ScrollTo({
		duration: 2000,
		offsetTop: 130,
    	easing: 'linear'
    });
	// if (iAmHash !== "" && $(iAmHash).length !== 0){
	// 	console.log($(iAmHash).offset());
	// 	$('html, body').animate({
	//         scrollTop: $(iAmHash).offset().top-130
	//     }, 2000);
 //    }
});
