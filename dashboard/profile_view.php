<style type="text/css">
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
  .scriptclass
  {
    display: none;
  }
  .socialInfo
  {
    display: none;
  }
  .AwardReg
  {
    display: none;
  }
  .WorkExp
  {
    display: none;
  }
  .Association
  {
    display: none;
  }
  .closeSocial
  {
    display: none;
  }
  .closeAssoc
  {
    display: none;
  }
  .buttondemo
  {
    display: none;
  }
  .buttondemo1
  {
    display: none;
  }
  .closeInfo
  {
    display: none;
  }
  .closeWork
  {
    display: none;
  }
  .closeAward
  {
    display: none;
  }
  .buttondemo2
  {
    display: none;
  }
  
</style>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="profile-view">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin: 0 auto;">
        <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 "> View Profile As a Artist</h4>
                   
                </div>
              </div>
      </div>
    </div>
    <div class="row">
       <?php 

                      foreach ($result as $value) { 

                        ?>
      
      <div class="col-lg-3" style="background-color: #eee;height: 30%;width: 70px;margin: auto; background-color: #eee;">
                                     <div class="picture-container" style="position: relative;top: 17%;">
                                          <div class="picture text-center">
                                              <?php if($value['profile_pic']) {
 //print_r($value['profile_pic']);exit;
                                               ?>
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
                                            <?php }else { ?>
                                                
                                                 <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="blah" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
                                            <?php } ?>

<!--                                               <div class="form-group text-center">
                                        <label>Choose Profile photo</label>
                                         <br>
                                          <label class="btn-bs-file btn btn-lg btn-primary">
                               Browse
                          <input type="file" name="profile_pic"  id="profile_pic"/>
                          </label>
                                         <img id='img-upload'/>
                                      </div>
 -->                                          </div>
                                         
                                      </div>
                                  
                    </div>

      <div class="col-md-9"><div class="sections generalInfoshow">
          <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-6">
                   <h5 class="sub-section-title" style="padding-top: 5px;">General Information</h5>
              </div>
             
            </div>
            </div>
            
               <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                  <p><span class="txtred">Company Name: </span>
                    <?php echo $value['official_name'];?>
                </p>
                <p><span class="txtred">Official Email ID: </span>
                    <?php echo $value['email_id'];?>
                </p>

                   <div class="form-group">
                    <span class="txtred">Upload Profile</span>
                                
                    <a href="<?php echo base_url('assets/scripts/').$value['script_file'];?>" target="_blank"><?php if($value['script_file']){  ?>
                    <label class="txtgreen" id="script-name"> <?php echo $value['script_file'];?> </label></a>


                     <?php } else{ ?> 
                     <label class="txtgreen" id="script-name">  </label>
                     <?php } ?>
                                    </div>


                
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Contact No: </span>
                    <?php echo $value['contact_no'];?>
                </p>
                 <p><span class="txtred">Official Address: </span>
                    <?php echo $value['address'];?> , <?php echo $value['city'];?> , <?php echo $value['pin_code'];?>
                </p> 
              </div>
            </div>
          </div>
          
             

           


            </div>
          <div class="col-lg-12 scriptclass">
                  
              <!-- <div class="ProfileView" style="background-color: #e4cbcf;"> -->
                <div class="ProfileView" style="background-color: #ccc;">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 style="color: #AD8C29;">General Information </h3>
               <!--  <p class="txtred">Please provide the supporting social links</p> -->
                 </div>
              <div class="profileForm" style="    padding: 1px 20px 0px 20px;">
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data">
                   <?php 
                      foreach ($result as $value) { ?>
                  <!-- <div class="row"> -->
                 

                      <!-- ************** -->
                    <!--  <div class="col-lg-8"> -->
                               <div class="row">
                                 <div class="col-lg-6 text-left">
                                      <div class="form-group required" >
                                        <label class="showcolor">Company  Name:</label>
                                        <input type="text" readonly class="form-control" style="border-bottom: 1px solid green;" id="companyName" value="<?php echo $value['official_name'];?>" name="companyName" >
                                      </div>
                                      <div class="form-group required">
                                          <label class="showcolor">Official Email ID:</label> 
                                           <input type="email" readonly name="email" style="border-bottom: 1px solid green;" id="email" class="form-control" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id">
                                      </div>
                                      <div class="form-group required">
                                        <label class="showcolor">Contact No. 
                                          <!-- <small>(required)</small> -->
                                        </label>
                                        <input type="phone" name="mobile" id="mobile" style="border-bottom: 1px solid green;"class="form-control" value="<?php echo $value['contact_no'];?>" placeholder="Enter Contact Number">
                                      </div>
                                   <div class="form-group">
                                        <label class="showcolor">Upload Profile</label>
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

                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6 text-left">
                                      <div class="form-group required">
                                        <label class="showcolor"> City 
                                          <!-- <small>(required)</small> -->
                                        </label>
                                          <input type="text" name="city" id="city" class="form-control" style="border-bottom: 1px solid green;" value="<?php echo $value['city'];?>" placeholder="Enter City Name">

                                      </div>
                                      <div class="form-group">
                                          <label class="showcolor">Pin Code </label>
                                          <input type="text" name="pincode" id="pincode" style="border-bottom: 1px solid green;"class="form-control" value="<?php echo $value['pin_code'];?>" placeholder="Enter Pin Code">
                                      </div>
                                      <div class="form-group">
                                        <label class="showcolor">Official Address </label>
                                        <input class="form-control" name="address" id="address" style="border-bottom: 1px solid green;" rows="5" value="<?php echo $value['address'];?>" id="comment" placeholder="Enter office Adress">
                                      </div>
                                  
                                  </div>
                                   <?php } ?>
                                    <button class="closeBtn" type="button" onclick="closeInfo()" style="margin-right: 17px;
                                  background-color: pink;margin-top: -40px;"> X </button>
                                     <div class="col-lg-12 text-right">
                                    
                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirectorProfile">Save</button>
                                  </div>
                               </div>
                                  <!-- ********** -->

                 <!--    </div> -->
                <!--   </div> -->
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
              </div>
           </div>
         </div> 
          </div> <!-- col-md-8 ends -->          

    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="Addwork">
         <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-6">
                   <h5 class="sub-section-title"style="padding-top: 5px;" >Work Experience</h5>
              </div>
              <!-- <div class="col-lg-6"> -->
          <!--  onclick="showInfo()" -->
    <!-- <i class="fa fa-edit" data-toggle="modal" onclick="showWork()" style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
   <!--  <i class="fa fa-edit" data-toggle="modal" data-target="#myModal1"style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
             <!-- </div> -->
            </div>


            </div>
            
             
                    <!-- Project 1 body starts-->
                    <?php
                    $i=1;
                      $resultWork = $this->db->select('*')->from('director_work_exp')->get()->result_array();
                                     // print_r($result);exit;
                     foreach ($resultWork as $key) {  
                      
                      ?> 
                      <div id="accordion-project" role="tablist">
            <div class="card-collapse">
              <div class="card-header" role="tab" id="headingOne<?php echo $key['work_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapseOne<?php echo $key['work_id']; ?>" aria-expanded="true" aria-controls="collapseOne">
                  <a  class="">
                    Projects<?php echo $i; ?>
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div>
                       <div id="collapseOne<?php echo $key['work_id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $key['work_id']; ?>" data-parent="#accordion-project" style="">
                <div class="card-body">
                  <div class="row">

                     <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                  <p><span class="txtred">Project Type: </span>
                    <?php echo $key['project_type'];?>
                </p>
                <p><span class="txtred">Production Name:</span>
                    <?php echo $key['production_name'];?>
                </p>
                <p><span class="txtred">Link If Any: </span>
                    <?php echo $key['link'];?>
                </p>
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Project Title: </span>
                    <?php echo $key['project_title'];?>
                </p>
                 <p><span class="txtred">Year: </span>
                    <?php echo $key['year'];?> 
                </p> 
                <p><span class="txtred">Additional Details: </span>
                    <?php echo $key['additional_info'];?>
                </p>
              </div>
            </div>
          </div>
          </div>
              </div>
            </div>

                  </div>
                
            
            
          </div>
        <?php $i++; } ?>
                    <!-- Project 1 body ends-->

           
</div>
      <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br>
          <!-----------edit work start here---------------->

          <div class="col-lg-12 WorkExp" style="background-color: #ccc">

         <!--  <div class="video-box1 col-md-12 WorkExp" style="background-color: white"> -->
            <div class="row" style="margin:0 auto">
                <!-- <div class="col-lg-12 text-center">
                    <h3 class="txtred">Work Experience</h3>
                
                 </div> -->
               </div>
           <form class="form-inline" action="" method="post">
          
          
            
            <div class="pull-right col-lg-12">
                          <a href="javascript:void(0);" class="addWorkBtnDemo" onclick="Workdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Work Experience</label></a>
                      </div>
                      
                      <!-- <div class="col-lg-12"> -->
       <div class="video-box1 col-lg-12">
            <div class="add-more-block row">
              <div class="col-lg-6">
                <div class="form-group required">
                                        <label class="showcolor">Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" id="project_type" style="border-bottom: 1px solid green;" value="<?php echo $value['project_type'];?>" name="project_type" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label class="showcolor">Production Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  name="production_name" value="<?php echo $value['production_name'];?>"  id="production_name" style="border-bottom: 1px solid green;width: 127px;" class="form-control">
                                      </div>
              
                <div class="form-group">
                                        <label class="showcolor">Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="link" id="link" style="border-bottom: 1px solid green;" value="<?php echo $value['link'];?>"  class="form-control" value="">
                                      </div>
              </div>
              <div class="col-lg-6">
                <button class="closeBtn" type="button" onclick="closeWork()"style="margin-top: -16px;
    background-color: pink;"> X </button>
                <div class="form-group required">
                                        <label class="showcolor"> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title" value="<?php echo $value['project_title'];?>"  id="project_title" style="border-bottom: 1px solid green;"class="form-control" value="">

                                      </div>
              
             
                <div class="form-group required">
                                          <label class="showcolor">Year </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="year" value="<?php echo $value['year'];?>"  id="year" style="border-bottom: 1px solid green;" class="form-control" value="">
                                      </div>
           
                <div class="form-group">
                                        <label class="showcolor">Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="additional_info" id="additional_info" style="border-bottom: 1px solid green;    width: 130px;" value="<?php echo $value['additional_info'];?>"  >
                                      </div>
              </div>
            </div>  
          </div>


          <?php if($value['project_type1']!='' || $value['production_name1']!='' || $value['link1']!='' || $value['project_title1']!='' ||$value['year1']!=''||$value['additional_info1']) { ?>


            <div class="video-box col-lg-12 add-work-details-show" >
            
          <div class="add-more-block row">
              <div class="col-lg-6">
                <div class="form-group required">
                                        <label class="showcolor">Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="project_type1" style="border-bottom: 1px solid green;"value="<?php echo $value['project_type1'];?>" name="project_type1" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label class="showcolor">Production Name</label>
                                        <input type="text"  name="production_name1" value="<?php echo $value['production_name1'];?>"  id="production_name1" style="border-bottom: 1px solid green;    width: 126px;" class="form-control">
                                      </div>
              
                <div class="form-group">
                                        <label class="showcolor">Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="link1" id="link1" value="<?php echo $value['link1'];?>" style="border-bottom: 1px solid green;" class="form-control" value="">
                                      </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group required">
                                        <label class="showcolor"> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title1" value="<?php echo $value['project_title1'];?>"  id="project_title1" style="border-bottom: 1px solid green;" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;


                                      </div>
              
             
                <div class="form-group required">
                                          <label class="showcolor">Year </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="year1" value="<?php echo $value['year1'];?>"  id="year1" style="border-bottom: 1px solid green;" class="form-control" value="">
                                      </div>
           
                <div class="form-group">
                                        <label class="showcolor">Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="additional_info1" id="additional_info1" style="border-bottom: 1px solid green;    width: 130px;" value="<?php echo $value['additional_info1'];?>"  >


                                      </div>
              </div>
            </div>  
          </div>
          <?php } ?>

            <div class="video-box col-lg-12 add-work-details" >
           
          <div class="add-more-block row">
              <div class="col-lg-6">
                <div class="form-group required">
                                        <label class="showcolor">Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="project_type1" style="border-bottom: 1px solid green;" value="<?php echo $value['project_type1'];?>" name="project_type1" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label class="showcolor">Production Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  name="production_name1" value="<?php echo $value['production_name1'];?>"  id="production_name1" style="border-bottom: 1px solid green;width: 127px;" class="form-control">
                                      </div>
              
                <div class="form-group">
                                        <label class="showcolor">Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="link1" id="link1" style="border-bottom: 1px solid green;" value="<?php echo $value['link1'];?>"  class="form-control" value="">
                                      </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group required">
                                        <label class="showcolor"> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title1" value="<?php echo $value['project_title1'];?>"  id="project_title1" style="border-bottom: 1px solid green;" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;

                                        <button class="closeBtn" type="button" onclick="buttondemo1()"> X </button>

                                      </div>
              
             
                <div class="form-group required">
                                          <label class="showcolor">Year </label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="year1" style="border-bottom: 1px solid green;" value="<?php echo $value['year1'];?>"  id="year1" class="form-control" value="">
                                      </div>
           
                <div class="form-group">
                                        <label class="showcolor">Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" name="additional_info1" id="additional_info1" style="border-bottom: 1px solid green;    width: 130px;" value="<?php echo $value['additional_info1'];?>"  >


                                      </div>
              </div>
            </div>  
          </div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnDirectorWorkexp">Save</button>
                       </div>
                  
        </form> 
                  </div>

          <!-----------edit work end  here---------------->

    <div class="row">
      <div class="col-md-12">
  <div class="sections">
          <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-6">
                   <h5 class="sub-section-title" style="padding-top: 5px;">Social Links</h5>
              </div>
              <div class="col-lg-6">
          <!-- <i class="fa fa-edit" data-toggle="modal" onclick="showSocial()"style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
    <!-- <i class="fa fa-edit" data-toggle="modal" data-target="#myModal3"style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
             </div>
            </div>
            </div>
               <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
          <div class="form-group social-link-input">
          <!--   <a href="<?php //echo $link_address;?>"> Link </a> -->
          <a href="<?php echo $value['facebook_url'];?>" target="_blank">
          <span class="wrapper facebook" style="
    color: #3B5998;
">
         <!--  <?php //echo $value['facebook_url'];?> 
             -->                         </span></a>
                                     



              <!--  <div class="form-group social-link-input"> -->
                 <a href="<?php echo $value['instagram_url'];?>" target="_blank">
         
                                       <span class="wrapper instagram" style="
    color: #cd486b;
">
                     <!--  <?php //echo $value['instagram_url'];?> -->
                                     </span></a>
                                     <!--  </div> -->

                   <!-- <div class="form-group social-link-input"> -->
                    <a href="<?php echo $value['website_url'];?>" target="_blank">
                                       <span class="wrapper websitelink">

                                       <!-- <?php //echo $value['website_url'];?> -->
                                     </span></a>
                                      <!-- </div> -->


                
              </div>
            </div>
              <div class="col-lg-12 text-left">

                 <div class="form-group social-link-input">
                  <a href="<?php echo $value['twitter_url'];?>" target="_blank">
                                       <span class="wrapper twitter" style="
    color: #1DA1F2;
">

                                     <!--  <?php //echo $value['twitter_url'];?> -->
                                     </span>
                                      

                 <!-- <div class="form-group social-link-input"> -->
                   <a href="<?php echo $value['youtube_url'];?>" target="_blank">
                  
                                       <span class="wrapper youtube" style="
    color: #ff0000;
">

                                      <!-- <?php //echo $value['youtube_url'];?> -->
                                     </span>
                                     <!--  </div> -->

                                       <!--  <div class="form-group social-link-input"> -->
                                         <a href="<?php $value['imdb_url'];?>"target="_blank">
                                       <span class="wrapper IMDB" style="
    color: #f5de50;">

                                    <!--  <?php// echo $value['imdb_url'];?> -->
                                     </span></a>
                                      <!-- </div> -->
                                      </div>
              </div>
            </div>
          </div>
          
        </div>
      



      </div>
       </div><!-- Social links -->
    
      </div><!-- workexp div end -->



      <!--  ***************** -->

      <div class="col-md-6">
<div class="addAward">
  <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-10">
                   <h5 class="sub-section-title" style="padding: 5px 0 0 10px;">Awards And Recognition</h5>
              </div>
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            </div>
            </div>
          <!-- accordion starts -->
          <?php
           $i=1;
                      $resultAward = $this->db->select('*')->from('director_award_reg')->get()->result_array();
                                     // print_r($result);exit;
                                    foreach ($resultAward as $val) {  ?>
<div id="accordion-association" role="tablist">
            <div class="card-collapse">
              <div class="card-header" role="tab" id="headingTwo<?php echo $val['award_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapsethree<?php echo $val['award_id']; ?>" aria-expanded="true" aria-controls="collapsethree">
                  <a  class="">
                    Award And Recognition  <?php echo $i; ?>
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div>
              <div id="collapsethree<?php echo $val['award_id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $val['award_id']; ?>" data-parent="#accordion-association" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                  <p><span class="txtred">Award Title: </span>
                    <?php echo $val['award_title'];?>
                </p>
                <p><span class="txtred">Award Year:</span>
                    <?php echo $val['award_year'];?>
                </p>
                
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Award For : </span>
                    <?php echo $val['award_for'];?>
                </p>
                 <p><span class="txtred">Additional Details: </span>
                    <?php echo $val['add_details'];?> 
                </p> 
               
              </div>
            </div>
          </div>
                    <!-- awards 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
           <?php $i++; } ?>
            
          </div>
          


          <!-- accordion ends -->

<script>
var acc = document.getElementsByClassName("accordionAward");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

          
</div><!-- Addawardends -->
<!------------edit award strt----------->
          <br>
          <div class="col-lg-12 AwardReg" style="background-color: #ccc">
              <form class="form-inline" action="" method="post">
         
          
            
            <div class="pull-right col-md-12">
                          <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Awards/Recognitions</label></a>

                          
                      </div>
                      <div class="video-box col-md-12">
            <div class="add-more-block row">
              <div class="col-md-6">

               <div class="form-group required">
                                        <label class="showcolor">Award Title</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="form-control" id="award_title" style="border-bottom: 1px solid green;" value="<?php echo $value['award_title'];?>"  name="award_title">
                                      </div>
            
             
                <div class="form-group required">
                                        <label class="showcolor">Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" style="border-bottom: 1px solid green;"name="award_year" id="award_year" class="form-control" value="<?php echo $value['award_year'];?>" >
                                      </div>
              
               
              </div>
              <div class="col-md-6">
                <button class="closeBtn" type="button" onclick="closeAward()" style="margin-right: 17px;
                                  background-color: pink;margin-top: -15px;"> X </button>
                                        <div class="form-group required">
                                        <label class="showcolor"> Award For </label>
                                      
                                        <input type="text" name="award_for" id="award_for" style="border-bottom: 1px solid green;" value="<?php echo $value['award_for'];?>"  class="form-control" value="">
                                        </div>
             
                                        <div class="form-group">
                                        <label class="showcolor">Additional Details </label>
                                        <input class="form-control" style="border-bottom: 1px solid green;" name="add_details" id="add_details" value="<?php echo $value['add_details'];?>" >
                                        </div>
           
               
              </div>
              </div>

              </div> 
          
             <?php if($value['award_title1']!='' ||$value['award_year1']!='' ||$value['award_for1']!='' || $value['add_details1']!=''){ ?>
                    

              <div class="video-box col-md-12 view-award-section-show">
              <div class="add-more-block row">
            
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label class="showcolor">Award Title</label>
                                      <input type="text"  class="form-control" id="award_title1" style="border-bottom: 1px solid green;" value="<?php echo $value['award_title1'];?>"  name="award_title1">
                                      </div>
                                       
                                       <div class="form-group required">
                                        <label class="showcolor"> Award Year <small></small></label>
                                        <input type="text" style="border-bottom: 1px solid green;" name="award_year1" id="award_year1" class="form-control" value="<?php echo $value['award_year1'];?>" >
                                      </div>
              
                                    
              </div>
              <div class="col-md-6">
               <div class="form-group required">
                                        <label class="showcolor"> Award For</label>
                                        <input type="text" style="border-bottom: 1px solid green;" name="award_for1" id="award_for1" value="<?php echo $value['award_for1'];?>"  class="form-control" value="">
                                        </div>
             
                                        <div class="form-group">
                                        <label class="showcolor">Additional Details </label>
                                        <input class="form-control" style="border-bottom: 1px solid green;" name="add_details1" id="add_details1" value="<?php echo $value['add_details1'];?>" >
                                      </div>
                                      </div>
                                      </div>
                                       </div>
            <?php } ?>

              <div class="video-box col-md-12 view-award-section">
              <div class="add-more-block row">
            
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label class="showcolor">Award Title</label>
                                      <input type="text"  class="form-control" id="award_title1" style="border-bottom: 1px solid green;" value="<?php echo $value['award_title1'];?>"  name="award_title1">
                                      </div>
                                       
                                       <div class="form-group required">
                                        <label class="showcolor">Award Year </label>
                                        <input type="text" style="border-bottom: 1px solid green;" name="award_year1" id="award_year1" class="form-control" value="<?php echo $value['award_year1'];?>" >
                                      </div>
              
                                    
              </div>
              <div class="col-md-6">
               <div class="form-group required">
                                        <label class="showcolor"> Award For</label>
                                        <input type="text" name="award_for1" id="award_for1" value="<?php echo $value['award_for1'];?>" style="border-bottom: 1px solid green;"  class="form-control" value="">

                                        <button class="closeBtn" type="button" onclick="buttondemo2()"> X </button>

                                        </div>
             
                                        <div class="form-group">
                                        <label class="showcolor">Additional Details </label>
                                        <input class="form-control" name="add_details1" style="border-bottom: 1px solid green;" id="add_details1" value="<?php echo $value['add_details1'];?>" >
                                      </div>
                                      </div>
                                      </div>
                                       </div>
                                       
 
           
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnDirectorAward">Save</button>
                       </div>
                  
        </form> 
      </div>

          <!------------edit award end----------->
     <div><!-- Hi Associations here -->
<div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-6">
                   <h5 class="sub-section-title" style="padding-top: 5px;">Associations</h5>
              </div>
              <div class="col-lg-6">
           
<!--     <i class="fa fa-edit" data-toggle="modal" data-target="#myModal4"style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
   <!--   <i class="fa fa-edit" data-toggle="modal" onclick="showAssoc()" style="font-size:24px; padding-top: 5px;
    margin-left: 197px;"></i> -->
             </div>
            </div>
            </div>

          <!-- accordion starts -->
          <?php
            $i=1;
                      $result = $this->db->select('*')->from('director_assoc')->get()->result_array();
                                     // print_r($result);exit;
                                    foreach ($result as $valu) {  ?>
<div id="accordion-awards<?php echo $valu['assoc_id']; ?>" role="tablist">
            <div class="card-collapse">
              <div class="card-header" role="tab" id="headingthree<?php echo $valu['assoc_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapsefive<?php echo $valu['assoc_id']; ?>" aria-expanded="true" aria-controls="collapsefive">
                  <a  class="">
                Association <?php echo $i;  ?>
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div>
              <div id="collapsefive<?php echo $valu['assoc_id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $valu['assoc_id']; ?>" data-parent="#accordion-awards" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- association body starts-->
               
                <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                  <p><span class="txtred">Association Name: </span>
                    <?php echo $valu['association_name'];?>
                </p>
                
                
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Association ID:</span>
                    <?php echo $valu['associaton_id'];?>
                </p>
                  
               
              </div>
            </div>
          </div>       
                    <!-- association 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>

<?php  $i++; }?>
          <!-- accordion ends -->
      </div><!-- Association -->
         

         
   


      </div><!-- Awards and recognition -->
    
    </div>
     
    <div>
    
      <!--  start columns -->

      <div class="col-lg-8 col-md-8">
        
          <!--   <div class="row scriptclass"> -->
              <!-- <div class="col-lg-12 scriptclass" style="background-color:white"> -->
                <!----------edit buttion start here---------------->
               
          <div class="col-lg-8 col-md-8 Addwork" style="max-width: 124.66667%;">
          
      
           


          </div>


        <div class="col-lg-8 col-md-8 addAward" style="padding-top: 15px;max-width: 111.66667%;"
        >
            
      
          </div>
          
              <div class="col-lg-8 col-md-8 addsocial" style=" padding-top: 15px; max-width: 107.66667%;">
          </div>
         <!------edit social start here------------>
         <!-- <div class="col-lg-12 socialInfo">

         <div id="awards" style="background-color: #ccc;">
          <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3 style="color: #AD8C29;">Social Links </h3>
              
                 </div>
               </div>
                <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding: 10px;">
                     <?php foreach($result as $value){
              ?>
                  <div class="row">
                 
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

                                  </div>
                                  
                                   <div class="col-lg-6">
                                     
                                        <div class="form-group social-link-input">
                                       <span class="wrapper twitter">

                                       <input type="text" class="social-link-input-class" value="<?php echo $value['twitter_url'];?>" id="twitter"  name="twitter"   placeholder="Twitter"/>
                                     </span>
                                      <button class="closeBtn" type="button" onclick="closeSocial()" style="margin-right: 17px ;    margin-top: -73px;
                                  background-color: pink;"> X </button>
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
                                    
                                    <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" id="btnDirSocialLinks">Save</button>
                                     
                                  </div>
                               </div>
                                 
                    </div>
                  </div>
                    <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div> 
                                 
            </form>
             </div>
           </div> -->
         <!----------edit social end here--------------->


              <!----------edit assoc start here--------------->
              <div class="col-lg-8 col-md-8 addAssoc" style="padding-bottom: 15px;max-width: 131.66667%;">
           
            
      
      


<script>
var acc = document.getElementsByClassName("accordionAssoc");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

          </div>
          <!-----------edit assoc end here------------------->
          <div class="col-lg-12 Association"  style="background-color: #ccc;">
          <form class="form-inline" action="" method="post">
        <!--  <div class="video-box col-md-12"> -->
             <div class="pull-right col-md-12" style="
    margin-bottom: 20px;">
              
                          <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Associations</label></a>
                      </div>

                           <div class="video-box col-md-12">
  <div class="add-more-block row" style="
    
    margin-bottom: 20px;">
    <!-- background-color: #ddd;margin: 0px"> -->
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label class="showcolor">Association Name</label>
                                        <input type="text" class="form-control" style="border-bottom: 1px solid green;width: 123px;" id="association_name" name="association_name" value="<?php echo $value['association_name'];?>" >
                                      </div>
                                  
                                  </div>

               <div class="col-md-6">
                <button class="closeBtn" type="button" onclick="closeAssoc()" style="margin-top: -39px;;
    background-color: pink;"> X </button>

                                      <div class="form-group required">
                                        <label class="showcolor">Association ID</label> &nbsp;&nbsp;&nbsp;
                                        <input type="text" name="association_id" style="border-bottom: 1px solid green;" id="association_id" value="<?php echo $value['associaton_id'];?>" class="form-control">
                                      </div>
                                    
                                   
                                  </div>
              
              
              
            </div>  
          </div>

          <?php if($value['association_name1']!='' || $value['association_id1']!=''){ ?>
                <div class="video-box col-md-12 view-association-section-show">

              <div class="add-more-block row" style="
    
    margin-bottom: 20px;">

              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label class="showcolor">Association Name</label>
                                        <input type="text" class="form-control" style="border-bottom: 1px solid green;    width: 122px;" id="association_name1" name="association_name1" value="<?php echo $value['association_name1'];?>" >
                                      </div>
                                  
                                  </div>
               <div class="col-md-6">
                                      <div class="form-group required">
                                        <label class="showcolor">Association ID</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="association_id1" style="border-bottom: 1px solid green;" id="association_id1" value="<?php echo $value['association_id1'];?>" class="form-control">
                                    
                                      </div>
                                    
                                   
                                  </div>
                                </div>
                              </div> 
         <?php } ?>

           <div class="video-box col-md-12 view-association-section">

              <div class="add-more-block row" style="
    
    margin-bottom: 20px;">

              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label class="showcolor">Association Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" id="association_name1" name="association_name1" style="border-bottom: 1px solid green;    width: 122px;" value="<?php echo $value['association_name1'];?>" >
                                      </div>
                                  
                                  </div>
               <div class="col-md-6">
                                      <div class="form-group required">
                                        <label class="showcolor">Association ID</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="association_id1" style="border-bottom: 1px solid green;"  id="association_id1" value="<?php echo $value['association_id1'];?>" class="form-control">
                                        
                                      </div>
                                    
                                   
                                  </div>
                                     
                                    <div class="row  pull-right">
                                        <button class="closeBtn" type="button" onclick="buttondemo()"> X </button>
                                      </div>

                                </div>
                              </div> 

                          <!-- <div class="row  pull-right"> -->
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="
    
    padding: 20px;
    ">
                             <!-- <button type="submit" name="submit" style="width: 110px;
    float: right;" class="btn btn-default btn-block" id="btnDirectorAsso">Save</button> -->
                       </div>
                    
          
        </form>
      </div>
          </div><!-----------end here col-lg-8 col-md-8--------->


        <?php } ?>
        <!-----------edit general info start ------------------>
        <!-- <div class="col-lg-12">
         
        </div>
        <div class="col-lg-4">

        </div> -->

         


      
        <!--------------edit general info end---------------->
     <!--    work exp  -->
        <!-- <div class="col-lg-12">
         hi
        </div>
        <div class="col-lg-4">
hi
        </div>
 -->
       



        <!-- work exp end here -->


            <div class="col-lg-12">
         
        </div>
        <div class="col-lg-4">

        </div>



          <!----------sociao start-------------->
          <div class="col-lg-12">
         
        </div>
        <div class="col-lg-4">

        </div>
          
          <!--------------social end ---->
          <!--------------association form start -------------->

            <div class="col-lg-12">
         
        </div>
        <div class="col-lg-4">

        </div>

        
          <!-----------------------assoc form end ------->
        </div>
      </div>
      <!--  end columns -->
    </div>
  </div>
</div>



<!--------pop up code start- for profile----->

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 565px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 100%;">
        <div class="modal-header">
            <h4 class="modal-title" style="margin: 0 auto;">General Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->

          
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group required" style="width:100%;">
                  <!-- <div class="borderStyle"> -->
                <label> Company Name:</label>
                <input type="text" name="companyName" id="companyName" class="borderStyle">
  </div>
            <!--   </div> -->
              <div class="form-group required">
                <label> Official Email ID:</label>
                <input type="text" name="email" id="email" class="borderStyle">
              </div>
               <div class="form-group required">
                <label> Contact No:</label>
                <input type="text" name="mobile" id="mobile" class="borderStyle">
              </div> 
             <!--  <div class="form-group">
                                      <label> Upload Profile</label>
                                         <div class="input-group">
                                        <span class="input-group-btn ">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="script_name"  id="script_name" accept=".pdf,.doc" class="form-control">
                                         </span>
                                         
                                          </span>
            
                                          </div>
                                         <img id='img-upload'/>
                                      </div> -->


            </div>
          
              <div class="col-lg-6">
                <div class="form-group required">
                <label> City:</label>
                <input type="text" name="city" id="city" class="borderStyle">
              </div>
              <div class="form-group required">
                <label> Pin Code:</label>
                <input type="text" name="pincode" id="pincode" class="borderStyle">
              </div>
              <div class="form-group required">
                <label> Official Address:</label>
                <input type="text" name="address"  id="address" class="borderStyle">
              </div>
              </div>
              </div>
              
          <!------code here-------------->
        </div>
        <div class="modal-footer">
          <!-- <button type="button" id="btnDirectorProfile" class="btn btn-default" data-dismiss="modal">Save</button> -->

        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script type="text/javascript">

//$('.addfiles').on('click', function() { $('#profile_pic').click();return false;});
$('.addscript').on('click', function() { $('#script_name').click();return false;});

   $("#btnDirectorProfile").click(function(){
      var validation_status = directorFormValidate();
      //console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form = $('form')[0];
        var form_data = new FormData(form);
              //  form_data.append('profile_pic', $('input[type=file]')[0].files[0]);   
                form_data.append('script_name', $('input[type=file]')[0].files[0]);   
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
                   window.location.href="<?php echo base_url('dashboard')?>";
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
             
              return status;
              console.log(status);
          }
            
        });
  </script>


