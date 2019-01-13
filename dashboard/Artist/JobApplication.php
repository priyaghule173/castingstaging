<html>  


                              <div class="block" id="jobApplications" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row" id="postedJobsList">
                                               
          <?php 
    $cardcount=(count($job));
         
          $this->session->set_userdata('cardcount',$cardcount);
foreach ($job as $value) {

 //print_r($value);
          ?>

             <div class="col-md-3" style="margin: 25px;">
            <div class="simple-table" style="background-color: white;    border-radius: 5px;width: 265px;height: 360px;">
               <div class="simple-table-top" style="    border-bottom: 1px solid lightgrey;">



  <div class="picture-container" style="position: relative;top: 17%;">
                                         <div class="picture text-center">
                                              <?php if($value['job_image']) { ?>
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['job_image']; ?>" class="pictu/re-src" id="blah" title="" alt="" style="      width: 235px;
    height: 138px;
   /* border: 1px solid lightgrey;*/
    border: height:9px;
    margin: 11px;"/>
                                            <?php }?>

                                           
                                        </div>
                                         
                                      </div>




           <!--  <img src="assets/images/redChili.jpg" alt="" style="    width: 100%;" /> -->
                      <div class="table-top-title">
                                                           
                           </div>
                
                            </div>
    <div class="simple-table-bottom" style="    padding-bottom: 16px;    background-color: white;    height: 180px;">
       <h5 style="font-size: 16px;padding-top: 17px;
    font-family: montserrat;text-align:center;" class="jobtitle">
      <!--   <?php echo 'Job Title:';?> -->
   <?php  echo character_limiter ($value['job_title'], 15);  ?>
   
                  </h5>
                 <p  style="font-size: 14px;
    font-family: inherit;text-align:center;padding-left: 20px;
    padding-right: 20px;
    height: 22px;"  class="jobdesc">
   
   <?php  
   $string = character_limiter($value['job_desc'],50);
   echo $string;
  ?>
   
                  </p> 
            <p style="padding: 20px;margin-bottom: -15px;"><h5  style="font-size: 14px;
    font-family: inherit; text-align:center;"  class="jobdesc">
        <?php echo 'Age Group:';?>
   <?php echo $value['age_from'];  ?>
   <?php echo "-" .$value['age_upto'];  ?>
   
                  </h5>
                      </ul>
                      <div class="col-md-12" style="text-align: center;padding-bottom: 13px;    
    position: absolute;
    bottom: 0;
    /* padding-top: 6px; */
    adding-bottom: 6px;
    padding-bottom: 20px;">
                       <button   onclick="myJob('<?php echo $value['job_id']; ?>')" style="    margin-left: 62px;
    background-color: #ff007c;
    border-radius: 6px;
    border: unset;
    color: #fff;
    padding: 7px;
    font-size: 10px;
    margin: 0 auto;
    text-align: center;
    /* padding-left: 7px; */
    padding-top: 4px;
    padding-bottom: 4px;

" >VIEW JOB


                          
                           </button>
                         </div>
           
                                                      </div>
                                                   </div>
                                                  
                                                </div>
                                              

                                           <?php } ?>
                                             </div>
                                          </div>
                                        
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           
<script type="text/javascript">
                            
 function myJob(jobId)
{
//alert(jobId);

var id=jobId;
 
  var base_url="<?php echo base_url('dashboard/artist_job_details/');?>";

   $.ajax({

        url: base_url+id,
        success:function(response){
           
           $("#showjobDetailsartist").html(response);

          
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

        url:'<?=base_url('dashboard/artist_job_details?job_id=').$value['job_id'] ?>',
        success:function(response){
           
           $("#showjobDetails").html(response);

        }
   });
    $('#postedJobsList').hide();
     $('#showApplications').hide();
  

});


$(".jobApplications").click(function(e)
{
 
  $("#showApplications").show();
    e.preventDefault();
    $.ajax({

        url:'<?php echo base_url('dashboard/view_jobtitle_applications?job_id=').$value['job_id'] ?>',
        success:function(response){
           
           $("#showApplications").html(response);

        }
   });
    $('#postedJobsList').hide();
    $('#showjobDetails').hide();
  

});
                           </script>


                           