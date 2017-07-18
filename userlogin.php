

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
    <link href="asset/css/logipage.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="asset/js/jquery-2.2.3.min.js"></script>
    <script src="asset/js/custom.js"></script>

    <link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">

    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });

    </script>

    <!-- //js -->

</head>
<body>

<div class="agileinfo-main about-top">
    <!-------------------------------navbar start------------------------------->
    <?php include_once 'view/navbar.php'?>
    <!------------------------------- navbar end------------------------------->

</div>



<div class="col-lg-12 loginpage">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a style="color: white" href="#" class="active btn btn-primary btn-block" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a  style="color: white" class="btn btn-warning btn-block" href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="model/member_login.php" method="post" role="form" style="display: block;">


                               <div class="socialicon">
                                   <button  class="btn-success btn center-block"><i class="fa fa-facebook"></i>&nbsp; Login by Facebook</button>
                               </div>

                                <hr>
                                <!-- social end-->

                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login"">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="model/member_register.php" method="POST" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password"  id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login"">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!----------------------------------------- footer start here ----------------------------------------->
    <?php include_once 'view/footer.php' ?>
    <!----------------------------------------- footer start end ----------------------------------------->








</body>
</html>


