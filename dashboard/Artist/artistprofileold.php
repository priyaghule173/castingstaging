<style type="text/css">
  
  .block
{
    padding: 20px 0 !important;
   
}
.input, button, select, optgroup, textarea {
    /*margin: 0 !important;*/
    font-family: inherit !important;
    font-size: inherit !important;

}
.form-control-plaintext {
    /*display: block;*/
    width: 81%;
    }

.show-border .form-control-plaintext {
    border-bottom: 1px solid #666;
  }
    .show-border .form-control-plaintext {
          border-bottom: 1px solid #666;
        }
        .show-border .social-link-input-class {
          border-bottom: 1px solid #666;
        }

.hideSaveMedia
{
  display: none;
}
.hideSaveEdu
    {
      display: none ;
    }
.sub-talent-type
{
 /* background-color: #f1dade;*/
  margin: 13px;
    padding: 5px;
    width: 100%;
}
.hideSaveInterest
{
  display: none;
}
.hideaddExp
{
  display: none;
}
.closeExp
{
  display: none;
}
.hideaddEdu
{
  display: none;
}
.hideSaveSubTalent
{
  display: none;
}
.hideImageRight
{
  display: none;
}
.hideImageLeft
{
  display: none;
}
.hideImageFull
{
  display: none;
}
.hideScriptMedia
{
  display: none;
}
.hideScriptAudio
{
 display: none;
}
.hideImageHeadShot
{
  display: none;
}
.hideSaveInfo
{
  display: none;
}
.hideSaveExp
{
  display: none;
}
.hideSaveSocial
{
  display: none;
}
.hideSavePhysical
{
  display: none;
}
.hideArtistImage
{
  display: none;
}
.hideprofilesave
{
display: none;  
}
.add-new-details
{
  display: none;
}
.add-new-details-next
{
  display: none;
}
.add-exp-details
{
  display: none;
}
.add-video-details
{
  display: none;
}
.add-script-details
{
  display: none;
}
.add-audio-details
{
  display: none;
}
.height200
{
  height: 200px;
      width: 200px;
}

.wrapper
{
  padding:18px;
}
.wrapper input[type="text"] {
    position: relative; 

}

 

.wrapper .facebook:before {
   
    /*color:red;*/
    position: relative;
    left: -10px;
    content: "\f09a";
    font-size:35px;
}


.social-link-input
{
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
}
.social-link-input-class
{
  border:unset;
}
.wrapper .instagram:before {
    font-family: 'FontAwesome';
    /*color:red;*/
    position: relative;
    left: -10px;
    content:"\f16d";
    font-size:35px;
}
.wrapper .twitter:before {
    font-family: 'FontAwesome';
    /*color:red;*/
    position: relative;
    left: -10px;
    content: "\f099";
    font-size:35px;
}
.wrapper .youtube:before {
    font-family: 'FontAwesome';
    /*color:red;*/
    position: relative;
    left: -10px;
    content: "\f16a";
    font-size:35px;
}
.wrapper .websitelink:before {
    font-family: 'FontAwesome';
    /*color:red;*/
    position: relative;
    left: -10px;
    content: "\f0ac";
    font-size:35px;
}
.wrapper .IMDB:before {
    font-family: 'FontAwesome';
    /*color:red;*/
    position: relative;
    left: -10px;
    content: "\f2d8";
    font-size:35px;
}
.partision
{
    border-bottom: 1px solid green;
    padding-bottom: 30px;
    margin-left: -6px;
    margin-right: -6px
}

.txtgreen
{
    color:green;
}
.hideSaveTalent
{
  display: none;
}
  .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td
        {
          border: none;
              border: none;
    line-height: 1.42857;
    color: #AAAAAA;
    font-weight: 400;
    font-size: 14px;
        }
       .checkboxview
{
   background-color: green !important;
}
        .container .table input:checked ~ .checkboxview {
    background-color: #2196F3;
}
.physical_attr_radio{
  margin-right: 5px;
    position: relative;
    top: 3px;
    height: 15px;
    width: 15px;
}
..add-more-block {
    border: 2px solid #ddd !important;
}
.txtred {
    /* color: black; */
    font-weight: 100;
    font-size: 14px;
}
.checkmark
{
  font-size: 14px;
}
</style>


