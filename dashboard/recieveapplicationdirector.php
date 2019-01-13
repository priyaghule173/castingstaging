<!DOCTYPE html>
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
</style>

          <div class="row">
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
                       
<!-- body starts -->

<div class="col-md-12">
        <div class="card">

          <div class="card-header card-header-primary">
            <div class="card-title mt-0">
           <!--    <i class="material-icons">assignment</i> -->
            </div>
          
                
            <h4 class="card-title ">Received Applications</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th style="text-align: center;">
                         Artist Name
                        </th>
                        
                        <th style="text-align: center;">
                         City
                        </th>
                         <th style="text-align: center;">
                          Applied Date
                        </th>
<!--                         <th style="text-align: center;">
                        View
                        </th>
 -->                          <th style="text-align: center;">
                        Action
                        </th>
                       
                      </thead>
                      <tbody>
                       <?php  if(count($job_application_data)==0)
                          {?>
                            <td></td>
                             <td></td>
                            <td style="text-align:center;"><b>Currently No Applications Found</b></td>
                             <td></td>
                              <td></td>

                           <?php 
                          } else{  ?>
                         <?php  $i =1;
                                        foreach ($job_application_data as $key) {
                                          ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td style="
    text-align: center;
">
                          <?php echo $key['artist_name'];?>
                          </td>
                         
                          <td style="
    text-align: center;
">
                           <?php echo $key['city'];?>
                          </td>
                          <td style="
    text-align: center;
">
                         <?php echo $key['applied_date'];?>
                          </td>
                         <!-- 
                          <td style="
    text-align: center;
">
                            <a href="<?=base_url('director/view_artist_details?a_id=').$key['a_id'] ?>" title="View">   <button type="button" class="btn-default green-btn" id="btnDirJobPost">View</button></a>
                          </td> -->
                          <td style="
    text-align: center;
">
                             
  <!-- <button type="button" class="btn btn-primary px-3"> -->
 <!--   <i class="fa fa-circle-o-notch" title="Pending" onclick="showpending()";aria-hidden="true" style="
    font-size: 30px;
"
></i> -->
<!-- <button type="button" style="text-align: center;
    margin: 0 auto;
    padding: 4px;" class="btn-default green-btn" id="btnDirJobPost" data-toggle="modal" data-target="#myModal" onclick="myId('<?php echo $key['job_id']; ?>')">
                                    Expire Job
                                 </button>
                                  onclick="selectOptionpendingdirector('<?php echo $key['id']; ?>')"
                                  onclick="selectOptionshorlistdirector('<?php echo $key['id']; ?>')">
                                   onclick="selectOptionrejecteddirector('<?php echo $key['id']; ?>')">
 -->





<button class="btn-applications" title="Pending" id="pending" value="pending" data-toggle="modal" style="
    background: linear-gradient(60deg,#ffeb3b,#ffeb3b);padding: 5px;margin: 0px;" data-target="#myModal"  onclick="myId('<?php echo $key['id']; ?>')" ><i class="fa fa-spinner"></i></button>

<!-- </button> -->
  <button class="btn-applications" title="Shortlist" id="Shortlist" value="Shortlist" data-toggle="modal" data-target="#myModal1" 
 onclick="myId1('<?php echo $key['id']; ?>')" style="
    padding: 5px;margin: 0px;
">  <i class="fa fa-check"></i>
</button>

<button class="btn-applications" title="Rejected" id="Rejected" style="
    background: #ff007c;padding: 5px;margin: 0px;
" value="Rejected" data-toggle="modal" data-target="#myModal2" 
 onclick="myId2('<?php echo $key['id']; ?>')"><i class="fa fa-trash"></i></button>

  

    <!-- </button> -->
   
                           


                             <!-- <select class="form-control"> name="artis_status" onchange="showUser(this.value,<?php echo $key['a_id']?>,<?php echo $key['job_id'];?>,<?php echo $key['id'];?>)">
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
                          <?php }} ?>
                        
                      </tbody>
                    </table>
          </div>
        </div>
      </div>

<!-- ends -->




           
            </div>
          </div>
      
       <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Job Application status</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Do You Want To Do This Action?
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/applicationStatusdirector'); ?>" name="actionForm" id="actionForm">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
        <!-- Modal footer -->
        <div class="modal-footer">

                        <!-- <a href="<?php  //echo base_url('dashboard/delete_job_post?job_id=').$key['job_id'] ?>" title="Expire job"> -->
                          <button type="button" class="btn-default green-button" id="btnDirJobPost"  onclick="selectOptionpendingdirector('<?php echo $key['id']; ?>')">Application Action</button>
                        <!-- </a> -->
          <button type="button"  class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
         </form>
        
      </div>
    </div>
  </div>
          
         <!-- The second Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Job Application status</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Do You Want To Do This Action?
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/applicationStatusdirector'); ?>" name="actionForm1" id="actionForm1">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
        <!-- Modal footer -->
        <div class="modal-footer">

                        <!-- <a href="<?php  //echo base_url('dashboard/delete_job_post?job_id=').$key['job_id'] ?>" title="Expire job"> -->
                          <button type="button" class="btn-default green-button" id="btnDirJobPost"   onclick="selectOptionshorlistdirector('<?php echo $key['id']; ?>')">
                                 Application Action</button>
                        <!-- </a> -->
          <button type="button"  class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
         </form>
        
      </div>
    </div>
  </div>
        

         <!-- The third Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Job Application status</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Do You Want To Do This Action?
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/applicationStatusdirector'); ?>" name="actionForm2" id="actionForm2">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
        <!-- Modal footer -->
        <div class="modal-footer">

                        <!-- <a href="<?php  //echo base_url('dashboard/delete_job_post?job_id=').$key['job_id'] ?>" title="Expire job"> -->
                          <button type="button" class="btn-default green-button" id="btnDirJobPost"    onclick="selectOptionrejecteddirector('<?php echo $key['id']; ?>')">
                                 Application Action</button>
                        <!-- </a> -->
          <button type="button"  class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
         </form>
        
      </div>
    </div>
  </div>   
           
 
           

   <!--1st modal-->    
  <script>
      function Appaction()
    {
     // alert("ijensjfhiwej");
      var myIdVal=document.getElementById('status').value;
     // alert(myIdVal);
      document.getElementById("actionForm").submit();
     
    
    }
    function myId(data)
    {
  //  alert(1);
       document.getElementById('status').value=data;
    
    }
  
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    
    function myajax(jobId,status)
{
  var id=jobId;
  var status=status;
  //alert(id);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetails").html(response);

          
        }
   });
    // $('#postedJobsList').hide();
    //  $('#showApplications').hide();
}


