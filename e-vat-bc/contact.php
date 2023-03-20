<?php

if(isset($_POST['submit'])){
  
  if($_POST["genexEmails"]=="eVat-BC"){
    $to_email="support.solutions@genexinfosys.com";
  }elseif($_POST["genexEmails"]=="General"){
    $to_email="support.solutions@genexinfosys.com";
  }elseif($_POST["genexEmails"]=="Sales"){
    $to_email="support.solutions@genexinfosys.com";
  }else{
    $to_email="support.solutions@genexinfosys.com";
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
<?php include '../properties/headerindex.php';?>
<style type="text/css">
  #contact {a :color: black !important}
</style>
<br><br><br>
<div class="row" style="padding-bottom: 30px;">

<div class="row">
  <div class="aboutPageCover PageCover" style="padding-top: 0px; height: auto; background-image: url(images/cover/contact.png);">
    <div class="PageCoverText text-center res-content" style="padding-top: 25vh; padding-bottom:15vh;">
      <img src="images/contact-icon.png" style="width: 5%; background: fixed">
      <h1>Help and Support Center:e-VAT-BC</h1>
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
                <p style="font-size: 16px; font-weight: 400;">Send us your any questions regarding e-Vat-BC so that we can get back to you as soon as possible.</p></br>
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
                      <option value="eVat-BC">eVat-BC</option>
                      <option value="General">General</option>
                      <option value="Sales">Sales</option>
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
        <b>Email: </b>support.solutions@genexinfosys.com</p> </br>
        </div>

        <div class="col-md-4">
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



<?php include '../properties/footer.php';?>

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
