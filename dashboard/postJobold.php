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
                          <label class="bmd-label-floating">Title Of Job Post</label>
                          <input type="text" class="form-control" id="job_title" name="job_title">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                       <select class="form-control" id="artistCategory" name="artistCategory" style="width:100%;">
                       <option value="none" selected>Select The Type Of Artist Category</option>
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
                         <!--  <label class="bmd-label-floating">Project Type</label> -->
                            <select name="project_type" id="project_type" class="form-control">
                              <option value="none" selected>Project Type</option>
                                <option value="competition">Competition</option>
                                <option value="digital" >Digital</option>
                                <option value="web_series" >Web Series</option>
                                 <option value="movies" >Movies</option>
                                <option value="short_films" >Short films</option>
                                 <option value="theatre" >Theatre</option>
                                  <option value="reality_shows" >Reality Shows</option>
                                  <option value="stage" >Stage/Live Performances</option>
                                  <option value="tv" >TV</option>
                                  <option value="tvc_ads" >TVC/ads</option>
                                  <option value="music_videos" >Music Videos</option>
                                 
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
                          <label class="bmd-label-floating">Age Group From</label>
                          <input type="text" class="form-control" id="ageFrom" name="ageFrom">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age Group Upto</label>
                          <input type="text" class="form-control" id="ageUpto" name="ageUpto">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Languages Known</label>
                          <input type="text" class="form-control" id="languages" name="languages">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Location</label>
                          <input type="text" class="form-control" id="location" name="location">
                        </div>
                      </div>
                    </div>




                    <!-- <div class="row">
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

 -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Production House Name</label>
                          <input type="text" class="form-control" id="production_house_name" name="production_house_name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Director Name</label>
                          <input type="text" class="form-control" id="director_name" name="director_name">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Producer Name</label>
                          <input type="text" class="form-control" id="producer_name" name="producer_name">
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
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shoot/Event Date</label>
                          <input type="date" class="form-control" onchnage="showDate('this.value')" id="shoot_date" name="shoot_date">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shoot Duration</label>
                          <input type="text" class="form-control" id="shoot_duration" name="shoot_duration">
                        </div>
                      </div>
                    </div>


                      <div class="row">
                     <div class="picture-container" style="position: relative;top: 17%;">
                                          <div class="picture text-center">
                                              
                                              <img src="<?php echo base_url()?>assets/images/profile_pic/" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/>
                                            
                                                
                                              <!--    <img src="<?php //echo base_url()?>assets/images/profile_pic/jobprofile.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 75%;height: 75%;margin: 0 auto;border-radius: 10%;"/> -->
                                            

                                              <div class="form-group text-center">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                                        <span class="input-group-btn" style="margin: 0 auto;">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="job_image"  id="job_image" class="form-control">
                                         </span>
                                         </span>
            
                                          </div>
                                         <img id='img-upload'/>
                                      </div>
                                          </div>
                                         
                                      </div>


                                        <div class="form-group text-center">
                                        <div class="form-group">
                                        <label>Upload Script</label>
                                         <div class="input-group">
                                        <span class="input-group-btn ">
                                         <span class="btn btn-default btn-file addscript">
                                          Browse… <input type="file" name="script_name"  id="script_name" accept=".pdf,.doc" class="form-control">
                                         </span>
                                         
                                         </span>
            
                                          </div>
                                         <img id='img-upload'/>
                                      </div>
                                    </div>
                                        </div>
                      <!-- <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Imge</label>
                          <input type="text" class="form-control" id="location" name="location">
                        </div>
                      </div>
                    </div>

 -->

          <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label class="bmd-label-floating">Gender Who Can Apply For This Job</label>

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
          <label class="bmd-label-floating">Previous Experience Required ?</label>
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
    $('.addfiles').on('click', function() { $('#job_image').click();return false;});
$('.addscript').on('click', function() { $('#script_name').click();return false;});
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
              form_data.append('job_image', $('input[type=file]')[0].files[0]);   
                form_data.append('script_name', $('input[type=file]')[1].files[0]); 

                form_data.append("job_title", $('#job_title').val());    
                form_data.append("artistCategory", $('#artistCategory').val()); 
                form_data.append("jobDescription", $('#jobDescription').val());
                form_data.append("ageFrom", $('#ageFrom').val());    
                form_data.append("ageUpto", $('#ageUpto').val()); 
                form_data.append("languages", $('#languages').val());
                form_data.append("location", $('#location').val()); 
                form_data.append("date", $('#date').val());

                form_data.append("project_type", $('#project_type').val());
                form_data.append("production_house_name", $('#production_house_name').val());
                form_data.append("director_name", $('#director_name').val());
                form_data.append("producer_name", $('#producer_name').val());
                form_data.append("shoot_date", $('#shoot_date').val());
                form_data.append("shoot_duration", $('#shoot_duration').val());



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
              var project_type=$("#project_type").val();
              var jobDescription=$("#jobDescription").val();
              var ageFrom=$("#ageFrom").val();
              var shoot_duration=$("#shoot_duration").val();
              var ageUpto=$("#ageUpto").val();
              var languages=$("#languages").val();
              var location=$("#location").val(); 
               var production_house_name=$("#production_house_name").val();
              var director_name=$("#director_name").val();
              var producer_name=$("#producer_name").val();   
              var date=$("#date").val();
               var shoot_date=$("#shoot_date").val();
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
              else if(project_type == 'none') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Select Project Type.<strong>");
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

                else if(production_house_name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter production house Name<strong>");
                status = false;
              }
              else if(director_name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter director name<strong>");
                status = false;
              }
              else if(producer_name.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter producer name<strong>");
                status = false;
              }
              

              else if(date=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please enter date.<strong>");
                status = false;
              } 

              else if(shoot_date=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please enter Shoot date.<strong>");
                status = false;
              } 
              else if(shoot_duration.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Shoot Duration<strong>");
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