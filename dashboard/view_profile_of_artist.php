<style type="text/css">
  .col-form-label{
    font-weight: 400;
    color: black;
  }

  
</style>
<style type="text/css">
* {
    box-sizing: border-box;
}

.zoom {
   /* padding:50px;*/
   
    transition: transform .2s;
     overflow: hidden;

    
    
}

.zoom:hover {
    -ms-transform: scale(1.7); /* IE 9 */
    -webkit-transform: scale(1.7); /* Safari 3-8 */
    transform: scale(1.7); 

    /*width: 2000px;
    height: 1000px;*/
}
</style>
  <div class="row">
      <?php 

                      foreach ($result as $value) { 

                        //print_r($result);
                        ?>
<!-- row12 div -->
<div class="col-md-12 ">
      <div class="card mb-0">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
      
     
          <div class="text-center">
              <?php if($value['profile_pic']) {
               ?>
              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
            <?php }else { ?>
                
                 <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="blah" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
            <?php } ?>
            <h3>
              <?php echo $value['name']; ?>
               </h3>
               <small>
              <?php echo $value['city']; ?>
              ,
              <?php echo $value['e_country'];?>

              </small>

            </div>


 

    </div>
<!-- col-lg-4 starts profile general info tab ends -->


<!-- col-lg-8 starts -->
    <div class="col-lg-8">
     
<h5>
  <?php
$result1= $value['talent'];
$talentarray=explode(',', $result1);
     //print_r($talentarray);
$talentstring="";
$tempStr = "";
      foreach($talentarray as $talent) {
$talentarr=$talent;
     //echo $talentarr[1];
$data['result'] = $this->db->select('talent_name')->from('talent')->where('talent_id',$talentarr)->get()->result_array();
//print_r($data);
  foreach ($data['result'] as $arr) {
    # code...
    //print_r($arr);
                   $talentstring=$talentstring.'/ '.$arr['talent_name'];
      }
}
// print_r($)
$tempStr = substr($talentstring,1);
                  echo $tempStr;


     
  ?>
  
</h5>
<div class="row">
    <div class="col">
      <i class="material-icons">email</i>
    <?php echo $value['email_id'];
    ?>
    </div>
    <div class="col">
      <i class="material-icons">phone</i>
      <?php  echo $value['contact_no'];?>
    </div>
    </div>
    <div class="row">
      <div class="col">
        <i class="material-icons">fiber_pin</i>
        <?php echo $value['pin_code']; ?>
      </div>
      <div class="col">
       <i class="material-icons">perm_phone_msg</i>
      <?php echo $value['whatsup_no'];?>      
      </div>
    </div>
    <div class="row">
      <div class="col">
        <i class="material-icons">person</i>
        <?php echo $value['gender'];?>
      </div>
       <div class="col">
        <i class="material-icons">date_range</i>
        <?php echo $value['date_of_birth'];?>       
      </div>
    </div>


      
    <!-- //This is some text within a card body. -->
  
    </div>
    <!-- col-lg-8 ends -->
          </div><!--row ends-->
        </div><!--card body ends-->
      </div><!--card ends-->
    </div>


<!-- row12 div ends -->
<!-- col-lg-8 starts -->
   
  </div>
  <!-- row ends -->



  <!-- row starts -->
  <div class="row">
    <!-- col-lg-4 starts -->
    <div class="col-lg-4">
     <div class="card">
  <div class="card-body">
 <h5 class="sub-section-title"style="padding-top: 5px;" >Physical Attribute</h5>
<div class="row">
      <div class="col">
        <label for="Weight" class="col-form-label">Weight</label>
        <?php echo $value['weight'];?>
      </div>
       <div class="col">
        <label for="Weight" class="col-form-label">Height</label>
    <?php echo $value['height'];?>       
      </div>
    </div>
    <div class="row">
      <div class="col">
     <label for="Weight" class="col-form-label">Chest</label>
    <?php echo $value['chest'];?>
      </div>
       <div class="col">
        
  <label for="Weight" class="col-form-label">Waist</label>
    <?php echo $value['waist'];
    ?>     
      </div>
    </div>
    <div class="row">
      <div class="col">
     <label for="Weight" class="col-form-label">Body Type</label>
    <?php echo $value['body_type'];
    ?>
      </div>
       <div class="col">
        
  <label for="Weight" class="col-form-label">Ethinicity</label>
    <?php echo $value['ethinicity'];
    ?>
      </div>
    </div>

    <div class="row">
      <div class="col">
      <label for="Weight" class="col-form-label">Hair Type</label>
    <?php echo $value['hair_type'];
    ?>
      </div>
       <div class="col">
      <label for="Weight" class="col-form-label">Skin Tone</label>
    <?php echo $value['skin_tone'];
    ?>   
   
      </div>
    </div>

    <div class="row">
      <div class="col">
      <label for="Weight" class="col-form-label">Eye Color</label>
    <?php echo $value['eye_color'];
    ?>
      </div>
       <div class="col">
       <label for="Weight" class="col-form-label">Hair Color</label>
    <?php echo $value['hair_color'];
    ?>

   
      </div>
    </div>

<div class="row">
  <div class="col">
      <label for="Weight" class="col-form-label">Hair Length</label>
    <?php echo $value['hair_length'];
    ?>
  </div>
</div>
  </div><!-- card-body ends -->
</div><!-- card ends -->
<div class="card">
  <div class="card-body ">
    <h5 class="sub-section-title"style="padding-top: 5px;" >Interest</h5>
     <div class="row">
                 <div class="col">
                 
 <?php
$resultinterest= $value['interests'];
//print_r($resultinterest);
$resultinterest1=explode(',', $resultinterest);
     //print_r($resultinterest1);
$resultstring="";
      foreach($resultinterest1 as $interstres) {

    //print_r($interstres);exit;
$interest['result'] = $this->db->select('interests_name')->from('interests')->where('interests_id',$interstres)->get()->result_array();
//print_r($interest['result']);exit;

  foreach ($interest['result'] as $arr) {
    # code...
   // echo "<span class='badge'>$arr['interests_name']</span>";
    ?>
    <div class="col-form-label">
      <?php echo $arr['interests_name'];?>
    </div>
    <!-- <h5><span class="badge">
    <?php echo $arr['interests_name'];?>
</span></h5> -->
<?php
                   //$finalarr=$talentstring.'/'.$arr['talent_name'];
                   //$finalarr=rtrim($finalarr);
                  // $talentstring=$talentstring.'/'.$finalarr;
                  //echo rtrim($finalarr,'/');
      }
  


  ?>
 


<?php  } ?>
                 
                
              </div>
            </div><!-- intrest row ends -->
  </div><!-- interrest card bosy ends -->
</div><!-- interrest card ends -->
<div class="card">
  <div class="card-body">
    <h5 class="sub-section-title"style="padding-top: 5px;" >Social Links</h5>
    <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                    <a href="<?php echo $value['facebook_url'];?>" target="_blank">
          <span class="wrapper facebook" style="
    color: #3B5998;
">
     </span></a>
                                     
        <a href="<?php echo $value['instagram_url'];?>" target="_blank">
         
                                       <span class="wrapper instagram" style="
    color: #cd486b;
">
                   
                                     </span></a>
                    <a href="<?php echo $value['website_url'];?>" target="_blank">
                                       <span class="wrapper websitelink">

                                     </span></a>
                   
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

                
              </div>
            </div>
          </div>
                    <!-- awards 1 body ends-->
                  </div>
  </div><!-- social links card bosy ends -->
</div><!-- social links  card ends -->
</div><!-- col-lg-4 ends -->
    

<!-- col-lg-8 starts -->

    <div class="col-lg-8">
      <div class="card">
  <div class="card-body">
   <!--  This is some text within a card body. -->
   <h5 class="sub-section-title"style="padding-top: 5px;" >About Me</h5>
   <?php echo $value['about_info']?>
  </div>
</div>
<div class="card">
  <div class="card-body">
   <!--  This is some text within a card body. -->
   <h5 class="sub-section-title"style="padding-top: 5px;" >Headshots</h5>

   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['head_shot']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height:100px;width:100px;margin: 0 auto;border-radius: 10%;"/>
    <!-- <h5 class="text-center">Headshot Picture</h5> -->
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['left_pic']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height: 100px;width:100px;margin: 0 auto;border-radius: 10%;"/>
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['right_pic']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height: 100px;width:100px;margin: 0 auto;border-radius: 10%;"/>
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['full_pic']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height: 100px;width:100px;margin: 0 auto;border-radius: 10%;"/>

  
  </div>
</div>
<div class="card">
  <div class="card-body">
      <h5 class="sub-section-title"style="padding-top: 5px;" >Scripts</h5>
    <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                   
                 <p>
                  <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['scripts']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height: 100px;width:100px;margin: 0 auto;border-radius: 10%;"/>

                  <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['scripts1']; ?>" class="picture-src zoom" id="blah" title="" alt="" style="height: 100px;width:100px;margin: 0 auto;border-radius: 10%;"/>
                </p> 
                
              </div>
            </div>
          </div>
                    <!-- awards 1 body ends-->
                  </div>
  </div><!-- card-body scripts ends -->
</div><!-- card scripts ends -->
<div class="card">
  <div class="card-body">
   <!--  This is some text within a card body. -->
   <h5 class="sub-section-title"style="padding-top: 5px;" >Uploaded Videos</h5>
   <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                   
                 <p>
                   <a href="<?php echo $value['video_url'];?>" target="_blank"><?php if($value['video_url']){  ?>
                    <label class="txtgreen" id="script-name"> <?php echo $value['video_url'];?> </label></a>

<?php } else{ ?> 
                     <label class="txtgreen" id="script-name">  </label>
                     <?php } ?>
                  
                </p>
                <p>
                   <a href="<?php echo $value['video_url1'];?>" target="_blank"><?php if($value['video_url1']){  ?>
                    <label class="txtgreen" id="script-name"> <?php echo $value['video_url1'];?> </label></a>

<?php } else{ ?> 
                     <label class="txtgreen" id="script-name">  </label>
                     <?php } ?>
                  
                </p> 
                
              </div>
            </div>
          </div>
  </div><!-- card-vody videos emds -->
</div><!-- card videos ends -->
<div class="card">
  <div class="card-body">
      <h5 class="sub-section-title"style="padding-top: 5px;" >Audios</h5>
     <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                   
                 <audio controls>
                 <!-- <?php //echo "assets/images/rehan.mp3"?>
                  --> 
                  <source src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['audio'];?>" type="audio/ogg">
                 </audio> 
                
              </div>
            </div>
          </div>
  </div><!-- audio card body ends -->
</div><!-- audio card ends -->
<?php }?>
<div class="card">
  <div class="card-body">
    <div class="addEdu">
  <!-- <div class="sub-sections profile-custom-panel" style="height: 33px;"> -->
               <h5 class="sub-section-title"style="padding-top: 5px;" >Education</h5>
               <!--     <h5 class="sub-section-title"  style="padding: 5px 0 0 10px;">Education</h5>
               -->
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
           
           <!--  </div> -->
          <!-- accordion starts -->
          <?php
           $i=1;
                      $resultEdu = $this->db->select('*')->from('artist_edu')->get()->result_array();
                                      // print_r($resultEdu);exit;
                                    foreach ($resultEdu as $Edu) {  ?>
<div id="accordion-education" role="tablist">
            <div class="card-collapse">
              <div class="card-header profile-custom-panel" role="tab" id="headingTwo<?php echo $Edu['edu_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapseFour<?php echo $Edu['edu_id']; ?>" aria-expanded="false" aria-controls="collapseFour">
                  <a  class="">
                    Education  <?php echo $i; ?>
                    
                  </a>
                </h5>
              </div>
              <div id="collapseFour<?php echo $Edu['edu_id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $Edu['edu_id']; ?>" data-parent="#accordion-education" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">

                  <p><span class="txtred">School/College/Company: </span>
                    <?php echo $Edu['school_clg_company'];?>
                </p>
                <p><span class="txtred">Course Completed:</span>

                    <?php echo $Edu['course_completed'];?>
                </p>
                 <p><span class="txtred">Year Of Completion:</span>

                    <?php echo $Edu['year_of_completion'];?>
                </p>
                
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">City: </span>
                    <?php echo $Edu['e_city'];?>
                </p>
                 <p><span class="txtred">Country: </span>
                    <?php echo $Edu['e_country'];?> 
                </p> 
               
              </div>
            </div>
          </div>
                    <!-- awards 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
          
         
  </div><!-- education card body ends -->
  <?php $i++; } ?>