<!-- Tabs -->
<section id="tabs">
  <div class="container">
       <div class="row">
          
           <!-- <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 "> My Profile</h4>
                   
                </div>
              </div>
            </div>-->
          </div>
    <!-- <h2 class="section-title ">Job Applications</h2> -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>

            <a class="nav-item nav-link pendingApplicationList" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Talent</a>

            <a class="nav-item nav-link rejectedApplicationList" id="nav-talent-tab" data-toggle="tab" href="#nav-talent" role="tab" aria-controls="nav-talent" aria-selected="false">Sub-Talent</a>

             <a class="nav-item nav-link interest" id="nav-interest-tab" data-toggle="tab" href="#nav-interest" role="tab" aria-controls="nav-interest" aria-selected="false">Interests</a>

              <a class="nav-item nav-link attribute" id="nav-attribute-tab" data-toggle="tab" href="#nav-attribute" role="tab" aria-controls="nav-attribute" aria-selected="false">Physical Attributes</a>

              <a class="nav-item nav-link link" id="nav-link-tab" data-toggle="tab" href="#nav-link" role="tab" aria-controls="nav-link" aria-selected="false">Social Links</a>

              <a class="nav-item nav-link media" id="nav-media-tab" data-toggle="tab" href="#nav-media" role="tab" aria-controls="nav-media" aria-selected="false" style="padding-left:20px;">Media</a>

            <a class="nav-item nav-link experience" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="false">Experience</a>

              <a class="nav-item nav-link education" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education</a>

               <a class="nav-item nav-link " id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">Additional Info</a>

          
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

             
           <div class="ProfileView" style="background-color: #fff;">
              <div class="profileForm" style="padding: 1px 20px 0px 20px;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data">
                   <?php 
                      foreach ($result as $value) { ?>
                        <div class="add-more-block row" style="
    margin-bottom: 16px;
    margin-left: 2px;
    margin-right: -2px;
    margin-top: 16px;
        border: 0.75px solid #ddd;

    ">
           
  <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                          <h3 class="txtred" style="margin-left: 392px;"></h3>
                            </div>
                       <div class="col-lg-6 hideIcon" style="
    padding-top: 12px;
">
            

                 

                  <i class="fa fa-pencil" data-toggle="modal" onclick="newInfo()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                 </div>
                     </div>
                     </div>

                         
                  <div class="row" id="profile_artist_div">
                  <!--   <div class="col-md-12 text-center"> -->
          <!--   <br>
            <h3>Please Complete the Registration Process </h3><hr> -->
          <!-- </div> -->
                    <div class="col-lg-12">


                      <!-- style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;" -->
                                     <div class="picture-container" style="margin-left: auto;
  margin-right: auto;
  display: block;">
                                          <div class="picture text-center" style="
    border-bottom: 1px solid lightgray;
    padding-bottom: 22px;
">
                                              <?php if($value['profile_pic']) { ?>
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="width: 18%;height: 150px;margin: 0 auto;border-radius: 100%;"/>
                                            <?php }else { ?>
                                                
                                                 <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="blah" title="" alt="" style="width: 18%;height: 150px;margin: 0 auto;border-radius: 100%;"/>
                                            <?php } ?>

                                              <div class="form-group text-center hideArtistImage">
                                        <label>Choose Profile photo</label>
                                         <br>
                                          <label class="btn-bs-file btn btn-lg btn-primary" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 11px;padding-top: 14px;">
                               Browse
                          <input type="file" name="profile_pic"  id="profile_pic"/>
                          </label> 
                            <br>
                          <span id="profile_pic-name" style="color:red;"></span>


                                         <img id='img-upload'/>


                                      </div>


                                          </div>
                                         
                                      </div>
                                  
                    </div>

<br>


                      <!-- ************** -->
                     <div class="col-lg-12">
                               <div class="row">
                          <!-- table div start -->

 <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <table class="table responsive">
                           <tr>
                            <td></td>
                             <td></td>
                             <td></td>
    <th class="label" id="req">Full Name:</th>
    <!-- <th>:</th> -->
    <!-- <td>:</td> -->
    <td ><input type="text" class="form-control-plaintext" id="name"  name="name" value="<?php echo $value['name'];?>" readonly></td>
<td></td>
<td></td>
 <td></td>
           <th class="label" id="req">Email</th>
    <td><input type="email" class="form-control-plaintext" id="email" name="email" value="<?php echo $value['email_id'];?>" readonly></td>
  </tr>
   <tr>
                            <td></td>
                             <td></td>
                             <td></td>
    <th class="label" id="req">Mobile No:</th>
    <td> <input type="text" class="form-control-plaintext" readonly id="mobile" value="<?php echo $value['contact_no'];?>" name="mobile"></td>
<td></td>
<td></td>
 <td></td>
   <th class="label" id="req">City:</th>
    <td>   <input id="city" readonly type="text" value="<?php echo $value['city'];?>" class="form-control-plaintext" name="city">
  </td>
          
  </tr>
  <tr>
                            <td></td>
                             <td></td>
                             <td></td>
     <th class="label" id="req">Whatsapp No:</th>
    <td><input id="whatsapp" readonly type="text" value="<?php echo $value['whatsup_no'];?>"class="form-control-plaintext" name="whatsapp"></td>
<td></td>
<td></td>
 <td></td>
       <th class="label" id="req">Zipcode:</th>
    <td><input id="zipcode" readonly type="text" value="<?php echo $value['pin_code'];?>" class="form-control-plaintext" name="zipcode"></td>
          
  </tr>
   
   <tr>
                            <td></td>
                             <td></td>
                             <td></td>

                                      
    <th class="label" id="req">Date of Birth:</th>
    <td><input name="dob" id="dob" readonly type="date"  value="<?php echo $value['date_of_birth'];?>" class="form-control-plaintext" ></td>
<td></td>
<td></td>
 <td></td>
           <th class="label" id="req">Gender:</th>
    <td>  
    <div class="row" style="
    margin-left: -1px;
">      <!-- <label class="radio-inline"> -->
                                        <input type="radio" disabled="true" name="gender" id="gender"  <?php if($value['gender']=="male"){
                                        echo "checked";
                                      }?> value="male">Male
                                        <!-- </label> -->
                                        <!-- <label class="radio-inline"> -->
                                        <input type="radio" disabled="true" name="gender" id="gender" <?php if($value['gender']=="female"){
                                        echo "checked";
                                      }?> value="female">Female
                                        <!-- <label class="radio-inline"> -->
                                       <input type="radio" disabled="true" name="gender" id="gender"  <?php if($value['gender']=="transgender"){
                                        echo "checked";
                                      }?> value="transgender">Transgender
                                        <!-- </label> -->
                                      <!-- </div> -->
</div>

    </td>
  
  </tr>
  <tr>
                            <td></td>
                             <td></td>
                             <td></td>
    <th class="label" id="req"></th>
    <td> <label class="checkbox-inline">
                                     <input type="checkbox" disabled="true" name="terms" <?php if($value['terms_condition']=="1"){
                                        echo "checked";
                                      }?> id="terms" value="1"> I agree with the Terms and Conditions
                                    </label></td>

          
  </tr>

                          </table>
                        </div>
                      </div>
                    </div>
                          <!-- table div ends -->




                                    <!--  <div class="col-lg-12 text-right hideprofilesave">
                                    
                                     <button type="submit" name="submit" class="btn btn-default  pull-right" id="btnArtistDetails" style="background-color: #ff007c;padding: 18px 40px;">Save</button>
                                  </div> -->
                             <div class="col-lg-12 text-right hideprofilesave" style="padding-right: 36px;padding-bottom: 10px;">
                                     
                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistDetails" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closeprofile" onclick="goBackprofile()">Cancel</button>

<script>
function goBackprofile() {
                var profileDiv = document.getElementById('profile_artist_div');
                  profileDiv.classList.remove("show-border");
     
      document.getElementById('profile_pic').readOnly = true;
     // document.getElementById('companyName').readOnly = false;
      //document.getElementById('email').readOnly = false;
      document.getElementById('terms').disabled = true;
          document.getElementById('mobile').readOnly = true;
    document.getElementById('dob').readOnly = true;
    document.getElementById('city').readOnly = true;
     document.getElementById('zipcode').readOnly = true;
     document.getElementById('whatsapp').readOnly = true;
    
     document.getElementById('gender').disabled = true;
     $("input[type=radio]").attr('disabled', true);

       document.getElementById('btnArtistDetails').readOnly = "none";
      document.getElementById('closeprofile').readOnly = "none";
       $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/editArtist')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('profile_artist_div');
                $(projectsaveDiv).addClass("active");

               $("#showArtistEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-home"]').tab('show');
            }
       });
                 
     
        $(".hideArtistImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideprofilesave").hide();
    
    $(".hideIcon").show();
          $(".closeprofile").hide();
      
    
     

                 
}
</script>
</div>

                                    </div>
                               </div>
                                  <!-- ********** -->

                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                     <?php } ?>         
            </form>
              </div>
           </div>
        
          </div>

  <script type="text/javascript">

    $("#profile_pic").change(function(){
                $("#profile_pic-name").text(this.files[0].name);
           });
 
          function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#profile_pic").change(function() {
  readURL(this);
});




  function newInfo()
  {
    
    $(".hideArtistImage").show();
    $(".hideScript").show();
    $(".showScript").hide();
    $(".hideprofilesave").show();
    $(".closeprofile").show();
    $(".hideIcon").hide();
     var profileDiv = document.getElementById('profile_artist_div');
                profileDiv.classList.add("show-border");

    document.getElementById('profile_pic').readOnly = false;
   
    //document.getElementById('name').readOnly = false;
   document.getElementById('terms').disabled = false;
    document.getElementById('mobile').readOnly = false;
    document.getElementById('dob').readOnly = false;
    document.getElementById('city').readOnly = false;
     document.getElementById('zipcode').readOnly = false;
     document.getElementById('whatsapp').readOnly = false;
     //document.getElementById('gender').disabled = false;
     //document.getElementById('gender').disabled = false;
     document.getElementById('gender').disabled = false;
     $("input[type=radio]").attr('disabled', false);
  }

    
 $("#btnArtistDetails").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());
        form_data.append('profile_pic', $('input[type=file]')[0].files[0]);
                form_data.append("name", $('#name').val());    
                form_data.append("email", $('#email').val()); 
                form_data.append("mobile", $('#mobile').val());
                form_data.append("dob", $('#dob').val());    
                form_data.append("city", $('#city').val()); 
                form_data.append("zipcode", $('#zipcode').val());
                form_data.append("whatsapp", $('#whatsapp').val()); 
                form_data.append("gender", $('input[name="gender"]:checked').val());    
              //  form_data.append("wizardPicturePreview", $('#wizardPicturePreview').val());    
                form_data.append("terms", $('input[name="terms"]:checked').val()); 
                $.ajax({
                  url: '<?php echo base_url('artist/artistGeneralInfo/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
  
           .done(function (res) {
                console.log(res);
                if(res.status="success"){
                  alert(" General Info updated Successfully.");
                   $(".hideArtistImage").show();
    
     var profileDiv = document.getElementById('profile_artist_div');
                profileDiv.classList.remove("show-border");

    document.getElementById('profile_pic').readOnly = true;

   document.getElementById('terms').disabled = true;
    document.getElementById('mobile').readOnly = true;
    document.getElementById('dob').readOnly = true;
    document.getElementById('city').readOnly = true;
     document.getElementById('zipcode').readOnly = true;
     document.getElementById('whatsapp').readOnly = true;
    document.getElementById('btnArtistDetails').readOnly = "none";
     document.getElementById('closeprofile').readOnly = "none";
    
     document.getElementById('gender').disabled = true;
     $("input[type=radio]").attr('disabled', true);
// newExp
 $(".hideArtistImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideprofilesave").hide();
    
    $(".hideIcon").show();
          $(".closeprofile").hide();
//ends

    //  $(".hideScript").show();
    // $(".showScript").hide();
    // $(".hideprofilesave").show();
    // $(".closeprofile").hide();
    
    // $(".hideIcon").hide();
                 // window.location.href="<?php //echo base_url('dashboard')?>";
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
              var name=$("#name").val();
              var email=$("#email").val();
              var mobile=$("#mobile").val();
              var dob=$("#dob").val();
              var city=$("#city").val();
              var zipcode=$("#zipcode").val();
              var whatsapp=$("#whatsapp").val();    
              var gender=$("#gender").val();
             // var wizardPicturePreview=$("#wizardPicturePreview").val();
              var terms=$("#terms").val();
              if(name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              else if(email == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                status = false;
              }     
              else if(mobile.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(city.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter City.<strong>");
                status = false;
              } 
              else if(zipcode.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                status = false;
              } 
              else if(whatsapp.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                status = false;
              } 
              else if(dob=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Date Of Birth.<strong>");
                status = false;
              } 
              else if(gender=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              
              else if(terms=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast terms and Conditions.<strong>");
                status = false;
              }
              return status;
              console.log(status);
          }

            
        }); 
   
  </script>

  <!-----Talent strat here------>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
             
           <div id="workExperienceView" style="background-color: #fff;">
                
<form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      foreach ($result as $value) { ?>
                         <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
     border: 0.75px solid #ddd;
    "> 
                          <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                          <h3 class="txtred" style="margin-left: 392px;"></h3>
                            </div>
                      
                        <div class="col-lg-6 hideIconTalent" style="
    padding-top: 12px;
">
                  
                  <i class="fa fa-pencil" data-toggle="modal" onclick="EditTalent()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                 </div>

                     </div>
                     </div>


                         
                  <div class="row" id="artist_talent_div">
                      <!-- ************** -->
                      <div class="col-md-12 text-center">
                      <!-- <br>

                      <h3>Talents: Choose your Talent</h3><hr> -->
                       </div>
                       <?php  
                                        
                   //   $talent=explode(',', talent_name);
                                        $talent_name = $this->db->select('*')->from('talent')->get()->result_array();
                                        //print_r($talent_name);
                                    foreach ($talent_name as $key ) {  ?>
<!-- talent table starts -->

<div class="col-lg-3">
  <div class="row">
    <div class="container">
      <!-- <div class="row"> -->
        <div class="col-sm-12">
        <!--   <table class="table responsive">
            <tr>
              <td></td>
              <td></td>
              <th > -->
 <input class="checkboxview" type="checkbox" disabled="true" name="talent_name[]" value="<?php echo $key['talent_id'];?>" id="talent<?php echo $key['talent_id'];?>" 
style="
  top: 0;
  left: 0;
  height: 13px;
  width: 13px;
  background-color: green !important;
  "

 >
                                  <?php // } ?>
                              <span class="checkmark"></span>

            <!--   <td style="
    color: black;
"> -->
                 <?php echo $key['talent_name']; ?>
             <!--  </td>
            </tr>
          </table> -->
        </div>
        <br>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- talent table ends -->


                <!--  <div class="col-lg-3">
                        <div class="block">
                      <div class="checkbox-inline">
                                    <label class="chkcontainer">
                              <?php echo $key['talent_name']; ?>
                              <?php   //var talentidNew = "talent" + $key['talent_id'];
                               //$TA = explode(',',$value['talent']);
                              // foreach($TA as $val){ 
                              ?>
                              <input class="checkboxview" type="checkbox" disabled="true" name="talent_name[]" value="<?php echo $key['talent_id'];?>" id="talent<?php echo $key['talent_id'];?>" >
                                  <?php // } ?>
                              <span class="checkmark"></span>
                                                    
                            </label>
                          </div>
                        </div>
                  </div>  -->
                      <?php
                                      }
                                  ?>
                                    <!--  <div class="row  pull-right hideSaveTalent"><br>
                        <button type="submit" name="submit" class="btn btn-default  pull-right" id="btnArtistTalentRegister" style="background-color: #ff007c;margin-left: 605px;padding: 12px 34px;">Save</button>

                </div> -->
                <div class="col-lg-12 text-right hideSaveTalent" style="padding-right: 36px;padding-bottom: 10px;"  >
                                      

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistTalentRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" id="closeTalent" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" onclick="goBackTalent()">Cancel</button>

<script>
function goBackTalent() {
                var profileDiv = document.getElementById('artist_talent_div');
                  profileDiv.classList.add("show-border");
     
     // $('.checkboxview').removeAttr('disabled');
      $('.checkboxview').prop("disabled", true);
      
       document.getElementById('btnArtistTalentRegister').readOnly = "none";
      document.getElementById('closeTalent').readOnly = "none";
     

       $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/editArtist')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('profile_artist_div');
                $(projectsaveDiv).addClass("active");

               $("#showArtistEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-profile"]').tab('show');
            }
       });  
         $(".hideImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideSaveTalent").hide();
    $(".closeTalent").hide();
    $(".hideIconTalent").show();

               
}
</script>

                                    </div>
                      
                  </div>
                </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                   
<?php } ?>
            </form>
          </div>
          
        </div>
          
      
          <script type="text/javascript">
function EditTalent()
{
    $(".hideImage").show();
    $(".hideScript").show();
    $(".showScript").hide();
    $(".hideSaveTalent").show();
    
    $(".hideIconTalent").hide();

  
   // document.getElementById('companyName').readOnly = false;
    //document.getElementById('email').readOnly = false;
    $('.checkboxview').removeAttr('disabled');
     // document.getElementsByClassName("checkboxview").disabled=false;
    //alert(x.getAttribute("disabled"));
    //x.setAttribute("disabled", "false");
    //alert(x.getAttribute("disabled"));
     //document.getElementById("<?php //echo $key['talent_id'];?>").disabled = false;
   
  }

$(document).ready(function() {

         // var keyTalent = "<?php //echo $key['talent_id']; ?>";
          var talentValue="<?php echo $value['talent']; ?> ";
          var talentData = "";
      
           // var array = [talentValue];
               

                // var str = "1,2,3,4,5,6";
            var temp = new Array();
            
            temp = talentValue.split(",");

            var arrayLength = (temp.length)+1;
              // alert(arrayLength);
          var i;
          var talentid;
          // alert(arrayLength);
          // loop=(talentValue.length)*2;
           
            // alert(talentDataLast);

             // let lastssds = temp.last();
            // alert(temp[temp.length-1]) ;

          for (var ifdd = 0; ifdd < arrayLength; ifdd++) {

           talentData = temp[ifdd];

           var last=arrayLength-2;
           talentDataLast = temp[last];
          
          
              if(talentData==',')
              {
                  
              }
              // else  if(talentData!=talentDataLast)
              // {
              

              //  talentid="talent"+talentData;
              //     document.getElementById(talentid).checked = true;
              //     // alert(talentid);
              // }
              else 
              {
                  //var tetst= temp[temp.length-1];

                  // alert(tetst);
                  talentidss="talent"+talentData;
                //  alert(talentidss);
                  $("#"+talentidss).prop( "checked", true );
                  //document.getElementById(talentidss).checked = true;
 
                  // alert(talentid +" " + ifdd);
                  // alert(talentid); 
              }

              }

          // alert(talentValue);


         // for (i = 0; i < talentValue.length; i++)
         //    {

         //     talentData = talentValue[i];

             
         //      if(talentData==',')
         //      {
                  
         //      }
         //      else
         //      {
         //          talentid="talent"+talentData;
         //          document.getElementById(talentid).checked = true;
         //          // alert(talentid); 
         //      }
         //      // alert(talentValue[i]);

         //      // var x = document.getElementById("talentid").checked; 
         //    }

        
});



$("#btnArtistTalentRegister").click(function(){
      var validation_status = artistFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
                  
                
                $('input[name="talent_name[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('talent_name[]', value);
                });
                $.ajax({

                  url: '<?php echo base_url('artist/artist_talent/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                 var profileDiv = document.getElementById('artist_talent_div');
                  profileDiv.classList.remove("show-border");
              console.log("RESULT---------------------------",res);
                if(res.status="success"){
                  alert("Talent updated Successfully.");
                 
     
      // $('.checkboxview').removeAttr('disabled');
       $('.checkboxview').prop("disabled", true);
     
       document.getElementById('btnArtistTalentRegister').readOnly = "none";
      document.getElementById('closeTalent').readOnly = "none";
     
         $(".hideImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideSaveTalent").hide();
    $(".closeTalent").hide();
    $(".hideIconTalent").show();


                  // window.location.href="<?php //echo base_url('dashboard')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                 // alert(res);             
              });
      }
      function artistFormValidate()
          {   
              var status = true;         
              
              var talent_name=$("#talent_name").val();
                       
              //   if(talent_name=='') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please select atleast one Talent.<strong>");
              //   status = false;
              // }
               console.log("validation_status....................",status);
              return status;
              console.log(status);
          }

            
        }); 
  
  </script>


  <!-------sub- talent start here------->
          <div class="tab-pane fade" id="nav-talent" role="tabpanel" aria-labelledby="nav-talent-tab">
             <!--    <div class="row"> -->
                <!--  <div class="col-lg-6 text-center ">
           <h3 class="txtred" style="margin-left: 327px;">Sub Talent</h3> -->
                <!-- <p class="txtred">Choose your Sub Talent</p> -->
              <!-- </div> -->
          <!--     <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
    ">  -->



              <!-- <div class="col-lg-6 hideIconSubTalent">
                  
                  
                 </div>
            </div> -->
             <div id="rejectedApplicationListData" style="background-color: #fff;">
                 <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                  <?php 
                      foreach ($result as $value) { ?>
  <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
     border: 0.75px solid #ddd;
    "> 

                  <!-- edit block strats -->
  <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                          <h3 class="txtred" style="margin-left: 392px;"></h3>
                            </div>
                      
                        <div class="col-lg-6 hideIconSubTalent" style="
    padding-top: 12px;
">
                  
                 <i class="fa fa-pencil" data-toggle="modal" onclick="EditSubTalent()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                 </div>

                     </div>
                     </div>
                  <!-- edit ends -->

           <div class="row" id="artist_subTalent_div">
                                                           <?php 
                                      
        $talent_name = $this->db->select('*')->from('talent')->get()->result_array();

                                     
        foreach ($talent_name as $key ) {  ?>

        <div class="checkbox-inline sub-talent-type" style="
    /*margin-left: 14px;*/
    /* margin: 5px 0px 5px 0px; */
    margin-bottom: 5px !important;
    color: black;
    font-size: 16px;
    /* text-align: center; */
    margin-left: 27px;
    margin-right: 27px;
    border-bottom: 1px solid black;
   
    ">
        <label class="chkcontainer" style="margin: 5px 0px 5px 0px; margin-bottom: 5px !important;    color: black;
    font-size: 16px;">

        <?php echo $key['talent_name']; ?>
         <!-- <input type="checkbox" name="talent_name[]" value="<?php //echo $key['talent_id'];?>" id="talent_name"> -->
         
       </label>
     </div>
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="display: contents;">
      
       <input type="hidden" name="sub_talent" >
        <?php
        $sub_talent_name = $this->db->select('*')->from('sub_talent')->where('talent_id',$key['talent_id'])->get()->result_array();
                                       
         foreach ($sub_talent_name as $key ) {  ?>

       <!-- table starts -->

<div class="col-lg-3">
  <div class="row">
    <div class="container">
      <!-- <div class="row"> -->
        <div class="col-sm-12">
         <!--  <table class="table responsive">
            <tr>
            
              <th > -->
  <input type="checkbox" class="checkSubTalent" disabled="true" name="sub_talent_name[]" value="<?php echo $key['sub_talent_id'];?>" id="subtalent<?php echo $key['sub_talent_id'];?>" style="
  top: 0;
  left: 0;
  height: 13px;
  width: 13px;
  background-color: green !important;" >

          <span class="checkmark"></span>
                                           
                                  <?php // } ?>
                              <span class="checkmark"></span></th>

             <!--  <td style="
    color: black;
"> --> <?php echo $key['sub_talent_name']; ?>
             <!--  </td>
            </tr>
          </table> -->
        </div>
        <br>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- starts ends -->
                      <?php
                      }
                       ?>
                       </div>
                       <?php
                      }
                       ?>
                      
                     <!--   <div class="row  pull-right hideSaveSubTalent"><br>
                        <button type="submit" name="submit" class="btn btn-default  pull-right" id="btnArtistSubTalentRegister" style="background-color: #ff007c;margin-left: 859px;padding: 18px 40px;">Save</button>

                </div> -->
                  <div class="col-lg-12 text-right hideSaveSubTalent" style="padding-right: 36px;padding-bottom: 10px;">
                                      

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistSubTalentRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closeSubTalent" onclick="goBackSubTalent()">Cancel</button>

<script>
function goBackSubTalent() {
                var profileDiv = document.getElementById('artist_subTalent_div');
                  profileDiv.classList.add("show-border");
     
     // $('.checkboxview').removeAttr('disabled');
      $('.checkSubTalent').prop("disabled", true);
      
    document.getElementById('btnArtistSubTalentRegister').readOnly = "none";
      document.getElementById('closeSubTalent').readOnly = "none";
      $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/editArtist')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('profile_artist_div');
                $(projectsaveDiv).addClass("active");

               $("#showArtistEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-talent"]').tab('show');
            }
       });
        $(".hideImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideSaveSubTalent").hide();
      $(".closeSubTalent").hide();
    $(".hideIconSubTalent").show();



               
}
</script>

                                    </div>
                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>
         
         <!--  <div class="row  pull-right"><br>
        <button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistSubTalentRegister">Save</button>
              </div>  --> 
            <?php } ?>
            </form>

</div>
</div>
 <script type="text/javascript">
