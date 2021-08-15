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

    * {
  box-sizing: border-box;
}

:root {
  --clr-white: rgb(255, 255, 255);
  --clr-black: rgb(0, 0, 0);
  --clr-light: rgb(245, 248, 255);
  --clr-light-gray: rgb(196, 195, 196);
  --clr-blue: rgb(63, 134, 255);
  --clr-light-blue: rgb(171, 202, 255);
}

body {
  margin: 0;
  padding: 0;
  background-color: var(--clr-light);
  color: var(--clr-black);
  font-family: 'Poppins', sans-serif;
  font-size: 1.125rem;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* End General Styles */

/* Upload Area */
.upload-area {
  width: 100%;
  max-width: 25rem;
  background-color: var(--clr-white);
  box-shadow: 0 10px 60px rgb(218, 229, 255);
  border: 2px solid var(--clr-light-blue);
  border-radius: 24px;
  padding: 2rem 1.875rem 5rem 1.875rem;
  margin: 0.625rem;
  text-align: center;
}

.upload-area--open { /* Slid Down Animation */
  animation: slidDown 500ms ease-in-out;
}

@keyframes slidDown {
  from {
    height: 28.125rem; /* 450px */
  }

  to {
    height: 35rem; /* 560px */
  }
}

/* Header */
.upload-area__header {

}

.upload-area__title {
  font-size: 1.8rem;
  font-weight: 500;
  margin-bottom: 0.3125rem;
}

.upload-area__paragraph {
  font-size: 0.9375rem;
  color: var(--clr-light-gray);
  margin-top: 0;
}

.upload-area__tooltip {
  position: relative;
  color: var(--clr-light-blue);
  cursor: pointer;
  transition: color 300ms ease-in-out;
}

.upload-area__tooltip:hover {
  color: var(--clr-blue);
}

.upload-area__tooltip-data {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -125%);
  min-width: max-content;
  background-color: var(--clr-white);
  color: var(--clr-blue);
  border: 1px solid var(--clr-light-blue);
  padding: 0.625rem 1.25rem;
  font-weight: 500;
  opacity: 0;
  visibility: hidden;
  transition: none 300ms ease-in-out;
  transition-property: opacity, visibility;
}

.upload-area__tooltip:hover .upload-area__tooltip-data {
  opacity: 1;
  visibility: visible;
}

/* Drop Zoon */
.upload-area__drop-zoon {
  position: relative;
  height: 11.25rem; /* 180px */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 2px dashed var(--clr-light-blue);
  border-radius: 15px;
  margin-top: 2.1875rem;
  cursor: pointer;
  transition: border-color 300ms ease-in-out;
}

.upload-area__drop-zoon:hover {
  border-color: var(--clr-blue);
}

.drop-zoon__icon {
  display: flex;
  font-size: 3.75rem;
  color: var(--clr-blue);
  transition: opacity 300ms ease-in-out;
}

.drop-zoon__paragraph {
  font-size: 0.9375rem;
  color: var(--clr-light-gray);
  margin: 0;
  margin-top: 0.625rem;
  transition: opacity 300ms ease-in-out;
}

.drop-zoon:hover .drop-zoon__icon,
.drop-zoon:hover .drop-zoon__paragraph {
  opacity: 0.7;
}

.drop-zoon__loading-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  color: var(--clr-light-blue);
  z-index: 10;
}

.drop-zoon__preview-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  padding: 0.3125rem;
  border-radius: 10px;
  display: none;
  z-index: 1000;
  transition: opacity 300ms ease-in-out;
}

.drop-zoon:hover .drop-zoon__preview-image {
  opacity: 0.8;
}

.drop-zoon__file-input {
  display: none;
}

/* (drop-zoon--over) Modifier Class */
.drop-zoon--over {
  border-color: var(--clr-blue);
}

.drop-zoon--over .drop-zoon__icon,
.drop-zoon--over .drop-zoon__paragraph {
  opacity: 0.7;
}

/* (drop-zoon--over) Modifier Class */
.drop-zoon--Uploaded {
  
}

.drop-zoon--Uploaded .drop-zoon__icon,
.drop-zoon--Uploaded .drop-zoon__paragraph {
  display: none;
}

/* File Details Area */
.upload-area__file-details {
  height: 0;
  visibility: hidden;
  opacity: 0;
  text-align: left;
  transition: none 500ms ease-in-out;
  transition-property: opacity, visibility;
  transition-delay: 500ms;
}

/* (duploaded-file--open) Modifier Class */
.file-details--open {
  height: auto;
  visibility: visible;
  opacity: 1;
}

.file-details__title {
  font-size: 1.125rem;
  font-weight: 500;
  color: var(--clr-light-gray);
}

/* Uploaded File */
.uploaded-file {
  display: flex;
  align-items: center;
  padding: 0.625rem 0;
  visibility: hidden;
  opacity: 0;
  transition: none 500ms ease-in-out;
  transition-property: visibility, opacity;
}

