<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>pharmacy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
    /* map needs width and height to appear */
    #map {
        width: 900px;
        max-width: 100%;
        height: 500px;
    }
    </style>
    meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AGRONOMICS</title>
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
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        height: 500px;
        margin: 10px auto;
        width: 800px;
    }
    </style>

</head>

body class="animsition">
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
                                <i class="fas fa-chart-bar"></i>Pharmacy</a>
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
                    <img src="img/favicon.png" >
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
                            <a href="index.php">
                                <i class="fa fa-venus"></i>Profile</a>
                        </li>
                       
                       
                        <li>
                            <a href="dash.php">
                                <i class="fas fa-chart-bar"></i>Hospital</a>
                        </li>
                        
                        <li>
                            <a href="health.php">
                                <i class="fa fa-venus"></i>Healthy lifestyle</a>
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search " />
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
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
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
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
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
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">December 20, 2020 06:50</span>
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['user_username'];?></a></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">

                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['user_username'];?></a></a>
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
                                                <a href="partials/_farmerlogout.php">
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
            <br>
            <br>
            <br>
            <h3>Nearby Pharmacies:</h3>

            <body>

                <!-- this div will hold your map -->
                <div id="map"></div>

                <!-- this div will hold your store info -->
                <div id="info_div"></div>

                <script>
                function initMap() {
                    var myMapCenter = {
                        lat: 28.6305,
                        lng: 77.4149,
                    };

                    // Create a map object and specify the DOM element for display.
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: myMapCenter,
                        zoom: 14
                    });


                    function markStore(storeInfo) {

                        // Create a marker and set its position.
                        var marker = new google.maps.Marker({
                            map: map,
                            position: storeInfo.location,
                            title: storeInfo.name
                        });

                        // show store info when marker is clicked
                        marker.addListener('click', function() {
                            showStoreInfo(storeInfo);
                        });
                    }

                    // show store info in text box
                    function showStoreInfo(storeInfo) {
                        var info_div = document.getElementById('info_div');
                        info_div.innerHTML = 'Store name: ' +
                            storeInfo.name +
                            '<br>Hours: ' + storeInfo.hours;
                    }

                    var stores = [{
                            name: 'Store 1',
                            location: {
                                lat: 28.664419,
                                lng: 77.376672
                            },
                            hours: '8AM to 10PM'
                        },
                        {
                            name: 'Store 2',
                            location: {
                                lat: 28.664416,
                                lng: 77.376671
                            },
                            hours: '9AM to 9PM'
                        }
                    ];

                    stores.forEach(function(store) {
                        markStore(store);
                    });

                }
                </script>
<?php 

// script to connect to data base

$server = "localhost";
$password="";
$user= "root";
$db = "medi";

$conn = mysqli_connect($server,$user,$password,$db);

$id = $_GET['catid'];
 $sql = "SELECT * FROM `substitutes` WHERE substitute_cat_id=$id"; 
 $result = mysqli_query($conn, $sql);
 $noResult= true;
 while($row = mysqli_fetch_assoc($result)){
    $cat = $row['substitute_name'];
    $noResult = false;

                $quan = $row['substitute_quan'];
                $id = $row['substitute_id'];
                $desc = $row['substitute_cost'];
                echo '<div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://source.unsplash.com/250x200/?'.$cat.'" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="product.php?catid='.$id.'">'.$cat.'</a></h5>
                            <p class="card-text">Qty '.$quan.'</p>
                            <p class="card-text">Rs. '.$desc.'</p>
                        </div>
                    </div>
                </div>
            </div>';
}
if($noResult)
{
echo '<div class="jumbotron jumbotron-fluid">
<div class="container">
  <p class="display-4">No Results found!</p>
</div>
</div>';
}

?>
                

</body>

</html>