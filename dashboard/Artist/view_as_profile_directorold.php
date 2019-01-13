<style type="text/css">
  .genralinfoicon{
    position: relative;
    top: 8px;
  }
  .col-form-label{
    font-weight: 700;
    color: black;
  }

</style>


  <div class="row">
      <?php 

                      foreach ($result as $value) { 
//print_r($result);
//                       print_r($result);
                        ?>
                        <!--col-lg-4 starts profile general info tab starts -->
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
<p class="mb-1">
    <i class="material-icons genralinfoicon">email</i>
    <?php echo $value['email_id'];
    ?><!-- 
</p>
<p class="mb-1"> -->
<i class="material-icons genralinfoicon">phone</i>
<?php  echo $value['contact_no'];?>
 </p>   
<p class="mb-1">
  <i class="material-icons genralinfoicon" >fiber_pin</i>
<?php echo $value['pin_code']; ?>  
<!-- </p>
<p class="mb-1"> -->
   <i class="material-icons genralinfoicon">perm_phone_msg</i>
  <?php echo $value['whatsup_no'];?>
</p>
<p class="mb-1">
   <i class="material-icons genralinfoicon">person</i>
  <?php echo $value['gender'];?>
<!-- </p>
<p class="mb-1"> -->
 <i class="material-icons genralinfoicon">date_range</i>
<?php
echo $value['date_of_birth'];?>            
  </p>


      
    <!-- //This is some text within a card body. -->
  
    </div>
    <!-- col-lg-8 ends -->
          </div><!--row ends-->
        </div><!--card body ends-->
      </div><!--card ends-->
    </div>
    </div><!--row ends-->
 

  <!-- row starts -->
 

  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
           <!-- col-lg-4 of physical attributes starts -->

    <div class="col-lg-4">
    
<div class="addphysical">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
            <h5 class="sub-section-title" data-toggle="collapse" href="#collapsephysical" aria-expanded="false" style="padding: 5px 0 0 10px;">Physical Attributes</h5>
            </div>
          <!-- accordion starts -->
          
<div id="accordion-physical" role="tablist">
            <div class="card-collapse">
             <!--  <div class="card-header" role="tab" id="headingPhisical">
                <h5 class="mb-0" data-toggle="collapse" href="#collapsephysical" aria-expanded="true" aria-controls="collapsephysical">
                  <a  class="">
                    Physical Attributes
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapsephysical" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-education" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                  <p><span class="txtred">Weight: </span>
                    <?php echo $value['weight'];?>
                </p>
                <p><span class="txtred">Height:</span>

                    <?php echo $value['height'];?>
                </p>
                 <p><span class="txtred">Chest:</span>

                    <?php echo $value['chest'];?>
                </p>

                 <p><span class="txtred">Waist:</span>

                    <?php echo $value['waist'];
               ?>
                </p>

                 <p><span class="txtred">Body Type:</span>

                    <?php echo $value['body_type'];?>
                </p>
                 
              </div>
              <div class="col-lg-6 text-left">
                 <p><span class="txtred">Ethinicity: </span>
                    <?php echo $value['ethinicity'];?>
                </p>
                 <p><span class="txtred">Hair Type: </span>
                    <?php echo $value['hair_type'];?> 
                </p> 
               
                 <p><span class="txtred">Hair Length: </span>
                    <?php echo $value['hair_length'];?> 
                </p> 
                 <p><span class="txtred">Eye Color: </span>
                    <?php echo $value['eye_color'];?> 
                </p>

                 <p><span class="txtred">Skin Tone: </span>
                    <?php echo $value['skin_tone'];?> 
                </p> 
                 <p><span class="txtred">Hair Color: </span>
                    <?php echo $value['hair_color']; ?> 
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

          
</div>
</div>
<!-- col-lg-4 of physical attributes ends -->
<!-- col-lg-8 of About Me Starts -->


<div class=col-lg-8>
 
<div class="aboutme profile-custom-panel">
  <div class="sub-sections" style="height: 33px;">
            
                   <h5 class="sub-section-title" data-toggle="collapse" href="#collapseaboutme" aria-expanded="true" style="padding: 5px 0 0 10px;">About Me</h5>
              
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
           
            </div>
          <!-- accordion starts -->
          
<div id="accordion-aboutme" role="tablist">
            <div class="card-collapse">
              <!-- <div class="card-header" role="tab" id="headingaboutme">
                <h5 class="mb-0"  aria-controls="collapseaboutme">
                  <a  class="">
                    About Me
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapseaboutme" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-aboutme" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                   
                 <p>
                    <?php echo $value['about_info']; ?> 
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

          
</div>
</div>
<!-- col-lg-8 of About Me Ends -->

        </div><!--Row ends-->


        <div class="row">
        <!-- col-lg-4 starts of talent-->
 <div class="col-lg-4">
    
<div class="talent">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
           
             
                   <h5 class="sub-section-title" data-toggle="collapse" href="#collapsetalent" aria-expanded="true" style="padding: 5px 0 0 10px;">Talent</h5>
            
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
          
            </div>
          <!-- accordion starts -->
          
<div id="accordion-talent" role="tablist">
            <div class="card-collapse">
              <!-- <div class="card-header" role="tab" id="headingtalent">
                <h5 class="mb-0"  aria-controls="collapse">
                  <a  class="">
                   Talent
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapsetalent" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-talent" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-6 text-left">
                   
                 <p>
  <?php
// $talentresult= $value['talent'];
// $talentsubresult=$value['sub_talent'];

// $talentresarray=explode(',', $talentresult);

//   $subtalentresarray=explode(',', $talentsubresult);
    // print_r($subtalentarray);
// $talentstring="";
  // print_r($talentresarray);
  //     foreach($talentresarray as $resultarray) {
  //      // print_r($resultarray);exit;
//$talentarr=$talent;
// print_r($talentresultarray);exit;
//      print_r($talentarr);exit;
// $talentresdata['result'] = $this->db->select('*')->from('talent')->where('talent_id',$resultarray)->get()->result_array();
// print_r($talentresdata);exit;
//   foreach ($talentresdata['result'] as $arr) {
//     # code...

                 //  $finalarr=$talentstring.'/'.$arr['talent_name'];
                   //$finalarr=rtrim($finalarr);
                  // $talentstring=$talentstring.'/'.$finalarr;
//                   echo $arr;
//       }
  
// }
// foreach($subtalentarray as $subtalentarr) {
// $subtalentarr=$subtalentarr;
//      //echo $talentarr[1];
// $sub['result'] = $this->db->select('sub_talent_name')->from('sub_talent')->where('talent_id',$subtalentarr)->get()->result_array();
// // print_r($sub);exit;
//   foreach ($sub['result'] as $arr1) {
//     # code...

//                  //  $finalarr=$talentstring.'/'.$arr['talent_name'];
//                    //$finalarr=rtrim($finalarr);
//                   // $talentstring=$talentstring.'/'.$finalarr;
//                   echo $arr1['sub_talent_name'];
//       }
  
// }?>


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
                   $talentstring=$talentstring.' '.$arr['talent_name'];
      }
}
// print_r($)
$tempStr = substr($talentstring,1);
                  echo $tempStr;


     
  ?>
  


                    <?php echo $value['about_info']; ?> 
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

          
</div>
</div>
<!-- col-lg-4 ends of talent-->
<!-- col-lg-8 strats of Headshots-->
<div class="col-lg-8">

