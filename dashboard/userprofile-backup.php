<style type="text/css">
  .navbar.navbar-transparent
  {
    background-color: #000 !important;
  }
</style>


<!-- Tabs -->
<section id="tabs">
  <div class="container">
       <div class="row">
          
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 "> My Profile/Edit Profile</h4>
                   
                </div>
              </div>
            </div>
          </div>
    <!-- <h2 class="section-title ">Job Applications</h2> -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
            <a class="nav-item nav-link pendingApplicationList" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Work Experience</a>
            <a class="nav-item nav-link rejectedApplicationList" id="nav-award-tab" data-toggle="tab" href="#nav-award" role="tab" aria-controls="nav-award" aria-selected="false">Awards & Recognitions</a>
             <a class="nav-item nav-link rejectedApplicationList" id="nav-socialLink-tab" data-toggle="tab" href="#nav-socialLink" role="tab" aria-controls="nav-socialLink" aria-selected="false">Social Links</a>
              <a class="nav-item nav-link rejectedApplicationList" id="nav-associations-tab" data-toggle="tab" href="#nav-associations" role="tab" aria-controls="nav-associations" aria-selected="false">Associations</a>
          
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
<!-- Profile Section -->
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
                    <h3 class="txtred">Profile</h3>
                <p class="txtred">Tell us more about yourself</p>
                 </div>
               </div>
           <div class="ProfileView" style="background-color: #fff;">
              <div class="profileForm" style="    padding: 1px 20px 0px 20px;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data">
                   <?php 
                      foreach ($result as $value) { ?>
                  <div class="row">
                    <div class="col-lg-4" style="background-color: #eee;">
                                     <div class="picture-container" style="position: relative;top: 17%;">
                                          <div class="picture">
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/sample-user.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 100%;margin: 0 auto;border-radius: 10%;"/>

                                              <input type="file" id="profile_pic"  name="profile_pic" style="padding-top: 20px;">
                                          </div>
                                          <h5>Choose Picture</h5>
                                      </div>
                                  
                    </div>

                      <!-- ************** -->
                     <div class="col-lg-8">
                               <div class="row">
                                 <div class="col-lg-6">
                                      <div class="form-group required" >
                                        <label>Office  Name
                                         <!-- <small>(required)</small> -->
                                       </label>
                                        <input type="text" readonly class="form-control" id="companyName" value="<?php echo $value['official_name'];?>" name="companyName" >
                                      </div>
                                      <div class="form-group required">
                                          <label>Official Email ID 
                                            <!-- <small>(required)</small> -->
                                          </label>
                                        <input type="email" readonly name="email" id="email" class="form-control" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id">
                                      </div>
                                      <div class="form-group required">
                                        <label>Contact No. 
                                          <!-- <small>(required)</small> -->
                                        </label>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" value="<?php echo $value['contact_no'];?>" placeholder="Enter Contact Number">
                                      </div>
                                   <div class="form-group">
                                        <label>Upload Script</label>
                                         <div class="input-group">
                                        <span class="input-group-btn ">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="script_name"  id="script_name" class="form-control">
                                         </span>
                                         </span>
            
                                          </div>
                                         <img id='img-upload'/>
                                      </div>

                                <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="terms" id="terms" value="1"> I agree with the Terms and Conditions
                                    </label>
                                  </div> -->
                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6">
                                      <div class="form-group required">
                                        <label> City 
                                          <!-- <small>(required)</small> -->
                                        </label>
                                          <input type="text" name="city" id="city" class="form-control" value="<?php echo $value['city'];?>" placeholder="Enter City Name">

                                        <!--<select name="cities" id="city" class="form-control">
                                          <option>Delhi</option>
                                          <option>Mumbai</option>
                                        </select>-->
                                      </div>
                                      <div class="form-group">
                                          <label>Pin Code </label>
                                          <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $value['pin_code'];?>" placeholder="Enter Pin Code">
                                      </div>
                                      <div class="form-group">
                                        <label>Official Address </label>
                                        <input class="form-control" name="address" id="address" rows="5" value="<?php echo $value['address'];?>" id="comment" placeholder="Enter office Adress">
                                      </div>
                                  
                                  </div>
                                   <?php } ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
              </div>
           </div>
        
          </div>
