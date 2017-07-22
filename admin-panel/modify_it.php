<?php 
    if(!isset($_GET['id'])) echo "<script>window.location = 'dashboard.php';</script>";
    include_once("includes/db_connect.php");
    include_once("includes/mfunction.php");
    $song_num =$_GET['id'];
    $con    = new Connection();
    $chk    = new Mfunction();    
    $chk->sessionCheck();
    if (isset($_POST['addSong'])) {
            $song_id = $song_num;
            $song_name = $_POST['songName'];
            $publish_year = $_POST['publish_year'];
            $album_name = $_POST['albumName'];
            $genare_name = $_POST['genreSong'];
            $artist_name = $_POST['artistName'];
            $price = $_POST['price'];
            $album_id =$_POST['album_id'];
            $artist_id =$_POST['artist_id'];
            $chk->updateSong($album_id, $artist_id, $song_id, $song_name, $publish_year, $album_name, $genare_name, $artist_name, $price);
           echo    "<script> window.location = 'editSong.php'; </script>";

    }
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Edit SONG</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <?php include 'includes/header.php'; ?>

    <div class="main-panel">
		 <?php include 'includes/upnav.php'; ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ADD Song</h4>
                            </div>
                            <?php     foreach ($chk->getEdit($song_num) as $key) { ?>
                            <div class="content">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Song ID</label>
                                                <input type="text" class="form-control" name="id" value="<?php echo $song_num; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Song Name</label>
                                                <input type="text" class="form-control" placeholder="E.g: In the End" name="songName" value="<?php echo $key['song_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Publish Year</label>
                                                <input type="number" class="form-control" placeholder="Eg: 2011" name="publish_year" value="<?php echo $key['publish_year']; ?>">
                                                <input type="hidden" name="album_id" value="<?php echo $key['album_id']; ?>">
                                                <input type="hidden" name="artist_id" value="<?php echo $key['artist_id']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Album Name</label>
                                                <input type="text" class="form-control" placeholder="E.g: Uddesso Nei" name="albumName" value="<?php echo $key['album_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Genere Song</label>
                                                <input type="text" class="form-control" placeholder="Eg: POP" name="genreSong" value="<?php echo $key['genare_song']; ?>">
                                            </div>
                                        </div>
                                    </div>


                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Album Discription</label>
                                                <TEXTAREA type="text" class="form-control" placeholder="E.g: Adela" name="album_disc"><?php echo $key['discription']; ?></TEXTAREA>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Artist Name</label>
                                                <input type="text" class="form-control" placeholder="E.g: Adela" name="artistName" value="<?php echo $key['artist_name']; ?>">
                                            </div>
                                        </div>
                                    </div>

<!--                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Artist Photo</label>
                                                <input type="file" class="form-control" name="artistPhoto">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Album Art</label>
                                                <input type="file" class="form-control" name="albumArt">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Song MP3 File</label>
                                                <input type="file" class="form-control" name="mainSong">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input rows="5" type="number" class="form-control" placeholder="E.g : 100" name="price" value="<?php echo $key['price']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                        <?php } ?>
                                    <button type="submit" name="addSong" class="btn btn-info btn-fill pull-right">Add Song</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!--     <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>


       <?php include 'includes/footer.php'; ?>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>