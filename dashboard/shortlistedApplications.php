            <div class="row" >
          
            <div class="col-md-12" id="showShortlist11" style="
    background: white; width: 1000px;
">
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
                          Shortlisted  Date
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
                            <td style="text-align:center;"><b>Currently No Applications Found<b></td>
                             <td></td>
                              <td></td>

                           <?php 
                          } else{  ?>
                          <?php  $i =1;
                             foreach ($result as $key) {
                              //print_r($result);
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
                                           <td style="text-align: center;font-size: 13px;padding: 0px;">
                                            <?php echo $key['status_date']; ?>
                                          </td>
                                          <td style="text-align: center;font-size: 13px;padding: 0px;">
                                           <!-- <form action="<?php  //echo base_url('dashboard/applicationStatus'); ?>" method="post" name="shortlistForm" id="shortlistForm"> -->
                                               <input type="hidden" name="short_id" class="short_id" value="<?php echo $key['id']; ?>" />
                                              <input type="hidden" name="short_job_id" class="short_job_id" value=" <?php echo $key['job_id']; ?>" />
                                                <input type="hidden" name="short_a_id" class="short_a_id" value="  <?php echo $key['a_id']; ?>" />

                                            <div class="form-group">
<button class="btn-applications"  style="
background: linear-gradient(60deg,#ffeb3b,#ffeb3b);
   padding: 5px;
    margin: 0px;
" title="Pending" id="pending" value="pending" data-toggle="modal" data-target="#myModalPendingInShortlist" onclick="openPendingModalInShortlist('<?php echo $key['id']; ?>')" ><i class="fa fa-spinner"></i></button>
<!--  onclick="selectOptionpending(this.value,<?php echo $key['id']; ?>)"
 -->
<button class="btn-applications"  style="
    padding: 5px;
    margin: 0px;
" title="Confirm" id="Approve" value="Approve" data-toggle="modal" data-target="#myModal" onclick="openApproveModalInShortlist('<?php echo $key['id']; ?>')" >  <i class="material-icons" style="
    font-size: 15px;
">done_all</i>
</button>

<!-- <button class="btn-applications" title="Rejected" id="Rejected" style="
    background: #ff007c;padding: 5px;
    margin: 0px;
" value="Rejected" data-toggle="modal" data-target="#myModal2" 
 onclick="selectrejectedApplication1(<?php echo $key['id']; ?>)"><i class="fa fa-trash"></i></button> -->
 <button class="btn-applications" title="Reject" id="Rejected" style="
    background: #ff007c; padding: 5px;
    margin: 0px;
" value="Rejected" data-toggle="modal" data-target="#myModalRejectedInShortlist" 
 onclick="openRejectedModalInShortlist('<?php echo $key['id']; ?>')"><i class="fa fa-trash"></i></button>


<!-- <select class="form-control" onchange="selectOptionShort(this.value,<?php //echo $key['id']; ?>)" class="form-control" id="short_status" name="short_status">
                                                     
    <option value="3">Shortlist</option>
    <option value="1">Approve</option>
    <option value="2">Reject</option>
       
    </select> -->
                                                </div>
                                                 <!-- </form> -->
                                          </td>
                        </tr>
                       <?php  } }?>
                   <!--   </div> -->
                      </tbody>
                    </table>
                  </div>
                </div> <!----table end----->
              </div>
            </div>
          </div>
          
 <script type="text/javascript">
  function openPendingModalInShortlist($value)
  {
     // alert($data);
      // document.getElementById($value);
    document.getElementById("pendingInShortlist").value =$value;
    document.getElementById("myModalPendingInShortlist").showModal();
   //alert(data);
  }
  function openRejectedModalInShortlist($value)
  {
      //alert($value);
      // document.getElementById($value);
    document.getElementById("rejectedInShortlist").value = $value;
    document.getElementById("myModalRejectedInShortlist").showModal();
   //alert(data);
  }


   function openApproveModalInShortlist($value)
  {
//alert($value);
    document.getElementById("ApproveInShortlist").value = $value;
    document.getElementById("myModal").showModal();
   
  }




     function selectrejectedApplicationInShortlist(data)
{

 var dataRejectInShorlist=document.getElementById("rejectedInShortlist").value;
  var base_url="<?php echo base_url('dashboard/reject_Application/');?>";

   $.ajax({

        url: base_url+dataRejectInShorlist,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>

   //        $.ajax({

   //      url:'<?php //echo base_url('dashboard/approvedApplications')?>',
   //      success:function(response){
           
   //         $("#rejectedApplicationList").html(response);
           
   //      }
   // });
       var rejectapp= document.getElementById("showShortlist11").style.width = "1000px";
    $("#showShortlist11").load('<?php echo base_url('dashboard/rejectedApplications/');?>')+rejectapp;
    $("#nav-shortlist-tab").removeClass("active");  
$("#nav-rejected-tab").addClass("active");
             
        }
   });
 
}
     function selectapproveApplication($data)
{
//alert('hiii');
 //$data.preventDefault();
        var validation_status = directorFormValidateVenue();
       //alert(validation_status);
        if(validation_status == true ) {
         // alert('sssssss');
          $("#error-box").hide(); 
          var form = $('form')[0];
          var form_data = new FormData(form);
            
                  form_data.append("date", $('#date').val());    
                  form_data.append("time", $('#time').val()); 
                  form_data.append("place", $('#place').val());
                    form_data.append("venu_add_details", $('#venu_add_details').val());

                  $.ajax({
                    url: '<?php echo base_url('director/Venue_details/'); ?>'+ $data,
                    type: 'POST',              
                    data : form_data,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                  })
                .done(function (res) {
                  console.log(res);
                if(res.status="success"){
                    alert("Venue Updated Successfully.");
   //                  $.ajax({

   //       url:'<?php //echo base_url('dashboard/myprofile')?>',
   //      success:function(response){
   //           var profileDiv1 = document.getElementById('profile_parent_div');
   //          $(profileDiv1).addClass("active");

   //         $("#showEditProfileForm").html(response);

   //          console.log(response);
   //          $('.nav-tabs a[href="#nav-home"]').tab('show');
   //      }
   // });
                     
       //        var prof_div = document.getElementById('prof_div').style.paddingBottom = "0px";
              
      //        $('#prof_div').load(window.location.href + ' #prof_div');
      //        var profileDiv = document.getElementById('profile_parent_div');
      //        profileDiv.classList.remove("show-border");
     
      // document.getElementById('profile_pic').readOnly = true;
    
      // document.getElementById('mobile').readOnly = true;
      // document.getElementById('address').readOnly = true;
      // document.getElementById('pincode').readOnly = true;
      // document.getElementById('city').readOnly = true;
      // document.getElementById('script_name').readOnly = true;
      // document.getElementById('btnDirectorProfile').readOnly = "none";
      // document.getElementById('closeprofile').readOnly = "none";
    

      //   $(".hideImage").hide();
      // $(".hideScript").hide();
      // $(".showScript").hide();
      //   $(".hideSave").hide();
      //    $(".closeprofile").hide();
      
      // $(".hideIcon").show();  
                  }
                  else if(res.status="fail"){
                    $("#error-box").show();            
                    $("#error-box").html(res.reason);
                  }
                  else{
                    console.log("Fail");

                  }

                 // $("#workExperienceView").show();
                });

        }
        
     

 
         else
        {
          alert("Please Enter All The Fields..!!!");
        return false;
        } 

 var dataApproveInShortlist=document.getElementById("ApproveInShortlist").value;
  var base_url="<?php echo base_url('dashboard/approve_application/');?>";

   $.ajax({

        url: base_url+dataApproveInShortlist,
        success:function(response){
       
       <?php echo $this->session->flashdata('message'); ?>
 //  $('#showShortlist').html(div);



   
   //        $.ajax({

   //      url:'<?php //echo base_url('dashboard/approvedApplications')?>',
   //      success:function(response){
           
   //         $("#tabs").html(response);
 
   //      }
   // });
   var app= document.getElementById("showShortlist11").style.width = "1000px";
    $("#showShortlist11").load('<?php  echo base_url('dashboard/approvedapplicationlist/');?>')+app;
     $("#nav-shortlist-tab").removeClass("active");  
$("#nav-approved1-tab").addClass("active");


 
        }

   });
 
   
}