<div class="Headshots">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
            
              
                   <h5 class="sub-section-title" data-toggle="collapse" href="#collapseheadshots" aria-expanded="true" style="padding: 5px 0 0 10px;">Headshots</h5>
            
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
           
            </div>
          <!-- accordion starts -->
          
<div id="accordion-haedshots" role="tablist">
            <div class="card-collapse">
              <!-- <div class="card-header" role="tab" id="headingheadshots">
                <h5 class="mb-0"  aria-controls="collapse">
                  <a  class="">
                   Talent
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapseheadshots" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-haedshots" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                   
                 <p>
                     <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['head_shot']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
    <!-- <h5 class="text-center">Headshot Picture</h5> -->
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['left_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['right_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
   <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['full_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
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

          
</div>
</div>
<!-- col-lg-8 ends of Headshots -->
          
        </div><!--row ends-->
<div class="row"> 
<!-- col-lg-4 starts of ineterst -->
<div class="col-lg-4">
     
<div class="Interest" >
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
            
             
                   <h5 class="sub-section-title" data-toggle="collapse" href="#collapseinterest" aria-expanded="true" style="padding: 5px 0 0 10px;">Interest</h5>
           
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            
            </div>
          <!-- accordion starts -->
          
<div id="accordion-interest" role="tablist">
            <div class="card-collapse">
              <!-- <div class="card-header" role="tab" id="headinginterest">
                <h5 class="mb-0" data-toggle="collapse" href="#collapseinterest" aria-expanded="true" aria-controls="collapse">
                  <a  class="">
                   Interest
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapseinterest" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion-interest" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                 
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
    <h5><span class="badge">
    <?php echo $arr['interests_name'];?>
</span></h5>
<?php
                   //$finalarr=$talentstring.'/'.$arr['talent_name'];
                   //$finalarr=rtrim($finalarr);
                  // $talentstring=$talentstring.'/'.$finalarr;
                  //echo rtrim($finalarr,'/');
      }
  


  ?>
 


<?php  } ?>
                 
                
              </div>
            </div>

          </div>
                    <!-- awards 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
         
            
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

          
</div>

