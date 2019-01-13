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
  .hiden-bg-btn
{
    background-color: unset;
    border: unset;
    color: green;
    cursor: pointer;
}
.btn-applications1:hover {
    background-color: green;
}
.btn-applications1 {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}
</style>
          <div class="row" id="postedJobsList">
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
                       
            <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
             <!-- <i class="material-icons">assignment</i> -->
            <h4 class="card-title mt-0">Job Applications</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <!--Table starts-->
              <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Job Title
                        </th>
                        <th>
                          Job Post Date 
                        </th>
                        <th>
                         Application Deadline 
                        </th>
                        
                        <th>
                          Job Status 
                        </th>
                         <th>
                          Application(s)
                        </th>
                        <th>
                          Actions
                        </th>
                       
                      </thead>
                      <tbody>
                         <?php  $i =1;
                                        foreach ($result as $key) {
                                          // print_r(expression)
                                        $count = $this->db->select('count(id) as total')->from('job_application')->where('job_id',$key['job_id'])->get()->result_array();

                                          ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td >
                          
                             <a title="View" onclick="myajax('<?php echo $key['job_id']; ?>')" style="
    cursor: pointer;
    color: darkgreen;
    font-weight: 400;
">
                           <?php echo $key['job_title'];?>
                          
                           </a>

                          </td>
                          <td class="jobDate" id="jobDate">
                             

                        <?php echo $key['job_post_date'];?> 
                          <span class="badget-text"></span>
                           

                          </td>

                            <td class="expDate" id="expDate">
                        
                           <?php echo $key['job_post_expired_date'];?>
                          <span class="badget-text"></span>
                           

                          </td>
                         
                          <td>
                            <?php if($key['job_status']==0)
                                                 echo "Pending";
                                                  elseif ($key['job_status']==1) 
                                                   echo "Approved";
                                                  elseif ($key['job_status']==2)
                                                    echo "Rejected";
                                                  else
                                                    echo "Expired";    
                                            ?>
                          </td>
                          <td class="jobApplications1" id="jobApplications1">


 <!-- <a title="View" onclick="myajax('<?php echo $key['job_id']; ?>')" style="
    cursor: pointer;
    color: darkgreen;
    font-weight: 400;
">
                           <?php echo $key['job_title'];?>
                          
                           </a> -->

                          <a  onclick="myajaxview('<?php echo $key['job_id']; ?>')" title="View Applications" ><?php echo $count[0]['total'];?>
</a>
                          </td>
                         
                          <td class="w100 td-actions text-right">

<!-- <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Edit job is disabled get previledges to access." style="
    background: gray;
">
                      <i class="material-icons">edit</i>
                    <div class="ripple-container"></div></button> -->


                            <a style="color:#fff;"  href="<?php echo base_url('dashboard/edit_job_post_request?job_id='.$key['job_id'])?>">
                          <button type="button" class="btn btn-sm btn-applications1" id="btnDirJobPost" style="padding: 0.5rem" title="Edit job is disabled get previledges to access."  disabled=""><i class="fa fa-edit" style="font-size: 0.9rem"></i></button>
                        </a>
                       
                       <!--  <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Expire job" data-toggle="modal" data-target="#myModal" onclick="myId('<?php echo $key['job_id']; ?>')">
<i class="fa fa-hourglass"></i>
                      
                    <div class="ripple-container"></div></button> -->


                        
               <button type="button" style="padding: 0.5rem" class="btn btn-sm btn-applications1" id="btnDirJobPost" data-toggle="modal" data-target="#myModal" onclick="myId('<?php echo $key['job_id']; ?>')">
<i class="fa fa-times-circle" style="font-size: 0.9rem"></i></button>
                          </td>
                          
                        </tr>
                          <?php } ?>
                        
                      </tbody>
                    </table>
              <!--Table ends-->
            </div>
          </div>
        </div>
      </div>

            <!-- <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 myProfile">
                     <h4 class="card-title mt-0">Job Applications</h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 myProfile text-right">
                  <a  href="<?php //echo base_url('dashboard/expiredJobs'); ?>">
                  <button class="btn background-green">  Expired Jobs</button>
                </a>
                </div>
              </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="showjobDetails" id="showjobDetails"></div>
           <div class="showApplications" id="showApplications"></div>
           
 
          <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Expire Job Post</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Do You Want To Expire Your Job Post?
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/delete_job_post'); ?>" name="expireForm" id="expireForm">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
        <!-- Modal footer -->
        <div class="modal-footer">

                        <!-- <a href="<?php  //echo base_url('dashboard/delete_job_post?job_id=').$key['job_id'] ?>" title="Expire job"> -->
                          <button type="button" class="btn-default green-button" id="btnDirJobPost" onclick="expireJobMy()">Expire Job</button>
                        <!-- </a> -->
          <button type="button"  class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
         </form>
        
      </div>
    </div>
  </div>
           
           
       
  <script>
      function expireJobMy()
    {
      var myIdVal=document.getElementById('job_id').value;
      document.getElementById("expireForm").submit();
     
    
    }
    function myId(data)
    {
    
       document.getElementById('job_id').value=data;
    }
  
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    
    function myajaxview(jobId)
{
  var id=jobId;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/view_jobtitle_applications/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
         $("#showApplications").html(response);

          
        }
   });
  $('#postedJobsList').hide();
  $('#job_title_application').hide();
  // viewjobApplications
    $('#showjobDetails').hide();
}

    function myajax(jobId)
{
  var id=jobId;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/job_details/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetails").html(response);

          
        }
   });
    $('#postedJobsList').hide(); 
    $('#job_title_application').hide();
        $('#viewprofileasfromartist1').hide();

    
     $('#showApplications').hide();
}


$(".jobTitle").click(function(e)
{
  // alert(1);
  $("#showjobDetails").show();
    e.preventDefault();

    $.ajax({

        url:'<?=base_url('dashboard/job_details?job_id=').$key['job_id'] ?>',
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
  console.log("$key[job_id]", $key['job_id']);
  alert(9999);
  $("#showApplications").show();
    e.preventDefault();

    $.ajax({
   url:'<?=base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
       // url:'<?php //echo base_url('dashboard/view_jobtitle_applications?job_id=').$key['job_id'] ?>',
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
 alert(JID_new);
  $.ajax({
        type: "POST",
        url: "<?php echo base_url('dashboard/edit_job_post_request')?>",
        data: {'job_id': JID_new},
        success: function (data) 
        {
          alert(data);
         
          //alert("Your Edit Job Request Send To Admin Successfully!. Please Wait For the Approval.")
               
        }
    });
}
</script>
