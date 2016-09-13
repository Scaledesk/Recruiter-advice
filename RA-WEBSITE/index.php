<?php
require('../RA-ADMIN/connection.php');

$data1="SELECT * FROM Testimonials";

$val1=mysql_query($data1);
$r1=mysql_fetch_array($val1);

$data2="SELECT * FROM Team";

$val2=mysql_query($data2);
//$r2=mysql_fetch_array($val2);

$data3="SELECT * FROM Main_slider";

$val3=mysql_query($data3);
$r3=mysql_fetch_array($val3);

$data4="SELECT * FROM What_we_do ";

$val4=mysql_query($data4);
$r4=mysql_fetch_array($val4);

$data5="SELECT * FROM Contact_us";

$val5=mysql_query($data5);
$r5=mysql_fetch_array($val5);

?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Recruiter's Advice</title>
<!-- Stylesheets -->
<link href="css\bootstrap.css" rel="stylesheet">
<link href="css\revolution-slider.css" rel="stylesheet">
<link href="css\style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css\responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	
        
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="index.php"><img src="images\logo.png" alt="" title="Economy"></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-technology-1"></span></div>
                            <ul>
                            	<li><strong>880 1723801729</strong></li>
                                <li><a href="#"><?php echo $r5['head_mail'];?></a></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                       
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="social-links-one">
                            	<a href="https://www.facebook.com/Recruiters-Advice-972901862747704/?fref=ts"><span class="fa fa-facebook-f"></span></a>
                               
                                <a href="https://www.linkedin.com/company/10472296?trk=tyah&amp;trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10472296%2Cidx%3A2-1-2%2CtarId%3A1466017464606%2Ctas%3Arecruiter%27s%20advice"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header-Lower-->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                            
                                <li><a href="index.php">Home</a></li>
                                 <li><a href="about.php">About Us</a></li>
                                  <li><a href="services.php">Services & Prices</a></li>
                                   <li><a href="events.php">Events</a></li>
                                    <li><a href="partners.php">Partners</a></li>
                                     <li><a href="blog.php">Blog</a></li>
                                      <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                
                	<div class="get-btn"><a href="#" class="theme-btn appt-btn">GET FREE ADVICE</a></div>
                    
                </div>
            </div>
        </div>
        
        
        <!--Bounce In Header-->
        <div class="bounce-in-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images\logo-small.png" alt=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                               <li><a href="index.php">Home</a></li>
                                 <li><a href="about.php">About Us</a></li>
                                  <li><a href="services.php">Services & Prices</a></li>
                                   <li><a href="events.php">Events</a></li>
                                    <li><a href="partners.php">Partners</a></li>
                                     <li><a href="blog.php">Blog</a></li>
                                      <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    
                   
                    <li class="gradient-overlay" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.png" data-saveperformance="off" >
<!--                    <img src="images\main-slider\1.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
                    <img src="../RA-ADMIN/<?php echo $r3['image_url'];?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    
<!--                    -->
                    <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-45" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><h2><?php echo $r3['title']; ?></h2></div>
<!--                   -->
                    
                    
                    </li>
                    
                  
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    
    <!--Intro Style One-->
    <section class="intro-style-one">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Featured Style One -->
            	<div class="column content-column col-lg-8 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<h2>What We Do</h2>
                        <div   class="text" style="color:black;" align="justify">
                            <ul>
                        	<li><h4><?php echo $r4['content'];?></h4></li>
<!--                            <li><h4> &bull; Motivation Letter Preperation</h4></li>-->
<!--                            <li><h4> &bull; Improvements of self presentation in social media to attract Headhunters and HR <br>&nbsp; Professionals</h4></li>-->
<!--                            <li><h4> &bull; Behavioral-based interview Training</h4></li>-->
<!--                            <li><h4> &bull; General Career Counselling to help candidates navigate mordern pharmaceutical <br> &nbsp; industry</h4></li>-->
<!--                            <li><h4> &bull; Workshops covering topics from Personal Branding to work-life balance, from <br> &nbsp; career counselling of graduates to prevention of burnouts</h4></li>-->
                          
                           </ul>
                        </div>
                        <a href="#" class="theme-btn btn-style-four">Read More</a>
                    </div>
                </div>
                
                <!--Featured Style One -->
                <div class="column featured-style-one col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <h2 style="color:black;">Latest Blog</h2>
                    <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
<br>
                        <figure class="image-box"><a href="#"><img src="images\blog\11.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Financial Planing for business</a></h3>
                            <div class="text">There are many variation of passages of lorem Lorem Ipsum a available, alteration amet.</div>
                            <a href="#" class="read-more">Learn More <span class="icon flaticon-arrows-1"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Featured Style One -->
                
                
            </div>
        </div>
    </section>
    
   
    
    <!--Default Section-->
    <section class="default-section padd-bott-50" >
    	<div class="auto-container">
        	<div class="row clearfix" style="margin-top:-100px;">
            	
                <!--Skills -->
            	<div class="column col-md-8 col-sm-12 col-xs-12">
                	<div class="default-title"><h2>Meet the Team</h2></div>


