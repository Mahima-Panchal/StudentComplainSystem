<?php
include"header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>sk | Gallery</title>

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
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Gallery</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Gallery</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Some Moments</h2>
            <p></p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top">              
              <ul>
                <li class="filter active" data-filter="all">All</li>
                <li class="filter" data-filter=".lab">Lab</li>
                <li class="filter" data-filter=".classroom">Class Room</li>
                <li class="filter" data-filter=".library">Library</li>
                <li class="filter" data-filter=".cafe">Cafe</li>
                <li class="filter" data-filter=".others">Others</li>
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <!-- start single gallery image 1-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/spu.png"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Sankalchand Patel University</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/spu.png" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 2 -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/lab3.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Dental Lab</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/lab3.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>                  
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 3 -->
               <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/lib2.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Library</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/lib2.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div> 
                    </div>
                  </div>
               </li>
                <!-- start single gallery image 4-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/lab1.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>computer lab</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/lab1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 5-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/class1.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Class Room</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/class1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 6-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/cafe.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Canteen</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/cafe.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 7-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/event.jpg"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Convocation 2019</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/event.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
                 <!-- start single gallery image 8-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/lib1.jpg"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>library</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/lib1.jpg" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image 9-->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="assets/img/gallery/small/lab2.png"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Nursing Lab</h4>
                          <p></p>
                          <a href="assets/img/gallery/big/lab2.png" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <!-- <a href="#" class="aa-link"><span class="fa fa-link"></span></a> -->
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
              </ul>            
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 

  





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
<?php 
include "footer.php";
?>