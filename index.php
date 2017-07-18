
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

	<!-- banner start here -->
	<div  class="agileinfo-main">
		<div class="slider">
			<script src="asset/js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 1
				  $("#slider1").responsiveSlides({
					 auto: true,
					 nav: true,
					 speed: 500,
					 namespace: "callbacks",
				  });
				});
			</script>
			<ul class="rslides" id="slider1">
				<li>
					<div class="banner">
						<h3>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </h3>
					</div>
				</li>
				<li>
					<div class="banner banner2">
						<h3>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit. </h3>
					</div>
				</li>
				<li>
					<div class="banner banner3">
						<h3>Sem fringilla blandit duis euismod massa ut . Proin vel enim nec ipsum finibus. </h3>
					</div>
				</li>
			</ul>
		</div>

	   <!-- navigation start-->

        <?php include_once 'view/navbar.php'?>

		<!-- navigation end-->


		<div class="top-nav">
			<span class="menu">Menu</span>	
			<ul class="w3l">
				<li><a class="active" href="index.html"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
				<li><a href="about.html"><i class="glyphicon glyphicon-user"></i><span>About</span></a></li>
				<li><a href="contact.html"><i class="glyphicon glyphicon-envelope"></i><span>Contact</span></a></li>
			</ul>
			<!-- script-for-menu -->
			<script>
			   $( "span.menu" ).click(function() {
				 $( "ul.w3l" ).slideToggle( 300, function() {
				 // Animation complete.
				  });
				 });
			</script>
			<!-- //script-for-menu -->
		</div>	
	</div>
	</nav>
	<!-- navigation end here -->
	<!-- banner end here -->
	<div class="banner-w3bottom">
		<div class="container">
			<div class="banner-w3bottom-row">
				<div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
					<div class="col-md-4 w3ls-bnrgrids-left">
						<i class="fa fa-music" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 w3ls-bnrgrids-right">
						<h4>Extra Text</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
					<div class="col-md-4 w3ls-bnrgrids-left">
						<i class="fa fa-film" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 w3ls-bnrgrids-right">
						<h4>Extra Text</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
					<div class="col-md-4 w3ls-bnrgrids-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 w3ls-bnrgrids-right">
						<h4>Extra Text</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //banner end here --> 
	<!-- welcome -->
	<div class="welcome agileits">
		<div class="container">
			<h2 class="agile-title">Welcome To Our Site</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor dolor, id egestas felis tristique vel. Donec malesuada, lorem sed vulputate tincidunt, nulla quam pulvinar mi, blandit placerat odio neque quis risus. Nullam ultricies erat non lectus aliquam, eu finibus neque semper. Morbi viverra, neque sit amet pretium blandit, dui mauris lacinia metus, a rhoncus erat ipsum vitae augue. Morbi laoreetvenenatis nulla, et venenatis purus scelerisque id. Vestibulum non facilisis lectus, quis accumsan mi.</p>
		</div>
	</div>
	<!-- //welcome -->


	<!--- albums -->
	<div class="albums">
		<div class="container">
			<h3 class="agile-title">New Albums</h3>
			<div>
			<div class="col-md-6 w3lsalbums-grid">
				<div class="albums-left">
					<div class="wthree-almub">
					</div>
				</div>
				<div class="albums-right">
					<h4>Dolores Btrs</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more btn btn btn-xs btn-success" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i>Listen</a>
					<a class="w3more btn btn btn-xs btn-danger" href="single.html"><i class="fa fa-download" aria-hidden="true"></i>Buy Now - $5</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3lsalbums-grid">
				<div class="albums-left">
					<div class="wthree-almub wthree-almub2">
					</div>
				</div>
				<div class="albums-right">
					<h4>Dolores Btrs</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more btn btn btn-xs btn-success" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i>Listen</a>
					<a class="w3more btn btn btn-xs btn-danger" href="single.html"><i class="fa fa-download" aria-hidden="true"></i>Buy Now - $5</a>	</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div>
				<div class="col-md-6 w3lsalbums-grid">
					<div class="albums-left">
						<div class="wthree-almub">
						</div>
					</div>
					<div class="albums-right">
						<h4>Dolores Btrs</h4>
						<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
						<a class="w3more btn btn btn-xs btn-success" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i>Listen</a>
						<a class="w3more btn btn btn-xs btn-danger" href="single.html"><i class="fa fa-download" aria-hidden="true"></i>Buy Now - $5</a>	</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 w3lsalbums-grid">
					<div class="albums-left">
						<div class="wthree-almub wthree-almub2">
						</div>
					</div>
					<div class="albums-right">
						<h4>Dolores Btrs</h4>
						<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
						<a class="w3more btn btn btn-xs btn-success" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i>Listen</a>
						<a class="w3more btn btn btn-xs btn-danger" href="single.html"><i class="fa fa-download" aria-hidden="true"></i>Buy Now - $5</a>	</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!--- //albums -->






		<h2 class="agile-title">Most Popular All time</h2>

	<main class="container pt-5">
		<div class="row">
			<div class="col-md-6 card mb-5">
				<div class="card-block p-0">
					<table class="table table-bordered table-sm m-0">
						<thead class="">
						<tr>
							<th>Multiple</th>
							<th>Title</th>
							<th>Artist</th>
							<th>Genre</th>
							<th class="text-center">Listen</th>
							<th class="text-center">Dowload/Buy</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-indicator"></span>
								</label>
							</td>
							<td>John Lilki</td>
							<td>September 14, 2013</td>
							<td>Action</td>
							<td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
						</tr>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td>John Lilki</td>
                            <td>September 14, 2013</td>
                            <td>Action</td>
                            <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td>John Lilki</td>
                            <td>September 14, 2013</td>
                            <td>Action</td>
                            <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
                        </tr>

						</tbody>
					</table>
				</div>

			</div>
			<div class="col-md-6 card mb-5">
				<div class="card-block p-0">
					<table class="table table-bordered table-sm m-0">
						<thead class="">
						<tr>
							<th>Multiple</th>
							<th>Title</th>
							<th>Artist</th>
							<th>Genre</th>
							<th>Listen</th>
                            <th>Download/Buy</th>
						</tr>
						</thead>
						<tbody>


                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td>John Lilki</td>
                            <td>September 14, 2013</td>
                            <td>Action</td>
                            <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td>John Lilki</td>
                            <td>September 14, 2013</td>
                            <td>Action</td>
                            <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </td>
                            <td>John Lilki</td>
                            <td>September 14, 2013</td>
                            <td>Action</td>
                            <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="asset/http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>
                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
                        </tr>


						</tbody>
					</table>
				</div>

			</div>
		</div>
	</main>
