<?php
include('first.php');
if(isset($_SESSION['login_user'])){
  header("location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robotics Club - IITK</title>
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
              <a class="navbar-brand" href="#">Robotics Club</a>
            </div>
            <div class = "navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#intro">Introduction </a></li>
                <li><a href="#responsive">News and Achievements </a></li>
                <li><a href="#portfolio">Projects</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#mail">Write to us</a></li>
                <li><a href="#contact">Get in Touch</a></li>
                <li><a data-toggle = "modal" data-target = "#login">Login</a></li>
              </ul>
            </div>                    
          </nav>

          <!-- MODAL -->

          <div class = "modal fade" id = "login" tab-index = "-1" role = "dialog">
            <div class = "modal-dialog">
              <div class = "modal-content">
                <section class = "dark-bg">
                  <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                    <h4 class = "modal-title">Login!</h4>
                  </div>
                  <div class = "modal-body">
                    <form role = "form" action = "first.php" method = "post">
                      <div class = "form-group">
                        <div class = "row">
                          <div class = "col-md-12">
                            <label for = "username">Username</label>
                            <input type = "text" class = "form-control" id = "username" name = "username">
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "col-md-12">
                            <label for = "password">Password</label>
                            <input type = "password" class = "form-control" id = "password" name = "password">
                          </div>
                        </div>
                      </div>
                      <button type = "submit" class = "btn btn-default" name = "login">Submit</button>
                    </form>
                  </div>
                </section>
              </div>
            </div>
          </div>


          <section class="hero" id="hero">
            <div class="container">              
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown">ROBOTICS<span>CLUB</span></h1>
                  <p class="animated fadeInUp delay-05s">A dream doesn't become reality through magic; it takes <em>sweat, determination and hard work.</em></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="tutorials.html" class="learn-more-btn">Jump to tutorials</a>
                </div>
              </div>
            </div>
          </section>
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">About us</h1>
                <p>The Robotics Club of IIT Kanpur is a fraternity, not just a group but a faction of such students whose passions dwell in beholding wires and metal beget a machine that has a brain of its own. It's here, that seeds of lecturing are sown by those experienced and erudite, nurtured by the interested and novice , pruned by minute yet unprecedented errors and harvested in competitions all over India. The Club offers indispensible guidance, workshops and tutorials along with tools, equipments, components and workspace. The family meets periodically to discuss over matters such as the management of the workspace, workshops, projects and competitions. We welcome anyone, with or without prior knowledge, who wishes to be a part of this fraternity. There are no pre-requisites to join because we have members that believe in the transfer of knowledge, especially that which concerns our precious interest in Robotics.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Love what you do, and you'll do it well</h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-gear shadow"></i>
                    </div>
                    <h2>Mechanical Design</h2>
                    <p>Interested in robots? Well start designing one with us. Learn and excel designing tools. Run cool simulations and measure different parameters.  </p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-lightbulb-o shadow"></i>
                    </div>
                    <h2>Electronics</h2>
                    <p>With us you will get to learn and work on a wide range of electronic components varying from small led's to big microcontrollers such as Arduino, Raspberry Pi etc. </p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-code shadow"></i>
                    </div>
                    <h2>Programming</h2>
                    <p>Yes! You read it right. We here also program the robot. If you thought robotics was only about mechanical design and some electronics, then it is not so. Here you will learn coding microcontrollers and designing control systems for robots.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Froboclubiitkanpur%2Fposts%2F529198010600040%3A0&width=500" width="450" height="304" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                      </li>
                      <li>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Froboclubiitkanpur%2Fposts%2F513191458867362&width=500" width="500" height="424" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                      </li>
                      <li>
                        <h1 class="arrow">Develop</h1>
                        <p>Constructing the robot, doing trial runs, minimizing the human errors</p>
                      </li>
                      <li>
                        <h1 class="arrow">Deliever</h1>
                        <p>And finally delivering the robot to the club and to IITK junta.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>If opportunity doesn't knock up<span>build a  <em>door!</em></span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class = "row">
                      <div class = "col-md-12">
                        <h1 class="arrow">Long term projects</h1>
                      </div>
                    </div>
                    <div class = "row">
                      <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Minds</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Hearts</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Ideas</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    </div>
                  </li>
                  <li>
                    <h1 class="arrow">Projects of summer'15</h1>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Minds</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Hearts</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>Creative Ideas</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">Ignite Your Passion</a>
              </div>
            </div>
          </div>
        </div>
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
              </div>
            </div>
            <div class="row">
              <h1 class="arrow">Co-ordinators</h1>
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides profiles">
                    <li>
                      <div class="col-md-3 wp5">
                        <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xtf1/t31.0-1/c0.100.1043.1043/s960x960/980495_934193099962852_3050804911360984962_o.jpg" alt="Team Member">
                        <h2>Ankit Kumar</h2>
                        <p>ankitkur@iitk.ac.in<br>Room B-305/5<br>9044127554</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/iitk.ankit" class="social-btn" target = "_blank"><i class="fa fa-facebook"></i></a></li>      
                          </ul>
                        </div>
                      </div>                      
                      <div class="col-md-3 wp5 delay-05s">
                        <img src="http://students.iitk.ac.in/roboclub/images/team/anvesh.jpg" alt="Team Member">
                        <h2>Anvesh Jadon</h2>
                        <p>anvesh@iitk.ac.in<br>Room A-305/10<br>7755047820</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/anveshjadon6197" class="social-btn" target = "_blank"><i class="fa fa-facebook"></i></a></li>                          
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-3 wp5 delay-1s">
                        <img src="http://students.iitk.ac.in/roboclub/images/team/hemantk.jpg" alt="Team Member">
                        <h2>Hemant Kumar</h2>
                        <p>hemantk@iitk.ac.in<br>Room B-304/5<br>8960806551</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/hemant96kumar" class="social-btn" target = "_blank"><i class="fa fa-facebook"></i></a></li>                            
                          </ul>
                        </div>

                      </div>
                      <div class="col-md-3 wp5 delay-105s">
                        <img src="http://students.iitk.ac.in/roboclub/images/team/mayankm.jpg" alt="Team Member">
                        <h2>Mayank Mittal</h2>
                        <p>mayankm@iitk.ac.in<br>Room A-305/5<br>7755057609</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/mayank.mittal.7543" class="social-btn" target = "_blank"><i class="fa fa-facebook"></i></a></li>                  
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <h1 class="arrow">Secretaries</h1>
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides profiles">
                    <li>
                      <div class="col-md-2 wp5">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                      
                      <div class="col-md-2 wp5 ">
                        <img src="img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-2 wp5">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                      
                      <div class="col-md-2 wp5 ">
                        <img src="img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-2 wp5">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                      
                      <div class="col-md-2 wp5 ">
                        <img src="img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-05s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-2 wp5 delay-1s">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="subscribe text-center" id = "mail">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Write to us</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="Name" required>
              <input type="text" name="" value="" placeholder="Your e-mail" required><br>
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
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
                  <li><a href="#">FAQs</a></li>
                  <li><a href="http://students.iitk.ac.in/roboclub/useful.html">Useful links</a></li>
                  <li><i class="fa fa-copyright"></i>Copyright 2016. All rights reserved</li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Hemant Kumar</a> exclusively for <a href="http://tympanus.net/codrops/"><em>Robotics Club</em></a></p>
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