/* (duploaded-file--open) Modifier Class */
.uploaded-file--open {
  visibility: visible;
  opacity: 1;
}

.uploaded-file__icon-container {
  position: relative;
  margin-right: 0.3125rem;
}

.uploaded-file__icon {
  font-size: 3.4375rem;
  color: var(--clr-blue);
}

.uploaded-file__icon-text {
  position: absolute;
  top: 1.5625rem;
  left: 50%;
  transform: translateX(-50%);
  font-size: 0.9375rem;
  font-weight: 500;
  color: var(--clr-white);
}

.uploaded-file__info {
  position: relative;
  top: -0.3125rem;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.uploaded-file__info::before,
.uploaded-file__info::after {
  content: '';
  position: absolute;
  bottom: -0.9375rem;
  width: 0;
  height: 0.5rem;
  background-color: #ebf2ff;
  border-radius: 0.625rem;
}

.uploaded-file__info::before {
  width: 100%;
}

.uploaded-file__info::after {
  width: 100%;
  background-color: var(--clr-blue);
}

/* Progress Animation */
.uploaded-file__info--active::after {
  animation: progressMove 800ms ease-in-out;
  animation-delay: 300ms;
}

@keyframes progressMove {
  from {
    width: 0%;
    background-color: transparent;
  }

  to {
    width: 100%;
    background-color: var(--clr-blue);
  }
}

.uploaded-file__name {
  width: 100%;
  max-width: 6.25rem; /* 100px */
  display: inline-block;
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.uploaded-file__counter {
  font-size: 1rem;
  color: var(--clr-light-gray);
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
                            <img src="images/icon/logo-blue.png" alt="Medicament" />
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
                                            <i class='fas fa-sync' style='font-size:24px'></i>infoUpdate</a>
                                        </li>
                                        <li>
                                            <a href="upload.php">
                                            <i class='fas fa-upload' style='font-size:24px'></i>Sync Your Data!</a>
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
<!-- Upload Area -->
<div id="uploadArea" class="upload-area">
  <!-- Header -->
  <div class="upload-area__header">
    <h1 class="upload-area__title">Upload your file</h1>
    <p class="upload-area__paragraph">
      File should be an csv
      <strong class="upload-area__tooltip">
        Like
        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
      </strong>
    </p>
  </div>
  <!-- End Header -->

  <!-- Drop Zoon -->
  <
     
    </span>
    
    
    <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datamaps/0.5.5/datamaps.all.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js"></script>
<script src="//github.com/niklasvh/html2canvas/releases/download/0.5.0-alpha1/html2canvas.js"></script>
<script src="//github.com/niklasvh/html2canvas/releases/download/0.5.0-alpha1/html2canvas.svg.js"></script>
<script src="//www.gstatic.com/charts/loader.js" charset="utf-8"></script>

<p>
<input type="file" id="fileElem" multiple accept=".csv" onchange="handleFiles(this.files)">
</p>
<!--a href="#" id="fileSelect">Select some files</a--> 
<div id="fileList">
  <p>Choose a CSV to Sync</p>
</div>

  </div>
  <!-- End Drop Zoon -->

  <!-- File Details -->
  <div id="fileDetails" class="upload-area__file-details file-details">
    <h3 class="file-details__title">Uploaded File</h3>

    <div id="uploadedFile" class="uploaded-file">
      <div class="uploaded-file__icon-container">
        <i class='bx bxs-file-blank uploaded-file__icon'></i>
        <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
      </div>

      <div id="uploadedFileInfo" class="uploaded-file__info">
        <span class="uploaded-file__name">Proejct 1</span>
        <span class="uploaded-file__counter">0%</span>
      </div>
    </div>
  </div>
  <!-- End File Details -->
  <script src="https://apis.google.com/js/platform.js"></script>

<div class="g-savetodrive" 
     data-src="url of file"
     data-filename="pug.jpg"
     data-sitename="Pictures of Pugs">
</div>
</div>
<!-- End Upload Area -->
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
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>       
<script>
window.URL = window.URL || window.webkitURL;

var fileSelect = document.getElementById("fileSelect"),
  fileElem = document.getElementById("fileElem"),
  fileList = document.getElementById("fileList");



function placeMarker(dataTable) {
  label = document.createElement("div")
  label.className = "label"
  // TO DO: Implement data label in Google GeoChart
  //
  //
  label.textContent = dataTable.getValue(4, 1)
  document.getElementById("viz").appendChild(label)
};

function drawChart(dataTable){
  var chart_div = document.getElementById('viz'),
      chart = new google.visualization.GeoChart(chart_div),
      startColor = "#"+document.querySelectorAll("form input")[0].value || "#EFEFFF",
      endColor = "#"+document.querySelectorAll("form input")[1].value || "#02386F",
      // Define Charting Options for Google GeoChart Here
      options = {
      region: 'US',
      displayMode: 'region',
      resolution: "provinces",
      colorAxis: {colors: [startColor, endColor]},
      
    };

  google.visualization.events.addListener(chart, 'ready', function () {
    var png = '<a href="' + chart.getImageURI() + '">Get PNG (To Save, right click and choose "Save As" )</a>';
    document.getElementById('print_div').innerHTML = png;
    // placeMarker.bind(chart, dataTable);
  });
  chart.draw(dataTable, options)
};

function drawDatamap(series){
  // Datamaps expect data in format:
  // { "USA": { "fillColor": "#42a844", numberOfWhatever: 75},
  //   "FRA": { "fillColor": "#8dc386", numberOfWhatever: 43 } }
  series = series.slice(1); 
  dataset = {};
  newLabels = {};
  // We need to colorize every country based on "numberOfWhatever"
  // colors should be uniq for every value.
  // For this purpose we create palette(using min/max series-value)
  var onlyValues = series.map(function(obj){ return obj[1]; }),
      minValue = Math.min.apply(null, onlyValues),
      maxValue = Math.max.apply(null, onlyValues),
      startColor = "#"+document.querySelectorAll("form input")[0].value || "#EFEFFF",
      endColor = "#"+document.querySelectorAll("form input")[1].value || "#02386F";
  // create color palette function
  // color can be whatever you wish
  var paletteScale = d3.scale.linear()
  .domain([minValue,maxValue])
  .range([startColor,endColor]); // blue color
  // fill dataset in appropriate format
  series.forEach(function(item){ //
    // item example value ["USA", 70]
    var iso = item[0],
        value = item[1];
    dataset[iso] = { numberOfThings: value, fillColor: paletteScale(value) };
    newLabels[iso] = iso + ":" + value;
  });
  // render map
  document.getElementById('viz').innerHTML = "";
  d3map = new Datamap({
      scope : 'us',
      element : document.getElementById('viz'),
      setProjection : function (element, options) {
        var projection,
        path;
        projection = albersUsaPr().scale(element.offsetWidth).translate([element.offsetWidth / 2, element.offsetHeight / 2]);
        path = d3.geo.path().projection(projection);
        return {
          path : path,
          projection : projection
        };
      },
      fills : {defaultFill: '#ABDDA4'},
      data : dataset,
      geographyConfig : {
        borderWidth : 1,
        borderColor : '#FDFDFD',
        highlightBorderWidth : 2,
        highlightFillColor : '#EEDD66',
        popupTemplate : function (geo, data) {
          if (!data) {
            return;
          }
          return ['<div class="hoverinfo">', '<strong>', geo.properties.name, '</strong>', '<br/>', header[1], ': <strong>', data.value, '</strong>', '</div>'].join('');
        }
      }
  });
  d3map.labels({
    customLabelText: newLabels,
    labelColor: 'black',
    fontSize: 12
  });
  // Adjust label position
  displaylabels = document.querySelectorAll(".labels text")
  displaylabels.forEach(function(node){
    var nx = node.getAttribute("x"),
        strlen = node.textContent.length,
        fontSize = parseInt(node.style.fontSize),
        vizWidth = parseInt(d3.select("#viz").style("width"));
    if (nx < vizWidth*0.85 && strlen > 2) node.setAttribute("x", nx - strlen*fontSize/4);
  });
  
  html2canvas([document.getElementById("viz")], {
    useCORS: true
  }).then(function(canvas) {  
    var png = '<a href="' + canvas.toDataURL("image/png") + '">Get PNG (To Save, right click and choose "Save As" )</a>';
    document.getElementById('print_div').innerHTML = png;
  });
};

function handleFiles(files) {
  if (!files.length) {
    fileList.innerHTML = "<p>Nothing was selected.</p>";
  } else {
    fileList.innerHTML = "";
    var list = document.createElement("ul");
    fileList.appendChild(list);
    for (var i = 0; i < files.length; i++) {
      var li = document.createElement("li");
      list.appendChild(li);
      var info = document.createElement("span");
      info.innerHTML = "Received \"" + files[i].name + "\" with the size of " + files[i].size + " bytes. ";
      li.appendChild(info);
      var file = files[i];
    }

    var reader = new FileReader();
    reader.onload = (function() {
      data1 = d3.csv.parseRows(reader.result, function(row, index) {
        if (index < 1) return row;
        else {
          // This assumes all columns are numeric except the first one
          for (i = 1; i < row.length; i++) row[i] = +row[i];        
          return row;
        };
      });
      data2 = google.visualization.arrayToDataTable(data1)
     
      */
      var tab_div = document.getElementById('tab');
      var tableview = new google.visualization.Table(tab_div);
      tableview.draw(data2);
    });
    reader.readAsText(file);
  } // This bracket ends the else statement
} // Ends the function handleFiles()




</script>
</body>

</html>
<!-- end document-->