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
	echo include_once('constants.php');
	 ?>

	<div id="fh5co-started">
    <?php echo include_once('nav-bar.php'); ?>
		<div class="container myWizard">
		
			<div class="row animate-box">
				
				<div class="col-md-12">
					<div class="col-md-12 text-center">
						<br>
						<h2>Talents: Choose your Sub-Talent</h2><hr>
					</div>
					<div class="col-md-12">
                <form class="form-inline" id="frmAddTalents" method="post">

            <div class="block">
          
                <div id="data_card">
              </div>

</div>

                                        <?php 
                                      
        $talent_name = $this->db->select('*')->from('talent')->get()->result_array();
                                     
        foreach ($talent_name as $key ) {  ?>
        <div class="checkbox-inline" style="background-color: #eee;
    width: 100%;">
        <label class="chkcontainer" style="margin: 5px 0px 5px 0px; margin-bottom: 5px !important;">

        <?php echo $key['talent_name']; ?>
         <input type="checkbox" name="talent_name[]" value="<?php echo $key['talent_id'];?>" id="talent_name">
         
       </label>
     </div>
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      
       <input type="hidden" name="sub_talent" >
        <?php
        $sub_talent_name = $this->db->select('*')->from('sub_talent')->where('talent_id',$key['talent_id'])->get()->result_array();
                                       
         foreach ($sub_talent_name as $key ) {  ?>
          <div class="checkbox-inline">
          <label class="chkcontainer">

          <?php echo $key['sub_talent_name']; ?>
          <input type="checkbox" name="sub_talent_name[]" id="sub_talent_name" value="<?php echo $key['sub_talent_id'];?>" id="sub_talent_name">

          <span class="checkmark"></span>
                                                    
          </label>
                          </div>
                      <?php
                      }
                       ?>
                       </div>
                       <?php
                      }
                       ?>
                      
                    
                    </div>
   
          <div class="row  pull-right"><br>
				<button type="button" name="submit" class="btn btn-default btn-block" id="btnArtistSubTalentRegister">Next</button>
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
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()?>assets/js/main.js"></script>
	<script type="text/javascript">
    $("#btnArtistSubTalentRegister").click(function(){
      var validation_status = artistFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
                  
                
                $('input[name="sub_talent_name[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('sub_talent_name[]', value);
                });
                $.ajax({

                  url: '<?php echo base_url('artist/artist_sub_talent/'); ?>',
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
                  window.location.href="<?php echo base_url('artist/artistInterests')?>";
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
              
              var sub_talent_name=$("#sub_talent_name").val();
                       
                if(sub_talent_name=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one Talent.<strong>");
                status = false;
              }
              
              return status;
              console.log(status);
          }

            
        }); 



		/*var talents=<?php print json_encode($_POST['talent']); ?>;
		$("#data_card").empty();
		fill_all_subTalents(talents);
		function fill_all_subTalents(talents) {
			var subTalent = "";
			$.each(talents, function( index, val ) {                
	               if(val==1){
	               		subTalent += make_div_for_artist_actor(val);
	               }  
	               if(val==2){
	               		subTalent += make_div_for_artist_choreographer(val);
	               }
                 if(val==3){
                    subTalent += make_div_for_artist_comedian(val);
                 }
	               if(val==4){
	               		subTalent += make_div_for_artist_dancer(val);
	               } 
                 if(val==5){
                    subTalent += make_div_for_artist_ja(val);
                 } 
	               if(val==6){
	               		subTalent += make_div_for_artist_model(val);
	               }
	               if(val==7){
	               		subTalent += make_div_for_artist_director(val);
	               }
                 if(val==8){
                    subTalent += make_div_for_artist_musician(val);
                 }
	               if(val==9){
	               		subTalent += make_div_for_artist_productionCrew(val);
	               }
                 if(val==10){
                    subTalent += make_div_for_artist_sw(val);
                 }
	               if(val==11){
	               		subTalent += make_div_for_artist_singer(val);
	               } 
	               if(val==12){
	               		subTalent += make_div_for_artist_stylist(val);
	               }
	               if(val==13){
	               		subTalent += make_div_for_artist_voa(val);
	               }       
	               console.log(val);    
	        });   
	        $("#data_card").append(subTalent);
	    }
        function make_div_for_artist_actor(obj){                            
            var html = "";
   
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#actors" aria-expanded="true" aria-controls="actors">Actors';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="actors" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', ARTIST_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="actor[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';            
             return html;
        }
        function make_div_for_artist_choreographer(obj){                            
            var html = "";  
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#choreographer" aria-expanded="true" aria-controls="choreographer">Choreographer';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="choreographer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', CHOREOGRAPHER_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="choreographer[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';           
             return html;
        }
        function make_div_for_artist_dancer(obj){                            
            var html = "";   
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#dancer" aria-expanded="true" aria-controls="dancer">Dancer';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="dancer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', DANCER_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="dancer[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';             
             return html;
        }
        function make_div_for_artist_director(obj){                            
            var html = "";  
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#director" aria-expanded="true" aria-controls="director">Director';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="director" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', DIRECTOR_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="director[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';
   			html += '</div>';              
             return html;
        }
        function make_div_for_artist_model(obj){                            
            var html = "";    
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#model" aria-expanded="true" aria-controls="model">Model';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="model" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', MODEL_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="model[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';             
             return html;
        }
        function make_div_for_artist_productionCrew(obj){                            
            var html = "";
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#productionCrew" aria-expanded="true" aria-controls="productionCrew">Production Crew';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="productionCrew" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', PRODUCTIONCREW_SUB_TALENT); foreach ($talent as $key => $value) {$key=$key+1; ?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="productionCrew[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';
            
             return html;
        }
        function make_div_for_artist_singer(obj){                            
            var html = "";    
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#singer" aria-expanded="true" aria-controls="singer">Singer';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="singer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', SINGER_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="singer[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';             
             return html;
        }
        function make_div_for_artist_stylist(obj){                            
            var html = "";   
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#stylist" aria-expanded="true" aria-controls="stylist">Stylist';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="stylist" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', STYLIST_SUB_TALENT); foreach ($talent as $key => $value) { $key=$key+1;?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="stylist[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';             
             return html;
        }
        function make_div_for_artist_voa(obj){                            
            var html = "";    
            html += '<div class="panel panel-default">';
     		html += '<div class="panel-heading" role="tab" id="headingOne">';
       		html += '<h4 class="panel-title">';
         	html += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#voa" aria-expanded="true" aria-controls="voa">Voice Over Artist';
         	html += '</a>';
       		html += '</h4>';
     		html += '</div>';
     		html += '<div id="voa" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
       		html += '<div class="panel-body">';
    		html += '<?php $talent=explode(',', VOA_SUB_TALENT); foreach ($talent as $key => $value) {$key=$key+1; ?>';
    		html += '<div class="checkbox checkbox-inline">';
      		html += '<input type="checkbox" name="voa[]" value="<?php echo $value; ?>">';
      		html += '<label for="checkbox3"><?php echo $value; ?></label>';
		    html += '</div>';
		    html += '<?php } ?>';
       		html += '</div>';
     		html += '</div>';             
             return html;
        }
        function make_div_for_artist_comedian(obj){                            
            var html = "";
            html += '<input type="hidden" name="comedian[]" value="true">';    
            return html;
        }
        function make_div_for_artist_ja(obj){                            
            var html = "";
            html += '<input type="hidden" name="ja[]" value="true">';    
            return html;
        }
        function make_div_for_artist_musician(obj){                            
            var html = "";
            html += '<input type="hidden" name="musician[]" value="true">';    
            return html;
        }
        function make_div_for_artist_sw(obj){                            
            var html = "";
            html += '<input type="hidden" name="sw[]" value="true">';    
            return html;
        }
		$("#btnArtistSubTalentRegister").click(function(){
			 var serializedForm = $("#frmAddTalents").serialize();
      $.ajax({
        type: "POST",
        url:  '<?php echo base_url('artist/artist_sub_talent/'); ?>',
        data: $("#frmAddTalents").serialize(),
        dataType: 'json',
        }).done(function(res) {
          console.log(res);
          
          if (res.status == 'success') {
            console.log(res);
              //$('#successHomepage').modal('show');
          }
      });
        });	*/
	</script>
</html>