</div>
<!-- col-lg-4 ends of ineterst -->
<!-- col-lg-8 starts of videos -->
<div class="col-lg-8">

<div class="Uploaded_videos">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
                <h5 class="sub-section-title" data-toggle="collapse" href="#collapse_Uploaded_videos" aria-expanded="true" style="padding: 5px 0 0 10px;">Uploaded Videos</h5>
             
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
          
            </div>
          <!-- accordion starts -->
          
<div id="accordion-Uploaded_videos" role="tablist">
            <div class="card-collapse">
<!--               <div class="card-header" role="tab" id="heading_Uploaded_videos">
                <h5 class="mb-0"  aria-controls="collapse">
                  <a  class="">
                   Uploaded_videos
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapse_Uploaded_videos" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_Uploaded_videos" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
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
                    <!-- awards 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
         
            
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

          
</div>
</div>

<!-- col-lg-8 endss of videos -->

</div><!-- row ends-->
<div class="row">
<div class="col-lg-4">
    <div class="sub-sections profile-custom-panel" style="height: 33px;">
                <h5 class="sub-section-title" data-toggle="collapse" href="#collapse_Social_Links" aria-expanded="true" style="padding: 5px 0 0 10px;">Social Links</h5>
           
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            
            </div>
          <!-- accordion starts -->
          
<div id="accordion_Social_Linkss" role="tablist">
            <div class="card-collapse">
             <!--  <div class="card-header" role="tab" id="heading_Social_Links">
                <h5 class="mb-0" data-toggle="collapse" href="#collapse_Social_Links" aria-expanded="true" aria-controls="collapse">
                  <a  class="">
                   Social Links
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapse_Social_Links" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_Social_Links" style="">
                <div class="card-body">
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
                </div>
              </div>
            </div>
         
            
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



</div><!-- col-lg4 -->
<div class="col-lg-8">

<div class="Scripts">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
                 <h5 class="sub-section-title"  data-toggle="collapse" href="#collapse_Scripts" aria-expanded="true" style="padding: 5px 0 0 10px;">Scripts</h5>
              
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            
            </div>
          <!-- accordion starts -->
          
