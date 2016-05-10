<?php
session_start();
require 'admin/db/connections.php';

//$clientDB = new ClientDBConnection();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smash Repair Sydney | Qualify & Low Price</title>
    <!-- Stylesheets -->
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
    <style>
        input[type='text'],
        input[type='number'],
        input[type='tel'],
        textarea {
            font-size: 16px;
        }
    </style>
</head>
<body>
<!-- Header -->
<header class="exc-header">
    <!-- Navbar -->
    <div class="exc-navbar">
        <div class="container">
            <div class="exc-brand">
                <a class="exc-logo" href="index.html"><img src="images/logo.png" alt="Auto Love" /></a>
                <ul class="exc-contact-info" style="margin-left: 20px;">
                    <li class="phone-no">
                        <i class="fa fa-phone"></i>
                        <h6 class="info-title">Contact Us</h6>
                        <span class="info-desc">+1 111 111 3272</span>
                    </li>
                    <li class="opening-time">
                        <i class="fa fa-clock-o"></i>
                        <h6 class="info-title">We are open</h6>
                        <span class="info-desc">Mon to Fri: <span class="open-time">9:00am</span>  - <span class="close-time">5:00pm</span></span>
                    </li>
                </ul>
                <a class="exc-menu-btn" href="#">
                    <span class="menu-text">Menu</span>
                    <span class="menu-icon"></span>
                </a>
            </div>
            <nav class="main-navigation">
                <ul>
                    <li class="dropdown mega-dropdown">
                        <a  href="#">Home</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="#">About Us</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="#">Contact Us</a>
                    </li>
                </ul>
                <ul class="exc-nav-right">
                    <li class="dropdown dropdown-custom">
                        <a href="#"><i class="fa fa-map-marker"></i>LOCATIONS</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="exc-locations dropdown-inner">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="exc-page-subheading">
                                            <h2>Our Locations</h2>
                                            <p class="pull-right">We are operating 3 workshop and expanding more soon</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <address>
                                            <span class="address-title">NEW YORK</span>
                                            <span class="address">4019 Geneva Street<br>New York, NY 10016</span>
                                            <span class="phone-no"><i class="fa fa-phone"></i>+1 111 111 3272</span>
                                            <span class="email"><i class="fa fa-envelope"></i>email@autolove.com</span>
                                            <span class="view-map" data-toggle="collapse" data-target="#map1"><i class="fa fa-map-marker"></i>View Map</span>
                                        </address>
                                    </div>
                                    <div class="col-sm-4">
                                        <address>
                                            <span class="address-title">LITTLE ROCK</span>
                                            <span class="address">3323 Sunset Drive<br>Little Rock, AR 72212</span>
                                            <span class="phone-no"><i class="fa fa-phone"></i>+1 111 111 3272</span>
                                            <span class="email"><i class="fa fa-envelope"></i>email@autolove.com</span>
                                            <span class="view-map" data-toggle="collapse" data-target="#map2"><i class="fa fa-map-marker"></i>View Map</span>
                                        </address>
                                    </div>
                                    <div class="col-sm-4">
                                        <address>
                                            <span class="address-title">PINELASS</span>
                                            <span class="address">170 Maryland Avenue<br>Pinellas, FL 34624</span>
                                            <span class="phone-no"><i class="fa fa-phone"></i>+1 111 111 3272</span>
                                            <span class="email"><i class="fa fa-envelope"></i>email@autolove.com</span>
                                            <span class="view-map" data-toggle="collapse" data-target="#map3"><i class="fa fa-map-marker"></i>View Map</span>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div id="map1" class="collapse map-collapse">
                                <div class="location-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.133505526799!2d-76.9829746!3d42.870026200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0c5141f3549a9%3A0xbdb4aae7f7f087b7!2sGeneva+St%2C+Geneva%2C+NY+14456%2C+USA!5e0!3m2!1sen!2s!4v1440679619345" allowfullscreen></iframe>
                                </div>
                                <span class="close-btn close-collapse"><i class="fa fa-times"></i></span>
                            </div>
                            <div id="map2" class="collapse map-collapse">
                                <div class="location-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.8985569491592!2d-92.3470462!3d34.783329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d2a3a5d147cb2b%3A0x866c1a6b8053b8a8!2sSunset+Dr%2C+Little+Rock%2C+AR+72207%2C+USA!5e0!3m2!1sen!2s!4v1440830462755" allowfullscreen></iframe>
                                </div>
                                <span class="close-btn close-collapse"><i class="fa fa-times"></i></span>
                            </div>
                            <div id="map3" class="collapse map-collapse">
                                <div class="location-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3519.868842971827!2d-82.776865!3d28.0895433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f2df6febc2a1%3A0x2897289c127b7b01!2sMaryland+Ave%2C+Palm+Harbor%2C+FL+34683%2C+USA!5e0!3m2!1sen!2s!4v1440830738016" allowfullscreen></iframe>
                                </div>
                                <span class="close-btn close-collapse"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Ends -->

