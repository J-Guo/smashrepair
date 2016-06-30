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
    <meta name="description" content="focus on delivering panel-beating services to each of our valued customers. We understand that your car is valuable to you and therefore we aim in providing superior service. We ensure that highest quality standards are always maintained, by utilizing original equipment from the manufacturer, replacement parts and paint technology that produce the highest quality">
    <meta name="keywords" content="smash,smash repair,car repairs,car repair,smash repairs,car smash repairs,smashed car repair,vehicle repairs,smash and repair,car repair center,vehicle repair center,panel beater,panelbeater,panel beating,
    car dent repair,car restoration,car body work,car body repair,car dent removal,vehicle dent repair,vehicle restoration,vehicle body work,vehicle body repair,vehicle dent removal,dent repair,auto bodywork,car beating spray,spray painting,car spray,
    car paint,car painting,auto body smash repairs,smashed car panel repair,smashed car window repair,auto repair mechanics,cost of car repairs,fixing cars,car service center,no extra fee,car repairs sydney, smash repairs sydney, car repair sydney, smash repair sydney
    courtesy car for smash repair,courtesy car for car repair,trailer truck for smash repair,trailer truck for car repair,cheap smash repair,cheap smash repair marrickville,cheap smash repair inner city,cheap smash repair petersham,cheap smash repair sydney,
    cheap car repair,cheap car repair petersham,cheap car repair marrickville,cheap car repair inner city,cheap car repair sydney,low price smash repair,low price smash repair petersham,low price smash repair marrickville,low price smash repair inner city,
    low price smash repair sydney,low price car repair,low price car repair petersham,low price car repair marrickville,low price car repair inner city,low price car repair sydney,smash repair marrickville,smash repair inner city,smash repair tempe,smash repair wolli creek,
    smash repair inner west,smash repair newtown,smash repair kingsgrove,smash repair rockdale,smash repair campsie,smash repair ashfield,smash repair arncliffe,smash repair earlwood,smash repair petersham,smash repair leichhardt,smash repair mascot,smash repair hurstville,
    smash repair burwood,smash repair homebush,smash repair maroubra,car repair marrickville,car repair inner city,car repair tempe,car repair wolli creek,car repair inner west,car repair newtown,car repair kingsgrove,car repair rockdale,car repair campsie,car repair ashfield,
    car repair arncliffe,car repair earlwood,car repair petersham,car repair leichhardt,car repair mascot,car repair hurstville,car repair burwood,smash repairs marrickville,smash repairs inner city,smash repairs tempe,smash repairs wolli creek,smash repairs inner west,smash repairs newtown,
    smash repairs kingsgrove,smash repairs rockdale,smash repairs campsie,smash repairs ashfield,smash repairs arncliffe,smash repairs earlwood,smash repairs petersham,smash repairs leichhardt,smash repairs mascot,smash repairs hurstville,smash repairs burwood,smash repairs homebush,smash repairs maroubra,
    car repairs marrickville,car repairs inner city,car repairs tempe,car repairs wolli creek,car repairs inner west,car repairs newtown,car repairs kingsgrove,car repairs rockdale,car repairs campsie,car repairs ashfield,car repairs arncliffe,car repairs earlwood,car repairs petersham,car repairs leichhardt,
    car repairs mascot,car repairs hurstville,car repairs burwood,car repairs homebush,car repairs maroubra">
    <title>Orbella | Smash Repair Petersham | Smash Repair Marrickville | (02) 9560 2301 </title>
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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75073481-2', 'auto');
        ga('send', 'pageview');

    </script>
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
    <!-- Include Header -->
    <?php include_once "commons/nav-header.html"; ?>
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
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
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