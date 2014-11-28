<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1167">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/layout.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        
        <?php include("inc-topmenu.php");?>
        
        
        <div id="inner-wrapper">
	        <h1 class="left" "margin">Villa & Rates</h1>
	     </div>
        <!--inner-wrapper-->
        
        
        <div id="large-wrapper">
	        <div class="warp">

	        	<div class="rate-group-wrapper">
			        <div class="s1">
				        <h2>Superior Villa</h2>
				        <a href="superior-villa.php">
					        <img src="images/h1.jpg">
					        <div class="readmore">
						        <img src="images/readmore.png">
					        </div>
				        </a>
			        </div>
			        <div class="s1">
				        <h2>Deluxe Villa</h2>
				        <a href="deluxe-villa.php">
					        <img src="images/h2.jpg">
					        <div class="readmore">
						        <img src="images/readmore.png">
					        </div>
				        </a>
			        </div>
			        <div class="s1">
				        <h2>Two-Bedroom Villa</h2>
				        <a href="suite-room.php">
					        <img src="images/h3.jpg">
					        <div class="readmore">
						        <img src="images/readmore.png">
					        </div>
				        </a>
			        </div>
			        
			        <div class="clearfix"></div>
			        
		        </div>
		        <!--rate-group-wrapper-->
		        
		       
		        
		        <div class="linelarge"><br>
			        <img src="images/line-large.jpg">
		        </div>
		        
		        
		         <div id="area-wrapper">
		        	<!-- <div id="n1"><img src="images/n1.png"></div>
		        	<div id="n2"><img src="images/n2.png"></div> -->
			        <img id="pc" src="images/area.jpg">
			        <img id="mob" src="images/area-mobile.jpg">
		        </div>
		        <!--area-wrapper-->
		        
		        
		        
	        </div>
	        <!--warp-->

	         <div class="gotop">
	        <img src="images/gotop.png">
        </div>
        </div>
        <!--large-wrapper-->
        
        
        
        
        
        
<?php include('inc-footer.php');?> 
        
        
        <script>
	        $(document).ready(function(){
		        $('#villaa').addClass('active');
		        $(this).areaAnimate0();
		        $(this).areaAnimate1();
		        $(this).areaAnimate2();
	        });
        </script>
    </body>
</html>
