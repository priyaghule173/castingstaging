<?php //echo include_once('include/constants.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role | Director Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
        #error-box{
        	color: red;
        	font-size: 11px;
        }
            .fh5co-cover{
                height: auto;
            }
        
            .input-group{
                margin-bottom: 10px;
            }
        
        </style>
        
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php echo include_once('nav.php'); 
	?>

	<div class="fh5co-cover" id="fh5co-started"  style="background-image:url('assets/images/img_bg_1.jpg'); background-attachment:fixed; position: relative;">
        <div class="overlay"></div>
		<div class="container">
            <div class="row">
               <div class="col-lg-10 col-lg-offset-1 myWizard">
                
                   	<div class="row animate-box">
				<div class="col-lg-7 register_overlaybanner" style="height:100vh; background-color:#4c4c4c; overflow:hidden;">
					<img src="<?php echo base_url()?>assets/images/director_banner.jpg" class="img-responsive">
                    <div class="register_overlaytxt">
                      <h2>Register as Director</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                      
                    
                    </div>
				</div>
                <div class="col-lg-5" style="height:100vh; overflow:hidden;">
              <?php 
                if($this->session->flashdata('message')){
                  echo $this->session->flashdata('message');  
                } else {
                  echo '';  
                }
              ?>
				<div class="registerfrm_body">					
					<form method="post" id="formId" action="" enctype="multipart/form-data">
						 <!-- action="<?php echo base_url('welcome/director_register')?>" -->
                    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter Company/ Official Name">
					  </div>
					    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
					    <input  type="phone" name="mobile" id="mobile" class="form-control" placeholder="Enter Contact Number">
					  </div>
					    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					    <input  type="email" name="email" id="email" class="form-control" placeholder="Enter Official Email Id">
					  </div>
					    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					    <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name">
					  </div>   
					    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					    <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Pin Code">
					  </div>   
                     	<div class="form-group">
						<textarea class="form-control" name="address" id="address" rows="5" id="comment" placeholder="Enter office Adress"></textarea>
						</div>
                 	 <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
					    <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
					  </div>   
					    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
					    <input type="text" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm Password">
					  </div>  
					  <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
					    <button class="addfiles">Upload Pic</button>
					    <input type="file" name="profile_pic" style='display: none;' id="profile_pic" class="form-control">
					  </div>
					   <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                          <button class="addscript">Upload Script</button>
                          <input type="file" name="script_name" style='display: none;' id="script_name" class="form-control">
                          </div>     
					<div id="error-box"></div>
                    <div class="col-md-12 text-center">
						<center><button type="button" name="submit" id="btnDirectorRegister" class="btn-default green-btn">Register</button></center>
                        <a>Already Registered?</a>
					</div>
                    </form>    
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
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript">

$('.addfiles').on('click', function() { $('#profile_pic').click();return false;});
$('.addscript').on('click', function() { $('#script_name').click();return false;});

	$("#btnDirectorRegister").click(function(){
			var validation_status = directorFormValidate();
			console.log(validation_status);
			if(validation_status == true ) {
				$("#error-box").hide(); 
				var form = $('form')[0];
				var form_data = new FormData(form);
				form_data.append('profile_pic', $('input[type=file]')[0].files[0]);
				form_data.append('script_name', $('input[type=file]')[1].files[0]);  
				form_data.append("companyName", $('#companyName').val());
                form_data.append("email", $('#email').val());    
                form_data.append("mobile", $('#mobile').val()); 
                form_data.append("password", $('#password').val());
                form_data.append("address", $('#address').val());    
                form_data.append("pincode", $('#pincode').val()); 
                form_data.append("city", $('#city').val());
                $.ajax({
                  url: '<?php echo base_url('welcome/director_reg/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
	            .done(function (res) {
	            	//console.log(res);
	            if(res.status="success"){
                  alert("Registration Successfully.");
                  window.location.href="<?php echo base_url('welcome/director_otp')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
	                //alert(res);             
	            });
			}
			function directorFormValidate()
	        {   
	            var status = true;         
	            var profile=$("#profile_pic").val();
	            var companyName=$("#companyName").val();
				var email=$("#email").val();
				var mobile=$("#mobile").val();
				var password=$("#password").val();
				var address=$("#address").val();
				var pincode=$("#pincode").val();
				var city=$("#city").val();
				var confirmPassword=$("#confirmPassword").val();    
	            if(profile.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Select Profile Pic.<strong>");
	              status = false;
	            } 
	            if(companyName.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
	              status = false;
	            }             
	            else if(email.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
	              status = false;
	            }     
	            else if(mobile.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your Mobile Number<strong>");
	              status = false;
	            } 
	            else if(address.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your Address<strong>");
	              status = false;
	            } 
	            else if(pincode.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your Pincode<strong>");
	              status = false;
	            } 
	            else if(city.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your City<strong>");
	              status = false;
	            } 
	            else if(password.trim() == '') { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Enter Your Password<strong>");
	              status = false;
	            }
	            else if(password.trim() != confirmPassword.trim()) { 
	              $("#error-box").show();            
	              $("#error-box").html("<strong> * Please Confirm your Password<strong>");
	              status = false;
	            } 
	            return status;
	            console.log(status);
	        }

           	
        });
	</script>
</html>

