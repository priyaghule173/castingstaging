    <style>
      .dropdown-menu li a:hover {
        background: #ff007c;
 
      }
      .wrapper {
    /* padding: 4px; */
    padding-left: 10px !important;
    padding-right: 0px !important;
}
    </style>
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/adminimages/sidebar-1.jpg" style="margin: -0.1Rem 1px;">
      <div class="logo" id="prof_div" style="padding: 15px 0px 10px 0;">
          <?php if($profile->profile_pic){ ?>
          <img  class="simple-text logo-normal" src="assets/images/profile_pic/<?php echo $profile->profile_pic; ?>" alt="" style="height: 75px;margin: 0 auto;border-radius: 15%;" />
        <?php }else{ ?>
           <img  class="simple-text logo-normal" src="assets/images/profile_pic/defaultimg.png" alt="" style="height: 75px;margin: 0 auto;border-radius: 45%;" />
        <?php } ?>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <h5><span style="color: red;"> </span><?php
 
               // echo $DIRECTOR_ID;exit();

           if($this->session->userdata('OFFICIAL_NAME'))
             {
                 
               echo $this->session->userdata('OFFICIAL_NAME');
             }
             else
             {

              echo $this->session->userdata('name');
             }
             ?>
             </h5>
                <h6 class="mtop10"><span style="color:#ff007c;">

                  <?php
              echo $this->session->userdata('role');
                   ?></h5>
               <!--  <h6 class="mtop10"><span style="color: red;"><?php //echo $this->session->userdata('role');?> </span></h6> -->
              <div class="row mtop10" style="padding-top: 5px;">
                     <?php if($this->session->userdata('DIRECTOR_ID'))
              {

              ?>



                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                  <div class="dropdown">
                <a href="<?php echo base_url('dashboard/myprofile'); ?>" class="dropdown-toggle myProfile" data-toggle="dropdown" aria-expanded="true" style="font-weight: bold;
    color: green;
    position: relative;
    top: 2px;
    padding-left: 0px;">
                  Profile
                
              </a>
                <ul class="dropdown-menu dropdown-menu-right" style="position: relative !important;z-index:4;min-width: 200px;" role="menu" x-placement="top-end">
                 
                  <li class="viewasArtist">
      <!--<div class="viewprofileasArtist">-->
                     <a href="<?php echo base_url('dashboard/viewProfileasArtist'); ?>" style="font-weight: bold;" >
<!-- <button class="btn background-green"> -->
<i class="fa fa-user" aria-hidden="true"></i> View Profile As Artist
<!-- </button> -->
</a>
<!--</div>-->
                    <!-- viewProfileasArtist -->
                  </li>
                </ul>
              </div>
                </div>


                
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <a class="logout" href="<?php echo base_url('dashboard/director_logout')?>" style="font-weight: bold;" >
                  <!-- <button class="btn background-green">  -->
                <i class="fa fa-power-off" aria-hidden="true"></i>  Logout
                <!-- </button> -->
                  </a>
                </div>
                  
           <?php }
                else{
             ?>

<!-- artist profile starts -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <!-- 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 editArtist">
                
                  <a  href="<?php //echo base_url('dashboard/editArtist'); ?>" style="font-weight: bold;">
                     <i class="fa fa-user" aria-hidden="true"></i> Profile
                  
                </a>
                </div> -->


                  <div class="dropdown">
                    <!-- dashboard/editArtist <?php //echo base_url('dashboard/editArtist'); ?> -->
                    <!-- editArtist -->
                     <!-- editArtist -->
                <a href="<?php echo base_url('dashboard/editArtist'); ?>" class="dropdown-toggle editArtist" data-toggle="dropdown" aria-expanded="true" style="font-weight: bold;
    color: green;
    position: relative;
    top: 2px;
    padding-left: 0px;">
                  Profile
                
              </a>
                <ul class="dropdown-menu dropdown-menu-right" style="position: relative !important;z-index:4;min-width: 200px;" role="menu" x-placement="top-end">
                 
                  <li class="viewprofileasDirector">
      <!--<div class="viewprofileasArtist">-->
                     <a href="<?php echo base_url('dashboard/viewprofileasDirector'); ?>" style="font-weight: bold;" >
<!-- <button class="btn background-green"> -->
<i class="fa fa-user" aria-hidden="true"></i> View Profile As Director
<!-- </button> -->
</a>
<!--</div>-->
                    <!-- viewProfileaDirector -->
                  </li>
                </ul>
              </div>
                </div>

<!-- artist profiule ends -->




              <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 editArtist">
                
                  <a  href="<?php //echo base_url('dashboard/editArtist'); ?>" style="font-weight: bold;">
                     <i class="fa fa-user" aria-hidden="true"></i> Profile
                  
                </a>
                </div> -->

                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  
                  <a class="logout" href="<?php echo base_url('dashboard/artist_logout')?>" style="font-weight: bold;">
                  <i class="fa fa-power-off" aria-hidden="true"></i>  Logout
                  </a>
                </div>

            <?php } ?>
              </div>
            </div>
          </div>
      </div>
      <div class="sidebar-wrapper" style="height: calc(100vh - 230px);padding-bottom: 0px;overflow-x: hidden;">
        <ul class="nav">
           <?php if($this->session->userdata('DIRECTOR_ID'))
              {

              ?>
          <li class="nav-item  dashboardCards" id="dashboardCards">
            <a class="nav-link nav-link-dashboard" href="<?php echo base_url('dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        <!--   <li class="nav-item myProfile" id="myProfile">
            <a class="nav-link"  href="#">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Edit Profile</p>
            </a>
          </li> -->
          <li class="nav-item postJob" id="postJob">
            <!-- <a class="nav-link" href="<?php //echo base_url('dashboard/postJob'); ?>"> -->
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>Post a Job</p>
            </a>
          </li>
          <li class="nav-item postedJobs">
            <!-- <a class="nav-link"  href="<?php //echo base_url('dashboard/postedJob'); ?>"> -->
            <a class="nav-link"  href="#">
              
              <i class="material-icons">library_books</i>
              <p>Posted Job List</p>
            </a>
          </li>
          <li class="nav-item expiredJobs" id="expiredJobs">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Expired Jobs</p>
            </a>
          </li>
       


<li class="nav-item " id="">
            <a class="nav-link dropdown-toggleApp" id="dropdown-toggleApp" onclick="hideList()" href="#application_sub"  data-toggle="collapse" aria-expanded="false">
              <i class="material-icons">list</i>
              <span style="font-size: 15px;">Application List</span>
            </a>
            <div class="showToggleApp">
             <ul class="collapse list-unstyled" id="application_sub">
                    <li class="padleft30 receiveapp" id="receiveapp" style="padding-bottom: 15px;">
<i class="material-icons">view_list</i>
                        <a href="#" style="font-size: 14px;padding-bottom: 10px;margin: 0 -15px;">Recieved Applications</a>
                    </li>
                    <li class="padleft30 processapp approvedApplicationList" id="processapp approvedApplicationList" style="padding-bottom: 15px;">
<i class="material-icons">view_list</i>
                        <a href="#" style="font-size: 14px;padding-bottom: 10px;margin: 0 -15px;">Processed Applications</a>
                    </li>
                    
                </ul>
              </div>
          </li>
          



<!--           <li class="nav-item approvedApplicationList" id="approvedApplicationList">
             <a class="nav-link" href="<?php //echo base_url('dashboard/approvedApplications'); ?>">
            <a class="nav-link" href="#">
              
              <i class="material-icons">list</i>
              <p>Application List</p>
            </a>
          </li>
 -->       



         <li class="nav-item myTokens" id="myTokens">
            <!-- <a class="nav-link" href="<?php //echo base_url('dashboard/myTokens'); ?>"> -->
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
               <p>Subscription</p>
            </a>
          </li>
        
          
         
            <li class="nav-item ">
            <a class="nav-link dropdown-togglesettings" id="dropdown-togglesettings"  onclick="hideSettings()"  href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
              <i class="material-icons">list</i>
              <span style="font-size: 15px;">Settings</span>
            </a>
            <div class="ShowSettings">
             <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="padleft30 mysettings" id="mysettings" style="padding-bottom: 15px;">
                      <i class="material-icons">view_list</i>
                        <a href="#" style="font-size: 14px;padding-bottom: 10px; margin: 0 -15px;">Change Password</a>
                    </li>
                    <li class="padleft30 getpreviledge" id="getpreviledge" style="padding-bottom: 15px; margin: 0 -15px;">
                      <i class="material-icons"style="    margin-left: 16px;">view_list</i>
                        <a href="#" style="font-size: 14px;padding-bottom: 10px;    margin-left: -15px;">Get Priviledges</a>
                    </li>
                    
                </ul>
              </div>
          </li>
             <li class="nav-item " >
            <a class="nav-link" href="<?php echo base_url(); ?>" style="margin-top: 30px ;border-top: 1px solid #ccc ;">
              <i class="material-icons">home</i>
              <p>Go To Home</p>
            </a>
          </li>
          
          <div class="row">
        <div class="col-md-12 text-center pt-2" style="z-index: 5">
         
 <?php 
   // echo("hi");
    $DIRECTOR_ID = $this->session->userdata('EMAIL_ID');

    if($DIRECTOR_ID !='')
    {
    $data = $this->db->select('*')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->result_array();
        $data['profile'] = $this->db->select('profile_pic')->from('directors')->where('d_id',$this->session->userdata('DIRECTOR_ID'))->get()->row();

        $data['projectType'] = $this->db->select('*')->from('projecttype')->get()->result_array();

 $facebook_url=$data[0]['facebook_url'];

//echo $facebook_url;
 if (false === strpos($facebook_url, '://')) {
    $fb_url = 'http://' . $facebook_url;
   
}else
{
   $fb_url = $facebook_url;
}



 $instagram_url=$data[0]['instagram_url'];
if (false === strpos($instagram_url, '://')) {
    $in_url = 'http://' . $instagram_url;
    // echo $in_url;exit;
}
else
{
   $in_url = $instagram_url;
}

   $twitter_url=$data[0]['twitter_url'];
   if (false === strpos($twitter_url, '://')) {
    $tw_url = 'http://' . $twitter_url;
  // echo $tw_url;exit;
}
else
{
   $tw_url = $twitter_url;
}

   $website_url=$data[0]['website_url'];
    if (false === strpos($website_url, '://')) {
    $wb_url = 'http://' . $website_url;
   // echo $wb_url;exit;
}
else
{
   $wb_url = $website_url;
}
   $youtube_url=$data[0]['youtube_url']; 
   // echo $youtube_url;exit;
   if (false === strpos($youtube_url, '://')) {
    // echo $youtube_url;exit;
    $yout_url = 'http://' . $youtube_url;
   // echo $youfft_url;exit;
}
else
{
   $yout_url = $youtube_url;
}
    $imdb_url=$data[0]['imdb_url'];
    if (false === strpos($imdb_url, '://')) {
    $im_url = 'http://' . $imdb_url;
   // echo $fb_url;
}
else
{
   $im_url = $imdb_url;
}

}
    
  
?>      
 <!-- <i class="fa fa-facebook mr-2"></i>
          <i class="fa fa-twitter mr-2"></i>
 -->
 
   <div class="col-md-12 text-center" id="soc_links" style="z-index: 5;">
 <a href="<?php echo $fb_url; ?>" target="_blank">
  <!-- <?php //echo $facebook_url; ?> -->
          <i class="fa fa-facebook mr-2" style="
    color: #3B5998;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i>
        </a>

                        <a href="<?php echo $in_url ;?>" target="_blank">
         <i class="fa fa-instagram mr-2"  style="
    color: #cd486b;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i>
                                      </a>
                                     <!--  </div> -->

                   <!-- <div class="form-group social-link-input"> -->
                    <a href="<?php echo $wb_url;?>" target="_blank">

 <i class="fa fa-globe mr-2"  style="
    color: #cd486b;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i>
                                       </a>
                                     <a href="<?php echo $tw_url;?>" target="_blank">
                                      <i class="fa fa-twitter mr-2"  style="
    color: #1DA1F2;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i>
                                      
</a>
                 <!-- <div class="form-group social-link-input"> -->
     <!--  <?php// echo $youfft_url; ?> -->
                   <a href="<?php echo $yout_url;?>" target="_blank">
                  
      
 <i class="fa fa-youtube mr-2"  style="
    color: #ff0000;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                                      
                                     <!--  </div> -->

                                       <!--  <div class="form-group social-link-input"> -->
                                         <a href="<?php echo $im_url;?>"target="_blank">
                                       <i class="fa fa-imdb mr-2"  style="
    color: #f5de50;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i>
                                      </a>
  
        </div>
        
        

      
      </div>
          
           <?php }
     else{
      ?>
         
      <li class="nav-item active dashboardCards" id="dashboardCards">
            <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
              </a>
          </li>
      <li class="nav-item commingSoonPage" id="commingSoonPage">
            <a class="nav-link"  href="#">
              
              <i class="material-icons">library_books</i>
              <p>Applied Jobs</p>
            </a>
          </li>
          <li class="nav-item commingSoonPage" id="commingSoonPage">
            <!-- <a class="nav-link" href="<?php //echo base_url('dashboard/approvedApplications'); ?>"> -->
            <a class="nav-link" href="#">
              
              <i class="material-icons">list</i>
              <p>My Applications</p>
            </a>
          </li>
               <li class="nav-item commingSoonPage" id="commingSoonPage">
            <!-- <a class="nav-link" href="<?php //echo base_url('dashboard/myTokens'); ?>"> -->
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Subscription</p>
            </a>
          </li>
              <li class="nav-item ">
            <a class="nav-link dropdown-toggle" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
              <i class="material-icons">settings</i>
              <span>Settings</span>
            </a>
             <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="padleft30 artistsettings" id="artistsettings" style="padding-bottom: 15px;">
                        <a href="#" style="font-size: 14px;padding-bottom: 10px;">Change Password</a>
                    </li>
                    <li class="padleft30 commingSoonPage" id="commingSoonPage" style="padding-bottom: 15px;">
                        <a href="#" style="font-size: 14px;padding-bottom: 10px;">Get Priviledges</a>
                    </li>
                    
                </ul>
          </li>
      <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>" style="margin-top: 30px;">
              <i class="material-icons">home</i>
              <p>Go To Home</p>
            </a>
          </li>
<?php
     }
      ?>
        </ul>
      

      </div> 
  <div class="col-md-12 text-center" style="z-index: 5;margin-top: 20px;
    
    width: 204px;
    padding-left: 10px;
    margin-left: 22px;">
          <span><small><a href="https://www.creative-tim.com/license" style="
    color: black;