function EditSubTalent()
{
    $(".hideImage").show();
    $(".hideScript").show();
    $(".showScript").hide();
    $(".hideSaveSubTalent").show();
    
    $(".hideIconSubTalent").hide();

  $('.checkSubTalent').removeAttr('disabled');
   // document.getElementById('companyName').readOnly = false;
    //document.getElementById('email').readOnly = false;
   // document.getElementById('talent<?php //echo $key['talent_id'];?>').readOnly = false;
   
  }
         











         // var subTalentNew="<?php //echo $value['sub_talent']; ?> ";
        //  var subTalentData = "";
        //  var j;
        //  var subtalentid;
         // var subTalentKey = "<?php //echo $key['sub_talent_id']; ?>";
        
         // for (j = 0; j < subTalentNew.length; j++)
            // {

             // subTalentData = subTalentNew[j];

             
              // if(subTalentData==',')
              // {
                  
              // }
              // else
              // {
                  // subtalentid="subtalent"+subTalentData;
                  // document.getElementById(subtalentid).checked = true;
                  // alert(talentid); 
              // }
            
              // var x = document.getElementById("talentid").checked; 
            // }

    $("#btnArtistSubTalentRegister").click(function(){
      var validation_status = artistFormValidateTalent();
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
                  alert("Sub Talent Updated  Successfully.");
                  var profileDiv = document.getElementById('artist_subTalent_div');
                  profileDiv.classList.remove("show-border");
     
     // $('.checkboxview').removeAttr('disabled');
      $('.checkSubTalent').prop("disabled", true);
      
    document.getElementById('btnArtistSubTalentRegister').readOnly = "none";
      document.getElementById('closeSubTalent').readOnly = "none";
     
        $(".hideImage").hide();
    $(".hideScript").hide();
    $(".showScript").hide();
    $(".hideSaveSubTalent").hide();
      $(".closeSubTalent").hide();
    $(".hideIconSubTalent").show();

                // window.location.href="<?php echo base_url('dashboard')?>";
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
      function artistFormValidateTalent()
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
 var  subTalentNew="<?php echo $value['sub_talent']; ?> ";
          var subTalentData = "";
      
           // var array = [talentValue];
               

                // var str = "1,2,3,4,5,6";
            var tempsubTalent = new Array();
            
            tempsubTalent = subTalentNew.split(",");

            var arrayLength = (tempsubTalent.length)+1;
              // alert(arrayLength);
          var subtalentid;
          // alert(arrayLength);
          // loop=(talentValue.length)*2;

        for (var sub = 0; sub < arrayLength; sub++) {

           subTalentData = tempsubTalent[sub];
           var lastSub=arrayLength-1;
            // alert(last);
                
          
              if(subTalentData==',')
              {
                  
              }
              // else  if(subTalentData!=lastSub)
              // {
               

              //  subtalentid="subtalent"+subTalentData;
              //     document.getElementById(subtalentid).checked = true;
                 
              // }
              else 
              {
                  subtalentid="subtalent"+subTalentData;
                    $("#"+subtalentid).prop( "checked", true );
                  // document.getElementById(subtalentid).checked = true;

                  
                  // alert(talentid +" " + ifdd);
                  // alert(talentid); 
              }

              }



  </script>


<!----Interests strat here--->

<div class="tab-pane fade" id="nav-interest" role="tabpanel" aria-labelledby="nav-interest-tab">
       <!-- <div class="row"> -->
                <!--  <div class="col-lg-6">
           <h3 class="txtred" style="margin-left: 437px;">Interest</h3>
               <p class="txtred">Choose your Interest</p> 
              </div> -->
            <!--    <div class="col-lg-6 hideIconInterest">
                  
                  <i class="fa fa-edit" data-toggle="modal" onclick="newInterest()" style="font-size: 34px;
    padding-top: 19px;
    margin-left: 382px;"></i>
                 </div>
            </div> -->
           <div id="interest" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                  <?php 
                      foreach ($result as $value) { ?>
                <!-- interest edit starts -->
  <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
     border: 0.75px solid #ddd;
    "> 
  <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center">
                          <!-- <h3 class="txtred" style="margin-left: 392px;"></h3> -->
                            </div>
                      
                        <div class="col-lg-6 hideIconInterest" style="
    padding-top: 12px;
">
                  
                  <i class="fa fa-pencil" data-toggle="modal" onclick="newInterest()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                 </div>

                     </div>
                     </div>

<!-- interest edit ends -->

                  <div class="row" id="artist_interest_div">
                      <!-- ************** -->
                      <div class="col-lg-12 text-center">
           <!--  <br>

            <h3>Talents: Choose your Interests</h3><hr> -->
          </div>





                                   
                                        <?php 
                                        
                   //   $talent=explode(',', talent_name);
                                        $resultdata = $this->db->select('*')->from('interests')->get()->result_array();
                                        //print_r($result);
                                    foreach ($resultdata as $key ) {  ?>
                                      <!-- interest table starts -->

<div class="col-lg-3">
  <div class="row">
    <div class="container">
      <!-- <div class="row"> -->
        <div class="col-sm-12">
         <!--  <table class="table responsive">
            <tr>
              <td></td>
              <td></td>
              <th > -->


 <input type="checkbox"  class="checkInterest" disabled="true" name="interests_name[]" value="<?php echo $key['interests_id'];?>" style="
  top: 0;
  left: 0;
  height: 13px;
  width: 13px;
  background-color: green !important;" id="interest<?php echo $key['interests_id'];?>">
                              <span class="checkmark"style="
    font-size: 14.0px;
">
                                  <?php // } ?>
                              <span class="checkmark" ></span><!-- </th> -->

             <!--  <td style="
    color: black;
"> -->
                 <?php echo $key['interests_name']; ?>
              <!-- </td>
            </tr>
          </table> -->
        </div>
        <br>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- interest table ends -->
                                     <!--   <div class="col-lg-3">
                                       <div class="block">
                    <div class="checkbox-inline">
                                    <label class="chkcontainer">
                              <?php echo $key['interests_name']; ?>
                              <input type="checkbox"  class="checkInterest" disabled="true" name="interests_name[]" value="<?php echo $key['interests_id'];?>" id="interest<?php echo $key['interests_id'];?>">
                              <span class="checkmark"></span>
                                                    
                            </label>
                          </div>

                    </div>
                                  </div> -->
                      <?php
                                      }
                                  ?>
               
                  <!-- <div class="col-lg-12 text-right hideSaveInterest">
                                    

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="background-color: #ff007c;"id="btnArtistInterestRegister">Save</button>
                                     
                                  </div>   -->  
                                  <div class="col-lg-12 text-right hideSaveInterest" style="padding-right: 36px;padding-bottom: 10px;">
                                      

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistInterestRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closeInterest" onclick="goBackInterest()">Cancel</button>

<script>
function goBackInterest() {
                var profileDiv = document.getElementById('artist_interest_div');
                  profileDiv.classList.add("show-border");
     
     // $('.checkboxview').removeAttr('disabled');
      $('.checkInterest').prop("disabled", true);
      
       document.getElementById('btnArtistInterestRegister').readOnly = "none";
      document.getElementById('closeInterest').readOnly = "none";
      $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/editArtist')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('profile_artist_div');
                $(projectsaveDiv).addClass("active");

               $("#showArtistEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-interest"]').tab('show');
            }
       });
          $(".hideSaveInterest").hide();
           $(".hideIconInterest").show();
           $(".closeInterest").hide();


    //      $(".hideImage").hide();
    // $(".hideScript").hide();
    // $(".showScript").hide();
    // $(".hideSaveTalent").hide();
    // $(".closeTalent").hide();
    // $(".hideIconTalent").show();
               
}
</script>

                                    </div>              

</div>

                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 

                                  <!-- <div class="row  pull-right"><br>
                  <button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistInterestRegister">Save</button>
                </div> -->

                     <?php } ?>            
            </form>
           </div>
</div>
          </div>
          <script type="text/javascript">
        
function newInterest()
      {
           $(".hideSaveInterest").show();
           $(".hideIconInterest").hide();
           $('.checkInterest').removeAttr('disabled');
         //document.getElementById('facebook').readOnly = false;
          //document.getElementById('instagram').readOnly = false;
           
      }
 $("#btnArtistInterestRegister").click(function(){
      var validation_status = artistFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
                  
                
                $('input[name="interests_name[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('interests_name[]', value);
                });
                $.ajax({

                  url: '<?php echo base_url('artist/artist_interests/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                console.log("Result is................",res);
                if(res.status="success"){
                  alert("Interest Updated Successfully.");
                      var profileDiv = document.getElementById('artist_interest_div');
                  profileDiv.classList.remove("show-border");
     
     // $('.checkboxview').removeAttr('disabled');
      $('.checkInterest').prop("disabled", true);
      
       document.getElementById('btnArtistInterestRegister').readOnly = "none";
      document.getElementById('closeInterest').readOnly = "none";
     
          $(".hideSaveInterest").hide();
           $(".hideIconInterest").show();
           $(".closeInterest").hide();

                // window.location.href="<?php echo base_url('dashboard')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                 // alert(res);             
              });
      }
      function artistFormValidate()
          {   
              var status = true;         
              
              var interests_name=$("#interests_name").val();
                       
                if(interests_name=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one Talent.<strong>");
                status = false;
              }
              
              return status;
              console.log(status);
          }

            
        }); 

          var  interestNew="<?php echo $value['interests']; ?> ";
          var interestData = "";
      
           // var array = [talentValue];
               

                // var str = "1,2,3,4,5,6";
            var tempinterest = new Array();
            
            tempinterest = interestNew.split(",");

            var arrayLengthinterest = (tempinterest.length)+1;
              // alert(arrayLengthinterest);
          var interestid;
          // alert(arrayLength);
          // loop=(talentValue.length)*2;

        for (var sinter = 0; sinter < arrayLengthinterest; sinter++) {

           interestData = tempinterest[sinter];
           var lastinterest=arrayLengthinterest-1;
            // alert(last);
                
          
              if(interestData==',')
              {
                  
              }
              // else  if(interestData!=lastinterest)
              // {
               

              //  interestid="interest"+interestData;
              //     document.getElementById(interestid).checked = true;
                  
              // }
              else 
              {
                  interestid="interest"+interestData;
                   $("#"+interestid).prop( "checked", true );
                  // document.getElementById(interestid).checked = true;

                  
                  // alert(talentid +" " + ifdd);
                  // alert(talentid); 
              }

              }







         //  var interestNew="<?php //echo $value['interests']; ?> ";
         //  var interestData = "";
         //  var k;
         //  var interestid;
         // // var subTalentKey = "<?php //echo $key['sub_talent_id']; ?>";
        
         // for (k = 0; k < interestNew.length; k++)
         //    {

         //     interestData = interestNew[k];

             
         //      if(interestData==',')
         //      {
                  
         //      }
         //      else
         //      {
         //          interestid="interest"+interestData;
         //          document.getElementById(interestid).checked = true;
         //          // alert(talentid); 
         //      }
         //      interestData++;
         //      // alert(interestid);
            
         //      // var x = document.getElementById("talentid").checked; 
         //    }

  
  </script>

           

<!----Interests End here--->

<!-----Physical Attribute start here--->


<div class="tab-pane fade" id="nav-attribute" role="tabpanel" aria-labelledby="nav-attribute-tab">
  <!--  <div class="row"> -->
               <!--   <div class="col-lg-6">
           <h3 class="txtred" style="margin-left: 217px;">Physical Attributes</h3>
              
              </div> -->
          <!--      <div class="col-lg-6 hideIconPhysical">
                  
                  <i class="fa fa-edit" data-toggle="modal" onclick="newphysical()" style="font-size: 34px;
    padding-top: 19px;
    margin-left: 397px;"></i>
                 </div>
 
            </div> -->
           <div id="attribute" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 

                      foreach ($result as $value) {
                      //print_r($value);exit;
                       ?>
                       <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
     border: 0.75px solid #ddd;
    "> 
                        <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                          <h3 class="txtred" style="margin-left: 392px;"></h3>
                            </div>
                      
                        <div class="col-lg-6 hideIconPhysical" style="
    padding-top: 12px;
">
                  
                  <i class="fa fa-pencil" data-toggle="modal" onclick="newphysical()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                 </div>

                     </div>
                     </div>
                 <!-- <div class="row" id="artist_physical_div">    -->
                    <div class="row" id="artist_physical_div">
                      <!-- ************** -->
                      <div class="col-md-12 text-center">
          <!--   <br>
            <h3>Physical Attributes: Tell us about your Physical Attributes</h3><hr> -->
          </div>
          <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Weight(kg):</label>
    <div class="col-sm-1">
      <input name="weight" readonly type="text" value="<?php echo $value['weight'];?>" id="weight"class="form-control-plaintext" placeholder="in Kgs">
    </div>
  
    <label for="staticEmail" class="col-sm-2 col-form-label">Height(feet):</label>
    <div class="col-sm-1">
      <input name="height" type="text" readonly value="<?php echo $value['height'];?>"  id="height" class="form-control-plaintext" placeholder="For ex. 5ft 5 inch">  
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">Chest(cm):</label>
    <div class="col-sm-1">
      <input name="chest" type="text" readonly  value="<?php echo $value['chest'];?>" id="chest" class="form-control-plaintext" placeholder="in inches">
    </div>
     <label for="staticEmail" class="col-sm-2 col-form-label">Waist(cm):</label>
    <div class="col-sm-1">
      <input name="waist" type="text" readonly value="<?php echo $value['waist'];?>"  id="waist" class="form-control-plaintext" placeholder="in inches">
    </div>
</div>

               <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Body Type:</label>
    <div class="col-sm-1" style="
    width: 326px;
">
       <select name="body_type" disabled="true"  id="body_type"class="form-control-plaintext">
                                          <option value="slim"<?php if($value['body_type']=="slim"){
                                        echo "selected";
                                      }?>>Slim</option>
                                          <option  value="average" <?php if($value['body_type']=="average"){
                                        echo "selected";
                                      }?>>Average</option>
                                          <option  value="heavy" <?php if($value['body_type']=="heavy"){
                                        echo "selected";
                                      }?>>Heavy</option>
                                          <option  value="athletic" <?php if($value['body_type']=="athletic"){
                                        echo "selected";
                                      }?>>Athletic</option>
                                          
                                        </select></label>
    </div>
<label for="staticEmail" class="col-sm-2 col-form-label">Ethinicity:</label>
    <div class="col-sm-1">
      <select name="ethinicity" disabled="true" id="ethinicity"class="form-control-plaintext">
                                          <option value="african" <?php if($value['ethinicity']=="african"){
                                        echo "selected";
                                      }?>>African</option>
                                          <option value="arabic" <?php if($value['ethinicity']=="arabic"){
                                        echo "selected";
                                      }?>>Arabic</option>
                                          <option value="indian" <?php if($value['ethinicity']=="indian"){
                                        echo "selected";
                                      }?>>Indian</option>
                                          <option value="oriental" <?php if($value['ethinicity']=="oriental"){
                                        echo "selected";
                                      }?>>Oriental</option>
                                          
                                        </select>
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">Hair Type:</label>
    <div class="col-sm-1">
      <select name="hair_type" disabled="true" id="hair_type" class="form-control-plaintext">
                                          <option value="wavy" <?php if($value['hair_type']=="wavy"){
                                        echo "selected";
                                      }?>>Wavy</option>
                                          <option value="curly" <?php if($value['hair_type']=="curly"){
                                        echo "selected";
                                      }?> >Curly</option>
                                          <option value="bald" <?php if($value['hair_type']=="bald"){
                                        echo "selected";
                                      }?> >Bald</option>
                                          <option value="straight" <?php if($value['hair_type']=="straight"){
                                        echo "selected";
                                      }?> >Straight</option>
                                          <option value="semi_wavy" <?php if($value['hair_type']=="semi_wavy"){
                                        echo "selected";
                                      }?> >Semi Wavy</option>
                                          
                                        </select>
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">Hair Length:</label>
    <div class="col-sm-1">
       <select name="hair_length" disabled="true" id="hair_length" class="form-control-plaintext">
                                         
                                          <option value="bald" <?php if($value['hair_length']=="bald"){
                                        echo "selected";
                                      }?> >Bald</option>
                                          <option value="long" <?php if($value['hair_length']=="long"){
                                        echo "selected";
                                      }?> >Long</option>
                                          <option value="medium" <?php if($value['hair_length']=="medium"){
                                        echo "selected";
                                      }?> >Medium</option>
                                          <option value="Short" <?php if($value['hair_length']=="Short"){
                                        echo "selected";
                                      }?> >Short</option>
                                          
                                          
                                        </select>
    </div>
    </div>  
             
              
              <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Eye Color:</label>
    <div class="col-sm-9" style="
    width: 557px;
">
      <label class="radio-inline">
                                       <input type="radio" class="physical_attr_radio" disabled="true" id="eye_color"  name="eye_color" <?php if($value['eye_color']=="black"){
                                        echo "checked";
                                      }?> value="black">Black
                                        </label>
                                        <label class="radio-inlin mr-2">
                                        <input type="radio" class="physical_attr_radio" disabled="true" id="eye_color" name="eye_color" <?php if($value['eye_color']=="blue"){
                                        echo "checked";
                                      }?> value="blue">Blue
                                        </label>
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true"  class="physical_attr_radio" id="eye_color" name="eye_color" <?php if($value['eye_color']=="green"){
                                        echo "checked";
                                      }?> value="green">Green
                                        </label>
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" class="physical_attr_radio"  id="eye_color"  name="eye_color" <?php if($value['eye_color']=="grey"){
                                        echo "checked";
                                      }?> value="grey">Grey
                                        </label>
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" class="physical_attr_radio" id="eye_color" name="eye_color" <?php if($value['eye_color']=="brown"){
                                        echo "checked";
                                      }?> value="brown">Brown
                                        </label>
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" class="physical_attr_radio" id="eye_color"  name="eye_color" <?php if($value['eye_color']=="dark_brown"){
                                        echo "checked";
                                      }?> value="dark_brown">Dark Brown
                                        </label>
    </div>
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Skin Tone:</label>
    <div class="col-sm-9" style="
    width: 557px;
