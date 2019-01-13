<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role | Admin Login</title>
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

	<div class="fh5co-cover" id="fh5co-started"  style="background-image:url('./assets/images/img_bg_1.jpg'); background-attachment:fixed; position: relative;">
        <div class="overlay"></div>
		<div class="container">
            <div class="row">
                       <div class="col-lg-10 col-lg-offset-1 myWizard">
                
                   	<div class="row animate-box">
				<div class="col-md-6 register_overlaybanner" style="height:60vh; background-color:#4c4c4c; overflow:hidden;">
					<img src="<?php echo base_url() ?>assets/images/director_banner.jpg" class="img-responsive">
                    
				</div>
                        <div class="col-md-6" >
				<div class="registerfrm_body" style="height:60vh; overflow:hidden;">
                    <h2 class="header2 text-center text-uppercase">Admin Login</h2>
						<p class="paragraph_text text-center">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <br>
          			<form  method="post" action="<?php echo base_url('welcome/check_admin_login')?>">
                      	<div class="input-group">
						    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						    <input  type="email"  name="email_id" class="form-control" placeholder="Enter Official Email Id">
						</div>
                       	<div class="input-group">
						    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						    <input type="password" name="password" class="form-control" placeholder="Enter Password">
						</div>         
					
                    <div class="col-md-12 text-center"><br>
                    	<div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
						<center><button type="submit" class="btn-default green-btn">Login</button></center>
                       <a href="<?php echo base_url('welcome/admin_register')?>">New member?</a><br/>
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
	<script type="text/javascript">
		/*$("#btnDirectorLogin").click(function(){
			var email=$("#email").val();
			var password=$("#password").val();
			if(email.trim() == '') { 
	            $("#error-box").show();            
	            $("#error-box").html("* Please Enter Your Email-id.");
	        }
	        else if(password.trim() == '') { 
	            $("#error-box").show();            
	            $("#error-box").html("* Please Enter Your Password.");
	        }
	        else{
	        	$.ajax({
                type: "POST",
                url: "<?php echo base_url()?>include/api.php?value=52",
                dataType: "json",
                data: {
                    email:email,
                    password:password
                }
	            })
	            .done(function(res) {
	                if(res.status=='success'){
	                	$("#error-box").hide();
	                	window.location.href="<?php echo base_url('director/director_dashboard')?>";
	                }
	                else if(res.status=='fail'){
	                	$("#error-box").show();            
	            		$("#error-box").html(res.reason);
	                	console.log(res.status);
	                	console.log(res.reason);
	                }    
	                else{
	                	console.log(res);
	                }         
	            });
	        }
        });	*/
	</script>
</html>