$(".jobTitle").click(function(e)
{
  alert("jobTitle");
  $("#showjobDetails").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/applicationStatusdirector?job_id=').$key['job_id']; ?>',
        success:function(response){
           
           $("#showjobDetails").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
     $('#showApplications').hide();
  

});


$(".jobApplications").click(function(e)
{
  // alert(1);
  $("#showApplications").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
        success:function(response){
           
           $("#showApplications").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
    $('#showjobDetails').hide();
  

});


  </script>


<!-- 2nd -->
           

       
  <script>
      function Appaction1()
    {
     // alert("ijensjfhiwej");
      var myIdVal=document.getElementById('status').value;
     // alert(myIdVal);
      document.getElementById("actionForm1").submit();
     
    
    }
    function myId1(data)
    {
  //  alert(1);
       document.getElementById('status').value=data;
    
    }
  
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    
    function myajax(jobId,status)
{
  var id=jobId;
  var status=status;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetails").html(response);

          
        }
   });
    // $('#postedJobsList').hide();
    //  $('#showApplications').hide();
}


$(".jobApplications").click(function(e)
{
  // alert(1);
  $("#showApplications").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
        success:function(response){
           
           $("#showApplications").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
    $('#showjobDetails').hide();
  

});


  </script>


<!-- 3rd -->
           

       
  <script>
      function Appaction2()
    {
     // alert("ijensjfhiwej");
      var myIdVal=document.getElementById('status').value;
     // alert(myIdVal);
      document.getElementById("actionForm1").submit();
     
    
    }
    function myId2(data)
    {
  //  alert(1);
       document.getElementById('status').value=data;
    
    }
  
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    
    function myajax(jobId,status)
{
  var id=jobId;
  var status=status;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetails").html(response);

          
        }
   });
    // $('#postedJobsList').hide();
    //  $('#showApplications').hide();
}