">
       <label class="radio-inline">
                                        <input type="radio" class="physical_attr_radio" disabled="true" id="skin_tone"  name="skin_tone" <?php if($value['skin_tone']=="very_fair"){
                                        echo "checked";
                                      }?> value="very_fair">Very Fair
                                        </label>
                                         
                                        <label class="radio-inline mr-2">
                                        <input type="radio" class="physical_attr_radio" disabled="true" id="skin_tone"  name="skin_tone" <?php if($value['skin_tone']=="fair"){
                                        echo "checked";
                                      }?> value="fair">Fair
                                        </label>
                                        
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" id="skin_tone" name="skin_tone" class="physical_attr_radio" <?php if($value['skin_tone']=="brown"){
                                        echo "checked";
                                      }?> value="brown">Brown
                                        </label>

                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" id="skin_tone"  name="skin_tone" class="physical_attr_radio" <?php if($value['skin_tone']=="dark"){
                                        echo "checked";
                                      }?> value="dark">Dark
                                        </label>
                                        
                                        <label class="radio-inline mr-2">
                                        <input type="radio" disabled="true" id="skin_tone"  name="skin_tone" class="physical_attr_radio" <?php if($value['skin_tone']=="very_dark"){
                                        echo "checked";
                                      }?> value="very_dark">Very Dark
                                        </label>
    </div>
  </div>
                                 
                                  
                                 
                            
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                        <label class="radio-inline">Skin Tone </label><br>
                                       
                                        
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                        <label class="radio-inline mr-2" >Hair Color </label><br>
                                        <label class="radio-inline">
                                       <input type="radio" class="physical_attr_radio" disabled="true" id="hair_color" name="hair_color" <?php if($value['hair_color']=="black"){
                                        echo "checked";
                                      }?> value="black">Black
                                        </label>
                                        <label class="radio-inline mr-2">
                                          <input type="radio" class="physical_attr_radio"  disabled="true" id="hair_color"  name="hair_color" <?php if($value['hair_color']=="brown"){
                                        echo "checked";
                                      }?> value="brown">Brown
                                        </label>
                                        <label class="radio-inline mr-2">
                                          <input type="radio"  class="physical_attr_radio"  disabled="true" id="hair_color" name="hair_color" <?php if($value['hair_color']=="grey"){
                                        echo "checked";
                                      }?> value="grey">Grey
                                        </label>
                                        <label class="radio-inline mr-2">
                                          <input type="radio"  class="physical_attr_radio"  disabled="true" id="hair_color"  name="hair_color" <?php if($value['hair_color']=="white"){
                                        echo "checked";
                                      }?> value="white">White
                                        </label>
                                        <label class="radio-inline mr-2">
                                          <input type="radio"  class="physical_attr_radio"  disabled="true" id="hair_color"  name="hair_color" <?php if($value['hair_color']=="blonde"){
                                        echo "checked";
                                      }?> value="blonde">Blonde
                                        </label>
                                       
                                      </div>
                                  </div>
                                  <!-- <div class="row  pull-right hideSavePhysical">
              <button type="button" name="submit" class="btn btn-default btn-block" id="btnArtistPhyAttRegister" style="margin-left: 881px;background-color: #ff007c">Save</button>
            </div> -->
              <div class="col-lg-12 text-right hideSavePhysical">
                                      

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistPhyAttRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closePhysical" onclick="goBackPhysical()">Cancel</button>

<script>
function goBackPhysical() {
                var physicalDiv = document.getElementById('artist_physical_div');
                  physicalDiv.classList.remove("show-border");
       
      // var profileDiv = document.getElementById('artist_physical_div');
      //           profileDiv.classList.add("show-border");
         document.getElementById('weight').readOnly = true;
          document.getElementById('height').readOnly = true;
           document.getElementById('chest').readOnly = true;
            document.getElementById('body_type').disabled = true;
             document.getElementById('ethinicity').disabled = true;
              document.getElementById('hair_type').disabled = true;
              $("input[type=radio]").attr('disabled', true);
              document.getElementById('hair_length').disabled = true;
       document.getElementById('btnArtistPhyAttRegister').readOnly = "none";
      document.getElementById('closePhysical').readOnly = "none";
  $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/editArtist')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('profile_artist_div');
                $(projectsaveDiv).addClass("active");

               $("#showArtistEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-attribute"]').tab('show');
            }
       });
      $(".hideSavePhysical").hide();
           $(".hideIconPhysical").show();
        $(".closePhysical").hide();

    //      $(".hideImage").hide();
    // $(".hideScript").hide();
    // $(".showScript").hide();
    // $(".hideSaveTalent").hide();
    // $(".closeTalent").hide();
    // $(".hideIconTalent").show();
               
}
</script>

                                    </div>
            <!-- <div class="col-lg-12 text-right hideSavePhysical">
                                    
                                     <button type="submit" name="submit" class="btn btn-default  pull-right" id="btnArtistPhyAttRegister" style="background-color: #ff007c;padding: 18px 40px;">Save</button>
                                  </div> -->
            
                               
</div>

                               <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>    
                                 
                          


                <?php } ?>                  
            </form>
           </div>
