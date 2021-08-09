<?php session_start();?>

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
    <title>medicine</title>
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
                        <a href="index.php">
                            <i class="fa fa-venus"></i>Profile</a>
                    </li>


                    <li>
                        <a href="dash.php">
                            <i class="fas fa-chart-bar"></i>Hospital</a>
                    </li>
                    <li>
                        <a href="TxnTest.php">
                            <i class="fas fa-shopping-basket"></i>cart</a>
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


        <div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body card-block">

                            <h1 class="p-name entry-title">7 ways to jumpstart healthy change in your life</h1>


                            <div class="e-content entry-content">


                            </div>
                            <p>The day-to-day choices you make influence whether you maintain vitality as you age or
                                develop life-shortening illnesses and disabling conditions like heart disease, diabetes,
                                high blood pressure, and stroke. You may understand exactly what you need to do to enjoy
                                a healthier, happier life: carve out time to exercise, perhaps, or find a way to ratchet
                                down stress. There's just one hitch. You haven't done it yet.</p>

                            <p>Often, the biggest hurdle is inertia. It's true that it isn't easy to change ingrained
                                habits like driving to nearby locations instead of walking, let's say, or reaching for a
                                donut instead of an apple. However, gradually working toward change improves your odds
                                of success. Here are some strategies that can help you enact healthy change in your
                                life, no matter what change (or changes) you'd like to make.</p>

                            <h3>Seven steps to shape your personal plan</h3>

                            <p>Shaping your personal plan starts with setting your first goal. Break down choices that
                                feel overwhelming into tiny steps that can help you succeed.</p>

                            <ol>
                                <li>
                                    <strong>Select a goal.</strong> Choose a goal that is the best fit for you. It may
                                    not be the first goal you feel you <em>should</em> choose. But you're much more
                                    likely to succeed if you set priorities that are compelling to you and feel
                                    attainable at present.
                                </li>
                                <li>
                                    <strong>Ask a big question.</strong> Do I have a big dream that pairs with my goal?
                                    A big dream might be running a marathon or climbing Mt. Kilimanjaro, wiggling back
                                    into a closet full of clothes you love, cutting back on blood pressure medication,
                                    or playing games and sports energetically with your children. One word to the wise:
                                    if you can't articulate a big dream, don't get hung up on this step. You can still
                                    succeed in moving toward your goal through these other approaches.
                                </li>
                                <li>
                                    <strong>Pick your choice for change.</strong> Select a choice that feels like a sure
                                    bet. Do you want to eat healthier, stick to exercise, diet more effectively, ease
                                    stress? It's best to concentrate on just one choice at a time. When a certain change
                                    fits into your life comfortably, you can then focus on the next change.
                                </li>
                                <li>
                                    <strong>Commit yourself.</strong> Make a written or verbal promise to yourself and
                                    one or two supporters you don't want to let down: your partner or child, a teacher,
                                    doctor, boss, or friends. That will encourage you to slog through tough spots. Be
                                    explicit about the change you've chosen and why it matters to you. If it's a step
                                    toward a bigger goal, include that, too. <em>I'm making a commitment to my health by
                                        planning to take a mindful walk, two days a week. This is my first step to a
                                        bigger goal: doing a stress-reducing activity every day (and it helps me meet
                                        another goal: getting a half-hour of exercise every day). I want to do this
                                        because I sleep better, my mood improves, and I'm more patient with family and
                                        friends when I ease the stress in my life.</em>
                                </li>
                                <li>
                                    <strong>Scout out easy obstacles.</strong> Maybe you'd love to try meditating, but
                                    can't imagine having the time to do it. Or perhaps your hopes for eating healthier
                                    run aground if you're hungry when you walk through the door at night, or your
                                    kitchen cabinets and refrigerator aren't well-stocked with healthy foods.
                                </li>
                                <li>
                                    <strong>Brainstorm ways to leap over obstacles.</strong> Now think about ways to
                                    overcome those roadblocks. Not enough time? <em>I'll get up 20 minutes early for
                                        exercises and fit in a 10-minute walk before lunch.</em> Cupboard bare of
                                    healthy choices? <em>I'll think about five to 10 healthy foods I enjoy and will put
                                        them on my grocery list.</em>
                                </li>
                                <li>
                                    <strong>Plan a simple reward.</strong> Is there a reward you might enjoy for a job
                                    well done? For example, if you hit most or all of your marks on planned activities
                                    for one week, you'll treat yourself to a splurge with money you saved by quitting
                                    smoking, a luxurious bath, or just a double helping of trhe iTunes application
                                    "Attaboy." Try to steer clear of food rewards, since this approach can be
                                    counterproductive.
                                </li>
                            </ol>
                            <h3>Breaking it down</h3>

                            <p>Taking a 10-minute walk as part of a larger plan to exercise, or deciding to drink more
                                water and less soda, certainly seem like easy choices. Even so, breaking them down
                                further can help you succeed.</p>

                            <p>Here are a few examples of how you can break a goal into smaller bites.</p>

                            <h4>Take a 10-minute walk</h4>

                            <ul>
                                <li>Find my comfortable walking shoes or buy a pair.</li>
                                <li>Choose days and times to walk, and then pencil this in on the calendar.</li>
                                <li>Think about a route.</li>
                                <li>Think about possible obstacles and solutions. If it's raining hard, what's Plan B?
                                    (I'll do 10 minutes of mixed marching, stair climbing, and jumping rope before
                                    dinner.) Maybe I dislike getting my work clothes sweaty. If I'm planning to hop off
                                    the bus a few stops early and walk the rest of the way home, what could I do? (I'll
                                    need T-shirts to change into at work. If I bring in five every Monday, I'm covered.
                                    I'll put my walking shoes in my work bag at night.)</li>
                            </ul>
                            <h4>Drink more water, less soda</h4>

                            <ul>
                                <li>Find my water bottle (or buy one).</li>
                                <li>Wash out the bottle, fill it up, and put it in the refrigerator at night.</li>
                                <li>Put a sticky note on the front door, or on my bag, to remind me to take the water
                                    bottle with me.</li>
                                <li>At work, take a break in the morning and one in the afternoon to freshen up my water
                                    bottle. This is a good time to notice how much (or little) I'm drinking.</li>
                                <li>When I get home from work, scrub out my water bottle for the following day and
                                    repeat.</li>
                            </ul>
                            <h4>Track my budget for a month</h4>

                            <ul>
                                <li>Every night, put all receipts and paid bills in an envelope placed in a visible
                                    spot.</li>
                                <li>Choose one: a) buy budget-tracking computer software, such as Quicken or QuickBooks;
                                    b) buy a similar application for my phone; c) use a debit card for every purchase;
                                    d) tuck a notepad into my purse or pocket to record all purchases.</li>
                                <li>Follow instructions to load software on computer, or application on phone, if I've
                                    chosen to use it.</li>
                                <li>Schedule 30 minutes at the end of the two-week mark to go over expenses with an eye
                                    toward identifying low-hanging fruit to trim. Sort expenses into categories first
                                    (rent or mortgage, utilities, groceries, entertainment, etc.). Consider what
                                    categories to trim. Set a goal to reduce or eliminate some of these expenses (for
                                    example: cut out 5% of spending across the board or in one category, ride a bike to
                                    work rather than paying commuter fees, or make my own coffee rather than buying it).
                                </li>
                                <li>At the end of the fourth week, review all spending categories and add up the money
                                    I've saved. Decide on an appropriate reward — maybe spending half the money,
                                    spending time in a pleasurable pursuit, or just basking in praise for a job well
                                    done.</li>
                            </ul>
                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>