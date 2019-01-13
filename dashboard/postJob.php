<style>
.scriptclass
{
display:none;
}
</style>
  <div class="row">
            <div class="col-lg-12" style="margin: 0 auto;">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Post A Job</h4>
                </div>
                <div class="card-body">
                  <form class="postjob-form" action="" method="post">
                     <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group" title="Movie Name/Web Series Name">
                          
                          <label class="bmd-label-floating">Job Title</label>
                            <i class="material-icons"  style="color: black;font-size: larger;font-weight: initial;">error_outline</i>
                          <input type="text" class="form-control" id="job_title" name="job_title" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group" title="Project Name">
                          
                          <label class="bmd-label-floating">Project Name</label>
                            <i class="material-icons"  style="color: black;font-size: larger;font-weight: initial;">error_outline</i>
                          <input type="text" class="form-control" id="project_name" name="project_name" required>
                        </div>
                      </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                 <label class="bmd-label-floating">Production House Name</label>
                                 <input type="text" class="form-control" id="production_house_name" name="production_house_name" required>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                          <label class="bmd-label-floating">Director Name</label>
                          <input type="text" class="form-control" id="director_name" name="director_name" required>
                        </div></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <div class="form-group">
                          <label class="bmd-label-floating">Producer Name</label>
                          <input type="text" class="form-control" id="producer_name" name="producer_name" required>
                        </div>
                      </div>
                          </div>
                        </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                          
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="form-group">
                          <label class="bmd-label-floating">Age Group From</label>
                         <!--  <input id="storeId"  title="Must be an integer number" type="number" > -->

                          <input type="Number" min="0" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" step="1" class="form-control" id="ageFrom" name="ageFrom" required>
                        </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                          <label class="bmd-label-floating">Age Group Upto</label>
                          <input type="Number" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" step="1" class="form-control" id="ageUpto" name="ageUpto" required>
                        </div>
                            </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                            </div>
                          </div>
                        </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                       <select class="form-control" id="artistCategory" name="artistCategory" style="width:100%;" required>
                       <option value="none" selected>Select The Type Of Artist Category</option>
                         <?php  $talent = $this->db->select('*')->from('talent')->get()->result_array();
                       foreach ($talent as $key) {
                       ?>
                          <option value="<?php echo $key['talent_name']?>"><?php echo $key['talent_name'];?></option>
                          <?php } ?>
                        </select>
                        </div>
                      

                        <div class="form-group" style="margin-top: 51px;">
                        <select name="languages"  class="form-control" id="languages" class="form-control"  multiple="multiple" style="height: 50%" title="Press Control Or Shift To select Multiple Languages">
                              <option value="none" selected>Languages known</option>
                                <option value="hindi">Hindi</option>
                                <option value="english" >English</option>
                                <option value="marathi" >Marathi</option>
                                 <option value="tamil" >Tamil</option>
                                <option value="telegu" >Telegu</option>
                                 
                                 
                  </select>
                  </div> 
                           <div class="form-group">
                          <label class="bmd-label-floating">Job Post Date</label>
                            
  <!-- <input type="date" readonly class="form-control" value="<?php echo $expire_date; ?>" id="Expired_date" name="Expired_date" required> -->
                          <!-- <input type="text" class="form-control" id="location" name="location" required> -->
                     
                          <p><?php echo date('Y-m-d'); ?></p>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Shoot/Event Date</label>
                          <input type="date" class="form-control" onchnage="showDate('this.value')" id="shoot_date" name="shoot_date" required>
                        </div>
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




                        <!-- end col-6 div -->
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                         <!--  <label class="bmd-label-floating">Project Type</label> -->
                            <select name="project_type" id="project_type" class="form-control" required>
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
                       

                         
                          <div class="form-group">
                          <label class="bmd-label-floating">Location</label>
                          <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                               <div class="form-group">
                      
                          <label class="bmd-label-floating">Expired Date</label>
                            <?php 
                            // $dateStart= date("Y-m-d", strtotime(11-05-2018));
                        $date = new DateTime(); // Y-m-d
                       $date->add(new DateInterval('P30D'));
                        $expire_date = $date->format('Y-m-d');
                         // $expire_date = $date->format('Y-m-d') . "\n";
                       ?>
                         <p><?php echo $expire_date; ?></p>
                        </div>
                         <div class="form-group">
                          <label class="bmd-label-floating">Shoot Duration(hours)</label>
                          <input type="text" class="form-control" id="shoot_duration" name="shoot_duration" required>
                        </div>
                          <div class="form-group" class="radiocheckbtn" id="radiocheckbtn">
                           <label class="bmd-label-floating">Online Audition required or Not ?</label>
                           <!-- <h4 class="bmd-label-floating">Online Audition required or Not?</h4>--->
                            <class="list-inline">
                            <div class="row radiocheckbtn"  id="radiocheckbtn">
                            <div class="col-lg-6">
                             <label class="radiocontainer">Yes
                             <input type="radio" value="1" onclick="showscript()" name="isAuditionRequired" id="isAuditionRequired">
                            <span class="radiocheckmark"></span>
                            </label>
                           </div>
                           <div class="col-lg-6">
                           <label class="radiocontainer">No
                           <input type="radio" value="0" onclick="hidescript()" name="isAuditionRequired" id="isAuditionRequired">
                           <span class="radiocheckmark"></span>
                           </label>
                           </div>
                        </div>
                       </class="list-inline">
                        </div>
                        <!-- end col-lg-6  -->
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                          <label class="bmd-label-floating">Job Description</label>
                          <textarea class="form-control" rows="2" id="jobDescription" name="jobDescription" required></textarea>
                        </div>
                      </div>
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="row">
                             <div class="col-lg-3">
                                <div class="form-group text-center">
                                  <label>Related Image</label>
                                  <br>
                            <label class="btn-bs-file btn btn-lg btn-primary" style="
    width: 85px;
    padding-top: 13px;
    height: 40px;
    /* padding-right: 1px; */
    padding-left: 17px;4px */
    padding-left: 16px;
    /* margin-right: 15px; */
    font-size: 12px;
