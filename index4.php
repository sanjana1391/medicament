<?php session_start(); ?>

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
    <title>Pharmacy</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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

    <!-- table links -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

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


    .header__tool .header-button-item {
        margin-right: 75px;
        font-size: 24px;
    }

    .notifi__item .content {

        width: calc(125% - 55px);
        text-align: left;
        font-size: 14px;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 1px;
        padding-top: 5px;
        margin-right: auto;
        margin-left: auto;
    }
    </style>


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-blue.png" alt="Agronomics" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <?php

                                ?>
                                <script>
                                var change = false;
                                </script>
                                <div class="notifi__item">
                                    <!-- <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div> -->
                                    <div class="content">


                                        <!-- <span class="date">April 12, 2018 06:50</span> -->
                                    </div>
                                </div>

                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
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
                                        <a href="TxnTest.php">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION['p_username'];?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <!-- <a href="#">john doe</a> -->
                                                <?php echo"<span class='email'>".$_SESSION['p_username']."</span>";?>

                                            </h5>
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
                                        <a href="partials/_pharmlogout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <?php echo '<span>'.$_SESSION['p_username'].'</span>, Welcome back';?>
                                </h1>
                                <p>Fill and update your inventory list!</p>
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search"
                                    placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="index4.php">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                        <li>
                                            <a href="retailer_update.php">
                                                <i class="fas fa-shopping-basket"></i>InfoUpdate</a>
                                        </li>
                                        <li>
                                            <a href="retailer_update.php">
                                                <i class="fas fa-shopping-basket"></i>Sync Your Data!</a>
                                        </li>
                                        <li>
                                            <a href="TxnTest.php">
                                                <i class="fas fa-shopping-basket"></i>cart</a>
                                        </li>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">

                                                <br> <br>
                                                <strong>PROFILE</strong> Elements
                                            </div>
                                            <div class="card-body card-block">

                                                <form action="index4.php" method="POST" enctype="multipart/form-data"
                                                    class="form-horizontal">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">
                                                                <h3>INVENTORY:</h3>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <table id="dtBasicExample"
                                                        class="table table-striped table-bordered table-sm"
                                                        cellspacing="0" width="100%">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th class="th-sm">Name of Medicine</th>
                                                                <th class="th-sm">Comapny</th>
                                                                <th class="th-sm">Price</th>
                                                                <th class="th-sm">Quantity</th>
                                                                <th class="th-sm">check</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $server = "localhost";
                                                            $password="";
                                                            $user= "root";
                                                            $db = "medi";

                                                            $conn = mysqli_connect($server,$user,$password,$db);
                                                            $sql = "SELECT * FROM `abc`"; 
                                                            $result = mysqli_query($conn, $sql);
                                                            while($row = mysqli_fetch_assoc($result)){
                                                                $med = $row['Medicine Name'];
                                                                $company =$row['Manufacturer'];
                                                                $price = $row['MRP'];
                                                                $id = $row['sno'];                                                           
                                                            ?>
                                                            <tr>


                                                                <?php echo' <td>'.$med.'</td>' ?>
                                                                <?php  echo'<td>'.$company.'</td>' ?>
                                                                <?php   echo' <td>'.$price.'</td>' ?>
                                                                <?php   echo' <td>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="number" id="quant" value="quant" name="quant"
                                                                            placeholder="Number" class="form-control">
                                                                    </div></td>' 
                                                                    ?>


                                                                <?php echo'<td><input type="checkbox" value='.$med.' name="med[]"></td>' ?>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                        <button class="button button1"
                                                            onclick="alert('Profile has been updated!!')">submit</button>
                                                        <!-- <button type="submit">submit</button> -->
                                                </form>

                                                <?php
                                                        if($_SERVER["REQUEST_METHOD"] == 'POST')
                                                        {
                                                        
                                                            $quant = $_POST['quant']; 
                                                            $med = $_POST['med'];
                                                            $chkstr = implode(",",$med);
                                                            $sql = "INSERT INTO stock (`med`,`quant`) VALUES ('$chkstr','$quant')";
                                                            $result = mysqli_query($conn, $sql);
                                                            if($result){
                                                                
                                                                echo "saved";
                                                                }
                                                            
                                                            else{
                                                                echo"error";
                                                            }

                                                        }
                                                        ?>
                                                </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

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

        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
        </script>

</body>

</html>
<!-- end document-->