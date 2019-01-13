<style type="text/css">
  .navbar.navbar-transparent
  {
    background-color: #000 !important;
  }
</style>


<!-- Tabs -->
<section id="tabs">
  <div class="container">
       <div class="row">
          
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 "> Job Applications</h4>
                   
                </div>
              </div>
            </div>
          </div>
    <!-- <h2 class="section-title ">Job Applications</h2> -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab-app" role="tablist">
             
             <a class="nav-item nav-link active" id="nav-pending1-tab" data-toggle="tab" href="#nav-pending1" role="tab" aria-controls="nav-pending1" aria-selected="true">Pending Applications</a>

               <a class="nav-item nav-link shortlistedApplicationList" id="nav-shortlist-tab" data-toggle="tab" href="#nav-shortlist" role="tab" aria-controls="nav-shortlist" aria-selected="false">Shortlisted Applications</a>

            <a class="nav-item nav-link approvedApplicationnew" id="nav-approved1-tab" data-toggle="tab" href="#nav-approved1" role="tab" aria-controls="nav-approved1" aria-selected="false">Confirmed Applications</a>
           
            <a class="nav-item nav-link rejectedApplicationList" id="nav-rejected-tab" data-toggle="tab" href="#nav-rejected" role="tab" aria-controls="nav-rejected" aria-selected="false">Rejected Applications</a>
            
          
          
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="row">
          
            <div class="col-md-12" style="
    background: white;
" >
              <div class="card card-plain" style="
    margin-top: -16px !important;
">
           <!--      <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0 text-center">Approved Job Applications</h4> -->
                   <?php 
                        if($this->session->flashdata('message')){ ?>

                          <div class="col-lg-12">
                              <div class="alert alert-success alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong> <?php   echo $this->session->flashdata('message');    ?></strong> 
                            </div>
                          </div>
                              <!-- echo $this->session->flashdata('message');   -->
                            <?php  } else { 
                              echo '';  
                            } ?>
                <!-- </div> -->

                       
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="" style="color: red;">
                        <th>
                          ID
                        </th>
                        <th>
                          Job Title 
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
                      
                         <th style="text-align: center;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php  if(count($result)==0)
                          {?>
                            <td></td>
                             <td></td>
                              <td></td>
                            <td style="text-align:center;"><b>Currently No Applications Found</b></td>
                             <td></td>
                              <td></td>

                           <?php 
                          } else{  ?>
                          <?php  $i =1;
                             foreach ($result as $key) {
                           ?>
                        <tr>
                          <td><?php echo $i++;?></td>
                                          <td style="font-size: 13px;padding: 0px;"><?php echo $key['job_title'];?></td>
                                          <td style="text-align: center;font-size: 13px;padding: 0px;">
                                            <?php echo $key['name']; ?>
                                          </td>
                                           <td style="text-align: center;font-size: 13px;padding: 0px;">
                                            <?php echo $key['city']; ?>
                                          </td>
                                           <td style="text-align: center;font-size: 13px;padding: 0px;">
                                            <?php echo $key['applied_date']; ?>
                                          </td>
                                          
                                          <td style="text-align:center;font-size: 13px;padding: 0px;"><!-- 
                                              <form action="<?php  //echo base_url('dashboard/applicationStatus'); ?>" method="post" name="selectValueForm" id="selectValueForm">


                                                 -->
                                               <input type="hidden" name="id" id="id" value=" <?php echo $key['id']; ?>" />
                                            
                                                <input type="hidden" name="a_id" id="a_id" value="  <?php echo $key['a_id']; ?>" />


                                               <div class="form-group">
                                                  
<!-- <button class="btn-applications" title="Pending" id="pending" value="pending" data-toggle="modal" style="
    background: linear-gradient(60deg,#ffeb3b,#ffeb3b); padding: 5px;
    margin: 0px;
" data-target="#myModal"  onclick="selectOptionpending(this.value,<?php echo $key['id']; ?>)" ><i class="fa fa-spinner"></i></button> -->

<!-- </button> -->
  <button class="btn-applications" title="Shortlist" id="Shortlist" style="
    padding: 5px;
    margin: 0px;
" value="Shortlist" data-toggle="modal" data-target="#myModal1" 
 onclick="selectshortlistedApplication(<?php echo $key['id']; ?>)">  <i class="fa fa-check"></i>
</button>

<button class="btn-applications" title="Rejected" id="Rejected" style="
    background: #ff007c; padding: 5px;
    margin: 0px;
" value="Rejected" data-toggle="modal" data-target="#myModal2" 
 onclick="selectrejectedApplication('<?php echo $key['id']; ?>')"><i class="fa fa-trash"></i></button>

  
 










                                                  <!-- <select onchange="selectOptionpending(this.value,<?php //echo $key['id']; ?>)" class="form-control" id="status" name="status">
                                                     <option value="0">Pending</option>
                                                   <option value="3">Shortlist</option>
                                                    <option value="2">Reject</option>
       
                                                  </select> -->
                                                </div>
                                             <!--  </form> -->
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


          
          </div>
        <div class="tab-pane fade" id="nav-approved1" role="tabpanel" aria-labelledby="nav-approved1-tab">
           <div id="approvedApplicationListDatanew"></div>

          </div>
          <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">
             <div id="rejectedApplicationListData"></div>
          </div>
          <div class="tab-pane fade" id="nav-shortlist" role="tabpanel" aria-labelledby="nav-shortlist-tab">
             <div id="shortlistedApplicationListData"></div>
          </div>
         
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->
<script type="text/javascript">

  function selectOptionpending(value,data)
{
//alert(value);
 // var id=jobId;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/applicationStatus/');?>";

   $.ajax({

        url: base_url+data+"/"+value,
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

//   function selectOptionpending(value,data)
// {

   $(".rejectedApplicationList").click(function(e)
{
  //alert(1);
  $("#rejectedApplicationListData").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/rejected_Applications')?>',
        success:function(response){
           
           $("#rejectedApplicationListData").html(response);

           // console.log(response);
        }
   });

});


// shortlistedApplications

  function selectshortlistedApplication(data)
{
//alert(data);
 // var id=jobId;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/shortlist_Application/');?>";

   $.ajax({

        url: base_url+data,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
           
        location.reload();

          
        }
   });
   // $('#postedJobsList').hide();
   //  $('#showApplications').hide();
}


//end


  function selectrejectedApplication(data)
{
//alert(data);
 // var id=jobId;
 // alert(id);
  var base_url="<?php echo base_url('dashboard/rejected_application/');?>";

   $.ajax({

        url: base_url+data,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
           
        location.reload();

          
        }
   });
   // $('#postedJobsList').hide();
   //  $('#showApplications').hide();
}





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
<script type="text/javascript">
function selectOption(value)
{
    // alert(value);
   
    document.getElementById("selectValueForm").submit();

}
</script>
