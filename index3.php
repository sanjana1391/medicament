<?php session_start();?>
<?php


                    
                    



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Medicament</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Title Page-->


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
    .button {
        border: 1px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: #4CAF50;
    }

    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- HEADER MOBILE-->
        body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.php">
                                <img src="img/favicon.png" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="map.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                            </li>
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-chart-bar"></i>Profile</a>
                            </li>
                            <li>
                                <a href="retailer.php">
                                    <i class="fas fa-chart-bar"></i>Patient</a>
                            </li>
                            <li>
                                <a href="farmer_update.php">
                                    <i class="fas fa-table"></i>Consultation</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-check-square"></i>Medicine</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>bidding</a>
                            </li>
                            <li>
                                <a href="calender.html">
                                    <i class="fas fa-map-marker-alt"></i>Calender</a>
                            </li>
                            <li>
                                <a href="calender.html">
                                    <i class="fas fa-map-marker-alt"></i>Healthy lifestyle</a>
                            </li>

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="img/favicon.png">
                        <h4>Medicament</h4>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <!-- traslate -->
                                <div id="google_translate_element"></div>

                                <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                                </script>

                                <script type="text/javascript"
                                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                </script>
                                <!-- end -->
                                <a class="js-arrow" href="store.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                            </li>
                            <li>
                                <a href="index3.php">
                                    <i class="fa fa-venus"></i>Patients</a>
                            </li>


                            <li>
                                <a href="view.html">
                                    <i class="fas fa-chart-bar"></i>Review</a>
                            </li>
                            <li>
                                <a href="Medical_history.php">
                                    <i class="fas fa-shopping-basket"></i>Patient info</a>
                            </li>

                            <li>
                                <a href="TxnTest.php">
                                    <i class="fas fa-chart-bar"></i>Hospital</a>
                            </li>





                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section_content section_content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search"
                                        placeholder="Search " />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">


                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">1</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>You have no New Emails</p>
                                                </div>
                                                <div class="email__item">

                                                </div>
                                                <div class="email__item">


                                                </div>

                                            </div>
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-notifications"></i>
                                                <span class="quantity">1</span>
                                                <div class="notifi-dropdown js-dropdown">
                                                    <div class="notifi__title">
                                                        <p>You have no Notifications</p>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c1 img-cir img-40">
                                                            <i class="zmdi zmdi-email-open"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>You got a message notification</p>

                                                        </div>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c2 img-cir img-40">
                                                            <i class="zmdi zmdi-account-box"></i>
                                                        </div>

                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c3 img-cir img-40">
                                                            <i class="zmdi zmdi-file-text"></i>
                                                        </div>

                                                    </div>
                                                    <div class="notifi__footer">
                                                        <a href="#">All notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">

                                                <div class="content">
                                                    <a class="js-acc-btn"
                                                        href="#"><?php echo $_SESSION['user_username'];?></a></a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">

                                                        <div class="content">
                                                            <h5 class="name">
                                                                <a
                                                                    href="#"><?php echo $_SESSION['user_username'];?></a></a>
                                                            </h5>
                                                            <span class="email">tanu@example.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__body">
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-account"></i>Account</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                        </div>
                                                    </div>
                                                    <div class="account-dropdown__footer">
                                                        <a href="partials/_hospitallogout.php">
                                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <br> <br> <br> <br>
                            <?php echo '<h3>Welcome '.$_SESSION['user_username'].'!!</h3>'; ?>
                            <br> <br> <br> <br>
                            <strong>PROFILE</strong> Elements
                        </div>

                        <div class="card-body card-block">
                            <form action="index.php" method="post" enctype="multipart/form-data"
                                class="form-horizontal">



                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">
                                            <h3>My Patients</h3>
                                        </label>
                                    </div>

                                </div>

                                <div class="row my-3">            
                                    <?php
                    $server = "localhost";
                    $password="";
                    $user= "root";
                    $db = "medi";

                    
                    $conn = mysqli_connect($server,$user,$password,$db);
                    $sql = "SELECT * FROM `users`"; 
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        // echo $row['catgory_id'];
                    // echo $row['catgory_name'];
                    $name = $row['username'];
                    $sno = $row['sno'];
                   
                    echo '  <div class="card mx-3 " style="width: 15srem;">
                    <img src="https://source.unsplash.com/250x200/?profile" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Name: '.$name.'</h5>
                        <a href="medical_history.php?uid='.$sno.'" class="btn btn-primary">Medical info</a>
                        <a href="bot1.php" class="btn btn-primary">Chat</a>
                    </div>
                </div>';
    
                }
                ?>
    </div>
  </div>
   </label>


                        <!--<h3><a href="home_.php">Consult</a></h3>
                            
                            





                            <!-- Jquery JS-->
                        <script src="vendor/jquery-3.2.1.min.js"></script>
                        <!-- Bootstrap JS-->
                        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                        <!-- Vendor JS       -->
                        <script src="vendor/slick/slick.min.js">
                        </script>
                        <script src="vendor/wow/wow.min.js"></script>
                        <script src="vendor/animsition/animsition.min.js"></script>
                        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                        </script>
                        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                        <script src="vendor/counter-up/jquery.counterup.min.js">
                        </script>
                        <script src="vendor/circle-progress/circle-progress.min.js"></script>
                        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                        <script src="vendor/select2/select2.min.js">
                        </script>

                        <!-- Main JS-->
                        <script src="js/main.js"></script>
                        <!-- logged in user information -->


</body>

</html>
<!-- end document-->