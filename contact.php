<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Smash Repairs In Sydney">
    <meta name="keywords" content="smash,smash repair,car repair,smash repairs,car smash repairs,
        smashed car repair,vehicle repairs,smash and repair,car repair center,vehicle repair center,
        panel beater,panelbeater,panel beating,car dent repair,car restoration,car body work,car body repair,
        car dent removal,vehicle dent repair,vehicle restoration,vehicle body work,vehicle body repair,
        vehicle dent removal,dent repair">
    <title>Orbella | Smash Repair Petersham Marrickville | (02) 9560 2301 </title>
    <!-- Stylesheets -->
    <link rel="icon" href="images/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Disable Mobile Zoom for Input Field-->
    <style>
        input[type='text'],
        input[type='tel'],
        textarea {
            font-size: 16px;
        }
    </style>
</head>
<body>
<!-- Header -->
<!-- Header -->
<header class="exc-header">
    <!-- Navbar -->
    <div class="exc-navbar">
        <div class="container">
            <div class="exc-brand">
                <a class="exc-logo" href="">
                    <img src="images/logo.png" alt="Auto Love" />
                </a>
                <ul class="exc-contact-info" style="margin-left: 20px;">
                    <li class="phone-no">
                        <i class="fa fa-phone"></i>
                        <h6 class="info-title">Contact Us</h6>
                        <span class="info-desc">0431858685</span>
                    </li>
                    <li class="opening-time">
                        <i class="fa fa-clock-o"></i>
                        <h6 class="info-title">Mon to Sun</h6>
                        <span class="info-desc"> <span class="open-time">9:00am</span>  - <span class="close-time">7:00pm</span></span>
                    </li>
                    <li class="opening-time">
                        <i class="fa fa-map-marker"></i>
                        <h6 class="info-title">139 New Canterbury Rd</h6>
                        <span class="info-desc">Petersham NSW 2049</span>
                    </li>
                </ul>
                <a class="exc-menu-btn" href="#">
                    <span class="menu-icon"></span>
                </a>
            </div>
            <nav class="main-navigation">
                <ul>
                    <li class="dropdown mega-dropdown">
                        <a  href="index.php">Home</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="about-us.php">About Us</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="services.php">Our Services</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <ul class="exc-nav-right">
                    <li >
                        <a href="index.php#quote"><i class="fa fa-star"></i>Make An Appointment</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Ends -->

<!-- Page Banner -->
<div class="exc-page-banner">

