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
        
<?php echo include_once('adminlogin_nav.php'); ?>
        
<div class="container">
        
        <br><br><br><br>
        <div class="container">
        
           <div class="row">
            <div class="col-lg-4 col-md-4 artistdashboard_leftsction">
               <img class="img-responsive" src="<?php echo base_url()?>assets/images/sample-user.jpg">
                <h3><?php echo "Company Name:" .$this->session->userdata('OFFICIAL_NAME');?></h3>
                 <p><?php echo "Email-id:" .$this->session->userdata('EMAIL_ID');?></p>
                 <br>
                  <a href="<?php echo base_url('admin/editAdminProfile')?>">
                      <div class="green-btnfull">
                     Edit My Profile
                      </div>
                  </a>
                  <a href="<?php echo base_url('admin/manage_directors')?>">
                      <div class="green-btnfull">
                     Manage Directors
                      </div>
                  </a>
                   <a href="<?php echo base_url('admin/job_post_request')?>">
                      <div class="green-btnfull">
                     Job Post Request </div>
                  </a>
                   <a href="<?php echo base_url('admin/manage_artists')?>">
                      <div class="green-btnfull">
                    Manage Artist </div>
                  </a>
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
                          <input type="text" readonly class="form-control" id="official_name" value="<?php echo $value['official_name'];?>" name="official_name" placeholder="Enter Company/ Official Name">
                        </div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                          <input  type="phone" name="mobile" id="mobile" class="form-control" value="<?php echo $value['mobile_no'];?>" placeholder="Enter Contact Number">
                        </div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          <input  type="email" readonly name="email" id="email" class="form-control" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id">
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
                          <input type="file" name="profile_pic" id="profile_pic" class="form-control">
                          <?php if($value['profile_pic'] != "") { ?>
                           <img src="<?=base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="img-responsive" style="max-height: 150px; max-width: 150px;">
                          <?php } ?>
                        </div>   
                        <?php } ?>
                      <div id="error-box"></div>
                      <div class="col-md-12 text-center">
                        <center><button type="button" name="submit" id="btnAdminProfile" class="btn-default green-btn">Update</button></center>
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

   $("#btnAdminProfile").click(function(){
      var validation_status = adminFormValidate();
       console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form = $('form')[0];
        var form_data = new FormData(form);
                form_data.append('profile_pic', $('input[type=file]')[0].files[0]);   
                form_data.append("official_name", $('#official_name').val());
                form_data.append("email", $('#email').val());    
                form_data.append("mobile", $('#mobile').val()); 
                form_data.append("password", $('#password').val());

                $.ajax({
                  url: '<?php echo base_url('admin/admin_editProfile/'); ?>',
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
                  window.location.href="<?php echo base_url('admin/editAdminProfile')?>";
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
      function adminFormValidate()
          {   
              var status = true;         
              var official_name=$("#official_name").val();
              var email=$("#email").val();
              var mobile=$("#mobile").val();
              var password=$("#password").val();
              var confirmPassword=$("#confirmPassword").val();    
              if(official_name.trim() == '') { 
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

