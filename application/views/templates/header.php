<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mitbyte is a software company, We are team of professions,we excel in development of ERP,CMS,CRM system. We can also do Mobile Application development.">
    <meta name="keywords" content="Mitbyte, free demo, creative, html ,IOS, Android ,build CRM, CMS">
    <meta name="robots" content="index,follow">
    <title>Mitbyte-IT Consultancy</title>
 <!-- fontawesome icons -->
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="<?php echo base_url();?>js/floating-wpp.min.js"></script>
<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url();?>js/numscroller-1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.countup.min.js"></script>

 <link rel="icon" href="<?php echo base_url();?>assets/mitbyte-logo-without-text.png" type="image/x-icon">
 <link rel="stylesheet" href="<?php echo base_url();?>css/colorbox.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>css/floating-wpp.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>css/owl.theme.default.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?><?php if($current == 'home' || $current == 'error404'){echo "css/main.css";} 
  else if ($current == 'portfolio'){echo "css/portfolio.css";}
  else if ($current == "android"||$current =="ios"||$current =="hybrid"||$current =="cross"||$current =="appstoreoptimization"||$current =="seo"||$current =="game"||$current =="webdevelopment"||$current =="webdesign"||$current =="cybersecurity"){echo "css/android.css";} 
  else if ($current == "privacypolicy"){echo "css/privacypolicy.css";}
  else if ($current == "sitemap"){echo "css/sitemap.css";} 
  else if ($current == 'contactus'){echo "css/contactus.css";} 
  else if ($current == 'aboutus'){echo "css/aboutus.css";}?>">

</head>
<body> <!-- Top header-->

  <div class="floating-wpp"></div>

  <header>
  <div class="container-fluid padding">
      <div class="row">
      <div class="col-xs-6 col-lg-10 p-3 pl-5 mainhead"> 
      <i class="fas fa-phone"></i>  +92-333-4442545/+92-3218888961  <i class="fas fa-envelope"></i>  info@mitbyte.com
      <span class="deskhead"><i class="fas fa-clock"></i>  Mon - Fri 9:00 - 19:00</span>
      </div>
      <div class="col-xs-6 col-lg-2 p-3 social-icons text-right">
           <a class='mr-2' href="https://www.facebook.com/MitByte010"><i class="fab fa-facebook-f"></i></a><a class="mr-2" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a> 
          <a class="mr-2" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i>
      </div>
  </div>
  </div>

    <nav class="black navbar navbar-expand-lg" id = "navbar">

      
      <div class="container justify-content-around">

      <a class="navbar-brand mr-5 py-3 active" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/mitbyte-logo-without-text.png" alt="mitbyte-logo" width="50px" height="50px"><b>MITBYTE</b></a>    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span><i class="text-light fas fa-bars"></i></span>
      </button>
      <!-- Links -->

      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-2">
          <a class="nav-link <?php if($current == 'home'){echo "active";}?>" href="<?php echo site_url();?>"><b>HOME</b></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?php if($current == 'portfolio'){echo "active";}?>" href="<?php echo site_url('mitbyte/portfolio');?>"><b>PORTFOLIO</b></a>
        </li>
        <li class="nav-item dropdown mx-2">
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbardrop" data-toggle="dropdown">
                  <b>SERVICES</b>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item <?php if($current == 'android'){echo "active";}?>" href="<?php echo site_url("mitbyte/android");?>">ANDROID APP DEVELOPMENT</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'ios'){echo "active";}?>" href="<?php echo site_url("mitbyte/ios");?>">IOS APP DEVELOPMENT</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'hybrid'){echo "active";}?>" href="<?php echo site_url("mitbyte/hybrid");?>">HYBRID MOBILE APPLICATION</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'cross'){echo "active";}?>" href="<?php echo site_url("mitbyte/cross");?>">CROSS PLATFORM MOBILE DEVELOPMENT</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'game'){echo "active";}?>" href="<?php echo site_url("mitbyte/game");?>">GAME DEVELOPMENT</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'webdesign'){echo "active";}?>" href="<?php echo site_url("mitbyte/webdesign");?>">WEB DESIGN</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'webdevelopment'){echo "active";}?>" href="<?php echo site_url("mitbyte/webdevelopment");?>">WEB DEVELOPMENT</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'appstoreoptimization'){echo "active";}?>" href="<?php echo site_url("mitbyte/appstoreoptimization");?>">APP STORE OPTIMIZAATION</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'seo'){echo "active";}?>" href="<?php echo site_url("mitbyte/searchengine");?>">SEARCH ENGINE OPTIMIZATION</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php if($current == 'cybersecurity'){echo "active";}?>" href="<?php echo site_url("mitbyte/cybersecurity");?>">CYBERSECURITY</a>
                
              </div>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?php if($current == 'contactus'){echo "active";}?>" href="<?php echo site_url("mitbyte/contactUs");?>"><b>CONTACT US</b></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?php if($current == 'aboutus'){echo "active";}?>" href="<?php echo site_url("mitbyte/aboutUs");?>"><b>ABOUT US</b></a>
        </li>
      </ul>
  </div>
  </div>

    </nav>
</header>