function directorFormValidateVenue()
            {   
                 
var status=true;
  var date=$('#date').val();
  var time=$('#time').val();
  var place=$('#place').val();
    

            if(date.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter time type.<strong>");
                  status = false;
                }
                else if(time.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Time.<strong>");
                  status = false;
                } 
                else if(place.trim() == '') { 
                  $("#error-box").show();            
                  $("#error-box").html("<strong> * Please Enter Your Place.<strong>");
                  status = false;
                } 
                



                return status;
                console.log("validation status is....",status);
              }



     function selectOptionpendingInShortlist(data)
{
   //alert(value);
var dataPndingInShorlist=document.getElementById("pendingInShortlist").value;
  var base_url="<?php echo base_url('dashboard/pending_Application/');?>";
//alert(dataPndingInShorlist);
   $.ajax({

        url: base_url+dataPndingInShorlist,
        success:function(response){

          $.ajax({

        url:'<?php echo base_url('dashboard/approvedApplications')?>',
        success:function(response){
           
           $("#tabs").html(response);
           
        }
   });
       
//        <?php //echo $this->session->flashdata('message'); ?>
//        var pendingapp= document.getElementById("showShortlist11").style.width = "1000px";
//     $("#showShortlist11").load('<?php //echo base_url('dashboard/shortlistedApplications/');?>')+pendingapp;
           
//        // location.reload();
// var nav-pending1-tab=document.getElementById('nav-pending1-tab');
//    alert(nav-pending1-tab);
//    $('#nav-pending1-tab').load(window.location.href+ ' #nav-pending1-tab');
          
        }

   });


 
}
   