<!---------------pop up code end---- for profile------->

<!-------------pop up for Work exp----------------->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" style="width: 565px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 100%;">
        <div class="modal-header">
            <h4 class="modal-title" style="margin: 0 auto;">Work Experience</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
                
<div class="row">

          <!-- <div class="video-box1 col-md-12"> -->
            
            <div class="pull-right col-md-12">
                          <a href="javascript:void(0);" class="addWorkBtnDemo" onclick="Workdemo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Work Experience</label></a>
                      </div>
       <!--      <div class="add-more-block row"> -->
              <div class="col-md-6">
                <div class="form-group required">
                                        <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  class="borderStyle" id="project_type" name="project_type" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"  name="production_name" id="production_name" class="borderStyle">
                                      </div>
              
                <div class="form-group">
                                        <label>Link If Any <small></small></label>
                                        <input type="text" name="link" id="link" class="borderStyle" value="">
                                      </div>
              </div>
              <div class="col-md-6">
                <div class="form-group required">
                                        <label> Project Title</label>
                                          <input type="text" name="project_title" class="borderStyle" id="project_title">

                                      </div>
              
             
                <div class="form-group required">
                                          <label>Year </label>
                                          <input type="text" name="year" id="year" class="borderStyle">
                                      </div>
           
                <div class="form-group">
                                        <label>Additional Details </label>
                                        <input type="text" class="borderStyle" name="additional_info" id="additional_info">
                                      </div>
              </div>
       <!--     </div>  --> 
         <!--  </div> -->


          <?php if($value['project_type1']!='' || $value['production_name1']!='' || $value['link1']!='' || $value['project_title1']!='' ||$value['year1']!=''||$value['additional_info1']) { ?>


            <div class="video-box col-md-12 add-work-details-show" >
            
          <div class="add-more-block row">
              <div class="col-md-6">
                <div class="form-group required">
                                        <label>Project Type</label>
                                        <input type="text"  class="borderStyle" id="project_type1" name="project_type1" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label>Production Name</label>
                                    <input type="text" name="production_name1" id="production_name1"
                                     class="borderStyle">
                                      </div>
              
                <div class="form-group">
                                        <label>Link If Any <small></small></label>
                                        <input type="text" name="link1" id="link1"class="borderStyle">
                                      </div>
              </div>
              <div class="col-md-6">
                <div class="form-group required">
                                        <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                          <input type="text" name="project_title1"class="borderStyle">
                                      </div>
              
             
                <div class="form-group required">
                                          <label>Year </label>
                                          <input type="text" name="year1" id="year1" class="borderStyle" value="">
                                      </div>
           
                <div class="form-group">
                                        <label>Additional Details </label>
                                    <input type="text" name="additional_info1" id="additional_info1" class="borderStyle">
                                </div>
                          </div>
                      </div>  
                </div>
<?php } ?>

            <div class="video-box col-md-12 add-work-details" >
          
          <div class="add-more-block row">

              <div class="col-md-6">

                <div class="form-group required">
                                        <label>Project Type</label>
                                        <input type="text"  class="borderStyle" id="project_type1" name="project_type1" >
                                      </div>
            
             
                <div class="form-group required">
                                          <label>Production Name</label>
                                    <input type="text" name="production_name1"  id="production_name1"class="borderStyle">
                                      </div>
              
                <div class="form-group">
                                        <label>Link If Any <small></small></label>
                                        <input type="text" name="link1" id="link1"  class="borderStyle" value="">
                                      </div>
              </div>
              <div class="col-md-6">
                <div class="form-group required">
                                        <label> Project Title</label>
                                          <input type="text" name="project_title1" id="project_title1" class="borderStyle">
                                        <button class="closeBtn" type="button" onclick="buttondemo1()"> X </button>

                                      </div>
              
             
                <div class="form-group required">
                                          <label>Year </label>
                                          <input type="text" name="year1" id="year1" class="borderStyle" value="">
                                      </div>
           
                <div class="form-group">
                                        <label>Additional Details </label>
                                        <input class="borderStyle" name="additional_info1" id="additional_info1">


                                      </div>
                      </div>
                    </div>  
                  </div>
                </div>

          <!------code here-------------->
        </div>
        <div class="modal-footer">
          <button type="button" id="btnDirectorWorkexp" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<script type="text/javascript">
    function Workdemo()
{
   // alert(1);
   $('.add-work-details').show();
}
function buttondemo1()
  {
   $('.add-work-details').hide();
   document.getElementById("project_type1").value = '';
   document.getElementById("production_name1").value = '';
   document.getElementById("link1").value = '';
   document.getElementById("project_title1").value = '';
   document.getElementById("year1").value = '';
   document.getElementById("additional_info1").value = '';
  }

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
<!-----------------Awrad start here---------->


