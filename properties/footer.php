<style>
  .footer-top-social .youtube {
    background-image: url(images/social-icon/youtube.png);
    background-size: cover;
  }
  .footer-top-social .youtube:hover {
    background-image: url(images/social-icon/youtube-hover.png);
    background-color: #3F729B;
  }
</style>

<div class="row footer">
  <div class="col-md-12 f-top no-padding">
    <div class="col-md-2 col-sm-6 no-padding">
      <h3>Quick Links</h3>
      <a href="<?php echo $base_url ?>/">Home</a>
      <a id="about" href="<?php echo $base_url ?>/about.php">Who We Are</a>
      <a href="<?php echo $base_url ?>/services.php">What We Do</a>
      <a href="<?php echo $base_url ?>/career.php">Life at Genex</a>
      <a href="<?php echo $base_url ?>/contact.php">Contact Us</a>
      <a href="<?php echo $base_url ?>/investor-rel.php">Investor Relations</a>
      <!-- <a href="<?php echo $base_url ?>/e-vat-bc/contact.php">Help and Support Center:e-VAT-BC</a> -->
    </div>
    <div class="col-md-3 col-sm-6 no-padding">
      <h3> General Enquiries </h3>
       <span style="color: #3a3d3b; font-weight: 400">+88 09 612 111 000<br/>
       info@genexinfosys.com<br/><br/></span>
       <p style="color: #3a3d3b; font-weight: 700">Follow Us On</p>
       <div>

       </div>
       <div class="footer-top-social">

          <ul>
            <a href="https://www.facebook.com/genexinfosys"><li class="fb"><span ></span></li></a>
            <a href="https://www.linkedin.com/company/genex-infosys-limited"><li class="linkedIn"><span ></span></li></a>
            <a href="https://twitter.com/genexinfosys?lang=en"><li class="twitter"><span ></span></li></a>
            <!-- <a href="https://www.instagram.com/genexinfosys/"><li class="Instagram"><span ></span></li></a> -->
            
          </ul>

       </div>


    </div>
    <div class="col-md-4 col-sm-6 no-padding">
      <h3>Genex Infosys Limited</h3>

      <b>Corporate Office</b> </br>
        Nitol Niloy Tower (Level 8), Nikunja C/A, Airport Road, Dhaka-1229</br> </br>


      <span style="color: #3a3d3b; font-weight: 400"><b>Service Delivery Centers</b><br/>
        <li>Nitol Niloy Tower (Level 6-12), Nikunja C/A, Airport Road, Dhaka-1229</li></li>
        <!-- <li>6th & 7th Floor Chattogram Software Technology Park, Agrabad Circle Agrabad, Chattogram.</li></br> -->
        <li>8th Floor Chattogram software technology park, Singapore Bangkok Market, Agrabad, Ctg.</li></br>

        </span>
        <div class="footerlink">
          <b>Global Footprint</b></br>
          UK | Malaysia | Myanmar | Thailand
        </div>
    </div>
    <div class="col-md-3 col-sm-6 no-padding">
      
            <div class="col-md-6 col-sm-6 "><img style="width:140%;" src="images/footer/iso9001.png" class="img-responsive" alt=""/></div>
            <div class="col-md-6 col-sm-6 "><img style="width:140%;" src="images/footer/iso27001.png" class="img-responsive" alt=""/></div>
    </div>
  </div>

</div>

<div class="row footer-bottom">
  <div class="col-md-12 fixed-bottom no-padding">
    <div class="col-md-7">
        <div class="col-md-7 col-sm-12 footerLogo text-center">
          <img src="<?php e('images/genex.jpg') ?>" class="img-responsive" alt=""/>
          <p>Copyright © 2015-<?php echo date('Y')?>  •  Genex  •  All Rights Reserved</p>
        </div>
        <!-- <div class="col-md-5">
      		<a href="https://www.hitwebcounter.com" target="_blank">
      		<img src="https://hitwebcounter.com/counter/counter.php?page=7172720&style=0006&nbdigits=7&type=page&initCount=0" title="Counter" Alt="hit web counter.com"   border="0" >
      		</a>   
        </div> -->
    </div>
    <div class="col-md-5 col-sm-12 no-padding">
      <!--<p style="float: right;padding-right: 50px;opacity: 0.7;">An IPE Group company</p>-->
    </div>
  </div>
</div>
    <div id="fb-root"></div>    
    <?php echo minify(array(
        'js/jquery.min.js',
        'js/jquery.cycle2.js',
        'js/jquery.waypoints.js',
        'js/bootstrap.min.js',
        'js/jquery.counterup.js',
        'js/jquery.scrolluptotop.js',
        'js/main.js'
      ),'main.min.js',"js") ?>   
<script src="js/jquery.cycle2.js"></script>

<!-- G&R Remarketing Code -->
<script type="text/javascript">
	var GNR_CLIENT = 3772;
	(function () {
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = '//content.green-red.com/lib/track.js';
		var x = document.getElementsByTagName('script')[0];
		x.parentNode.insertBefore(s, x);
	})();
</script>
<!-- End of G&R Remarketing Code -->
</body>
</html>
<?php 

ob_end_flush();

?>
