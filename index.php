<?php
session_start();
//require 'admin/db/connections.php';

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

    <!-- Disable Mobile Zoom for Input Field-->
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
                <a class="exc-logo" href="">
                    <img src="images/smash-logo.jpg" alt="Auto Love" />
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
                    <span class="menu-text">Menu</span>
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
                        <a  href="supports.php">Our Supports</a>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a  href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <ul class="exc-nav-right">
                    <li >
                        <a href="#quote"><i class="fa fa-star"></i>Make An Appointment</a>
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
                    <div class="s1-layer-sm">Hire CAR & TAXI</div>
                    <div class="s1-layer-big">Repair Specialist </div>
                </div>
            </div>
        </div>
        <div data-src="images/slides/slide2.jpg">
            <div class="camera_caption fadeIn">
                <div class="slide-caption">
                    <div class="s2-layer-md">Lifetime</div>
                    <div class="s2-layer-lg">Guarantee</div>
                    <div class="s2-layer-sm">On All Repairs </div>
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
                <h1 class="text-center" name="quote" id="quote">Contact Us</h1>
            </div>

            <div class="col-md-12" style="margin-top: -20px; margin-bottom: 20px;">

                <form action="make-appointment.php" class="contact-us-form" method="POST" style="margin-top: 30px;">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input class="form-control" style="margin-top: 20px; margin-bottom: 20px;"
                                   value="<?php echo isset($_SESSION['oldname'])? $_SESSION['oldname']:"" ?>"
                                   name="username" id="username" placeholder="Full Name" type="text" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input class="form-control" style="margin-top: 20px; margin-bottom: 20px;"
                                   value="<?php echo isset($_SESSION['oldmobile'])? $_SESSION['oldmobile']:"" ?>"
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
                        ?>
                    </div>
                    <?php } ?>
                </form>
            </div>

            <div class="heading-cols">
                <h1>Services <br />We Provide</h1>
                <p class="text-justify">
                    Petersham Smash Repairs Company offer smash repairs services for all luxury cars including BMW, Range Rover, Audi, Mercedes-Benz, and Porsche as well as high cars. Petersham Smash Repairs is located in the inner west of Sydney, six kilometers southwest of Sydney central business district.
                </p>
                <div class="clearfix"></div>
            </div>
            <ul class="services-list">
                <li>
                    <div class="exc-service break-service">
                        <div class="exc-service-desc">
                            <figure class="service-img">
                                <img src="images/service3.jpg" alt="Break Service">
                            </figure>
                            <div class="services-head-text">
                                <h4><a href="#">Panel Beating</a></h4>
                                <p class="price-start">From <strong>$29.99</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Brake System Evaluation</span>
                                                <span class="service-price"> from $49.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Replacement Pads</span>
                                                <span class="service-price"> from $29.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
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
                                <h4><a href="#">Spray Painting</a></h4>
                                <p class="price-start">From <strong>$9.99</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Headlight Restoration</span>
                                                <span class="service-price"> from $49.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Bulb Installation</span>
                                                <span class="service-price"> from $9.99</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
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
                                <img src="images/service5.jpg" alt="Break Service">
                            </figure>
                            <div class="services-head-text">
                                <h4><a href="#">Free Rental Car</a></h4>
                                <p class="price-start">It's <strong>Free</strong></p>
                                <div class="clearfix"></div>
                                <div class="service-price-desc">
                                    <ul class="scroll-block">
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Coutesy Car</span>
                                                <span class="service-price"> Free !</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">Delivery Car</span>
                                                <span class="service-price"> Free !</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php">
                                                <span class="service-items">7 Seater SUV</span>
                                                <span class="service-price"> from $89</span>
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
                        <p class="text-justify">
                            We provide smash repairs services as well as car maintenance to our valued customers. Our professional staff put the customers first and provides a wide range of services making sure that the customer is looked after while their vehicle is been repaired.
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
                            <p>Hire CAR & TAXI repair specialist </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="exc-qualities quality-parts">
                        <figure class="why-us-img"></figure>
                        <div class="why-us-desc">
                            <h3>ONLY QUALITY PARTS</h3>
                            <p>100% Quality assured </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="exc-qualities latest-equipment">
                        <figure class="why-us-img"></figure>
                        <div class="why-us-desc">
                            <h3>LATEST EQUIPMENTS</h3>
                            <p>Life time guarantee on all repairs </p>
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
                <h4 class="modal-title">Query Made Successfully!</h4>
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
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- Widget Services More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Services</h3>
                        <ul class="widget-list">
                            <li><a href="services.php">Body Work</a></li>
                            <li><a href="services.php">Engine Performance</a></li>
                            <li><a href="services.php">Maintenance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <!-- Widget Learn More -->
                    <div class="widget widget-learn-more">
                        <h3>Our Support</h3>
                        <ul class="widget-list">
                            <li><a href="supports.php">Latest Cars</a></li>
                            <li><a href="supports.php">Lifetme Gurantee Repair</a></li>
                            <li><a href="services.php">100% Quality Work</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Widget links -->
                    <div class="widget widget-links">
                        <h3>Keep In Touch</h3>
                        <ul class="widget-list">
                            <li><a><i class="fa fa-envelope-o"></i> : info@orbellasmashrepairs </a></li>
                            <li><a href="https://www.google.com/maps/place/139+New+Canterbury+Rd,+Lewisham+NSW+2049,+Australia/@-33.896744,151.14988,15z/data=!4m5!3m4!1s0x6b12b072f0c0a281:0x592896f380f45e1c!8m2!3d-33.896744!4d151.14988?hl=en-US"><i class="fa fa-map-marker"></i> : 139 New Canterbury RD </a></li>
                            <li><a></a><i class="fa fa-phone"></i> : 0431858685</a></li>
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
                    <div class="copy-right">COPYRIGHT 2016 · ORBELLASMASHREPAIRS ALL RIGHTS RESERVED</div>
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
<?php }?>

<!-- Terminate the Session -->
<?php
session_destroy();
?>

</body>
</html>