</div>
          </div>
          <script type="text/javascript">
            function newphysical()
      {
      //alert('hiiiiiiiii');
           $(".hideSavePhysical").show();
           $(".hideIconPhysical").hide();
              $(".closePhysical").show();
      var physicalDiv = document.getElementById('artist_physical_div');
                physicalDiv.classList.add("show-border");
         document.getElementById('weight').readOnly = false;
          document.getElementById('height').readOnly = false;
           document.getElementById('chest').readOnly = false;
            document.getElementById('body_type').disabled = false;
             document.getElementById('ethinicity').disabled = false;
              document.getElementById('hair_type').disabled = false;
              $("input[type=radio]").attr('disabled', false);
              document.getElementById('hair_length').disabled = false;


    document.getElementById('btnArtistPhyAttRegister').readOnly = false;
      document.getElementById('closePhysical').readOnly =false;
            //  document.getElementById('eye_color').checked = true;
               // document.getElementById('skin_tone').readOnly = false;
                   // document.getElementById('hair_color').readOnly = false;
                
      }  


    $("#btnArtistPhyAttRegister").click(function(){
      var validation_status = directorFormValidatePhysical();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        //form_data.append("directorId", $('#directorId').val());

                form_data.append("btnArtistPhyAttRegister", $('#btnArtistPhyAttRegister').val());
                form_data.append("weight", $('#weight').val());    
                form_data.append("height", $('#height').val()); 
                form_data.append("chest", $('#chest').val());
                form_data.append("waist", $('#waist').val());    
                form_data.append("body_type", $('#body_type').val()); 
                form_data.append("ethinicity", $('#ethinicity').val());
                form_data.append("hair_type", $('#hair_type').val()); 
                form_data.append("hair_length", $('#hair_length').val()); 
                //form_data.append("eye_color", $('#eye_color').val()); 
                //form_data.append("skin_tone", $('#skin_tone').val()); 
                //form_data.append("hair_color", $('#hair_color').val()); 

               form_data.append("eye_color", $('input:radio[name=eye_color]:checked').val()); 
               form_data.append("skin_tone", $('input:radio[name=skin_tone]:checked').val());
               form_data.append("hair_color", $('input:radio[name=hair_color]:checked').val());   
               
            
                $.ajax({
                  url: '<?php echo base_url('artist/artist_phy_att/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                console.log("Result................",res);
                if(res.status="success"){
                  alert("Artists Physical Attribute updated Successfully.");
    

      var physicalDiv = document.getElementById('artist_physical_div');
                physicalDiv.classList.remove("show-border");
         document.getElementById('weight').readOnly = true;
          document.getElementById('height').readOnly = true;
           document.getElementById('chest').readOnly = true;
            document.getElementById('body_type').disabled = true;
             document.getElementById('ethinicity').disabled = true;
              document.getElementById('hair_type').disabled = true;
              $("input[type=radio]").attr('disabled', true);
              document.getElementById('hair_length').disabled = true;

      document.getElementById('btnArtistPhyAttRegister').readOnly = "none";
      document.getElementById('closePhysical').readOnly = "none";

              $(".hideSavePhysical").hide();
           $(".hideIconPhysical").show();
            $(".closePhysical").hide();
                 // window.location.href="<?php// echo base_url('dashboard')?>";
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
      function directorFormValidatePhysical()
          {   
              var status = true;         
              var weight=$("#weight").val();
              var height=$("#height").val();
              var chest=$("#chest").val();
              var waist=$("#waist").val();
              var body_type=$("#body_type").val();
              var ethinicity=$("#ethinicity").val();
              var hair_type=$("#hair_type").val();    
              var hair_length=$("#hair_length").val();
              var eye_color=$("#eye_color").val();
              var skin_tone=$("#skin_tone").val();
              var hair_color=$("#hair_color").val();
             
              if(weight.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              else if(height == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                status = false;
              }     
              else if(chest.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                status = false;
              } 
              
              else if(waist.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter City.<strong>");
                status = false;
              } 
              else if(body_type.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                status = false;
              } 
              else if(ethinicity.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                status = false;
              } 
              else if(hair_type=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Date Of Birth.<strong>");
                status = false;
              } 
              else if(hair_length=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              else if(eye_color.trim() =='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Select profile Picture.<strong>");
                status = false;
              }
              else if(skin_tone=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast terms and Conditions.<strong>");
                status = false;
              }
              else if(hair_color=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast terms and Conditions.<strong>");
                status = false;
              }
              console.log("validation_status....................",status);
              return status;
              //console.log(status);
          }

            
        }); 
  </script>

<!---End Phy Attt---->

<!-----social link start here--->

<div class="tab-pane fade" id="nav-link" role="tabpanel" aria-labelledby="nav-link-tab">
 
             
                   <div id="link" style="background-color: #fff;">
                     
                      <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding-left: 37px;padding-right: 37px;padding-top: 20px;padding-bottom: 20px;/* padding: 36px; */">

                        <?php 
                            foreach ($result as $value) {
                            //print_r($value);exit;
                             ?>
                           
                           <div class="add-more-block row" style=" border: 0.75px solid #ddd;" >
<!-- start -->


<!-- end -->

                        <div class="row" id="artist_social_div" style="
    width: 100%;
    text-align: center;
">

                            <div class="col-lg-12">
                        <div class="row">
                       <!-- <div class="col-lg-6 text-center "> -->
                         <!--  <h3 class="txtred" style="margin-right: -388px;">Social Links</h3> -->
                           <!--  </div> -->

                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hideIconsocial" style="">
                        
                        <i class="fa fa-pencil" data-toggle="modal" onclick="newSocial()" style="
                        float: right;
          display: initial;
          font-size: 21px;
          padding-top: 9px;
       /*   margin-left: 282px;*/
    cursor: pointer;
    
          "></i>
                       </div>
                     </div>
                     </div>

<!-- strat -->
  

<!-- end -->



                            <!-- ************** -->
                           <div class="col-lg-12" >
                                    <!-- <div class="col-lg-6 "style="padding-left: 72px;padding-top: 15px;"> -->
                                     <div class="row">
                                      <div class="col-lg-12"> </div>
                                      
                                       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 15px;" id="stylechnage">
                                           
                                 <?php 

$facebook_url=$value['facebook_url'];

// echo $facebook_url;
 if (false === strpos($facebook_url, '://')) {
    $facebook_url = 'http://' . $facebook_url;
   
}else
{
   $facebook_url = $facebook_url;
}
$instagram_url=$value['instagram_url'];
if (false === strpos($instagram_url, '://')) {
    $instagram_url = 'http://' . $instagram_url;
    // echo $in_url;exit;
}
else
{
   $instagram_url = $instagram_url;
}

   $twitter_url=$value['twitter_url'];
   if (false === strpos($twitter_url, '://')) {
    $twitter_url = 'http://' . $twitter_url;
  // echo $tw_url;exit;
}
else
{
   $twitter_url = $twitter_url;
}

   $website_url=$value['website_url'];
    if (false === strpos($website_url, '://')) {
    $website_url = 'http://' . $website_url;
   // echo $wb_url;exit;
}
else
{
   $website_url = $website_url;
}
   $youtube_url=$value['youtube_url']; 
   // echo $youtube_url;exit;
   if (false === strpos($youtube_url, '://')) {
    // echo $youtube_url;exit;
    $youtube_url = 'http://' . $youtube_url;
   // echo $youfft_url;exit;
}
else
{
   $youtube_url = $youtube_url;
}
    $imdb_url=$value['imdb_url'];
    if (false === strpos($imdb_url, '://')) {
    $imdb_url = 'http://' . $imdb_url;
   // echo $fb_url;
}
else
{
   $imdb_url = $imdb_url;
}

                                 ?> 

<div class="col-lg-12" >
  <div class="row" style="padding-bottom: 12px;">
  <div class="col-lg-1">
 <a href="<?php echo $facebook_url;?>" target="_blank" style="cursor:pointer;">
     <i class="fa fa-facebook mr-2" style="
    color: #3B5998;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
  </div>
  <div class="col-lg-5">
      <input type="text" class="social-link-input-class" title="<?php echo $facebook_url;?>" value="<?php echo $facebook_url;?>"  id="facebook" style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;
          " readonly name="facebook"   placeholder="facebook"/>
  </div>
 

    <div class="col-lg-1">
      <a href="<?php echo $instagram_url;?>" target="_blank" style="cursor:pointer;"> <i class="fa fa-instagram mr-2"  style="
    color: #cd486b;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                
    </div>
    <div class="col-lg-5">
       <input type="text" style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 11px;*/cursor: pointer;/*color: #cd486b;*/
          "
 readonly class="social-link-input-class" title="<?php echo $instagram_url;?>" value="<?php echo $instagram_url;?>"  id="instagram"  name="instagram"   placeholder="Instagram"/>
    </div>  
  </div>
</div>


<div class="col-lg-12">
  <div class="row" style="padding-bottom: 12px;">
    <div class="col-lg-1">
  <a href="<?php echo $website_url;?>" target="_blank">
                                         

     <i class="fa fa-globe mr-2"  style="
    color: #cd486b;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i> </a>
    </div>
    <div class="col-lg-5">
        <input type="text"  readonly class="social-link-input-class" title="<?php  echo $website_url;?>" value="<?php  echo $website_url;?>"  id="website"  name="website"  style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
          /*padding-left: 13px;*/
          cursor: pointer;
          "  placeholder="Website Link"/>
      
    </div>  
 
    <div class="col-lg-1">
       <a href="<?php echo $twitter_url;?>" target="_blank">
        <i class="fa fa-twitter mr-2"  style="
    color: #1DA1F2;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                          
    </div>
    <div class="col-lg-5">
       <input type="text" class="social-link-input-class" style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;/*color: #1DA1F2;*/
          " readonly value="<?php echo $twitter_url; ?>" title="<?php echo $twitter_url;?>" id="twitter"  name="twitter"   placeholder="Twitter"/>
    </div>  
  </div>
</div>


      <div class="col-lg-12">
  <div class="row" style="padding-bottom: 12px;">
    <div class="col-lg-1">
      <a href="<?php echo $youtube_url;?>" target="_blank">  <i class="fa fa-youtube mr-2"  style="
    color: #ff0000;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
    </div>
    <div class="col-lg-5">
       <input type="text" class="social-link-input-class " style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;/*color: #ff0000;*/
          " title="<?php echo $youtube_url; ?>" readonly value="<?php echo $youtube_url; ?>"  id="youtube"  name="youtube"   placeholder="YouTube"/>
    </div>  
  
              <div class="col-lg-1">
                 <a href="<?php echo $imdb_url;?>" target="_blank">
                   <i class="fa fa-imdb mr-2"  style="
    color: #f5de50;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                
              </div>

                <div class="col-lg-5">
    <input type="text" readonly class="social-link-input-class" style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 25px;*/cursor: pointer;/*color: #f5de50;*/
          " value="<?php echo $imdb_url;?>" id="imdb"  name="imdb"   placeholder="IMDB"/>
                </div>            
                  </div>
                    </div>                                    <!-- background-color: #cecece94; -->
                                             


                                              
                                        <!-- *********** -->
 <!-- <div class="col-lg-6" style="
    padding-left: 130px;padding-top: 15px;
"> -->
                                         <!-- class="col-lg-6 col-md-12 col-sm-12 col-xs-12" -->
                                        

                                            
                                           

                                           
                                        </div>
                                       
                                           <div class="col-lg-12 text-right hideSaveSocial" style="
    margin-bottom: 20px;">
                          <!--  <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;" id="btnArtistSocialLinksRegister">Save</button>
<button type="button" class="btn btn-default  pull-right id="closeArtistsocial" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" onclick="goBacksocial()">Cancel</button> -->                 

                                          <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        font-size: 0.75rem !important;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    "id="btnArtistSocialLinksRegister" >Save</button>
    <button type="button" class="btn btn-default  pull-right" id="closeArtistsocial" style="
        text-align: right;
        float: right;
        font-size: 0.75rem !important;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    " onclick="goBacksocial()">Cancel</button>

   <script>
function goBacksocial() {
         var socialDiv = document.getElementById('artist_social_div');
                  socialDiv.classList.remove("show-border");
           
           document.getElementById('facebook').readOnly = true;
            document.getElementById('instagram').readOnly = true;
             document.getElementById('twitter').readOnly = true;
              document.getElementById('youtube').readOnly = true;
               document.getElementById('website').readOnly = true;
                document.getElementById('imdb').readOnly = true;
                 document.getElementById('btnArtistSocialLinksRegister').readOnly = "none";


 //document.getElementById('closeArtistsocial').readOnly = "none";



           $(".hideSaveSocial").hide();
             $(".closeArtistsocial").hide();
          
             $(".hideIconsocial").show();
           

                 
}
</script>


                         
                                        </div>
                                     </div>
                                        <!-- ********** -->

                          </div>
                        </div>
                      </div>
                          <div class="col-md-12">
                            <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
                         
                              <?php } ?>
                                       
                  </form>
                   </div>

          </div>
          <script type="text/javascript">
      function newSocial()
      {
          $(".hideSaveSocial").show();
             $(".hideIconsocial").hide();
              $(".closeArtistsocial").show();

             var socialDiv = document.getElementById('artist_social_div');
                  socialDiv.classList.add("show-border");
           document.getElementById('facebook').readOnly = false;
            document.getElementById('instagram').readOnly = false;
             document.getElementById('twitter').readOnly = false;
              document.getElementById('youtube').readOnly = false;
               document.getElementById('website').readOnly = false;
                document.getElementById('imdb').readOnly = false;
                 //document.getElementById('btnArtistSocialLinksRegister').readOnly = false;


// document.getElementById('closesocial').readOnly = false;
         //   $(".hideSaveSocial").show();
         //   $(".hideIconsocial").hide();
         // document.getElementById('facebook').readOnly = false;
         //  document.getElementById('instagram').readOnly = false;
         //   document.getElementById('twitter').readOnly = false;
         //    document.getElementById('youtube').readOnly = false;
         //     document.getElementById('website').readOnly = false;
         //      document.getElementById('imdb').readOnly = false;
      }  
        $("#btnArtistSocialLinksRegister").click(function(){
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
                  url: '<?php echo base_url('artist/artist_social_links/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  var socialDiv = document.getElementById('artist_social_div');
                  socialDiv.classList.remove("show-border");
           
                    alert("Social Link Updated Successfully.");

             
           document.getElementById('facebook').readOnly = true;
            document.getElementById('instagram').readOnly = true;
             document.getElementById('twitter').readOnly = true;
              document.getElementById('youtube').readOnly = true;
               document.getElementById('website').readOnly = true;
                document.getElementById('imdb').readOnly = true;
                 document.getElementById('btnArtistSocialLinksRegister').readOnly = "none";


 document.getElementById('closeArtistsocial').readOnly = "none";


           $(".hideSaveSocial").hide();
             $(".closeArtistsocial").hide();
          
             $(".hideIconsocial").show();

                  //alert("Social Link Updated Successfully.");
                  //window.location.href="<?php //echo base_url('dashboard')?>";
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


<!--links End --->

<!------media start here -->


<div class="tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
    
           <div id="media" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                  <?php foreach($result as $value){
                        ?>
 <div class="add-more-block row" style="
    margin-bottom: 13px;
    /*px;*/
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 6px;
    margin-right: 6px;
     border: 0.75px solid #ddd;
    " >
                            <div class="col-lg-12">
                        <div class="row">
                       <!-- <div class="col-lg-6 text-center "> -->
                         <!--  <h3 class="txtred" style="margin-right: -388px;">Social Links</h3> -->
                           <!--  </div> -->

                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hideIconsocial" style="">
                        
                        <i class="fa fa-pencil" data-toggle="modal" onclick="newmedia()" style="
                        float: right;
          display: initial;
          font-size: 21px;
          padding-top: 9px;
       /*   margin-left: 282px;*/
    cursor: pointer;
    
          "></i>
                       </div>
                     </div>
                     </div>





                       
                  <div class="row" id="artist_media_div">
                      <!-- ************** -->
                                     <div class="col-md-12 text-center">
           <!--  <br>
            <h3>Media: Choose your Media to strengthen your profile</h3><hr> -->
                                    </div>
               <div class="video-box col-lg-12" style="padding: 20px;">
                        <div class="row partision">
                      <div class="col-lg-12">
                         <div class="col-lg-12">
                              <h5 class="txtred">Upload Videos(if Any)</h5>
                          </div>
                         <div class="add-more-block" style="border:unset;">
                       <div class="col-md-12">
                          <div class="form-group">
                             <!-- <label>Video Url </label> -->
                                <input name="videos" id="videos" readonly value="<?php echo $value['video_url'];?>" data-num="0" type="text" class="form-control-plaintext" 
    padding: 5px;">
                             </div>
                           </div>
                        </div> 
                      </div> 
                        </div>
                    </div>

    <!-- table starts -->
    

    <!-- table ends -->
          <div class="script-box col-lg-12" style="padding: 20px;">
            <div class="row partision">
               <div class="col-md-6">
               <div class="col-md-6" style="
    margin: 0 auto;
">
                  <h5 class="txtred">Upload Scripts(if Any)</h4>
              
                </div>
                   <div class="add-more-block" style="border:unset;">
                   <!--  //new code -->
<div class="col-md-6 col-sm-3 col-xs-3" style="
    text-align: center;
    margin: 0 auto;
">
  <div class="onboarding-media-file ng-star-inserted" style="text-align: center;
    /*margin: 15px;*/
    position: relative;">
                          <i aria-hidden="true" class="fa fa-file-text-o" style="/*height: 220px;*/
    font-size: 2rem;
    /*padding-top: 2rem;*/
    color: #a7a7a7;"></i>
                          <!----><div class="file-upload ng-star-inserted">
                            <label class="file-upload-label" for="11"></label>

                          <label class="btn btn-default btn-file hideScriptMedia" style="background-color: rgb(255, 0, 124);height: 33px;width: 118px;/* padding-bottom: 23px; */padding-top: 8px;padding-left: 14px;">
                                            Browse  Script<input type="file" id="scripts"  name="scripts" style="display: none;">
                    </label>

                      <?php if($value['scripts']){  ?>
                    <label class="txtgreen" id="script-name"> <?php echo $value['scripts']; ?> </label>
             <?php } else{ ?> 
                        <label class="txtgreen" id="script-name">  </label>
               <?php } ?>
                        </div>
</div>
</div>
                   <!-- ends -->
             
            </div> 
            </div>
            <div class="col-md-6">
               <div class="col-md-6" style="/* text-align: center; *//* align-content: center; */
    margin: 0 auto;
">
                  <h5 class="txtred" style="
    text-align: center;
    align-content: center;
">Upload Audio(if Any)</h4>  
                </div>
                <div class="add-more-block" style="border:unset;">
<!-- new starts here -->
<div class="col-md-6 col-sm-3 col-xs-3" style="
    text-align: center;
    margin: 0 auto;
">
<div class="onboarding-media-file ng-star-inserted" style="text-align: center;
   /* margin: 15px;*/
    position: relative;">
                          <i aria-hidden="true" class="fa fa-microphone" style="/*height: 120px;*/
    font-size: 2rem;
  /*  padding-top: 2rem;*/
    color: #a7a7a7;"></i>
                          <!----><div class="file-upload ng-star-inserted">
                            <label class="file-upload-label"  style="margin: 0 auto;"></label>
                          
                            <label class="btn btn-default btn-file hideScriptAudio" style="background-color: rgb(255, 0, 124);height: 33px;width: 118px;/* padding-bottom: 23px; */padding-top: 8px;padding-left: 14px;">
                                            Browse  Audio<input type="file" id="audios"   name="audios" accept="audio/*" style="display: none;margin: 0 auto;background-color: #ff007c;">
                    </label>

                     <?php if($value['audio']){  ?>
                    <label class="txtgreen" id="audio-name"> <?php echo $value['audio']; ?> </label>
             <?php } else{ ?> 
               <label class="txtgreen" id="audio-name">  </label>
               <?php } ?>
                         <!--  <p style="padding-bottom: 5px;">Choose a good audio file, make it count!</p> -->
                        </div>
                      </div>
                    </div>
<!-- new ends here -->


             
            </div>
           
            </div>
            </div>
          </div>
            <div class="col-md-12">
              <h4 class="txtred text-center" style="padding-bottom: 20px;">Upload Pictures</h4>
            </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                      <?php if($value['head_shot']){ ?>
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['head_shot'];?>" class="picture-src height200" id="headShotPreview" title=""/>
                                        <?php }else { ?>
                                           <img src="<?php echo base_url()?>assets/images/userhead.jpg" class="picture-src height200" id="headShotPreview" title=""/>
                                        <?php } ?>
                                      <!-- <input type="file" name="head_shot"> -->
                                      <div class="hideImageHeadShot">
                                       <label class="btn btn-default btn-file" style="    margin-top: 20px;display: block;background-color: #ff007c;">
                                     Browse <input type="file" id="head_shot"  name="head_shot" style="display: none;">
                                    </label>
                                     <h5 class="text-center">Choose a good head shot Picture</h5>
                                     <label class="txtgreen" id="headView-name">  </label>
                                   </div>
                                  </div>
                                 
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                       <?php if($value['left_pic']){ ?>
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['left_pic'];?>" class="picture-src height200" id="leftShotPreview" title=""/>
                                    <?php } else{ ?>
                                      <img src="<?php echo base_url()?>assets/images/userleft-side1.jpg" class="picture-src height200" id="leftShotPreview" title=""/>
                                     <?php }  ?>
                                      <!-- <input type="file" name="left_shot"> -->
                                      <div class="hideImageLeft">
                                      <label class="btn btn-default btn-file" style="margin-top: 20px;display: block;background-color: #ff007c;">
                                     Browse <input type="file" id="left_shot"  name="left_shot" style="display: none;">
                                    </label>
                                      <label class="txtgreen" id="leftView-name">  </label>
                                  <h5 class="text-center">Choose Left</h5>
                                  </div>
                                </div>
                                 <!--  <h5 class="text-center">Choose Left</h5> -->
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                       <?php if($value['right_pic']){ ?>
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['right_pic'];?>" class="picture-src height200" id="rightShotPreview" title=""/>
                                    <?php } else{ ?>
                                      <img src="<?php echo base_url()?>assets/images/userright-side1.jpg" class="picture-src height200" id="rightShotPreview" title=""/>
                                     <?php }  ?>
                                      <!-- <input type="file" name="right_shot"> -->
                                       <div class="hideImageRight">
                                       <label class="btn btn-default btn-file" style="    margin-top: 20px;display: block;background-color: #ff007c;">
                                     Browse <input type="file" id="right_shot"  name="right_shot" style="display: none;">
                                    </label>
                                     <label class="txtgreen" id="rightView-name">  </label>
                                  <h5 class="text-center">Choose Right</h5>
                                  </div>
                                </div>
                                  <!-- <h5 class="text-center">Choose Right</h5> -->
                              </div>
                          </div>
                          <div class="col-sm-3">
                             <div class="picture-container">
                                  <div class="picture">
                                       <?php if($value['full_pic']){ ?>
                                      <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['full_pic'];?>" class="picture-src height200" id="fullShotPreview" title=""/>
                                    <?php } else{ ?>
                                      <img src="<?php echo base_url()?>assets/images/userFullImg.png" class="picture-src height200" id="fullShotPreview" title=""/>
                                     <?php }  ?> 
                                      <!-- <input type="file" name="full_shot"> -->
                                       <div class="hideImageFull">
                                       <label class="btn btn-default btn-file" style="    margin-top: 20px;    display: block;
    background-color: #ff007c;">
                                     Browse <input type="file" id="full_shot"  name="full_shot" style="display: none;">
                                    </label>
                                    <label class="txtgreen" id="fullView-name">  </label>
                                    <h5 class="text-center">Choose Full</h5>
                                  </div>
                                </div>
                                  <!-- <h5 class="text-center">Choose Full</h5> -->
                              </div>
                          </div>
                    <!-- <div class="col-lg-12 text-right hideSaveMedia">
                                 

             <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistMediaRegister" style="    background-color: #ff007c;">Save</button>
                                  </div> -->
                                      <div class="col-lg-12 text-right hideSaveMedia" style="padding-right: 36px;padding-bottom: 10px;">
                                      <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistMediaRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;" >Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closeMedia" onclick="goBackprofileMedia()">Cancel</button>

<script>
function goBackprofileMedia() {
                var profileDiv = document.getElementById('artist_media_div');
                  profileDiv.classList.remove("show-border");
     
        document.getElementById('videos').readOnly = true;
     
       document.getElementById('btnArtistMediaRegister').readOnly = "none";
      document.getElementById('closeMedia').readOnly = "none";
     
    $(".hideImageHeadShot").hide();
    $(".hideImageLeft").hide();
    $(".hideImageRight").hide();
    $(".hideImageFull").hide();
    $(".hideScriptMedia").hide();
     $(".hideScriptAudio").hide();
    
    $(".showScript").hide();
    $(".hideSaveMedia").hide();
    
    $(".hideIcon").show();

                 
}
</script>

                                    </div>
                                  
                         </div>
                          <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>   


                 
          
              <?php } ?>

            </form>
           </div>
</div>
          </div>
<script type="text/javascript">
              $("#audios").change(function(){
                   $("#audio-name").text(this.files[0].name);
               });
           $("#scripts").change(function(){
                 $("#script-name").text(this.files[0].name);
            });
           $("#head_shot").change(function(){
               $("#headView-name").text(this.files[0].name);
           });
           $("#left_shot").change(function(){
                $("#leftView-name").text(this.files[0].name);
           });
           $("#right_shot").change(function(){
               $("#rightView-name").text(this.files[0].name);
           });
           $("#full_shot").change(function(){
               $("#fullView-name").text(this.files[0].name);
            });

function newmedia()
  {
    //alert('hiii');
    $(".hideImageHeadShot").show();
    $(".hideImageLeft").show();
    $(".hideImageRight").show();
    $(".hideImageFull").show();
    $(".hideScriptMedia").show();
     $(".hideScriptAudio").show();
    
    $(".showScript").hide();
    $(".hideSaveMedia").show();
    $(".closeMedia").show();
    $(".hideIcon").hide();
    var profileDiv = document.getElementById('artist_media_div');
                profileDiv.classList.add("show-border");

    document.getElementById('videos').readOnly = false;
    document.getElementById('closeMedia').readOnly = false;
     document.getElementById('btnArtistMediaRegister').readOnly = false;

  }



   $(document).ready(function () {
      var maxField = 3;
        var addVideoBtn = $('.add_video_btn');
         var addScriptBtn = $('.add_script_btn');
          var addAudioBtn = $('.add_audio_btn');
        
        var video_wrapper = $('.video-box');
        
        var video_x = 1;
        var video_num = 1;
      
        $(addVideoBtn).click(function () {
         
             $('.add-video-details').show();
              //$('.add-script-details').show();
              // $('.add-audio-details').show();


       });
        $(addScriptBtn).click(function () {
         
            // $('.add-video-details').show();
              $('.add-script-details').show();
              // $('.add-audio-details').show();


       });
        $(addAudioBtn).click(function () {
         
            // $('.add-video-details').show();
              //$('.add-script-details').show();
               $('.add-audio-details').show();


       });
        
       
        $(video_wrapper).on('click', '.remove_btn_edu', function (e) {
            e.preventDefault();
            var num = $(this).attr('data-num');
            $(this).closest('.add-more-block').remove();
            num--;
        });
       
    });
    
    
   


    /*$("#btnArtistExpRegister").click(function(){
      var skill=$("#skill").val();
      var sub_skill=$("#sub_skill").val();
      var project_title=$("#project_title").val();
      var project_role=$("#project_role").val();
      var year=$("#year").val();
      var skill1=$("#skill1").val();
      var sub_skill1=$("#sub_skill1").val();
      var project_title1=$("#project_title1").val();
      var project_role1=$("#project_role1").val();
      var year1=$("#year1").val();
            $.ajax({
                type: "POST",
                url: '<?php //echo base_url('artist/artist_exp/'); ?>',
                data: {
                    skill: skill,
                    sub_skill:sub_skill,
                    project_title:project_title,
                    project_role:project_role,
                    year:year,
                    skill1: skill1,
                    sub_skill1:sub_skill1,
                    project_title1:project_title1,
                    project_role1:project_role1,
                    year1:year1
                }
                
            })
            .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Experience updated Successfully.");
                  //window.location.href="<?php // echo base_url('')?>";
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
        });*/
        



    $("#btnArtistMediaRegister").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();
         form_data.append('scripts', $('input[type=file]')[1].files[0]); 
        form_data.append('audios', $('input[type=file]')[2].files[0]); 

        form_data.append('head_shot', $('input[type=file]')[3].files[0]);
        form_data.append('left_shot', $('input[type=file]')[4].files[0]);
        form_data.append('right_shot', $('input[type=file]')[5].files[0]);
        form_data.append('full_shot', $('input[type=file]')[6].files[0]);
        form_data.append("videos", $('#videos').val());    
        form_data.append("scripts", $('#scripts').val())

              
        
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

    var profileDiv = document.getElementById('artist_media_div');
                  profileDiv.classList.remove("show-border");
     
        document.getElementById('videos').readOnly = true;
     
       document.getElementById('btnArtistMediaRegister').readOnly = "none";
      document.getElementById('closeMedia').readOnly = "none";
     
    $(".hideImageHeadShot").hide();
    $(".hideImageLeft").hide();
    $(".hideImageRight").hide();
    $(".hideImageFull").hide();
    $(".hideScriptMedia").hide();
     $(".hideScriptAudio").hide();
    
    $(".showScript").hide();
    $(".hideSaveMedia").hide();
    
    $(".hideIcon").show();


     //$(".hideSave").hide();
         $(".closeMedia").hide();
      
    //  $(".hideIcon").show();
                  //alert("Media updated Successfully.");
                 // window.location.href="<?php echo base_url('dashboard')?>";
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
              var videos=$("#videos").val();
              var videos1=$("#videos1").val();
              
              
              if(videos.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Name.<strong>");
                status = false;
              }            
              
              
              
              return status;
              console.log(status);
          }

            
        }); 
  
    
    $("#btnArtistMediaRegister").click(function(){
      var videos=$("#videos").val();
      var videos1=$("#videos1").val();
      var scripts=$("#scripts").val();
      var audios=$("#audios").val();
      var scripts1=$("#scripts1").val();
      var audios1=$("#audios1").val();
      var headShotPreview=$("#headShotPreview").val();
      var leftShotPreview=$("#leftShotPreview").val();
      var rightShotPreview=$("#rightShotPreview").val();
      var fullShotPreview=$("#fullShotPreview").val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('artist/artist_media/'); ?>',
                data: {
                    videos:videos,
                    videos1:videos1,
                    scripts:scripts,
                    scripts1:scripts1,
                    audios:audios,
                     audios1:audios1,
                    headShotPreview:headShotPreview,
                    leftShotPreview:leftShotPreview,
                    rightShotPreview:rightShotPreview,
                    fullShotPreview:fullShotPreview
                }
            })
            .done(function (res) {
                alert('media Updated Successfully..');             
            });
        }); 

  </script>

<!---Media end -->



<div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">

  <!-- <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
           <h3 class="txtred">Experience</h3>
                
              </div>
            </div> -->
           <div id="experience" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                   <?php 
                      // foreach ($projectType as $project) { ?>
               <div class="row">

                   <div class="pull-right col-md-12" style="
    margin-bottom: 20px;">
              
                          <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Expdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Experience</label></a>
                      </div>
                  <!--   <div class="pull-right col-md-12" style="
    margin-bottom: 20px;">
              
                          <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Expdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Experience</label></a>
                      </div> -->
                      
          <div class="video-box col-md-12">
            <?php
                      $resul= $this->db->select('*')->from('artist_exp')->get()->result_array();
                                     //print_r($result);exit;
                                    foreach ($resul as $valu) {  ?>
            
            
            <div class="add-more-block row" id="artist_experience_div<?php echo $valu['exp_id']?>">
              <div class="col-lg-12 hideIconExp<?php echo $valu['exp_id']?>">
                  
                  <i class="fa fa-edit" data-toggle="modal"         

                   onclick="newExp(<?php echo $valu['exp_id']?>, <?php echo htmlspecialchars(json_encode($resul)) ?>)" style="
          float: right;
          font-size: 18px;
          padding-top: 10px;
          margin-left: 10px;
       cursor: pointer;
     "></i>



            <i class="material-icons float-right" onclick="deleteExp(<?php echo $valu['exp_id']?>)" style=style="
          float: right;
          font-size: 18px;
          padding-top: 10px;
          margin-left: 10px;
       cursor: pointer;
     "">delete_forever</i>


                 </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Skill Type *</label>
                  <select name="skill" id="skill<?php echo $valu['exp_id']?>" disabled="true" class="form-control-plaintext" >
                                          <option value="accents_british"<?php if($valu['skill_type']=="accents_british"){
                                        echo "selected";
                                      }?>>Accents British</option>
                                          <option value="dancing" <?php if($valu['skill_type']=="dancing"){
                                        echo "selected";
                                      }?>>Dancing</option>
                                          <option value="mime" <?php if($valu['skill_type']=="mime"){
                                        echo "selected";
                                      }?>>Mime</option>
                                          <option value="singing" <?php if($valu['skill_type']=="singing"){
                                        echo "selected";
                                      }?>>Singing</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sub Skill Type *</label>
                  <select name="sub_skill" disabled="true" id="sub_skill<?php echo $valu['exp_id']?>" class="form-control-plaintext" >
                                          <option value="accents_british"<?php if($valu['sub_skill_type']=="accents_british"){
                                        echo "selected";
                                      }?>>Accents British</option>
                                          <option value="western" <?php if($valu['sub_skill_type']=="western"){
                                        echo "selected";
                                      }?>>Western</option>
                                          <option value="mime" <?php if($valu['sub_skill_type']=="mime"){
                                        echo "selected";
                                      }?>>Mime</option>
                                          <option value="classical" <?php if($valu['sub_skill_type']=="classical"){
                                        echo "selected";
                                      }?>>Classical</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Project Title *</label>
                  <input type="text" readonly name="project_title"  value="<?php echo $valu['project_title'];?>" id ="project_title<?php echo $valu['exp_id']?>" class="form-control-plaintext" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Role in Project </label>
                  <input type="text"readonly  name="project_role" value="<?php echo $valu['role_in_project'];?>" id="project_role<?php echo $valu['exp_id']?>" class="form-control-plaintext" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Year</label>
                  <input type="text" name="year" readonly value="<?php echo $valu['year'];?>" id="year<?php echo $valu['exp_id']?>" class="form-control-plaintext" >
                </div>
              </div>

<!-- 
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveExp"style="
    
    padding: 20px;
    ">
    <button type="button"  name="submit" id="saveBtnExp<?php //echo $valu['exp_id']?>" style="width: 110px;margin-left: 743px;float: right; display: none;background-color: #ff007c;" onclick="GetExp(<?php //echo $valu['exp_id']?>)"
    class="btn btn-default btn-block" >Save</button>
                       </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveExp" id="hideSaveExp<?php echo $valu['exp_id']?>" style="padding-right: 36px;padding-bottom: 10px;">
<!-- style="width: 110px;/* margin-left: 743px; */float: right;margin-top: 0.3rem;display: block;background-color: rgb(255, 0, 124); -->

                               <button type="button" id="saveBtnExp<?php echo $valu['exp_id']?>"  name="submit" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;" onclick="GetExp(<?php echo $valu['exp_id']?>)"
       class="btn btn-default btn-block" >Save</button>



<button type="button"  onclick="goBackExp(<?php echo $valu['exp_id']?>)" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" class="btn btn-default btn-block">Cancel</button>

<script>
  function test() {
    // body...
    alert(999);
  }
function goBackExp($data) {
  //alert($data);
    //window.history.back();
    console.log("in go back");
 
    var experienceDiv = document.getElementById('artist_experience_div'+ $data);
                  experienceDiv.classList.remove("show-border");
//$('input[type="text"], textarea').removeAttr('readonly');
         // document.getElementById('school'+$data).readOnly = true;
         //  document.getElementById('course'+$data).readOnly = true;
         //  document.getElementById('year_edu'+$data).readOnly = true;
         //  document.getElementById('city_edu'+$data).readOnly = true;
         //  document.getElementById('country'+$data).readOnly = true;
         

         document.getElementById('skill'+$data).disabled = true;
          document.getElementById('sub_skill'+$data).disabled = true;
        document.getElementById('project_title'+$data).readOnly = true;
        document.getElementById('project_role'+$data).readOnly = true;
          document.getElementById('year'+$data).readOnly = true;
           
            document.getElementById('saveBtnExp'+$data).style.display = "none";  
     // document.getElementById('saveBtnEdu'+$data).style.display = "none";
     // document.getElementById('hidecloseEdu'+$data).style.display = "none";

              $("#hideSaveExp"+$data).hide();
        $(".hideIconExp"+$data).show();
        // $(".hidecloseEdu"+$data).hide();
       
}
</script>

                         </div>
              
              
            </div>  
          <?php } ?>
          </div>

<!----next tab--->
  <!-- <div class="video-box col-md-12 add-new-details">-->
            <div class="video-box col-md-12 add-exp-details">
            
            
            <div class="add-more-block row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Skill Type *</label>
                  <select name="skill" id="skill" class="form-control">
                 
                                          <option value="dancing" <?php if($valu['skill_type']=="dancing"){
                                        echo "selected";
                                      }?>>Dancing</option>
                                          <option value="mime" <?php if($valu['skill_type']=="mime"){
                                        echo "selected";
                                      }?>>Mime</option>
                                          <option value="singing" <?php if($valu['skill_type']=="singing"){
                                        echo "selected";
                                      }?>>Singing</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sub Skill Type *</label>
                  <select name="sub_skill" id="sub_skill" class="form-control">
                 
                                          <option value="western" <?php if($valu['sub_skill_type']=="western"){
                                        echo "selected";
                                      }?>>Western</option>
                                          <option value="mime" <?php if($valu['sub_skill_type']=="mime"){
                                        echo "selected";
                                      }?>>Mime</option>
                                          <option value="classical" <?php if($valu['sub_skill_type']=="classical"){
                                        echo "selected";
                                      }?>>Classical</option>
                  </select>
                </div>
              </div>

              <div class="row  pull-right">
                                        <button class="closeBtn" type="button" onclick="closeExp()"> X </button>
                                      </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Project Title *</label>
                  <input type="text" name="project_title" value="" id ="project_title" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Role in Project </label>
                  <input type="text" name="project_role"value="" id="project_role" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Year</label>
                  <input type="text" name="year" id="year" value="" class="form-control">
                </div>
              </div>
            </div>  
          </div>

                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddExp"style="
    
    padding: 20px;
    ">
                             <button type="button" onclick="AddExp()" name="submit" style="width: 110px;
    float: right; background-color: #ff007c;" class="btn btn-default btn-block">Add</button>
  <!--   id="btnDirectorWorkexp" -->
                       </div>
        </div>
         <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>   


                    <!-- <div class="row  pull-right"><br>
            <button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistExpRegister">Save</button>
          </div> -->
          
                                 
            </form>
           </div>

          </div>
       
          <script type="text/javascript">
            
 function Expdemo()
{
  // alert('hiiiiiiiiiii');
   $('.add-exp-details').show();
   $('.hideaddExp').show();

 }
function closeExp()
 {
  $('.add-exp-details').hide();
   
  }
function AddExp()
  {
    
        var form_data = {            
          
            skill: $('#skill').val(),
            sub_skill: $('#sub_skill').val(),
             project_title: $('#project_title').val(),
              project_role: $('#project_role').val(),
               year: $('#year').val(),
           
        };

    $.ajax({
      
        url: '<?php echo base_url('artist/add_artist_exp/'); ?>',
        type: 'POST',
        data: form_data, 
        success: function(msg) {
              $.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
             var projectsaveDiv = document.getElementById('artist_experience_div');
            $(projectsaveDiv).addClass("active");

           $("#showArtistEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-experience"]').tab('show');
        }
   });
          }

     });
      


     return false;


    }