<div id="accordion_Scripts" role="tablist">
            <div class="card-collapse">
             <!--  <div class="card-header" role="tab" id="heading_Scripts">
                <h5 class="mb-0" aria-controls="collapse">
                  <a  class="">
                   Scripts
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapse_Scripts" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_Scripts" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
                      <div class="col-lg-12">
                <div class="row">
                 <div class="col-lg-12 text-left">
                   
                 <p>
                  <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['scripts']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>

                  <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['scripts1']; ?>" class="picture-src" id="blah" title="" alt="" style="height: 100px;margin: 0 auto;border-radius: 10%;"/>
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

          
</div>

</div><!-- col-lg-8 -->
 </div><!-- row -->

<div class="row">
    <div class="col-lg-4">
    
  </div>
<!-- col-lg-8 audio starts -->
<div class="col-lg-8">

<div class="Audio">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
                 <h5 class="sub-section-title"data-toggle="collapse" href="#collapse_Audio" aria-expanded="true" style="padding: 5px 0 0 10px;">Audio</h5>
              
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            
            </div>
          <!-- accordion starts -->
          
<div id="accordion_Scripts" role="tablist">
            <div class="card-collapse">
              <!-- <div class="card-header" role="tab" id="heading_Audio">
                <h5 class="mb-0"  aria-controls="collapse">
                  <a  class="">
                   Audio
                    <i class="material-icons float-right">add</i>
                  </a>
                </h5>
              </div> -->
              <div id="collapse_Audio" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_Audio" style="">
                <div class="card-body">
                  <div class="row">
                    <!-- awards body starts-->
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
                    <!-- awards 1 body ends-->
                  </div>
                </div>
              </div>
            </div>
         
            
          </div>
          


          <!-- accordion ends -->

<script>
var acc = document.getElementsByClassName("Audiofile");
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
</div>
<!-- col-lg-8 audio endss -->

</div><!--row ends-->

<div class="row"> 
<div class="col-lg-4">
  
</div><!-- col-lg-4 education ends -->
<div class="col-lg-8">

<div class="addEdu">
  <div class="sub-sections profile-custom-panel" style="height: 33px;">
                   <h5 class="sub-section-title"  style="padding: 5px 0 0 10px;">Education</h5>
              
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
           
            </div>
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
          
          <?php $i++; } ?>

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

          
</div>
<?php }?>  
</div> <!-- col-lg-8 ends -->
</div><!-- row endzs -->

<div class="row">
<div class="col-lg-4">
  

</div><!-- col-lg-4 ends -->  
<div class="col-lg-8">
  
<div class="addAward">
  <div class="sub-sections" style="height: 33px;">
            <div class="row">
              <div class="col-lg-10">
                   <h5 class="sub-section-title" style="padding: 5px 0 0 10px;">Experince</h5>
              </div>
             <!--  <div class="col-lg-2">
           
    <i class="fa fa-edit" data-toggle="modal" onclick="showAward()" style="font-size:24px; padding: 5px 10px 0 0;float: right;"></i>
             </div> -->
            </div>
            </div>
          <!-- accordion starts -->
          <?php
           $i=1;
                      $resultExp = $this->db->select('*')->from('artist_exp')->get()->result_array();
                                      //print_r($resultExp);exit;
                                    foreach ($resultExp as $Exp) {  ?>
<div id="accordion-association" role="tablist">
            <div class="card-collapse">
              <div class="card-header" role="tab" id="headingTwo<?php echo $Exp['exp_id']; ?>">
                <h5 class="mb-0" data-toggle="collapse" href="#collapsethree<?php echo $Exp['exp_id']; ?>" aria-expanded="true" aria-controls="collapsethree">
                  <a  class="">
                    Experince  <?php echo $i; ?>
                    <i class="material-icons float-right">add</i>
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

</div> <!-- col-lg-8 ends -->

</div><!-- row ends -->
