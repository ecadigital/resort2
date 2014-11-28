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
	        <h1 class="margin">Villa & Rates</h1>
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
			        <img id="pc" src="images/area.jpg" usemap="#areapoint" width="1162" height="795">
			        <img id="mob" src="images/area-mobile.jpg">
			        <map name="areapoint">
			        	<area shape="rect" coords="583, 153, 718, 174" href="suite-room.php#suite" />
					    <area shape="circle" coords="892, 210, 19" href="deluxe-villa.php#wing" />
					    <area shape="circle" coords="837, 250, 18" href="deluxe-villa.php#lesfleurs" />
					    <area shape="circle" coords="743, 294, 20" href="superior-villa.php#lavender" />
					    <area shape="circle" coords="707, 217, 19" href="superior-villa.php#sunflower" />
					    <area shape="circle" coords="621, 309, 20" href="superior-villa.php#lamon" />
					    <area shape="circle" coords="535, 211, 21" href="superior-villa.php#lamer" />
					    <area shape="circle" coords="518, 345, 20" href="superior-villa.php#artists" />
					    <area shape="circle" coords="475, 232, 19" href="superior-villa.php#voyage" />
					    <area shape="circle" coords="434, 375, 19" href="superior-villa.php#butterfly" />
					    <area shape="circle" coords="381, 256, 18" href="deluxe-villa.php#princess" />
					    <area shape="circle" coords="337, 372, 19" href="deluxe-villa.php#rose" />
					    <area shape="circle" coords="273, 274, 19" href="superior-villa.php#bonjour" />
					    <area shape="circle" coords="141, 486, 19" href="deluxe-villa.php#inlove" />
					    <area shape="circle" coords="141, 315, 21" href="deluxe-villa.php#olive" />
					    <area shape="circle" coords="54, 278, 20" href="deluxe-villa.php#angle" />
					</map>
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
