<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Student Complains System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
    <!-- start header -->
    <header id="mu-header">
      <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-	md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>Spu.ac.in</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  
                    <div class="mu-top-social-nav">

                      <li><a href="https://www.facebook.com/spuni/"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="https://twitter.com/spuvsn?lang=en"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="http://spu.ac.in/"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="https://www.linkedin.com/school/department-of-mca-sankalchand-patel-college-of-engineering-sfi-visnagar.-529/"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="https://www.youtube.com/channel/UCNMXxHH-PG7F_Dp6Ru7Stuw"><span class="fa fa-youtube"></span></a></li>
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
    <!-- End header -->

    <!-- start Menu -->
    <section id="mu-menu">
      <nav class="navbar navbar-default" role="navigation">  
        <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href=""><i class="fa fa-university" style="color: #4dbfdb; font-size: 40px;"></i><span style="font-size: 35px;">Sakalchand Patel University</span></a>
          <br>&apos;
        </div>
      </div>
      </nav>
      <div class="div-iframe">
          <iframe class="embed-responsive-item" src="defualt.php" name="iframe_a" height="535px" width="1075px" title="Iframe Example"allowfullscreen></iframe>
      </div>
      <div class="btn">
        <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
        <div class="text"><a href="defualt.php" target="iframe_a" class="text">Welcome Admin</a></div>
        <ul>
          <li>
            <a href="complain.php" class="comp-btn" target="iframe_a">Complains
              <!-- <span class="fas fa-caret-down first"></span> -->
            </a>
            <!-- <ul class="comp-show">
              <li><a href="complain.php" target="iframe_a">Not Process Yet Complains</a></li>
              <li><a href="solve_complain.php" target="iframe_a">Solve Complains</a></li>
            </ul> -->
          </li>
          <li>
            <a class="resp-btn">Response
              <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="resp-show">
              <li><a href="#" target="iframe_a">Show Response</a></li>
              <li><a href="#" target="iframe_a">Update Response</a></li>
              <li><a href="#" target="iframe_a">Delete Response</a></li>
            </ul>
          </li>
          <li>
            <a class="notice-btn">Notice
              <span class="fas fa-caret-down third"></span>
            </a>
            <ul class="notice-show">
              <li><a href="#" target="iframe_a">Add Notice</a></li>
              <li><a href="#" target="iframe_a">Update Notice</a></li>
              <li><a href="#" target="iframe_a">Delete Notice</a></li>
            </ul>
          </li>
          <li><a href="#" target="iframe_a">Admin Profile</a></li>
          <li><a href="admin_logout.php">Log Out</a></li>
        </ul>
      </nav>
    </section>
    <script>
      $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
      });
      $('.comp-btn').click(function(){
        $('nav ul .comp-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });

      $('.resp-btn').click(function(){
        $('nav ul .resp-show').toggleClass("show");
        $('nav ul .second').toggleClass("rotate");
      });
      $('.notice-btn').click(function(){
        $('nav ul .notice-show').toggleClass("show1");
        $('nav ul .third').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
    <!-- End Menu -->

    <!-- <iframe src="demo_iframe.htm" name="iframe_a" style="margin: 20px;" height="300px" width="100%" title="Iframe Example">asd</iframe> -->
  </body>
</html>
