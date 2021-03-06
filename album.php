<?php
session_start();
$album_id=$_GET['album_id'];
require 'controller/dashboard.php';
$object=new DashBoard();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title-Radio Station</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="For Seo Keyword"/>

    <!----------------------------------------- Custom Theme files--------------------------------------- -->
    <link href="asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="asset/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- ---------------------------------------Custom Theme files--------------------------------------- -->
    <!-- font-awesome icons -->
    <link href="asset/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="asset/js/jquery-2.2.3.min.js"></script>
    <script src="asset/js/custom.js"></script>

    <link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
    <!-- //js -->

</head>
<body>

<div class="agileinfo-main about-top">
    <!-------------------------------navbar start------------------------------->
    <?php include_once 'view/navbar.php'?>
    <!------------------------------- navbar end------------------------------->

</div>


<div class="container">
    <div class="row">

<div class="col-md-12 albumtable">
    <h1 class="text-center">Album Name</h1>
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


            <?php
            $songs=$object->songbyid($album_id);
            foreach ($songs as $key){ ?>
                <tr title="<?php echo $key['discription']?>" >
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
                    <td><audio class="wp-audio-shortcode" id="audio-143-8" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="admin-panel/uploads/demo_music/<?php echo $key['demo_url'];?>"><a href="admin-panel/uploads/demo_music/<?php echo $key['demo_url']?>"></a><?php echo $key['demo_url']?></audio></td>
                    <td>
                        <a href="admin-panel/uploads/demo_music/<?php echo $key['demo_url']?>" class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></a>
                        <a href="userpanel/buysingle.php?album_id=<?php echo base64_encode($key['album_id'].":rathik")?>&song_id=<?php echo base64_encode($key['song_id'].":rathik")?>" class="btn btn-danger btn"><span class="glyphicon glyphicon-usd"></span></a>
                    </td>
                </tr>
            <?php } ?>




            </tbody>
        </table>
    </div>
    <button class="btn btn-primary text-center center-block">BUY Full album</button>
</div>


    </div>
</div>





<!----------------------------------------- footer start here ----------------------------------------->
<?php include_once 'view/footer.php' ?>
<!----------------------------------------- footer start end ----------------------------------------->








</body>
</html>