<!-- Main Slider -->
<div id="exc-slider">
    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap">
        <div data-src="images/slides/slide1.jpg">
            <div class="camera_caption fadeIn">
                <div class="slide-caption slide-1-caption">
                    <div class="s1-layer-sm">50% off on</div>
                    <div class="s1-layer-big">All Maintenance Services</div>
                </div>
            </div>
        </div>
        <div data-src="images/slides/slide2.jpg">
            <div class="camera_caption fadeIn">
                <div class="slide-caption">
                    <div class="s2-layer-md">Is Your car ready for</div>
                    <div class="s2-layer-lg">summers ?</div>
                    <div class="s2-layer-sm">a complete aC service + tune up for just 125$</div>
                </div>
            </div>
        </div>
        <div data-src="images/slides/slide3.jpg">
            <div class="camera_caption fadeIn">
                <div class="slide-caption slide-1-caption">
                    <div class="s2-layer-md">Courtesy Car for Smash Repair</div>
                    <div class="s2-layer-lg">No Any</div>
                    <div class="s2-layer-sm">Extra Fees</div>
<!--                    <div class="s1-layer-button">-->
<!--                        <a href="#" name="appointmentLink" class="btn-group" data-toggle="modal" data-target="#appointmentModal">-->
<!--                            <span class="btn">Make An Appointment</span>-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div><!-- #camera_wrap -->
</div>

