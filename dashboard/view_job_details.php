<!--job post-->

<style type="text/css">
.view_job_icons
{
  font-size: 14px;
    position: relative;
    top: 2px;
}  
.job-details .job-ad-item.section {
    padding-bottom: 50px;
}
.job-details .job-ad-item {
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
.job-details .ad-info {
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
<div class="col-md-12">
 <button class="backBtnViewJob" style="background-color: green;color: white;border: green;"><i class="material-icons" style="
   font-size: 20px;
   color: green;
   display: inline;
   /* padding-bottom: 54px!important; */
   /* padding-top: 104px; */
   font-size: small;
   color: white;
   ">
arrow_back_ios
</i>Back</button>
  
<!-- <i class="material-icons">
chevron_left
</i>
Back -->
</div>
<div class="job-details">
        <!-- job-ad-item -->
        
        <div class="job-details-info">
        

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <!-- Job image starts-->
               <?php
               foreach ($result as $value) {
                if($value['job_image']!=''){ ?>

                    <img class="img-responsive" src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['job_image'] ?>" style="width: 265px;height: 180px;">

                   <?php } else { ?>
                    <img class="img-responsive" src="<?php echo base_url()?>assets/images/postjob-default.png" style="width: 265px; height: 206px; background-color: #048d0494; border-radius: 30px;">
                  <?php } 
                      }
                  ?>
                <!-- Job image ends-->
              </div><!--Col 4 ends-->

              <div class="col-md-8">
                <!-- Job title starts-->
                <?php 

                 foreach ($result as $value) {
                  
                  $director_details = $this->db->select('official_name')->from('directors')->where('d_id',$value['diretor_id'])->get()->result_array();
                  ?>
                  <h4 class="card-title"><b> <?php echo $value['job_title'];?></b></h4>
                  <p class="mb-1">Posted By : <?php echo $director_details[0]['official_name'];?></p>
                  <p class="mb-1"> 
                    <i class="material-icons view_job_icons">location_on</i>
                    Location: <?php 
                    $RAR = explode(",", $value['location']);
                      foreach ($RAR as $rar) {
                      
                         echo $rar;  ?>          
                    <?php
                    }
                    ?>
                  </p>
                <!-- Job title ends-->
              </div><!--Col 8 ends-->
            </div><!--Row 1 ends-->
            <hr>
            <div class="row">
              <div class="col-md-8">
                <!--Job description starts-->
                <div class="description-info">
                  <h5><b>Job Description:</b></h5>
                   <div class="desciption">
                 <!--  <h3 class="mediumheader3"> <strong>Job Description</strong></h3> -->
                   <p> <?php echo $value['job_desc'];?>.</p>
                   <h5><b>Other Information:</b></h5>
                   <div class="row">
                    <div class="col-lg-12">
                       <p class="mb-1"> Type Of Artist Category: <?php echo $value['artist_category'];?></p>
                        <p class="mb-1"> Project Type: <?php echo $value['project_type'];?></p>

                      <p class="mb-1"> Gender who can apply for this Job : <?php echo $value['gender'];?></p>
                       <p class="mb-1"> Age Group : <?php echo $value['age_from']." to ".$value['age_upto']." Years";?></p>
                     
                    
                       
                    <p class="mb-1"> Languages Known: <?php 
                    $Location = explode(",", $value['languages']);
                      foreach ($Location as $loc) {
                      
                         echo $loc;  ?>          
                    <?php
                    }
                    ?></p>
                    <p class="mb-1"> Shoot/Event Date: <?php echo $value['shoot_date'];  ?>          
                    </p>

                    <p class="mb-1"> Shoot Duration(hours): <?php echo $value['shoot_duration'];  ?>
                    </p>
                    <p class="mb-1">Previous Experience Required?: <?php if($value['previous_experi']=="0"){
                    echo "No, Previous Experience is not Mandatory";
                   } elseif ($value['previous_experi']=="1") {
                     echo "Yes, Previous Experience is Mandatory";
                   }?> </p>
                    <p class="mb-1"> Audition Required or Not?: <?php if($value['audition_req']=="0"){
                    echo "No, Audition is not Mandatory";
                   } elseif ($value['audition_req']=="1") {
                     echo "Yes, Audition is Mandatory";
                   }?></p>
                    <p class="mb-1">Script:

                    </p>
                          
                    </div>
                    
                   </div>
                </div>
                </div>
                <div class="responsibilities">
                  <!-- <h5>Key Responsibilities:</h5>
                  <p>-Execute all visual design stages of website design from concept to final hand-off to development-Create print advertisements, social media advertisements, client collateral &amp; digital resizes according to Client demands With direction of the Creative team, input into new design ideas for client branding-Update &amp; keep all agency collateral materials, including keeping records of Client's logos, fonts, images, etc.  </p> -->
                </div>
                <div class="requirements">
                  <h5>Minimum Requirements</h5>
                 <!--  <ul>
                    <li>Bachelor's Degree</li>
                    <li>2-5 years of relevant experience ( or equivalent educational experience)</li>
                    <li>Experience developing in Wordpress and other web design platforms</li>
                    <li>HTML, CSS and JavaScript experience a plus</li>
                    <li>In depth knowledge &amp; technical experience of Photoshop, Illustrator, InDesign, Adobe PDF, Keynote, PowerPoint, Microsoft Word &amp; Excel</li>
                    <li>Exceptional eye for design, deep understanding of creativity and ability to recognize fresh approaches to Advertising </li>
                    <li>Must be fluent in Spanish; working written and spoken proficiency</li>
                    <li>**All applicants must be eligible to work in the U.S. without sponsorship</li>
                  </ul> -->
                </div>
                <!--Job description ends-->
              </div><!--Col-8 ends-->
              <div class="col-md-4">
                <!--Company info starts-->
                <h5><b>Company Info</b></h5>
               
                 <p class="mb-1">Job Post Date: <?php echo $value['job_post_date'];?></p>
                      <p class="mb-1">End Date: <?php echo $value['job_post_expired_date'];?></p>
                        <p class="mb-1">
                            Production House Name: 
                           <?php echo $value['production_house_name'];  ?>          
                         </p>
                      <p class="mb-1"> Producer Name: <?php  echo $value['producer_name'];?></p>

                       <p class="mb-1">
                          Director Name: 
                         <?php echo $value['director_name'];?>
                      </p>  
                <!--Company info ends-->
              </div><!--Col-4 ends-->
            </div><!--Row 2 ends-->
          </div><!--Card Body ends-->
        </div><!--Card ends-->
         
        </div><!-- job-details-info --> 
                     <?php
                    }
                    ?>
          
      </div>

<script type="text/javascript">
  $(".backBtnViewJob").click(function(e)
{
   //alert(1);
   $("#postedJobListsData").show();
   $(".dashboardCards").removeClass("active");
   $(".postJob").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active");
              $(".receiveapp").removeClass("active");
              $(".processapp").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/postedJob')?>',
        success:function(response){
           
           $("#postedJobListsData").html(response);
         
           $(".postedJobs").addClass("active"); 


           // console.log(response);
        }
   });
   $('#dashboardCardsView').hide();
    $('#showEditProfileForm').hide();
    $("#postJobForm").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
   $("#receiveappView").hide();
   $("#processappView").hide();
    
     
});
</script>