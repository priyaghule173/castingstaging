  <?php  include_once('sideBar.php'); ?>
          <div class="row">
            <div class="col-md-8" style="margin: 0 auto;">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Post A Job</h4>
                  
                </div>
                <div class="card-body">
                  <form class="postjob-form" action="" method="post">

                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title of Job Post</label>
                          <input type="text" class="form-control" id="job_title" name="job_title">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                       <select class="form-control" id="artistCategory" name="artistCategory" style="width:100%;">
                       <option value="none" selected>Select The Type of Artist Category</option>
                         <?php  $talent = $this->db->select('*')->from('talent')->get()->result_array();
                       foreach ($talent as $key) {
                       ?>
                          <option value="<?php echo $key['talent_name']?>"><?php echo $key['talent_name'];?></option>
                          <?php } ?>
                        </select>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Job Description</label>
                          <textarea class="form-control" rows="5" id="jobDescription" name="jobDescription"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age Group from</label>
                          <input type="text" class="form-control" id="ageFrom" name="ageFrom">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age Group upto</label>
                          <input type="text" class="form-control" id="ageUpto" name="ageUpto">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Languages Known</label>
                          <input type="text" class="form-control"  id="languages" name="languages">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Location</label>
                          <input type="text" class="form-control" id="location" name="location">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Job Post Date</label>
                          <input type="date" class="form-control" onchnage="showDate('this.value')" id="date" name="date">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                      
                          <label class="bmd-label-floating">Expired Date</label>
                            <?php 
                            // $dateStart= date("Y-m-d", strtotime(11-05-2018));
                        $date = new DateTime(); // Y-m-d
                       $date->add(new DateInterval('P30D'));
                        $expire_date = $date->format('Y-m-d');
                         // $expire_date = $date->format('Y-m-d') . "\n";
                       ?>
                          <input type="date" readonly class="form-control" value="<?php echo $expire_date; ?>" id="Expired_date" name="Expired_date">
                        </div>
                      </div>
                    </div>
          <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label class="bmd-label-floating">GENDER WHO CAN APPLY FOR THIS JOB</label>

          <class="list-inline">
             <div class="row">
          <div class="col-lg-4">
              <label class="chkcontainer">
                   Male
                  <input  type="checkbox" name="gender[]" value="male"  id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              
          </div>
           <div class="col-lg-4">
             <label class="chkcontainer">
                   Female
                  <input type="checkbox" name="gender[]" value="female"  id="gender">
                  <span class="checkmark"></span>
               </label>
          </div>
           <div class="col-lg-4">
             <label class="chkcontainer">
                   Other
                  <input type="checkbox" name="gender[]" value="neutral" id="gender">
                  <span class="checkmark"></span>
                </label>
          </div>
         </div>
                                                   
        </div>                                          
        </class="list-inline">
      </div>
    </div>
          <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
          <label class="bmd-label-floating">PREVIOUS EXPERIENCE REQUIRED ?</label>
            <class="list-inline">
            <div class="row">
              <div class="col-lg-6">
               <label class="radiocontainer">Yes
              <input type="radio" value="1" checked="checked" name="isExperienceRequired"  id="isExperienceRequired">
              <span class="radiocheckmark"></span>
            </label>
              </div>
              <div class="col-lg-6">
                  <label class="radiocontainer">No
            <input type="radio" value="0" name="isExperienceRequired" id="isExperienceRequired">
            <span class="radiocheckmark"></span>
          </label>
              </div>
            </div>
             
            
         
         </class="list-inline">
         </div>
         </div>

    </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="form-group">
      <h4 class="bmd-label-floating">Audition Required or Not?</h4>
      <class="list-inline">
       <div class="row">
        <div class="col-lg-6">
        <label class="radiocontainer">Yes
        <input type="radio" value="1" checked="checked" name="isAuditionRequired" id="isAuditionRequired">
        <span class="radiocheckmark"></span>
      </label>
        </div>
         <div class="col-lg-6">
           <label class="radiocontainer">No
        <input type="radio" value="0" name="isAuditionRequired" id="isAuditionRequired">
        <span class="radiocheckmark"></span>
      </label>
        </div>
       </div>
        
      
    
    </class="list-inline">
    </div>                          
    </div>
  </div>
        <div id="error-box"></div>
                    <button type="button"  class="btn btn-primary pull-right" id="btnDirJobPost">Post This Job</button>
                    <div class="clearfix"></div>                                                   
      </form>
                </div>
              </div>
            </div>


  
    </div>
 
 
  <script type="text/javascript">
/*function showDate(ID)
{
 var date_post = ID;
 alert(date_post);
  $.ajax({
        type: "POST",
        url: "<?php //echo base_url('director/find_expired_date')?>",
        data: {'date_post': date_post},
        success: function (data) 
        {
          alert(data);
                        
        }
    });
}*/

    $("#btnDirJobPost").click(function(){
      var validation_status = directorFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
        // form_data.append("directorId", $('#directorId').val());
                form_data.append("job_title", $('#job_title').val());    
                form_data.append("artistCategory", $('#artistCategory').val()); 
                form_data.append("jobDescription", $('#jobDescription').val());
                form_data.append("ageFrom", $('#ageFrom').val());    
                form_data.append("ageUpto", $('#ageUpto').val()); 
                form_data.append("languages", $('#languages').val());
                form_data.append("location", $('#location').val()); 
                form_data.append("date", $('#date').val());
                 form_data.append("Expired_date", $('#Expired_date').val());
                $('input[name="gender[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('gender[]', value);
                });
                form_data.append("isExperienceRequired", $('input[name="isExperienceRequired"]:checked').val()); 
                form_data.append("isAuditionRequired", $('input[name="isAuditionRequired"]:checked').val());
                $.ajax({
                  url: '<?php echo base_url('director/director_postjob_data/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                
                console.log(res.status);
                if(res.status="success"){
                  alert("Job Posted Successfully.");
                  window.location.href="<?php echo base_url('dashboard')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                  //alert(res);             
              });
      }
      function directorFormValidate()
          {   
              var status = true;         
              var job_title=$("#job_title").val();
              var artistCategory=$("#artistCategory").val();
              var jobDescription=$("#jobDescription").val();
              var ageFrom=$("#ageFrom").val();
              var ageUpto=$("#ageUpto").val();
              var languages=$("#languages").val();
              var location=$("#location").val();    
              var date=$("#date").val();
              var gender=$("#gender").val();
              var isExperienceRequired=$("#isExperienceRequired").val();
              var isAuditionRequired=$("#isAuditionRequired").val();    
              if(job_title.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Title.<strong>");
                status = false;
              }            
              else if(artistCategory == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Select Artist Category.<strong>");
                status = false;
              }     
              else if(jobDescription.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Description<strong>");
                status = false;
              } 
              else if(ageFrom.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Age from<strong>");
                status = false;
              }
              else if(ageUpto.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Age Upto<strong>");
                status = false;
              } 
              else if(ageFrom>=ageUpto) { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Age from can't be greater than Age upto<strong>");
                status = false;
              } 
              else if(languages.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please add Languages<strong>");
                status = false;
              } 
              else if(location.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Location<strong>");
                status = false;
              }
              else if(date=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please enter date.<strong>");
                status = false;
              } 
              else if(gender=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
                status = false;
              }
              return status;
              console.log(status);
          }

            
        }); 
  </script>