">
                  Casting Role  &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>

                </a></small></span>
        </div>
      <!-- ***********  -->
    </div>
    

  <script>
    // $("#dropdown-toggleApp").collapse({"toggle": false, 'parent': '.sidebar-wrapper'});

//       $(document).on('click',function(){
//    $('.collapse').collapse('hide');
// });
      
  function hideList()
{
  //alert(1);
     document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
     var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
}


function hideSettings()
{
  //alert(1);
     document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
     var element = document.getElementById("application_sub");
    element.classList.remove("show");
}
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

        console.log("DOCUMENT READY CALLED.......................................");
         // $(".gotohome").addClass("divider-home"); 
           $.ajax({
      
             // dataType : "html",
           url:'<?php echo base_url('dashboard/dashboardCards')?>',
        
               success:function(response){
                   $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           // alert('Inside dashboardCards');
           $("#dashboardCardsView").html(response);
            $(".dashboardCards").addClass("active"); 
            $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            // $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active"); 
              $(".receiveapp").removeClass("active");
              $(".processapp").removeClass("active");


           // console.log(response);
    $('#showEditProfileForm').hide();
    // $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();     
     $("#expiredJobsData").hide();
     $("#getpreviledgeView").hide();
  $("#receiveappView").hide();
$("#processappView").hide();
     


        }
}); 
    });


