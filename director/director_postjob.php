<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Casting Role</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Casting Role" />
	<meta name="keywords" content="" />
	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        
            .fh5co-cover{
                height: auto;
            }
        
            .input-group{
                margin-bottom: 15px;
            }
        .myWizard{

  padding-bottom: 0px !important;
}

        </style>

	</head>
	<body class="ltgreybckground">
		
	<div class="fh5co-loader"></div>
        

	<?php echo include_once('directorlogin_nav.php'); ?>
        
<div class="container">
        
        <br><br><br><br>
        <div class="container">
        
           <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 artistdashboard_leftsction">
               <img class="img-responsive" height="240" width="360" src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $profile->profile_pic; ?>">
                 <h3><?php echo "Company Name:" .$this->session->userdata('OFFICIAL_NAME');?></h3>
                 <p><?php echo "Email-id:" .$this->session->userdata('EMAIL_ID');?></p>
                 <div class="artistdashboard_yellowstrip text-center">
                     <h4>50</h4>
                     <p>Casting Role Tokens</p>
                     <div class="row">
                         <div class="col-lg-12 col-sm-12 col-xs-12">
                           <a class="drkbtn" href="<?php echo base_url('director/casting_role_points')?>">
                   
                         Purchase Tokens  
                     
                     </a>
                         
                         </div>
                     </div>
                    
                 </div>
                 <br>
                  <a href="<?php echo base_url('director/editDirectorProfile')?>">
                    <div class="green-btnfull">
                     Edit My Profile
                      </div>
                    </a>
                <a href="<?php echo base_url('director/director_postjob')?>">
                      <div class="green-btnfull">
                    post a job
                      </div>
                </a>
                 
                  <a href="<?php echo base_url('director/all_posting_jobs')?>">
                      <div class="green-btnfull">
                      All Posting Jobs
                      </div>
                  </a>
                  <a href="<?php echo base_url('director/applications_per_job')?>">
                      <div class="green-btnfull">
                       Job Application Per Job Post
                      </div>
                  </a>
                 
                  <a href="<?php echo base_url('director/artist_approved_appln')?>">
                      <div class="green-btnfull">
                       Application Approved List
                      </div>
                  </a>
                 <!--  <a href="<?php echo base_url('director/casting_role_points')?>">
                      <div class="green-btnfull">
                       My Casting Role Points
                      </div>
                  </a> -->
              </div>
              <div class="col-lg-8">
                 <div class="data_card">
                   <h1 class="header1 text-uppercase text-center"> Post A Job</h1>
                     <p class="paragraph_text text-center">List Down your requirements so we can Look out for best artists in the industry</p>
                  <br>
                     
                     <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                        <form>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" id="title" placeholder="Enter Title of the Job Post">
                        </div>
                                                    
                       <div class="form-group">

                        <select class="form-control" id="artistCategory" style="width:100%;">
                       <option value="none" selected>Select The Type of Artist Category</option>
                         <?php  $talent = $this->db->select('*')->from('talent')->get()->result_array();
                       foreach ($talent as $key) {
                       ?>
                          <option value="<?php echo $key['talent_name']?>"><?php echo $key['talent_name'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
									<textarea class="form-control" rows="5" id="jobDescription" placeholder="Enter Job Description"></textarea>
								</div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="ageFrom" placeholder="Age Group from">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" id="ageUpto" placeholder="Age Group upto">
                    </div>
                  </div>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="languages" placeholder="Languages Known">
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="location" placeholder="Location">
                  </div>  
                   <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <input type="date" class="form-control" onchnage="showDate('this.value')" id="date" placeholder="Job Post Date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                      <?php 
                        $date = new DateTime(); // Y-m-d
                        $date->add(new DateInterval('P30D'));
                        $expire_date = $date->format('Y-m-d') . "\n";
                       ?>
                      <input type="text" readonly class="form-control" value="<?php echo $expire_date; ?>" id="Expired_date"  placeholder="job Expired date">
                    </div>
                  </div>
                  </div>      
                                        
        <br>       
        <div class="input-group">
          <h4 class="ltheader4  text-uppercase">Gender who can apply for this Job</h4>
          <ul class="list-inline">
           <li>
              <label class="chkcontainer">
                   Male
                  <input type="checkbox" name="gender[]" value="male"  id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
               <li>
              <label class="chkcontainer">
                   Female
                  <input type="checkbox" name="gender[]" value="female"  id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
               <li>
              <label class="chkcontainer">
                   Other
                  <input type="checkbox" name="gender[]" value="neutral" id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
          </ul>                                          
        </div>                                          
        <br>
          <div class="input-group">
            <h4 class="ltheader4  text-uppercase">Previous Experience Required?</h4>
            <ul class="list-inline">
            <li>
              <label class="radiocontainer">Yes
              <input type="radio" value="1" checked="checked" name="isExperienceRequired"  id="isExperienceRequired">
              <span class="radiocheckmark"></span>
            </label>
            </li>
           <li>
           <label class="radiocontainer">No
            <input type="radio" value="0" name="isExperienceRequired" id="isExperienceRequired">
            <span class="radiocheckmark"></span>
          </label>
              </li>
          </ul>                                           
    </div>
      <br>
      <div class="input-group">
      <h4 class="ltheader4  text-uppercase">Audition Required or Not?</h4>
      <ul class="list-inline">
       <li>
         <label class="radiocontainer">Yes
        <input type="radio" value="1" checked="checked" name="isAuditionRequired" id="isAuditionRequired">
        <span class="radiocheckmark"></span>
      </label>
      </li>
        <li>
     <label class="radiocontainer">No
        <input type="radio" value="0" name="isAuditionRequired" id="isAuditionRequired">
        <span class="radiocheckmark"></span>
      </label>
      </li>
    </ul>                               
    </div>
        <div class="col-md-12">
          <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
<!--           <input type="hidden" id="directorId" value="<?php echo $dirId= $this->session->userdata('DIRECTOR_ID'); ?>">
 -->						<button type="button" class="btn-default green-btn" id="btnDirJobPost">Post This Job</button><br>
					</div>                                                   
      </form>
      </div>
      </div>
       </div>
      </div>
    </div>
  </div>
 </div>
	<?php echo include_once('footer.php'); ?>


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
<script type="text/javascript">
/*function showDate(ID)
{
 var date_post = ID;
 alert(date_post);
  $.ajax({
        type: "POST",
        url: "<?php echo base_url('director/find_expired_date')?>",
        data: {'date_post': date_post},
        success: function (data) 
        {
          alert(data);
                        
        }
    });
}*/

    $("#btnDirJobPost").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        form_data.append("directorId", $('#directorId').val());
                form_data.append("title", $('#title').val());    
                form_data.append("artistCategory", $('#artistCategory').val()); 
                form_data.append("jobDescription", $('#jobDescription').val());
                form_data.append("ageFrom", $('#ageFrom').val());    
                form_data.append("ageUpto", $('#ageUpto').val()); 
                form_data.append("languages", $('#languages').val());
                form_data.append("location", $('#location').val()); 
                form_data.append("date", $('#date').val());
                $('input[name="gender[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('gender[]', value);
                });
                form_data.append("isExperienceRequired", $('input[name="isExperienceRequired"]:checked').val()); 
                form_data.append("isAuditionRequired", $('input[name="isAuditionRequired"]:checked').val());
                $.ajax({
                  url: '<?php echo base_url('director/director_postjob_data/'); ?>',
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
                  window.location.href="<?php echo base_url('director')?>";
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
              var title=$("#title").val();
              var artistCategory=$("#artistCategory").val();
              var jobDescription=$("#jobDescription").val();
              var ageFrom=$("#ageFrom").val();
              var ageUpto=$("#ageUpto").val();
              var languages=$("#languages").val();
              var location=$("#location").val();    
              var date=$("#date").val();
              var gender=$("#gender").val();
              var isExperienceRequired=$("#isExperienceRequired").val();
              var isAuditionRequired=$("#isAuditionRequired").val();    
              if(title.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Title.<strong>");
                status = false;
              }            
              else if(artistCategory == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Select Artist Category.<strong>");
                status = false;
              }     
              else if(jobDescription.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Description<strong>");
                status = false;
              } 
              else if(ageFrom.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Age from<strong>");
                status = false;
              }
              else if(ageUpto.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Age Upto<strong>");
                status = false;
              } 
              else if(ageFrom>=ageUpto) { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Age from can't be greater than Age upto<strong>");
                status = false;
              } 
              else if(languages.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please add Languages<strong>");
                status = false;
              } 
              else if(location.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Location<strong>");
                status = false;
              }
              else if(date=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please enter date.<strong>");
                status = false;
              } 
              else if(gender=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              return status;
              console.log(status);
          }

            
        }); 
  </script>
	</body>
</html>

