<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cybex Arc Trainer | Contact Us</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container header-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cybex Arc Trainer</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Shop Cybex</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- nav for mobile only -->
            <div class="mobile-nav hidden-sm hidden-md hidden-lg">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Shop Cybex</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>                    
                </ul>
            </div><!-- end mobile nav -->             
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <main class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header">Contact Cybex Arc Trainer
                    <!-- <small>To purchase equipment...</small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
                <!-- there was a map here. It was removed by designer. Refer to original template if map insertion is desired. -->
            <!-- Contact Details Column -->
            <div class="col-md-4 col-md-offset-4 text-center" id="contact-details">
                <h3 class="text-center">Contact Details</h3>
                <p>
                   <b>Gym Store - Cybex Arc Trainer</b><br> 58-89 57th Street<br>Maspeth, NY 11378<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"><span class="hidden">Phone</span></abbr> 1.718.366.7804 &nbsp;|&nbsp;
                     <i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"><span class="hidden">Email</span></abbr><a href="mailto:sales@gymstore.com" class="theme-color">sales@gymstore.com</a>
                </p>
                <!-- <p><i class="fa fa-clock-o"></i> TODO put working hours here -->
            </div>
        </div>
        <!-- /.row -->
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-12 col-lg-10 col-lg-offset-1">
                <h3 class="text-center">Send Us a Quick Message</h3>
                <form name="sentMessage" id="contactForm" method="post" action="bin/contact_me.php" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="phone">Your Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="email">Your Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="message">How can we help you?</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="text-center col-lg-12">
                                        <p>Gym Store, based in NYC is a supplier of the finest remanufactured Cybex Fitness Equipment.  We pride ourselves on providing unmatched quality at cost effective pricing.  We offer custom designed equipment as well.  Please <a href="contact.html">call or email us today</a> to discuss your Cybex gym equipment needs.</p>
                    <small>Copyright &copy; CybexArcTrainer.info</small>
                </div>
            </div>
        </footer>
    </main>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>