$(".jobTitle").click(function(e)
{
  //alert(1);
  $("#showjobDetails").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/applicationStatusdirector?job_id=').$key['job_id'] ?>',
        success:function(response){
           
           $("#showjobDetails").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
     $('#showApplications').hide();
  

});


$(".jobApplications").click(function(e)
{
  // alert(1);
  $("#showApplications").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
        success:function(response){
           
           $("#showApplications").html(response);

           // console.log(response);
        }
   });
    $('#postedJobsList').hide();
    $('#showjobDetails').hide();
  

});


  </script>












  <script type="text/javascript">
function editJob(JID)
{
 
 var JID_new = JID;
 //alert(JID_new);
  $.ajax({
        type: "POST",
        url: "<?php echo base_url('dashboard/edit_job_post_request')?>",
        data: {'job_id': JID_new},
        success: function (data) 
        {
         // alert(data);
         
          //alert("Your Edit Job Request Send To Admin Successfully!. Please Wait For the Approval.")
               
        }
    });
}
</script>

   




  <script>
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






//selectOptionshorlistdirector
  
function selectOptionshorlistdirector(value)
{
  

//alert("hi");
var status=document.getElementById('Shortlist').value;

//alert(value);
//   var id=jobId;
  // alert(status);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";
  //alert(base_url+value+' '+status);

   $.ajax({

        url: base_url+value+"/"+status,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
           
        location.reload();

          
        }
   });
   // $('#postedJobsList').hide();
   //  $('#showApplications').hide();
}


//selectOptionrejecteddirector
function selectOptionrejecteddirector(value)
{
  

//alert("hi");
var status=document.getElementById('Rejected').value;

//alert(value);
//   var id=jobId;
  // alert(status);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";
  //alert(base_url+value+' '+status);

   $.ajax({

        url: base_url+value+"/"+status,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
           
        location.reload();

          
        }
   });
   // $('#postedJobsList').hide();
   //  $('#showApplications').hide();
}





  function selectOptionpendingdirector(value)
{
  //alert(2);
  var status=document.getElementById('pending').value;

//alert(value);
//   var id=jobId;
  // alert(status);
  var base_url="<?php echo base_url('dashboard/applicationStatusdirector/');?>";
  //alert(base_url+value+' '+status);

   $.ajax({

        url: base_url+value+"/"+status,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
           
        location.reload();

          
        }
   });
   // $('#postedJobsList').hide();
   //  $('#showApplications').hide();
}



  $(".approvedApplicationnew").click(function(e)
{
  // alert(1);
  $("#approvedApplicationListDatanew").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/approvedapplicationlist')?>',
        success:function(response){
           
           $("#approvedApplicationListDatanew").html(response);

           // console.log(response);
        }
   });

});
   $(".rejectedApplicationList").click(function(e)
{
  // alert(1);
  $("#rejectedApplicationListData").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/rejectedApplications')?>',
        success:function(response){
           
           $("#rejectedApplicationListData").html(response);

           // console.log(response);
        }
   });

});

  $(".shortlistedApplicationList").click(function(e)
{
  // alert(1);
  $("#shortlistedApplicationListData").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/shortlistedApplications')?>',
        success:function(response){
           
           $("#shortlistedApplicationListData").html(response);

           // console.log(response);
        }
   });

}); 


</script>
