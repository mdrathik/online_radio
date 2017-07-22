<?php 
    include_once("includes/db_connect.php");
    include_once("includes/mfunction.php");

    $con    = new Connection();
    $chk    = new Mfunction();    
    $chk->sessionCheck();  
    if (isset($_POST['addSong'])) {

            $publish_year = $_POST['publish_year'];
            $album_name = $_POST['albumName'];
            $genare_name = $_POST['genreSong'];
            $artist_name = $_POST['artistName'];
            $album_disc = $_POST['album_disc'];
            $price = $_POST['price'];
            $artist_photo = $_FILES["artistPhoto"]["name"];
            $album_photo = $_FILES["albumArt"]["name"];
            $retArtist = $chk->ImageUpload($_FILES["artistPhoto"],"Artist");
            $retAlbumArt = $chk->ImageUpload($_FILES["albumArt"],"Album");




            // $song_num =uniqid("song",FALSE);
            // $song_id = $song_num;
            // $url = $song_id.".mp3";
            // $song_name = $_POST['songName'];
            // $retMp3 = $chk->insertMp3($_FILES["mainSong"],$url);  
            // $chk->insertSong($album_disc,$url,$song_id, $song_name, $publish_year, $album_name, $genare_name, $artist_name, $price, $artist_photo, $album_photo);
            // $chk->mp3SP($url);
            echo    "<script>
                     window.location = 'editSong.php';
                     </script>";

    }
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADD SONG</title>

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
    <script  type="text/javascript">
                    var i = 0; /* Set Global Variable i */
                    function increment(){
                    i += 1; /* Function for automatic increment of field's "Name" attribute. */
                    }
                    function removeElement(parentDiv, childDiv){
                    if (childDiv == parentDiv){
                    alert("The parent div cannot be removed.");
                    }
                    else if (document.getElementById(childDiv)){
                    var child = document.getElementById(childDiv);
                    var parent = document.getElementById(parentDiv);
                    parent.removeChild(child);
                    }
                    else{
                    alert("Child div has already been removed or does not exist.");
                    return false;
                    }
                    }

                    function nameFunction(){
                    var r = document.createElement('span');
                    var y = document.createElement("INPUT");
                    y.setAttribute("type", "file");
                    y.setAttribute("placeholder", "Name");
                    var g = document.createElement("IMG");
                    g.setAttribute("src", "delete.png");
                    increment();
                    y.setAttribute("Name", "mainSong[]");
                    y.setAttribute("class", "form-control");
                    r.appendChild(y);
                    g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
                    r.appendChild(g);
                    r.setAttribute("id", "id_" + i);
                    document.getElementById("myForm").appendChild(r);


                    var r1 = document.createElement('span');
                    var y1 = document.createElement("INPUT");
                    y1.setAttribute("type", "text");
                    y1.setAttribute("placeholder", "E.g: In the End");
                    var g1 = document.createElement("IMG");
                    g1.setAttribute("src", "delete.png");
                    increment();
                    y1.setAttribute("Name", "songName[]");
                    y1.setAttribute("class", "form-control");
                    r1.appendChild(y1);
                    g1.setAttribute("onclick", "removeElement('myForm1','id_" + i + "')");
                    r1.appendChild(g1);
                    r1.setAttribute("id", "id_" + i);
                    document.getElementById("myForm1").appendChild(r1);

                    }

                    function resetElements(){
                    document.getElementById('myForm').innerHTML = '';
                    }
</script>
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
                            <div class="content">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row">
                                       <!--  <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Song ID</label>
                                                <input type="text" class="form-control" name="id" value="<?php echo $song_num; ?>" disabled>
                                            </div>
                                        </div> -->

                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Album Name</label>
                                                <input type="text" class="form-control" placeholder="E.g: Uddesso Nei" name="albumName">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Publish Year</label>
                                                <input type="number" class="form-control" placeholder="Eg: 2011" name="publish_year">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Genere Song</label>
                                                <input type="text" class="form-control" placeholder="Eg: POP" name="genreSong">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Album Discription</label>
                                                <TEXTAREA type="text" class="form-control" placeholder="E.g: Adela" name="album_disc"> </TEXTAREA>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Artist Name</label>
                                                <input type="text" class="form-control" placeholder="E.g: Adela" name="artistName">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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
                                      
                                    </div>

                                     <div class="row">


                                     <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Song Name</label>
                                                <span id="myForm1"></span>
                                                <input type="text" class="form-control" placeholder="E.g: In the End" name="songName[]">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Song MP3 File</label>
                                               
                                                <span id="myForm"></span>
                                                <input type="file" class="form-control" name="mainSong[]">
                                            </div>
                                        </div>
                                         <div class="col-md-5">
                                            <div class="form-group">
                                                  <a onclick="nameFunction()">Add more</a>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input rows="5" type="number" class="form-control" placeholder="E.g : 100" name="price">
                                            </div>
                                        </div>
                                    </div>

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