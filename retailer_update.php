<?php session_start() ?>
<?php 
$insert = false;  
$update = false;
$delete = false;
// connect to database
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "medi";

  // create connection
  $conn = mysqli_connect($servername, $username, $pass, $database);
    
  // die if connection not succesfull
  if(!$conn){
      die("sorry can not connect: ".mysqli_connect_error());
    }
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql2 = "DELETE FROM `stock` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql2);
}

if ($_SERVER["REQUEST_METHOD"]=='POST'){
if(isset($_POST['snoEdit'])){
        //upadte record
        $sno=$_POST["snoEdit"];
        $med=$_POST['medEdit'];
        $quantity=$_POST["quantityEdit"];

  //sql query to be executed
  $sql = "UPDATE `stock` SET `med` = '$med' ,`quant` = '$quantity' WHERE `stock`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
      $update = true;
}
else{
  echo "can not update";
}
}
else{
        $med=$_POST["med"];
        $quantity=$_POST["quantity"];
        
        
        //sql query to be executed
        $sql= "INSERT INTO `$stock` (`med`, `quant`)
        VALUES ('$med', '$quantity')";
        $result = mysqli_query($conn, $sql);
       

        if($result){
          $insert = true;
        }
        else{
                echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
   } 
}
}
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
    <title>Dashboard 4</title>

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
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
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
                                        <a href="#">
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
                                    <a class="js-acc-btn" href="#"></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email"></span>
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
                                <!-- <h1 class="title-6">Hi -->
                                    <!-- <span>John</span>, Welcome back -->
                                <!-- </h1> -->
                                <p>welcome pharm1</p>
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
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 4
                                                
                                        
                                        <li>
                                            <a href="retailer_update.php">
                                                <i class="fas fa-shopping-basket"></i>infoUpdate</a>
                                        </li>
                                        <li>
                                            <a href="TxnTest.php">
                                                <i class="fas fa-shopping-basket"></i>cart</a>
                                        </li>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                                                aria-labelledby="editmodal" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">x</span>
                                                            </button>
                                                        </div>
                                                        <form action="/xampp/medi/retailer_update.php" method="POST">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="snoEdit" id="snoEdit">
                                                                <div class="form-group">
                                                                    <label for="crop">Medicine</label>
                                                                    <input type="text" class="form-control"
                                                                        id="medEdit" name="medEdit"
                                                                        aria-describedby="emailHelp">
                                                                </div>

                                    
                                                                <div class="form-group">
                                                                    <label for="quantity">Quantity</label>
                                                                    <input type="text" class="form-control"
                                                                        id="quantityEdit" name="quantityEdit"
                                                                        aria-describedby="emailHelp">
                                                                </div> 
                                                            </div>
                                                            <div class="modal-footer d-block mr-auto">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
        if($insert){

          echo "<div class='alert alert-primary alert-dismissible fade show my-0' role='alert'>
          <strong>Success!</strong> Your record has been recorded.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        }
    
        if($delete){
          echo "<div class='alert alert-primary alert-dismissible fade show my-0' role='alert'>
          <strong>Success!</strong> Your record has been deleted.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        }
     
        if($update){
          echo "<div class='alert alert-primary alert-dismissible fade show my-0' role='alert'>
          <strong>Success!</strong> Your record has been updated.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        }?>
                                      

                                            <div class="container my-4">

                                                <!-- table -->
                                                <table class="table my-3" id="myTable">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">S.no</th>
                                                            <th scope="col">Medicine</th>
                                                            
                                                            <th scope="col">Quantity</th>
                                                            
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                                                                                       
                                                                $sql = "SELECT * FROM `stock`";  
                                                                $result = mysqli_query($conn, $sql); 
                                                                $sno = 0;
                                                                while($row = mysqli_fetch_assoc($result)){
                                                                    $sno = $sno + 1;
                                                                    echo " <tr>
                                                                    <th scope='row'>". $sno. "</th>
                                                                    <td>". $row["med"]. "</td>
                                                                    <td>". $row["quant"]. "</td>
                                                                    
                                                                    <td> <button class='edit btn btn-sm btn-primary mr-3 ml-5' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>
                                                                </tr>";
                                                                }  
                                                            ?>


                                                    </tbody>
                                                </table>
                                                <!-- table end -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- END RECENT REPORT-->
                                </div>

                                <!-- END CHART PERCENT-->
                            </div>
                        </div>
                      

                        <!-- END PAGE CONTENT-->
                    </div>
                </div>
        </div>
        </section>
    </div>
    <!-- END PAGE CONTENT  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>



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

    <!-- js for table -->
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", e.target.parentNode.parentNode);
            tr = e.target.parentNode.parentNode;
            med = tr.getElementsByTagName("td")[0].innerText;
            quantity = tr.getElementsByTagName("td")[1].innerText;

            console.log(med,quantity);
            medEdit.value = med;
            quantityEdit.value = quantity;

            snoEdit.value = e.target.id;
            console.log(e.target.id);
            $('#editmodal').modal('toggle')
        })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit ");
            sno = e.target.id.substr(1);

            // /xampp/medi/retailer_update.php
            if (confirm("Are you sure you want to delete this note!")) {
                console.log("yes");
                window.location = `/xampp/medi/retailer_update.php?delete=${sno}`;
            } else {
                console.log("no");
            }
        })
    })
    </script>

    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

</body>

</html>
<!-- end document-->