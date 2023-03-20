<?php
  header('X-Frame-Options: SAMEORIGIN');
  
?>
<?php

#ini_set("display_errors", "On");error_reporting(E_ALL);

require_once(dirname(__FILE__) . "/libs/CssMin.php");
require_once(dirname(__FILE__) . "/libs/JsMin.php");

function e($src)
{
  $root = dirname(dirname(__FILE__));
  $mtime = filemtime($root . "/" . $src);
  echo $src . "?v={$mtime}";
}


function minify($sources, $output, $type = "css")
{
  $root = dirname(dirname(__FILE__));
  $cachepath = $root . "/" . $output;
  if (!is_dir(dirname($cachepath))) :
    mkdir(dirname($cachepath));
  endif;
  $buffer = '';
  if (is_array($sources)) :
    $cacheOk = true;
    foreach ($sources as $item) :
      $fileurl = "";
      $filepath = "";

      if (strstr($item, "http:")) {
        $fileurl = $item;
      } else {
        $filepath = $root . "/" . $item;
        if (!file_exists($filepath)) :
          die($filepath . ' - file not found in system');
        endif;
      }
      if (file_exists($cachepath)) :
        $fileModified = filemtime($filepath);
        $cacheModified = filemtime($cachepath);
        if ($fileModified > $cacheModified) :
          $cacheOk = false;
        endif;
      else :
        $cacheOk = false;
      endif;
      if ($fileurl)
        $buffer .= file_get_contents($fileurl);
      elseif ($filepath)
        $buffer .= file_get_contents($filepath);
    endforeach;
  endif;

  if (!$cacheOk) :

    $cacheData = ($buffer);
    if ($type == "css")
      $cacheData = CssMin::minify($buffer);
    elseif ($type == "js")
      $cacheData = JsMin::minify($buffer);

    file_put_contents($cachepath, $cacheData);
  endif;
  $mtime = filemtime($cachepath);

  if ($type == "css")
    return "<style>" . file_get_contents($cachepath) . "</style>";
  //return '<link rel="stylesheet" type="text/css" href="'.$output.'?v='.$mtime.'" media="screen" />';
  elseif ($type == "js")
    return '<script type="text/javascript" src="' . $output . '?v=' . $mtime . '"></script>';

  return $output . '?v=' . $mtime;
}

function compress_html($html)
{
  preg_match_all('!(<(?:code|pre|script).*>[^<]+</(?:code|pre|script)>)!', $html, $pre);
  $html = preg_replace('!<(?:code|pre).*>[^<]+</(?:code|pre)>!', '#pre#', $html);
  $html = preg_replace('#<!ñ[^\[].+ñ>#', '', $html);
  $html = preg_replace('/[\r\n\t]+/', ' ', $html);
  $html = preg_replace('/>[\s]+</', '><', $html);
  $html = preg_replace('/[\s]+/', ' ', $html);
  if (!empty($pre[0])) {
    foreach ($pre[0] as $tag) {
      $html = preg_replace('!#pre#!', $tag, $html, 1);
    }
  }
  return $html;
}

ob_start('compress_html');

