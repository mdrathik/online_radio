<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Home Page</a>
        </div>
        <form class="navbar-form navbar-right">
         <a href="../model/member_logout.php" title="Logout" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span>&nbsp;<?php echo $_SESSION['username']?></a>
        </form>
        <ul class="nav navbar-nav">
            <li class="active"><button class="btn btn-warning navbar-btn">History</button></li>

        </ul>

    </div>
</nav>