<br><br>





	<!-- events -->
	<div class="events">
		<div class="container">
			<h3 class="agile-title">Events</h3>
			<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>10<span>Nov</span></h4>
						<h6><a href="single.html">Sed ut perspiciatis unde omnis </a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>20<span>Dec</span></h4>
						<h6><a href="single.html">Voluptatem accusantium doloremque </a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //events -->





	<!-- footer start here -->
	<div class="agilebg-footer">
		<div class="footer">
			<div class="container">
				<div class="footer-agileinfo">
					<div class="col-md-3 col-sm-3 footer-wthree-grid">
						<h3>Navigation</h3>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li> 
							<li><a href="blog.html">Blog</a></li>
							<li><a href="codes.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-5 footer-wthree-grid">
						<h3>Latest Tweet</h3>
						<div class="agileits-w3layouts-tweets">  
							<h5><i class="fa fa-twitter" aria-hidden="true"></i> Lorem ipsum</h5> 
						</div>
						<p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p>
					</div>
					<div class="col-md-4 col-sm-4 footer-wthree-grid">
						<h3>Keep In Touch</h3>
						<div class="ftr-icons">
							<div class="ftr-iblock">
								<span class="glyphicon glyphicon-map-marker">  </span>
							</div>
							<div class="ftr-text">
								<p>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit.</p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					   <div class="ftr-icons">
							<div class="ftr-iblock">
								<span class="glyphicon glyphicon-earphone">  </span>
							</div>
							<div class="ftr-text">
								<p>+333 222 23456</p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					   <div class="ftr-icons">
							<div class="ftr-iblock">
							   <span class="glyphicon glyphicon-envelope">  </span>
							</div>
							<div class="ftr-text">
								<p><a href="mailto:info@example.com">mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					</div>
					<div class="clearfix"> </div>		
				</div>
			</div>
		</div>
	</div>



	<!-- //footer end here -->
	<!-- copy rights start here -->
	<div class="copy-right">
		<div  class="container">
			<p hidden >© 2017 Rock. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            <p>Developed by <a style="font-weight: bold" href="http://bd-servers.com" target="_blank">BD-servers</a>  and theme from W3layouts</p>
        </div>
	</div>
	<!-- //copy right end here -->  
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
    <script src="asset/js/bootstrap.js"></script>
  <!--  <script src="asset/js/southcast/jquery.shoutcast.min.js?host=119.148.23.88&port=1021"></script>-->

</body>
</html>
