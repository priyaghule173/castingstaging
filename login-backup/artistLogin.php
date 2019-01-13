<?php //session_start();print_r($_SESSION['artist_login']['id']); exit(); ?>
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

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php echo include_once('nav.php'); ?>

	<div id="fh5co-started">
		<div class="container myWizard">
		
			<div class="row animate-box">
				<div class="col-md-5">
					<br>
					<img src="<?php echo base_url()?>assets/images/artist.jpg" class="img-responsive">
				</div>
				<div class="col-md-7">
					<div class="col-md-12 text-center">
						<br>
						<h2>Login as Artist</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				<form class="form-inline" method="post" action="<?php echo base_url('welcome/check_artist_login') ?>">

					<div class="col-md-12">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Email-id</label>
									<input type="email" class="form-control" id="email" name="email_id" placeholder="Enter Email-id">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
								</div>
							</div>
					</div>
					<div class="col-md-6 col-md-offset-3"><br>
						<button type="submit" class="btn btn-default btn-block">Login</button>
					</div>
					</form>
				</div>
				
				
				
			</div>
		</div>
	</div>

	<?php  echo include_once('footer.php'); ?>
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
		/*$("#btnArtistLogin").click(function(){
			var email=$("#email").val();
			var password=$("#password").val();
           	$.ajax({
                type: "POST",
                url: "<?php echo base_url()?>include/api.php?value=21",
                data: {
                    email:email,
                    password:password
                },
                dataType:"json"
            })
            .done(function (res) {
            	if(res.status="success"){
            		window.location.href="artistDetails.php";
            	}
            })
            .fail(function(res){
            	console.log(res);
            });
        });*/
	</script>
</html>

