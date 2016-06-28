<?php
  include 'getlist.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorials-Robotics Club - IITK</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">    
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/req_style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body id="top">
        <header id="home">
          <nav class="navbar-fixed-top navbar-default">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Robotics Club</a>
            </div>
            <div class = "navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="index.php#intro">Introduction</a></li>
                <li><a href="index.php#responsive">News and Achievements</a></li>
                <li><a href="index.php#portfolio">Projects</a></li>
                <li><a href="index.php#team">Team</a></li>
                <li><a href="index.php#mail">Write to us</a></li>
                <li><a href="index.php#contact">Get in Touch</a></li>
              </ul>
            </div>                    
          </nav>
          <section class = "hero">
          </section>
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Tutorials</h1>
                <p>Here you will find tutorials on different topics arranged categorywise. Browse through the list to find suitable one.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <?php echo $result ?>;
            </div>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-6">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>Hall-2, IIT Kanpur, Kanpur<br>Uttar Pradesh, 208016</p>
                </div>
              </div>              
              <div class="col-md-6">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-envelope"></i><span>Email</span></h2>
                  <p><a href="mailto:roboticsclubiitkanpur@gmail.com">roboticsclubiitkanpur@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.2872748678724!2d80.22778855014505!3d26.510883783573902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c36ffad76ef6b%3A0xa76d0384176b9417!2sRobotics+Club!5e0!3m2!1sen!2sin!4v1462012384639" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="http://www.facebook.com/groups/roboclub.iitk/" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://twitter.com/#!/roboclub_iitk" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCWM9ZaOmev5otSwQqW3JICA" class="social-btn"><i class="fa fa-youtube-play"></i></a></li>
                  <li><a href="http://www.youtube.com/roboclub" class="social-btn"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="faq.html">FAQs</a></li>
                  <li><a href="http://students.iitk.ac.in/roboclub/useful.html">Useful links</a></li>
                  <li><i class="fa fa-copyright"></i>Copyright 2016. All rights reserved</li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; Developed by <a href="#">Hemant Kumar</a> exclusively for <a href="index.php"><em>Robotics Club</em></a></p>
                <p>Theme credits: <a href="http://www.peterfinlan.com/">Peter Finlan</a></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>