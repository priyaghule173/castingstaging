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
        <div class="main_header text-center">
          <h1>Jobs on Casting role</h1>  
          <h2>Browse and apply for biggest jobs in the Film and Entertainment industry from anywhere in the world.</h2>

        </div>
        
        
      </div>  
      <br>
      <div class="row">
        <?php 
        foreach ($result as $key) {
          $director_details = $this->db->select('official_name,profile_pic')->from('directors')->get()->result_array();
          ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a href="<?php echo base_url('welcome/job_details?job_id=').$key['job_id'] ?>">
              <div class="data_card postedjob_card text-center">

               <div style="height:220px; background-color:#f6f6f6;"><img style="overflow:hidden;background-repeat: no-repeat;
                background-size: cover;" height="220" width="305" src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $director_details[0]['profile_pic']; ?>">
              </div>
              <br>
              <h3 style="  white-space: nowrap;
              text-overflow: ellipsis;">
              <a style="color:#000;" href="<?php echo base_url('welcome/job_details?job_id=').$key['job_id']?>" target="_blank" >
                <?php echo $key['job_title'];?>
              </a>
            </h3>
            <h5>By <?php echo $director_details[0]['official_name']; ?></h5>

            <p><?php echo substr($key['job_desc'],0,140)." "; ?></p>
            <h5>Age Group : <?php echo $key['age_from']." to ".$key['age_upto']." Years";?></h5>
            <h5>Location : 
              <?php 
              $RAR = explode(",", $key['location']);
              foreach ($RAR as $rar) {

               echo $rar;  ?>          
               <?php
             }
             ?></h5>
             <h5 class="red-text"><strong>Last Date : <?php echo $key['job_post_expired_date'];?></strong></h5>
             <span class="tag"><?php echo $key['artist_category'];?></span>

           </div>  
         </a>
       </div>
       <?php } ?>

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

