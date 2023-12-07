<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>STS Development - Home</title>

        <!--Title bar icon-->
        <link rel ="icon" href ="src/img/Logo.png" type ="image/x-icon">


        <!--Bootstrap Css file-->
        <link href="src/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!--jquery file-->
        <script src="src/vendor/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="src/vendor/bootstrap-3.3.7-dist/js/jquery.min.js" type="text/javascript"></script>

        <!--Bootstrap js file-->
        <script src="src/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <!--Fonts-->
        <link href="src/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="src/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css"/>
        <link href="src/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css"/>

        <!--CSS file-->
        <link href="src/Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="home">
            <div class="content">

                <!-- Navigation Bar -->
                <nav id="nav" class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="STSDevelopment.html"><img src="src/img/Logo.png" class="nav-image" alt=""/></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="Menu.html">Menu</a></li>
                                <li><a href="AboutUs.html">About Us</a></li>
                                <li><a href="Pricing.html">Pricing</a></li>
                                <li><a href="Location.html">Location</a></li>
                                <li><a href="Contact.html">Contact</a></li>
                                <li id="null"><a href="Search.html"><i class="fa fa-search fa-2x"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-01">
                    <h1>STS<br>Development</h1>
                    <p>We are the Software Developers</p>
                    <button>About Us</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-02">
                    <img class="img-responsive center-block" src="src/img/home_vector.png" alt=""/>
                </div>
            </div>
        </div>
    </body>
</html>