</div><!-- education card ends -->


<div class="card">
  <div class="card-body">
      <h5 class="sub-section-title"style="padding-top: 5px;" >Experience</h5>

<div class="addAward">
  <!-- <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-10">
                   <h5 class="sub-section-title" style="padding: 5px 0 0 10px;">Experince</h5>
              </div> -->
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
          <!--   </div>
            </div> -->
          <!-- accordion starts -->
          <?php
           $i=1;
                      $resultExp = $this->db->select('*')->from('artist_exp')->get()->result_array();
                                      //print_r($resultExp);exit;
                                    foreach ($resultExp as $Exp) {  ?>
<div id="accordion-association" role="tablist">
            <div class="card-collapse">
              <div class="card-header profile-custom-panel" role="tab" id="headingTwo<?php echo $Exp['exp_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapsethree<?php echo $Exp['exp_id']; ?>" aria-expanded="false" aria-controls="collapsethree">
                  <a  class="">
                    Experince  <?php echo $i; ?>
                 <!--    <i class="material-icons float-right">add</i> -->
                  </a>
                </h5>
              </div>
              <div id="collapsethree<?php echo $Exp['exp_id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $Exp['exp_id']; ?>" data-parent="#accordion-association" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">


 
                  <p><span class="txtred">Skill Type: </span>
                    <?php echo $Exp['skill_type'];?>
                </p>
                <p><span class="txtred">Sub Skill Type:</span>

                    <?php echo $Exp['sub_skill_type'];?>
                </p>
                 <p><span class="txtred">Year:</span>

                    <?php echo $Exp['year'];?>
                </p>
                
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Project Title: </span>
                    <?php echo $Exp['project_title'];?>
                </p>
                 <p><span class="txtred">Role In Project: </span>
                    <?php echo $Exp['role_in_project'];?> 
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
    
  </div> <!-- experience card body ends -->
</div><!-- experience card ends -->
    </div><!-- col-lg-8 ends -->
    

  </div>
<!-- row ends -->



