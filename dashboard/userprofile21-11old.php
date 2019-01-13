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
    .hideaddassoc
    {
      display: none;
    }
    .hideaddaward
    {
      display: none;
    }
    .hideadd
    {
      display: none;
    }
    
    .hideImage
    {
      display: none ;
    }
    .hideSave
    {
      display: none ;
    }
    .hideSaveWork
    {
      display: none ;
    }
    .hideSaveAward
    {
      display: none ;
    }
    .hideSaveSocial
    {
      display: none ;
    }
    .hideSaveAssoc
    {
      display: none ;
    }
    .hideScript
    {
      display: none ;
    }
    .buttondemo
    {
      display: none;
    }
    .buttondemo1
    {
      display: none;
    }
    .buttondemo2
    {
      display: none;
    }
     .show-border .form-control-plaintext {
      border-bottom: 1px solid #666;
    }
  </style>


  <!-- Tabs -->
  <section id="tabs">
    <div class="container">
         <div class="row">
            
              <div class="col-md-12">
                <div class="card card-plain">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0 "> My Profile</h4>
                     
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
            <div class="tab-pane fade show active hideprofile" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              
                  <div class="col-lg-12">
                    <div class="row">
                   <div class="col-lg-6 text-center ">
                      <h3 class="txtred" style="margin-left: 392px;">Profile</h3>
                        </div>
                   <div class="col-lg-6 hideIcon">
                    
                    <i class="fa fa-edit" data-toggle="modal" onclick="newInfo()" style="font-size: 21px;
      padding-top: 19px;
      margin-left: 382px;
cursor: pointer;
"></i>
                   </div>
                 </div>
                 </div>
             <div class="ProfileView" style="background-color: #fff;">
                <div class="profileForm" style="    padding: 1px 20px 0px 20px;">
                  <form class="" method="post" id="formId" action="" enctype="multipart/form-data">
                     <?php 
                        foreach ($result as $value) { ?>
                    <div class="row" id="profile_parent_div">
                      <div class="col-lg-4">


                          

                                       <div class="picture-container" style="position: relative;margin-top: 80px;height: 100%;width: 80%;width: 50p;">
                                            <div class="picture text-center">
                                                <?php if($value['profile_pic']) { ?>
      <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="width: 50%;height: 50%;margin: 0 auto;border-radius: 10%;"/>

                                                <!-- <img id="blah" /> -->
                                              <?php }else { ?>
                                                  
      <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 50%;height: 50%;margin: 0 auto;border-radius: 10%;"/>
                                              <?php } ?>

                                                <div class="form-group text-center hideImage">
                                          <label>Choose Profile photo</label>

                                           <div class="input-group">

                                          <span class="input-group-btn" style="margin: 0 auto;">

  <span class="btn btn-default btn-file addscript" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 15px;cursor: initial;">

  Browse… <input type="file" runat="server" name="profile_pic"  id="profile_pic" class="form-control">

                                           </span>
                                           </span>
                                          </div>
                                         
                                           <img id='img-uploarunat="server"d'/>
                                        </div>
                                      </div>
                                           
                                        </div>
                                    
                      </div>

                        <!-- ************** -->
                       <div class="col-lg-8">
                                 <div class="row">
                                   <div class="col-lg-6">
                                        <div class="form-group required" >
                                          <label>Company  Name:
                                         </label>
                                          <input type="text" readonly class="form-control-plaintext" id="companyName"  style="
      padding: 5px;" value="<?php echo $value['official_name'];?>" name="companyName" >
                                        </div>
                                        <div class="form-group required">
                                            <label>Official Email ID 
                                              <!-- <small>(required)</small> -->
                                            </label>
                                          <input type="email" style="
      padding: 5px; background-color: white;" readonly name="email" id="email" class="form-control-plaintext" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id">
                                        </div>
                                        <div class="form-group required">
                                          <label>Contact No. 
                                            <!-- <small>(required)</small> -->
                                          </label>
                                          <input type="phone" readonly name="mobile" id="mobile" style="
      padding: 5px; background-color: white;" class="form-control-plaintext" value="<?php echo $value['contact_no'];?>" placeholder="Enter Contact Number">
                                        </div>
                                     <div class="form-group">
                                          <label>Upload Profile</label>
                                          <br>
                                          <div class="showScript">
                                          <?php if($value['script_file']){  ?>
                      <label class="txtgreen" id="script-name"> <?php echo $value['script_file']; ?> </label>
               <?php } else{ ?> 
                 <label class="txtgreen" id="script-name">  </label>
                 <?php } ?>
               </div>
                                           <div class="input-group hideScript">
                                          <span class="input-group-btn ">
                                           <span class="btn btn-default btn-file addscript" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 15px;cursor: initial;">
                                            Browse… <input type="file" readonly name="script_name"  id="script_name" accept=".pdf,.doc" class="form-control">
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
                                     <div class="col-lg-6" style="padding-top: 8px">
                                        <div>
                                          <label> City 
                                            <!-- <small>(required)</small> -->
                                          </label>
                                            <input type="text" style="
      padding: 5px;" readonly name="city" id="city" class="form-control-plaintext" value="<?php echo $value['city'];?>" placeholder="Enter City Name">

                                          <!--<select name="cities" id="city" class="form-control">
                                            <option>Delhi</option>
                                            <option>Mumbai</option>
                                          </select>-->
                                        </div>
                                        <div class="form-group" style="padding-top: 10px">
                                            <label>Pin Code </label>
                                            <input type="text" readonly name="pincode" id="pincode" style="
      padding: 5px;" class="form-control-plaintext" value="<?php echo $value['pin_code'];?>" placeholder="Enter Pin Code">
                                        </div>
                                        <div class="form-group">
                                          <label>Official Address </label>
                                          <input class="form-control-plaintext" readonly name="address" style="
      padding: 5px; background-color: white;" id="address" rows="5" value="<?php echo $value['address'];?>" id="comment" placeholder="Enter office Adress">
                                        </div>
                                    
                                    </div>
                                     <?php } ?>
                                       <div class="col-lg-12 text-right hideSave">
                                      <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                      <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnDirectorProfile" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 15px;">Save</button>
                                      <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 15px;" id="closeprofile" onclick="goBackprofile()">Cancel</button>

<script>
function goBackprofile() {
                var profileDiv = document.getElementById('profile_parent_div');
                  profileDiv.classList.remove("show-border");
     
      document.getElementById('profile_pic').readOnly = true;
     // document.getElementById('companyName').readOnly = false;
      //document.getElementById('email').readOnly = false;
          document.getElementById('mobile').readOnly = true;
      document.getElementById('address').readOnly = true;
      document.getElementById('pincode').readOnly = true;
      document.getElementById('city').readOnly = true;
      document.getElementById('script_name').readOnly = true;
       document.getElementById('btnDirectorProfile').readOnly = "none";
      document.getElementById('closeprofile').readOnly = "none";
     
        $(".hideImage").hide();
      $(".hideScript").hide();
      $(".showScript").hide();
        $(".hideSave").hide();
          $(".closeprofile").hide();
      
      $(".hideIcon").show();
     

             
    //window.history.back();
    // console.log("in go back");
    // var awardDiv = document.getElementById('project_parent_div'+ $data);
    //               awardDiv.classList.remove("show-border");

    //  document.getElementById('project_type'+$data).readOnly = true;
    //               document.getElementById('project_title'+$data).readOnly = true; 
    //               document.getElementById('production_name'+$data).readOnly = true;  
    //               document.getElementById('year'+$data).readOnly = true; 
    //               document.getElementById('link'+$data).readOnly = true; 
    //               document.getElementById('additional_info'+$data).readOnly = true;
    //               document.getElementById('saveBtn'+$data).style.display = "none";

    //                 $("#hideSaveWork"+$data).hide();
    //                 $(".hideIconwork"+$data).show();
                 
}
</script>

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
  <!--------------Edit code for general info start here-------------------->
   
  <!--------------Edit code for general info end here--------------------->
  <script type="text/javascript">
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
  </script>
  <!-- End Profile Section -->
  <!-- Work Experience Section -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
   
              <style type="text/css">
  .add-more-block{
    border: 2px solid #ddd;
  }
  </style>  
   
    <!-- <div class="row" style="margin:0 auto">
                  <div class="col-lg-12 text-center">
                      <h3 class="txtred">Work Experience</h3>
                 
                   </div>
                 </div> -->
                 <div class="col-lg-12">
                    <div class="row">
                   <div class="col-lg-6 text-right">
                      <h3 class="txtred" style="margin-right: -77px;" >Work Experience</h3>
                        </div>
                   <!-- <div class="col-lg-6 hideIconwork">
                    
                    <i class="fa fa-edit" data-toggle="modal" onclick="newWork()" style="font-size: 34px;
      padding-top: 19px;
      margin-left: 382px;