?>
<?php 
  $base_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="e7oqi0cqz5E6zuuRvTRp2nhRvPPie5IA5frLQEOJ04A" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Genex is the leading outsourcing providers of customer experience management and trusted by world’s leading brands.">
  <meta name="keywords" content="genex, contact center, genex infosys, excellence, BPO, BPO Company, bangladesh, malaysia, asia, call center, support, culture, diversity, certified, global">
  <link rel="shortcut icon" type="image/png" href="<?php e('images/fev.ico') ?>" />
  <title>Genex Infosys Limited</title>
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="<?php e('images/favicon.ico') ?>" type="image/x-icon" />
  <?php echo minify(array(
    'css/bootstrap.min.css',
    'style.css',
    'css/responsive.css'
  ), 'style.min.css') ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110729268-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-110729268-1');
  </script>
  <style>
      .custom a {
        padding: 0px !important;
        margin-bottom: 5px;
	color: #555;
      }
      .custom a:hover {
	color: #22bdb6;
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
	.carousel-caption {
	    color: white !important;
	    z-index: 99999;
	    top: 50%;
  }

  .fade-carousel .slides .slide-1 {
    background-image: url(/images/cover/slider-8.jpg); 
  }
  .fade-carousel .slides .slide-2 {
    background-image: url(/images/cover/Emerging%20Technologies.jpg);
  }
  .fade-carousel .slides .slide-3 {
    background-image: url(/images/cover/Reengineer%20Your%20Business.jpg);
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
		top: -50px;
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



  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-N8ZKXKZ');</script>
  <!-- End Google Tag Manager -->




</head>


<body>
  
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8ZKXKZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



  <?php if (isset($hide_slider)) : ?>
    <style type="text/css">
      .navbar-default {
        background-color: white !important;
        border-bottom: 1px solid rgba(146, 143, 143, 0.17);
      }
    </style>
  <?php endif ?>
  <?php if (!isset($hide_slider)) : ?>
    <style type="text/css">
      .navbar-default {
        background-color: white !important;
        border-bottom: 1px solid rgba(146, 143, 143, 0.17);
      }
    </style>
  <?php endif ?>
  <nav class="navbar navbar-default" role="navigation" style="background-color: #fff !important">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $base_url ?>/"><img alt="" style="width: 120px" src="<?php e('images/Genex-Logo.png') ?>" /></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="<?php echo $base_url ?>#">Who We Are</a>
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
          <a href="<?php echo $base_url ?>#">What We Do</a>
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
          <a href="<?php echo $base_url ?>#">Life at Genex</a>
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
  <?php if (!isset($hide_slider)) : ?>
    <div id="startchange"></div>



    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero" style="text-align: left">
        <hgroup class="slider-content">
            <h1>Next Gen <br>Customer Experience</h1>        
            <h3>The future belongs to insightful,<br>intelligent and path breaking solutions for customers.<br>Genex delivers excellence in every interaction</h3>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero" style="text-align: left">
        <hgroup class="slider-content">
            <h1>Next Gen <br>Transformation</h1>        
            <h3>Digital transformation coupled with <br>'emotive intelligence' helps Genex create <br>a new paradigm for innovative businesses</h3>
        </hgroup>       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero" style="text-align: left">
        <hgroup class="slider-content">
            <h1>Next Gen <br>ICT Solutions</h1>        
            <h3>Genex brings smart & advanced enterprise <br> solutions that help customers redefine <br>their business</h3>
        </hgroup>
      </div>
    </div>    
  </div> 
</div>


<div id="myCarousel" class="carousel slide hidden" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php e('images/cover/Customer exp.jpg') ?>" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
		<h2>
                  <span>Desire Excellence</span>
                </h2>
                <br>
                <h3>
                  <span>We evolve new way of doing things</span>
                </h3>
        </div>
      </div>

      <div class="item">
        <img src="<?php e('images/cover/Emerging Technologies.jpg') ?>" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
                <h2>Drive Excellence</span></h2>
                <br>
                <h3>We chase perfection to catch excellence</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php e('images/cover/Reengineer Your Business.jpg') ?>" alt="New York" style="width:100%;">
        <div class="carousel-caption">
                <h2>
                  <span>Deliver Excellence</span>
                </h2>
                <br>
                <h3>
                  <span>We reflect your personality & philosophy, Your business is our business</span>
                </h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
<!--
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
    <section class="main-slider hidden">
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">


        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <!-- Carousel items -->
        <div class="carousel-inner">

          <!-- Slide 1 : Active -->
          <div class="item active">
            <img src="<?php e('images/cover/11.jpg') ?>" alt="" />
            <div class="header-text">
              <div class="col-md-12 text-center">
                <h2>
                  <span>Desire Excellence</span>
                </h2>
                <br>
                <h3>
                  <span>We evolve new way of doing things</span>
                </h3>
                <br>
                <!-- <a  href="about"><button> Get to know us better</button></a> -->

              </div>
            </div>
          </div><!-- /Slide1 -->

          <!-- Slide 2 -->
          <div class="item ">
            <img src="<?php e('images/cover/10.jpg') ?>" alt="" />
            <div class="header-text">
              <div class="col-md-12 text-center">
                <h2>Drive Excellence</span></h2>
                <br>
                <h3>We chase perfection to catch excellence</h3>
                <br>
                <!-- <a  href="about"><button> Get to know us better</button></a> -->

              </div>
            </div>
          </div><!-- /Slide2 -->

          <!-- Slide 3 -->
          <div class="item ">
            <img src="<?php e('images/cover/12.jpg') ?>" alt="" />
            <div class="header-text">
              <div class="col-md-12 text-center">
                <h2>
                  <span>Deliver Excellence</span>
                </h2>
                <br>
                <h3>
                  <span>We reflect your personality & philosophy, Your business is our business</span>
                </h3>
                <br>
                <!-- <a  href="about"><button> Get to know us better</button></a> -->
              </div>
            </div>
          </div><!-- /Slide3 -->

          <!-- Controls -->
          <div class="control-box">
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- /.control-box -->


        </div><!-- /#myCarousel -->
    </section><!-- /.main-slider -->
  <?php endif; ?>