<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width: 565px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 100%;">
        <div class="modal-header">
            <h4 class="modal-title" style="margin: 0 auto;">Awards And Recognition</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->

          
          <div class="row">


         <!--  <div class="video-box col-md-12"> -->
            
            <div class="pull-right col-md-12">
                          <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo()" title="Add field"> <i class="fa fa-plus" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:#AD8C29;cursor: pointer;">Add More Awards/Recognitions</label></a>

                      </div>
         <!--    <div class="add-more-block row"> -->
              <div class="col-md-6">
               <div class="form-group required">
                                        <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="borderStyle" id="award_title" name="award_title">
                                      </div>
            
             
                <div class="form-group required">
                                        <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="award_year" id="award_year" class="borderStyle" >
                                      </div>
              
               
              </div>
              <div class="col-md-6">
                                        <div class="form-group required">
                                        <label> Award For  
                                        </label>&nbsp;&nbsp;&nbsp;
                                      
                                        <input type="text" name="award_for" id="award_for" class="borderStyle" value="">
                                        </div>
             
                                        <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input class="borderStyle"name="add_details" id="add_details">
                                        </div>
           
               
              </div>
             <!--  </div> -->

            <!--   </div>  -->
          
             <?php if($value['award_title1']!='' ||$value['award_year1']!='' ||$value['award_for1']!='' || $value['add_details1']!=''){ ?>
                    

              <div class="video-box col-md-12 view-award-section-show">
              <div class="add-more-block row">
            
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label>Award Title</label>
                                      <input type="text" class="borderStyle" id="award_title1"  name="award_title1">
                                      </div>
                                       
                                       <div class="form-group required">
                                        <label>Award Year <small></small></label>
                                        <input type="text" name="award_year1" id="award_year1" class="borderStyle">
                                      </div>
              
                                    
              </div>
              <div class="col-md-6">
               <div class="form-group required">
                                        <label> Award For</label>
                                        <input type="text" name="award_for1" id="award_for1" class="borderStyle">
                                        </div>
             
                                        <div class="form-group">
                                        <label>Additional Details </label>
                                        <input type="text" class="borderStyle" name="add_details1" id="add_details1">
                                      </div>
                                      </div>
                                      </div>
                                       </div>
            <?php } ?>

              <div class="video-box col-md-12 view-award-section">
              <div class="add-more-block row">
            
              <div class="col-md-6">
                                      <div class="form-group required">
                                      <label>Award Title</label>
                                      <input type="text"  class="borderStyle" id="award_title1"  name="award_title1">
                                      </div>
                                       
                                       <div class="form-group required">
                                        <label>Award Year <small></small></label>
                                        <input type="text" name="award_year1" id="award_year1" class="borderStyle">
                                      </div>
              
                                    
              </div>
              <div class="col-md-6">
               <div class="form-group required">
                                        <label> Award For</label>
                                        <input type="text" name="award_for1" id="award_for1" class="borderStyle" value="">

                                        <button class="closeBtn" type="button" onclick="buttondemo2()"> X </button>

                                        </div>
             
                                        <div class="form-group">
                                        <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="borderStyle" name="add_details1" id="add_details1"  >
                                      </div>
                                      </div>
                                      </div>
                                       </div>
               </div>
              
          <!------code here-------------->
        </div>
        <div class="modal-footer">
          <button type="button" id="btnDirectorAward" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <script type="text/javascript">
