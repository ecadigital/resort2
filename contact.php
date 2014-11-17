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
	        <h1 class="left">Map</h1>
	    </div>
        <!--inner-wrapper-->
        
       
       
       <div id="wrap-inner">
	       <div>
		       <img src="images/map.jpg" alt="">
	       </div>
	       <div class="contentsam">
	       	 <div class="line"><img src="images/line1.gif" alt="flower border 7"></div>
		       
	       		<form action="#" method="POST" class="p50" style="padding-right: 44px;">
		       		<h1 style="margin-top: -34px;">Contact us</h1>
		       		<p>Send an email, All fields with an * are required.</p>
		       		<label for="#">Name *</label>
		       		<input type="text">
		       		<label for="#">Email *</label>
		       		<input type="text">
		       		<label for="#">Subject *</label>
		       		<input type="text">
		       		<label for="#">Message *</label>
		       		<textarea name="textarea" cols="30" rows="10" style="height: 301px;"></textarea>
		       		<label>Send copy to yourself <input type="checkbox" name="sendback" value="1"></label>
		       		<input type="submit" value="Send Mail">
	       		</form>
		       <div class="p50">
		       		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3879.71193279412!2d99.264092!3d13.491840000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e356c6f26aaf47%3A0x450d2b322dbb26a!2sLa+Provence%2C+Suan+Phung!5e0!3m2!1sth!2sth!4v1413963718459" width="472" height="357" frameborder="0" style="border:0"></iframe>
		       		<img src="images/contact-right-2.jpg" alt="address image" style="margin-top: 37px;">
		       </div>
		       <div class="clearfix"></div>
	       
				 <div class="line"><img src="images/line2.gif" alt="flower border 8"></div>
		        <div class="clearfix"></div>
	       </div>
	       <!--contentsam-->
	       
       </div>
       <!--wrap-inner-->
       
               
        
        <div class="gotop">
	        <img src="images/gotop.png" alt="">
        </div>
        
        
       
        
        
        
<?php include('inc-footer.php');?> 
        
        
        <script>
	        $(document).ready(function(){
		        $('#contacta').addClass('active');
		        $(this).areaAnimate0();
	        });
        </script>
    </body>
</html>
