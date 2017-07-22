<?php
require '../controller/BuySong.php';
 $object=new Buy();
 $album_id=$_GET['album_id'];
 $song_id=$_GET['song_id'];
 $song=$object->BuySingleSong($album_id,$song_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title-Radio Station</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="For Seo Keyword"/>

    <!----------------------------------------- Custom Theme files--------------------------------------- -->
    <link href="../asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../asset/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="../asset/css/table.css" type="text/css" rel="stylesheet" media="all">
    <!-- ---------------------------------------Custom Theme files--------------------------------------- -->
    <!-- font-awesome icons -->
    <link href="../asset/css/font-awesome.css" rel="stylesheet">


    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="../asset/js/jquery-2.2.3.min.js"></script>
    <script src="../asset/js/custom.js"></script>
    <script src="../asset/js/table.js"></script>

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">



</head>
<body>

<?php include_once 'navbar.php'?>

<div class="container tabledata">

    <div class="row">
        <div   class="col-lg-offset-4 col-lg-3 col-sm-6">
            <?php foreach ($song as $key){ ?>
            <div class="card hovercard">
                <div style="background-image: url('/radio/admin-panel/uploads/Album/<?php echo $key['album_cover']?>')" class="cardheader">
                </div>

            <?php if($key['artist_image']==null){
                $artist="/radio/admin-panel/uploads/Artist/noartist.jpg";
            }
            else
            {
                $artist="/radio/admin-panel/uploads/Artist/".$key['artist_image'];
            }?>
                <div class="avatar">
                    <img alt="" src="<?php echo $artist ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <h3><?php echo $key['song_name']?></h3>
                    </div>
                    <div class="desc"><?php echo $key['album_name'] ?></div>
                    <div class="desc"><?php echo $key['artist_name']?></div>
                    <div class="desc"><?php echo $key['album_name']?></div>
                    <div class="desc"><?php echo $key['publish_year']?></div>
                    <div class="desc"><?php echo $key['publish_year']?></div>
                </div>
                <div class="bottom">
                    <a href="javascript:AlertIt();" class="btn btn-success">Pay and Get the Link</a>
                </div>
            </div>
        <?php }  ?>
        </div>

    </div>
</div>
<script type="text/javascript">
    function AlertIt() {
        var answer = confirm ("Payment page is under construction! Sorry for this inconvenience | Coming Soon")
        if (answer)
            window.location="../index.php";
    }
</script>

</body>
</html>



