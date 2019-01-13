<html>
<style type="text/css">
  .navbar.navbar-transparent
  {
    background-color: #000 !important;
  }
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
.badge.badge-success {
    background-color: #4caf50;
        color: white;
}
.badge.badge-danger {
    background-color: #f44336;
        color: white;
}
.badge.badge-pending {
    background-color: #ffc63beb;
        color: white;
}
.badge.badge-applied {
    background-color: #00bcd4;
        color: white;
}
.badge.badge-shorlist {
    background-color: #ff007c;
        color: white;
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
                          
                            <?php  } else { 
                              echo '';  
                            } ?>
                       
            <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
         
            <h4 class="card-title mt-0">Applied Jobs </h4>
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
                        <th style="text-align: center;">
                         Applied Date 
                        </th>
                        <th style="text-align: center;">
                         End Date 
                        </th>
                        
                        <th style="text-align: center;">
                          Application Status 
                        </th>
                       
                       
                      </thead>
                      <tbody>

 <?php 
  //  print_r($result[0]);
//foreach ($job as $value) {

 
          ?>
                        <?php  if(count($job)==0)
                          {?>
                            <td></td>
                             <td></td>
                              <td></td>
                            <td style="text-align:center;">Currently No Applications Found</td>
                             <td></td>
                            

                           <?php 
                          } else{  ?>
                          <?php  $i =1;
                                       // print_r($result[0]);
                             foreach ($job as $key) {

                           
                           ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                                          <td><?php echo $key['job_title'];?></td>
                                          <!-- <td>
                                            <?php echo $key['name']; ?>
                                          </td>
                                           <td>
                                            <?php echo $key['city']; ?>
                                          </td> -->
                                           <td style="text-align: center;">
                                            <?php echo $key['applied_date']; ?>
                                          </td>
                                          
                                          <td style="text-align: center;">
                                            <?php echo $key['job_post_expired_date']; ?>
                                          </td>
                                          <td style="text-align: center;">
                                            <?php  $key['status']; 
                                            if($key['status']==0) {?>
                                           <span class="badge badge-pill badge-pending"> <?php echo "Pending"; ?></span>
                                           <?php  }elseif ($key['status']==1) { ?>
                                              <span class="badge badge-pill badge-success"><?php echo "Approved"; ?></span>   
                                            <?php } elseif ($key['status']==2){?> 
                                              <span class="badge badge-pill badge-danger"><?php echo "Rejected"; ?></span> 
                                              <?php }elseif($key['status']==3){?>
                                                <span class="badge badge-pill badge-shorlist"><?php echo "Shortlisted"; ?></span> 
                                                
                                             <?php  }
                                              else {?>
                                                <span class="badge badge-pill badge-applied"><?php echo "Applied"; ?></span>
                                                <?php }?>
                                              
                                              
                                          </td>
                                          <td>
                                            <!--   <form action="<?php  echo base_url('dashboard/applicationStatus'); ?>" method="post" name="selectValueForm" id="selectValueForm"> -->
                                               <!-- <input type="hidden" name="id" id="id" value=" <?php echo $key['id']; ?>" />
                                            
                                                <input type="hidden" name="a_id" id="a_id" value="  <?php echo $key['a_id']; ?>" /> -->


                                             <!--   <div class="form-group">
                                                   
                                                  <select onchange="selectOptionpending(this.value,<?php echo $key['id']; ?>)" class="form-control" id="status" name="status">
                                                     <option value="0">Pending</option>
                                                   <option value="3">Shortlist</option>
                                                    <option value="2">Reject</option>
       
                                                  </select>
                                                </div> -->
                                              </form>
                                          </td>
                        </tr>
                       <?php  } }?>

                        
                      </tbody>
                    </table>
           
            </div>
          </div>
        </div>
      </div>

          </div>
          <div class="showjobDetails" id="showjobDetails"></div>
           <div class="showApplications" id="showApplications"></div>
         
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
     
        <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Expire Job Post</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
        <div class="modal-body">
         Do You Want To Expire Your Job Post?
        </div>
        <form method="get" action="<?php  echo base_url('dashboard/delete_job_post'); ?>" name="expireForm" id="expireForm">
        <input type="hidden" name="job_id" id="job_id"  />
       
        
      
        <div class="modal-footer">

                          <button type="button" class="btn-default green-button" id="btnDirJobPost" onclick="expireJobMy()">Expire Job</button>
                  
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
     
      md.initDashboardPageCharts();

    });
    
    function myajax(jobId)
{
  var id=jobId;
 
  var base_url="<?php echo base_url('dashboard/job_details/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetails").html(response);

          
        }
   });
    $('#postedJobsList').hide();
     $('#showApplications').hide();
}


$(".jobTitle").click(function(e)
{
  
  $("#showjobDetails").show();
    e.preventDefault();
    $.ajax({

        url:'<?=base_url('dashboard/job_details?job_id=').$key['job_id'] ?>',
        success:function(response){
           
           $("#showjobDetails").html(response);

           
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
         
               
        }
    });
}
</script>

</html>