function demo()
{
   // alert(1);
   $('.view-award-section').show();
}

function buttondemo2()
 {
  $('.view-award-section').hide();
 
 
   document.getElementById("award_title1").value = '';
   document.getElementById("award_year1").value = '';
   document.getElementById("award_for1").value = '';
   document.getElementById("add_details1").value = '';
  }

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
                //alert(1);
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
<!-----------------Award end here------------>


<!-------social model start----->

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog" style="width: 565px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 100%;">
        <div class="modal-header">
            <h4 class="modal-title" style="margin: 0 auto;">Social Links</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->

          
 
              <div class="row">
                                  <div class="col-lg-6">
                                  <span class="wrapper facebook">
                                  <input type="text" class="borderStyle"  id="facebook"  name="facebook"   placeholder="facebook"/>
                                     </span>
                                     

                                      <span class="wrapper instagram">
                                      <input type="text" class="borderStyle"  id="instagram"  name="instagram"   placeholder="Instagram"/>
                                         </span>
                                  


                                    <span class="wrapper websitelink">
                                    <input type="text" class="borderStyle" id="website"  name="website"   placeholder="Website Link"/>
                                     </span>
                                     
                                    

                                  </div>
                                  <!-- *********** -->
                                   <div class="col-lg-6">
                                     
                                      
                                       <span class="wrapper twitter">

                                       <input type="text" class="borderStyle" id="twitter"  name="twitter"   placeholder="Twitter"/>
                                     </span>
                                 

                                      
                                       <span class="wrapper youtube">

                                       <input type="text" class="borderStyle" id="youtube"  name="youtube"   placeholder="YouTube"/>
                                     </span>
                               

                                        
                                       <span class="wrapper IMDB">

                                       <input type="text" class="borderStyle" id="imdb"  name="imdb"   placeholder="IMDB"/>
                                     </span>


                               </div>

                            </div>
          <!------code here-------------->
        </div>
        <div class="modal-footer">

          <button type="button" id="btnDirSocialLinks" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
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

