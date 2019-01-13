
<html lang="en">

<style type="text/css">
  
  .alert
  {
       padding-top: 25px;
    padding-bottom: 1px;
  }
  .alert.alert-success
  {
    box-shadow: unset;
  }
  .btn.btn-rose {
    color: #fff;
    background-color: #e91e63;
    border-color: #e91e63;
    box-shadow: 0 2px 2px 0 rgba(233,30,99,.14), 0 3px 1px -2px rgba(233,30,99,.2), 0 1px 5px 0 rgba(233,30,99,.12);
}
.ripple-container {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    border-radius: inherit;
}
.btn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    cursor: pointer;
    background-color: transparent;
    border: 0;
    border-radius: .2rem;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}

 
</style>

        <div class="row" id="job_title_application">
           <?php 
                        if($this->session->flashdata('message')){ ?>

                          <div class="col-lg-12">
                              <div class="alert alert-success alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong> <?php echo $this->session->flashdata('message');  ?></strong> 
                            </div>
                          </div>
                              <!-- echo $this->session->flashdata('message');   -->
                            <?php  } else { 
                              echo '';  
                            } ?>
                       
<!-- table starts -->
<div class="col-md-12">
 
   <button class="backBtn" style="background-color: green;color: white;border: green;"><i class="material-icons" style="
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
   <!--  <button type="button"  name="submit" id="BackBtn" style="width: 110px;/* margin-left: 743px; */float: right;    margin-top: 0.3rem;display: block;background-color: rgb(255, 0, 124);"
     class="btn btn-default btn-block" >Back</button> -->
  </div>
            <div class="col-md-12">
                         <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Job Applications</h4>
                  
                </div>
                
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" style="
    background-color: white;
