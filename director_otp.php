<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['directorVerify'])) {
    echo "<script>location.href='<?php echo base_url('welcome/director_login')?>';</script>";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role | Director Verification</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        
            .fh5co-cover{
                height: auto;
            }
        
            .input-group{
                margin-bottom: 10px;
            }
        .myWizard{

  padding-bottom: 0px !important;
}
        </style>
        
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php echo include_once('nav.php'); ?>

	<div class="fh5co-cover" id="fh5co-started"  style="background-image:url('assets/images/img_bg_1.jpg'); background-attachment:fixed; position: relative;">
        <div class="overlay"></div>
		<div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 myWizard">
                   	<div class="row animate-box">
					<div class="col-md-6 register_overlaybanner" style="height:60vh; background-color:#4c4c4c; overflow:hidden;">
					<img src="<?php echo base_url()?>assets/images/director_banner.jpg" class="img-responsive">
                    
				</div>
                    <div class="col-md-6" >
					<div class="registerfrm_body" style="height:60vh; overflow:hidden;">
                    <h2 class="header2 text-center text-uppercase">Verify OTP</h2>
						<p class="paragraph_text text-center">OTP has been sent to your email-id:</p>
                    <br>
          			<form>
                      	<div class="input-group">
						    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						    <input  type="text" id="otp" class="form-control" placeholder="Enter OTP">
						</div>   
					</form>
                    <div class="col-md-12 text-center"><br>
                    	<div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
						<center><button type="button" class="btn-default green-btn" id="btnDirectorOTP">Submit</button></center>
                       <br><a style="cursor: pointer;" id="resendOtp">Resend OTP</a>
					</div> 
				</div>
				</div>
			</div>
            </div>
            
            </div>
		
		
		</div>
	</div>

	
	</div>

        <?php echo include_once('footer.php'); ?>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	</body>
	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url()?>assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()?>assets/js/main.js"></script>
	<script type="text/javascript">
		$("#resendOtp").click(function(){
			var email="<?php if(isset($_SESSION['directorVerify']['email'])){echo $_SESSION['directorVerify']['email']; } ?>";
			$.ajax({
                type: "POST",
                url: "<?php echo base_url()?>include/api.php?value=54",
                dataType: "json",
                data: {
                    email:email
                	}
	            })
	            .done(function(res) {
	                if(res.status=='success'){
	                	$("#error-box").show();
	                	$("#error-box").html("Otp has been resent.");
	                }
	                else{
	                	console.log(res);
	                }         
	            });
		});
		$("#btnDirectorOTP").click(function(){
			var otp=$("#otp").val();
			if(otp.trim() == '') { 
	            $("#error-box").show();            
	            $("#error-box").html("* Please Enter OTP.");
	        }
	        else{
	        	$.ajax({
                type: "POST",
                url: "<?php echo base_url()?>include/api.php?value=53",
                dataType: "json",
                data: {
                    otp:otp
                	}
	            })
	            .done(function(res) {
	                if(res.status=='success'){
	                	$("#error-box").hide();
	                	window.location.href="<?php echo base_url(welcome/director_login)?>";
	                } 
	                else{
	                	$("#error-box").show();            
	            		$("#error-box").html(res.reason);
	                }         
	            });
	        }
        });	
	</script>
</html>

