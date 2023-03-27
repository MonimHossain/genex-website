<?php
  header('X-Frame-Options: SAMEORIGIN');
  
?>
<?php 
function e($src){
  $root = dirname(dirname(__FILE__));
  $mtime = filemtime($root."/".$src);
  echo $src."?v={$mtime}";
} 
?>
<?php 
  $base_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php e('images/fev.ico') ?>"/>
    <title>Genex</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="<?php e('images/favicon.ico') ?>" type="image/x-icon" />
    <link href="<?php e('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php e('css/responsive.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" />
    <link href="<?php e('style.css') ?>" rel="stylesheet">
    <style>
      .custom{
	background-color: #ffffff;
        width: 1000px;
        position: absolute;
        right: 0;
        padding: 15px;
      }
      .custom a {
        padding: 0px !important;
        margin-bottom: 5px;
	color: #555;
      }
      .custom a:hover {
	color: #00ffff;
	background-color: #ffffff;
      }
      .custom-hr{
        margin-top: 5px;
        margin-bottom: 5px;
      }
      span.menu-sub-titile {
        color: #800080;
      }
	.dropdown-content {
	    background-color: #ffffff;
	}
	.dropdown-content a{
    font-size: 12px;
		color: #555;
	}
	.dropdown-content a:hover {
	color: #00ffff;
	background-color: #ffffff;
      }
@media(min-width:768px){}
@media(min-width:992px){}

@media(min-width:1200px){
	.custom{
		background-color: #ffffff;
		width: 1000px;
		position: absolute;
		right: 0;
		padding: 15px;
      	}
	hgroup.slider-content {
		position: fixed;
		left: -115px;
	}

	hgroup h1{
		font-size: 4em !important;
  		text-shadow:5px 5px 10px #1d2152;

	}
	
	hgroup h3{
		text-transform: none !important;
  		text-shadow:5px 5px 10px #1d2152;

	}
}

@media(max-width:767px){
	.custom{
		background-color: #ffffff;
		width: 255px;
	    padding: 15px;
	    right: 40px;
	    position: absolute;
            overflow-y: scroll;
	    height: 400px;
      	}
	hgroup.slider-content {
	    position: unset;
	    text-align: center;
	}
	hgroup h1{
		font-size: 3em !important;
  		text-shadow:5px 5px 10px #1d2152;
	}
	
	hgroup h3{
		font-size: 1.5em !important;
		text-transform: none !important;
  		text-shadow:5px 5px 10px #1d2152;
	}
	  .fade-carousel .slides .slide-1 {
	    background-image: url(/images/cover/mbs2.jpg); 
	  }
	  .fade-carousel .slides .slide-2 {
	    background-image: url(/images/cover/mbs3.jpg);
	  }
	  .fade-carousel .slides .slide-3 {
	    background-image: url(/images/cover/mbs-1.jpg);
	  }
}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204140608-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-204140608-1');
    </script>
</head>

<body>
<style type="text/css">
  .navbar-default{background-color: white;border-bottom: 1px solid rgba(146, 143, 143, 0.17);}
</style>
<nav class="navbar navbar-default" role="navigation" >
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
      <a class="navbar-brand" href="<?php echo $base_url ?>/"><img alt="" style="width: 120px" src="<?php e('images/Genex-Logo.png') ?>" /></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: #ffffff;">
   <ul class="nav navbar-nav navbar-right">
<!--          <li><a id="about" href="about.php" class="active">Who We Are</a></li> -->
     <!-- <li><a id="product" href="services.php">What We Do</a></li> -->
