<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME- Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- vendor1 CSS Files -->
  <link href="assets/vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor1/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor1/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor1/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor1/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor1/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor1/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .why-us .icon-boxes .icon-box {
    text-align: left;}
    .ml-3, .mx-3 {
    margin-left: 0rem!important;
}
.ml-2, .mx-2 {
    margin-left: -1.5rem!important;
}
.mr-3, .mx-3 {
    margin-right: 1rem!important;
}
.why-us .icon-boxes .icon-box {
    text-align: left;
    border-radius: 10px;
    background: #fff;
    box-shadow: 6px 2px 15px rgba(0, 0, 0, 0.1);
    padding: 40px 30px;
    width: 100%;
}
/* .modal-header{
  background:#28a745;
} */

  </style>
</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index1.php">MEDICAMENT</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index1.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="drop-down"><a href="">Hospitals</a>
            <ul>
              <li><a href="#">Sign up</a></li>
              <li><a href="#">Login</a></li>
              
            </ul>
          </li>
          
          <li class="drop-down"><a href="">pharmacy</a>
            <ul>
              <li><a href="#"></a></li>
             
              <li><a href="#">Sign up</a></li>
              <li><a href="#">Login</a></li>
              
            </ul>
          </li>
         
          <li><a href="#departments">FAQ'S</a></li>
          <li><a href="#doctors">Tutorials</a></li>
         
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto">Schemes</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= background picture Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      
      <h1 style="color:whitesmoke;">Welcome to MEDICAMENT</h1>
      <h2 style="color:black;">Virtual Healthcare</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose MEDICAMENT?</h3>
              <p>
               Healthcare at your home
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
             
                <div class="col-xl-8 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Users</h4>
                    <button class="btn btn-outline-primary my-2 my-sm-0 mx-3"  data-toggle="modal" data-target="#logisticsignupModal">Signup</button>
                    <button class="btn btn-outline-primary my-2 my-sm-2 mx-3"  data-toggle="modal" data-target="#logisticloginModal">login</button>
                    <?php
                          include 'partials/_usersloginmodal.php';
                          include 'partials/_usersignupmodal.php';
                    ?>
                    <!-- <p>MAKE AN ACCOUNT<BR><BR>LOG IN</p></div> -->
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>HOSPITAL</h4>
                    <button class="btn btn-outline-primary my-2 my-sm-0 mx-3"  data-toggle="modal" data-target="#farmersignupModal">Signup</button>
                    <button class="btn btn-outline-primary my-2 my-sm-2 mx-3"  data-toggle="modal" data-target="#farmerloginModal"> Login </button>
                    <?php
                    include 'partials/_hospitalloginmodal.php';
                    include 'partials/_hospitalsignupmodal.php';
                    ?>

                    <!-- <p>MAKE AN ACCOUNT<BR><BR>LOG IN</p> -->
                  </div>
                </div>
                <div class="col-xl-5 d-flex align-items-stretch">
                  <div class="icon-box mt-5 mt-xl-2">
                    <i class="bx bx-images"></i>
                    <h4>PHARMACY</h4>
                    <button class="btn btn-outline-primary my-2 my-sm-0 mx-3"  data-toggle="modal" data-target="#retailersignupModal">Signup</button>
                    <button class="btn btn-outline-primary my-2 my-sm-2 mx-3"  data-toggle="modal" data-target="#retailerloginModal">login</button>
                    <?php
                    include 'partials/_pharmloginmodal.php';
                    include 'partials/_pharmsignupmodal.php';
                    ?>
                    <!-- <p>MAKE AN ACCOUNT<BR><BR>LOG IN</p></div> -->
                </div>
               </div> 
                <div class="col-xl-4 d-flex align-items-stretch">
                  
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>TUTORIALS</h3>
            <p> make your account</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">2.</a></h4>
              <p class="description"><I>If you have prescribed medicines than search nearby pharmacies</I></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">3.</a></h4>
              <p class="description">Check Availibility of medicine,quantity and price.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">4.</a></h4>
              <p class="description">check nearby hospitals and update your profile for consultation process</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Access Healthcare!!</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4><a href="">HOSPITALS</a></h4>
              <p>E- CONSULTATIONModi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4><a href="">PHARMACY</a></h4>
              <p>BUY MEDICINESModi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur 
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-dna-alt-2"></i></div>
              
              <h4><a href="">SUBSITUTES</a></h4>
              <p>CHECK ALTERNATIVES OF A PARTICULAR MEDICINE AND CHECK ITS AVAILIBILITY.
              </p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
         
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    
                    <p>Cardiology is a medical specialty and a branch of internal medicine concerned with disorders of the heart. It deals with the diagnosis and treatment of such conditions as congenital heart defects, coronary artery disease, electrophysiology, heart failure and valvular heart disease.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    
                    
                    <p>Neurology is the branch of medicine concerned with the study and treatment of disorders of the nervous system. The nervous system is a complex, sophisticated system that regulates and coordinates body activities. It has two major divisions: Central nervous system: the brain and spinal cord.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
                  </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>MK Singh</h4>
                <span>Chief Medical Officer</span>
                
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Gupta</h4>
                <span>Anesthesiologist</span>
            
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Khan</h4>
                <span>Neurosurgeon</span>
                
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Can we find subsitutes of medicine if a particular medicine is not availble? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                 Yes , you can search for the medicine , its subsitutes will be shown and its Availibility in your area.
                </p>
              </div>
            </li>

            

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Is E- consultation availible? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Yes you have to provide your basic health information and symptoms. Accordingly it will be directed to the doctor.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              
              <h3>Atul Gawande</h3>
              
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                “Life is choices, and they are relentless. No sooner have you made one choice than another is upon you.”
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
                            <h3>Patrick Rothfuss</h3>
              
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                “No man is brave that has never walked a hundred miles. If you want to know the truth of who you are, walk until not a person knows your name. Travel is the great leveler, the great teacher, bitter as medicine, crueler than mirror-glass. A long stretch of road will teach you more about yourself than a hundred years of quiet introspection.”
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          

  

        </div>

      </div>
    </section><!-- EnD FAQ> -->


<!-- == Counts Section === -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="icofont-doctor-alt"></i>
          <span data-toggle="counter-up">16</span>
          <p>Total Registered</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="icofont-patient-bed"></i>
          <span data-toggle="counter-up">8</span>
          <p>USERS</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-laboratory"></i>
          <span data-toggle="counter-up">4</span>
          <p>PHARMACY</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-award"></i>
          <span data-toggle="counter-up">4</span>
          <p>HOSPITALS</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->
    
  </main><!-- End #main -->

          
        </div>
      </div>
      

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- vendor1 JS Files -->
  <script src="assets/vendor1/jquery/jquery.min.js"></script>
  <script src="assets/vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor1/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor1/php-email-form/validate.js"></script>
  <script src="assets/vendor1/venobox/venobox.min.js"></script>
  <script src="assets/vendor1/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor1/counterup/counterup.min.js"></script>
  <script src="assets/vendor1/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor1/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  
  <script src="assets/js/main1.js"></script>

</body>

</html>