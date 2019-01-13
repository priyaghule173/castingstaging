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
				<form class="form-inline" method="post" id="formId" action="" enctype="multipart/form-data">
				
					<div class="col-md-12 text-center">
						<br>
						<h2>Media: Choose your Media to strengthen your profile</h2><hr>
					</div>
					<div class="video-box col-md-12">
						<div class="col-md-6">
							<h4>Upload Videos(if Any)</h4>
							
						</div>
						<div class="pull-right col-md-6">
	                        <a href="javascript:void(0);" class="add_video_btn" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px;color:#AD8C29;cursor: pointer;"> Add More Video urls</label></a>
	                    </div>
						<div class="add-more-block">
							<div class="col-md-3">
								<div class="form-group">
									<label>Video Url </label>
									<input name="videos" id="videos" data-num="0" type="text" class="form-control">
								</div>
							</div>
						</div>	
					</div>
					<div class="script-box col-md-12">
						<div class="col-md-6">
							<h4>Upload Scripts(if Any)</h4>
							
						</div>
						<div class="pull-right col-md-6">
	                        <a href="javascript:void(0);" class="add_script_btn" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px;color:#AD8C29;cursor: pointer;"> Add More Scripts</label></a>
	                    </div>
						<div class="add-more-block">
							<div class="col-md-3">
								<div class="form-group">
									<label>Script</label>
									<input name="scripts" data-num="0" id="scripts" type="file" class="form-control">
								</div>
							</div>
						</div>	
					</div>
					<div class="audio-box col-md-12">
						<div class="col-md-6">
							<h4>Upload Audio(if Any)</h4>
						</div>
						<div class="pull-right col-md-6">
	                        <a href="javascript:void(0);" class="add_audio_btn" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px;color:#AD8C29;cursor: pointer;"> Add More Audios</label></a>
	                    </div>
						<div class="add-more-block">
							<div class="col-md-3">
								<div class="form-group">
									<label>Audio</label>
									<input name="audios" id="audios" data-num="0" type="file" class="form-control">
								</div>
							</div>
						</div>	
					</div>
				
						
						<div class="col-md-12">
							<h4>Upload Pictures</h4>
						</div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/default-avatar.png" class="picture-src" id="headShotPreview" title=""/>
                                      <input type="file" name="head_shot" id="head_shot">
                                  </div>
                                  <h6>Choose a good head shot Picture</h6>
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/default-avatar.png" class="picture-src" id="leftShotPreview" title=""/>
                                      <input type="file" name="left_shot" id="left_shot">
                                  </div>
                                  <h6>Choose Left</h6>
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/default-avatar.png" class="picture-src" id="rightShotPreview" title=""/>
                                      <input type="file" name="right_shot" id="right_shot">
                                  </div>
                                  <h6>Choose Right</h6>
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/default-avatar.png" class="picture-src" id="fullShotPreview" title=""/>
                                      <input type="file" name="full_shot" id="full_shot">
                                  </div>
                                  <h6>Choose Full</h6>
                              </div>
                          </div>
                         
                          <div class="row  pull-right"><br>
							<button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistMediaRegister">Next</button>
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
		$("#btnArtistMediaRegister").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();
        form_data.append('scripts', $('input[type=file]')[0].files[0]); 
        form_data.append('audios', $('input[type=file]')[1].files[0]); 

        form_data.append('head_shot', $('input[type=file]')[2].files[0]);
        form_data.append('left_shot', $('input[type=file]')[3].files[0]);
        form_data.append('right_shot', $('input[type=file]')[4].files[0]);
        form_data.append('full_shot', $('input[type=file]')[5].files[0]);
                form_data.append("videos", $('#videos').val());    
                form_data.append("scripts", $('#scripts').val()); 
                //form_data.append("audios", $('#audios').val());

              
        
                $.ajax({
                  url: '<?php echo base_url('artist/artist_media/'); ?>',
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
                  window.location.href="<?php echo base_url('artist/artistExperince')?>";
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
/*
      	function uploadAudio(){
    Fr.voice.exportMP3(function(blob){
        var data = new FormData();
        data.append(("audios", $('#audios').val())  , blob);

        $.ajax({
            url: '<?php echo base_url('artist/artist_media/'); ?>',
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            success: function(data) {
                // Sent to Server
            }
        });
    }, "blob");
  }*/
      function directorFormValidate()
          {   
              var status = true;         
              var videos=$("#videos").val();
              
              
              if(videos.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              
              
              
              return status;
              console.log(status);
          }

            
        }); 
	/*$(document).ready(function () {
			var maxField = 10;
        var addVideoBtn = $('.add_video_btn');
        var addScriptBtn = $('.add_script_btn');
        var addAudioBtn = $('.add_audio_btn');
        var video_wrapper = $('.video-box');
        var script_wrapper = $('.script-box');
        var audio_wrapper = $('.audio-box');
        var video_x = 1;
        var video_num = 1;
        var script_x = 1;
        var script_num = 1;
        var audio_x = 1;
        var audio_num = 1;

        $(addVideoBtn).click(function () {
            if (video_x < maxField) {
                var fieldHTML = '';
                fieldHTML += '<div class="add-more-block">';
                fieldHTML += '<div class="col-md-3">';                
                fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Video Url</label>';
				fieldHTML += '<input name="videos['+video_num+']" data-num="'+video_num+'" type="text" class="form-control">';
                fieldHTML += '<a href="javascript:void(0);" class="remove_btn_video" title="Remove field" data-num="' + video_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                video_x++;
                video_num++;
                $(video_wrapper).append(fieldHTML);
            }
        });
        $(addScriptBtn).click(function () {
            if (script_x < maxField) {
                var fieldHTML = '';
                fieldHTML += '<div class="add-more-block">';
                fieldHTML += '<div class="col-md-3">';                
                fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Script</label>';
				fieldHTML += '<input name="scripts['+script_num+']" data-num="'+script_num+'" type="file" class="form-control">';
                fieldHTML += '<a href="javascript:void(0);" class="remove_btn_script" title="Remove field" data-num="' + script_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                script_x++;
                script_num++;
                $(script_wrapper).append(fieldHTML);
            }
        });
        $(addAudioBtn).click(function () {
            if (audio_x < maxField) {
                var fieldHTML = '';
                fieldHTML += '<div class="add-more-block">';
                fieldHTML += '<div class="col-md-3">';                
                fieldHTML += '<div class="form-group">';
				fieldHTML += '<label>Script</label>';
				fieldHTML += '<input name="audios['+audio_num+']" data-num="'+audio_num+'" type="file" class="form-control">';
                fieldHTML += '<a href="javascript:void(0);" class="remove_btn_audio" title="Remove field" data-num="' +audio_num+ '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                fieldHTML += '</div>';
                audio_x++;
                audio_num++;
                $(audio_wrapper).append(fieldHTML);
            }
        });
        $(video_wrapper).on('click', '.remove_btn_video', function (e) {
            e.preventDefault();
            var num = $(this).attr('data-num');
            $(this).closest('.add-more-block').remove();
            num--;
        });
        $(script_wrapper).on('click', '.remove_btn_script', function (e) {
            e.preventDefault();
            var num = $(this).attr('data-num');
            $(this).closest('.add-more-block').remove();
            num--;
        });
        $(audio_wrapper).on('click', '.remove_btn_audio', function (e) {
            e.preventDefault();
            var num = $(this).attr('data-num');
            $(this).closest('.add-more-block').remove();
            num--;
        });
		});
		
	/*	$("#head_shot").change(function(){
	        readURL1(this);
	    });
	    $("#left_shot").change(function(){
	        readURL2(this);
	    });
	    $("#right_shot").change(function(){
	        readURL3(this);
	    });
	    $("#full_shot").change(function(){
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
		
		$("#btnArtistMediaRegister").click(function(){
			var videos=$("#videos").val();
			var scripts=$("#scripts").val();
			var audios=$("#audios").val();
			var headShotPreview=$("#headShotPreview").val();
			var leftShotPreview=$("#leftShotPreview").val();
			var rightShotPreview=$("#rightShotPreview").val();
			var fullShotPreview=$("#fullShotPreview").val();
           	$.ajax({
                type: "POST",
                url: '<?php echo base_url('artist/artist_media/'); ?>',
                data: {
                    videos:videos,
                    scripts:scripts,
                    audios:audios,
                    headShotPreview:headShotPreview,
                    leftShotPreview:leftShotPreview,
                    rightShotPreview:rightShotPreview,
                    fullShotPreview:fullShotPreview
                }
            })
            .done(function (res) {
                alert(res);             
            });
        });	*/
	</script>
</html>

