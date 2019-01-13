<style type="text/css">
  .card-stats .card-header + .card-footer {
    border-top: 1px solid #eee;
    margin-top: 25px;
}
.card-title {
  font-size: 16px !important;
}

</style>


 <?php if($this->session->userdata('DIRECTOR_ID'))
              {

              ?>
               <div class="col-lg-12">
                            
                             <?php  if($this->session->userdata('DirectorProfileCompleted')==100)
                             { ?>
                            <!-- <strong>Profile Completed</strong> -->
                          <?php } else { ?>
                              <div class="alert alert-success alert-dismissible myAlert" id="myAlert" style="padding: 20px;background-color:#ff007c;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong>Complete Your Profile </strong> 
                           <?php } ?>
                            </div>
                          </div>
              
  <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
            <a class="nav-link" href="#">
           <div class="card card-stats myProfile cursor" style="height: 160px;">
               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">person_pin</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">Profile Completed </p>
                  <h3 class="card-title" style="
    font-size: 16px !important;"><?php echo $this->session->userdata('DirectorProfileCompleted'); ?> %</h3>
                </div>

                <div class="card-footer" style="">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Know more
                  </div>
                </div>
                 </div>
             </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link" href="#">
             <div class="card card-stats  myTokens cursor" style="height: 160px;">
               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
" >
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">Subscription</p>
                  <h3 class="card-title" style="
    font-size: 16px !important;">Free </h3>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Subscribe Now
                  </div>
                </div>
                 </div>
            </a>
            </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link" href="#">
              <div class="card card-stats approvedApplicationList cursor" style="height: 160px;">
               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">format_list_bulleted</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">Approved Artist</p>
                  <h3 class="card-title" style="
    font-size: 16px !important;"><?php echo $result; ?></h3>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Know more
                  </div>
                </div>
              </div>
               </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link"  href="#">
              <div class="card card-stats postedJobs cursor" style="height: 160px;">
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">unarchive</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">       Posted Jobs </p>
                  <h3 class="card-title" style="
    font-size: 16px !important;"><?php echo $postedJobs; ?> </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Know more
                  </div>
                </div>
              </div>
            </a>
            </div>
  
          </div>
          
          
            
          <?php } else { ?>
          
                          <div class="col-lg-12">
                              <div class="alert alert-success alert-dismissible myAlert" id="myAlert" style="padding: 20px;background-color: #ff007c;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong>Complete Your Profile, It will help you to get chance to make career in your field</strong> 
                            </div>
                          </div>

<div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
            <a class="nav-link" href="#">
           <div class="card card-stats ArtistProfile cursor" style="height: 160px;">
               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">person_pin</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
"> Profile Completed</p>
                  <h3 class="card-title" style="
    font-size: 16px !important;"><?php echo $this->session->userdata('profileComplete'); ?> % </h3>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Know more
                  </div>
                </div>
                 </div>
             </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link" href="#">
             <div class="card card-stats ArtistToken cursor" style="height: 160px;">

<!--               <div class="card card-stats myProfile cursor" style="height: 150px;">
 -->               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">notifications</i>
                  </div>
                 <p class="card-category" style="
    font-size: 13px !important;
">Subscription</p>
                  <h3 class="card-title"  style="
    font-size: 16px !important;">Free</h3>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Subscribe Now
                  </div>
                </div>
                 </div>
            </a>
            </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link" href="#">
              <div class="card card-stats ArtistJob cursor" style="height: 160px;">
               
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important ;
">
                  <div class="card-icon">
                    <i class="material-icons">format_list_bulleted</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">Applied Jobs</p>
                  <h3 class="card-title" style="
    font-size: 16px !important;">75</h3>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Know more
                  </div>
                </div>
              </div>
               </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <a class="nav-link"  href="#">
              <div class="card card-stats ArtistApp cursor" style="height: 160px;">
                <div class="card-header card-header-danger card-header-icon" style="
    height: 100px !important;
">
                  <div class="card-icon">
                    <i class="material-icons">unarchive</i>
                  </div>
                  <p class="card-category" style="
    font-size: 13px !important;
">Application Lists</p>
                  <h3 class="card-title" style="
    font-size: 16px !important;">100</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Know more
                  </div>
                </div>
              </div>
            </a>
            </div>
  
          </div>

          <?php } ?> 
          
           <script type="text/javascript">
           
           window.onload = function() {
  // alert(11); 
  var x = document.getElementById("myAlert");
      x.style.display = "block";
};

           
            $(".myProfile").click(function(e)
{
  // alert(1);
  $("#showEditProfileForm").show();
    $(".dashboardCards").removeClass("active");
        $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
           
           $("#showEditProfileForm").html(response);

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();

});


