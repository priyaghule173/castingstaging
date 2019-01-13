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

	<?php echo include_once('directorlogin_nav.php'); ?>

<div class="container">
        
        <br><br><br><br>
        <div class="container">
        
           <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 artistdashboard_leftsction">
               <img class="img-responsive" height="240" width="360" src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $profile->profile_pic; ?>">
                 <h3><?php echo "Company Name:" .$this->session->userdata('OFFICIAL_NAME');?></h3>
                 <p><?php echo "Email-id:" .$this->session->userdata('EMAIL_ID');?></p>
                 <div class="artistdashboard_yellowstrip text-center">
                     <h4>50</h4>
                     <p>Casting Role Tokens</p>
                     <div class="row">
                         <div class="col-lg-12 col-sm-12 col-xs-12">
                            <a class="drkbtn" href="<?php echo base_url('director/casting_role_points')?>">
                   
                         Purchase Tokens  
                     
                     </a>
                         
                         </div>
                       
                         
                     </div>
                    
                 </div>
                 <br>
                   <a href="<?php echo base_url('director/editDirectorProfile')?>">
                    <div class="green-btnfull">
                     Edit My Profile
                      </div>
                    </a>
                <a href="<?php echo base_url('director/director_postjob')?>">
                      <div class="green-btnfull">
                    post a job
                      </div>
                </a>
                 
                  <a href="<?php echo base_url('director/all_posting_jobs')?>">
                      <div class="green-btnfull">
                      All Posting Jobs
                      </div>
                  </a>
                  <a href="<?php echo base_url('director/applications_per_job')?>">
                      <div class="green-btnfull">
                       Job Application Per Job Post
                      </div>
                  </a>
                 
                  <a href="<?php echo base_url('director/artist_approved_appln')?>">
                      <div class="green-btnfull">
                       Application Approved List
                      </div>
                  </a>
                  <!-- <a href="<?php echo base_url('director/casting_role_points')?>">
                      <div class="green-btnfull">
                       My Casting Role Points
                      </div>
                  </a> -->
              </div>  
               
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 artistdashboard_rightsction">
                <h1>My Dashboard</h1>
                    <h4>My Casting Points</h4>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">

                          <?php 
                         // print_r($result);
                          if(!empty($result)){
                           ?>                           
                         <div class="data_card">
                         <div class="row">
                             <div class="artistdashboard_yellowstrip text-center">
                            	<?php 
                            	foreach ($result as $key) {?>
			                     <h4><?php echo $key['casting_point_name'] ?></h4>
			                     <p>Total used Points(<?php echo $key['used_casting_points']?>/<?php echo $key['total_points']?>)</p>
			                     <div class="row">
			                         <div class="col-lg-12 col-sm-12 col-xs-12">
			                            <a class="drkbtn" href="<?php echo base_url('director/artist_approved_appln') ?>">
			                    		
			                    			Use Token To View Profiles
			                     
			                             </a>
			                         
			                         </div>
			                     </div>
			                    
			                 </div>
                          </div>  
                        <?php } ?>
                      </div>
                      <?php }else{ ?>

                      <div class="data_card">
                         <div class="row">
                             <div class="artistdashboard_yellowstrip text-center">
                            	<?php 
                            	foreach ($result as $key) {?>
			                     <h4><?php echo $key['casting_point_name'] ?></h4>
			                     <p>Total used Points(<?php echo $key['used_casting_points']?>/<?php echo $key['total_points']?>)</p>
			                     <div class="row">
			                         <div class="col-lg-12 col-sm-12 col-xs-12">
			                            <a class="drkbtn" href="#">
			                    		
			                    			Purchase Plan
			                     
			                             </a>
			                         
			                         </div>
			                     </div>
			                    <?php } ?>
			                 </div>
                          </div>  


                      <?php } ?>
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
<script type="text/javascript">
function editJob(JID)
{
 
 var JID_new = JID;
 alert(JID_new);
  $.ajax({
        type: "POST",
        url: "<?php echo base_url('director/edit_job_post_request')?>",
        data: {'job_id': JID_new},
        success: function (data) 
        {
          alert(data);
         
          //alert("Your Edit Job Request Send To Admin Successfully!. Please Wait For the Approval.")
               
        }
    });
}
</script>
	</body>
</html>

