<?php
require 'controller/dashboard.php';
$object=new DashBoard();
$store=$object->Store();
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
    <link href="asset/css/table.css" rel="stylesheet">

    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="asset/js/jquery-2.2.3.min.js"></script>
    <script src="asset/js/custom.js"></script>
    <script src="asset/js/table.js"></script>

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">



</head>
<body>

<div class="agileinfo-main">
    <!-------------------------------navbar start------------------------------->
    <?php include_once 'view/navbar.php'?>
    <!------------------------------- navbar end------------------------------->

</div>


<div class="container tabledata">

    <div style="float: right">
        <button  class="btn btn-danger btn-circle btn-xl"><span class="glyphicon glyphicon-shopping-cart"></span>
        </button>
        <p style="color: black;font-weight: bold">Cart is Empty</p>
    </div>

    <br><br><br><h2 class="text-center">All Songs</h2>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Song List</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <form method="post" action="userpanel/buymultiple.php">
            <table class="table">
                <thead>
                <tr class="filters">
                    <th>Checkbox</th>
                    <th>Album Art</th>
                    <th><input type="text" class="form-control" placeholder="Title" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Singer" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Album" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Genre" disabled></th>
                    <th><input type="text" class="form-control" placeholder="price/Buy" disabled></th>
                    <th>Listen</th>
                </tr>
                </thead>
                <tbody>

            <?php foreach ($store as $key){ ?>
                <tr title="<?php echo $key['discription']?>">
                    <td><input type="checkbox"  placeholder="mark"></td>

                    <?php if ($key['album_cover']==null){
                        $album_cover="admin-panel/uploads/Album/noalbum.png";
                    }else{  $album_cover="admin-panel/uploads/Album/".$key['album_cover'];} ?>
                    <td><img width="45px" height="40px" src="<?php echo $album_cover;?>"></td>
                    <td ><?php echo $key['song_name']?></td>
                    <td><?php echo $key['artist_name']?></td>
                    <td><?php echo $key['album_name']?></td>
                    <td><?php echo $key['genare_song']?></td>
                    <td>       <a href="admin-panel/uploads/demo_music/<?php echo $key['demo_url']?>" class="btn btn-warning btn"><span class="glyphicon glyphicon-download"></span></a>
                        &nbsp;      <a href="userpanel/buysingle.php?album_id=<?php echo base64_encode($key['album_id'].":rathik")?>&song_id=<?php echo base64_encode($key['song_id'].":rathik")?>" class="btn btn-danger btn"><?php echo $key['price']?><span class="glyphicon glyphicon-usd"></span></a>
                    </td>
                    <td width="150px"><audio  id="audio" class="musicta" preload="none" style="width:100%;" controls="controls"><source type="audio/mpeg" src="admin-panel/uploads/demo_music/<?php echo $key['demo_url']?>"</audio></td>

                </tr>
<?php } ?>
                </tbody>
            </table>

            <br>
            <button type="submit" class="btn btn-success btn-block center-block" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>







<!----------------------------------------- footer start here ----------------------------------------->
<?php include_once 'view/footer.php' ?>
<!----------------------------------------- footer start end ----------------------------------------->








</body>
</html>


