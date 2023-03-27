<?php

if (isset($_GET['successMsg'])) {

  $success_show = $_GET['successMsg'];
}

// include header properties......
include 'properties/header.php';
?>


</br></br></br></br></br></br>
<!-- <link rel="stylesheet" type="text/css" href="app.css">  -->
<style type="text/css">
  .upload-button-block {
    display: block;
  }

  .upload-button {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .btn-success {
    background-color: #7ec855;
    border-color: #7ec855 !important;
  }

  .btn {
    height: 44px;
    line-height: 44px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 3px;
    padding: 0 30px;
    color: #fff;
    background-color: #eceeef;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
  }

  .btn-block {
    display: block;
    width: 100%;
    background-color: #7ec855 !important;
  }

  .upload-button input[type=file] {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    margin: 0;
    padding: 0;
    font-size: 0;
    line-height: 44px;
    cursor: pointer;
    opacity: 0;
    z-index: 3;
  }
</style>

<!-- page content start here -->

<div class="row">

  <?php
  if ($success_show == 1) {
    echo '
    <div class=" col-padding-top-50">
      <div class="container">
        <div class="alert alert-success">
          <h2>Thank You for your application.</h2>
        </div>
      </div>
    </div>';
  } elseif ($success_show == 11) {
    echo '
    <div class=" col-padding-top-50">
      <div class="container">
        <div class="alert alert-danger">
          <h2>Email sending failed. Please try again. Thank you.</h2>
        </div>
      </div>
    </div>';
  }

  ?>

  <div class="content">
    <div class="container">
      <header class="section-header text-center">
        <h1>Apply Now</h1>
        <p>Apply for this job with a custom application.</p>
      </header>
      </br></br>

      <form lpformnum="1" action="sendCv.php" id="contact_form" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group col-xs-12 col-md-6">
            <input name="name" type="text" class="form-control input-lg" placeholder="Name" required>
            <span class="error">* <?php echo $nameErr; ?></span>
          </div>

          <div class="form-group col-xs-12 col-md-6">
            <select name="candidatePosition" class="selectpicker" style="width: 100%;height: 50px;" required>
              <option value="">Select Position</option>
              <option value="Lead/Sr Software Engineer -Java">Lead/Sr Software Engineer -Java</option>
              <option value="Software Engineer -Java">Software Engineer -Java</option>
              <option value="System Engineer">System Engineer</option>
              <option value="PMO Executive">PMO Executive</option>
              <option value="Head of Business Development">Head of Business Development</option>
              <option value="Asst. Manager (IPCC Systems)">Asst. Manager (IPCC Systems)</option>
              <option value="System Engineer/ Sr. System Engineer (IVR Voice record Management)">System Engineer/ Sr. System Engineer (IVR Voice record Management)</option>
              <option value="System Engineer/ Sr. System Engineer (IVR / IPCC Systems Management)">System Engineer/ Sr. System Engineer (IVR / IPCC Systems Management)</option>
              <option value="Assistant Manager, Contact Center Operations">Assistant Manager, Contact Center Operations</option>
              <option value="Senior Executive-MIS & WFM">Senior Executive-MIS & WFM</option> 
              <!-- <option value="Executive/Senior Executive- Technology">Executive/Senior Executive- Technology</option>
              <option value="Billing-Administrator">Billing-Administrator</option>
              <option value="Infra Managed Service Project Management-Consultant">Infra Managed Service Project Management-Consultant</option>
              <option value="Open Shift-Administrator">Open Shift-Administrator</option>
              <option value="L1 Engineer - NOC CORE (CS/PS)">L1 Engineer - NOC CORE (CS/PS)</option>
              <option value="Operations and planning lead">Operations and planning lead</option>
              <option value="L1 Engineer-Circle Support">L1 Engineer-Circle Support</option>
              <option value="L2 Engineer - RAN">L2 Engineer - RAN</option>
              <option value="L2 Engineer - Core Configuration">L2 Engineer -Core Configuration</option>
              <option value="L2 Engineer - Microwave">L2 Engineer-Microwave</option>
              <option value="Lead - Core Network Planning">Lead -Core Network Planning</option>
              <option value="Microwave Network Planning">Microwave Network Planning</option>
              <option value="Android Platform Development">Android Platform Development</option>
              <option value="Desktop Support-Administrator ">Desktop Support-Administrator </option>
              <option value="Java-J2EE-Developer ">Java-J2EE-Developer </option>
              <option value="BSS - Charging Systems- Consultant ">BSS - Charging Systems-Consultant </option>
              <option value="Security Architecting ">Security Architecting </option>
              <option value="SPLUNK Security Analytics-Administrator ">SPLUNK Security Analytics-Administrator </option>
              <option value="Windows Server Admin-Administrator ">Windows Server Admin-Administrator </option>
              <option value=".NET-Developer ">.NET-Developer </option>
              <option value="Apple Swift-Developer">Apple Swift-Developer</option> -->
              <option value="Manager, Marketing & Communication">Manager, Marketing & Communication</option>
              <!-- <option value="Sr. Executive, Marketing & Communication">Sr. Executive, Marketing & Communication</option>
              <option value="HR Operations Specialist">HR Operations Specialist</option>
              <option value="Graphics Designer">Graphics Designer</option>
              <option value="Business Analyst">Business Analyst</option>
              <option value="NLP Developer">NLP Developer</option>
              <option value="Executive-Back Office">Executive-Back Office</option>
              <option value="Head of Software Engineering">Head of Software Engineering</option> -->
              <option value="Sr. Software Engineer">Sr. Software Engineer</option>
              <!-- <option value="UI/UX designer">UI/UX designer</option> -->
              <option value="Front End Developer">Front End Developer</option>
              <!-- <option value="Cyber Security Specialist">Cyber Security Specialist</option>
              <option value="Oracle Practice Lead">Oracle Practice Lead</option>
              <option value="Assistant Manager, Contact Center Operations">Assistant Manager, Contact Center Operations</option>
              <option value="Assistant Manager/Manager- Quality Assurance & Training">Assistant Manager/Manager – Quality Assurance & Training</option>
              <option value="Trainer">Trainer</option>
              <option value="Executive, Quality Assurance">Executive, Quality Assurance</option>
              <option value="Team Leader, Contact Center Operations">Team Leader, Contact Center Operations</option>
              <option value="Customer Service Officer">Customer Service Officer</option>
              <option value="WFM Specialist">WFM Specialist</option>
              <option value="MIS Specialist">MIS Specialist</option>
              <option value="Senior Manager, Business Development">Senior Manager, Business Development</option>
              <option value="Assistant Manager, Business Development">Assistant Manager, Business Development</option>
              <option value="Senior Manager, Technical Project Management">Senior Manager, Technical Project Management</option>
              <option value="Assistant Manager, Technical Project Management">Assistant Manager, Technical Project Management</option> -->
            </select>
            <span class="error">* <?php echo $candidatePositionErr; ?></span>

          </div>
        </div>

        <div class="row">


          <div class="form-group col-xs-12 col-md-4">
            <input name="qualification" type="text" class="form-control input-lg" placeholder="Recent Accademic Qualification">
          </div>

          <div class="form-group col-xs-12 col-md-4">
            <input name="phone" type="tel" class="form-control input-lg" placeholder="Phone Number" required>
            <span class="error">* <?php echo $phoneErr; ?></span>
          </div>
          <div class="form-group col-xs-12 col-md-4">
            <input name="email" type="email" class="form-control input-lg" placeholder="Email" required>
            <span class="error">* <?php echo $emailErr; ?></span>
          </div>
        </div>

        <div class="form-group">
          <textarea name="address" class="form-control" rows="3" placeholder="Present Residence"></textarea>
          <span class="error">* <?php echo $addressErr; ?></span>
        </div>



        <div class="form-group">
          <input name="cv" type="file" required accept=".doc,.docx,.pdf">
        </div>



        <div class="row">
          <div class="col-xs-6 col-md-3">
            <div id="html_element" style="display: none; color:red !important;">
            </div>
          </div>


          <div class="col-xs-6 col-md-3 pull-right">
            <button name="submit" type="submit" class="btn btn-block btn-primary " style="background-color:#22BEB5 !important;">Submit application</button>
          </div>
        </div>
      </form>

      <span><?php echo $nameErr . $emailErr . $phoneErr . $candidatePositionErr . $qualificationErr . $addressErr; ?></span>
    </div>
  </div>
</div>

<!-- google capcha validation -->

<script type="text/javascript">
  var onloadCallback = function() {
    grecaptcha.render('html_element', {
      'sitekey': '6LfHXaMUAAAAAK3Iutap5MSoF3Kv91rzz_w897kJ'
    });
  };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>




<script>
  $('#contact_form').submit(function(e) {
    var response = grecaptcha.getResponse();
    //recaptcha failed validation
    if (response.length == 0) {
      e.preventDefault();
      $('#html_element').show();
    }
    //recaptcha passed validation
    else {
      //$('#html_element').hide();
    }
    if (e.isDefaultPrevented()) {
      return false;
    } else {
      return true;
    }
  });
</script>

<?php include 'properties/footer.php'; ?>

<script type="text/javascript">
  document.getElementById("career").style.color = "#22bdb6";
</script>

?>