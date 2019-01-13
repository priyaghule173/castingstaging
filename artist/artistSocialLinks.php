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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
						<h2>Social Links: add social links</h2><hr>
					</div>
					<div class="col-md-12">
						<form class="form-inline" action="" method="post">
								<div class="col-md-6">
									<div class="form-group">
										<label>Facebook Url:</label>
										<input name="facebook" type="text"  id="facebook" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Instagram Url:</label>
										<input name="instagram" id="instagram" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Twitter Url:</label>
										<input name="twitter" id="twitter" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Youtube Channel Url:</label>
										<input name="youtube" id="youtube" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Website Url:</label>
										<input name="website" id="website" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>IMDB Url:</label>
										<input name="imdb" id="imdb" type="text" class="form-control">
									</div>
								</div>
                                  <div class="row  pull-right"><br>
									<button type="submit" name="submit"class="btn btn-default btn-block" id="btnArtistSocialLinksRegister">Next</button>
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
		/*$("#head-shot").change(function(){
	        readURL1(this);
	    });
	    $("#left-shot").change(function(){
	        readURL2(this);
	    });
	    $("#right-shot").change(function(){
	        readURL3(this);
	    });
	    $("#full-shot").change(function(){
	        readURL4(this);
	    });
		function readURL1(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#headShotPreview').attr('src', e.target.result).fadeIn('slow');
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		function readURL2(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#leftShotPreview').attr('src', e.target.result).fadeIn('slow');
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		function readURL3(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#rightShotPreview').attr('src', e.target.result).fadeIn('slow');
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		function readURL4(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#fullShotPreview').attr('src', e.target.result).fadeIn('slow');
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$("#btnArtistSocialLinksRegister").click(function(){
			var facebook=$("#facebook").val();
			var instagram=$("#instagram").val();
			var twitter=$("#twitter").val();
			var youtube=$("#youtube").val();
			var website=$("#website").val();
			var imdb=$("#imdb").val();
			
           	$.ajax({
                type: "POST",
                url: '<?php echo base_url('artist/artist_social_links/'); ?>',
                data: {
                    artistName: artistName,
                    email:email,
                    phonePermanent:phonePermanent,
                    password:password
                }
            })
            .done(function (res) {
                alert(res);             
            });
        });*/
        $("#btnArtistSocialLinksRegister").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("facebook", $('#facebook').val());    
                form_data.append("instagram", $('#instagram').val()); 
                form_data.append("twitter", $('#twitter').val());
                form_data.append("youtube", $('#youtube').val());    
                form_data.append("website", $('#website').val()); 
                form_data.append("imdb", $('#imdb').val());
                
                $.ajax({
                  url: '<?php echo base_url('artist/artist_social_links/'); ?>',
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
                  window.location.href="<?php echo base_url('artist/artistMedia')?>";
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
            var facebook=$("#facebook").val();
			var instagram=$("#instagram").val();
			var twitter=$("#twitter").val();
			var youtube=$("#youtube").val();
			var website=$("#website").val();
			var imdb=$("#imdb").val();
              if(facebook.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              else if(instagram.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                status = false;
              }     
              else if(twitter.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(youtube.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter City.<strong>");
                status = false;
              } 
              else if(website.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                status = false;
              } 
              else if(imdb.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                status = false;
              } 
              
              return status;
              console.log(status);
          }

            
        }); 	
	</script>
</html>
