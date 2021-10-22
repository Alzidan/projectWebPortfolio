<?php
require('koneksi.php');
$query = "SELECT * FROM dataservice, socmed";
$run = mysqli_query($conn,$query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Box personal portfolio Template</title>
    <link rel="icon" href="img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.2/php5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.php"><img src="img/S__107274244-removebg-preview.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="index.php">Intro</a></li>
                <li><a href="about.php">About me</a></li>
                <li><a href="services.php">services</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="portfolio.php">skill</a></li>
                <li><a href="contact.php">contact me</a></li>



                <li class="box-label">Follow me</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="<?=$user_data['instagram']?>"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="<?=$user_data['twitter']?>"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>services</h1>
        <p><a href="index.php">Home</a>/<?=$user_data['judul']?></p>
    </div>
    <!-- end top bar -->

    <div class="container main-container">
        <div class="clearfix">

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-favorite-outline size-50"></i>
                <h3>Responsive Design</h3>
                <div class="h-10"></div>
                <p><?=$user_data['responsive']?></p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-options size-50"></i>
                <h3>Easy Customization</h3>
                <div class="h-10"></div>
                <p><?=$user_data['customization']?> </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-android-checkmark-circle size-50"></i>
                <h3>Creative Design</h3>
                <div class="h-10"></div>
                <p><?=$user_data['creative']?></p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-pulse-strong size-50"></i>
                <h3>user friendly</h3>
                <div class="h-10"></div>
                <p><?=$user_data['user']?></p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-earth size-50"></i>
                <h3>fully customizable</h3>
                <div class="h-10"></div>
                <p><?=$user_data['fullycus']?></p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-speedometer size-50"></i>
                <h3>retina ready</h3>
                <div class="h-10"></div>
                <p><?=$user_data['retina']?></p>
            </div>
            <!-- end service-box -->

        </div>
    </div>


    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">© Box Portfolio 2016</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</php>