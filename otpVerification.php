<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="<?=base_url();?>assets/css/loginRegstyle.css" type="text/css" />

  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

</head>
<body>
        <!-- LOGIN MODULE -->
        <div class="login" style="background-image: url('<?php echo base_url()?>assets/images/director_banner.jpg');opacity: 0.9;">
          <div class="row">
          	<div class="col-lg-offset-3 col-lg-6">
          		  <div class="otpdiv">
          		<div class="otpFormContent">
          			                         
                    <form class="otp-form bg-blue-gradient" action="<?php echo base_url('welcome/verifyOtp/');   ?>" method="post" enctype="multipart/form-data">
                      <div class="otp-inputs pad90">
                      	<?php if($this->session->flashdata('message')){ ?>

                              <div class="col-lg-12">
                              <div class="alert alert-success alert-dismissible" id="success-alert" style="background-color: green;color: #fff;">
                             <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
                             <strong style="color: red;"> <?php echo $this->session->flashdata('message');  ?></strong> 
                            </div>
                          </div>
                              <!-- echo $this->session->flashdata('message');   -->
                            <?php  } else { 
                              echo '';  
                            } ?>
                      	<h4 class="textgreen padbtm20"> OTP is send to your Mail ID, Kindly Check and Enter OTP to complete Registration Process.</h4>
                      	<p style="color: red;">
                      		<?php //echo $this->session->userdata('otpdata'); ?>
                      	</p>
                        <input type="text" class="input form-control" name="otp" id="otp" autocomplete="off" placeholder="Enter OTP" style="width: 50%;margin: 0 auto;">
						<div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin: 0 auto;    text-align: center;">
                               <button type="submit" class="btn btn-default rounded-btn" >Verify OTP</button>
                            </div>
                      </div>

                        </div>
                    </form>
          		</div>
 				
           </div>
          	</div>
          </div>
            </div>

  <script type="text/javascript">
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
    </body>
</html>