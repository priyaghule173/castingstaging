<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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
						<h2>Additional: Please fill in the remaining details</h2><hr>
					</div>
					<div class="col-md-12">
						<form class="form-inline" method="post">
							<div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Budget <small>(Minimum compensation)</small></label>
                                    <input name="min_budget" id="min_budget" type="text" class="form-control" placeholder="">
                                  </div>
                            </div>
                             <div class="col-sm-6">  
	                             <div class="form-group">
	                                  <label>Budget <small>(Maximum Compensation)</small></label>
	                                  <input name="max_budget" type="text" id="max_budget" class="form-control" placeholder="">
								</div> 
	                          </div>
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                        <label>About Me</label>
                                        <input name="about_me" type="text" id="about_me" class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="row  pull-right"><br>
									<button type="button" name="submit" class="btn btn-default btn-block" id="btnArtistAddInfoRegister">Next</button>
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
		$("#wizard-picture").change(function(){
	        readURL(this);
	    });
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
		        }
		        reader.readAsDataURL(input.files[0]);	
		    }
		}
		$("#btnArtistAddInfoRegister").click(function(){
			var min_budget=$("#min_budget").val();
			var max_budget=$("#max_budget").val();
			var about_me=$("#about_me").val();
			
           	$.ajax({
                type: "POST",
                url: '<?php echo base_url('artist/artist_add_info/'); ?>',
                data: {
                    min_budget: min_budget,
                    max_budget:max_budget,
                    about_me:about_me,
                    
                },
                dataType:"json"
            })
            .done(function (res) {
            	//console.log(res);
            	//console.log(res.errorCode);
                if(res.errorCode==0){
                	window.location.href="<?php echo base_url('artist/artist_dashboard')?>";
                }
                else if(res.errorCode==1){
                	alert(res.errorMessage);
                }   
                else{
                	alert(res);
                }          
            })
            .fail(function(res){
            	console.log(res);
            });
        });	
	</script>
</html>