</div>
<!-- Main -->
<main class="exc-main">
    <div class="exc-page-content" >
        <div class="container">
            <div class="exc-page-title">
                <h1>CONTACT US</h1>
            </div>

            <div class="row" id="contact-form" >
                <div class="col-md-8">
                    <form action="send-message.php" method="post" class="contact-us-form">
                        <p class="block-label">PLEASE FEEL FREE TO CONTACT US FOR ANY INQUIRY OR BOOKING</p>
                        <div class="row">
                            <!-- Validation Messages-->
                            <?php if(isset($_SESSION['error'])) {?>
                            <div class="form-group col-md-12">
                                <div class="alert alert-danger col-md-12 text-center" role="alert">
                                    <?php
                                    echo $_SESSION['error'];
                                    ?>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="form-group col-md-6">
                                <input class="form-control"
                                       value="<?php echo isset($_SESSION['oldname'])? $_SESSION['oldname']:"" ?>"
                                       name="username" id="username" placeholder="Full Name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"
                                       value="<?php echo isset($_SESSION['oldmobile'])? $_SESSION['oldmobile']:"" ?>"
                                       name="mobile" id="mobile" placeholder="Phone Number" type="tel">

                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"
                                       value="<?php echo isset($_SESSION['oldsubject'])? $_SESSION['oldsubject']:"" ?>"
                                       name="emailSubject" id="emailSubject" placeholder="Subject" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control"
                                       value="<?php echo isset($_SESSION['oldemail'])? $_SESSION['oldemail']:"" ?>"
                                       name="email" id="email" placeholder="Email Address" type="text">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="font-size: 16px;" class="form-control"

                                        name="messageBody" id="messageBody"  placeholder="Write your message here" rows="8"></textarea>
                            </div>
                            <div class="form-group col-md-12">

                                    <button class="btn btn-block">Send Message</button>

                            </div>


                        </div>
                    </form>
                </div>
                <aside class="col-md-4">
                    <!-- Widget Our Locations -->
                    <div class="widget widget-our-locations">
                        <h3>FIND US</h3>
                        <div class="location-box">
                            <figure style="height:250px;">
                                <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgaLA8HKwEmsRHF70gPOWKFk&key=AIzaSyAomTWe6-_JXMoza7hm9olIQLZ8TEq5PdY" allowfullscreen></iframe>
                            </figure>
                            <address>
                                <span class="address">139 New Canterbury RD, Petersham NSW 2049</span>
                                <span class="phone-no"><i class="fa fa-phone"></i>0431858685</span>
                                <span class="email"><i class="fa fa-envelope"></i>info@orbellasmashrepairs.com.au</span>
                                <span class="worktime"><i class="fa fa-clock-o"></i>Mon - Sun: 9:00 AM - 7:00 PM</span>
                            </address>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
</main>
<!-- Main Ends -->

<!-- User Form Modal-->
<div id="emailMessageModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Message Sent Successfully!</h4>
            </div>
            <div class="modal-body">
                <h1>Many thanks to your message! We will send email back to you in short time!</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal-->

<!-- Footer -->
<footer class="exc-footer">
    <!-- Footer Widgets -->
    <div class="exc-footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- Widget Services More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Services</h3>
                        <ul class="widget-list">
                            <li><a href="services.php">Panel Beating</a></li>
                            <li><a href="services.php">Spray Painting</a></li>
                            <li><a href="services.php">Body Maintenance</a></li>
                            <li><a href="services.php">Free Rental Cars</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Widget Learn More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Support</h3>
                        <ul class="widget-list">
                            <li><a href="services.php">Latest Cars</a></li>
                            <li><a href="services.php">Lifetme Gurantee Repair</a></li>
                            <li><a href="services.php">Friendly customer service </a></li>
                            <li><a href="services.php">100% Quality Work</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Widget links -->
                    <div class="widget widget-links">
                        <h3>Keep In Touch</h3>
                        <ul class="widget-list">
                            <li><a href="contact.php"><i class="fa fa-envelope-o"></i> :  info@orbellasmashrepairs.com.au </a></li>
                            <li><a href="https://www.google.com/maps/place/139+New+Canterbury+Rd,+Lewisham+NSW+2049,+Australia/@-33.896744,151.14988,15z/data=!4m5!3m4!1s0x6b12b072f0c0a281:0x592896f380f45e1c!8m2!3d-33.896744!4d151.14988?hl=en-US"><i class="fa fa-map-marker"></i> : 139 New Canterbury RD </a></li>
                            <li><a></a><i class="fa fa-phone"></i> : 0431858685</a></li>
                            <li><a></a><i class="fa fa-clock-o"></i> : Mon-Fri 9:00 AM - 7:00 PM</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-our-shop">
                        <h3>Our Location</h3>
                        <div class="location-map">
                            <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgaLA8HKwEmsRHF70gPOWKFk&key=AIzaSyAomTWe6-_JXMoza7hm9olIQLZ8TEq5PdY" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy Right -->
    <div class="exc-copy-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copy-right">COPYRIGHT 2016 · ORBELLASMASHREPAIRS ALL RIGHTS RESERVED</div>
                </div>
                <div class="col-sm-6">
                    <ul class="exc-social-links">
                        <li><a href="https://plus.google.com/+OrbellaSydney/about"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends -->

<!-- jQuery (necessary for JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.mobile.customized.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/camera.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/scripts.js"></script>

<!-- Show User Modal Based on Feedback Message-->
<?php if(isset($_SESSION['message'])) {?>
    <script type="text/javascript"> $('#emailMessageModal').modal('show'); </script>
<?php }?>

</body>
</html>

<!-- Terminate the Session -->
<?php
session_destroy();
?>