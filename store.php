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

    <br><br><br><h2 class="text-center">Welcome To Our Site</h2>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Song List</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th>Checkbox</th>
                    <th><input type="text" class="form-control" placeholder="Title" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Artist" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Album" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Genre" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Year" disabled></th>
                    <th><input type="text" class="form-control" placeholder="price" disabled></th>
                    <th>Listen/Buy</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox"  placeholder="mark"></td>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>







<!----------------------------------------- footer start here ----------------------------------------->
<?php include_once 'view/footer.php' ?>
<!----------------------------------------- footer start end ----------------------------------------->








</body>
</html>


