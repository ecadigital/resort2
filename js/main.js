$(document).ready(function(){
	
	//lightbox
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2'});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
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
	
	
	
	
	
});
