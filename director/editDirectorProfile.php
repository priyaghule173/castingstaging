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
        #error-box{
          color: red;
          font-size: 11px;
        }
            .fh5co-cover{
                height: auto;
            }
        
            .input-group{
                margin-bottom: 10px;
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
                   <h1 class="header1 text-uppercase text-center">Edit Profile</h1>
                     <p class="paragraph_text text-center">Loreum Loreum Loreum</p>
                  <br>
                     
                     <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                        <form action="" method="post" enctype="multipart/form-data">
                          <?php 
                           foreach ($result as $value) { ?>
                           
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                          <input type="text" readonly class="form-control" id="companyName" value="<?php echo $value['official_name'];?>" name="companyName" placeholder="Enter Company/ Official Name">
                        </div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                          <input  type="phone" name="mobile" id="mobile" class="form-control" value="<?php echo $value['contact_no'];?>" placeholder="Enter Contact Number">
                        </div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          <input  type="email" readonly name="email" id="email" class="form-control" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id">
                        </div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                          <input type="text" name="city" id="city" class="form-control" value="<?php echo $value['city'];?>" placeholder="Enter City Name">
                        </div>   
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                          <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $value['pin_code'];?>" placeholder="Enter Pin Code">
                        </div>   
                                  <div class="form-group">
                        <textarea class="form-control" name="address" id="address" rows="5" value="<?php echo $value['address'];?>" id="comment" placeholder="Enter office Adress"><?php echo $value['address'];?></textarea>
                        </div>
                               <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                          <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="Enter New Password">
                        </div>   
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                          <input type="password" name="confirmPassword" autocomplete="off" id="confirmPassword"  class="form-control" placeholder="Confirm Password">
                        </div> 
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                          <button class="addfiles">Upload Pic</button>
                          <input type="file" name="profile_pic" style='display: none;' id="profile_pic" class="form-control">
                          <?php if($value['profile_pic'] != "") { ?>
                           <img src="<?=base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="img-responsive" style="max-height: 150px; max-width: 150px;">
                          <?php } ?>
                        </div>   
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                          <button class="addscript">Upload Script</button>
                          <input type="file" name="script_name" style='display: none;' id="script_name" class="form-control">
                        
                          </div>   
                        <?php } ?>
                      <div id="error-box"></div>
                      <div class="col-md-12 text-center">
                        <center><button type="button" name="submit" id="btnDirectorProfile" class="btn-default green-btn">Update</button></center>
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

$('.addfiles').on('click', function() { $('#profile_pic').click();return false;});
$('.addscript').on('click', function() { $('#script_name').click();return false;});

   $("#btnDirectorProfile").click(function(){
      var validation_status = directorFormValidate();
      //console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form = $('form')[0];
        var form_data = new FormData(form);
                form_data.append('profile_pic', $('input[type=file]')[0].files[0]);   
                form_data.append('script_name', $('input[type=file]')[1].files[0]);   
                form_data.append("companyName", $('#companyName').val());
                form_data.append("email", $('#email').val());    
                form_data.append("mobile", $('#mobile').val()); 
                form_data.append("password", $('#password').val());
                form_data.append("address", $('#address').val());    
                form_data.append("pincode", $('#pincode').val()); 
                form_data.append("city", $('#city').val());

                $.ajax({
                  url: '<?php echo base_url('director/director_editProfile/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                console.log(res);
              if(res.status="success"){
                  alert("Profile Updated Successfully.");
                  window.location.href="<?php echo base_url('director/editDirectorProfile')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
              });
      }
      function directorFormValidate()
          {   
        var status = true;         
        var companyName=$("#companyName").val();
        var email=$("#email").val();
        var mobile=$("#mobile").val();
        var password=$("#password").val();
        var address=$("#address").val();
        var pincode=$("#pincode").val();
        var city=$("#city").val();
        var confirmPassword=$("#confirmPassword").val();    
              if(companyName.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
                status = false;
              }            
              else if(email.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                status = false;
              }     
              else if(mobile.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your Mobile Number<strong>");
                status = false;
              } 
              else if(address.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your Address<strong>");
                status = false;
              } 
              else if(pincode.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your Pincode<strong>");
                status = false;
              } 
              else if(city.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your City<strong>");
                status = false;
              } 
             /* else if(password.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Your Password<strong>");
                status = false;
              }*/
              else if(password.trim() != confirmPassword.trim()) { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Confirm your Password<strong>");
                status = false;
              } 
              return status;
              console.log(status);
          }
            
        });
  </script>
  </body>
</html>

