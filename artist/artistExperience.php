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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

	<!-- Radio & Checkboxes style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/checkbox.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
<style type="text/css">	
.add-more-block{
	border: 2px solid #ddd;
}
</style>	
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
				<form class="form-inline" action="" method="post">
					<div class="col-md-12 text-center">
						<br>
						<h2>Experience: Add experiences (Previous Projects)</h2><hr>
					</div>
					<div class="video-box col-md-12">
						
						<div class="pull-right col-md-12">
	                        <a href="javascript:void(0);" class="add_video_btn" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px;color:#AD8C29;cursor: pointer;">Add More Experiences</label></a>
	                    </div>
						<div class="add-more-block row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Skill Type *</label>
									<select name="skill" id="skill" class="form-control">
									<?php	
									    $skill=explode(',',ARTIST_SKILL);
                                		foreach ($skill as $key => $value) { 
                                	?>
                                			<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
								    <?php
		                                }
		                            ?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Sub Skill Type *</label>
									<select name="sub_skill" id="sub_skill" class="form-control">
									<?php	
									    $sub_skill=explode(',',ARTIST_SUB_SKILL);
                                		foreach ($sub_skill as $key => $value) { 
                                	?>
                                			<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
								    <?php
		                                }
		                            ?>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Project Title *</label>
									<input type="text" name="project_title" id ="project_title" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Role in Project </label>
									<input type="text" name="project_role" id="project_role" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Year</label>
									<input type="text" name="year" id="year" class="form-control">
								</div>
							</div>
						</div>	
					</div>
                    <div class="row  pull-right"><br>
						<button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistExpRegister">Next</button>
					</div>
					</div>
				</form>	
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
		$(document).ready(function () {
			var maxField = 10;
        var addVideoBtn = $('.add_video_btn');
        var video_wrapper = $('.video-box');
        var video_x = 1;
        var video_num = 1;
        $(addVideoBtn).click(function () {
            if (video_x < maxField) {
                var fieldHTML = '';
   				fieldHTML += '<div class="add-more-block row">';
				fieldHTML += '<div class="col-md-5">';
				fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Skill Type *</label>';
				fieldHTML += '<select class="form-control">';
				fieldHTML += '<?php	$skill=explode(',',ARTIST_SKILL);foreach ($skill as $key => $value) { ?>';
                fieldHTML += '<option value="<?php echo $value; ?>"><?php echo $value; ?></option>';
				fieldHTML += '<?php } ?>';
				fieldHTML += '</select>';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
				fieldHTML += '<div class="col-md-5">';
				fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Sub Skill Type *</label>';
				fieldHTML += '<select class="form-control">';
				fieldHTML += '<?php	$sub_skill=explode(',',ARTIST_SUB_SKILL);foreach ($sub_skill as $key => $value) { ?>';
                fieldHTML += '<option value="<?php echo $value; ?>"><?php echo $value; ?></option>';
				fieldHTML += '<?php } ?>';
				fieldHTML += '</select>';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
				fieldHTML += '<div class="col-md-2">';
				fieldHTML += '<a href="javascript:void(0);" class="remove_btn_exp pull-right" title="Remove field" data-num="' + video_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
				fieldHTML += '</div>';
				fieldHTML += '<div class="col-md-4">';
				fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Project Title *</label>';
				fieldHTML += '<input type="text" name="" class="form-control">';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
				fieldHTML += '<div class="col-md-4">';
				fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Role in Project </label>';
				fieldHTML += '<input type="text" name="" class="form-control">';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
				fieldHTML += '<div class="col-md-4">';
				fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Year</label>';
				fieldHTML += '<input type="text" name="" class="form-control">';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
				fieldHTML += '</div>';
                video_x++;
                video_num++;
                $(video_wrapper).append(fieldHTML);
            }
        });
        
       
        $(video_wrapper).on('click', '.remove_btn_exp', function (e) {
            e.preventDefault();
            var num = $(this).attr('data-num');
            $(this).closest('.add-more-block').remove();
            num--;
        });
       
		});
		
		
		$("#btnArtistExpRegister").click(function(){
			var skill=$("#skill").val();
			var sub_skill=$("#sub_skill").val();
			var project_title=$("#project_title").val();
			var project_role=$("#project_role").val();
			var year=$("#year").val();
           	$.ajax({
                type: "POST",
                url: '<?php echo base_url('artist/artist_exp/'); ?>',
                data: {
                    skill: skill,
                    sub_skill:sub_skill,
                    project_title:project_title,
                    project_role:project_role,
                    year:year
                }
                
            })
            .done(function (res) {
                alert(res);             
            });
        });
	</script>
</html>