$(".viewasArtist").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
// alert(1);
  $("#mysettingsView").show();
    $(".dashboardCards").removeClass("active");
        $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active");
$(".receiveapp").removeClass("active");
$(".processapp").removeClass("active");

    e.preventDefault();
    $.ajax({


        url:'<?php echo base_url('dashboard/viewProfileasArtist')?>',
        success:function(response){
             $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           console.log("viewprofileasArtist..............", response);
           $("#mysettingsView").html(response);

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#postJobForm").hide();
    $("#myProfile").hide();
      $("#showEditProfileForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    // $("#mysettingsView").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
   $("#getreceiveappView").hide();

$("#getprocessappView").hide();
});



$(".myProfile").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");

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
$(".receiveapp").removeClass("active");
$(".processapp").removeClass("active");

    e.preventDefault();
    $.ajax({


        url:'<?php echo base_url('dashboard/myprofile')?>',
        success:function(response){
             $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           
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
   $("#getreceiveappView").hide();
    $("#receiveappView").hide();

$("#getprocessappView").hide();
});




$(".editArtist").click(function(e)
{
   // var element = document.getElementById("application_sub");
   //  element.classList.remove("show");
   //  var element = document.getElementById("homeSubmenu");
   //  element.classList.remove("show");
   // document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   // document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
  $("#showArtistEditProfileForm").show();
  
         $(".dashboardCards").removeClass("active");
          $('#commingSoonDiv').hide();
        $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active");

             $(".artistsettings").removeClass("active");
              $(".artistgetpreviledge").removeClass("active");
            $(".ArtistToken").removeClass("active"); 
              $(".ArtistJob").removeClass("active"); 
               $(".ArtistApp").removeClass("active");
                 $(".receiveapp").removeClass("active");
                 $(".processapp").removeClass("active");
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/editArtist')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#showArtistEditProfileForm").html(response);

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#getpreviledgeView").hide();
    $("#getreceiveappView").hide();
    $("#getprocessappView").hide();

  $("#artistsettingsView").hide();
    
    $("#artistgetpreviledgeView").hide();
     $("#ArtistTokensData").hide();
     $("#ArtistJobView").hide();
      $("#ArtistAppView").hide();
     $("#commingSoonDiv").hide();
     
     $("#showViewDirectorProfileForm").hide();


});


$(".viewprofileasDirector").click(function(e)
{
  // alert(1);
  $("#showViewDirectorProfileForm").show();
  
         $(".dashboardCards").removeClass("active");
          $('#commingSoonDiv').hide();
        $(".postJob").removeClass("active");
        $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active");

             $(".artistsettings").removeClass("active");
              $(".artistgetpreviledge").removeClass("active");
            $(".ArtistToken").removeClass("active"); 
              $(".ArtistJob").removeClass("active"); 
               $(".ArtistApp").removeClass("active");
                 $(".receiveapp").removeClass("active");
                 $(".processapp").removeClass("active");
    e.preventDefault();
    $.ajax({
//view_profile_director
        url:'<?php echo base_url('dashboard/viewprofileasDirector')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#showViewDirectorProfileForm").html(response);

            console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#getpreviledgeView").hide();
    $("#getreceiveappView").hide();
    $("#getprocessappView").hide();

 $("#showArtistEditProfileForm").hide();
  $("#artistsettingsView").hide();
    
    $("#artistgetpreviledgeView").hide();
     $("#ArtistTokensData").hide();
     $("#ArtistJobView").hide();
      $("#ArtistAppView").hide();
     $("#commingSoonDiv").hide();


});


$(".postJob").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  //alert(1);
   $("#postJobForm").show();
   $(".dashboardCards").removeClass("active");
    $(".postedJobs").removeClass("active");
           $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active"); 
    $(".receiveapp").removeClass("active"); 
    $(".processapp").removeClass("active"); 
   
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/postJob')?>',
        success:function(response){
            $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#postJobForm").html(response);
            // $(".nav-link").removeClass("active");
            $(".nav-link-dashboard").css("background-color", "unset");
            $(".nav-link-dashboard").css("box-shadow", "unset");
            $(".material-icons").css("color", " #a9afbb");
             $(".nav-link-dashboard").css("color", "black");
              $(".sidebar").css("background", "unset");
            $(".postJob").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $('#showEditProfileForm').hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
   $("#receiveappView").hide();
   $("#processappView").hide();
    
     
});

$(".postedJobs").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
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
            $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
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


$(".expiredJobs").click(function(e)
{
  // alert(1);
    var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   

   $("#expiredJobsData").show();
   $(".dashboardCards").removeClass("active");
     $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active"); 
            $(".myTokens").removeClass("active");
             $(".mysettings").removeClass("active");
              $(".getpreviledge").removeClass("active"); 
              $(".receiveapp").removeClass("active"); 
              $(".processapp").removeClass("active"); 
              
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/expiredJobs')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#expiredJobsData").html(response);
     
            $(".expiredJobs").addClass("active"); 


           // console.log(response);
        }
   });
   $('#dashboardCardsView').hide();
    $('#showEditProfileForm').hide();
    $("#postJobForm").hide();
     $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#mysettingsView").hide();
    $("#getpreviledgeView").hide();
      $("#getreceiveappView").hide();
      $("#getprocessappView").hide();
       $("#receiveappView").hide();
});


$(".receiveapp").click(function(e)
{
   // var element = document.getElementById("application_sub");
   //  element.classList.remove("show");
   //  var element = document.getElementById("homeSubmenu");
   //  element.classList.remove("show");
   // document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   // document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  //alert(1);
  $("#receiveappView").show();

  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".myTokens").removeClass("active");
              $(".getpreviledge").removeClass("active");  
              $(".processapp").removeClass("active");
    e.preventDefault();
    $.ajax({

       // url:'<?php //echo base_url('dashboard/expiredJobs')?>',
        url:'<?php echo base_url('dashboard/recieveApplicationsdirector')?>',

        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#receiveappView").html(response);
           
               $(".receiveapp").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
    $("#getprocessappView").hide();
     $("#mysettingsView").hide();
});

$(".processapp").click(function(e)
{
   // var element = document.getElementById("application_sub");
   //  element.classList.remove("show");
   //  var element = document.getElementById("homeSubmenu");
   //  element.classList.remove("show");
   // document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   // document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
    $("#getprocessappView").show();
    $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
    $(".postedJobs").removeClass("active"); 
    $(".expiredJobs").removeClass("active"); 
    $(".approvedApplicationList").removeClass("active");
    $(".myTokens").removeClass("active"); 
     $(".receiveapp").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/approvedApplications')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#getpreviledgeView").html(response);
           
               $(".getpreviledge").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#expiredJobsData").hide();
    $("#mysettingsView").hide();
    // $("#receiveapp").hide();
    $("#receiveappView").hide();
    $("#processappView").hide();

    
});




// $(".approvedApplicationList").click(function(e)
// {
//   // alert(1);
//   $("#approvedApplicationListData").show();
//   $(".dashboardCards").removeClass("active");
//      $(".postJob").removeClass("active");
//            $(".postedJobs").removeClass("active"); 
//             $(".expiredJobs").removeClass("active"); 
//             $(".myTokens").removeClass("active");
//              $(".mysettings").removeClass("active"); 
//               $(".getpreviledge").removeClass("active"); 
//     e.preventDefault();
//     $.ajax({

//         url:'<?php //echo base_url('dashboard/approvedApplications')?>',
//         success:function(response){
           
//            $("#approvedApplicationListData").html(response);
         
//             $(".approvedApplicationList").addClass("active"); 

//            // console.log(response);
//         }
//    });
//   $('#dashboardCardsView').hide();
//     $('#showEditProfileForm').hide();
//     $("#postJobForm").hide();
//     $("#postedJobListsData").hide();
//     $("#myTokensData").hide();
//     $("#mysettingsView").hide();
//     $("#expiredJobsData").hide();
//     $("#getpreviledgeView").hide();
// });

$(".myTokens").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
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
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
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

   $("#getreceiveappView").hide();
       $("#getprocessappView").hide();
       $("#receiveappView").hide();

});


