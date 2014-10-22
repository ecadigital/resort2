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
	        <h1 class="left">Gallery</h1>
	    </div>
        <!--inner-wrapper-->
        
       
       
        <div id="wrap-inner">
            <div class="contentsam">
                <div class="tiles">
                    <div class="tile double">
                        <a class="group1" href="images/gallery-1.jpg">
                            <img src="images/gallery-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile">
                        <a class="group1" href="images/gallery-2.jpg">
                            <img src="images/gallery-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile block last">
                        <a class="group1" href="images/gallery-3.jpg">
                            <img src="images/gallery-3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="tile">
                        <a class="group1" href="images/gallery-4.jpg">
                            <img src="images/gallery-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile">
                        <a class="group1" href="images/gallery-5.jpg">
                            <img src="images/gallery-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile double block last">
                        <a class="group1" href="images/gallery-6.jpg">
                            <img src="images/gallery-6.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="tile double-vertical">
                        <a class="group1" href="images/gallery-7.jpg">
                            <img src="images/gallery-7.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile">
                        <a class="group1" href="images/gallery-8.jpg">
                            <img src="images/gallery-8.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile">
                        <a class="group1" href="images/gallery-9.jpg">
                            <img src="images/gallery-9.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile block last">
                        <a class="group1" href="images/gallery-10.jpg">
                            <img src="images/gallery-10.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tiles">
                    <div class="tile">
                        <a class="group1" href="images/gallery-11.jpg">
                            <img src="images/gallery-11.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile">
                        <a class="group1" href="images/gallery-12.jpg">
                            <img src="images/gallery-12.jpg" alt="">
                        </a>
                    </div>
                    <div class="tile block last">
                        <a class="group1" href="images/gallery-13.jpg">
                            <img src="images/gallery-13.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="linelarge">
                    <img src="images/flower-line3.jpg" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            <!--contentsam-->

        </div>
       <!--wrap-inner-->
        
        
        
<?php include('inc-footer.php');?> 
        
        
        <script>
	        $(document).ready(function(){
		        $('#gallerya').addClass('active');
		        $('.tile>a').colorbox({
                    rel: "group1"
                });
	        });
        </script>
    </body>
</html>
