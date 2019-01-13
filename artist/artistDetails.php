
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

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

	<!-- Radio & Checkboxes style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/checkbox.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
<?php echo include_once('artistlogin_nav.php'); ?>
	<div id="fh5co-started">
		<?php echo include_once('nav-bar.php'); ?>
		<div class="container myWizard">
		
			<div class="row animate-box">
				
				<div class="col-md-12">
					<div class="col-md-12 text-center">
						<br>
						<h2>Please Complete the Registration Process</h2><hr>
					</div>
					<div class="col-md-12">
					<form class="form-inline" method="post" id="formId" action="" enctype="multipart/form-data">
						<!--<form class="form-inline" action="" method="post">-->
							<div class="col-sm-4">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/sample-user.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="profile_pic"  name="profile_pic">
                                          </div>
                                          <h5>Choose Picture</h5>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Full Name <small>(required)</small></label>
                                        <input type="text" class="form-control" id="name" name="name">
                                      </div>
                                      <div class="form-group">
                                          <label>Email <small>(required)</small></label>
                                        <input type="email"  class="form-control" id="email" name="email">
                                      </div>
                                      <div class="form-group">
                                        <label>Mobile No. <small>(required)</small></label>
                                        <input type="text" class="form-control" id="mobile" name="mobile">
                                      </div>
                                      <div class="form-group">
                                        <label>Date of Birth: <small>(required)</small></label>
                                        <input name="dob" id="dob" type="date" class="form-control" >
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Select City <small>(required)</small></label>
                                          <input id="city" type="text" class="form-control" placeholder="Enter City"name="city">

                                        <!--<select name="cities" id="city" class="form-control">
                                          <option>Delhi</option>
                                          <option>Mumbai</option>
                                        </select>-->
                                      </div>
                                      <div class="form-group">
                                          <label>Zipcode </label>
                                          <input id="zipcode" type="text" class="form-control" placeholder="Enter Zipcode"name="zipcode">
                                      </div>
                                      <div class="form-group">
                                        <label>Whatsapp No. </label>
                                        <input id="whatsapp" type="text" class="form-control" placeholder="Enter Whatsapp No."name="whatsapp">
                                      </div>
                                      <div class="form-group">
                                        <label>Gender: </label><br>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" id="gender" value="male">
                                        Male
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" id="gender" value="female">Female
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" id="gender" value="transgender">Transgender
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-md-4 col-md-offset-4">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="terms" id="terms" value="1"> I agree with the Terms and Conditions
                                    </label>
                                  </div>
                                  <div class="col-md-12">
						          <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
											</div> 
                                  <div class="row  pull-right"><br>
                                  	<!-- <input type="hidden" name="artistId" id="artistId" value=""> -->
									<button type="button" name ="submit" value="submit" class="btn btn-default btn-block" id="btnArtistDetails">Next</button>
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
		
 $("#btnArtistDetails").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
        form_data.append('profile_pic', $('input[type=file]')[0].files[0]);
                form_data.append("name", $('#name').val());    
                form_data.append("email", $('#email').val()); 
                form_data.append("mobile", $('#mobile').val());
                form_data.append("dob", $('#dob').val());    
                form_data.append("city", $('#city').val()); 
                form_data.append("zipcode", $('#zipcode').val());
                form_data.append("whatsapp", $('#whatsapp').val()); 
                form_data.append("gender", $('input[name="gender"]:checked').val());    
              //  form_data.append("wizardPicturePreview", $('#wizardPicturePreview').val());    
                form_data.append("terms", $('input[name="terms"]:checked').val()); 
                $.ajax({
                  url: '<?php echo base_url('artist/artistGeneralInfo/'); ?>',
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
                  window.location.href="<?php echo base_url('artist/artistTalent')?>";
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
              var name=$("#name").val();
              var email=$("#email").val();
              var mobile=$("#mobile").val();
              var dob=$("#dob").val();
              var city=$("#city").val();
              var zipcode=$("#zipcode").val();
              var whatsapp=$("#whatsapp").val();    
              var gender=$("#gender").val();
             // var wizardPicturePreview=$("#wizardPicturePreview").val();
              var terms=$("#terms").val();
              if(name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              else if(email == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                status = false;
              }     
              else if(mobile.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(city.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter City.<strong>");
                status = false;
              } 
              else if(zipcode.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                status = false;
              } 
              else if(whatsapp.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                status = false;
              } 
              else if(dob=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Date Of Birth.<strong>");
                status = false;
              } 
              else if(gender=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              
              else if(terms=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast terms and Conditions.<strong>");
                status = false;
              }
              return status;
              console.log(status);
          }

            
        }); 
	</script>
</html>