$(".mysettings").click(function(e)
{
   // var element = document.getElementById("application_sub");
   //  element.classList.remove("show");
   //  var element = document.getElementById("homeSubmenu");
   //  element.classList.remove("show");
   // document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   // document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
  $("#mysettingsView").show();

  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".myTokens").removeClass("active");
              $(".getpreviledge").removeClass("active");
              $(".receiveapp").removeClass("active");
                $(".processapp").removeClass("active");
              
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/directorSetting')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#mysettingsView").html(response);
           
               $(".mysettings").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#expiredJobsData").hide();
    $("#getpreviledgeView").hide();
    $("#receiveappView").hide();
    $("#processappView").hide();
});

$(".getpreviledge").click(function(e)
{
   // var element = document.getElementById("application_sub");
   //  element.classList.remove("show");
   //  var element = document.getElementById("homeSubmenu");
   //  element.classList.remove("show");
   // document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   // document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
    $("#getpreviledgeView").show();
    $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
    $(".postedJobs").removeClass("active"); 
    $(".expiredJobs").removeClass("active"); 
    $(".approvedApplicationList").removeClass("active");
    $(".myTokens").removeClass("active"); 
     $(".receiveapp").removeClass("active");
     $(".processapp").removeClass("active");  
     $(".mysettings").removeClass("active"); 
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/getpreviledge')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#getpreviledgeView").html(response);
           
               $(".getpreviledge").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
    $("#myTokensData").hide();
    $("#expiredJobsData").hide();
    $("#mysettingsView").hide();
    $("#receiveappView").hide();
        $("#processappView").hide();

});


