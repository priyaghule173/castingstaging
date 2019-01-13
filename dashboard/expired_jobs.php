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
            <!-- <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div> -->
            <h4 class="card-title ">Expired Jobs</h4>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Job Title
                        </th>
                        
                        <th>
                          Job Posting Date
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
                          Action
                        </th>
                       
                      </thead>
                      <tbody>
                         <?php  $i =1;
                                        foreach ($result as $key) {
                                        $count = $this->db->select('count(id) as total')->from('job_application')->where('job_id',$key['job_id'])->get()->result_array();

                                          ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td >
                             
                           <?php echo $key['job_title'];?>
                        
                          
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
                          <td class="jobApplications" id="jobApplications">
                          <a href="#" title="View Applications" ><?php echo $count[0]['total'];?>
                          </td>
                         
                           <td>

                             <a style="color:#fff;"  href="<?php echo base_url('dashboard/edit_job_post_request?job_id='.$key['job_id'])?>">

<button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Retain job is disabled get previledges to access." style="
    background: gray;padding: 10px;
" disabled>
                      <i class="material-icons" disabled>edit</i>
                    <div class="ripple-container"></div></button>

                           

<!-- <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Retain job is disabled get previledges to access." style="
    background: gray;padding: 10px;
" disabled>
                      <i class="material-icons" disabled>edit</i>
                    <div class="ripple-container"></div></button> -->

                    <!--       <button type="button" class="btn-default green-btn" id="btnDirJobPost" title="Retain job is disabled get previledges to access."  disabled>Retain Job</button> -->
                      
                    
                          </td>
                          
                        </tr>
                          <?php } ?>
                        
                      </tbody>
                    </table>
            </div>
          </div>
        </div>
      </div>




<!-- 
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 myProfile">
                     <h4 class="card-title mt-0">Expired Job</h4>
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
       
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });

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
