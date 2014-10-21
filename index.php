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
        
        
        <div id="intro-wrapper">
        
        
        
        
        	<div id="imagedisplay">
			    <div id="s1" class="slider_item active" style="height:800px;">
				    <h1 style="position:relative; top:150px;">Dreaming &nbsp;&nbsp;of&nbsp;&nbsp; Provence</h1>
			    </div>
			    
			    <div id="s2" class="slider_item">
				    <img src="images/intro1.jpg" alt="Intro Background">
			    </div>
			    
			    <div id="s3" class="slider_item">
				    <img src="images/intro2.jpg" alt="Intro Background">
			    </div>
			    
			    <div id="s4" class="slider_item last">
				    <img src="images/intro3.jpg" alt="Intro Background">
			    </div>
			</div>
        	
        	
        
        
        
	        
	        
	        
        </div>
        <!--intro-wrapper-->
        
        
        
        
      <?php include('inc-footer.php');?>  
        <script>
	        $(document).ready(function(){
		        $('#homea').addClass('active');
		        $(this).homeloopslide();
	        });
        </script>
        
        </body>
</html>