</script>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm" >
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-left: -45px;">
         <div class="modal-header">
          <?php  
           ?>
          <h4 class="modal-title">Venue Details</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
         <!---------code here------------>
    
        <div class="row">
            <!-- <div class="col-50">
        
            <div class=col-md-4>
            <label for="cname">Date</label>
            <input type="Date" id="date" name="date" placeholder="Enter Date">
          </div>
          <div class=col-md-4>
            <label for="ccnum">Place</label>
            <input type="text" id="place" name="place" placeholder="Enter Place">
          </div>
          <div class=col-md-4>
            <label for="expmonth">Enter Timings</label>
            <input type="time" id="expmonth" name="expmonth" placeholder="">
          </div>
            <input type="text" id="ApproveInShortlist" value="" name="ApproveInShortlist" placeholder="">
           
          </div>
         -->
         <div class="col-md-12">
   <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Date</label>
      <div class="col-md-6">
        <input type="Date" id="date" name="date" placeholder="Enter Date" class="form-control" >
      </div>
  </div>

  <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Timming</label>
      <div class="col-md-6">
        <input type="time" id="time" name="time" placeholder="Enter Date" class="form-control" >
      </div>
  </div>
</div>
 <div class="col-md-12">
   <div class="form-group row required">
      <label for="staticEmail" class="col-md-5 col-form-label">Enter Place</label>
      <div class="col-md-6">
        <input type="text" id="place" name="place" placeholder="Enter Place" class="form-control" >
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-md-5 col-form-label">Additional Details</label>
      <div class="col-md-6">
        <textarea row="4" cols="25" name="venu_add_details" id="venu_add_details"></textarea>
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
         
          <button type="button"  class="btn-default green-button" data-dismiss="modal"  onclick="selectapproveApplication(<?php echo $key['id']; ?>)">OK</button>          
          <button type="button" class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><!-------Model End---------->
  

  
</div>


            <!-- <div class="col-lg-9">
               <img class="img-responsive" height="240" width="360" src="<?php //echo base_url()?>assets/adminimages/mytokens.jpg">
            </div> -->
  </div>

<script type="text/javascript">
  function showSub()
  {
   // alert(1);
$(".#myModal").show();
  }
</script>          
  <!--------rejected MOdel--------->
  <!-- Modal -->
  <div class="modal fade" id="myModalRejectedInShortlist" role="dialog">
    <div class="modal-dialog modal-sm" >
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-left: -45px;">
         <div class="modal-header">
          <?php  
           ?>
  <!--         <h4 class="modal-title">Reject Application</h4> -->
            <input type="hidden" id="rejectedInShortlist" value="" name="rejectedInShortlist" placeholder="Enter Place">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
         <!---------code here------------>
    
        <div class="row">
            
        
            <div class=col-md-12>
            <label><b>Are You Sure To Reject This Application ?</b></label>
          
         
           
          </div>
        
</div>


         <!------------code end------------------>

        </div>
        <div class="modal-footer">
         
          <button type="button"  class="btn-default green-button" data-dismiss="modal" onclick="selectrejectedApplicationInShortlist(<?php echo $key['id']; ?>)">OK</button>          
          <button type="button" class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><!-------Model End---------->
          <!-- Modal -->
  <div class="modal fade" id="myModalPendingInShortlist" role="dialog">
    <div class="modal-dialog modal-sm" >
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-left: -45px;">
         <div class="modal-header">
          <?php  
           ?>
          <!-- <h4 class="modal-title">Pending Application</h4> -->
            <input type="hidden" id="pendingInShortlist" value="" name="pendingInShortlist" placeholder="Enter Place">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
         <!---------code here------------>
    
        <div class="row">
            
        
            <div class=col-md-12>
            <label><b>Are You Sure..!!! You Want To Pending This Application ?</b></label>
          
         
           
          </div>
        
</div>


         <!------------code end------------------>

        </div>
        <div class="modal-footer">
         
          <button type="button"  class="btn-default green-button" data-dismiss="modal" onclick="selectOptionpendingInShortlist('<?php echo $key['id']; ?>')">OK</button>          
          <button type="button" class="btn-default red-button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><!-------Model End---------->