//  Artist Dashboard Links


$(".commingSoonPage").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
   $("#commingSoonDiv").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/appliedjobsartist')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#commingSoonDiv").html(response);

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
     $("#showArtistEditProfileForm").hide();
      $("#artistsettingsView").hide();
      $("#artistgetpreviledgeView").hide();
  
      $("#ArtistJobView").hide();
      $("#ArtistAppView").hide();
     $("#ArtistTokensData").hide();

});



$(".artistsettings").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
  $("#artistsettingsView").show();

  $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
           $(".postedJobs").removeClass("active"); 
            $(".expiredJobs").removeClass("active"); 
            $(".approvedApplicationList").removeClass("active");
             $(".myTokens").removeClass("active");
              $(".artistgetpreviledge").removeClass("active");  

    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/artistSetting')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#artistsettingsView").html(response);
           
               $(".artistsettings").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showArtistEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();
   
    $("#expiredJobsData").hide();
  
    $("#commingSoonDiv").hide();
   
   
  
    
});


$(".artistgetpreviledge").click(function(e)
{
   var element = document.getElementById("application_sub");
    element.classList.remove("show");
    var element = document.getElementById("homeSubmenu");
    element.classList.remove("show");
   document.getElementById("dropdown-toggleApp").setAttribute("aria-expanded", "false");
   document.getElementById("dropdown-togglesettings").setAttribute("aria-expanded", "false");
   
  // alert(1);
    $("#artistgetpreviledgeView").show();
    $(".dashboardCards").removeClass("active");
    $(".postJob").removeClass("active");
    $(".postedJobs").removeClass("active"); 
    $(".expiredJobs").removeClass("active"); 
    $(".approvedApplicationList").removeClass("active");
    $(".myTokens").removeClass("active"); 
     $(".artistsettings").removeClass("active"); 

    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/commingSoon')?>',
        success:function(response){
              $("html").removeClass("nav-open"); $(".close-layer").remove();
            setTimeout(function() {
        $(".navbar-toggler").removeClass("toggled");
    }, 400);
           $("#commingSoonDiv").html(response);
           
               $(".artistgetpreviledge").addClass("active"); 

           // console.log(response);
        }
   });
    $('#dashboardCardsView').hide();
    $("#showArtistEditProfileForm").hide();
    $("#postJobForm").hide();
    $("#postedJobListsData").hide();
    $("#approvedApplicationListData").hide();

    $("#ArtistTokensData").hide();
    $("#ArtistJobView").hide();
    $("#ArtistAppView").hide();
    $("#artistsettingsView").hide();
    $("#commingSoonDiv").hide();
    
});





  </script>








