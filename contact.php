<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title-Radio Station</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="For Seo Keyword" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="asset/css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="asset/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="asset/js/jquery-2.2.3.min.js"></script>
	<script src="asset/js/custom.js"></script>

	<!-- //js -->


	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="asset/js/move-top.js"></script>
	<script type="text/javascript" src="asset/js/easing.js"></script>
	<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- <script language=JavaScript>
         //Disable right click script
         var message = "";
         ///////////////////////////////////
         function clickIE() {
             if (document.all) {
                 (message);
                 return false;
             }
         }

         function clickNS(e) {
             if (document.layers || (document.getElementById && !document.all)) {
                 if (e.which == 2 || e.which == 3) {
                     (message);
                     return false;
                 }
             }
         }
         if (document.layers) {
             document.captureEvents(Event.MOUSEDOWN);
             document.onmousedown = clickNS;
         } else {
             document.onmouseup = clickNS;
             document.oncontextmenu = clickIE;
         }

         document.oncontextmenu = new Function("return false")
     </script>-->
</head>
<body>



    <div class="agileinfo-main about-top">
        <div class="banner">
        </div>

        <!-------------------------------navbar start------------------------------->
        <?php include_once 'view/navbar.php'?>
        <!------------------------------- navbar end------------------------------->

        <!-------------------------------middlemenu start------------------------------->
        <?php include_once 'view/middlemenu.php'?>
        <!-------------------------------middlemenu end------------------------------->


    </div>



	<!------------------------------- contact ------------------------------->
	<div class="contact">
		<div class="container">  
			<h2 class="agile-title">Contact Us</h2>
			<div class="col-md-7 contact-right">				
				<form action="#" method="post"> 
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email" required=""> 
					<input type="text" name="Telephone" placeholder="Telephone" required="">
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-5 contact-left">
				<p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						756 globel Place, Australia.
					</li>					
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						+123 2222 222
					</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<a href="mailto:example@mail.com">mail@example.com</a>
					</li>
				</ul>
			</div>						
			<div class="clearfix"> </div> 
			<div class="map">
				<h3 class="agile-title">How to Find Us</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>
			</div> 
		</div>			
	</div>
	<!-- /--------------------------/contact ---------------------------->




    <!----------------------------------------- footer start here ----------------------------------------->
    <?php include_once 'view/footer.php' ?>
    <!----------------------------------------- footer start end ----------------------------------------->




    <!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>