">
              <thead>
                <tr>
                  <th>
                          ID
                        </th>
                        <th>
                         Artist Name
                        </th>
                        
                        <th>
                         City
                        </th>
                         <th>
                          Applied Date
                        </th>
                        <th>
 
                        View
                        </th>
                          <th>
                        Action
                        </th>
                       
                </tr>
              </thead>
              <tbody>
                         <?php  $i =1;
                                        foreach ($job_application_data as $key) {
                                          // print_r($key);
                                          ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td >
                          <?php echo $key['artist_name'];?>
                          </td>
                         
                          <td>
                           <?php echo $key['city'];?>
                          </td>
                          <td >
                         <?php echo $key['applied_date'];?>
                          </td>
                         
                          <td class="viewjobApplications1" id="viewjobApplications1">
     
                            <a  onclick="myajaxartist('<?php echo $key['artist_id']; ?>')" title="View">   
                            <button type="button" class="btn-default green-btn" id="btnDirJobPost" style="
    padding: 0px;margin: 0px;"> 
    <i class="material-icons" disabled>visibility</i></button></a>

 <!-- <a  title="View">    -->
  <?php $videorefjobid=$key['job_id']; 
 $this->db->select('audition_req');
        $this->db->from('job_posts');
        $this->db->where('job_id',$videorefjobid);
       
        

        $videoref = $this->db->get()->result_array();
       $videoreflink= $videoref[0]['audition_req'];
        if($videoreflink==1)
        {?>
          <button class="btn btn-rose btn-fill" data-toggle="modal" data-target="#myModalview" onclick="demo.showSwal('title-and-text')">Link<div class="ripple-container"></div></button>
       <?php }?>

        






                       <!--      <button type="button" data-toggle="modal" style="
    background: linear-gradient(60deg,#ffeb3b,#ffeb3b);
    padding: 5px;
    margin: 0px;
" data-target="#myModal" > 
    <i class="material-icons">visibility</i></button> --><!-- </a> -->

                          </td>
                          <td>



<button class="btn-applications" title="Pending" id="pending" value="pending" data-toggle="modal" style="
    background: linear-gradient(60deg,#ffeb3b,#ffeb3b);
    padding: 5px;
    margin: 0px;
" data-target="#myModal"  onclick="myId('<?php echo $key['id']; ?>')" ><i class="fa fa-spinner"></i></button>

<!-- </button> -->
  <button class="btn-applications" title="Shortlist" id="Shortlist" value="Shortlist" data-toggle="modal" data-target="#myModal1" style="
   padding: 5px;margin: 0px;"
 onclick="myId1('<?php echo $key['id']; ?>')">  <i class="fa fa-check"></i>
</button>

<button class="btn-applications" title="Rejected" id="Rejected" style="
    background: #ff007c;padding: 5px;margin: 0px;" value="Rejected" data-toggle="modal" data-target="#myModal2" 
 onclick="myId2('<?php echo $key['id']; ?>')"><i class="fa fa-trash"></i></button>

  









                          <!-- 
                             <select class="form-control"> name="artis_status" onchange="showUser(this.value,<?php echo $key['a_id']?>,<?php echo $key['job_id'];?>,<?php echo $key['id'];?>)">
                                              <option disabled="disabled" selected="selected">Select Action</option>
                                              <option value="0"<?php if($key['status']=="0"){
                                                echo "selected";
                                              }?>>Pending</option>
                                              <option value="1"<?php if($key['status']=="0"){
                                                echo "selected";
                                              }?>>Approved</option>
                                              <option value="2"<?php if($key['status']=="0"){
                                                echo "selected";
                                              }?>>Rejected</option>
                                            </select> -->
                          </td>
                          
                        </tr>
                          <?php } ?>
                        
                      </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
<!-- table ends  -->




      <div class="modal fade" id="myModalview">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Video Link</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <?php 
          $videolinkshowmodal=$key['job_id'];
$this->db->select('video_url');
        $this->db->from('job_application');
        $this->db->where('job_id',$videolinkshowmodal);
       
        

        $videorefurl = $this->db->get()->result_array();
        // print_r($videorefurl);

       $videourl=$videorefurl[0]['video_url'];
       if (false === strpos($videourl, '://')) {
    $videourlnew = 'http://www.youtube.com/' . $videourl;
   
}else
{
   $videourlnew = $videourl;
}

   //     $filename = substr($videourl, strrpos($videourl, '/') + 1);
   //     echo $filename;
   // $videourlnew = 'http://www.youtube.com/embed/'.$filename;
   // echo $videourlnew;

//}

         // echo $['video_url'];class="popmake-close pum-close do-default"
          ?>
         <a href="<?php echo $videourlnew; ?>" target="_blank" style="
    margin-left: 30px;
">
  <!-- <?php //echo $facebook_url; ?> -->
        <i class="fa fa-youtube mr-2"  style="
    color: #ff0000;font-size: 21px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i><?php echo $videourlnew; ?>
        </a>
          <!-- <iframe width="420" height="315" src="https://www.youtube.com/embed/A6XUVjK9W4o" frameborder="0" allowfullscreen></iframe> -->
          <!--  <iframe width="420" height="315" src="<?php echo $videourlnew; ?>" frameborder="0" allowfullscreen></iframe>

          <iframe width="420" height="315" src="<?php $videourl; ?>" frameborder="0" allowfullscreen></iframe> -->

         <!--  <object width="420" height="315"
data="<?php //echo $videorefurl[0]['video_url']; ?>">
</object> -->
    <!--       <iframe width="420" height="345" src="<?php //echo $videorefurl[0]['video_url']; ?>">
</iframe> -->
    <!--  <a  target="_blank">
      <?php $videorefurl[0]['video_url']; ?>
        
      </a> -->
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/delete_job_post'); ?>" name="expireForm" id="expireForm">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
        <!-- Modal footer -->
        <div class="modal-footer">

                        <!-- <a href="<?php  //echo base_url('dashboard/delete_job_post?job_id=').$key['job_id'] ?>" title="Expire job"> -->
                         <!--  <button type="button" class="btn-default green-button" id="btnDirJobPost" onclick="expireJobMy()">Expire Job</button> -->
                        <!-- </a> -->
          <button type="button"  class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
         </form>
        
      </div>
    </div>
  </div>
  <script>
    $(".viewjobApplications").click(function(e)
{
  // alert(1);
  $("#showApplications").show();
    e.preventDefault();
    $.ajax({
   url:"<?=base_url('dashboard/viewprofileasfromartist?artist_id=').$key['artist_id'] ?>",
       // url:'<?php //echo base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
        success:function(response){
           
         $("#viewprofileasfromartist1").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
    $('#showjobDetails').hide();
    $('#job_title_application').hide();
  

});
 function myajaxartist(artist_id)
{
  var artist_id=artist_id;
 // alert(artist_id);
  var base_url="<?php echo base_url('dashboard/viewprofileasfromartist/');?>";

   $.ajax({

        url: base_url+artist_id,
        success:function(response){
             $("#viewprofileasfromartist1").show();
         $("#viewprofileasfromartist1").html(response);

          
        }
   });
  $('#postedJobsList').hide();
    $('#showjobDetails').hide();
    
      $('#job_title_application').hide();
}



    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
 <script type="text/javascript">
function showUser(str,AID,JID,ID)
{
 var ID_new = ID;
 var AID_new = AID;
 var JID_new = JID;
 var artist_action = str;
  $.ajax({
        type: "POST",
        url: "<?php echo base_url('director/update_artist_job_status')?>",
        data: {'a_id': AID_new,'id': ID_new,'job_id': JID_new,'status':artist_action},
        success: function () 
        {
          alert("Status Updated Successfully!...")
               
        }
    });
}

//function backBtn()
$(".backBtn").click(function(e)
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