<!-- Main -->
<main class="exc-main">



    <!-- Services -->
    <div class="exc-services exc-section"  style="margin-top: 20px;">

        <div class="container">

            <div class="exc-page-title">
                <h1 class="text-center" id="quote">Free Quote</h1>
            </div>

            <div class="col-md-12" style="margin-top: -20px; margin-bottom: 20px;">

                <form action="make-appointment.php" class="contact-us-form" method="POST" style="margin-top: 30px;">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input class="form-control" style="margin-top: 20px; margin-bottom: 20px;"
                                   name="username" id="username" placeholder="Full Name" type="text" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input class="form-control" style="margin-top: 20px; margin-bottom: 20px;"
                                   name="mobile" id="mobile" placeholder="Phone Number" type="tel" required>
                        </div>
                        <div class="form-group col-md-4" style="margin-top: 20px; margin-bottom: 20px;">
                                <button class="btn btn-block">Make An Appointment</button>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['error'])) {?>
                    <div class="alert alert-danger col-md-12 text-center" role="alert">
                        <?php
                        echo $_SESSION['error'];
//                        unset($_SESSION['error']);
                        ?>
                    </div>
                    <?php } ?>
                </form>
            </div>

            <div class="heading-cols">
                <h1>Services <br />We Provide</h1>
                <p>
                    Morbi maximus sagittis neque eu commodo. Vestibulum egestas condimentum elit a blandit. Donec eget feugiat dolor. Fusce eu massa vestibulum, viverra turpis ultrices, pulvinar lorem. Sed sodales sodales libero, a faucibus nisl semper sed. Maecenas vitae magna sed massa elementum pretium a id mi. Nam sed posuere erat.
                </p>
                <div class="clearfix"></div>
            </div>
            <ul class="services-list">
                <li>
                    <div class="exc-service break-service">
                        <div class="exc-service-desc">
                            <figure class="service-img">
                                <img src="images/service1.jpg" alt="Break Service">
                            </figure>
                            <div class="services-head-text">
                                <h4><a href="#">BRAKE SERVICES</a></h4>
                                <p class="price-start">From <strong>$29.99</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Brake System Evaluation</span>
                                                <span class="service-price"> from $49.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Replacement Pads</span>
                                                <span class="service-price"> from $29.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Resurfacing Serviced Drum</span>
                                                <span class="service-price"> from $39.99</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="exc-service maintenance">
                        <div class="exc-service-desc">
                            <figure class="service-img">
                                <img src="images/service2.jpg" alt="Break Service">
                            </figure>
                            <div class="services-head-text">
                                <h4><a href="#">MAINTENANCE</a></h4>
                                <p class="price-start">From <strong>$9.99</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Headlight Restoration</span>
                                                <span class="service-price"> from $49.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Bulb Installation</span>
                                                <span class="service-price"> from $9.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Cabin Air Filter Install</span>
                                                <span class="service-price"> from $19.99</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="exc-service tyre-shop">
                        <div class="exc-service-desc">
                            <figure class="service-img">
                                <img src="images/service3.jpg" alt="Break Service">
                            </figure>
                            <div class="services-head-text">
                                <h4><a href="#">TYRE SHOP</a></h4>
                                <p class="price-start">From <strong>$19.99</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Tyre Rotation</span>
                                                <span class="service-price"> from $29.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Flat Tyre Repair</span>
                                                <span class="service-price"> from $19.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-detail.html">
                                                <span class="service-items">Tyre Balancing</span>
                                                <span class="service-price"> from $19.99</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Why Us -->
    <div class="exc-why-us exc-section exc-section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-cols">
                        <h1>Why People <br />Love Us So Much</h1>
                        <p>
                            Morbi maximus sagittis neque eu commodo. Vestibulum egestas condimentum elit a blandit. Donec eget feugiat dolor. Fusce eu massa vestibulum, viverra turpis ultrices, pulvinar lorem. Sed sodales sodales libero, a faucibus nisl semper sed. Maecenas vitae magna sed massa elementum pretium a id mi. Nam sed posuere erat.
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="exc-qualities professional-team">
                        <figure class="why-us-img">
                        </figure>
                        <div class="why-us-desc">
                            <h3>PROFESSIONAL TEAM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="exc-qualities quality-parts">
                        <figure class="why-us-img"></figure>
                        <div class="why-us-desc">
                            <h3>ONLY QUALITY PARTS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="exc-qualities latest-equipment">
                        <figure class="why-us-img"></figure>
                        <div class="why-us-desc">
                            <h3>LATEST EQUIPMENTS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Ends -->



<!-- User Form Modal-->
<div id="appointmentModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Successful!</h4>
            </div>
            <div class="modal-body">
                <h1>Many thanks to your request! We will contact you in short time!</h1>
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
                <div class="col-md-4 col-sm-6">
                    <!-- Widget Services More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Services</h3>
                        <ul class="widget-list">
                            <li><a href="#">Body Work</a></li>
                            <li><a href="#">Engine Performance</a></li>
                            <li><a href="#">Maintenance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Widget Learn More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Support</h3>
                        <ul class="widget-list">
                            <li><a href="#">Tyre Information</a></li>
                            <li><a href="#">Best in Class Brands</a></li>
                            <li><a href="#">Video Library</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Widget links -->
                    <div class="widget widget-links">
                        <h3>Keep In Touch</h3>
                        <ul class="widget-list">
                            <li><i class="fa fa-envelope-o"> : contact@carworkshop.com</i></li>
                            <li><i class="fa fa-map-marker"> : 148 Renwick </i></li>
                            <li><i class="fa fa-phone"> : 0450927366</i></li>
                        </ul>
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
                    <div class="copy-right">COPYRIGHT 2015 · ALL RIGHTS RESERVED</div>
                </div>
                <div class="col-sm-6">
                    <ul class="exc-social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
    <script type="text/javascript"> $('#appointmentModal').modal('show'); </script>
<!--    --><?php //unset($_SESSION['message']); ?>
<?php }?>

<?php
// terminate the session
session_destroy();
?>

</body>
</html>