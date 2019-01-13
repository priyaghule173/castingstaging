<style type="text/css">
  .navbar.navbar-transparent
  {
    background-color: #000 !important;
  }
  .view-award-section
  {
    display: none;
  }
  .view-association-section
  {
    display: none;
  }
  .add-work-details
  {
    display: none;
  }

  .closeBotton
  {
    display: none;
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
                                          <div class="picture text-center">
                                              <?php if($value['profile_pic']) { ?>
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
                                            <?php }else { ?>
                                                
                                                 <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
                                            <?php } ?>

                                              <div class="form-group text-center">
                                        <label>Choose Profile photo</label>
                                         <div class="input-group">
                                        <span class="input-group-btn" style="margin: 0 auto;">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="profile_pic"  id="profile_pic" class="form-control">
                                         </span>
                                         </span>
            
                                          </div>
                                         <img id='img-upload'/>
                                      </div>
                                          </div>
                                         
                                      </div>
                                  
                    </div>

                      <!-- ************** -->
                     <div class="col-lg-8">
                               <div class="row">
                                 <div class="col-lg-6">
                                      <div class="form-group required" >
                                        <label>Company  Name
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
                                        <label>Upload Profile</label>
                                         <div class="input-group">
                                        <span class="input-group-btn ">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="script_name"  id="script_name" accept=".pdf,.doc" class="form-control">
                                         </span>
                                         <?php if($value['script_file']){  ?>
                    <label class="txtgreen" id="script-name"> <?php echo $value['script_file']; ?> </label>
             <?php } else{ ?> 
               <label class="txtgreen" id="script-name">  </label>
               <?php } ?>
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
 
            <style type="text/css">
.add-more-block{
  border: 2px solid #ddd;
}
</style>  
 
  <div class="row" style="margin:0 auto">
                <div class="col-lg-12 text-center">
                    <h3 class="txtred">Work Experience</h3>
                <p class="txtred">Tell us more about yourself</p>
                 </div>
               </div>
                <div id="workExperienceView" style="background-color: #fff;">
    
  
        <form class="form-inline" action="" method="post">
          <div class="col-md-12 text-center">
            <br>
           <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
          </div>
          <div class="video-box1 col-md-12">
            
            <div class="pull-right col-md-12">
                          <a href="javascript:void(0);" class="addWorkBtnDemo" onclick="Workdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Work Experience</label></a>
                      </div>
            <div class="add-more-block row">
              <div class="col-md-6">
                <div class="form-group required">
                                        <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="project_type" value="<?php echo $value['project_type'];?>" name="project_type" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  name="production_name" value="<?php echo $value['production_name'];?>"  id="production_name" class="form-control">
                                      </div>
              
                <div class="form-group">
                                        <label>Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="link" id="link" value="<?php echo $value['link'];?>"  class="form-control" value="">
                                      </div>
              </div>
              <div class="col-md-6">
                <div class="form-group required">
                                        <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title" value="<?php echo $value['project_title'];?>"  id="project_title" class="form-control" value="">

                                      </div>
              
             
                <div class="form-group required">
                                          <label>Year </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="year" value="<?php echo $value['year'];?>"  id="year" class="form-control" value="">
                                      </div>
           
                <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="additional_info" id="additional_info" value="<?php echo $value['additional_info'];?>"  >
                                      </div>
              </div>


            </div>  
          </div>




            <div class="video-box col-md-12 add-work-details" >
            <!--   <a href="#" class="close"></a> -->
                
        
           <!-- <div class="video-box1 col-md-12"> -->
          <div class="add-more-block row">
              <div class="col-md-6">
                <div class="form-group required">
                                        <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="project_type1" value="<?php echo $value['project_type1'];?>" name="project_type1" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  name="production_name1" value="<?php echo $value['production_name1'];?>"  id="production_name1" class="form-control">
                                      </div>
              
                <div class="form-group">
                                        <label>Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="link1" id="link1" value="<?php echo $value['link1'];?>"  class="form-control" value="">
                                      </div>
              </div>
              <div class="col-md-6">
                <div class="form-group required">
                                        <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title1" value="<?php echo $value['project_title1'];?>"  id="project_title1" class="form-control" value="">

                                      </div>
              
             
                <div class="form-group required">
                                          <label>Year </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="year1" value="<?php echo $value['year1'];?>"  id="year1" class="form-control" value="">
                                      </div>
           
                <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="additional_info1" id="additional_info1" value="<?php echo $value['additional_info1'];?>"  >
                                      </div>
              </div>


            </div>  
          </div>



           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnArtistEducationRegister">Save</button>
                       </div>
                  
        </form> 
     </div>
  </div>

  
 
  <script type="text/javascript">
    function Workdemo()
{
   // alert(1);
   $('.add-work-details').show();




   // $('.Workdemo.').on('click', '.remove_btn_edu', function (e) {
   //          e.preventDefault();
   //          var num = $(this).attr('data-num');
   //          $(this).closest('.add-more-block').remove();
   //          num--;
   //      });
}


function onclick()
{
  $('.add-work-details').hide(); 
}

// function close()
// {
//    // alert(1);
//    $('.add-work-details').hide();
//    $('.closeBotton').show();
// }
//     // $(document).ready(function () {
    //   var maxField = 3;
    //     var addVideoBtn1 = $('.add_video_btn1');
        
    //     var video_wrapper = $('.video-box1');
        
    //     var video_x = 1;
    //     var video_num = 1;
    //     $(addVideoBtn).click(function () {
         
    //          $('.add-work-details').show();
      
        // $(addVideoBtn1).click(function () {
        //     if (video_x < maxField) {
        //         var fieldHTML = '';
        //   fieldHTML += '<div class="add-more-block row">';
        // fieldHTML += '<div class="col-md-5">';
        // fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label>Project Type</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
       
        //  fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label>Production Name</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
        
       
        // fieldHTML += '<div class="form-group">';
        // fieldHTML += '<label>Link If Any <small></small></label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
        // fieldHTML += '</div>';
        
        

        // fieldHTML += '<div class="col-md-5">';
        // fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label> Project Title</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';

        // fieldHTML += '<div class="form-group required">';
        // fieldHTML += '<label>Year</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';


        // fieldHTML += '<div class="form-group">';
        // fieldHTML += '<label>Additional Details </label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
        // fieldHTML += '</div>';
        

        
        // fieldHTML += '<div class="col-md-2">';
        // fieldHTML += '<a href="javascript:void(0);" class="remove_btn_edu pull-right" title="Remove field" data-num="' + video_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
        // fieldHTML += '</div>';
        
        // fieldHTML += '</div>';
        //         video_x++;
        //         video_num++;
        //         $(video_wrapper).append(fieldHTML);
        //     }
        // });
        
       
    //     $(video_wrapper).on('click', '.remove_btn_edu', function (e) {
    //         e.preventDefault();
    //         var num = $(this).attr('data-num');
    //         $(this).closest('.add-more-block').remove();
    //         num--;
    //     });
       
    // });
    
            
        $("#btnDirectorWorkexp").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("project_type", $('#project_type').val());    
                form_data.append("project_title", $('#project_title').val()); 
                form_data.append("production_name", $('#production_name').val());
                form_data.append("year", $('#year').val());    
                form_data.append("link", $('#link').val()); 
                form_data.append("additional_info", $('#additional_info').val());


                form_data.append("project_type1", $('#project_type1').val());    
                form_data.append("project_title1", $('#project_title1').val()); 
                form_data.append("production_name1", $('#production_name1').val());
                form_data.append("year1", $('#year1').val());    
                form_data.append("link1", $('#link1').val()); 
                form_data.append("additional_info1", $('#additional_info1').val());

                
                $.ajax({
                  url: '<?php echo base_url('director/director_workexp/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Work Experience Successfully.");
                  window.location.href="<?php echo base_url('dashboard')?>";
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
      var project_type=$("#project_type").val();
      var project_title=$("#project_title").val();
      var production_name=$("#production_name").val();
      var year=$("#year").val();
      var link=$("#link").val();
      var additional_info=$("#additional_info").val();

      var project_type1=$("#project_type1").val();
      var project_title1=$("#project_title1").val();
      var production_name1=$("#production_name1").val();
      var year1=$("#year1").val();
      var link1=$("#link1").val();
      var additional_info1=$("#additional_info1").val();


              if(project_type.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Project Type.<strong>");
                status = false;
              }            
              else if(project_title.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Project Title.<strong>");
                status = false;
              }     
              else if(production_name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(year.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Year.<strong>");
                status = false;
              } 
              else if(link.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Link.<strong>");
                status = false;
              } 
              else if(additional_info.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Additional Info<strong>");
                status = false;
              } 
              
              return status;
              console.log(status);
          }

            
        });   
  </script>

<!-- End Work Experience section -->
<!-- Awards And Recognition section -->
          <div class="tab-pane fade" id="nav-award" role="tabpanel" aria-labelledby="nav-award-tab">

<style type="text/css">
.add-more-block{
  border: 2px solid #ddd;
}
</style>  
 
  <div class="row" style="margin:0 auto">
                <div class="col-lg-12 text-center">
                    <h3 class="txtred">Awards And Recognition</h3>
                <p class="txtred">Tell us more about awards</p>
                 </div>
               </div>
                <div id="workExperienceView" style="background-color: #fff;">
    
  
        <form class="form-inline" action="" method="post">
          <div class="col-md-12 text-center">
            <br>
           <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
          </div>
          <div class="video-box col-md-12">
            
            <div class="pull-right col-md-12">
                          <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Awards/Recognitions</label></a>

                        <!-- <button class="addVideoBtnDemo" type="button" onclick="demo()"> Hiii</button>-->
                      </div>
            <div class="add-more-block row">
              <div class="col-md-6">
               <div class="form-group required">
                                        <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="award_title" value="<?php echo $value['award_title'];?>"  name="award_title">
                                      </div>
            
             
                <div class="form-group required">
                                        <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="award_year" id="award_year" class="form-control" value="<?php echo $value['award_year'];?>" >
                                      </div>
              
               
              </div>
              <div class="col-md-6">
                                        <div class="form-group required">
                                        <label> Award For  
                                        </label>&nbsp;&nbsp;&nbsp;
                                      
                                        <input type="text" name="award_for" id="award_for" value="<?php echo $value['award_for'];?>"  class="form-control" value="">
                                        </div>
             
                                        <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="add_details" id="add_details" value="<?php echo $value['add_details'];?>" >
                                        </div>
           
               
              </div>
              </div>

              </div> 
              <div class="video-box col-md-12 view-award-section">
              <div class="add-more-block row">
            
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                      <input type="text"  class="form-control" id="award_title1" value="<?php echo $value['award_title1'];?>"  name="award_title1">
                                      </div>
                                       
                                       <div class="form-group required">
                                        <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="award_year1" id="award_year1" class="form-control" value="<?php echo $value['award_year1'];?>" >
                                      </div>
              
                                    
              </div>
              <div class="col-md-6">
               <div class="form-group required">
                                        <label> Award For</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="award_for1" id="award_for1" value="<?php echo $value['award_for1'];?>"  class="form-control" value="">

                                        </div>
             
                                        <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="add_details1" id="add_details1" value="<?php echo $value['add_details1'];?>" >
                                      </div>
                                      </div>
                                      </div>
                                       </div>
                                       
 
           
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnArtistEducationRegister">Save</button>
                       </div>
                  
        </form> 
     </div>
  </div>

  
 
  <script type="text/javascript">
function demo()
{
   // alert(1);
   $('.view-award-section').show();
}


    // $(document).ready(function () {



    //   var maxField = 3;
    //     var addVideoBtn = $('.add_video_btn1');
        
    //     var video_wrapper = $('.video-box');
        
    //     var video_x = 1;
    //     var video_num = 1;
      
    //     $(addVideoBtn).click(function () {

    //       $('.view-award-section').show();

        //     if (video_x < maxField) {
        //         var fieldHTML = '';
        //   fieldHTML += '<div class="add-more-block row">';
        // fieldHTML += '<div class="col-md-5">';
        // fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label>Award Title</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
       
        //  fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label>Award Year</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';
        
        

        // fieldHTML += '<div class="col-md-5">';
        // fieldHTML += '<div class="form-group required">';
        // fieldHTML += ' <label> Award For</label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';

        // fieldHTML += '<div class="form-group ">';
        // fieldHTML += '<label>Additional Details </label>';
        // fieldHTML += '<input type="text" name="" class="form-control">';
        // fieldHTML += '</div>';


        
        // fieldHTML += '<div class="col-md-2">';
        // fieldHTML += '<a href="javascript:void(0);" class="remove_btn_edu pull-right" title="Remove field" data-num="' + video_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
        // fieldHTML += '</div>';
        
        // fieldHTML += '</div>';
        //         video_x++;
        //         video_num++;
        //         $(video_wrapper).append(fieldHTML);
        //     }
        // });
        
       
    //     $(video_wrapper).on('click', '.remove_btn_edu', function (e) {
    //         e.preventDefault();
    //         var num = $(this).attr('data-num');
    //         $(this).closest('.add-more-block').remove();
    //         num--;
    //     });
       
    // });
  </script>
            
            <script type="text/javascript">
   
        $("#btnDirectorAward").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("award_title", $('#award_title').val());    
                form_data.append("award_for", $('#award_for').val()); 
                form_data.append("award_year", $('#award_year').val());
                form_data.append("add_details", $('#add_details').val());  



                form_data.append("award_title1", $('#award_title1').val());    
                form_data.append("award_for1", $('#award_for1').val()); 
                form_data.append("award_year1", $('#award_year1').val());
                form_data.append("add_details1", $('#add_details1').val());  
             
                $.ajax({
                  url: '<?php echo base_url('director/dir_award/'); ?>',

                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Award & Recognition Updated Successfully.");
                  window.location.href="<?php echo base_url('dashboard')?>";
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
      var award_title=$("#award_title").val();
      var award_for=$("#award_for").val();
      var award_year=$("#award_year").val();
      var add_details=$("#add_details").val();

      var award_title1=$("#award_title1").val();
      var award_for1=$("#award_for1").val();
      var award_year1=$("#award_year1").val();
      var add_details1=$("#add_details1").val();
     
              if(award_title.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Award Title.<strong>");
                status = false;
              }            
              else if(award_for.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Award For.<strong>");
                status = false;
              }     
              else if(award_year.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Award Year.<strong>");
                status = false;
              } 
              
              else if(add_details.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Additional Details.<strong>");
                status = false;
              } 
              
              return status;
              console.log(status);
          }

            
        });   
  </script>
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
                     <?php foreach($result as $value){
              ?>
                  <div class="row">
                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                                 <div class="col-lg-6">
                                     
                                    <div class="form-group social-link-input">
                                       <span class="wrapper facebook">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['facebook_url'];?>"  id="facebook"  name="facebook"   placeholder="facebook"/>
                                     </span>
                                      </div>


                                        <div class="form-group social-link-input">
                                       <span class="wrapper instagram">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['instagram_url'];?>"  id="instagram"  name="instagram"   placeholder="Instagram"/>
                                     </span>
                                      </div>


                                        <div class="form-group social-link-input">
                                       <span class="wrapper websitelink">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['website_url'];?>"  id="website"  name="website"   placeholder="Website Link"/>
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

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['twitter_url'];?>" id="twitter"  name="twitter"   placeholder="Twitter"/>
                                     </span>
                                      </div>

                                        <div class="form-group social-link-input">
                                       <span class="wrapper youtube">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['youtube_url'];?>"  id="youtube"  name="youtube"   placeholder="YouTube"/>
                                     </span>
                                      </div>

                                        <div class="form-group social-link-input">
                                       <span class="wrapper IMDB">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['imdb_url'];?>" id="imdb"  name="imdb"   placeholder="IMDB"/>
                                     </span>
                                      </div>

                                     
                                  </div>
                                   <?php } ?>
                                     <div class="col-lg-12 text-right">
                                    <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirSocialLinks">Save</button>
                                     
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
          <script type="text/javascript">
   
        $("#btnDirSocialLinks").click(function(){
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
                  url: '<?php echo base_url('director/dir_social_links/'); ?>',

                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Social Link Updated Successfully.");
                  window.location.href="<?php echo base_url('dashboard')?>";
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

<!-- End Social Link Section  -->
<!--       Associations Section  -->
<!-------new page-------- >

  <!-----new page end here ------------>





    <div class="tab-pane fade" id="nav-associations" role="tabpanel" aria-labelledby="nav-associations-tab">
<style type="text/css">
  .add-more-block{
  border: 2px solid #ddd;
}
</style>
      
 

    
  
  
        <div class="row" style="margin:0 auto">
         
                 <div class="col-lg-12 text-center">
                    <h3 class="txtred">Associations</h3>
                <p class="txtred">Tell us more about your associations</p>
                 </div>
               </div>
         <div id="awards" style="background-color: #fff;">
        <form class="form-inline" action="" method="post">
          <div class="col-md-12 text-center">
            <br>
            <!-- <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
          </div>

          <div class="video-box col-md-12">
            


            <div class="pull-right col-md-12" style="
    margin-bottom: 20px;">
              
                          <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Associations</label></a>
                      </div>





  <div class="add-more-block row" style="
    
    margin-bottom: 20px;">
    <!-- background-color: #ddd;margin: 0px"> -->
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label>Association Name</label> &nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" id="association_name" name="association_name" value="<?php echo $value['association_name'];?>" >
                                      </div>
                                  
                                  </div>
               <div class="col-md-6">
                                      <div class="form-group required">
                                        <label>Association ID</label> &nbsp;&nbsp;&nbsp;
                                        <input type="text" name="association_id" id="association_id" value="<?php echo $value['associaton_id'];?>" class="form-control">
                                      </div>
                                    
                                   
                                  </div>
              
              
              
            </div>  
          </div>


           <div class="video-box col-md-12 view-association-section">
              <div class="add-more-block row" style="
    
    margin-bottom: 20px;">

   <!--  <style="background-color: #ddd;></style> -->
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label>Association Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" id="association_name1" name="association_name1" value="<?php echo $value['association_name1'];?>" >
                                      </div>
                                  
                                  </div>
               <div class="col-md-6">
                                      <div class="form-group required">
                                        <label>Association ID</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="association_id1" id="association_id1" value="<?php echo $value['association_id1'];?>" class="form-control">
                                      </div>
                                    
                                   
                                  </div>

                                </div>
                              </div> 

                          <!-- <div class="row  pull-right"> -->
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnDirectorAsso">Save</button>
                       </div>
                    
          
        </form>

</div>
</div>
  
  

  <!-- <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div> -->

  
          <script type="text/javascript">

            function Assocdemo()
{
   // alert(1);
   $('.view-association-section').show();
}


      //        $(document).ready(function () {
      // var maxField = 3;
      //   var addVideoBtn = $('.add_video_btn');
        
      //   var video_wrapper = $('.video-box');
        
      //   var video_x = 1;
      //   var video_num = 1;
         // $(addVideoBtn).click(function () {
         
         //     $('.add-new-details').show();
      
    //     $(addVideoBtn).click(function () {
    //         if (video_x < maxField) {
    //             var fieldHTML = '';
    //       fieldHTML += '<div class="add-more-block row">';
    //     fieldHTML += '<div class="col-md-5">';
    //     fieldHTML += '<div class="form-group">';
    //     fieldHTML += '<label>Association Name</label>';
    //     fieldHTML += '<input type="text" name="" class="form-control">';
    //     fieldHTML += '</div>';
    //     fieldHTML += '</div>';
    //     fieldHTML += '<div class="col-md-5">';
    //     fieldHTML += '<div class="form-group">';
    //     fieldHTML += '<label>Association ID</label>';
    //     fieldHTML += '<input type="text" name="" class="form-control">';
    //     fieldHTML += '</div>';
    //     fieldHTML += '</div>';
    //     fieldHTML += '<div class="col-md-2">';
    //     fieldHTML += '<a href="javascript:void(0);" class="remove_btn_edu pull-right" title="Remove field" data-num="' + video_num + '"> <i class="fa fa-close fa-2x custom-icon" aria-hidden="true"></i></a>';
    //     fieldHTML += '</div>';
       
    //     fieldHTML += '</div>';
    //             video_x++;
    //             video_num++;
    //             $(video_wrapper).append(fieldHTML);
    //         }
    //     });
        
       
    //     $(video_wrapper).on('click', '.remove_btn_edu', function (e) {
    //         e.preventDefault();
    //         var num = $(this).attr('data-num');
    //         $(this).closest('.add-more-block').remove();
    //         num--;
    //     });
       
    // });

        $("#btnDirectorAsso").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("association_name", $('#association_name').val());    
                form_data.append("association_id", $('#association_id').val()); 

                form_data.append("association_name1", $('#association_name1').val());    
                form_data.append("association_id1", $('#association_id1').val()); 
               
                
                $.ajax({
                  url: '<?php echo base_url('director/dir_assoc/'); ?>',

                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Director Associations Updated Successfully.");
                  window.location.href="<?php echo base_url('dashboard')?>";
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
            var association_name=$("#association_name").val();
      var association_id=$("#association_id").val();
      var association_name1=$("#association_name1").val();
      var association_id1=$("#association_id1").val();
      
              if(association_name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Association Name.<strong>");
                status = false;
              }            
              else if(association_id.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Association Id.<strong>");
                status = false;
              }     
              
              
              return status;
              console.log(status);
          }

            
        });   
  </script>

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



