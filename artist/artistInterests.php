<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role</title>
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

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

	<!-- Radio & Checkboxes style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/checkbox.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>	
</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php echo include_once('artistlogin_nav.php'); 
	echo include_once('constants.php'); ?>
	<div id="fh5co-started">
		<?php echo include_once('nav-bar.php'); ?>
		<div class="container myWizard">
		
			<div class="row animate-box">
				
				<div class="col-md-12">
					<div class="col-md-12 text-center">
						<br>

						<h2>Talents: Choose your Interests</h2><hr>
					</div>
					<div class="col-md-12">
						<form class="form-inline" action="" method="post">
                                  <div class="col-md-12">
                                       <div class="block">
                                       	<?php	
                                       	
									 //   $talent=explode(',', talent_name);
                                       	$result = $this->db->select('*')->from('interests')->get()->result_array();
                                       	//print_r($result);
                                		foreach ($result as $key ) {  ?>
										<div class="checkbox-inline">
                                		<label class="chkcontainer">
                  						<?php echo $key['interests_name']; ?>
                  						<input type="checkbox" name="interests_name[]" value="<?php echo $key['interests_id'];?>" id="interests_name">
                  						<span class="checkmark"></span>
                                                    
              							</label>
          								</div>
									    <?php
			                                }
			                            ?>
									    
									  </div>
                                  </div>
                                 


        
                                  <div class="row  pull-right"><br>
									<button type="button" name="submit" class="btn btn-default btn-block" id="btnArtistInterestRegister">Next</button>
								</div>
						</form>
					</div>
					
				</div>
				
				
				
			</div>
		</div>
	</div>

	<?php echo include_once('footer.php'); ?>
	</div>

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
 $("#btnArtistInterestRegister").click(function(){
      var validation_status = artistFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
                  
                
                $('input[name="interests_name[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('interests_name[]', value);
                });
                $.ajax({

                  url: '<?php echo base_url('artist/artist_interests/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Job Posted Successfully.");
                  window.location.href="<?php echo base_url('artist/artistPhyAtt')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                  alert(res);             
              });
      }
      function artistFormValidate()
          {   
              var status = true;         
              
              var interests_name=$("#interests_name").val();
                       
                if(interests_name=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one Talent.<strong>");
                status = false;
              }
              
              return status;
              console.log(status);
          }

            
        }); 
	
	</script>
</html>