">
                               Browse
                          <input type="file" name="job_image"  id="job_image"/>
                          </label>
                          
                          <img id='img-upload'/>
                                      </div>
                                  
                                  
                    </div>
                    <div class="col-lg-3"> 
                     <img src="<?php echo base_url()?>assets/images/profile_pic/" class="picture-src" id="blah" title="" alt="" style="width: 75%;height: 96%;margin: 0 auto;border-radius: 10%;"/>
                        <img src="<?php echo base_url()?>assets/images/profile_pic/" class="picture-src" id="blah" title="" alt="" style="width: 75%;height: 96%;margin: 0 auto;border-radius: 10%;"/>
                    </div>
                                    <div class="col-lg-6 scriptclass">
                                       <div class="form-group">
                                        <label>Upload Script</label>
                                        <br>
                                         <label class="btn-bs-file btn btn-lg btn-primary" style="
    width: 85px;
    padding-top: 13px;
    height: 40px;
    /* padding-right: 1px; */
    padding-left: 17px;4px */
    padding-left: 16px;
    /* margin-right: 15px; */
    font-size: 12px;
">
                               Browse
                          <input type="file" name="script_name"  id="script_name" accept=".pdf,.doc"  />
                          </label>
                                        
                                         <img id='img-upload'/>
                                      </div>
                                    </div>
                           </div>
                                     

                     </div>
                     <div class="col-md-12">
                      <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                      </div>  
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                        <button type="button"  class="btn btn-primary pull-right" id="btnDirJobPost">Post This Job</button>
                     </div>                                         
                 </form>
                </div>
              </div>
            </div>
          </div>
 
 
  <script type="text/javascript">
  
//  var uploadField = document.getElementById("job_image");

//uploadField.onchange = function() {
 
   // if(this.files[0].size > 99287){
    //   alert("File is too large! please select another one");
    //   this.value = "";
   // };
//};
  
  
    $('.addfiles').on('click', function() { $('#job_image').click();return false;});
$('.addscript').on('click', function() { 
  $('#script_name').click();
// document.getElementById("#script_name").required = true;
  return false;});
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
                  form_data.append("project_name", $('#project_name').val()); 
                  
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
                var project_name=$("#project_name").val();
              
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
                var script_name=$("#script_name").val();
               var job_image=$("#job_image").val();
               // alert(job_image);

// alert(script_name);
                   var isExperienceRequired=$("#isExperienceRequired").val();
              // var isAuditionRequired=$("#isAuditionRequired").val();
              // alert(isAuditionRequired);
            var radioValue = $("input[name='isAuditionRequired']:checked").val();
               // alert(radioValue);
// alert(999);
if(radioValue==1)
{
  if(script_name.trim() == '') {
    // alert(999);
  $("#error-box").show();            
                $("#error-box").html("<strong> * Please Upload Script <strong>");
                status = false;
              }
              else{
                status=true;
              }

}
else{
 status=true;
}
              // var v= $('input[type=radio].isAuditionRequired:checked');
              // alert(v);
// $(v).each(function(i){
// alert($(this).val())
// });
            //  alert(isAuditionRequired);    
              if(job_title.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Title.<strong>");
                status = false;
              } 
              
               else if(project_name.trim() == '')
               {
                 $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Project Name<strong>");
                status = false;
               }
              else if(job_image.trim() == '')
               {
                 $("#error-box").show();            
                $("#error-box").html("<strong> * Please Put The Related Image Image<strong>");
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
              else if(gender=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one gender.<strong>");
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
              
            
              // else if(languages.trim() == '') { 
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please add Languages<strong>");
              //   status = false;
              // } 
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
              // else if(script_name.trim() == '') { 
              //   // alert(999);
              //   $("#error-box").show();            
              //   $("#error-box").html("<strong> * Please Enter script_name<strong>");
              //   status = false;
              // } 
                else if(jobDescription.trim() == '') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please Enter Job Description<strong>");
                status = false;
              } 
              
              return status;
              console.log(status);
          }

            
        }); 
       
         function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#job_image").change(function() {
  readURL(this);
});
function showscript()
{
 // alert(1);
 var status=true;
  $(".scriptclass").show();
  $('#script_name').attr('required', 'true');
   // document.getElementById("#s/cript_name").required = true;
 //    $("#error-box").show();    
 //    if(script_name.trim()=='')
 //    {       
 //                $("#error-box").html("<strong> * Please Enter script_name<strong>");
 //               status=false;
 // }
 // else
 // {
 //  status=true;
 // }
 
}
function hidescript()
{
 // alert(1);
  $(".scriptclass").hide();

}
  </script>