<!-----------------social model end --->
<!-----------association model start ------------->
<div class="container">
  <!-- Modal -->
  
</div>
 <script type="text/javascript">

            function Assocdemo()
{
   // alert(1);
   $('.view-association-section').show();

 }
 function buttondemo()
 {
  $('.view-association-section').hide();
   document.getElementById("association_name1").value = '';
   document.getElementById("association_id1").value = '';
  }
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
        function showInfo()
{
  //alert(1);
 $(".scriptclass").show();
 $(".generalInfoshow").hide();
 
}  
//addsocial
 function showSocial()
{
  //alert(1);
 $(".socialInfo").show();
  $(".addsocial").hide();
 
} 
function showWork()
{
  //alert(1);
 $(".WorkExp").show();
  $(".Addwork").hide();
 
} 
//showAssoc 
function showAward()
{
  //alert(1);
 $(".AwardReg").show();
 $(".addAward").hide();
 // $(".generalInfoshow").hide();
 
} 
function showAssoc()
{
  //alert(1);
 $(".Association").show();
 $(".addAssoc").hide();
 // $(".generalInfoshow").hide();
 
} 
 function closeInfo()
{
  //alert(1);
 $(".scriptclass").hide();
 $(".generalInfoshow").show();
 
}
function closeWork()
{
  //alert(1);
 $(".WorkExp").hide();
 $(".Addwork").show();
 
}
function closeAward()
{
  //alert(1);
 $(".AwardReg").hide();
 $(".addAward").show();
 
}
function closeAssoc()
{
  //alert(1);
 $(".Association").hide();
 $(".addAssoc").show();
 
}
function closeSocial()
{
  //alert(1);
 $(".socialInfo").hide();
 $(".addsocial").show();
 
}

  
  </script>
<!-------------association end --------->

</html>