<?php
include('session.php');
include ('file.php');
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
              <a class="navbar-brand" href="index.html">Robotics Club</a>
            </div>
            <div class = "navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="index.html#intro">Introduction</a></li>
                <li><a href="index.html#responsiveS">News and Achievements</a></li>
                <li><a href="index.html#portfolio">Projects</a></li>
                <li><a href="index.html#team">Team</a></li>
                <li><a href="index.html#mail">Write to us</a></li>
                <li><a href="index.html#contact">Get in Touch</a></li>
                <li class = "dropdown">/
	        		<a class = "dropdown-toggle" type = "button" data-toggle = "dropdown" role = "button" aria-haspopup = "true" aria-expanded = "false"><?php echo $login_session; ?><span class = "caret"></span>
	        		</a>
	        		<ul class = "dropdown-menu">
	        			<li><a href="#">Update profile</a></li>
	        			<li><a href="logout.php">Logout!</a></li>
	        		</ul>                	
                </li>
              </ul>
            </div>                    
          </nav>
        </header>
        <section class=" text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Welcome!</h1>
                <p>Hello! Great to see you here. Scroll down to find tutorials uploading section.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="upload">
          <a href="#upload" class="up-btn"><i class="fa fa-chevron-down"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Upload tutorials</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-8 col-md-offset-2">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-file"></i><span>Upload file</span></h2>
                  <form role = "form"  class = "" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                  	<div class = "form-group ">
                    <div class = "row">
                        <div class = "col-md-8 col-md-offset-2">
                          <label for = "title">Title</label>
                          <input type = "text" name = "title" class = "form-control">
                        </div>
                      </div>                  		
                  		<div class = "row">
                  			<div class = "col-md-8 col-md-offset-2" id = "categories">
                  			</div>
                  		</div>
                  		<div class = "row">
                  			<div class = "col-md-8 col-md-offset-2">
                  				<label for = "desc">File description</label>
		                  		<textarea rows = "4" class = "form-control" name = "desc"></textarea>
                  			</div>
                  		</div>
                  		<div class = "row">
                  			<div class = "col-md-8 col-md-offset-2">
		                  		<input type = "file" name = "tut_file" >
                  			</div>
                  		</div>
                  	</div>
                  	<button class = "btn btn-default" type = "submit" name = "upload">Upload</button>
                    <div class = "row">
                        <div class = "col-md-12">
                          <span><?php echo $message; ?></span>
                        </div>
                      </div>
                  </form>
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
        <script type="text/javascript">
          $(document).ready(function(){
            $.get("categories.php",function(data){
              $('#categories').prepend(data);
            });
            $("#categories").on('change','input:radio',function(){
               //alert($("input[name = 'category']:checked").val());
               if($("input[name = 'category']:checked").val() == '-1'){
                $("#categories input:text").removeClass('hidden');
               } else if(!$("#categories input:text").hasClass('hidden')){
                $("#categories input:text").addClass('hidden');
               }               
            });
            $("input[name = 'category']").change(function(){
              
            });
            $("button[name = 'upload']").click(function(){
              var name = $("input[name = 'tut_file']").val();
              
            });
          });
        </script>
      </body>
    </html>