<?php
require('../RA-ADMIN/connection.php');

$data1="SELECT * FROM Service_head";

$val1=mysql_query($data1);
$r1=mysql_fetch_array($val1);


$data5="SELECT * FROM Contact_us";

$val5=mysql_query($data5);
$r5=mysql_fetch_array($val5);


$data11="SELECT * FROM service_left1";

$val11=mysql_query($data11);
$r11=mysql_fetch_array($val11);

$data12="SELECT * FROM service_left2";

$val12=mysql_query($data12);
$r12=mysql_fetch_array($val12);

$data13="SELECT * FROM service_left3";

$val13=mysql_query($data13);
$r13=mysql_fetch_array($val13);

$data14="SELECT * FROM service_left4";

$val14=mysql_query($data14);
$r14=mysql_fetch_array($val14);

$data15="SELECT * FROM service_left5";

$val15=mysql_query($data15);
$r15=mysql_fetch_array($val15);

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
    
    
    <!--Page Title-->
    
    
    <!--Breadcrumb-->
   
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container">
    	<!--Tabs Box-->
        <div class="auto-container tabs-box">
            <div class="row clearfix">






                <div class="content-box" style="margin-top:-50px;">
                               
                                <div class="text" >
                                   
                                <div class="text" align="center" style="font-size:18px;"> <?php echo $r1['service_title'];?> </div>
                                   
                                   

<br>

<h2 align="center" style="color:black;">You can benefit from our services if you are</h2>
<br>


<div class=" clearfix">
                
                <!--Boxed Icon Column-->
                <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="boxed-icon-column">
                        <a href="#" class="inner-box">
                            <div class="icon-box"><span class="flaticon-social-2"></span></div>
                           
                            <div class="text" ><?php echo $r1['service_text1'];?></div>
                        </a>
                    </div>
                </div>
                
                <!--Boxed Icon Column-->
                <div class="column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="boxed-icon-column">
                        <a href="#" class="inner-box">
                            <div class="icon-box"><span class="flaticon-briefcase-1"></span></div>
                          
                            <div class="text"><?php echo $r1['service_text2'];?></div>
                        </a>
                    </div>
                </div>
                
                <!--Boxed Icon Column-->
                <div class="column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="boxed-icon-column">
                        <a href="#" class="inner-box">
                            <div class="icon-box"><span class="flaticon-business-7"></span></div>
                           
                            <div class="text"><?php echo $r1['service_text3'];?></div>
                        </a>
                    </div>
                </div>
                
           
                
            </div>





                                   
                                    
                                  
                                    <br>
                                </div>
                            </div>



<br><br>


                
                <!--Sidebar-->      
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        
                        <!--Sidebar Widget / Styled Nav-->
                        <div class="widget sidebar-widget styled-nav">
                            <nav class="nav-outer">
                            	<!--Tab Buttons-->
                                <ul class="tab-buttons">
                                    <li class="tab-btn active-btn" data-tab="#tab-one"><?php echo $r11['service1_left_title'];?></li>
                                    <li class="tab-btn" data-tab="#tab-two"><?php echo $r12['service2_left_title'];?></li>
                                    <li class="tab-btn" data-tab="#tab-three"><?php echo $r13['service3_left_title'];?></li>
                                    <li class="tab-btn" data-tab="#tab-four"><?php echo $r14['service4_left_title'];?></li>
                                    <li class="tab-btn" data-tab="#tab-five"><?php echo $r15['service5_left_title'];?></li>
                                   
                                </ul>
                            </nav>
                        </div>
                        
                        
                        <!--Sidebar Widget / Downloads-->
                       
                        
                        <!--Sidebar Widget / Contact Widget-->
                        <div class="widget sidebar-widget contact-widget">
                            <h3>Have any Questions?<br>Call Us:</h3>
                            <div class="phone-numbers">
                                <?php echo $r1['contact_number'];?>
                            </div>
                            <h3>For Details</h3>
                        </div>
                        
                    </aside>
                </div><!--End Sidebar-->
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">
                    	<!--Tabs Content-->
                        <div class="tabs-content">
                        	
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="tab-one">
                            	
                                <!--Main Image-->
                             
                                
                                
                                <!--Default Text Block-->
                               
                                <!--Default Two Column-->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                        	   <figure class="main-image"><img src="../RA-ADMIN/<?php echo $r11['service1_image_url'];?>" height='350' width='250'></figure>
                                        </div>
                                        
                                        <div class="skills-column col-md-6 col-sm-6 col-xs-12">
                                        	
                                                
                                             <div class="default-text-block" style="color:black;">


                                                <ul class="dotted-list-style">
                                                <li>
                                                   

                                                    <p><?php echo $r11['service1_content'];?></p>


                                                </li>

                                                </ul>

                                             </div>
                            
                        
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div><!--End Tab-->
                            
                            <!--Tab-->
                            <div class="tab" id="tab-two">
                            	
                                    <!--Main Image-->
                             
                                
                                
                                <!--Default Text Block-->
                               
                                <!--Default Two Column-->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                               <figure class="main-image"><img src="../RA-ADMIN/<?php echo $r12['service2_image_url'];?>" height='350' width='250' alt=""></figure>
                                        </div>
                                        
                                        <div class="skills-column col-md-6 col-sm-6 col-xs-12">
                                            
                                                
                                             <div class="default-text-block" style="color:black;">


                                                <ul class="dotted-list-style">
                                                <li>
                                                   
                                                    <p><?php echo $r12['service2_content'];?></p>
                                                </li>
