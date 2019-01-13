<style type="text/css">
.view_job_icons
{
  font-size: 14px;
    position: relative;
    top: 2px;
}  
.job-details-artist .job-ad-item.section {
    padding-bottom: 50px;
}
.job-details-artist .job-ad-item {
    border: 0;
    margin: 0 0 20px;
    padding: 35px 25px;
}
.job-ad-item {
    padding: 15px;
    overflow: hidden;
    position: relative;
    border: 1px solid #f3f3f3;
    margin: 18px 0;
    border-radius: 2px;
}
.section {
    background-color: #fff;
    border-radius: 4px;
    padding: 35px 25px;
    margin-bottom: 25px;
}
.job-ad-item .item-info {
    min-height: 0;
    overflow: hidden;
}
.item-image-box, .item-info {
    padding: 0;
    margin: 0;
}
.job-ad-item .item-image-box, .job-ad-item .ad-info {
    float: left;
}
.item-image-box {
    overflow: hidden;
}
.item-image-box, .item-info {
    padding: 0;
    margin: 0;
}
.job-ad-item .item-image-box, .job-ad-item .ad-info {
    float: left;
}
.item-image-box {
    overflow: hidden;
}
.item-image-box, .item-info {
    padding: 0;
    margin: 0;
}
.job-ad-item img {
    width: inherit;
}
.item-image img {
    width: 100%;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.job-details-artist .ad-info {
    margin-bottom: 25px;
}
.job-ad-item .ad-info {
    padding: 5px 25px;
}
.job-ad-item .item-image-box, .job-ad-item .ad-info {
    float: left;
}
.h5, .h5 {
    font-size: 1.0625rem;
    line-height: 1.4em;
    margin-bottom: 15px;
    font-size: medium;
    font-weight: bold !important;
}

</style>
<button class="ArtistJobView" style="background-color: green;color: white;border: green;margin-top: 34px ;cursor:pointer">
  <i class="material-icons" style="font-size: 10px;color: green;display: inline;color: white;">
arrow_back_ios
</i>Back</button>
<div class="job-details-artist" id="job-details-artist">
        <!-- job-ad-item -->
        
        <div class="job-details-info">
        

        <div class="card" style="    border: 1px solid #ccc;">
          <div class="card-body">
            <div class="row" style="    border-bottom: 1px solid lightgrey;
    padding: 6px;
    padding-bottom: 25px;">
              <div class="col-md-4">
                <!-- Job image starts-->
               <?php
               print_r($result);
               foreach ($result as $value) {?>
                  <div class="picture-container" style="position: relative;top: 17%;">
                                          <div class="picture text-center">
                                              <?php if($value['job_image']) { ?>
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['job_image']; ?>" class="picture-src" id="blah" title="" alt="" style="width: 213px;height: 91px; margin: -11px;margin-left: -65px;"/>
                                            <?php }?>

                                           
                                        </div>
                                         
                                      </div>
                 <!-- if($value['job_image']!=''){ ?> -->
<!-- 
                     <img class="img-responsive" src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['job_image'] ?>" style="width: 265px;height: 180px;"> -->

                  <!--   <?php } //else { ?> -->
                  <!-- <img class="img-responsive" src="<?php echo base_url()?>assets/images/postjob-default.png" style="width: 265px; height: 206px; background-color: #048d0494; border-radius: 30px;"> -->
               <?php //} 
                    //  }
                  ?>
                
              </div><!--Col 4 ends-->

              <div class="col-md-5">
                <!-- Job title starts-->
                <?php 

                 foreach ($result as $value) {
                  
                  $director_details = $this->db->select('official_name')->from('directors')->where('d_id',$value['diretor_id'])->get()->result_array();
                  
                  ?>

                  <h4 class="card-title"><b> <?php echo $value['job_title'];?></b></h4>
                  <p class="mb-1">
                     <i class="material-icons" style="font-size: 15px;">
person
</i>&nbsp;&nbsp;
                    <b>Posted By :</b> <?php echo $director_details[0]['official_name'];?></p>
                  <p class="mb-1"> 
                    <i class="material-icons view_job_icons">location_on</i>&nbsp;&nbsp;
                    <b>Location: </b><?php 
                    $RAR = explode(",", $value['location']);
                      foreach ($RAR as $rar) {
                      
                         echo $rar;  ?>          
                    <?php
                    }
                    ?>

                  </p>
                  
                <!-- Job title ends-->
              </div><!--Col 8 ends-->
               <div class="col-md-3">
                 <p class="mb-1">
                    <i class="material-icons" style="font-size: 15px;">
date_range
</i>&nbsp;&nbsp;
                   <b> Job Posted: </b><?php echo $value['job_post_date'];?></p>
                      <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
calendar_today
</i>&nbsp;&nbsp;<b>End Date: </b><?php echo $value['job_post_expired_date'];?></p>
               
              <!--  <button class="btn-applications" title="Pending" id="pending" value="pending" data-toggle="modal" style="
    background: linear-gradient(60deg,#ffeb3b,#ffeb3b);padding: 5px;margin: 0px;" data-target="#myModaljob"  onclick="myId('<?php echo $key['id']; ?>')" ><i class="fa fa-spinner"></i></button> -->
<?php
// $ARTIST_ID = $this->session->userdata('ARTIST_ID');
$job_id=$value['job_id'];
echo "jobid".$job_id;
 
        $data = $this->db->select('job_id')->from('job_application')->where('job_id',$job_id)->get()->result_array();
        // print_r($data);

        if($data)
        {
            $jobappid=$data[0]['job_id'];
        }
        else
        {
            $jobappid='';
        }

      

        // print_r($jobappid);
 // $director_details = $this->db->select('*')->from('job_application')->where('arstist_id',$value['diretor_id'])->get()->result_array();
 // print_r($director_details);exit;
if($value['job_id']==$jobappid){
 ?>

                 <button type="button" name ="submit" value="submit" readonly  style="background-color: #ff007c;padding: 8px;margin-right: 116px;">Already Applied</button><?php }
else if($jobappid==''){?>
   <button type="button" name ="submit" value="submit" readonly data-toggle="modal" data-target="#myModaljob" class="btn btn-default pull-right"  onclick="myjobdetailId('<?php echo $value['job_id']; ?>')" style="background-color: #ff007c;padding: 8px;margin-right: 116px;">Apply</button>
<?php }
                 ?>

              
              </div>

            </div><!--Row 1 ends-->
}
<!-- new -->

<div class="row" style="    padding: 17px;">
  <div class="col-sm-12">
 <!-- <div class="card">  -->
         <!-- <div class="card-body"> -->
      
                  <h5 class="sub-section-title" style="margin-left: -17px;"><b> Job Description</b></h5>
<!-- </div> -->
                   <div class="desciption">


     
                   <p style="text-align: center;">
                    <?php echo $value['job_desc'];?>.</p>
                 </div>
               

<!-- </div> -->
  </div>
</div>
<!--   <div class="col-sm-4">
       <h5><b>Company Information</b></h5>
              
                        <p class="mb-1">
                            Production House Name: 
                           <?php echo $value['production_house_name'];  ?>          
                         </p>
                      <p class="mb-1"> Producer Name: <?php  echo $value['producer_name'];?></p>

                       <p class="mb-1">
                          Director Name: 
                         <?php echo $value['director_name'];?>
                      </p>  
  </div> -->
<!-- </div> -->
<div class="row" style="    padding: 17px;">
  <div class="col-sm">
       <h5><b>Other Information</b></h5>
                  
                   
                       <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
check_box
</i>&nbsp;&nbsp;<b>Artist Category: </b><?php echo $value['artist_category'];?></p>
                        <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
chrome_reader_mode
</i>&nbsp;&nbsp; <b>Project Type:</b> <?php echo $value['project_type'];?></p>

                      <p class="mb-1">
                      <i class="material-icons"  style="font-size: 15px;">
wc
</i> &nbsp;&nbsp;<b>Gender: </b><?php echo $value['gender'];?></p>
                       <p class="mb-1">
                       <i class="material-icons"  style="font-size: 15px;">
av_timer
</i>&nbsp;&nbsp; <b>Age Group : </b><?php echo $value['age_from']." to ".$value['age_upto']." Years";?></p>
                     
                    
                       
                    <p class="mb-1"> 
                        <i class="material-icons" style="font-size: 15px;">
explicit
</i>&nbsp;&nbsp;<b>Languages Known:</b> <?php 
                    $Location = explode(",", $value['languages']);
                      foreach ($Location as $loc) {
                      
                         echo $loc;  ?>          
                    <?php
                    }
                    ?></p>
                  


  </div>
  <div class="col-sm">
    <h5><b>Shoot Information</b></h5>
    <!-- <br>
    <br> -->
   <p class="mb-1">
    <i class="material-icons" style="font-size: 15px;">
date_range
</i> &nbsp;&nbsp; <b>Shoot/Event Date: </b><?php echo $value['shoot_date'];  ?>          
                    </p>

                    <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
update
</i>&nbsp;&nbsp;
                   <b>Shoot Duration(hours):</b> <?php echo $value['shoot_duration'];  ?>
                    </p>
                    <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
work
</i>&nbsp;&nbsp;<b>Previous Experience Required?: </b><?php if($value['previous_experi']=="0"){
                    echo "No";
                   } elseif ($value['previous_experi']=="1") {
                     echo "Yes";
                   }?> </p>
                    <p class="mb-1">
                    <i class="material-icons" style="font-size: 15px;">
settings_voice
</i>&nbsp;&nbsp; <b>Audition Required or Not?: </b><?php if($value['audition_req']=="0"){
                    echo "No";
                   } elseif ($value['audition_req']=="1") {
                     echo "Yes";
                   }?></p>

<a href="assets/scripts/<?php echo  $value['script_name'] ?>" target="_blank" download>
                   <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
save
</i>&nbsp;&nbsp;<b>Script:</b>
<?php echo $value['script_name'];  ?>

                    </p>
     
 </a>


                          </div>



                          <div class="col-sm">
       <h5><b>Company Information</b></h5>
              
                        <p class="mb-1">
                            <i class="material-icons" style="font-size: 15px;">
work_outline
</i>&nbsp;&nbsp;
                           <b> Production House:</b> 
                           <?php echo $value['production_house_name'];  ?>          
                         </p>
                      <p class="mb-1">
                      <i class="material-icons" style="font-size: 15px;">
person
</i>&nbsp;&nbsp; <b>Producer Name: <?php  echo $value['producer_name'];?></p>

                       <p class="mb-1">
                        <i class="material-icons" style="font-size: 15px;">
perm_identity
</i>&nbsp;&nbsp;
                          Director Name: 
                         <?php echo $value['director_name'];?>
                      </p>  
  </div>
</div>

<!-- ends -->




           
                 </div><!--Card Body ends-->
        </div><!--Card ends-->
         
        </div><!-- job-details-info --> 
          <!-- The Modal -->
  <div class="modal" id="myModaljob" role="dialog">
    <div class="modal-dialog modal-sm" >
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-left: -45px;">
         <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Video URL</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
         <!---------code here------------>
    
        <div class="row">
          
        
         <div class="col-md-12">
   <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Video Url</label>
      <div class="col-md-6">
        <input type="varchar" id="video_url" value="" name="video_url" placeholder="Enter Video Url" class="form-control" >
      </div>
  </div>

 

</div>
<!-- <input type="text" id="ApproveInShortlist" value="" name="ApproveInShortlist" placeholder=""> -->

            <div class="col-md-12">
     <!--  <label for="staticEmail" class="col-md-5 col-form-label">Job Id</label> -->
            <input type="hidden" id="ApproveInShortlist" value="" name="ApproveInShortlist" style="margin-left: 16px;" placeholder="">
          </div>

</div>


         <!------------code end------------------>

        </div>
        <div class="modal-footer">
         
          <button type="button"  class="btn-default green-button" data-dismiss="modal"  onclick="ApplyJob(<?php echo $value['job_id']; ?>)">OK</button>          
          <button type="button" class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
          <?php
                    }
                    ?>
          
      </div>
<div class="showjobDetails" id="showjobDetails">
<script type="text/javascript">
 
  function myjobdetailId($value)
  {
//alert($value);
    document.getElementById("ApproveInShortlist").value = $value;
    document.getElementById("myModaljob").showModal();
   
  }

 function ApplyJob(jobId)
{



var status=true;
  var video_url=$('#video_url').val();
  // alert(video_url);
  

            if(video_url.trim() == '') { 
                  alert("Please Enter You Video Url..");
                  // $jobId.preventDefault();
                  status = false;
                }
                       
               // return status;
                //console.log("validation status is....",status);
              else{

var id=jobId;

// var video_url=video_url;
  var form = $('form')[0];
          var form_data = new FormData(form);

            
                  form_data.append("video_url", $('#video_url').val());  

                  // alert(form_data.append("video_url", $('#video_url').val()));
                  console.log($('#video_url').val());
  var base_url="<?php echo base_url('dashboard/Apply_job/');?>";

   $.ajax({
                    url: base_url+id,
                    type: 'POST',              
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                  })
                .done(function (res) {
                  console.log(res);
                  // alert(res);
                if(res==1){
                    alert("Applied successfully.");
    
                  }

                  else if(res==0){
                     alert("You Have Already Applied.");
                    // $("#error-box").show();            
                    // $("#error-box").html(res.reason);
                  }
                  else{
                    alert("Alredy Applied");
                    console.log("Fail");

                  }

                 // $("#workExperienceView").show();
                });


         
   // $.ajax({

   //      url: base_url+id,
   //      data:form_data,
   //      type:POST,
   //      success:function(response){
   //        //alert(response);
   //        //console.log("sucess is",response);
   //        if (response=="false")
   //        {
   //           // console.log("reslu is.......",data);
   //                  alert("Alredy Appllied....!!!");
   //                  window.location.href="<?php //echo base_url('dashboard')?>";
   //                  }
   //                  else
   //                  {
   //                        alert('Job Appllied Sucessfully...!!!');
   //                        window.location.href="<?php //echo base_url('dashboard')?>";
                   
   //                  }
   //        }
         // console.log("result is",data);
       //if(data=='0')
       //{
            

          //alert('Alredy Appllied ');
       // }
       // else
        //{
          
          //  alert('Job Appllied Sucessfully...!!!');
            
       // }
         
           
           // $("#showjobDetails").html(response);

          
        
   // });
    $('#postedJobsList').hide();
     $('#showApplications').hide();
  }
}
$(".ArtistJobView").click(function(e)
{
  // alert(1);
   $("#JobApplicationForm").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/JobApplication')?>',
        success:function(response){
           
           $("#JobApplicationForm").html(response);
            $(".JobApplication").addClass("active"); 
            $(".commingSoon").removeClass("active"); 
                $(".artistsettings").removeClass("active");
                $(".AppliedJobs").removeClass("active");
                 $(".dashboardCards").removeClass("active");
                


           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
     $("#showArtistEditProfileForm").hide();
      $("#artistsettingsView").hide();
      $("#artistgetpreviledgeView").hide();
    $("#showjobDetailsartist").show();
      $("#ArtistJobView").hide();
      $("#ArtistAppView").hide();
     $("#ArtistTokensData").hide();
     $("#Applied_JobsForm").hide();
     $("#commingSoonDiv").hide();
      


});
</script>