<!-- End Profile Section -->
<!-- Work Experience Section -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 class="txtred">Work Experience</h3>
                <p class="txtred">Tell us more about yourself</p>
                 </div>
               </div>
           <div id="workExperienceView" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      // foreach ($projectType as $project) { ?>
                  <div class="row">
                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                                 <div class="col-lg-6">
                                      <div class="form-group required">
                                        <label>Project Type
                                         <!-- <small>(required)</small> -->
                                       </label>
                                        <input type="text"  class="form-control" id="companyName" value="
                                        <?php //echo $project['project_type_name'];?>
                                        " name="companyName" >
                                      </div>
                                      <div class="form-group required">
                                          <label>Production Name 
                                            <!-- <small>(required)</small> -->
                                          </label>
                                        <input type="email"  name="email" id="email" class="form-control" value="">
                                      </div>
                                      <div class="form-group">
                                        <label>Link If Any <small></small></label>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" value="">
                                      </div>
                                     

                                <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="terms" id="terms" value="1"> I agree with the Terms and Conditions
                                    </label>
                                  </div> -->
                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6">
                                      <div class="form-group required">
                                        <label> Project Title 
                                          <!-- <small>(required)</small> -->
                                        </label>
                                          <input type="text" name="city" id="city" class="form-control" value="">

                                        <!--<select name="cities" id="city" class="form-control">
                                          <option>Delhi</option>
                                          <option>Mumbai</option>
                                        </select>-->
                                      </div>
                                      <div class="form-group required">
                                          <label>Year </label>
                                          <input type="text" name="pincode" id="pincode" class="form-control" value="">
                                      </div>
                                      <div class="form-group">
                                        <label>Additional Details </label>
                                        <input class="form-control" name="address" id="address" rows="5" value="" id="comment">
                                      </div>
                                   
                                  </div>
                                   <?php //} ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
           </div>

          </div>
<!-- End Work Experience section -->
<!-- Awards And Recognition section -->
          <div class="tab-pane fade" id="nav-award" role="tabpanel" aria-labelledby="nav-award-tab">
               <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 class="txtred">Awards & Recognition </h3>
                <p class="txtred">Tell us more about your awards</p>
                 </div>
               </div>
             <div id="awards" style="background-color: #fff;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      // foreach ($projectType as $project) { ?>
                  <div class="row">
                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                                 <div class="col-lg-6">
                                      <div class="form-group required">
                                        <label>Award Title
                                         <!-- <small>(required)</small> -->
                                       </label>
                                        <input type="text"  class="form-control" id="companyName" value="
                                        <?php //echo $project['project_type_name'];?>
                                        " name="companyName" >
                                      </div>
                                    
                                      <div class="form-group required">
                                        <label>Award Year <small></small></label>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" value="">
                                      </div>
                                     

                                <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="terms" id="terms" value="1"> I agree with the Terms and Conditions
                                    </label>
                                  </div> -->
                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6">
                                      <div class="form-group required">
                                        <label> Award For
                                         <!-- <small>(required)</small> -->
                                       </label>
                                          <input type="text" name="city" id="city" class="form-control" value="">

                                        <!--<select name="cities" id="city" class="form-control">
                                          <option>Delhi</option>
                                          <option>Mumbai</option>
                                        </select>-->
                                      </div>
                                      
                                      <div class="form-group">
                                        <label>Additional Details </label>
                                        <input class="form-control" name="address" id="address" rows="5" value="" id="comment">
                                      </div>
                                   
                                  </div>
                                   <?php //} ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
             </div>
          </div>
