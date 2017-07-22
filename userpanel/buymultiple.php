<?php
require '../controller/BuySong.php';
$object=new Buy();
if(isset($_POST['submit'])){//to run PHP script on submit
    if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected){
             $selected."</br>";
        }
    }
    else
    {
        echo "<script>alert('You must need to select one more item')</script>";
    /*    echo "<script>window.location = '../index.php'</script>";*/
    }
}
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
    <link href="../asset/css/pricetable.css" type="text/css" rel="stylesheet" media="all">
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


<div style="margin-top: 10px;margin-bottom: 50px" class="container">
    <h2 class="text-center">Your Selected song List<b style="color: red">(This Page also underconstruction for PaymentGetway )</b></h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Panel Heading</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <!--<button type="button" class="btn btn-sm btn-primary btn-create"></button>-->
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th class="hidden-xs">ID</th>
                            <th>File Name</th>
                            <th>Artist</th>
                            <th>Composer</th>
                            <th>Publisher</th>
                            <th>Genre</th>
                            <th>Bitrate</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">

                        <tr>
                            <td class="hidden-xs">1</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">2</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">3</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">4</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">5</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">5</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>

                            <td class="hidden-xs">5</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        <tr>
                            <td class="hidden-xs">5</td>
                            <td>myMp3</td>
                            <td>amart</td>
                            <td>am compo</td>
                            <td>ampub</td>
                            <td>amgen</td>
                            <td>ambit</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">

                        <div class="col col-xs-4">Total Price <b>100$</b>
                        </div>
                        <div class="col col-xs-8">
                          <button class="btn btn-success">Click To Pay and Download</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</div>










</body>
</html>