cursor: pointer;
"></i>
                   </div> -->
                 </div>
                 </div>
                  <div id="workExperienceView" style="background-color: #fff;">
      
    
          <form class="form-inline" action="" method="post" style="margin-bottom: auto !important;">
           <!--  <div class="col-md-12 text-center">
              <br> -->
              <form id="prject1">
             <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
            <!-- </div> -->
            
              
             <?php  $countresultwork="SELECT COUNT(work_id) FROM director_work_exp";
                //echo $countresultwork;
                 $query=$this->db->query($countresultwork);
                
               $queryresu=$query->result_array('work_id');
              // print_r($queryresu);
              // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
               $countresu=$queryresu[0]['COUNT(work_id)'];
              ?>
              <?php if($countresu>=1)
              {?>
              <div class="pull-right col-md-12">
                            <a href="javascript:void(0);" class="addWorkBtnDemo1" onclick="Workdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Work Experience</label></a>
                        </div>
                      <?php }
                       else
                      { ?>
                        <div class="pull-right col-md-12 ">
                            <a href="javascript:void(0);" class="addWorkBtnDemo" 
                            onclick="Workdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add work Experience</label></a>
                        </div>
                      <?php }?>
                        <form id="prject1">
                        <div class="video-box1 col-md-12">

                     <?php
                        $resultWork = $this->db->select('*')->from('director_work_exp')->get()->result_array();
                                       // print_r($result);exit;
                                      foreach ($resultWork as $key) {  ?> 

              <div class="add-more-block row" id="project_parent_div<?php echo $key['work_id']?>" style="
    margin-bottom: 10px;
">
                <div class="col-lg-12 hideIconwork<?php echo $key['work_id']?>">
                    
   <i class="material-icons float-right" onclick="deleteproj(<?php echo $key['work_id']?>)" style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;     
 ">delete_forever</i>


                    <i class="fa fa-edit" onclick="newWork(<?php echo $key['work_id']?>, <?php echo htmlspecialchars(json_encode($resultWork)) ?>)"
                     style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;      
"></i>

                 
                   </div>   

  <div class="col-md-6">

   <div class="form-group row required">
      <label class="col-md-5 col-form-label">Project Type</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" id="project_type<?php echo $key['work_id']?>" value="<?php echo $key['project_type'];?>" name="project_type" >
      </div>
    </div>
    <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Production Name</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" value="<?php echo $key['production_name'];?>"  id="production_name<?php echo $key['work_id']?>" name="production_name" >
      </div>
    </div>
     <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Link If Any</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" name="link" id="link<?php echo $key['work_id']?>" style="
      padding: 5px;" value="<?php echo $key['link'];?>"  class="form-control" value="" >
      </div>
    </div>
                             </div>

                <div class="col-md-6">

  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Project Title</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" name="project_title" value="<?php echo $key['project_title'];?>"  id="project_title<?php echo $key['work_id']?>"  class="form-control" >
      </div>
    </div>

  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Year</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" name="year" value="<?php echo $key['year'];?>"  id="year<?php echo $key['work_id']?>" class="form-control" value="" >
      </div>
    </div>
    <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Additional Details</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" readonly name="additional_info" id="additional_info<?php echo $key['work_id']?>" value="<?php echo $key['additional_info'];?>" class="form-control" >
      </div>
    </div>
                </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveWork" id="hideSaveWork<?php echo $key['work_id']?>" style="
      
      padding: 20px;
      ">
                               <button type="button" id="saveBtn<?php echo $key['work_id']?>"  name="submit" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" onclick="GetProject(<?php echo $key['work_id']?>)"
       class="btn btn-default btn-block" >Save</button>



<button type="button" onclick="goBackworkexp(<?php echo $key['work_id']?>)" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" class="btn btn-default btn-block">Cancel</button>

<script>
function goBackworkexp($data) {
    //window.history.back();
    console.log("in go back");
    var awardDiv = document.getElementById('project_parent_div'+ $data);
                  awardDiv.classList.remove("show-border");

     document.getElementById('project_type'+$data).readOnly = true;
                  document.getElementById('project_title'+$data).readOnly = true; 
                  document.getElementById('production_name'+$data).readOnly = true;  
                  document.getElementById('year'+$data).readOnly = true; 
                  document.getElementById('link'+$data).readOnly = true; 
                  document.getElementById('additional_info'+$data).readOnly = true;
                  document.getElementById('saveBtn'+$data).style.display = "none";

                    $("#hideSaveWork"+$data).hide();
                    $(".hideIconwork"+$data).show();
                 
}
</script>
   <!--  <button type="button" id="closeBtn<?php //echo $key['work_id']?>"  name="close" style="padding-top: 10px;float: right;width: 71px;/* margin-left: 743px; *//* float: right; *//* background-color: rgb(255, 0, 124); *//* display: none; */" onclick="GetProject(<?php //echo $key['work_id']?>)"
       class="btn btn-default btn-block" >Close</button> -->




                         </div>

  <!-- <div class="row  pull-right">
                                          <button class="closeBtn" id="closeBtn" name="close" type="button" onclick="closebutton(<?php //echo $key['work_id']?>)">Close</button>
                                        </div> -->
              </div>
  <!--onclick="GetProject(<?php // echo $key['work_id']?>)" id="btnDirectorWorkexp"-->
  <!-- *************** -->


            


              <?php } ?>  
            </div>
          </form>


            <!-- <?php if($value['project_type1']!='' || $value['production_name1']!='' || $value['link1']!='' || $value['project_title1']!='' ||$value['year1']!=''||$value['additional_info1']) { ?>


              <div class="video-box col-md-12 add-work-details-show" >
              
            <div class="add-more-block row">
                <div class="col-md-6">
                  <div class="form-group required">
                                          <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" readonly class="form-control" style="
      padding: 5px;" id="project_type1" value="<?php echo $value['project_type1'];?>" name="project_type1" >
                                        </div>
              
               
                  <div class="form-group required">
                                            <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" style="
      padding: 5px;" readonly name="production_name1" value="<?php echo $value['production_name1'];?>"  id="production_name1" class="form-control">
                                        </div>
                
                  <div class="form-group">
                                          <label>Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" style="
      padding: 5px;" readonly name="link1" id="link1" value="<?php echo $value['link1'];?>"  class="form-control" value="">
                                        </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group required">
                                          <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                            <input type="text" readonly name="project_title1" style="
      padding: 5px;" value="<?php echo $value['project_title1'];?>"  id="project_title1" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;


                                        </div>
                
               
                  <div class="form-group required">
                                            <label>Year </label>&nbsp;&nbsp;&nbsp;
                                            <input type="text" style="
      padding: 5px;" readonly name="year1" value="<?php echo $value['year1'];?>"  id="year1" class="form-control" value="">
                                        </div>
             
                  <div class="form-group">
                                          <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                          <input class="form-control" style="
      padding: 5px;" readonly name="additional_info1" id="additional_info1" value="<?php echo $value['additional_info1'];?>"  >


                                        </div>
                </div>


              </div>  
            </div> -->



            <!-- <?php } ?> -->

              <div class="video-box col-md-12 add-work-details" >
              
            <div class="add-more-block row" style="margin-bottom: 10px;">
                <div class="col-md-6">
                  <div class="form-group required">
                                          <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" class="form-control" style="
      padding: 5px;" id="project_type" name="project_type" >
                                        </div>
              
               
                  <div class="form-group required">
                                            <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="production_name" style="
      padding: 5px;"  id="production_name" class="form-control">
                                        </div>
                
                  <div class="form-group">
                                          <label>Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                          <input type="text"name="link" id="link" style="
      padding: 5px;"  class="form-control" value="">
                                        </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group required">
<button class="closeBtn" type="button" onclick="buttondemo1()"> X </button>
                                          <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                            <input type="text" style="
      padding: 5px;" name="project_title"  id="project_title" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;

                                          

                                        </div>
                
               
                  <div class="form-group required" style="
    margin-top: -16px;