<!--           <li><a id="career" href="career.php">Life at Genex</a></li> -->        
        <li class="dropdown">
          <a href="<?php echo $base_url ?>/about.php">Who We Are</a>
          <div class="dropdown-content">
            <a href="<?php echo $base_url ?>/overview.php">Overview</a>
            <a href="<?php echo $base_url ?>/board-of-founders.php">Founders</a>
            <a href="<?php echo $base_url ?>/Board-of-Directors.php">Board of Directors</a>
            <a href="<?php echo $base_url ?>/leadership.php">Leadership Team</a>
            <a href="<?php echo $base_url ?>/awards.php">Awards and Recognition</a>
            <!-- <a href="<?php echo $base_url ?>/Subsidiaries-and-Affiliates.php">Subsidiaries and Affiliates</a> -->
          </div>
        </li>
        <!-- <li class="dropdown">
          <a href="services.php">What We Do</a>
          <div class="dropdown-content">
            <a href="outsourcing.php">Outsourcing</a>
            <a href="solutions.php">Technology</a>
            <a href="expertise.php">Expertise</a>
            <a href="verticals.php">Verticals</a>
          </div>
        </li> -->
        <li class="dropdown">
          <a href="<?php echo $base_url ?>/customer-experience-management.php">What We Do</a>
          <div class="dropdown-content custom">
              <div class="row">
                <div class="col-md-3">
                  <span class="menu-sub-titile">
                    Customer Experience Management
                  </span>
                  <hr class="custom-hr">
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">Omni-channel Contact Center Services</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">Social Media & Chat Services</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">HR & Tech Support</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">Sales & Campaign Management</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">Customer Lifecycle Management</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">Revenue Generation & Protection</a>
                  <a href="<?php echo $base_url ?>/customer-experience-management.php">D2D & Retail Management </a>
                </div>
                <div class="col-md-3">
                  <span class="menu-sub-titile">
                    Back-Office Management
                  </span>
                  <hr class="custom-hr">
                  <a href="<?php echo $base_url ?>/back-office-management.php">Robotic Process Automation</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">Analytics & Insights, VOC</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">HR Services</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">Payroll Management</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">Complaint Management</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">Data Digitization, Verification & KYC</a>
                  <a href="<?php echo $base_url ?>/back-office-management.php">Service Provisioning & Adjustment</a>
                </div>
                <div class="col-md-3">
                  <span class="menu-sub-titile">
                    Digital Transformation & Solutions
                  </span>
                  <hr class="custom-hr">
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Artificial Intelligence & Automation </a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Cyber Security</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">AI Chat & Voice Bot</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Digital Banking</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Cloud Services</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">SOC, NOC & Infra as a Service</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Systems Integration </a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">IT Infrastructure</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Enterprise Communication</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Enterprise Applications</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Software as a Service (SaaS)</a>
                  <a href="<?php echo $base_url ?>/digital-transformation-&-solutions.php">Consulting & Professional Services</a>
                </div>
                <!-- <div class="col-md-1">
                  <span class="menu-sub-titile">
                    Digital Marketing
                  </span>
                  <hr class="custom-hr">
                  <a href="../digital-marketing.php">Digital Marketing </a>
                  <a href="../digital-marketing.php">Ad Network</a>
                  <a href="../digital-marketing.php">Digital Content Development</a>                  
                </div> -->
                <div class="col-md-3">
                  <span class="menu-sub-titile">
                    Training & Skill Development
                  </span>
                  <hr class="custom-hr">
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Skill Development</a>
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Knowledge Management</a>
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Curriculum development</a>
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Training</a>
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Assessment</a>
                  <a href="<?php echo $base_url ?>/training-&-skill-development.php">Competency tracking</a>
                </div>
              </div>
          </div>
        </li>
        <li class="dropdown">
          <a href="<?php echo $base_url ?>/career.php">Life at Genex</a>
          <div class="dropdown-content">
            <a href="<?php echo $base_url ?>/news.php">News</a>
            <a href="<?php echo $base_url ?>/events.php">Events</a>
            <a href="<?php echo $base_url ?>/career.php">Career</a>
          </div>
        </li>
        <li><a id="contact_" href="<?php echo $base_url ?>/contact.php">Contact</a></li>
  </ul>
</div>
</div>
</nav>