function newExp(id, resultData)
{
  alert('hiiiii');

              $(".add-exp-details"+id).hide();
        $("#hideSaveExp"+id).show();
        $(".hideIconExp"+id).hide();
      console.log("resultData", resultData);
            for(var i=0;i<resultData.length;i++) {
              if (resultData[i].exp_id == id) {
                console.log("Inside IF: ", resultData[i].exp_id);
          
        var parentDivEdit = document.getElementById('artist_experience_div'+id);
            parentDivEdit.classList.add("show-border");
        //$('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('skill'+id).disabled = false;
          document.getElementById('sub_skill'+id).disabled = false;
        document.getElementById('project_title'+id).readOnly = false;
        document.getElementById('project_role'+id).readOnly = false;
          document.getElementById('year'+id).readOnly = false;
           
            document.getElementById('saveBtnExp'+id).style.display = "block";
       
}
else
{
 console.log("Inside ELSE: ", resultData[i].exp_id);
          var tempId = resultData[i].exp_id;

      var parentDiv = document.getElementById('artist_experience_div'+id);
            parentDiv.classList.remove("show-border");


       $('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('skill'+tempId).disabled = true;
          document.getElementById('sub_skill'+tempId).disabled = true;
        document.getElementById('project_title'+tempId).readOnly = true;
        document.getElementById('project_role'+tempId).readOnly = true;
          document.getElementById('year'+tempId).readOnly = true;
           
            document.getElementById('saveBtnExp'+tempId).style.display = "none";



              $(".add-exp-details"+tempId).show();
        $("#hideSaveExp"+tempId).hide();
        $(".hideIconExp"+tempId).show();
}
}
}
function GetExp($data)
{
  //alert($data);
//alert("project_title" +$data);

 // var id=document.getElementById("project_type" +$data).value;

var $skill_new=document.getElementById("skill" +$data).value;
var $sub_skill_new=document.getElementById("sub_skill" +$data).value;
var $project_title_new=document.getElementById("project_title" +$data).value;
var $project_role_new=document.getElementById("project_role" +$data).value;
var $year_new=document.getElementById("year" +$data).value;

//alert($skill_new);
updateExp($data);
}

function deleteExp(id)
{
  
        var r=confirm("Do you want to delete this Association?");
        if (r==true)
        {
           
            $.ajax({
                 
                  url: '<?php echo base_url('artist/delete_exp/'); ?>'+id,
                
                })
             .done(function (res) {
                  console.log(res);
                if(res.status="success"){
$.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
             var profileDiv = document.getElementById('artist_experience_div');
            $(profileDiv).addClass("active");

           $("#showArtistEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-experience"]').tab('show');
        }
   });


                    
            }
          });
              // window.location.href="<?php //echo base_url('dashboard')?>";
          
          }
          
          else
          {
              return false;
          }
      }