<!-- End  Awards And Recognition Section  -->
<!-- Social Link Section  -->
             <div class="tab-pane fade" id="nav-socialLink" role="tabpanel" aria-labelledby="nav-socialLink-tab">
               <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 class="txtred">Social Links </h3>
                <p class="txtred">Please provide the supporting social links</p>
                 </div>
               </div>
             <div id="awards" style="background-color: #fff;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      // foreach ($projectType as $project) { ?>
                  <div class="row">
                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                                 <div class="col-lg-6">
                                     
                                    <div class="form-group social-link-input">
                                       <span class="wrapper facebook">

                                       <input type="text" class="social-link-input-class"  id="facebook"  name="facebook"   placeholder="facebook"/>
                                     </span>
                                      </div>


                                        <div class="form-group social-link-input">
                                       <span class="wrapper instagram">

                                       <input type="text" class="social-link-input-class"  id="instagram"  name="instagram"   placeholder="Instagram"/>
                                     </span>
                                      </div>


                                        <div class="form-group social-link-input">
                                       <span class="wrapper websitelink">

                                       <input type="text" class="social-link-input-class"  id="WebsiteLink"  name="WebsiteLink"   placeholder="Website Link"/>
                                     </span>
                                      </div>
                                    

                                     <!--  <div class="form-group">
                                       <i class="fa fa-facebook social-media-icons" aria-hidden="true"></i> <label>Facebook</label>
                                        <input type="text"  class="form-control" id="companyName" value="
                                        <?php //echo $project['project_type_name'];?>
                                        " name="companyName" >
                                      </div> -->
                                    
                                     <!--  <div class="form-group">
                                        <i class="fa fa-instagram social-media-icons" aria-hidden="true" style="padding: 4px 7px 6px 7px;"></i> <label>Instagram</label>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" value="">
                                      </div> -->
                                      <!--  <div class="form-group">
                                         <i class="fa fa-globe social-media-icons" aria-hidden="true" style="    padding: 4px 7px 3px 6px;"></i> <label>Website Link</label>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" value="">
                                      </div> -->
                                     

                                <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="terms" id="terms" value="1"> I agree with the Terms and Conditions
                                    </label>
                                  </div> -->
                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6">
                                     
                                        <div class="form-group social-link-input">
                                       <span class="wrapper twitter">

                                       <input type="text" class="social-link-input-class"  id="twitter"  name="twitter"   placeholder="Twitter"/>
                                     </span>
                                      </div>

                                        <div class="form-group social-link-input">
                                       <span class="wrapper youtube">

                                       <input type="text" class="social-link-input-class"  id="youtube"  name="youtube"   placeholder="YouTube"/>
                                     </span>
                                      </div>

                                        <div class="form-group social-link-input">
                                       <span class="wrapper IMDB">

                                       <input type="text" class="social-link-input-class"  id="IMDB"  name="IMDB"   placeholder="IMDB"/>
                                     </span>
                                      </div>

                                      <!-- <div class="form-group">
                                         <i class="fa fa-twitter social-media-icons" aria-hidden="true" style="    padding: 4px 7px 3px 6px;"></i> <label>Twitter</label>
                                          <input type="text" name="city" id="city" class="form-control" value="">

                                       <select name="cities" id="city" class="form-control">
                                          <option>Delhi</option>
                                          <option>Mumbai</option>
                                        </select>-->
                                      <!-- </div> -->
                                      
                                     <!--  <div class="form-group">
                                        <i class="fa fa-youtube-play social-media-icons" aria-hidden="true" style="padding: 6px 8px 6px 7px;"></i> <label>YouTube</label>
                                        <input class="form-control" name="address" id="address" rows="5" value="" id="comment">
                                      </div> -->
                                      <!--  <div class="form-group">
                                        <i class="fa fa-imdb social-media-icons" aria-hidden="true" style="    padding: 6px 9px 6px 9px;"></i> <label>IMDB</label>
                                        <input class="form-control" name="address" id="address" rows="5" value="" id="comment">
                                      </div> -->
                                   
                                  </div>
                                   <?php //} ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
             </div>
          </div>
<!-- End Social Link Section  -->
<!--       Associations Section  -->

    <div class="tab-pane fade" id="nav-associations" role="tabpanel" aria-labelledby="nav-associations-tab">
               <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 class="txtred">Associations</h3>
                <p class="txtred">Tell us more about your associations</p>
                 </div>
               </div>
             <div id="awards" style="background-color: #fff;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      // foreach ($projectType as $project) { ?>
                  <div class="row">
                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                                 <div class="col-lg-6">
                                      <div class="form-group required">
                                      <label>Association Name</label>
                                        <input type="text"  class="form-control" id="companyName" value="
                                        <?php //echo $project['project_type_name'];?>
                                        " name="companyName" >
                                      </div>
                                  
                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg -6">
                                      <div class="form-group required">
                                        <label>Association ID</label>
                                          <input type="text" name="city" id="city" class="form-control" value="">
                                      </div>
                                    
                                   
                                  </div>
                                   <?php //} ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
             </div>
          </div>
 <!--  End Associations  -->
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->
<script type="text/javascript">
  // $(".btnDirectorGeneralDetails").click(function(e)
// {
  // alert(1);
  // $("#workExperienceView").show();
  //   e.preventDefault();
  //   $.ajax({

  //       url:'<?php// echo base_url('dashboard/pendingApplications')?>',
  //       success:function(response){
           
  //          $("#workExperienceView").html(response);

//            // console.log(response);
//         }
//    });

// });
//    $(".rejectedApplicationList").click(function(e)
// {
  // alert(1);
  // $("#rejectedApplicationListData").show();
  //   e.preventDefault();
  //   $.ajax({

  //       url:'<?php// echo base_url('dashboard/rejectedApplications')?>',
  //       success:function(response){
           
  //          $("#rejectedApplicationListData").html(response);

           // console.log(response);
//         }
//    });

// });


</script>
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
                // form_data.append("password", $('#password').val());
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
                  // window.location.href="<?php //echo base_url('director/editDirectorProfile')?>";
                  // $("#workExperienceView").html(res.status);
                 // alert(1);
                  
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                $("#workExperienceView").show();
              });
      }
      function directorFormValidate()
          {   
        var status = true;         
        var companyName=$("#companyName").val();
        var email=$("#email").val();
        var mobile=$("#mobile").val();
        // var password=$("#password").val();
        var address=$("#address").val();
        var pincode=$("#pincode").val();
        var city=$("#city").val();
        // var confirmPassword=$("#confirmPassword").val();    
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
              // else if(password.trim() != confirmPassword.trim()) { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Confirm your Password<strong>");
              //   status = false;
              // } 
              return status;
              console.log(status);
          }
            
        });
  </script>



