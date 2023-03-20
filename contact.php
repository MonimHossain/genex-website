<?php

if(isset($_POST['submit'])){
  
  if($_POST["genexEmails"]=="General"){
    $to_email="info@genexinfosys.com";
  }elseif($_POST["genexEmails"]=="Sales"){
    $to_email="mkt@genexinfosys.com";
  }else{
    $to_email="jobs@genexinfosys.com";
  }

  $comName = isset($_POST["companyName"]) ? $_POST["companyName"] : "";

  $msg = "Name: " . $_POST["name"] . "\n Email: ". $_POST["email"] . "Phone: ". $_POST["phone"]. "\n Company Name: " . $comName . "\n Enquiry: " . $_POST["enquiry"];

  $msg = wordwrap($msg, 70);

  $success_show=0;
  
  if(mail($to_email,"Website Enquiry", $msg)){
    $success_show=1;
  }

}    

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
  <?php 
  if($success_show==1){
    echo'
    <div class=" col-padding-top-50">
      <div class="container">
        <div class="alert alert-success">
          <h2>Thank you for contacting to us.</h2>
        </div>
      </div>
    </div>';
  }else{

  } 

  ?>

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
                <form action="#" id="contact_form" method="post">

                  <fieldset class="form-group">
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="compnayName" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Company Name">
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="phone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" required>
                  </fieldset>

                  <fieldset class="form-group">
                    <select name="genexEmails" class="form-control" required>
                      <option value="">Choose Category</option>    
                      <option value="General">General</option>
                      <option value="Sales">Sales</option>
                      <option value="Jobs">Jobs</option>
                    </select>
                  </fieldset>

                  <fieldset class="form-group">
                    <textarea name="enquiry" class="form-control" rows="5" id="comment" placeholder="What are you looking for?" required></textarea>
                  </fieldset>

                  <div id="html_element" style="display: none; color:red !important; margin: 20px 0">
                      
                  </div>

                  <button type="submit" name="submit" class="btn btn-primary pull-right" style="width: 250px;height: 48px;border-radius: 0px; ">Send</button>
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
<!-- <div class="container"> -->
  <div class="row" style="padding:50px; ">
    <div class="content">
    <h3>Genex Infosys Limited</h3></br>
      <div class="col-md-4">

        

        <b>Corporate Office</b> </br>
        <p style="line-height: 1.5;">Nitol Niloy Tower (Level 8), Nikunja C/A, Airport Road, Dhaka-1229</br>
        <!-- <b>Phone: </b>+88 09 612 111 000  <b>Email: </b>info@genexinfosys.com</p> </br> -->
        <b>Phone: </b>+88 09 612 111 000 </p> </br>
        </div>

        <div class="col-md-4">
        <span style="color: #3a3d3b; font-weight: 400"><b>Service Delivery Centers</b><br/>
        <li>Nitol Niloy Tower (Level 6-12), Nikunja C/A, Airport Road, Dhaka-1229</li></li>
        <!-- <li>Mascot Plaza (Level 4,5,9), Sector 07, Uttara, Dhaka-1230</li></li> -->
        <li>8th Floor Chattogram software technology park, Singapore Bangkok Market, Agrabad, Ctg.</li></br>
        </div>

        <div class="col-md-4">
        <div class="footerlink">
          <b>Global Footprint</b></br>
		UK | Malaysia | Myanmar | Thailand
        </div>

      </span>

      </div>
    </div>

  </div>
<!-- </div> -->
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

<!-- google capcha validation -->

<script type="text/javascript">
  var onloadCallback = function() {
    grecaptcha.render('html_element', {
      'sitekey' : '6LfHXaMUAAAAAK3Iutap5MSoF3Kv91rzz_w897kJ'
    });
  };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>



<?php include 'properties/footer.php';?>

<script>
  $('#contact_form').submit( function (e) {
  var response = grecaptcha.getResponse();
    //recaptcha failed validation
      if(response.length == 0) {
          e.preventDefault();
          $('#html_element').show();
      }
      //recaptcha passed validation
      else {
          $('#html_element').hide();
      }
      if (e.isDefaultPrevented()) {
        return false;
      } else {
        return true;
      }
  });
</script>