function updateExp($data){

       
      //  alert($data);
var $skill_new=document.getElementById("skill" +$data).value;
var $sub_skill_new=document.getElementById("sub_skill" +$data).value;
var $project_title_new=document.getElementById("project_title" +$data).value;
var $project_role_new=document.getElementById("project_role" +$data).value;
var $year_new=document.getElementById("year" +$data).value;
//alert($year_new);
console.log("Inside Exp function........................");
//alert('hiiiiiiiiiii');
       // $("#btnDirectorAsso").click(function(){
      var validation_status = directorFormValidateExp($data);
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();     
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("skill",$skill_new);    
                form_data.append("sub_skill", $sub_skill_new); 
                form_data.append("project_title", $project_title_new); 
                form_data.append("project_role", $project_role_new); 
                form_data.append("year", $year_new); 

                
                var jsonData = {
                  "skill":$skill_new,
                  "sub_skill":$sub_skill_new,
                   "project_title":$project_title_new,
                    "project_role":$project_role_new,
                     "year":$year_new,
                  
                }

                console.log("jsonData", jsonData);
                
                $.ajax({
                  url:'<?php echo base_url('artist/artist_expe/'); ?>'+ $data, 


                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //alert("hiii");
                console.log("RESULT---------------------------",res);
                if(res.status="success"){
                  alert("Experience updated Successfully.");

        var parentDiv = document.getElementById('artist_experience_div'+$data);
            parentDiv.classList.remove("show-border");
       // $('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('skill'+$data).disabled = true;
          document.getElementById('sub_skill'+$data).disabled = true;
        document.getElementById('project_title'+$data).readOnly = true;
        document.getElementById('project_role'+$data).readOnly = true;
          document.getElementById('year'+$data).readOnly = true;
           
            document.getElementById('saveBtnExp'+$data).style.display = "none";

                    $("#hideSaveExp"+$data).hide();
        $(".hideIconExp"+$data).show();

                //window.location.href="<?php  //echo base_url('dashboard')?>";
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
      

            
        //});
        } 

      function directorFormValidateExp($data)
          {   
            //var id=$data;
          alert($data);
              var status = true;         
var $skill_new=document.getElementById("skill" +$data).value;
var $sub_skill_new=document.getElementById("sub_skill" +$data).value;
var $project_title_new=document.getElementById("project_title" +$data).value;
var $project_role_new=document.getElementById("project_role" +$data).value;
var $year_new=document.getElementById("year" +$data).value;

var skill= $skill_new;
var sub_skill=$sub_skill_new;
var project_title=$project_title_new;
var project_role=$project_role_new;
var year=$year_new;


              // if(association_name.trim() == '') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Enter Association Name.<strong>");
              //   status = false;
              // }            
              // else if(association_id.trim() == '') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Enter Association Id.<strong>");
              //   status = false;
              // }     
              console.log("validation_status....................",status);
              return status;
          }

  </script>

<!----Experi end -->


<!----------Education start here------->
<div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
    <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
           <h3 class="txtred">Education</h3>
              <!--   <p class="txtred">Add educational Qualifications(if any)</p> -->
              </div>
            </div>
           <div id="education" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                     
                  <div class="row">
                    <div class="pull-right col-md-12" style="
    margin-bottom: 20px;">
              
                          <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Edudemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Educations</label></a>
                      </div>
                      <!-- ************** -->
                                 <div class="col-md-12 text-center">
           <!--  <br>
            <h3>Education: Add educational Qualifications(if any)</h3><hr> -->
          </div>
          <div class="video-box1 col-md-12">
            <?php
                      $resu = $this->db->select('*')->from('artist_edu')->get()->result_array();
                                     // print_r($result);exit;
                                    foreach ($resu as $val) {  ?>
            <!-- <div class="pull-right col-md-12">
                         
                      </div> -->
            <div class="add-more-block row" id="artist_education_div<?php echo $val['edu_id']?>">
              <div class="col-lg-12 hideIconEdu<?php echo $val['edu_id']?>">
                  
                  <i class="fa fa-edit" data-toggle="modal" onclick="newEdu(<?php echo $val['edu_id']?>, <?php echo htmlspecialchars(json_encode($resu)) ?>)" style="font-size: 34px;


    padding-top: 19px;
    margin-left: 843px;"></i>



            <i class="material-icons float-right" onclick="deleteEdu(<?php echo $val['edu_id']?>)" style="font-size: 34px;
    padding-top: 19px;
    margin-left: -9px;
    margin-right: -9px;">delete_forever</i>


                 </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>School/College/Company *</label>
                  <input type="text" name="school" readonly id="school<?php echo $val['edu_id']?>" value="<?php echo $val['school_clg_company'];?>"  class="form-control-plaintext">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Course Completed *</label>
                  <input type="text" name="course" readonly id="course<?php echo $val['edu_id']?>" value="<?php echo $val['course_completed'];?>"  class="form-control-plaintext">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Year of completion *</label>
                  <input type="text" name="year_edu" readonly id="year_edu<?php echo $val['edu_id']?>" value="<?php echo $val['year_of_completion'];?>"  class="form-control-plaintext">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>City *</label>
                  <input type="text" name="city_edu" readonly id="city_edu<?php echo $val['edu_id']?>" value="<?php echo $val['e_city'];?>" class="form-control-plaintext">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Country *</label>
                  <input type="text" name="country" readonly id="country<?php echo $val['edu_id']?>" value="<?php echo $val['e_country'];?>" class="form-control-plaintext">
                </div>
              </div>
             <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveEdu"style="
    
    padding: 20px;
    ">
    <button type="button"  name="submit" id="saveBtnEdu<?php echo $val['edu_id']?>" style="width: 110px;margin-left: 743px;float: right;display: none; background-color: #ff007c;" onclick="GetEdu(<?php echo $val['edu_id']?>)"
    class="btn btn-default btn-block" >Save</button>
                       </div> -->
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveEdu" id="hideSaveEdu<?php echo $val['edu_id']?>" style="padding-right: 36px;padding-bottom: 10px;">
                               <button type="button" id="saveBtnEdu<?php echo $val['edu_id']?>"  name="submit" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;" onclick="GetEdu(<?php echo $val['edu_id']?>)"
       class="btn btn-default btn-block" >Save</button>



<button type="button"  onclick="goBackEdu(<?php echo $val['edu_id']?>)" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" class="btn btn-default btn-block">Cancel</button>

<script>
function goBackEdu($data) {
  //alert($data);
    //window.history.back();
    console.log("in go back");
   // "artist_education_div<?php echo $val['edu_id']?>"
    var educationDiv = document.getElementById('artist_education_div'+ $data);
                  educationDiv.classList.remove("show-border");
//$('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('school'+$data).readOnly = true;
          document.getElementById('course'+$data).readOnly = true;
          document.getElementById('year_edu'+$data).readOnly = true;
          document.getElementById('city_edu'+$data).readOnly = true;
          document.getElementById('country'+$data).readOnly = true;
           
      document.getElementById('saveBtnEdu'+$data).style.display = "none";
     // document.getElementById('hidecloseEdu'+$data).style.display = "none";

              $("#hideSaveEdu"+$data).hide();
        $(".hideIconEdu"+$data).show();
        // $(".hidecloseEdu"+$data).hide();
       
}
</script>
   <!--  <button type="button" id="closeBtn<?php //echo $key['work_id']?>"  name="close" style="padding-top: 10px;float: right;width: 71px;/* margin-left: 743px; *//* float: right; *//* background-color: rgb(255, 0, 124); *//* display: none; */" onclick="GetProject(<?php //echo $key['work_id']?>)"
       class="btn btn-default btn-block" >Close</button> -->




                         </div>
                    
          </div>
            <?php } ?>  
          </div>
           <div class="video-box1 col-md-12 add-new-details">
            
          
            <div class="add-more-block row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>School/College/Company *</label>
                  <input type="text" name="school"  id="school" value=""  class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Course Completed *</label>
                  <input type="text" name="course" id="course" value=""  class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Year of completion *</label>
                  <input type="text" name="year_edu" id="year_edu" value=""  class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>City *</label>
                  <input type="text" name="city_edu"  id="city_edu" value=""  class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Country *</label>
                  <input type="text" name="country" id="country" value=""  class="form-control">
                </div>
              </div>
               <div class="row  pull-right">
                                        <button class="closeBtn" type="button" onclick="closeEdu()"> X </button>
                                      </div>
            </div>  
          </div>

        </div>

 <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>   



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddEdu"style="
    
    padding: 20px;
    ">
                             <button type="button" onclick="AddEdu()" name="submit" style="width: 110px;
    float: right; background-color: #ff007c;" class="btn btn-default btn-block">Add</button>
  <!--   id="btnDirectorWorkexp" -->
                       </div>
<!-- 
                    <div class="row  pull-right"><br>
            <button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistEducationRegister">Save</button>
          </div> -->
                   
            </form>
           </div>

          </div>

<script type="text/javascript">
  function closeEdu()
 {
  $('.add-new-details').hide();
   document.getElementById("school").value = '';
   document.getElementById("course").value = '';
  }
function Edudemo()
{
   $('.add-new-details').show();
   $('.hideaddEdu').show();
}

function AddEdu()
  {
    // $('.submit').click(function(){
        //var id = (this.id);
        var form_data = {            //repair
          
            school: $('#school').val(),
            course: $('#course').val(),
             year_edu: $('#year_edu').val(),
              city_edu: $('#city_edu').val(),
               country: $('#country').val(),
           
        };

    $.ajax({
      
        url: '<?php echo base_url('artist/add_artist_edu/'); ?>',//repair
        type: 'POST',
        data: form_data, // $(this).serialize(); you can use this too
        success: function(msg) {
              $.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
             var projectsaveDiv = document.getElementById('artist_education_div');
            $(projectsaveDiv).addClass("active");

           $("#showArtistEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-education"]').tab('show');
        }
   });
          }

     });
      


     return false;


    }