$(".postedJobs").click(function(e)
{
  // alert(1);
   $("#postedJobListsData").show();
   $(".dashboardCards").removeClass("active");
   $(".postJob").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active"); 
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
});



$(".approvedApplicationList").click(function(e)
{
  // alert(1);
  $("#approvedApplicationListData").show();
  $(".dashboardCards").removeClass("active");
     $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active"); 
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/approvedApplications')?>',
        success:function(response){
           
           $("#approvedApplicationListData").html(response);
         
            $(".approvedApplicationList").addClass("active"); 

           // console.log(response);
        }
   });
  $('#dashboardCardsView').hide();
    $('#showEditProfileForm').hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
});

$(".myTokens").click(function(e)
{
  // alert(1);
  $("#myTokensData").show();
  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".mysettings").removeClass("active"); 
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/myTokens')?>',
        success:function(response){
           
           $("#myTokensData").html(response);
           
             $(".myTokens").addClass("active"); 
            

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
     $("#mysettingsView").hide();
     $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();

    
});





$(".ArtistProfile").click(function(e)
{
  // alert(1);
  $("#showArtistEditProfileForm").show();
    $(".dashboardCards").removeClass("active");
        $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".artistsettings").removeClass("active");
              $(".artistgetpreviledge").removeClass("active");
            $(".ArtistToken").removeClass("active"); 
              $(".ArtistJob").removeClass("active"); 
               $(".ArtistApp").removeClass("active"); 
        

    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
           
           $("#showArtistEditProfileForm").html(response);

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    
    $("#artistsettingsView").hide();
    
    $("#artistgetpreviledgeView").hide();
     $("#ArtistTokensData").hide();
     $("#ArtistJobView").hide();
      $("#ArtistAppView").hide();
     $("#commingSoonDiv").hide();

});
$(".ArtistToken").click(function(e)
{
  // alert(1);
  $("#commingSoonDiv").show();
  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".mysettings").removeClass("active"); 
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/commingSoon')?>',
        success:function(response){
           
           $("#commingSoonDiv").html(response);
           
             $(".ArtistToken").addClass("active"); 
            

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showArtistEditProfileForm").hide();
 
   
    $("#ArtistJobView").hide();
    $("#artistsettingsView").hide();
    
    $("#artistgetpreviledgeView").hide();
     $("#ArtistTokensData").hide();
      
      $("#ArtistApp").hide();
   
 
    
});


$(".ArtistJob").click(function(e)
{
  // alert(1);
  $("#commingSoonDiv").show();
  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".mysettings").removeClass("active"); 
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/commingSoon')?>',
        success:function(response){
           
           $("#commingSoonDiv").html(response);
           
             $(".ArtistJob").addClass("active"); 
            

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showArtistEditProfileForm").hide();
    
     $("#artistsettingsView").hide();
     $("#expiredJobsData").hide();
    $("#artistgetpreviledgeView").hide();
    $("#ArtistJobView").hide();
   

    
});



$(".ArtistApp").click(function(e)
{
  // alert(1);
  $("#commingSoonDiv").show();
  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".mysettings").removeClass("active"); 
              $(".getpreviledge").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/commingSoon')?>',
        success:function(response){
           
           $("#commingSoonDiv").html(response);
           
             $(".ArtistApp").addClass("active"); 
            

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showArtistEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
     $("#artistsettingsView").hide();
     $("#expiredJobsData").hide();
    $("#artistgetpreviledgeView").hide();

    
});
          </script>

          
          
          