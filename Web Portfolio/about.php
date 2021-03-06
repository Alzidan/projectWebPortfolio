<?php
require('koneksi.php');
$query = "SELECT * FROM aboutme, socmed";
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
    <title>ProjectUts</title>
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
       <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.php"><img src="img/S__107274244-removebg-preview.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>
        <!-- end box-header -->
        
        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>
                
                <li><a href="index.php">Intro</a></li>
                <li><a href="about.php">About me</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="services.php">Services</a></li>
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
    
    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="index.php">Home</a>/<?=$user_data['judul']?></p>
    </div>
    <!-- end Top bar -->
    
    <!-- Main container -->
    <div class="container main-container clearfix"> 
        <div class="col-md-6">
            <img src="img/fotoabout.png" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase"><?=$user_data['judul']?></h3>
           <h5><?=$user_data['nama']?></h5>
           <div class="h-30"></div>
            <p><?=$user_data['zid']?></p>

            <p></p>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="<?=$user_data['instagram']?>"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="<?=$user_data['twitter']?>"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>


        </div>
    </div>
    <!-- end Main container -->


    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">?? Box Portfolio 2016</p>
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