<!--                    --><?php
//                    while($r2 = mysql_fetch_array($val2)){
//                        ?>
<!--                    <div class="column col-md-4 col-sm-12 col-xs-12">-->
<!--                        <img  src="../RA-ADMIN/--><?php //echo $r2['image_url'];?><!--" height="180;" width="180px;" >-->
<!--                        </div>-->
<!--                    --><?php //}
//                    ?>



                    <div class="row">

                        <?php

                        while($r2 = mysql_fetch_array($val2)){

                            ?>

                            <div class="column col-md-4 col-sm-12 col-xs-12">
                                <img  src="../RA-ADMIN/<?php echo $r2['image_url'];?>" height='150' width='150' alt="image">
                                <div>

                            <span style="margin-left: 30px;">
                                <?php echo $r2['name'];?>
                            </span>
                                    <br>
                                   <b style="margin-left: 30px;">
                                       <?php echo $r2['designation'];?>
                                   </b>

                                </div>
                            </div>


                            <?php

                        }

                        ?>

                    </div>




















                    
                </div>
                
                <!--Text Column -->
            	<div class="column text-column col-md-4 col-sm-12 col-xs-12">
               
                    <div class="inner-box">
                         <div class="text">
                         





                         <section class="testimonials-section" style="background-image:url(images/background/image-3.jpg);">
        <div class="auto-container">
            
            <div class="default-title centered text-center">
                <h2 style="margin-top:-60px;">Testimonials</h2>
            </div>
            
            <!--Slider-->      
            <div class="testimonials-slider ">
                
                <!--Slide-->
                <article class="slide-item">
                    <div class="slide-text">
                        <p>“<?php echo $r1['content'];?>”</p>
                    </div>
                    <div class="info-box">
                        <figure class="image-box"><img src="../RA-ADMIN/<?php echo $r1['user_image_url'];?>" alt=""></figure>
<!--                        <figure class="image-box"><img src="../RA-ADMIN/upload/CARD.png" alt=""></figure>-->

                        <h3><?php echo $r1['user_name']; ?></h3>
                        <p class="designation"><?php echo $r1['user_address'];?></p>
                    </div>
                </article>
                
                <!--Slide-->
                             
             
                
                
            </div>
            
        </div>    
    </section>
    



                         </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Two Column Fluid-->
  
    
   
    
    <!--Testimonials-->
    
    
    
    <!--Sponsors Section-->
   
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><a href="index.php"></a></div>
                                    <div class="text">
                                        <b>Address</b>
                                    </div>
                                    
                                    <ul class="contact-info">
                                    	<li><span class="icon fa fa-map-marker"></span><?php echo $r5['Address_short'];?></li>
                                        <li><span class="icon fa fa-phone"></span><?php echo $r5['Phone'];?></li>
                                        <li><span class="icon fa fa-envelope-o"></span><?php echo $r5['Email'];?></li>
                                    </ul>
                                    
                                    <div class="social-links-two clearfix">
                                    	<a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <h2>Services & Pricing</h2>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="services.php">Service One</a></li>
                                        <li><a href="services.php">Service Two</a></li>
                                        <li><a href="services.php">Service Three</a></li>
                                      
                                    </ul>
        
                                </div>
                            </div>
                    	</div>
                    </div><!--Two 4th column End-->
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	<div class="col-lg-7 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget news-widget">
                                	<h2>Latest Blog</h2>	
                                    
                                    <!--News Post-->
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><figure class="image-thumb"><img src="images\resource\post-thumb-1.png" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                    <!--News Post-->
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><figure class="image-thumb"><img src="images\resource\post-thumb-2.png" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                	<h2>Quick Links</h2>
                                    <ul>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="services.php">Services & Prices</a></li>
                                        <li><a href="events.php">Events</a></li>
                                        <li><a href="partners.php">partners</a></li>
                                        <li><a href="blog.php">Blogs</a></li>
                                       
                                    </ul>
        
                                </div>
                            </div>
                    	</div>
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2016 &copy;  <a href="#">Recruiter's Advice</div>
            </div>
        </div>
        
    </footer>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-transport"></span></div>

<script src="js\jquery.js"></script> 
<script src="js\bootstrap.min.js"></script>
<script src="js\revolution.min.js"></script>
<script src="js\jquery.fancybox.pack.js"></script>
<script src="js\isotope.js"></script>
<script src="js\owl.js"></script>
<script src="js\wow.js"></script>
<script src="js\script.js"></script>
</body>
</html>
