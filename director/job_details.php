<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role - Jobs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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


	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<?php echo include_once('nav.php'); ?>


  <div class="container">
    <div class="row">
        <br><br><br><br>
     <div class="col-lg-10 col-lg-offset-1">
        
         <div class="data_card">
         
             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="jobdetail_imgcnt">
                    <img class="img-responsive" src="<?php echo base_url()?>assets/images/phantomfilms.jpg">
                    </div>
                 
                 </div>
                 <?php 

                 foreach ($result as $value) {
                  
                  $director_details = $this->db->select('official_name')->from('directors')->where('d_id',$value['diretor_id'])->get()->result_array();
                  ?>
                 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  
                   <h3 class="mediumheader3"> <?php echo $value['job_title'];?></h3>
                     <h4 class="mediumheader4">Posted By : <?php echo $director_details[0]['official_name'];?></h4>
                    <br>
                     <div class="row">
                      <div class="col-lg-6">
                         
                         <a class="btn pink-btn" href="#" >Apply for this Job</a>
                         </div>
                     </div>
                 </div>
             
             </div>
         </div>
         
         
           <div class="row">
               <div class="col-lg-12">
                   <br>
                 <h3 class="mediumheader3"> <strong>Job Description</strong></h3>
                   <p class="paragraph_text"> <?php echo $value['job_desc'];?>.</p>
                 
                 <ul class="list-inline">
                    <li> <h4 class="mediumheader5 green-text">Creation Date : <?php echo $value['job_post_approved_date'];?></h4></li>
                     <li><h4 class="mediumheader5 red-text">End Date : <?php echo $value['job_post_expired_date'];?></h4></li>
                   
                   </ul>
               </div>
 
             </div>
     
           <div class="row">
               <div class="col-lg-12">
                   <br>
                 <h3 class="mediumheader3"> <strong>Other Information</strong></h3>
                   <h4 class="mediumheader4">Gender who can apply for this Job</h4>
                   <p class="paragraph_text"> <?php echo $value['gender'];?> </p>
                   
                   <h4 class="mediumheader4">Age Group</h4>
                   <p class="paragraph_text"> <?php echo $value['age_from']." to ".$value['age_upto']." Years";?></p>
                   
                    <h4 class="mediumheader4">Location</h4>
                   <p class="paragraph_text">

                    <?php 
                    $RAR = explode(",", $value['location']);
                      foreach ($RAR as $rar) {
                      
                         echo $rar;  ?>          
                    <?php
                    }
                    ?>
                    </p>
                   
                    <h4 class="mediumheader4">Languages Known</h4>
                   <p class="paragraph_text">
                        <?php 
                    $Location = explode(",", $value['languages']);
                      foreach ($Location as $loc) {
                      
                         echo $loc;  ?>          
                    <?php
                    }
                    ?>
                    </p>
                   
                    <h4 class="mediumheader4">Previous Experience Required?</h4>
                   <p class="paragraph_text"><?php if($value['previous_experi']=="0"){
                    echo "No, Previous Experience is not Mandatory";
                   } elseif ($value['previous_experi']=="1") {
                     echo "Yes, Previous Experience is Mandatory";
                   }?></p>
                   
                   <h4 class="mediumheader4">Audition Required or Not?</h4>
                   <p class="paragraph_text"><?php if($value['audition_req']=="0"){
                    echo "No, Audition is not Mandatory";
                   } elseif ($value['audition_req']=="1") {
                     echo "Yes, Audition is Mandatory";
                   }?></p>
                   
               </div>
             
             
             
             
             </div>
        <?php } ?>
        
        
        
        
        
        
        
        
        
    </div>
        
        
    </div>  

        
  </div>


	<?php echo include_once('footer.php'); ?>
	</div>

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