">
        <label>Year </label>
        <input type="text" style="
      padding: 5px;"  name="year"  id="year" class="form-control">
                                        </div>
             
                  <div class="form-group" style="margin-top: 6px !important">
                                          <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" class="form-control" style="
      padding: 5px;"  name="additional_info" id="additional_info">


                                        </div>
                </div>
                  
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideadd"style="
      
      padding: 20px;
      ">
                               <button type="button" onclick="AddWorkExp()"  class="addworkhide" name="submit" style="
      font-color: white !important;
      width: 110px;
      float: right;
      background-color: #ff007c;
      border: pink;
      color: white;
      height: 39px;
      " class="btn btn-default btn-block">Add</button>
    <!--   id="btnDirectorWorkexp" -->
                         </div>

                  
              </div>  
            </div>


             
                    
          </form> 
       </div>
    </div>

    
   
    <script type="text/javascript">


      function Workdemo()
  {
     // alert(1);
     $('.add-work-details').show();
     $('.hideadd').show();
    // AddWorkExp();
  $('.addworkhide').show();
  }
    
    function AddWorkExp()
    { var status = true; 
  //     var $project_type_new=document.getElementById("project_type"+$data).value;
  //     alert($project_type_new);
  // var $project_title_new=document.getElementById("project_title" +$data).value;
  // var $production_name_new=document.getElementById("production_name" +$data).value;
  // var $year_new=document.getElementById("year" +$data).value;
  //   var $link_new=document.getElementById("link" +$data).value;
  //   var $additional_info_new=document.getElementById("additional_info" +$data).value;

      // $('.submit').click(function(){
          //var id = (this.id);
          var project_type=$("#project_type").val();
          //alert(project_type);
          var production_name=$("#production_name").val();
          var link=$("#link").val();
          // var password=$("#password").val();
          var project_title=$("#project_title").val();
          var year=$("#year").val();
          var additional_info=$("#additional_info").val();
          if(project_type.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
                  status = false;
                }
                 else if(production_name.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                } 
                 else if(link.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                }  
                else if(project_title.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                
                  status = false;
                }  
                else if(year.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                }    
                else if(additional_info.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                }     
                //alert(status);
                if(status==true)
          {
          var form_data = {            //repair
            //  work_id: id,

              project_type: $('#project_type').val(),
              production_name: $('#production_name').val(),
              link: $('#link').val(),
              project_title: $("#project_title").val(),
            year: $("#year").val(),
              additional_info: $("#additional_info").val()

          };
          console.log(form_data);
          if(form_data[project_type] ==' ')
          {
            alert("sorry");
          }

      $.ajax({
        
          url: '<?php echo base_url('director/add_director_work/'); ?>',//repair
          type: 'POST',
          data: form_data, // $(this).serialize(); you can use this too
        
         success: function(msg) {
           if(msg.status="success"){
                    alert("Work Experience Added Successfully.");
                $.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
             var projectsaveDiv = document.getElementById('project_parent_div');
            $(projectsaveDiv).addClass("active");

           $("#showEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-profile"]').tab('show');
        }
   });
              }
          }

     });
      
}
else{
  alert("Please Enter All The Mandatory Fields");
     return false;
}

    }
    //function AddWorkExp(){
   // $("#AddWorkExp").on('click', function () {
     // alert(1):
    //e.preventDefault();
    // $.ajax({
    //   url: '<?php //echo base_url('director/add_director_work/'); ?>',

    //   data: {
    //     project_type: $("#project_type").val(),
    //     production_name: $("#production_name").val(),
    //     link: $("#link").val(),
    //     project_title: $("#project_title").val(),
    //     year: $("#year").val()
    //     additional_info: $("#additional_info").val()
    //   },
    //   async: 'true',
    //   cache: 'false',
    //   type: 'post',
    //   success: function (data) {
    //     //jQuery("#attendence_report_holder").html(response);
    //     alert("Data successfully added");
    //   }
    // });

  // }

  function deleteproj(id)
  {
    
          var r=confirm("Do you want to delete this Project?");
          if (r==true)
          {
             
              $.ajax({
                   
                    url: '<?php echo base_url('director/delete_proj/'); ?>'+id,
                  
                  })
                     .done(function (res) {
                  console.log(res);
                if(res.status="success"){
$.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
             var profileDiv = document.getElementById('profile_parent_div');
            $(profileDiv).addClass("active");

           $("#showEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-profile"]').tab('show');
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

  function buttondemo1()
    {
$('.addworkhide').hide();

     $('.add-work-details').hide();
     document.getElementById("project_type1").value = '';
     document.getElementById("production_name1").value = '';
     document.getElementById("link1").value = '';
     document.getElementById("project_title1").value = '';
     document.getElementById("year1").value = '';
     document.getElementById("additional_info1").value = '';
    }
  function GetProject($data)
  {
  //$id=data;
  //alert("project_title" +$data);

   // var id=document.getElementById("project_type" +$data).value;

  var $project_type_new=document.getElementById("project_type" +$data).value;
  var $project_title_new=document.getElementById("project_title" +$data).value;
  var $production_name_new=document.getElementById("production_name" +$data).value;
  var $year_new=document.getElementById("year" +$data).value;
    var $link_new=document.getElementById("link" +$data).value;
    var $additional_info_new=document.getElementById("additional_info" +$data).value;
   //alert($project_title_new);
   updateProject($data);
    
  }
              
          //$("#btnDirectorWorkexp").click(function(e){
            function updateProject($data){
      //alert("hi");
     // e.preventDefault();
    // alert($data);
     var $project_type_new=document.getElementById("project_type" +$data).value;
  var $project_title_new=document.getElementById("project_title" +$data).value;
  var $production_name_new=document.getElementById("production_name" +$data).value;
  var $year_new=document.getElementById("year" +$data).value;
    var $link_new=document.getElementById("link" +$data).value;
    var $additional_info_new=document.getElementById("additional_info" +$data).value;

      console.log("Inside btnDirectorWorkexp function........................");
      //alert('hii');
        var validation_status_project = directorFormValidateProject($data);
        console.log(validation_status_project);
       // alert(validation_status_project);
        if(validation_status_project == true ) 
        {
          $("#error-box").hide(); 
          var form_data = new FormData();  
      // alert(data);
        //pretty-print('hiii'); 
          //form_data.append("directorId", $('#directorId').val());
                  form_data.append("project_type", $project_type_new);    
                  form_data.append("project_title", $project_title_new); 
                  form_data.append("production_name", $production_name_new);
                  form_data.append("year",$year_new);    
                  form_data.append("link",$link_new); 
                  form_data.append("additional_info",$additional_info_new);
                 //alert('additional_info');
                  // form_data.append("additional_info", $('#additional_info_new').val());
                  var jsonData = {
                    "project_type":$project_type_new,
                    "project_title":$project_title_new,
                    "production_name":$production_name_new,
                    "year":$year_new,
                    "link":$link_new,
                    "additional_info":$additional_info_new,
                  }

                  // form_data.append("project_type", $('#project_type').val());    
                  // form_data.append("project_title1", $('#project_title').val()); 
                  // form_data.append("production_name1", $('#production_name').val());
                  // form_data.append("year", $('#year').val());    
                  // form_data.append("link", $('#link').val()); 
                  // form_data.append("additional_info", $('#additional_info').val());
                  //JSON.stringify(jsonData)
                  console.log("jsonData", jsonData);
                  $.ajax({
                 //  alert("ajax");

                    url: '<?php echo base_url('director/director_workexp/'); ?>'+ $data,
                    type: 'POST',              
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                  })
                .done(function (res) {
                  var parentDivOnSave = document.getElementById("project_parent_div" + $data);
                  parentDivOnSave.classList.remove('show-border');
                 
                  console.log("RESULT---------------------------",res);
                  if(res.status="success"){
                    alert("Work Experience Successfully.");
                  document.getElementById('project_type'+$data).readOnly = true;
                  document.getElementById('project_title'+$data).readOnly = true; 
                  document.getElementById('production_name'+$data).readOnly = true;  
                  document.getElementById('year'+$data).readOnly = true; 
                  document.getElementById('link'+$data).readOnly = true; 
                  document.getElementById('additional_info'+$data).readOnly = true;
                  document.getElementById('saveBtn'+$data).style.display = "none";

                    $("#hideSaveWork"+$data).hide();
                    $(".hideIconwork"+$data).show();
                  //window.location.href="<?php // echo base_url('dashboard')?>";
                  }
                  else if(res.status="fail"){
                    alert("Please Add All The Mandatory Fields");
                    $("#error-box").show();            
                    $("#error-box").html(res.reason);
                  }
                  else{
                    alert("Please Add All The Mandatory Fields");
                    console.log("Fail");
                  }
                              
                });
        }
        else{
           alert("Please Add All The Mandatory Fields");
        }

        

              
          //});
          } 

          function directorFormValidateProject($data)
            {   
      //        alert(2);
                var status = true;   
  var $project_type_new=document.getElementById("project_type" +$data).value;
  var $project_title_new=document.getElementById("project_title" +$data).value;
  var $production_name_new=document.getElementById("production_name" +$data).value;
  var $year_new=document.getElementById("year" +$data).value;
    var $link_new=document.getElementById("link" +$data).value;
    var $additional_info_new=document.getElementById("additional_info" +$data).value;


        var project_type= $project_type_new;
        console.log("projecttype".project_type);
        var project_title=$project_title_new;
        var production_name=$production_name_new;
        var year=$year_new;
        var link=$link_new;

         var additional_info=$additional_info_new;

        // var project_type1=$("#project_type1").val();
        // var project_title1=$("#project_title1").val();
        // var production_name1=$("#production_name1").val();
        // var year1=$("#year1").val();
        // var link1=$("#link1").val();
        // var additional_info1=$("#additional_info1").val();



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
                console.log("validation_status....................",status);
                return status;
                
            }

      
      function onApprove(data)  

      {  

  //alert(1);
  console.log("Inside onApprove function.........................");
     // var objJSON = JSON.parse(data);
      obj=JSON.parse(JSON.stringify(data));
    //      //var objJSON = JSON.parse(result);
    // alert(objJSON.project_type);
    console.log(obj);
    // alert(objJSON.project_title);
            //console.log(obj[0].project_type); 

        }              
        function onError(xhr,status,error)  
           {      console.log(xhr); 
                console.log(status); 
                     console.log(error);    
            }

          function newWork(id, resultData)
          {
            // alert(id);
            console.log("resultData", resultData);
            for(var i=0;i<resultData.length;i++) {
              if (resultData[i].work_id == id) {
                console.log("Inside IF: ", resultData[i].work_id);
                var parentDiv = document.getElementById('project_parent_div'+id);
                parentDiv.classList.add("show-border");
          
                document.getElementById('project_type'+id).readOnly = false;
                document.getElementById('project_title'+id).readOnly = false; 
                document.getElementById('production_name'+id).readOnly = false;  
                document.getElementById('year'+id).readOnly = false; 
                document.getElementById('link'+id).readOnly = false; 
                document.getElementById('additional_info'+id).readOnly = false;
                document.getElementById('saveBtn'+id).style.display = "block";

                $(".add-work-details"+id).hide();
               $("#hideSaveWork"+id).show();
                $(".hideIconwork"+id).hide();
              } else {
                console.log("Inside ELSE: ", resultData[i].work_id);
                var tempId = resultData[i].work_id;
                var parentDiv = document.getElementById('project_parent_div'+tempId);
                parentDiv.classList.remove("show-border");
          
                document.getElementById('project_type'+tempId).readOnly = true;
                document.getElementById('project_title'+tempId).readOnly = true; 
                document.getElementById('production_name'+tempId).readOnly = true;  
                document.getElementById('year'+tempId).readOnly = true; 
                document.getElementById('link'+tempId).readOnly = true; 
                document.getElementById('additional_info'+tempId).readOnly = true;
                document.getElementById('saveBtn'+tempId).style.display = "none";

                $(".add-work-details"+tempId).show();
               $("#hideSaveWork"+tempId).hide();
                $(".hideIconwork"+tempId).show();
              }
            }
             
           // document.getElementById('closeBtn'+id).style.display = "block";
                     
           
    
          }  
    </script>

  <!-- End Work Experience section -->
  <!-- Awards And Recognition section -->
            <div class="tab-pane fade" id="nav-award" role="tabpanel" aria-labelledby="nav-award-tab">

  <style type="text/css">
  .add-more-block{
    border: 2px solid #ddd;
  }
  </style>  
   
    <!-- <div class="row" style="margin:0 auto">
                  <div class="col-lg-12 text-center">
                      <h3 class="txtred">Awards And Recognition</h3>
                  <p class="txtred">Tell us more about awards</p>
                   </div>
                 </div> -->
                 <div class="col-lg-12">
                    <div class="row">
                   <div class="col-lg-6 text-center ">
                      <h3 class="txtred" style="margin-right: -388px;">Awards And Recognition</h3>
                        </div>
                   <!-- <div class="col-lg-6 hideIconaward">
                    
                    <i class="fa fa-edit" data-toggle="modal" onclick="newAward()" style="font-size: 34px;
      padding-top: 19px;
      margin-left: 382px;
cursor: pointer;
"></i>
                   </div> -->
                 </div>
                 </div>
                  <div id="workExperienceView" style="background-color: #fff;">
      
    
          <form class="form-inline" action="" method="post" style="
    margin-bottom: auto;
">
            <!-- 
            <div class="col-md-12 text-center">
              <br> -->
              <form id="award" >
             <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
           <!--  </div> -->
            <?php  $countresultaward="SELECT COUNT(award_id) FROM director_award_reg";
                //echo $countresultwork;
                 $query=$this->db->query($countresultaward);
                
               $awardcountresu=$query->result_array('award_id');
              // print_r($queryresu);
              // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
               $awardcountresu=$awardcountresu[0]['COUNT(award_id)'];
              ?>
              <?php if($awardcountresu>=1)
              {?>
              
              <div class="pull-right col-md-12">

                            <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Awards/Recognitions</label></a>

                          <!-- <button class="addVideoBtnDemo" type="button" onclick="demo()"> Hiii</button>-->
                        </div>
                        <?php }
                       else
                      { ?>
                         <div class="pull-right col-md-12">

                            <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add Awards/Recognitions</label></a>

                          <!-- <button class="addVideoBtnDemo" type="button" onclick="demo()"> Hiii</button>-->
                        </div>
 <?php }?>
                        <form id="award" >
                         <div class="video-box col-md-12">
                        <?php
                        $resultAward = $this->db->select('*')->from('director_award_reg')->get()->result_array();
                                       // print_r($result);exit;
                                      foreach ($resultAward as $val) {  ?>

              <div class="add-more-block row"  id="award_parent_div<?php echo $val['award_id']?>" style="
    margin-bottom: 10px;
">

                <div class="col-lg-12 hideIconaward<?php echo $val['award_id']?>">
                    <i class="material-icons float-right" onclick="deleteAward(<?php echo $val['award_id']?>)" style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;
      ">delete_forever</i>
    


                    <i class="fa fa-edit" data-toggle="modal" onclick="newAward(<?php echo $val['award_id']?>, <?php echo htmlspecialchars(json_encode($resultAward)) ?>)"style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;
      "></i>

                    

                   </div>

                <div class="col-md-6">
   <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Award Title</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" readonly id="award_title<?php echo $val['award_id']?>" value="<?php echo $val['award_title'];?>"  name="award_title" class="form-control" >
      </div>
  </div>

                 
            <!--    id="project_title<?php //echo $key['work_id']?>" -->
           <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Award Year </label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" readonly name="award_year" id="award_year<?php echo $val['award_id']?>" class="form-control" value="<?php echo $val['award_year'];?>"  class="form-control" >
      </div> 
  </div>     

   
                
                 
                </div>
                <div class="col-md-6">
  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Award For</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" readonly name="award_for" id="award_for<?php echo $val['award_id']?>" value="<?php echo $val['award_for'];?>"  class="form-control" value="" >
      </div>
  </div>
  <div class="form-group row">
      <label for="staticEmail" class="col-md-5 col-form-label">Additional Details </label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" readonly name="add_details" id="add_details<?php echo $val['award_id']?>" value="<?php echo $val['add_details'];?>">
      </div>
  </div>

                                        
               
                                         
             
                 
                </div>





               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAward" id="hideSaveAward<?php echo $val['award_id']?>" style="padding: 20px;">
                               <button type="button"  name="submit" id="saveBtnAward<?php echo $val['award_id']?>" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" onclick="GetAward(<?php echo $val['award_id']?>)"
     class="btn btn-default btn-block" >Save</button>



<button type="button" id="hidecloseaward<?php echo $val['award_id']?>" onclick="goBackaward(<?php echo $val['award_id']?>)" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" class="btn btn-default btn-block">Cancel</button>

<script>
  
function goBackaward($data) {
   var awardDiv = document.getElementById('award_parent_div'+ $data);
                  awardDiv.classList.remove("show-border");
                 
                 
                   // alert("Awards And Recognitions Experience Successfully.");
                       document.getElementById('award_title'+$data).readOnly = true;
                document.getElementById('award_for'+$data).readOnly = true;
                 document.getElementById('award_year'+$data).readOnly = true;
                  document.getElementById('add_details'+$data).readOnly = true;
                   
                       document.getElementById('saveBtnAward'+$data).style.display = "none";
                        document.getElementById('hidecloseaward'+$data).style.display = "none";
                    console.log($data);
   $(".hideSaveAward"+$data).hide();
               $(".hideIconaward"+$data).show();
              // $(".hidecloseaward"+$data).hide();
               
                  
    //window.history.back();
    // console.log("in go back");
    // var awardDiv = document.getElementById('project_parent_div'+ $data);
    //               awardDiv.classList.remove("show-border");

    //  document.getElementById('project_type'+$data).readOnly = true;
    //               document.getElementById('project_title'+$data).readOnly = true; 
    //               document.getElementById('production_name'+$data).readOnly = true;  
    //               document.getElementById('year'+$data).readOnly = true; 
    //               document.getElementById('link'+$data).readOnly = true; 
    //               document.getElementById('additional_info'+$data).readOnly = true;
    //               document.getElementById('saveBtn'+$data).style.display = "none";

    //                 $("#hideSaveWork"+$data).hide();
    //                 $(".hideIconwork"+$data).show();
                 
}
</script>
                         </div>
                </div>
                 
                <?php } ?>
                </div> 
            </form>

  <!-- <button type="submit" name="submit" style="width: 110px;background-color: #ff007c;
      float: right;" class="btn btn-default btn-block" id="btnDirectorAward">Save</button> -->


             <!--   <?php if($value['award_title1']!='' ||$value['award_year1']!='' ||$value['award_for1']!='' || $value['add_details1']!=''){ ?>
                      

                <div class="video-box col-md-12 view-award-section-show">
                <div class="add-more-block row">
              
                <div class="col-md-6">
                                        <div class="form-group required">
                                        <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" readonly class="form-control" id="award_title1"  style="
      padding: 5px;" value="<?php echo $value['award_title1'];?>"  name="award_title1">
                                        </div>
                                         
                                         <div class="form-group required">
                                          <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                          <input type="text"  style="
      padding: 5px;" readonly name="award_year1" id="award_year1" class="form-control" value="<?php echo $value['award_year1'];?>" >
                                        </div>
                
                                      
                </div>
                <div class="col-md-6">
                 <div class="form-group required">
                                          <label> Award For</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" style="
      padding: 5px;" readonly name="award_for1" id="award_for1" value="<?php echo $value['award_for1'];?>"  class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;
                                          </div>
               
                                          <div class="form-group">
                                          <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                          <input class="form-control" style="
      padding: 5px;" readonly name="add_details1" id="add_details1" value="<?php echo $value['add_details1'];?>" >
                                        </div>
                                        </div>
                                        </div>
                                         </div>
              <?php } ?> -->

                <div class="video-box col-md-12 view-award-section">
                <div class="add-more-block row" style="margin-bottom: 10px;">
              
                <div class="col-md-6">
                                        <div class="form-group required">
                                        <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" style="
      padding: 5px;" class="form-control" id="award_title"  value=""  name="award_title">
                                        </div>
                                         
                                         <div class="form-group required">
                                          <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="award_year" id="award_year" style="
      padding: 5px;" class="form-control" value="" >
                                        </div>
                
                                      
                </div>

                <div class="col-md-6">
 <button class="closeBtn" type="button" onclick="buttondemo2()"> X </button>
                 <div class="form-group required">
                                          <label> Award For</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" style="
      padding: 5px;" name="award_for" id="award_for" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;

                                         

                                          </div>
               
                                          <div class="form-group" style="margin-top: -17px !important">
                                          <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                          <input class="form-control" style="
      padding: 5px;" name="add_details" id="add_details" value="" >
                                        </div>
                                        </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddaward"style="
      
      padding: 20px;
      ">
                               <button type="button" onclick="AddAwardReg()" name="submit" style="width: 110px;
      float: right; background-color: #ff007c;" class="btn btn-default btn-block">Add</button>
    <!--   id="btnDirectorWorkexp" -->
                         </div>
                                        </div>
                                         </div>
                                         
   
           
            <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAward"style="
      
      padding: 20px;
      ">
                               <button type="submit" name="submit" style="width: 110px;background-color: #ff007c;
      float: right;" class="btn btn-default btn-block" id="btnDirectorAward">Save</button>
                         </div> -->
                       
                    
          </form> 
       </div>
    </div>

    
   
    <script type="text/javascript">
  function demo()
  {
     // alert(1);
     $('.view-award-section').show();
      $('.hideaddaward').show();
  }

  function buttondemo2()
   {
    $('.view-award-section').hide();
   
   
     document.getElementById("award_title1").value = '';
     document.getElementById("award_year1").value = '';
     document.getElementById("award_for1").value = '';
     document.getElementById("add_details1").value = '';
    }

  function AddAwardReg()
    {
      var status = true; 
       var award_title=$("#award_title").val();
          //alert(project_type);
          var award_year=$("#award_year").val();
          var award_for=$("#award_for").val();
          // var password=$("#password").val();
          var add_details=$("#add_details").val();
          if(award_title.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
                  status = false;
                }
                 else if(award_year.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                } 
                 else if(award_for.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                  status = false;
                }  
                else if(add_details.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                
                  status = false;
                }  
         if(status==true)
          {
      // $('.submit').click(function(){
          //var id = (this.id);
          var form_data = {            //repair
            //  work_id: id,
              award_title: $('#award_title').val(),
              award_year: $('#award_year').val(),
              award_for: $('#award_for').val(),
              add_details: $("#add_details").val()
       
          };

      $.ajax({
        
          url: '<?php echo base_url('director/add_director_award/'); ?>',//repair
          type: 'POST',
          data: form_data, // $(this).serialize(); you can use this too
          success: function(msg) {

                    //alert("Work Experience Added Successfully.");
                alert("Awards And Recognition Added Successfully..!! ");
                $.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(msg){
             var saveawardDiv = document.getElementById('award_parent_div');
            $(saveawardDiv).addClass("active");

           $("#showEditProfileForm").html(msg);

            console.log(msg);
            $('.nav-tabs a[href="#nav-award"]').tab('show');
        }
   });


          }

     });
    }
    else{
     alert("Please Enter All The Mandatory Fields");
     return false;
    }
    }


    

    function deleteAward(id)
  {
    
          var r=confirm("Do you want to delete this Award?");
          if (r==true)
          {
             
              $.ajax({
                   
                    url: '<?php echo base_url('director/delete_award/'); ?>'+id,
                  
                  })
               .done(function (res) {
                  console.log(res);
                if(res.status="success"){
$.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
             var awardDiv = document.getElementById('award_parent_div');
            $(awardDiv).addClass("active");

           $("#showEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-award"]').tab('show');
        }
   });


                    
            }
          });


              
          
          }
          else
          {
              return false;
          }
      }
  function GetAward($data)
  {
  //alert(1);
  //alert("award_year" +$data);

   // var id=document.getElementById("project_type" +$data).value;

  var $award_title_new=document.getElementById("award_title" +$data).value;
  var $award_year_new=document.getElementById("award_year" +$data).value;
  var $award_for_new=document.getElementById("award_for" +$data).value;
  var $add_details_new=document.getElementById("add_details" +$data).value;
    
   //alert($project_title_new);
   updateAward($data);
    
  }

    </script>
              
              <script type="text/javascript">
                  function updateAward($data){
    //  alert("hi");
     // e.preventDefault();
     //alert($data);
     var $award_title_new=document.getElementById("award_title" +$data).value;
  var $award_for_new=document.getElementById("award_for" +$data).value;
  var $award_year_new=document.getElementById("award_year" +$data).value;
  var $add_details_new=document.getElementById("add_details" +$data).value;
    

      console.log("Inside award function........................");
        var validation_status_awards = directorFormValidateAwards($data);
        //alert(validation_status_awards);
        console.log(validation_status_awards);
        if(validation_status_awards == true ) {
          $("#error-box").hide(); 
          var form_data = new FormData();  
        // alert("hiii");
        //pretty-print('hiii'); 
          //form_data.append("directorId", $('#directorId').val());
                  form_data.append("award_title", $award_title_new);    
                  form_data.append("award_for", $award_for_new); 
                  form_data.append("award_year", $award_year_new);
                  form_data.append("add_details",$add_details_new);    
                  
                 //alert('additional_info');
                  // form_data.append("additional_info", $('#additional_info_new').val());
                  var jsonData = {
                    "project_type":$award_title_new,
                    "project_title":$award_for_new,
                    "production_name":$award_year_new,
                    "year":$add_details_new,
                    
                  }

                  console.log("jsonData", jsonData);
                  $.ajax({
                   //alert("1");

                  url: '<?php echo base_url('director/dir_award/'); ?>'+ $data,
                    type: 'POST',              
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                  })
                   .done(function (res) {
                  //alert("hiii");
                   var awardDiv = document.getElementById('award_parent_div'+ $data);
                  awardDiv.classList.remove("show-border");
                 
                  console.log("RESULT---------------------------",res);
                  if(res.status="success"){
                    alert("Awards And Recognitions Experience Successfully.");
                       document.getElementById('award_title'+$data).readOnly = true;
                document.getElementById('award_for'+$data).readOnly = true;
                 document.getElementById('award_year'+$data).readOnly = true;
                  document.getElementById('add_details'+$data).readOnly = true;
                   
                       document.getElementById('saveBtnAward'+$data).style.display = "none";
                       

                    console.log($data);
   $(".hideSaveAward"+$data).hide();
               $(".hideIconaward"+$data).show();
                  
                 
                 // window.location.href="<?php // echo base_url('dashboard/userprofile')?>";
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
                // .done(function (res) {
                //   alert("hiii");
                //   console.log("RESULT---------------------------",res);
                //   if(res.status="success"){
                //     alert("Award and Recognition updated Successfully.");
                //   window.location.href="<?php  //echo base_url('dashboard')?>";
                //   }
                //   else if(res.status="fail"){
                //     $("#error-box").show();            
                //     $("#error-box").html(res.reason);
                //   }
                //   else{
                //     console.log("Fail");
                //   }
                //   alert(res);             
                // });
        }
        else{
          alert("Please Enter All The Mandatory Fields");
        }

              
          //});
          } 
     
        //   $("#btnDirectorAward").click(function(){
        // var validation_status = directorFormValidate();
        // console.log(validation_status);
        // if(validation_status == true ) {
        //   $("#error-box").hide(); 
        //   var form_data = new FormData();   
          
        //           form_data.append("award_title", $('#award_title').val());    
        //           form_data.append("award_for", $('#award_for').val()); 
        //           form_data.append("award_year", $('#award_year').val());
        //           form_data.append("add_details", $('#add_details').val());  



        //           form_data.append("award_title1", $('#award_title1').val());    
        //           form_data.append("award_for1", $('#award_for1').val()); 
        //           form_data.append("award_year1", $('#award_year1').val());
        //           form_data.append("add_details1", $('#add_details1').val());  
               
        //           $.ajax({
        //             url: '<?php //echo base_url('director/dir_award/'); ?>',

        //             type: 'POST',              
        //             data : form_data,
        //             processData: false,
        //             contentType: false,
        //             dataType: "json"
        //           })
        //         .done(function (res) {
                  
        //           if(res.status="success"){
        //             alert("Award & Recognition Updated Successfully.");
        //             window.location.href="<?php //echo base_url('dashboard')?>";
        //           }
        //           else if(res.status="fail"){
        //             $("#error-box").show();            
        //             $("#error-box").html(res.reason);
        //           }
        //           else{
        //             console.log("Fail");
        //           }
                             
        //         });
        // }

        
        function directorFormValidateAwards($data)
            {   
             // alert("awards validation_status");
                var status = true; 
  var $award_title_new=document.getElementById("award_title" +$data).value;
  var $award_for_new=document.getElementById("award_for" +$data).value;
  var $award_year_new=document.getElementById("award_year" +$data).value;
  var $add_details_new=document.getElementById("add_details" +$data).value;         

        var award_title=$award_title_new;
        var award_for=$award_for_new;
        var award_year=$award_year_new;
        var add_details=$add_details_new;

        
       
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

              
        
    
          function newAward(id, awardresultdata)
          {
               for(var i=0;i<awardresultdata.length;i++) {
                 if (awardresultdata[i].award_id == id) {
                 console.log("Inside IF: ", awardresultdata[i].award_id);
               
                 var awardDiv = document.getElementById('award_parent_div'+id);
              awardDiv.classList.add("show-border");

                //$('input[type="text"], textarea').removeAttr('readonly');
               document.getElementById('award_title'+id).readOnly = false;
                document.getElementById('award_for'+id).readOnly = false;
                 document.getElementById('award_year'+id).readOnly = false;
                  document.getElementById('add_details'+id).readOnly = false;
                   
                       document.getElementById('saveBtnAward'+id).style.display = "block";
document.getElementById('hidecloseaward'+id).style.display = "block";

                         $("#hideSaveAward"+id).show();
                         $("#hidecloseaward"+id).show();

               $(".hideIconaward"+id).hide();

                 }
                 else
                 {
  console.log("Inside ELSE: ", awardresultdata[i].award_id);
                  //console.log("Inside IF: ", awardresultdata[i].award_id);
                  var tempId = awardresultdata[i].award_id;
                     var awardDiv = document.getElementById('award_parent_div'+tempId);
              awardDiv.classList.remove("show-border");

                //$('input[type="text"], textarea').removeAttr('readonly');
               document.getElementById('award_title'+tempId).readOnly = true;
                document.getElementById('award_for'+tempId).readOnly = true;
                 document.getElementById('award_year'+tempId).readOnly = true;
                  document.getElementById('add_details'+tempId).readOnly = true;
                   
                       document.getElementById('saveBtnAward'+tempId).style.display = "none";
                       document.getElementById('hidecloseaward'+tempId).style.display = "none";
                         $("#hideSaveAward"+tempId).hide();
                          $("#hidecloseaward"+tempId).hide();

               $(".hideIconaward"+tempId).show();
                 }

               }
             

          }
    </script>
  <!-- End  Awards And Recognition Section  -->
  <!-- Social Link Section  -->
               <div class="tab-pane fade" id="nav-socialLink" role="tabpanel" aria-labelledby="nav-socialLink-tab">
                 <!-- <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                      <h3 class="txtred">Social Links </h3>
                  <p class="txtred">Please provide the supporting social links</p>
                   </div>
                 </div> -->
                 <div class="col-lg-12">
                    <div class="row">
                   <div class="col-lg-6 text-center ">
                      <h3 class="txtred" style="margin-right: -388px;">Social Links</h3>
                        </div>
                   <div class="col-lg-6 hideIconsocial">
                    
                    <i class="fa fa-edit" data-toggle="modal" onclick="newSocial()" style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;
      "></i>
                   </div>
                 </div>
                 </div>
               <div id="awards" style="background-color: #fff;">
                  <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                    <?php 
                        foreach ($result as $value) {
                        //print_r($value);exit;
                         ?>
                      
                    <div class="row" id="social_parent_div">
                        <!-- ************** -->
                       <div class="col-lg-12">
                                 <div class="row">
                                   <div class="col-lg-6">
                                       
                                      <div class="form-group">
                                         <span class="wrapper facebook">

                                         <input type="text" class="social-link-input-class form-control-plaintext" value="<?php echo $value['facebook_url'];?>"  id="facebook" style="
      padding: 5px;" readonly name="facebook"   placeholder="facebook"/>
                                       </span>
                                        </div>

                                          <!-- background-color: #cecece94; -->
                                          <div class="form-group">
                                         <span class="wrapper instagram">

                                         <input type="text" style="
      padding: 5px;" readonly class="social-link-input-class form-control-plaintext" value="<?php echo $value['instagram_url'];?>"  id="instagram"  name="instagram"   placeholder="Instagram"/>
                                       </span>
                                        </div>


                                          <div class="form-group">
                                         <span class="wrapper websitelink">

                                         <input type="text" style="
      padding: 5px;" readonly class="social-link-input-class form-control-plaintext" value="<?php echo $value['website_url'];?>"  id="website"  name="website"   placeholder="Website Link"/>
                                       </span>
                                        </div>
                                      
                                    </div>
                                    <!-- *********** -->
                                     <div class="col-lg-6">
                                       
                                          <div class="form-group">
                                         <span class="wrapper twitter">

                                         <input type="text" class="social-link-input-class form-control-plaintext" style="
      padding: 5px;" readonly value="<?php echo $value['twitter_url'];?>" id="twitter"  name="twitter"   placeholder="Twitter"/>
                                       </span>
                                        </div>

                                          <div class="form-group">
                                         <span class="wrapper youtube">

                                         <input type="text" class="social-link-input-class form-control-plaintext" style="
      padding: 5px;" readonly value="<?php echo $value['youtube_url'];?>"  id="youtube"  name="youtube"   placeholder="YouTube"/>
                                       </span>
                                        </div>

                                          <div class="form-group">
                                         <span class="wrapper IMDB">

                                         <input type="text" readonly class="social-link-input-class form-control-plaintext" style="
      padding: 5px;" value="<?php echo $value['imdb_url'];?>" id="imdb"  name="imdb"   placeholder="IMDB"/>
                                       </span>
                                        </div>

                                       
                                    </div>
                                   
                                       <div class="col-lg-12 text-right hideSaveSocial">
                                      

                                      <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
"id="btnDirSocialLinks">Save</button>
<button type="button" class="btn btn-default  pull-right id="closesocial" style="
    text-align: right;
    float: right;
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
         var socialDiv = document.getElementById('social_parent_div');
                  socialDiv.classList.remove("show-border");
           
           document.getElementById('facebook').readOnly = true;
            document.getElementById('instagram').readOnly = true;
             document.getElementById('twitter').readOnly = true;
              document.getElementById('youtube').readOnly = true;
               document.getElementById('website').readOnly = true;
                document.getElementById('imdb').readOnly = true;
                 document.getElementById('btnDirSocialLinks').readOnly = "none";


 //document.getElementById('closesocial').readOnly = "none";


           $(".hideSaveSocial").hide();
             $(".closesocial").hide();
          
             $(".hideIconsocial").show();
           

                  
    //window.history.back();
    // console.log("in go back");
    // var awardDiv = document.getElementById('project_parent_div'+ $data);
    //               awardDiv.classList.remove("show-border");

    //  document.getElementById('project_type'+$data).readOnly = true;
    //               document.getElementById('project_title'+$data).readOnly = true; 
    //               document.getElementById('production_name'+$data).readOnly = true;  
    //               document.getElementById('year'+$data).readOnly = true; 
    //               document.getElementById('link'+$data).readOnly = true; 
    //               document.getElementById('additional_info'+$data).readOnly = true;
    //               document.getElementById('saveBtn'+$data).style.display = "none";

    //                 $("#hideSaveWork"+$data).hide();
    //                 $(".hideIconwork"+$data).show();
                 
}
</script>











                                       
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
                    var socialDiv = document.getElementById('social_parent_div');
                  socialDiv.classList.remove("show-border");
           
                    alert("Social Link Updated Successfully.");

             
           document.getElementById('facebook').readOnly = true;
            document.getElementById('instagram').readOnly = true;
             document.getElementById('twitter').readOnly = true;
              document.getElementById('youtube').readOnly = true;
               document.getElementById('website').readOnly = true;
                document.getElementById('imdb').readOnly = true;
                 document.getElementById('btnDirSocialLinks').readOnly = "none";


 document.getElementById('closesocial').readOnly = "none";


           $(".hideSaveSocial").hide();
             $(".closesocial").hide();
          
             $(".hideIconsocial").show();
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
          
        function newSocial()
        {
             $(".hideSaveSocial").show();
             $(".hideIconsocial").hide();
              $(".closesocial").show();

             var socialDiv = document.getElementById('social_parent_div');
                  socialDiv.classList.add("show-border");
           document.getElementById('facebook').readOnly = false;
            document.getElementById('instagram').readOnly = false;
             document.getElementById('twitter').readOnly = false;
              document.getElementById('youtube').readOnly = false;
               document.getElementById('website').readOnly = false;
                document.getElementById('imdb').readOnly = false;
                 document.getElementById('btnDirSocialLinks').readOnly = false;


 document.getElementById('closesocial').readOnly = false;


           //      document.getElementById('btnDirectorProfile').readOnly = false;
        }  
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
         <!-- <div class="row" style="margin:0 auto">
           
                   <div class="col-lg-12 text-center">
                      <h3 class="txtred">Associations</h3>
                  <p class="txtred">Tell us more about your associations</p>
                   </div>
                 </div> -->
                  <div class="col-lg-12">
                    <div class="row">
                   <div class="col-lg-6 text-center ">
                      <h3 class="txtred" style="margin-right: -388px;">Associations</h3>
                        </div>
                 <!--   <div class="col-lg-6 hideIconassoc">
                    
                    <i class="fa fa-edit" data-toggle="modal" onclick="newAssoc()" style="font-size: 34px;
      padding-top: 19px;
      margin-left: 382px;
cursor: pointer;
"></i>
                   </div> -->
                 </div>
                 </div>

           <div id="award" style="background-color: #fff;">
          <form class="form-inline" action="" method="post" style="
    margin-bottom: -22px;
">
            
            <!-- <div class="col-md-12 text-center"> -->
              <!-- <br> -->
              <!-- <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
            <!-- </div> -->

            
              
<?php  $countresultassoc="SELECT COUNT(assoc_id) FROM director_assoc";
                //echo $countresultwork;
                 $query=$this->db->query($countresultassoc);
                
               $queryresultassoc=$query->result_array('assoc_id');
              // print_r($queryresu);
              // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
               $queryresultassoc=$queryresultassoc[0]['COUNT(assoc_id)'];
              ?>
              <?php if($queryresultassoc>=1)
              {?>
           

              <div class="pull-right col-md-12">
                  
                            <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Associations</label></a>
                        </div>
                         <?php }
                       else
                      { ?>
                         <div class="pull-right col-md-12">
                  
                            <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add Associations</label></a>
                        </div>
                         <?php }?>

                          <form id="association">

  <div class="video-box col-md-12">
   <?php
                        $result = $this->db->select('*')->from('director_assoc')->get()->result_array();
                                       // print_r($result);exit;
                                      foreach ($result as $valu) {  ?>
    <div class="add-more-block row" id="assoc_parent_div<?php echo $valu['assoc_id']?>" style="margin-bottom: 10px;">
      <div class="col-lg-12 hideIconassoc<?php echo $valu['assoc_id']?>">
                    <i class="material-icons float-right" onclick="deleteAssoc(<?php echo $valu['assoc_id']?>)" style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;
      ">delete_forever</i>

                    <i class="fa fa-edit" data-toggle="modal" onclick="newAssoc(<?php echo $valu['assoc_id']?>, <?php echo htmlspecialchars(json_encode($result)) ?>)" style="
      float: right;
      font-size: 21px;
      padding-top: 19px;
      margin-left: 10px;
cursor: pointer;
      "></i>

              


                   </div>
      <!-- background-color: #ddd;margin: 0px"> -->
                <div class="col-md-6">

  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Association Name</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" class="form-control" readonly id="association_name<?php echo $valu['assoc_id']?>" name="association_name" value="<?php echo $valu['association_name'];?>" >
      </div>
  </div>
                                       


                                    </div>
                 <div class="col-md-6">
  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Association ID</label>
      <div class="col-md-7">
        <input type="text" readonly class="form-control-plaintext" name="association_id" id="associaton_id<?php echo $valu['assoc_id']?>" value="<?php echo $valu['associaton_id'];?>" class="form-control" >
      </div>
  </div>
                                        
                                      
                                     
                                    </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAssoc" id="hideSaveAssoc<?php echo $valu['assoc_id']?>" style="
      
      padding: 20px;
      ">
      <button type="button"  name="submit" id="saveBtnAssoc<?php echo $valu['assoc_id']?>" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" onclick="GetAssoc(<?php echo $valu['assoc_id']?>)"
      class="btn btn-default btn-block" >Save</button>




<button type="button" id="hidecloseasoc<?php echo $valu['assoc_id']?>" onclick="goBack(<?php echo $valu['assoc_id']?>)" style="
    text-align: right;
    float: right;
    margin-top: 0.3rem;
    width: 85px;
    /* margin-left: 743px; */
    /* float: right; */
    display: block;
    background-color: rgb(255, 0, 124);
    height: 40px;
    padding-left: 20px;
" class="btn btn-default btn-block">Cancel</button>

<script>
function goBack($data) {
var assocDiv = document.getElementById('assoc_parent_div'+$data);
                  assocDiv.classList.remove("show-border");
   
                 
   
           document.getElementById('association_name'+$data).readOnly = true;
            document.getElementById('associaton_id'+$data).readOnly = true;
             
              document.getElementById('saveBtnAssoc'+$data).style.display = "none";
 document.getElementById('hidecloseasoc'+$data).style.display = "none";

   $(".hideSaveAssoc"+$data).hide();

$(".hidecloseasoc"+$data).hide();
          $(".hideIconassoc"+$data).show();









              // $(".hidecloseaward"+$data).hide();
               
                  
    //window.history.back();
    // console.log("in go back");
    // var awardDiv = document.getElementById('project_parent_div'+ $data);
    //               awardDiv.classList.remove("show-border");

    //  document.getElementById('project_type'+$data).readOnly = true;
    //               document.getElementById('project_title'+$data).readOnly = true; 
    //               document.getElementById('production_name'+$data).readOnly = true;  
    //               document.getElementById('year'+$data).readOnly = true; 
    //               document.getElementById('link'+$data).readOnly = true; 
    //               document.getElementById('additional_info'+$data).readOnly = true;
    //               document.getElementById('saveBtn'+$data).style.display = "none";

    //                 $("#hideSaveWork"+$data).hide();
    //                 $(".hideIconwork"+$data).show();
                 
}
</script>
      


                         </div>
              </div> 
              <?php } ?> 
            </div>
          </form>
           <!--  <?php if($value['association_name1']!='' || $value['association_id1']!=''){ ?>
                  <div class="video-box col-md-12 view-association-section-show">

                <div class="add-more-block row" style="
      
      margin-bottom: 20px;">


                <div class="col-md-6">
                                        <div class="form-group required">
                                        <label>Association Name</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" class="form-control" readonly id="association_name1" name="association_name1" style="
      padding: 5px;" value="<?php echo $value['association_name1'];?>" >
                                        </div>
                                    
                                    </div>
                 <div class="col-md-6">
                                        <div class="form-group required">
                                          <label>Association ID</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" readonly name="association_id1" style="
      padding: 5px;" id="association_id1" value="<?php echo $value['association_id1'];?>" class="form-control">
                                      
                                        </div>
                                      
                                     
                                    </div>
                                  </div>
                                </div> 
           <?php } ?> -->

             <div class="video-box col-md-12 view-association-section">
               <div class="add-more-block row"  style="
      
      margin-bottom: -1px;" >

  

     <!--  <style="background-color: #ddd;></style> -->
                
 
                <div class="col-md-6">
                
                                      <div class="form-group required">
                                        <label>Association Name</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" class="form-control" id="association_name" name="association_name" style="
      padding: 5px;"  value="" >
                                        </div>
                                    
                                    </div>
                 <div class="col-md-6">
                    <button class="closeBtn" type="button" onclick="buttondemo()"> X </button>

                                        <div class="form-group required">
                                          <label>Association ID</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="association_id" style="
      padding: 5px;" id="associaton_id" value="" class="form-control">
                                          <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
                                            <!-- <div class="row  pull-right">
                                          <button class=" " type="button" onclick="buttondemo()"> close </button>
                                        </div> -->
                                        </div>
                                      
                                     
                                    </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddassoc"style="
      
      padding: 20px;
      ">
                               <button type="button" onclick="AddAssoc()" name="submit" style="width: 110px;
      float: right; background-color: #ff007c;" class="btn btn-default btn-block">Add</button>

    <!--   id="btnDirectorWorkexp" -->
                         </div>

                                       <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right"style="
      
      padding: 20px;
      "> -->
                                      <div class="row  pull-right">
                                          
                                        </div>

                                  </div>
                                </div> 

                            <!-- <div class="row  pull-right"> -->
                               <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAssoc"style="
      
      padding: 20px;
      ">
                               <button type="submit" name="submit" style="width: 110px;background-color: #ff007c;
      float: right;" class="btn btn-default btn-block" id="btnDirectorAsso">Save</button>
                         </div> -->



   

            
          </form>

  </div>
  </div>

            <script type="text/javascript">

              function Assocdemo()
  {
     // alert(1);
     $('.view-association-section').show();
     $('.hideaddassoc').show();

   }


  
  function AddAssoc()
    {
      var status = true; 
       var association_name=$("#association_name").val();
          //alert(project_type);
          var association_id=$("#association_id").val();

if(association_name.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
                  status = false;
                }
                
              //  alert(status);         
      // $('.submit').click(function(){
          //var id = (this.id);
          if(status==true){
          var form_data = {            //repair
            //  work_id: id,
              association_name: $('#association_name').val(),
              association_id: $('#associaton_id').val(),
             
          };

      $.ajax({
        
          url: '<?php echo base_url('director/add_director_assoc/'); ?>',//repair
          type: 'POST',
          data: form_data, // $(this).serialize(); you can use this too
          success: function(msg) {
                alert("Associations Added Successfully..!! ");
                $.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(msg){
             var saveassocDiv = document.getElementById('assoc_parent_div');
            $(saveassocDiv).addClass("active");

           $("#showEditProfileForm").html(msg);

            console.log(msg);
            $('.nav-tabs a[href="#nav-associations"]').tab('show');
        }
   });

          }

     });
    }
    else{
      // alert(4);
       alert("Please Enter All The Mandatory Fields");
     return false;
    
}
    }
  function GetAssoc($data)
  {
  //alert("association_name" +$data);

   // var id=document.getElementById("project_type" +$data).value;

  var $association_name_new=document.getElementById("association_name" +$data).value;
  var $association_id_new=document.getElementById("associaton_id" +$data).value;

   //alert($association_name_new);
  updateAssoc($data);
  }


   function buttondemo()
   {
    $('.view-association-section').hide();
     document.getElementById("association_name1").value = '';
     document.getElementById("association_id1").value = '';
    }
  function deleteAssoc(id)
  {
    
          var r=confirm("Do you want to delete this Association?");
          if (r==true)
          {
             
              $.ajax({
                   
                    url: '<?php echo base_url('director/delete_assoc/'); ?>'+id,
             
                  
                  })
                .done(function (res) {
                  console.log(res);
                if(res.status="success"){
$.ajax({


       // url:'<?php //echo base_url('director/delete_proj/')?>',
         url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
             var assocDiv = document.getElementById('assoc_parent_div');
            $(assocDiv).addClass("active");

           $("#showEditProfileForm").html(response);

            console.log(response);
            $('.nav-tabs a[href="#nav-associations"]').tab('show');
        }
   });


                    
            }
          });

              // .done(function (res) {
              //     //alert("hiii");
              //     console.log("RESULT---------------------------",res);
              //     if(res.status="success"){
              //       alert("Associations Added Successfully.");
              // window.location.href="<?php echo base_url('dashboard')?>";
          
          }
          else
          {
              return false;
          }
      }
  function updateAssoc($data){

         
          //alert($data);
  var $association_name_new=document.getElementById("association_name" +$data).value;
  var $association_id_new=document.getElementById("associaton_id" +$data).value;
  console.log("Inside assoc function........................");
         // $("#btnDirectorAsso").click(function(){
        var validation_status_assoc = directorFormValidateassoc($data);
        //alert(validation_status_assoc);
        console.log(validation_status_assoc);
        if(validation_status_assoc == true ) {
          $("#error-box").hide(); 
          var form_data = new FormData();     
          //form_data.append("directorId", $('#directorId').val());
                  form_data.append("association_name",$association_name_new);    
                  form_data.append("associaton_id", $association_id_new); 

                  
                  var jsonData = {
                    "association_name":$association_name_new,
                    "associaton_id":$association_id_new,
                    
                  }

                  console.log("jsonData", jsonData);
                  
                  $.ajax({
                    url:'<?php echo base_url('director/dir_assoc/'); ?>'+ $data, 


                    type: 'POST',              
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                  })
                .done(function (res) {
                  //alert("hiii");
                  console.log("RESULT---------------------------",res);
                 var assocDiv = document.getElementById('assoc_parent_div'+$data);
                  assocDiv.classList.remove("show-border");
   
                  if(res.status="success"){
                    alert("Associations Added Successfully.");
   
           document.getElementById('association_name'+$data).readOnly = true;
            document.getElementById('associaton_id'+$data).readOnly = true;
             
              document.getElementById('saveBtnAssoc'+$data).style.display = "none";
document.getElementById('hidecloseasoc'+$data).style.display = "none";
   $(".hideSaveAssoc"+$data).hide();
   $(".hidecloseasoc"+$data).hide();
   
          $(".hideIconassoc"+$data).show();

                //  window.location.href="<?php // echo base_url('dashboard')?>";
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
        
else{
  alert("Please Add All The Mandatory Fields Of Associations");
  return false;
}
              
          //});
          } 

        function directorFormValidateassoc($data)
            {   
              //var id=$data;
           //   alert(2);
              console.log("directorFormValidate", $data);
                var status = true;         
  var $association_name_new=document.getElementById("association_name" +$data).value;
  var $association_id_new=document.getElementById("associaton_id" +$data).value;

  var association_name= $association_name_new;
        var association_id=$association_id_new;


                if(association_name.trim() == '') { 
                 status = false;
                  $("#error-box").show();            
                  
                    $("#error-box").html("<strong> * Please Enter Association Name.<strong>");
                
                }            
                else if(association_id.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Association Id.<strong>");
                  status = false;
                }     
                console.log("validation_status....................",status);
                return status;
            }

              
          

         
        function newAssoc(id,assocresultData)
        {
          //$valu['assoc_id']
           console.log("resultData", assocresultData);
            for(var i=0;i<assocresultData.length;i++) {
              if (assocresultData[i].assoc_id == id) {
                console.log("Inside IF: ", assocresultData[i].assoc_id);
          var assocDiv = document.getElementById('assoc_parent_div'+id);
                  assocDiv.classList.add("show-border");
   
             $('input[type="text"], textarea').removeAttr('readonly');
           document.getElementById('association_name'+id).readOnly = false;
            document.getElementById('associaton_id'+id).readOnly = false;
             
               document.getElementById('hidecloseasoc'+id).style.display = "block";
              document.getElementById('saveBtnAssoc'+id).style.display = "block";
               $("#hideSaveAssoc"+id).show();
          $(".hideIconassoc"+id).hide();
          $("#hidecloseasoc"+id).show();
          
              }
              else
              {
                 console.log("Inside ELSE: ", assocresultData[i].assoc_id);
                var tempId = assocresultData[i].assoc_id;
                 var assocDiv = document.getElementById('assoc_parent_div'+tempId);
                  assocDiv.classList.remove("show-border");
   
             $('input[type="text"], textarea').removeAttr('readonly');
           document.getElementById('association_name'+tempId).readOnly = true;
            document.getElementById('associaton_id'+tempId).readOnly = true;
             
              document.getElementById('saveBtnAssoc'+tempId).style.display = "none";
              document.getElementById('hideSaveAssoc'+tempId).style.display = "none";
           document.getElementById('hidecloseasoc'+tempId).style.display = "none";
           
               $("#hideSaveAssoc"+tempId).hide();
          $(".hideIconassoc"+tempId).show();
          $(".hidecloseasoc"+tempId).hide();
          
              }
            }
         
         
        } 
    </script>

   <!--  End Associations  -->
          </div>
        
        </div>
      </div>
    </div>
  </section>
  <!-- ./Tabs -->
  <script type="text/javascript">
    
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
                     var profileDiv = document.getElementById('profile_parent_div');
                  profileDiv.classList.remove("show-border");
     
      document.getElementById('profile_pic').readOnly = true;
     // document.getElementById('companyName').readOnly = false;
      //document.getElementById('email').readOnly = false;
          document.getElementById('mobile').readOnly = true;
      document.getElementById('address').readOnly = true;
      document.getElementById('pincode').readOnly = true;
      document.getElementById('city').readOnly = true;
      document.getElementById('script_name').readOnly = true;
       document.getElementById('btnDirectorProfile').readOnly = "none";
     document.getElementById('closeprofile').readOnly = "none";
    

        $(".hideImage").hide();
      $(".hideScript").hide();
      $(".showScript").hide();
        $(".hideSave").hide();
         $(".closeprofile").hide();
      
      $(".hideIcon").show();
                   // window.location.href="<?php echo base_url('dashboard')?>";
                   
                    
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



  <script type="text/javascript">
    function newInfo()
    {
      $(".hideImage").show();
      $(".hideScript").show();
      $(".showScript").hide();
      $(".hideSave").show();
        $(".closeprofile").show();
      $(".hideIcon").hide();
      var profileDiv = document.getElementById('profile_parent_div');
                  profileDiv.classList.add("show-border");

      document.getElementById('profile_pic').readOnly = false;
     // document.getElementById('companyName').readOnly = false;
      //document.getElementById('email').readOnly = false;
      document.getElementById('mobile').readOnly = false;
      document.getElementById('address').readOnly = false;
      document.getElementById('pincode').readOnly = false;
      document.getElementById('city').readOnly = false;
      document.getElementById('script_name').readOnly = false;
       document.getElementById('btnDirectorProfile').readOnly = false;
       document.getElementById('closeprofile').readOnly = false;

    }
  </script>