function GetEdu($data)
{
//alert("association_name" +$data);

 // var id=document.getElementById("project_type" +$data).value;

var $school_new=document.getElementById("school" +$data).value;
var $course_new=document.getElementById("course" +$data).value;
var $year_edu_new=document.getElementById("year_edu" +$data).value;
var $city_edu_new=document.getElementById("city_edu" +$data).value;
var $country_new=document.getElementById("country" +$data).value;


 //alert($association_name_new);
updateEdu($data);
}


function deleteEdu(id)
{
  //alert(id);
        var r=confirm("Do you want to delete this Education?");
        if (r==true)
        {
           
            $.ajax({
                 
                  url: '<?php echo base_url('artist/delete_edu/'); ?>'+id,
                
                })
            .done(function (res) {
                  console.log(res);
                if(res.status="success"){
$.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
             var profileDiv = document.getElementById('artist_education_div');
            $(profileDiv).addClass("active");

           $("#showArtistEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-education"]').tab('show');
        }
   });


                    
            }
          });
              // window.location.href="<?php //echo base_url('dashboard')?>";
          
          }
          
          else
          {
              return false;
          }
      }
function updateEdu($data){

       
        //alert($data);
var $school_new=document.getElementById("school" +$data).value;
var $course_new=document.getElementById("course" +$data).value;
var $year_edu_new=document.getElementById("year_edu" +$data).value;
var $city_edu_new=document.getElementById("city_edu" +$data).value;
var $country_new=document.getElementById("country" +$data).value;

console.log("Inside Education function........................");
       // $("#btnDirectorAsso").click(function(){
      var validation_status = directorFormValidateEdu($data);
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();     
        //form_data.append("directorId", $('#directorId').val());
                form_data.append("school",$school_new); 
                form_data.append("course", $course_new);
                form_data.append("year_edu", $year_edu_new);
                form_data.append("city_edu", $city_edu_new);
                form_data.append("country", $country_new);

                
                var jsonData = {
                  "school":$school_new,
                  "course":$course_new,
                  "year_edu":$year_edu_new,
                  "city_edu":$city_edu_new,
                  "country":$country_new,
                  
                }

                console.log("jsonData", jsonData);
                
                $.ajax({
                  url:'<?php echo base_url('artist/artist_education/'); ?>'+ $data, 


                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //alert("hiii");
                console.log("RESULT---------------------------",res);
                if(res.status="success"){
                  alert("Education updated Successfully.");
                  // alert('hii');
      

         var educationDivOnSave = document.getElementById('artist_education_div'+$data);
            educationDivOnSave.classList.remove("show-border");
          // $('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('school'+$data).readOnly = true;
          document.getElementById('course'+$data).readOnly = true;
          document.getElementById('year_edu'+$data).readOnly = true;
          document.getElementById('city_edu'+$data).readOnly = true;
          document.getElementById('country'+$data).readOnly = true;
           
      document.getElementById('saveBtnEdu'+$data).style.display = "none";
    //  document.getElementById('hidecloseEdu'+$data).style.display = "none";

              $("#hideSaveEdu"+$data).hide();
        $(".hideIconEdu"+$data).show();
        //$(".hidecloseEdu"+$data).hide();
               // window.location.href="<?php  //echo base_url('dashboard')?>";
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
      

            
        //});
        } 

      function directorFormValidateEdu($data)
          {   
            //var id=$data;
            //alert();
              var status = true;         
var $school_new=document.getElementById("school" +$data).value;
var $course_new=document.getElementById("course" +$data).value;
var $year_edu_new=document.getElementById("year_edu" +$data).value;
var $city_edu_new=document.getElementById("city_edu" +$data).value;
var $country_new=document.getElementById("country" +$data).value;

var school= $school_new;
      var course=$course_new;
      var year_edu=$year_edu_new;
      var city_edu=$city_edu_new;
      var country=$country_new;


              // if(association_name.trim() == '') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Enter Association Name.<strong>");
              //   status = false;
              // }            
              // else if(association_id.trim() == '') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Enter Association Id.<strong>");
              //   status = false;
              // }     
              console.log("validation_status....................",status);
              return status;
          }

            
        

       
      function newEdu(id, resultData)
      {
      //  alert(resultData);
      $(".add-new-details"+id).hide();
        $("#hideSaveEdu"+id).show();
        $(".hideIconEdu"+id).hide();
        //$("#hidecloseEdu"+id).show();

        console.log("resultData", resultData);
            for(var i=0;i<resultData.length;i++) {
              if (resultData[i].edu_id == id) {
                console.log("Inside IF: ", resultData[i].edu_id);
                

         var educationDivEdit = document.getElementById('artist_education_div'+id);
            educationDivEdit.classList.add("show-border");
          // $('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('school'+id).readOnly = false;
          document.getElementById('course'+id).readOnly = false;
          document.getElementById('year_edu'+id).readOnly = false;
          document.getElementById('city_edu'+id).readOnly = false;
          document.getElementById('country'+id).readOnly = false;
           
        //  document.getElementById('hidecloseEdu'+id).style.display = "block";
            document.getElementById('saveBtnEdu'+id).style.display = "block";
      }
      else
      {
        console.log("Inside ELSE: ", resultData[i].edu_id);
          var tempId = resultData[i].edu_id;      

         var educationDiv = document.getElementById('artist_education_div'+tempId);
            educationDiv.classList.remove("show-border");
           $('input[type="text"], textarea').removeAttr('readonly');
         document.getElementById('school'+tempId).readOnly = true;
          document.getElementById('course'+tempId).readOnly = true;
          document.getElementById('year_edu'+tempId).readOnly = true;
          document.getElementById('city_edu'+tempId).readOnly = true;
          document.getElementById('country'+tempId).readOnly = true;
           
            document.getElementById('saveBtnEdu'+tempId).style.display = "none";
           //  document.getElementById('hideSaveEdu'+tempId).style.display = "none";
          // document.getElementById('hidecloseEdu'+tempId).style.display = "none";

 $(".add-new-details"+tempId).show();
        $("#hideSaveEdu"+tempId).hide();
        $(".hideIconEdu"+tempId).show();
      //  $(".hidecloseEdu"+tempId).hide();

 
}}}
   // $(document).ready(function () {
   //    var maxField = 3;
   //      var addVideoBtn = $('.add_video_btn1');
        
   //      var video_wrapper = $('.video-box1');
        
   //      var video_x = 1;
   //      var video_num = 1;
      
   //      $(addVideoBtn).click(function () {
         
   //           $('.add-new-details').show();
           

   //      });
        
       
   //      $(video_wrapper).on('click', '.remove_btn_edu', function (e) {
   //          e.preventDefault();
   //          var num = $(this).attr('data-num');
   //          $(this).closest('.add-more-block').remove();
   //          num--;
   //      });
       
   //  });
    
    
   //  $("#btnArtistEducationRegister").click(function(){
   //    var school=$("#school").val();
   //    var course=$("#course").val();
   //    var year_edu=$("#year_edu").val();
   //    var city_edu=$("#city_edu").val();
   //    var country=$("#country").val();
   //    var school1=$("#school1").val();
   //    var course1=$("#course1").val();
   //    var year_edu1=$("#year_edu1").val();
   //    var city_edu1=$("#city_edu1").val();
   //    var country1=$("#country1").val();
   //          $.ajax({
   //              type: "POST",
   //              url: '<?php echo base_url('artist/artist_education/'); ?>',
   //              data: {
   //                  school: school,
   //                  course:course,
   //                  year_edu:year_edu,
   //                  city_edu:city_edu,
   //                  country:country,
   //                  school1: school1,
   //                  course1:course1,
   //                  year_edu1:year_edu1,
   //                  city_edu1:city_edu1,
   //                  country1:country1
   //              }
   //          })
           
   //      .done(function (res) {
       
   //              if(res.status="success"){
   //                alert(" Education updated Successfully.");
   //               window.location.href="<?php echo base_url('dashboard')?>";
   //              }
   //              else if(res.status="fail"){
   //                $("#error-box").show();            
   //                $("#error-box").html(res.reason);
   //              }
   //              else{
   //                console.log("Fail");
   //              }
                               
   //            });
   //      });
  </script>

<!---edu end -->


<!----Additional info start here--->
<div class="tab-pane fade " id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
     <div class="row">
                 <div class="col-lg-6 pull-right">
           <h3 class="txtred" style=" margin-left: 164px;">Additional Information</h3>
                
              </div>
               <div class="col-lg-6 hideIconAddInfo">
                  
                  <i class="fa fa-edit" data-toggle="modal" onclick="newAddInfo()" style="font-size: 34px;
    padding-top: 19px;
    margin-left: 382px;"></i>
                 </div>
            </div>
           <div id="info" style="background-color: #fff;">
              <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                    <?php foreach($result as $addinfo){
                        ?>
                      
                  <div class="row" id="artist_additional_div">
                      <!-- ************** -->
                                 <div class="col-md-12 text-center">
           <!--  <br>
            <h3>Additional: Please fill in the remaining details</h3><hr> -->
          </div>
          <div class="col-md-12">
           
                        <div class="col-sm-6">
                                 <div class="form-group">
                                    <label>Budget <small>(Minimum compensation)</small></label>
                                    <input name="min_budget" readonly id="min_budget" type="text" value="<?php echo $addinfo['min_budget'];?>"  class="form-control-plaintext" placeholder="">
                                  </div>
                            </div>
                             <div class="col-sm-6">  
                               <div class="form-group">
                                    <label>Budget <small>(Maximum Compensation)</small></label>
                                    <input name="max_budget" readonly type="text" id="max_budget" value="<?php echo $addinfo['max_budget'];?>" class="form-control-plaintext"placeholder="">
                </div> 
                            </div>
                          </div>
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                        <label>About Me</label>
                                        <input name="about_me" readonly type="text" id="about_me" value="<?php echo $addinfo['about_info'];?>"class="form-control-plaintext"placeholder="">
                                      </div>
                                  </div>
                                <!--   <div class="col-lg-12 text-right hideSaveInfo">
                                    

                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="background-color: #ff007c;"id="btnArtistAddInfoRegister">Save</button>
                                     
                                  </div> -->
                                  <div class="col-lg-12 text-right hideSaveInfo" style="padding-right: 36px;padding-bottom: 10px;">
                                     
                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnArtistAddInfoRegister" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 25px;font-size: 0.75rem !important;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 19px;cursor: initial;font-size: 0.75rem !important;padding-top: 12px;" id="closeInfo" onclick="goBackInfo()">Cancel</button>

<script>
function goBackInfo() {
                var profileDiv = document.getElementById('artist_additional_div');
                  profileDiv.classList.remove("show-border");
     
   $(".hideSaveInfo").hide();
           $(".hideIconAddInfo").show();
           $(".closeInfo").hide();

         document.getElementById('min_budget').readOnly = true;
          document.getElementById('max_budget').readOnly = true;
           document.getElementById('about_me').readOnly = true;



       document.getElementById('btnArtistAddInfoRegister').readOnly = "none";
      document.getElementById('closeInfo').readOnly = "none";
     
    //     $(".hideArtistImage").hide();
    // $(".hideScript").hide();
    // $(".showScript").hide();
    // $(".hideprofilesave").hide();
    
    // $(".hideIcon").show();
    //       $(".closeprofile").hide();
      
    
     

                 
}
</script>

                                    </div>
                                  <!-- <div class="col-lg-12 pull-right hideSaveInfo">
                                            <div class="row  pull-right">
                  <button type="button"  name="submit" class="btn btn-default btn-block" id="btnArtistAddInfoRegister">Save</button>
                </div>
              </div> -->

                                </div>
                              
                            
                           



                                     <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>   
                         </div>


                          
                 <?php } ?>
            </form>
           </div>

          </div>

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
    function newAddInfo()
      {
           $(".hideSaveInfo").show();
           $(".hideIconAddInfo").hide();
  var profileDiv = document.getElementById('artist_additional_div');
                profileDiv.classList.add("show-border");
         document.getElementById('min_budget').readOnly = false;
          document.getElementById('max_budget').readOnly = false;
           document.getElementById('about_me').readOnly = false;
            
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
           /* .done(function (res) {
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
        }); */
        .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Additional Info updated Successfully.");

                       var profileDiv = document.getElementById('artist_additional_div');
                  profileDiv.classList.remove("show-border");
     
   $(".hideSaveInfo").hide();
           $(".hideIconAddInfo").show();
           $(".closeInfo").hide();

         document.getElementById('min_budget').readOnly = true;
          document.getElementById('max_budget').readOnly = true;
           document.getElementById('about_me').readOnly = true;



       document.getElementById('btnArtistAddInfoRegister').readOnly = "none";
      document.getElementById('closeInfo').readOnly = "none";
                 //window.location.href="<?php echo base_url('dashboard')?>";
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
        });
  </script>






<!----info End ---->
             </div>
          </div>


         
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->

<script type="text/javascript">

// $('.addfiles').on('click', function() { $('#profile_pic').click();return false;});
// $('.addscript').on('click', function() { $('#script_name').click();return false;});

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



