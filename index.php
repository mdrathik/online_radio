<?php
session_start();
require 'controller/dashboard.php';
$object=new DashBoard();
$album=$object->Album();
$top_song=$object->TopSongList();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Title-Radio Station</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="For Seo Keyword" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----------------------------------------- Custom Theme files--------------------------------------- -->
<link href="asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="asset/css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- ---------------------------------------Custom Theme files--------------------------------------- -->


<!-- ---------------------------------------font-awesome icons--------------------------------------- -->
<link href="asset/css/font-awesome.css" rel="stylesheet">
<!-- ---------------------------------------//font-awesome icons--------------------------------------- -->


<!----------------------------------------- js ----------------------------------------->
<script src="asset/js/jquery-2.2.3.min.js"></script>
<script src="asset/js/custom.js"></script>
<!----------------------------------------- js ----------------------------------------->


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
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=635983393233255";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

	<!-- ---------------------------------------banner start here--------------------------------------- -->
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
    <!-----------------------------------------end banner here----------------------------------------------->


	   <!----------------------------------------- navigation start----------------------------------------->

        <?php include_once 'view/navbar.php'?>
		<!----------------------------------------- navigation end----------------------------------------->


        <!-----------------------------------------middle Menu star----------------------------------------->
        <?php include_once 'view/middlemenu.php'?>
        <!-----------------------------------------middle Menu end----------------------------------------->


	</div>






	<!-- ---------------------------------------welcome--------------------------------------- -->
	<div class="welcome agileits">
		<div class="container">
			<h2 class="agile-title">Welcome To Our Site</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor dolor, id egestas felis tristique vel. Donec malesuada, lorem sed vulputate tincidunt, nulla quam pulvinar mi, blandit placerat odio neque quis risus. Nullam ultricies erat non lectus aliquam, eu finibus neque semper. Morbi viverra, neque sit amet pretium blandit, dui mauris lacinia metus, a rhoncus erat ipsum vitae augue. Morbi laoreetvenenatis nulla, et venenatis purus scelerisque id. Vestibulum non facilisis lectus, quis accumsan mi.</p>
		</div>
	</div>
	<!----------------------------------------- //welcome end----------------------------------------->




	<!------------------------------------------ albums start ----------------------------------------->
	<div class="albums">
		<div class="container">
			<h3 class="agile-title">New Albums</h3>
			<div>
                <?php foreach ($album as $key) {?>
			<div class="col-md-6 w3lsalbums-grid">
				<div class="albums-left">
					<div class="wthree-almub">
					</div>
				</div>
				<div class="albums-right">
					<h4><?php echo $key['album_name'];?>-<?php echo $total_song=$object->total_song($key['album_id']);?></h4>
					<p><?php echo $key['description'];?></p>
					<a class="w3more btn btn btn-xs btn-success" href="album.php?album_id=<?php echo base64_encode($key['album_id'].":rathik")?>)"><i class="fa fa-mail-forward" aria-hidden="true"></i>Listen</a>
					<a class="w3more btn btn btn-xs btn-danger" href="single.html"><i class="fa fa-download" aria-hidden="true"></i>Buy Now - $5</a>
				</div>
				<div class="clearfix"></div>
			</div>

                <?php } ?>

		</div>


			<div class="clearfix"></div>
		</div>
	</div>
	<!--- ----------------------------------------------albums end------------------------------------------->






		<h2 class="agile-title">Most Popular All time</h2>

	<main class="container pt-5">
		<div class="row">
			<div class="col-md-8 card mb-5">
				<div class="card-block p-0">
					<table class="table table-bordered table-sm m-0">
						<thead class="">
						<tr>
							<th>Multiple</th>
                            <th>Album Art</th>
							<th>Title</th>
							<th>Artist</th>
                            <th>Album</th>
							<th>Genre</th>
                            <th>Year</th>
							<th class="text-center">Listen</th>
							<th class="text-center">Dowload/Buy</th>
						</tr>
						</thead>
						<tbody>


                        <?php foreach ($top_song as $key){ ?>
						<tr>
							<td>
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-indicator"></span>
								</label>
							</td>
                            <td><?php echo "cover link" /*$key['album_cover']*/?></td>
							<td><?php echo $key['song_name']?></td>
							<td><?php echo $key['artist_name']?></td>
							<td><?php echo $key['album_name']?></td>
                            <td><?php echo $key['genare_song']?></td>
                            <td><?php echo $key['publish_year']?></td>
							<td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3?_=8"><a href="http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3">http://radiotodaybd.fm/wp-content/uploads/music-topchart/3.Dhoa-Fuad-feat-Imran.mp3</a></audio></td>
                            <td>

                                <button class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></button>
                                <button class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></button>
                            </td>
						</tr>
                       <?php } ?>

						</tbody>
					</table>
				</div>

			</div>

<!--------------------------------top song start--------------------------------->

			<div class="col-md-4 card mb-5">
                <div class="fb-comments" data-href="https://developers.facebook.com/tools/comments/635983393233255/" data-numposts="5" width="400px"></div>
			</div>
		</div>
	</main>
<br><br>





	<!------------------------------------------ events---------------------------------------- -->
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
	<!-- ---------------------------------------------------------events --------------------------------------->



    <!---------------------------------------------footer start here------------------------->


    <!-----------------------------------------------footer end here---------------------->



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

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="asset/js/bootstrap.js"></script>



</body>
</html>