<!--                                                <li>-->
<!--                                                   -->
<!--                                                    <p>    Workshop 2: Top-20 career choices for entering pharmaceutical industry (click for more details).</p>-->
<!--                                                </li>-->
<!--                                                <li>-->
<!--                                                    -->
<!--                                                    <p>   Workshop 3: Behavioral-based job interview preparation: strategy and tips (click for more details).</p>-->
<!--                                                </li>-->
<!---->
                                               

                                                
                                            </ul>




                                </div>
                            
                        
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div><!--End Tab-->
                            
                            <!--Tab-->
                            <div class="tab" id="tab-three">
                            	
                                
                                <!--Default Text Block-->
                               
                                <!--Default Two Column-->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                               <figure class="main-image"><img src="../RA-ADMIN/<?php echo $r13['service3_image_url'];?>" height='350' width='250' alt=""></figure>
                                        </div>
                                        
                                        <div class="skills-column col-md-6 col-sm-6 col-xs-12">
                                            
                                                
                                             <div class="default-text-block" style="color:black;">


                                                <ul class="dotted-list-style">
                                                <li>
                                                   
                                                    <p><?php echo $r13['service3_content'];?> </p>
                                                </li>

                                            </ul>




                                </div>
                            
                        
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div><!--End Tab-->
                            
                            <!--Tab-->
                            <div class="tab" id="tab-four">
                            	
                                <!--Main Image-->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                               <figure class="main-image"><img src="../RA-ADMIN/<?php echo $r14['service4_image_url'];?>" height='350' width='250'alt=""></figure>
                                        </div>

                                        <div class="skills-column col-md-6 col-sm-6 col-xs-12">


                                            <div class="default-text-block" style="color:black;">


                                                <ul class="dotted-list-style">
                                                    <li>

                                                        <p><?php echo $r14['service4_content'];?> </p>
                                                    </li>

                                                </ul>




                                            </div>


                                        </div>
















                                        
                                    </div>
                                </div>
                                
                            </div><!--End Tab-->
                            
                            <!--Tab-->
                            <div class="tab" id="tab-five">
                            	
                                 <!--Main Image-->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                               <figure class="main-image"><img src="../RA-ADMIN/<?php echo $r15['service5_image_url'];?>" height='350' width='250' alt=""></figure>
                                        </div>
                                        


                                        <div class="skills-column col-md-6 col-sm-6 col-xs-12">


                                            <div class="default-text-block" style="color:black;">


                                                <ul class="dotted-list-style">
                                                    <li>

                                                        <p><?php echo $r15['service5_content'];?> </p>
                                                    </li>

                                                </ul>




                                            </div>


                                        </div>





                                    </div>
                                </div>
                                
                            </div><!--End Tab-->
                            
                            
                            <!--Tab-->
                            
                            
                            <!--Tab-->
                            
                            
                        </div>
                    </section>
                
                </div><!--End Content Side-->   
                
                      
                
            </div>
        </div>
    </div>
    
    <!--Main Footer-->
   
    
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
                                        <li><a href="#">Services & Prices</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">partners</a></li>
                                        <li><a href="#">Blogs</a></li>
                                       
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
<script src="js\jquery.fancybox.pack.js"></script>
<script src="js\jquery.fancybox-media.js"></script>
<script src="js\owl.js"></script>
<script src="js\wow.js"></script>
<script src="js\script.js"></script>
</body>
</html>
