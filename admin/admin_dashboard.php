<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Casting Role" />
	<meta name="keywords" content="" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

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
<style>
    
        </style>

	</head>
	<body class="ltgreybckground">
		
	<div class="fh5co-loader"></div>
	<?php echo include_once('adminlogin_nav.php');
   ?>
<div class="container">
        
        <br><br><br><br>
        <div class="container">
        
           <div class="row">
             <div class="col-lg-4 col-md-4 artistdashboard_leftsction">
               <img class="img-responsive" src="<?php echo base_url()?>assets/images/sample-user.jpg">
               <h3><?php echo "Company Name:" .$this->session->userdata('OFFICIAL_NAME');?></h3>
                 <p><?php echo "Email-id:" .$this->session->userdata('EMAIL_ID');?></p>
                 <br>
                  <a href="<?php echo base_url('admin/editAdminProfile')?>">
                      <div class="green-btnfull">
                     Edit My Profile
                      </div>
                  </a>
                  <a href="<?php echo base_url('admin/manage_directors')?>">
                      <div class="green-btnfull">
                     Manage Directors
                      </div>
                  </a>
                   <a href="<?php echo base_url('admin/job_post_request')?>">
                      <div class="green-btnfull">
                     Job Post Request </div>
                  </a>
                   <a href="<?php echo base_url('admin/manage_artists')?>">
                      <div class="green-btnfull">
                    Manage Artist </div>
                  </a>
              </div>  
               
                <div class="col-lg-8 col-md-8 artistdashboard_rightsction">
                <h1>My Dashboard</h1>

                    <h4>Recent Work</h4>
                    <div class="row">
                        <div class="col-lg-12">
                         Hello
                          
                        
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

	</body>
</html>

