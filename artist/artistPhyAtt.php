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
<!--	<link rel="stylesheet" href="<?php echo base_url()?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
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
	echo include_once('constants.php');
	 ?>

	<div id="fh5co-started">
		<?php echo include_once('nav-bar.php'); ?>
		<div class="container myWizard">
		
			<div class="row animate-box">
				
				<div class="col-md-12">
					<div class="col-md-12 text-center">
						<br>
						<h2>Physical Attributes: Tell us about your Physical Attributes</h2><hr>
					</div>
					<div class="col-md-12">
						<form class="form-inline" action="" method="post">
              <?php foreach($result as $key){
              ?>
							<div class="col-md-3">
								<div class="form-group">
								<label>Weight:</label>
								<input name="weight" type="text" value="<?php echo $key['weight'];?>"  id="weight"class="form-control" placeholder="in Kgs">
							</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label>Height:</label>
								<input name="height" type="text" value="<?php echo $key['height'];?>"  id="height" class="form-control" placeholder="For ex. 5ft 5 inch">
							</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label>Chest:</label>
								<input name="chest" type="text" value="<?php echo $key['chest'];?>"  id="chest" class="form-control" placeholder="in inches">
							</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label>Waist:</label>
								<input name="waist" type="text" value="<?php echo $key['waist'];?>"  id="waist" class="form-control" placeholder="in inches">
							</div>
							</div>
							<div class="col-sm-3">
                                     <div class="form-group">
                                        <label>Body Type </label>
                                        <select name="body_type"   id="body_type" class="form-control">
                                          <option value="slim"<?php if($key['body_type']=="slim"){
                                        echo "selected";
                                      }?>>Slim</option>
                                          <option value="average" <?php if($key['body_type']=="average"){
                                        echo "selected";
                                      }?>>Average</option>
                                          <option value="heavy" <?php if($key['body_type']=="heavy"){
                                        echo "selected";
                                      }?>>Heavy</option>
                                          <option value="athletic" <?php if($key['body_type']=="athletic"){
                                        echo "selected";
                                      }?>>Athletic</option>
                                          
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Ethinicity </label>
                                        <select name="ethinicity" id="ethinicity" class="form-control">
                                          <option value="african" <?php if($key['ethinicity']=="african"){
                                        echo "selected";
                                      }?>>African</option>
                                          <option value="arabic" <?php if($key['ethinicity']=="arabic"){
                                        echo "selected";
                                      }?>>Arabic</option>
                                          <option value="indian" <?php if($key['ethinicity']=="indian"){
                                        echo "selected";
                                      }?>>Indian</option>
                                          <option value="oriental" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?>>Oriental</option>
                                          
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-3">
                                     <div class="form-group">
                                        <label>Hair Type </label>
                                        <select name="hair_type" id="hair_type" class="form-control">
                                          <option value="wavy" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?>>Wavy</option>
                                          <option value="curly" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?> >Curly</option>
                                          <option value="bald" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?> >Bald</option>
                                          <option value="straight" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?> >Straight</option>
                                          <option value="semi_wavy" <?php if($key['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?> >Semi Wavy</option>
                                          
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Hair Length </label>
                                        <select name="hair_length" id="hair_length" class="form-control">
                                          <option>Bald</option>
                                          <option>Long</option>
                                          <option>Medium</option>
                                          <option>Short</option>
                                          
                                        </select>
                                      </div>
                                  </div>
                          	<div class="col-sm-4">
                                     <div class="form-group">
                                        <label>Eye Color</label><br>
                                        <label class="radio-inline">
                                       <input type="radio"  id="eye_color" <?php if($key['eye_color']=="black"){
                                        echo "checked";
                                      }?> name="eye_color" value="black">Black
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="eye_color" <?php if($key['eye_color']=="blue"){
                                        echo "checked";
                                      }?> name="eye_color" value="blue">Blue
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="eye_color" <?php if($key['eye_color']=="green"){
                                        echo "checked";
                                      }?> name="eye_color" value="green">Green
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="eye_color" <?php if($key['eye_color']=="grey"){
                                        echo "checked";
                                      }?> name="eye_color" value="grey">Grey
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="eye_color" <?php if($key['eye_color']=="brown"){
                                        echo "checked";
                                      }?> name="eye_color" value="brown">Brown
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="eye_color" <?php if($key['eye_color']=="dark_brown"){
                                        echo "checked";
                                      }?> name="eye_color" value="dark_brown">Dark Brown
                                        </label>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                     <div class="form-group">
                                        <label>Skin Tone </label><br>
                                        <label class="radio-inline">
                                        <input type="radio" id="skin_tone" <?php if($key['skin_tone']=="very_fair"){
                                        echo "checked";
                                      }?> name="skin_tone" value="very_fair">Very Fair
                                        </label>
                                         
                                        <label class="radio-inline">
                                        <input type="radio" id="skin_tone" <?php if($key['skin_tone']=="fair"){
                                        echo "checked";
                                      }?> name="skin_tone" value="fair">Fair
                                        </label>
                                        
                                        <label class="radio-inline">
                                        <input type="radio" id="skin_tone" <?php if($key['skin_tone']=="brown"){
                                        echo "checked";
                                      }?> name="skin_tone" value="brown">Brown
                                        </label>

                                        <label class="radio-inline">
                                        <input type="radio" id="skin_tone" <?php if($key['skin_tone']=="dark"){
                                        echo "checked";
                                      }?> name="skin_tone" value="dark">Dark
                                        </label>
                                        
                                        <label class="radio-inline">
                                        <input type="radio" id="skin_tone" <?php if($key['skin_tone']=="very_dark"){
                                        echo "checked";
                                      }?> name="skin_tone" value="very_dark">Very Dark
                                        </label>
                                        
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                     <div class="form-group">
                                        <label>Hair Color </label><br>
                                        <label class="radio-inline">
                                       <input type="radio" id="hair_color"  <?php if($key['hair_color']=="black"){
                                        echo "checked";
                                      }?>name="hair_color"value="black">Black
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" id="hair_color"  <?php if($key['hair_color']=="brown"){
                                        echo "checked";
                                      }?> name="hair_color" value="brown">Brown
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" id="hair_color"  <?php if($key['hair_color']=="grey"){
                                        echo "checked";
                                      }?>name="hair_color value="grey">Grey
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" id="hair_color"  <?php if($key['hair_color']=="white"){
                                        echo "checked";
                                      }?> name="hair_color value="white">White
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" id="hair_color"  <?php if($key['hair_color']=="blonde"){
                                        echo "checked";
                                      }?> name="hair_color value="blonde">Blonde
                                        </label>
                                       
                                      </div>
                                  </div>
                                  
                                 
                          <div class="row  pull-right"><br>
							<button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistPhyAttRegister">Next</button>
						</div>
            <?php } ?>
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
		$("#btnArtistPhyAttRegister").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());

                form_data.append("btnArtistPhyAttRegister", $('#btnArtistPhyAttRegister').val());
                form_data.append("weight", $('#weight').val());    
                form_data.append("height", $('#height').val()); 
                form_data.append("chest", $('#chest').val());
                form_data.append("waist", $('#waist').val());    
                form_data.append("body_type", $('#body_type').val()); 
                form_data.append("ethinicity", $('#ethinicity').val());
                form_data.append("hair_type", $('#hair_type').val()); 
                form_data.append("hair_length", $('#hair_length').val()); 
                //form_data.append("eye_color", $('#eye_color').val()); 
                //form_data.append("skin_tone", $('#skin_tone').val()); 
                //form_data.append("hair_color", $('#hair_color').val()); 

               form_data.append("eye_color", $('input:radio[name=eye_color]:checked').val()); 
               form_data.append("skin_tone", $('input:radio[name=skin_tone]:checked').val());
               form_data.append("hair_color", $('input:radio[name=hair_color]:checked').val());   
               
            
                $.ajax({
                  url: '<?php echo base_url('artist/artist_phy_att/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                console.log(res.status);
                if(res.status="success"){
                  alert("Artists Physical Attribute updated Successfully.");
                  window.location.href="<?php echo base_url('artist/artistSocialLinks')?>";
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
              var weight=$("#weight").val();
              var height=$("#height").val();
              var chest=$("#chest").val();
              var waist=$("#waist").val();
              var body_type=$("#body_type").val();
              var ethinicity=$("#ethinicity").val();
              var hair_type=$("#hair_type").val();    
              var hair_length=$("#hair_length").val();
              var eye_color=$("#eye_color").val();
              var skin_tone=$("#skin_tone").val();
              var hair_color=$("#hair_color").val();
             
              if(weight.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              else if(height == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                status = false;
              }     
              else if(chest.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(waist.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter City.<strong>");
                status = false;
              } 
              else if(body_type.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                status = false;
              } 
              else if(ethinicity.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                status = false;
              } 
              else if(hair_type=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Date Of Birth.<strong>");
                status = false;
              } 
              else if(hair_length=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              else if(eye_color.trim() =='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Select profile Picture.<strong>");
                status = false;
              }
              else if(skin_tone=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast terms and Conditions.<strong>");
                status = false;
              }
              else if(hair_color=='') { 
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
	</script>
</html>

