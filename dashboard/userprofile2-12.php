      <style type="text/css">
       
        .view-award-section
        {
          display: none;
        }
        .view-association-section
        {
          display: none;
        }
        .add-work-details
        {
          display: none;
        }
        .hideaddassoc
        {
          display: none;
        }
        .hideaddaward
        {
          display: none;
        }
        .hideadd
        {
          display: none;
        }
        
        .hideImage
        {
          display: none ;
        }
        .hideSave
        {
          display: none ;
        }
        .hideSaveWork
        {
          display: none ;
        }
        .hideSaveAward
        {
          display: none ;
        }
        .hideSaveSocial
        {
          display: none ;
        }
        .hideSaveAssoc
        {
          display: none ;
        }
        .hideScript
        {
          display: none ;
        }
        .buttondemo
        {
          display: none;
        }
        .buttondemo1
        {
          display: none;
        }
        .buttondemo2
        {
          display: none;
        }
         .show-border .form-control-plaintext {
          border-bottom: 1px solid #666;
        }
        .show-border .social-link-input-class {
          border-bottom: 1px solid #666;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td
        {
          border: none;
              border: none;
    line-height: 1.42857;
    color: #AAAAAA;
    font-weight: 400;
    font-size: 14px;
        }
        .label{
    /*float: rig;
    height: 30px;
    padding-right: 4px;
    padding-top: 2px;
    position: relative;
    text-align: right;
    vertical-align: middle;
    width: 73px;
*/}
.label:after{
 content:"*" ;
color:red    
}
.input {
    font-family: 'inherit' !important;
}

      </style>



      <!-- Tabs -->
      <section id="tabs">
        <div class="container">
             <div class="row">
                
                  <div class="col-md-12">
                    <div class="card card-plain">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0 "> My Profile</h4>
                         
                      </div>
                    </div>
                  </div>
                </div>
          <!-- <h2 class="section-title ">Job Applications</h2> -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
              <nav>
                <?php  $profresult=$result; 

                ?>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                  <a class="nav-item nav-link active" id="nav-home-tab" onclick="testprofile(<?php echo htmlspecialchars(json_encode($profresult)) ?>)" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>

                   <?php
                  
                   // print_r($profresult);
                   $resultWork1 = $this->db->select('*')->from('director_work_exp')->get()->result_array();
                 //  print_r($resultWork1);
                    $resultAward1 = $this->db->select('*')->from('director_award_reg')->get()->result_array();
                    $resultassoc1 = $this->db->select('*')->from('director_assoc')->get()->result_array();

                             
                         ?> 
                         <!--  onclick="newWork(<?php //echo $key['work_id']?>, <?php //echo htmlspecialchars(json_encode($resultWork)) ?>)" -->
                  <a class="nav-item nav-link pendingApplicationList" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" onclick="test(<?php echo htmlspecialchars(json_encode($resultWork1)) ?>)" aria-controls="nav-profile"  aria-selected="false">Work Experience</a>
                  <a class="nav-item nav-link rejectedApplicationList" id="nav-award-tab" data-toggle="tab" href="#nav-award" role="tab" onclick="test1award(<?php echo htmlspecialchars(json_encode($resultAward1)) ?>)" aria-controls="nav-award" aria-selected="false">Awards & Recognitions</a>
                   <a class="nav-item nav-link rejectedApplicationList" id="nav-socialLink-tab" data-toggle="tab" href="#nav-socialLink"  onclick="test1social(<?php echo htmlspecialchars(json_encode($profresult)) ?>)" role="tab"   aria-controls="nav-socialLink" aria-selected="false">Social Links</a>
                    <a class="nav-item nav-link rejectedApplicationList" onclick="test1assoc(<?php echo htmlspecialchars(json_encode($resultassoc1)) ?>)" id="nav-associations-tab" data-toggle="tab" href="#nav-associations" role="tab" aria-controls="nav-associations" aria-selected="false">Associations</a>
                
                </div>
              </nav>
              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      <!-- Profile Section -->
                <div class="tab-pane fade show active hideprofile" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  
                 <div class="ProfileView" style="background-color: #fff;">
                    <div class="profileForm" style="padding-top: 18px;padding-right: 25px;padding-left: 25px;padding-bottom: 1px;">
                      <form class="" method="post" id="formId" action="" enctype="multipart/form-data">
                         <?php 
                            foreach ($result as $value) { ?>
  <div class="add-more-block row" style="
    margin-top: 6px;
    margin-bottom: 6px;
    margin-left: 2px;
    margin-right: -2px;
    ">
                      <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                          <h3 class="txtred" style="margin-left: 392px;"></h3>
                            </div>
                       <div class="col-lg-6 hideIcon" style="
    padding-top: 12px;
">
                        
                        <i class="fa fa-edit" data-toggle="modal" onclick="newInfo()" style="
          float: right;
          font-size: 21px;
          /* padding-top: 19px; */
          /* margin-left: 382px; */
          cursor: pointer;
          display: initial;
    "></i>
                       </div>
                     </div>
                     </div>



                        <div class="row" id="profile_parent_div">

                          <div class="col-lg-12" style="/*position:absolute;*/ /*width:100%;*/ ">


                              

                                           <div class="picture-container" style="margin-left: auto;
  margin-right: auto;
  display: block;">
                                                <div class="picture text-center">
                                                    <?php if($value['profile_pic']) { ?>
          <img src="<?php echo base_url()?>assets/images/profile_pic/<?php echo $value['profile_pic']; ?>" class="picture-src" id="blah" title="" alt="" style="width: 15%;height: 150px;/*margin: 21 auto;*/border-radius: 100%;"/>

                                                    <!-- <img id="blah" /> -->
                                                  <?php }else { ?>
                                                      
          <img src="<?php echo base_url()?>assets/images/profile_pic/userprofile.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="" style="width: 15%;height: 150px;margin: 21 auto;border-radius: 100%;"/>
                                                  <?php } ?>

                                                    <div class="form-group text-center hideImage">
                                              <label>Choose Profile photo</label>

                                               <div class="input-group">

                                              
                                              <span class="input-group-btn" style="margin: 0 auto;cursor: initial;">

      <span class="btn btn-default btn-file addscript" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 15px;cursor: initial;">

      Browse<input type="file" runat="server" name="profile_pic"  id="profile_pic" class="form-control" style="cursor: initial;z-index: 2">

                                               </span>
                                               </span>
                                              </div>
                                             
                                               <img id='img-uploarunat="server"d'/>
                                            </div>
                                          </div>
                                               
                                            </div>
                                        
                          </div>
                          <br>
                            <!-- ************** -->

                    <div class="col-lg-12">
                                     <div class="row" style="padding-top: 10px;">
<!-- table start -->
 <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <table class="table responsive">
                           <tr>
                            <td></td>
                             <td></td>
                             <td></td>
    <th>Company  Name:</th>
    <!-- <th>:</th> -->
    <!-- <td>:</td> -->
    <td ><input type="text" readonly class="form-control-plaintext" id="companyName"  style="
          
          display: initial;
          width: 250px;
          font-size: 14px;
          " value="<?php echo $value['official_name'];?>" name="companyName" ></td>
<td></td>
<td></td>
 <td></td>
           <th>City:</th>
    <td><input type="text" style="
          display: initial;width:auto;font-size: 14px;" readonly name="city" id="city" class="form-control-plaintext" value="<?php echo $value['city'];?>" placeholder="Enter City Name" required="required"/></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
     <td></td>
    <th>Official Email ID:</th>
    <td> <input type="email" style="
           background-color: white;display: initial;width:223px;font-size: 14px;" readonly name="email" id="email" class="form-control-plaintext" value="<?php echo $value['email_id'];?>" placeholder="Enter Official Email Id"></td>
            <td></td>
             <td></td>
             <td></td>
             <th >Pincode:</th>
    <td>    <input type="text" readonly name="pincode" id="pincode" style="
          display: initial;width:auto;font-size: 14px;" class="form-control-plaintext" value="<?php echo $value['pin_code'];?>" placeholder="Enter Pin Code"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
     <td></td>
    <th>Contact No:</th>
    <td>  <input type="phone" readonly name="mobile" id="mobile" style="
           background-color: white;display: initial;width:auto;font-size: 14px;" class="form-control-plaintext" value="<?php echo $value['contact_no'];?>" placeholder="Enter Contact Number"></td>
           <td></td>
            <td></td>
            <td></td>
            <th >Upload Profile</th>
    <td class="showScript"> 
       <?php if($value['script_file']){  ?>
                           <p  style="
          display: initial;
      /*     margin-left: -9px;*/
          width:auto;
          color: black;
          font-weight: 400;
          font-size: 14px;
          " class="txtgreen" id="script-name" > <?php echo $value['script_file']; ?> </p>
                          <!-- <label style="
          display: initial;width:auto;width:150px;
         /* width:auto;*/
          width:150px;
          /* font-weight: bold; */
          color: black; " class="txtgreen" id="script-name"> <?php echo $value['script_file']; ?> </label> -->
                   <?php } else{ ?> 
                     <label class="txtgreen" id="script-name">  </label>
                     <?php } ?></td>
                     <td>
                      
                                               <div class="input-group hideScript">
                                              <span class="input-group-btn ">
                                               <span class="btn btn-default btn-file addscript" style="height: 40px;width: 85px;background-color: #ff007c;margin-left: -21px;padding-left: 15px;cursor: initial;">
                                                Browse<input type="file" readonly name="script_name"  id="script_name" accept=".pdf,.doc" class="form-control" style="      position: absolute;top: 0;right: 0;bottom: 0;left: 0;width: 100%;height: 100%;z-index: -1;z-index: 2;opacity: 0;"">
                                               </span>
                                               <?php if($value['script_file']){  ?>
                          <label class="txtgreen" id="script-name"> <?php echo $value['script_file']; ?> </label>
                   <?php } else{ ?> 
                     <label class="txtgreen" id="script-name">  </label>
                     <?php } ?>
                                               </span>
                  
                                                </div>
                                               <img id='img-upload'/>
                  
                                              

                     </td>
  </tr>
   <tr>
    <td></td>
    <td></td>
     <td></td>
    <th >Official Address:</th>
    <td style="width: 5px;"> <?php 
                                          $str=$value['address'];
                                          $add=chunk_split($str,40);
                                          //echo $add;
                                          ?>
                                         
                                          <p style="
          display: initial;
                    /*margin-left: -9px;*/

          width:auto;
          color: black;
          /*width: 10px;*/
          font-weight: 400;font-size: 14px;
          " id="addhidden" ><?php echo $add; ?></p>
                               
                                        
                                         
                                       <!--    <textarea style="overflow: auto !important;"><?php echo $add; ?></textarea> -->
                                          <input id="addhidden1" class="form-control-plaintext addhidden1" readonly name="address" style="
      background-color: white;display: none;width: 350px;font-size: 14px;"  value="<?php echo $add; ?>" id="comment" placeholder="Enter office Adress">
                                        </div></td>
            
  </tr>
                          </table>
                        </div>
                      </div>
                    </div>

<!-- table ends -->



                                    
                                         <?php } ?>
                                           <div class="col-lg-12 text-right hideSave" style="/*display: block;*//* padding-left: 104px; */padding-right: 36px;padding-bottom: 10px;">
                                          <!-- <input type="hidden" name="artistId" id="artistId" value=""> -->

                                          <button type="button" name ="submit" value="submit" readonly class="btn btn-default  pull-right" id="btnDirectorProfile" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 27px;">Save</button>
                                          <button type="button" class="btn btn-default  pull-right" style="height: 40px;width: 85px;background-color: #ff007c;padding-left: 20px;" id="closeprofile" onclick="goBackprofile()">Cancel</button>

    <script>
    function goBackprofile() {
                    var profileDiv = document.getElementById('profile_parent_div');
                      profileDiv.classList.remove("show-border");
         
          document.getElementById('profile_pic').readOnly = true;
         // document.getElementById('companyName').readOnly = false;
          //document.getElementById('email').readOnly = false;
              document.getElementById('mobile').readOnly = true;
          document.getElementById('addhidden1').readOnly = true;
          document.getElementById('pincode').readOnly = true;
          document.getElementById('city').readOnly = true;
          document.getElementById('script_name').readOnly = true;
           document.getElementById('btnDirectorProfile').readOnly = "none";
          document.getElementById('closeprofile').readOnly = "none";

                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var profilesaveDiv = document.getElementById('profile_parent_div');
                $(profilesaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-home"]').tab('show');
            }
       });
                
         
            $(".hideImage").hide();
          $(".hideScript").hide();
          $(".showScript").hide();
            $(".hideSave").hide();
              $(".closeprofile").hide();
          
          $(".hideIcon").show();
         

                 
        //window.history.back();
        // console.log("in go back");
        // var awardDiv = document.getElementById('project_parent_div'+ $data);
        //               awardDiv.classList.remove("show-border");

        //  document.getElementById('project_type'+$data).readOnly = true;
        //               document.getElementById('project_title'+$data).readOnly = true; 
        //               document.getElementById('production_name'+$data).readOnly = true;  
        //               document.getElementById('year'+$data).readOnly = true; 
        //               document.getElementById('link'+$data).readOnly = true; 
        //               document.getElementById('additional_info'+$data).readOnly = true;
        //               document.getElementById('saveBtn'+$data).style.display = "none";

        //                 $("#hideSaveWork"+$data).hide();
        //                 $(".hideIconwork"+$data).show();
                     
    }
    </script>
</div>
                                        </div>
                                     </div>
                                        <!-- ********** -->

                          </div>
                        </div>
                          <div class="col-md-12">
                            <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
                                       
                  </form>
                    </div>
                 </div>
              
                </div>
      <!--------------Edit code for general info start here-------------------->
       
      <!--------------Edit code for general info end here--------------------->
      <script type="text/javascript">
                function readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#profile_pic").change(function() {
        readURL(this);
      });
      </script>
      <!-- End Profile Section -->
      <!-- Work Experience Section -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
       
                  <style type="text/css">
      .add-more-block{
        border: 0.75px solid #ddd !important;
      }
      </style>  
       
        <!-- <div class="row" style="margin:0 auto">
                      <div class="col-lg-12 text-center">
                          <h3 class="txtred">Work Experience</h3>
                     
                       </div>
                     </div> -->
                     <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-right">
                         <!--  <h3 class="txtred" style="margin-right: -77px;" >Work Experience</h3> -->
                            </div>
                       <!-- <div class="col-lg-6 hideIconwork">
                        
                        <i class="fa fa-edit" data-toggle="modal" onclick="newWork()" style="font-size: 34px;
          padding-top: 19px;
          margin-left: 382px;
    cursor: pointer;
    "></i>
                       </div> -->
                     </div>
                     </div>
                      <div id="workExperienceView" style="background-color: #fff;">
          
        
              <form class="form-inline" action="" method="post" style="margin-bottom: auto !important;">
               <!--  <div class="col-md-12 text-center">
                  <br> -->
                  <form id="prject1">
                 <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
                <!-- </div> -->
                
                  
                 <?php  $countresultwork="SELECT COUNT(work_id) FROM director_work_exp";
                    //echo $countresultwork;
                     $query=$this->db->query($countresultwork);
                    
                   $queryresu=$query->result_array('work_id');
                  // print_r($queryresu);
                  // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
                   $countresu=$queryresu[0]['COUNT(work_id)'];
                   $resultWork1 = $this->db->select('*')->from('director_work_exp')->get()->result_array();
                  ?>
                  <?php if($countresu>=1)
                  {?>
                  <div class="pull-right col-md-12" style="
        padding-bottom: 5px;
        padding-top: 5px;
    ">
                      
                                <a href="javascript:void(0);" class="addWorkBtnDemo1" onclick="Workdemo(<?php echo htmlspecialchars(json_encode($resultWork1)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Work Experience</label></a>
                            </div>
                          <?php }
                           else
                          { ?>
                            <div class="pull-right col-md-12" style="
        padding-bottom: 5px;
        padding-top: 5px;
    ">
                                <a href="javascript:void(0);" class="addWorkBtnDemo" 
                                onclick="Workdemo(<?php echo htmlspecialchars(json_encode($resultWork1)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add work Experience</label></a>
                            </div>
                          <?php }?>
                            <form id="prject1">
                            <div class="video-box1 col-md-12">

                         <?php
                          
                            $resultWork = $this->db->select('*')->from('director_work_exp')->get()->result_array();
                                           // print_r($result);exit;
                                          foreach ($resultWork as $key) {  ?> 

                  <div class="add-more-block row" id="project_parent_div<?php echo $key['work_id']?>" style="
        margin-bottom: 10px;margin-left: 10px;margin-right: 10px;
    ">
                    <div class="col-lg-12 hideIconwork<?php echo $key['work_id']?>">
                        
       <i class="material-icons float-right" onclick="deleteproj(<?php echo $key['work_id']?>)" style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;     
     ">delete_forever</i>


                        <i class="fa fa-edit" onclick="newWork(<?php echo $key['work_id']?>, <?php echo htmlspecialchars(json_encode($resultWork)) ?>)"
                         style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;      
    "></i>

                     
                       </div>   

      <div class="col-md-6">

       <div class="form-group">
          <label style="
    font-size: 14px;width: 150px;
">Project Type</label>
<span>:</span>
          <div >
            <input type="text" readonly class="form-control-plaintext project_type<?php echo $countresu;?> " style="font-size: 14px;margin-left: 4px;" id="project_type<?php echo $key['work_id']?>" value="<?php echo $key['project_type'];?>" name="project_type" required >
          </div>
        </div>
        
         <div class="form-group">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail" >Production Name</label>
          <span>:</span>
          <div>
            <input type="text" readonly class="form-control-plaintext production_name<?php echo $countresu;?> " value="<?php echo $key['production_name'];?>"  id="production_name<?php echo $key['work_id']?>" style="font-size: 14px;margin-left: 4px;" name="production_name" >
          </div>
        </div>
         <div class="form-group">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail" >Link If Any</label>
          <span>:</span>
          <div >
            <input type="text" readonly class="form-control-plaintext link<?php echo $countresu;?>" name="link" id="link<?php echo $key['work_id']?>" style="font-size: 14px;margin-left: 4px;
          " value="<?php echo $key['link'];?>"  class="form-control" value="" >
          </div>
        </div>
       
                                 </div>

                    <div class="col-md-6">

      <div class="form-group">
          <label for="staticEmail"  style="
    font-size: 14px;width: 150px;
">Project Title</label>
          <span>:</span>
          <div>
            <input type="text" readonly class="form-control-plaintext project_title<?php echo $countresu;?>"style="font-size: 14px;margin-left: 4px;"  name="project_title" value="<?php echo $key['project_title'];?>"  id="project_title<?php echo $key['work_id']?>"  class="form-control" >
          </div>
        </div>

      <div class="form-group">
          <label for="staticEmail"  style="
    font-size: 14px;width: 150px;
">Year</label>
<span>:</span>
          <div >
            <input type="Number" readonly class="form-control-plaintext year<?php echo $countresu;?>" name="year" style="font-size: 14px;margin-left: 4px;" value="<?php echo $key['year'];?>"  id="year<?php echo $key['work_id']?>" class="form-control" value="" >
          </div>
        </div>
        <div class="form-group">
          <label for="staticEmail"  style="
    font-size: 14px;width: 150px;
">Additional Details</label>
       <span>:</span>
          <div >
            <input type="text" readonly style="font-size: 14px;margin-left: 4px;" class="form-control-plaintext additional_info<?php echo $countresu;?>" readonly name="additional_info" id="additional_info<?php echo $key['work_id']?>" value="<?php echo $key['additional_info'];?>" class="form-control" >
          </div>
        </div>
                    </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveWork" id="hideSaveWork<?php echo $key['work_id']?>" style="
          
          padding: 20px;
          ">
                                   <button type="button" id="saveBtn<?php echo $key['work_id']?>"  name="submit" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 27px;
    " onclick="GetProject(<?php echo $key['work_id']?>)"
           class="btn btn-default btn-block" >Save</button>



    <button type="button" onclick="goBackworkexp(<?php echo $key['work_id']?>)" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    " class="btn btn-default btn-block">Cancel</button>

    <script>
    function goBackworkexp($data) {
        //window.history.back();
        //console.log("in go back");
      //  status=true;
        var awardDiv = document.getElementById('project_parent_div'+ $data);
                      awardDiv.classList.remove("show-border");

         document.getElementById('project_type'+$data).readOnly = true;
                      document.getElementById('project_title'+$data).readOnly = true; 
                      document.getElementById('production_name'+$data).readOnly = true;  
                      document.getElementById('year'+$data).readOnly = true; 
                      document.getElementById('link'+$data).readOnly = true; 
                      document.getElementById('additional_info'+$data).readOnly = true;
                      document.getElementById('saveBtn'+$data).style.display = "none";



           
              
                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('project_parent_div');
                $(projectsaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-profile"]').tab('show');
            }
       });
                 

                        $("#hideSaveWork"+$data).hide();
                        $(".hideIconwork"+$data).show();
                     

            
              
              

         



    }
    </script>




                             </div>

                  </div>


                


                  <?php } ?>  
                </div>
              </form>

                  <div class="video-box col-md-12 add-work-details" style="padding-bottom: 10px;">
                  
                <div class="add-more-block row" style="margin-bottom: 10px;margin-left: 10px;margin-right: 10px;">
                    <div class="col-md-6">
                      <div class="form-group">
                                              <label>Project Type</label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" class="form-control" style="
          padding: 5px;" id="project_type" name="project_type" >
                                            </div>
                  
                   
                      <div class="form-group">
                                                <label>Production Name</label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" name="production_name" style="
          padding: 5px;"  id="production_name" class="form-control">
                                            </div>
                    
                      <div class="form-group">
                                              <label>Link If Any <small></small></label>&nbsp;&nbsp;&nbsp;
                                              <input type="text"name="link" id="link" style="
          padding: 5px;"  class="form-control" value="">
                                            </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
    <button class="closeBtn" type="button" onclick="buttondemo1()"> X </button>
                                              <label> Project Title</label>&nbsp;&nbsp;&nbsp;
                                                <input type="text" style="
          padding: 5px;" name="project_title"  id="project_title" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;

                                              

                                            </div>
                    
                   
                      <div class="form-group" style="
        margin-top: -16px;
    ">
            <label>Year </label>
            <input type="Number" style="
          padding: 5px;"  name="year"  id="year" class="form-control">
                                            </div>
                 
                      <div class="form-group" style="margin-top: 6px !important">
                                              <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" class="form-control" style="
          padding: 5px;"  name="additional_info" id="additional_info">


                                            </div>
                    </div>
                      
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideadd"style="
          
          padding: 20px;
          ">
                                   <button type="button" onclick="AddWorkExp()"  class="addworkhide" name="submit" style="
          font-color: white !important;
          width: 110px;
          float: right;
          background-color: #ff007c;
          border: pink;
          color: white;
          height: 39px;
          " class="btn btn-default btn-block">Add</button>
        <!--   id="btnDirectorWorkexp" -->
                             </div>

                      
                  </div>  
                </div>

 <div class="col-md-12">
                            <div id="error-boxwork" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
                 
                        
              </form> 
           </div>
        </div>

        
       
        <script type="text/javascript">


          function Workdemo(resultData)
      {
        //alert(1);
   console.log("resultData", resultData);

   for(var i=0;i<resultData.length;i++)
         {
           
           
                  console.log("Inside IF: ", resultData[i].work_id);
                  var parentDiv = document.getElementById('project_parent_div'+resultData[i].work_id);
                  parentDiv.classList.remove("show-border");
            
                  document.getElementById('project_type'+resultData[i].work_id).readOnly = true;
                  document.getElementById('project_title'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('production_name'+resultData[i].work_id).readOnly = true;  
                  document.getElementById('year'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('link'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('additional_info'+resultData[i].work_id).readOnly = true;
                  document.getElementById('saveBtn'+resultData[i].work_id).style.display = "block";



                  $(".add-work-details").show();
                 $(".hideadd").show();
                  $(".addworkhide").show();
                  $(".hideSaveWork").hide();
                   $(".hideIconwork"+resultData[i].work_id).show();


           }
             $(".add-work-details").show();
                 $(".hideadd").show();
                   $(".addworkhide").show();
                  $(".hideSaveWork").hide();
                   $(".hideIconwork"+resultData[i].work_id).show();

      
      }
        
        function AddWorkExp()
        { 
          var status = true; 
      //     var $project_type_new=document.getElementById("project_type"+$data).value;
      //     alert($project_type_new);
      // var $project_title_new=document.getElementById("project_title" +$data).value;
      // var $production_name_new=document.getElementById("production_name" +$data).value;
      // var $year_new=document.getElementById("year" +$data).value;
      //   var $link_new=document.getElementById("link" +$data).value;
      //   var $additional_info_new=document.getElementById("additional_info" +$data).value;

          // $('.submit').click(function(){
              //var id = (this.id);
              var project_type=$("#project_type").val();
              //alert(project_type);
              var production_name=$("#production_name").val();
              //var link=$("#link").val();
              // var password=$("#password").val();
              var project_title=$("#project_title").val();
              var year=$("#year").val();
             // var additional_info=$("#additional_info").val();
              if(project_type.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter project type.<strong>");
                      status = false;
                    }
                     else if(production_name.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Production name.<strong>");
                      status = false;
                    } 
                    //  else if(link.trim() == '') { 
                    //   $("#error-boxwork").show();            
                    //   $("#error-boxwork").html("<strong> * Please Enter Your Email-id.<strong>");
                    //   status = false;
                    // }  
                    else if(project_title.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Project Title.<strong>");
                    
                      status = false;
                    }  
                    else if(year.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Year.<strong>");
                      status = false;
                    }    
                    // else if(additional_info.trim() == '') { 
                    //   $("#error-boxwork").show();            
                    //   $("#error-boxwork").html("<strong> * Please Enter Your Email-id.<strong>");
                    //   status = false;
                    // }     
                    //alert(status);
                    if(status==true)
              {
              var form_data = {            //repair
                //  work_id: id,

                  project_type: $('#project_type').val(),
                  production_name: $('#production_name').val(),
                  link: $('#link').val(),
                  project_title: $("#project_title").val(),
                year: $("#year").val(),
                  additional_info: $("#additional_info").val()

              };
              console.log(form_data);
              // if(form_data[project_type] ==' ')
              // {
              //   alert("sorry");
              // }

          $.ajax({
            
              url: '<?php echo base_url('director/add_director_work/'); ?>',//repair
              type: 'POST',
              data: form_data, // $(this).serialize(); you can use this too
            
             success: function(msg) {
               if(msg.status="success"){
                        alert("Work Experience Added Successfully.");
                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('project_parent_div');
                $(projectsaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-profile"]').tab('show');
            }
       });
                  }
              }

         });
          
    }
    else{
      //alert("Please Enter All The Mandatory Fields");
         return false;
    }

        }
       
      function deleteproj(id)
      {
        
              var r=confirm("Do you want to delete this Project?");
              if (r==true)
              {
                 
                  $.ajax({
                       
                        url: '<?php echo base_url('director/delete_proj/'); ?>'+id,
                      
                      })
                         .done(function (res) {
                      console.log(res);
                    if(res.status="success"){
    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var profileDiv = document.getElementById('profile_parent_div');
                $(profileDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-profile"]').tab('show');
            }
       });


                        
                }
              });
                  // window.location.href="<?php //echo base_url('dashboard')?>";
              
              }
              
              else
              {
                  return false;
              }
          }

      function buttondemo1()
        {
    $('.addworkhide').hide();

         $('.add-work-details').hide();
         document.getElementById("project_type1").value = '';
         document.getElementById("production_name1").value = '';
         document.getElementById("link1").value = '';
         document.getElementById("project_title1").value = '';
         document.getElementById("year1").value = '';
         document.getElementById("additional_info1").value = '';
        }
      function GetProject($data)
      {
      //$id=data;
      //alert("project_title" +$data);

       // var id=document.getElementById("project_type" +$data).value;

      var $project_type_new=document.getElementById("project_type" +$data).value;
      var $project_title_new=document.getElementById("project_title" +$data).value;
      var $production_name_new=document.getElementById("production_name" +$data).value;
      var $year_new=document.getElementById("year" +$data).value;
        var $link_new=document.getElementById("link" +$data).value;
        var $additional_info_new=document.getElementById("additional_info" +$data).value;
       //alert($project_title_new);
       updateProject($data);
        
      }
                  
              //$("#btnDirectorWorkexp").click(function(e){
                function updateProject($data){
          //alert("hi");
         // e.preventDefault();
        // alert($data);
         var $project_type_new=document.getElementById("project_type" +$data).value;
      var $project_title_new=document.getElementById("project_title" +$data).value;
      var $production_name_new=document.getElementById("production_name" +$data).value;
      var $year_new=document.getElementById("year" +$data).value;
        var $link_new=document.getElementById("link" +$data).value;
        var $additional_info_new=document.getElementById("additional_info" +$data).value;

          console.log("Inside btnDirectorWorkexp function........................");
          //alert('hii');
            var validation_status_project = directorFormValidateProject($data);
            console.log(validation_status_project);
           // alert(validation_status_project);
            if(validation_status_project == true ) 
            {
              $("#error-boxwork").hide(); 
              var form_data = new FormData();  
          // alert(data);
            //pretty-print('hiii'); 
              //form_data.append("directorId", $('#directorId').val());
                      form_data.append("project_type", $project_type_new);    
                      form_data.append("project_title", $project_title_new); 
                      form_data.append("production_name", $production_name_new);
                      form_data.append("year",$year_new);    
                      form_data.append("link",$link_new); 
                      form_data.append("additional_info",$additional_info_new);
                     //alert('additional_info');
                      // form_data.append("additional_info", $('#additional_info_new').val());
                      var jsonData = {
                        "project_type":$project_type_new,
                        "project_title":$project_title_new,
                        "production_name":$production_name_new,
                        "year":$year_new,
                        "link":$link_new,
                        "additional_info":$additional_info_new,
                      }

                     
                      console.log("jsonData", jsonData);
                      $.ajax({
                     //  alert("ajax");

                        url: '<?php echo base_url('director/director_workexp/'); ?>'+ $data,
                        type: 'POST',              
                        data : form_data,
                        processData: false,
                        contentType: false,
                        dataType: "json"
                      })
                    .done(function (res) {
                      var parentDivOnSave = document.getElementById("project_parent_div" + $data);
                      parentDivOnSave.classList.remove('show-border');
                     
                      console.log("RESULT---------------------------",res);
                      if(res.status="success"){
                        alert("Work Experience Successfully.");
                      document.getElementById('project_type'+$data).readOnly = true;
                      document.getElementById('project_title'+$data).readOnly = true; 
                      document.getElementById('production_name'+$data).readOnly = true;  
                      document.getElementById('year'+$data).readOnly = true; 
                      document.getElementById('link'+$data).readOnly = true; 
                      document.getElementById('additional_info'+$data).readOnly = true;
                      document.getElementById('saveBtn'+$data).style.display = "none";

                        $("#hideSaveWork"+$data).hide();
                        $(".hideIconwork"+$data).show();
                      //window.location.href="<?php // echo base_url('dashboard')?>";
                      }
                      else if(res.status="fail"){
                        alert("Please Add All The Mandatory Fields");
                        $("#error-boxwork").show();            
                        $("#error-boxwork").html(res.reason);
                      }
                      else{
                        alert("Please Add All The Mandatory Fields");
                        console.log("Fail");
                      }
                                  
                    });
            }
            else{
               //alert("Please Add All The Mandatory Fields");
               return false;
            }

            

                  
              //});
              } 

              function directorFormValidateProject($data)
                {   
                 // alert(2);
                    var status = true;   
      var $project_type_new=document.getElementById("project_type" +$data).value;
      var $project_title_new=document.getElementById("project_title" +$data).value;
      var $production_name_new=document.getElementById("production_name" +$data).value;
      var $year_new=document.getElementById("year" +$data).value;
        var $link_new=document.getElementById("link" +$data).value;
        var $additional_info_new=document.getElementById("additional_info" +$data).value;


            var project_type= $project_type_new;
            console.log("projecttype".project_type);
            var project_title=$project_title_new;
            var production_name=$production_name_new;
            var year=$year_new;
            var link=$link_new;

             var additional_info=$additional_info_new;

          

 $("#error-boxwork").show();  
                    if(project_type.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Project Type.<strong>");
                      status = false;
                    }            
                    else if(project_title.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Project Title.<strong>");
                      status = false;
                    }     
                    else if(production_name.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Production Number.<strong>");
                      status = false;
                    } 
                    
                    else if(year.trim() == '') { 
                      $("#error-boxwork").show();            
                      $("#error-boxwork").html("<strong> * Please Enter Year.<strong>");
                      status = false;
                    } 
                   
                    console.log("validation_status....................",status);
                    return status;
                    
                }

          
          function onApprove(data)  

          {  

      //alert(1);
      console.log("Inside onApprove function.........................");
         // var objJSON = JSON.parse(data);
          obj=JSON.parse(JSON.stringify(data));
       
        console.log(obj);
       
            }              
            function onError(xhr,status,error)  
               {      console.log(xhr); 
                    console.log(status); 
                         console.log(error);    
                }


  function test1assoc(resultDatassoctest)
    {
      //alert("intest");
       console.log("resultDatassoctest", resultDatassoctest);
   for(var i=0;i<resultDatassoctest.length;i++)
         {
           
             var assocDiv1 = document.getElementById('assoc_parent_div'+ resultDatassoctest[i].assoc_id);
                      assocDiv1.classList.remove("show-border");
                     
                  
                   document.getElementById('association_name'+resultDatassoctest[i].assoc_id).readOnly = true;
                  document.getElementById('associaton_id'+resultDatassoctest[i].assoc_id).readOnly = true; 
            document.getElementById('saveBtnAssoc'+resultDatassoctest[i].assoc_id).style.display = "block";



                  $(".view-association-section").hide();
                 $(".hideaddassoc").show();
                  // $(".addworkhide").show();
                  $(".hideSaveAssoc").hide();
                   $(".hideIconassoc"+resultDataAssoc[i].assoc_id).show();   


           }


    }
 


  function test1award(resultDataawardtest)
    {
      //alert("intest");
       console.log("resultDataawardtest", resultDataawardtest);
   for(var i=0;i<resultDataawardtest.length;i++)
         {
           
             var awardDiv1 = document.getElementById('award_parent_div'+ resultDataawardtest[i].award_id);
                      awardDiv1.classList.remove("show-border");
                     
                     
                       // alert("Awards And Recognitions Experience Successfully.");
                           document.getElementById('award_title'+resultDataawardtest[i].award_id).readOnly = true;
                    document.getElementById('award_for'+resultDataawardtest[i].award_id).readOnly = true;
                     document.getElementById('award_year'+resultDataawardtest[i].award_id).readOnly = true;
                      document.getElementById('add_details'+resultDataawardtest[i].award_id).readOnly = true;
                       
                           document.getElementById('saveBtnAward'+resultDataawardtest[i].award_id).style.display = "block";
                            $(".hideSaveAward").hide();
                            $(".view-award-section").hide();
                   $(".hideIconaward"+resultDataawardtest[i].award_id).show();
        

           }


    }
    
   function test1social(resultDatasoc) 
    {
     // alert("intest");
       console.log("resultDatasoc", resultDatasoc);
   for(var i=0;i<resultDatasoc.length;i++)
         {
           
  var socialdiv12 = document.getElementById('social_parent_div');
                  socialdiv12.classList.remove("show-border");
            
                  document.getElementById('facebook').readOnly = true;
                  document.getElementById('instagram').readOnly = true; 
                  document.getElementById('twitter').readOnly = true;  
                  document.getElementById('youtube').readOnly = true; 
                  document.getElementById('website').readOnly = true; 
                  document.getElementById('imdb').readOnly = true;
                  //document.getElementById('btnDirectorProfile').readOnly = true;
                  document.getElementById('btnDirSocialLinks').style.display = "block";

                  // $(".add-work-details").hide();
                 $(".hideSaveSocial").hide();
                  $(".hideIconsocial").show();

         

           }


    }



    function testprofile(resultDataprof) 
    {
     // alert("intest");
       console.log("resultDataprof", resultDataprof);
   for(var i=0;i<resultDataprof.length;i++)
         {
           

       

           
                  console.log("Inside IF: ", resultDataprof[i].d_id);
                  var profilediv12 = document.getElementById('profile_parent_div');
                  profilediv12.classList.remove("show-border");
            
                  document.getElementById('profile_pic').readOnly = true;
                  document.getElementById('mobile').readOnly = true; 
                  document.getElementById('addhidden1').readOnly = true;  
                  document.getElementById('pincode').readOnly = true; 
                  document.getElementById('city').readOnly = true; 
                  document.getElementById('script_name').readOnly = true;
                  //document.getElementById('btnDirectorProfile').readOnly = true;
                  document.getElementById('btnDirectorProfile').style.display = "block";

                
                   $(".hideImage").hide();
          $(".hideScript").hide();
          $(".showScript").show();
          $(".hideSave").hide();
            $(".closeprofile").show();
          $(".hideIcon").show();

           }


    }



    function test(resultData) 
    {
     // alert("intest");
       console.log("resultData", resultData);
   for(var i=0;i<resultData.length;i++)
         {
           
           
                  console.log("Inside IF: ", resultData[i].work_id);
                  var parentDiv = document.getElementById('project_parent_div'+resultData[i].work_id);
                  parentDiv.classList.remove("show-border");
            
                  document.getElementById('project_type'+resultData[i].work_id).readOnly = true;
                  document.getElementById('project_title'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('production_name'+resultData[i].work_id).readOnly = true;  
                  document.getElementById('year'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('link'+resultData[i].work_id).readOnly = true; 
                  document.getElementById('additional_info'+resultData[i].work_id).readOnly = true;
                  document.getElementById('saveBtn'+resultData[i].work_id).style.display = "block";

                  $(".add-work-details").hide();
                 $("#hideSaveWork"+resultData[i].work_id).hide();
                  $(".hideIconwork"+resultData[i].work_id).show();

           }


    }
              function newWork(id, resultData)
              {
                // alert(id);
                console.log("resultData", resultData);
                for(var i=0;i<resultData.length;i++) {
                  if (resultData[i].work_id == id) {
                    console.log("Inside IF: ", resultData[i].work_id);
                    var parentDiv = document.getElementById('project_parent_div'+id);
                    parentDiv.classList.add("show-border");
              
                    document.getElementById('project_type'+id).readOnly = false;
                    document.getElementById('project_title'+id).readOnly = false; 
                    document.getElementById('production_name'+id).readOnly = false;  
                    document.getElementById('year'+id).readOnly = false; 
                    document.getElementById('link'+id).readOnly = false; 
                    document.getElementById('additional_info'+id).readOnly = false;
                    document.getElementById('saveBtn'+id).style.display = "block";

                    $(".add-work-details"+id).hide();
                   $("#hideSaveWork"+id).show();
                    $(".hideIconwork"+id).hide();

                  } else {
                    console.log("Inside ELSE: ", resultData[i].work_id);
                    var tempId = resultData[i].work_id;
                    var parentDiv = document.getElementById('project_parent_div'+tempId);
                    parentDiv.classList.remove("show-border");
              
                    document.getElementById('project_type'+tempId).readOnly = true;
                    document.getElementById('project_title'+tempId).readOnly = true; 
                    document.getElementById('production_name'+tempId).readOnly = true;  
                    document.getElementById('year'+tempId).readOnly = true; 
                    document.getElementById('link'+tempId).readOnly = true; 
                    document.getElementById('additional_info'+tempId).readOnly = true;
                    document.getElementById('saveBtn'+tempId).style.display = "none";

                    $(".add-work-details"+tempId).show();
                   $("#hideSaveWork"+tempId).hide();
                    $(".hideIconwork"+tempId).show();
                  }
                }


                  $('.add-work-details').hide();
         $('.hideadd').hide();
        // AddWorkExp();
      $('.addworkhide').hide();
               // document.getElementById('closeBtn'+id).style.display = "block";
                         
               
        
              }  
        </script>

      <!-- End Work Experience section -->
      <!-- Awards And Recognition section -->
                <div class="tab-pane fade" id="nav-award" role="tabpanel" aria-labelledby="nav-award-tab">

      <style type="text/css">
      .add-more-block{
        border: 2px solid #ddd;
      }
      </style>  
       
       
                     <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                         <!--  <h3 class="txtred" style="margin-right: -388px;">Awards And Recognition</h3> -->
                            </div>
                       
                     </div>
                     </div>
                      <div id="workExperienceView" style="background-color: #fff;">
          
        
              <form class="form-inline" action="" method="post" style="
        margin-bottom: auto;
    ">
                <!-- 
                <div class="col-md-12 text-center">
                  <br> -->
                  <form id="award" >
                 <!--  <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
               <!--  </div> -->
                <?php  $countresultaward="SELECT COUNT(award_id) FROM director_award_reg";
                    //echo $countresultwork;
                     $query=$this->db->query($countresultaward);
                    
                   $awardcountresu=$query->result_array('award_id');
                  // print_r($queryresu);
                  // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
                   $awardcountresu=$awardcountresu[0]['COUNT(award_id)'];
                     $resultAward1 = $this->db->select('*')->from('director_award_reg')->get()->result_array();
                             

                  ?>
                  <?php if($awardcountresu>=1)
                  {?>
                  
                  <div class="pull-right col-md-12"  style="
        padding-top: 5px;
        padding-bottom: 5px;
    ">

                                <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo(<?php echo htmlspecialchars(json_encode($resultAward1)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Awards/Recognitions</label></a>

                              <!-- <button class="addVideoBtnDemo" type="button" onclick="demo()"> Hiii</button>-->
                            </div>
                            <?php }
                           else
                          { ?>
                             <div class="pull-right col-md-12" style="
        padding-top: 5px;
        padding-bottom: 5px;
    ">

                                <a href="javascript:void(0);" class="addVideoBtnDemo" onclick="demo(<?php echo htmlspecialchars(json_encode($resultAward1)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add Awards/Recognitions</label></a>

                              <!-- <button class="addVideoBtnDemo" type="button" onclick="demo()"> Hiii</button>-->
                            </div>
     <?php }?>
                            <form id="award" >
                             <div class="video-box col-md-12">
                            <?php
                            $resultAward = $this->db->select('*')->from('director_award_reg')->get()->result_array();
                                           // print_r($result);exit;
                                          foreach ($resultAward as $val) {  ?>

                  <div class="add-more-block row"  id="award_parent_div<?php echo $val['award_id']?>" style="
        margin-bottom: 10px;margin-left: 10px;margin-right: 10px;
    ">

                    <div class="col-lg-12 hideIconaward<?php echo $val['award_id']?>">
                        <i class="material-icons float-right" onclick="deleteAward(<?php echo $val['award_id']?>)" style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;
          ">delete_forever</i>
        


                        <i class="fa fa-edit" data-toggle="modal" onclick="newAward(<?php echo $val['award_id']?>, <?php echo htmlspecialchars(json_encode($resultAward)) ?>)"style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;
          "></i>

                        

                       </div>

                    <div class="col-md-6">
       <div class="form-group row">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail" >Award Title</label>
<span>:</span>
          <div >
            <input type="text" style="font-size: 14px;margin-left: 4px;" class="form-control-plaintext award_title<?php echo $awardcountresu;?>" readonly id="award_title<?php echo $val['award_id']?>" value="<?php echo $val['award_title'];?>"  name="award_title" class="form-control" >
          </div>
      </div>

                     
                <!--    id="project_title<?php //echo $key['work_id']?>" -->
               <div class="form-group row">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail">Award Year </label>
<span>:</span>
          <div >
            <input type="Number" style="font-size: 14px;margin-left: 4px;" class="form-control-plaintext award_year<?php echo $awardcountresu;?>" readonly name="award_year" id="award_year<?php echo $val['award_id']?>" class="form-control" value="<?php echo $val['award_year'];?>"  class="form-control" >
          </div> 
      </div>     

       
                    
                     
                    </div>
                    <div class="col-md-6">
      <div class="form-group row">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail" >Award For</label>
<span>:</span>
          <div >
            <input type="text" style="font-size: 14px;margin-left: 4px;" readonly class="form-control-plaintext award_for<?php echo $awardcountresu;?>" readonly name="award_for" id="award_for<?php echo $val['award_id']?>" value="<?php echo $val['award_for'];?>"  class="form-control" value="" >
          </div>
      </div>
      <div class="form-group row">
          <label for="staticEmail" style="
    font-size: 14px;width: 150px;
">Additional Details </label>
<span>:</span>
          <div >
            <input type="text" style="font-size: 14px;margin-left: 4px;"  readonly class="form-control-plaintext add_details<?php echo $awardcountresu;?>" readonly name="add_details" id="add_details<?php echo $val['award_id']?>" value="<?php echo $val['add_details'];?>">
          </div>
      </div>

                                            
                   
                                             
                 
                     
                    </div>





                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAward" id="hideSaveAward<?php echo $val['award_id']?>" style="padding: 20px;">
                                   <button type="button"  name="submit" id="saveBtnAward<?php echo $val['award_id']?>" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
      
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 27px;
    " onclick="GetAward(<?php echo $val['award_id']?>)"
         class="btn btn-default btn-block" >Save</button>



    <button type="button" id="hidecloseaward<?php echo $val['award_id']?>" onclick="goBackaward(<?php echo $val['award_id']?>)" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    " class="btn btn-default btn-block">Cancel</button>

    <script>
      
    function goBackaward($data) {
       var awardDiv = document.getElementById('award_parent_div'+ $data);
                      awardDiv.classList.remove("show-border");
                     
                     
                       // alert("Awards And Recognitions Experience Successfully.");
                           document.getElementById('award_title'+$data).readOnly = true;
                    document.getElementById('award_for'+$data).readOnly = true;
                     document.getElementById('award_year'+$data).readOnly = true;
                      document.getElementById('add_details'+$data).readOnly = true;
                       
                           document.getElementById('saveBtnAward'+$data).style.display = "none";
                            document.getElementById('hidecloseaward'+$data).style.display = "none";
                     //   console.log($data);
                        $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var award_Div = document.getElementById('award_parent_div');
                $(award_Div).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-award"]').tab('show');
            }
       });
                
       $(".hideSaveAward"+$data).hide();
                   $(".hideIconaward"+$data).show();
                 
                     
    }
    </script>
                             </div>
                    </div>

                   
                    <?php } ?>

                    </div> 
                </form>

     
                    <div class="video-box col-md-12 view-award-section" style="padding-bottom: 10px;">
                    <div class="add-more-block row" style="margin-bottom: 10px;margin-left: 10px;margin-right: 10px;">
                  
                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Award Title</label>&nbsp;&nbsp;&nbsp;
                                            <input type="text" style="
          padding: 5px;" class="form-control" id="award_title"  value=""  name="award_title">
                                            </div>
                                             
                                             <div class="form-group">
                                              <label>Award Year <small></small></label>&nbsp;&nbsp;&nbsp;
                                              <input type="Number" name="award_year" id="award_year" style="
          padding: 5px;" class="form-control" value="" >
                                            </div>
                    
                                          
                    </div>

                    <div class="col-md-6">
     <button class="closeBtn" type="button" onclick="buttondemo2()"> X </button>
                     <div class="form-group">
                                              <label> Award For</label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" style="
          padding: 5px;" name="award_for" id="award_for" class="form-control" value="">&nbsp;&nbsp;&nbsp;&nbsp;

                                             

                                              </div>
                   
                                              <div class="form-group" style="margin-top: -17px !important">
                                              <label>Additional Details </label>&nbsp;&nbsp;&nbsp;
                                              <input class="form-control" style="
          padding: 5px;" name="add_details" id="add_details" value="" >
                                            </div>
                                            </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddaward"style="
          
          padding: 20px;
          ">
                                   <button type="button" onclick="AddAwardReg()" class="addawardhide" name="submit"style="color: white;width: 110px;float: right;background-color: rgb(255, 0, 124);height: 42px;border: aliceblue;" class="btn btn-default btn-block">Add</button>
        <!--   id="btnDirectorWorkexp" -->
                             </div>
                                            </div>
                                          
                                             </div>
                                             
       
           
                           
                           <div class="col-md-12">
                            <div id="error-box-award" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
              </form> 
           </div>
        </div>

        
       
        <script type="text/javascript">
      function demo(resultDataAward)
      {
       // alert(5);
   console.log("resultDataAward", resultDataAward);

   for(var i=0;i<resultDataAward.length;i++)
         {
          console.log("Inside IF: ", resultDataAward[i].award_id);
                  var awardDiv = document.getElementById('award_parent_div'+resultDataAward[i].award_id);
                  awardDiv.classList.remove("show-border");
            
                  document.getElementById('award_title'+resultDataAward[i].award_id).readOnly = true;
                  document.getElementById('award_year'+resultDataAward[i].award_id).readOnly = true; 
                  document.getElementById('award_for'+resultDataAward[i].award_id).readOnly = true;  
                  document.getElementById('add_details'+resultDataAward[i].award_id).readOnly = true; 
                 
                  document.getElementById('saveBtnAward'+resultDataAward[i].award_id).style.display = "block";


   $(".view-award-section").show();

                  //$(".add-work-details").show();
                 $(".hideaddaward").show();
                  $(".addawardhide").show();
                  // $(".hideSaveWork").hide();
                   $(".hideSaveAward").hide();
                   $(".hideIconaward"+resultDataAward[i].award_id).show();
                  // $(".hideIconwork"+resultData[i].work_id).show();



           }

         // alert(1);
      
      $(".view-award-section").show();

                  //$(".add-work-details").show();
                 $(".hideaddaward").show();
                  $(".addawardhide").show();
                  // $(".hideSaveWork").hide();
                   $(".hideSaveAward").hide();
                   $(".hideIconaward").show();
                  // $(".hideIconwork"+resultData[i].work_id).show();

      }

      function buttondemo2()
       {
        $('.view-award-section').hide();
       
       
         document.getElementById("award_title1").value = '';
         document.getElementById("award_year1").value = '';
         document.getElementById("award_for1").value = '';
         document.getElementById("add_details1").value = '';
        }

      function AddAwardReg()
        {
          var status = true; 
           var award_title=$("#award_title").val();
              //alert(project_type);
              var award_year=$("#award_year").val();
              var award_for=$("#award_for").val();
              // var password=$("#password").val();
              var add_details=$("#add_details").val();
              if(award_title.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Company Name.<strong>");
                      status = false;
                    }
                     else if(award_year.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Award Year.<strong>");
                      status = false;
                    } 
                     else if(award_for.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Award For.<strong>");
                      status = false;
                    }  
                    // else if(add_details.trim() == '') { 
                    //   $("#error-box").show();            
                    //   $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                    
                    //   status = false;
                    // }  
             if(status==true)
              {
          // $('.submit').click(function(){
              //var id = (this.id);
              var form_data = {            //repair
                //  work_id: id,
                  award_title: $('#award_title').val(),
                  award_year: $('#award_year').val(),
                  award_for: $('#award_for').val(),
                  add_details: $("#add_details").val()
           
              };

          $.ajax({
            
              url: '<?php echo base_url('director/add_director_award/'); ?>',//repair
              type: 'POST',
              data: form_data, // $(this).serialize(); you can use this too
              success: function(msg) {

                        //alert("Work Experience Added Successfully.");
                    alert("Awards And Recognition Added Successfully..!! ");
                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(msg){
                 var saveawardDiv = document.getElementById('award_parent_div');
                $(saveawardDiv).addClass("active");

               $("#showEditProfileForm").html(msg);

                console.log(msg);
                $('.nav-tabs a[href="#nav-award"]').tab('show');
            }
       });


              }

         });
        }
        else{
       //  alert("Please Enter All The Mandatory Fields");
         return false;
        }
        }


        

        function deleteAward(id)
      {
        
              var r=confirm("Do you want to delete this Award?");
              if (r==true)
              {
                 
                  $.ajax({
                       
                        url: '<?php echo base_url('director/delete_award/'); ?>'+id,
                      
                      })
                   .done(function (res) {
                      console.log(res);
                    if(res.status="success"){
    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var awardDiv = document.getElementById('award_parent_div');
                $(awardDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-award"]').tab('show');
            }
       });


                        
                }
              });


                  
              
              }
              else
              {
                  return false;
              }
          }
      function GetAward($data)
      {
      //alert(1);
      //alert("award_year" +$data);

       // var id=document.getElementById("project_type" +$data).value;

      var $award_title_new=document.getElementById("award_title" +$data).value;
      var $award_year_new=document.getElementById("award_year" +$data).value;
      var $award_for_new=document.getElementById("award_for" +$data).value;
      var $add_details_new=document.getElementById("add_details" +$data).value;
        
       //alert($project_title_new);
       updateAward($data);
        
      }

        </script>
                  
                  <script type="text/javascript">
                      function updateAward($data){
        //  alert("hi");
         // e.preventDefault();
         //alert($data);
         var $award_title_new=document.getElementById("award_title" +$data).value;
      var $award_for_new=document.getElementById("award_for" +$data).value;
      var $award_year_new=document.getElementById("award_year" +$data).value;
      var $add_details_new=document.getElementById("add_details" +$data).value;
        

          console.log("Inside award function........................");
            var validation_status_awards = directorFormValidateAwards($data);
            //alert(validation_status_awards);
            console.log(validation_status_awards);
            if(validation_status_awards == true ) {
              $("#error-box-award").hide(); 
              var form_data = new FormData();  
            // alert("hiii");
            //pretty-print('hiii'); 
              //form_data.append("directorId", $('#directorId').val());
                      form_data.append("award_title", $award_title_new);    
                      form_data.append("award_for", $award_for_new); 
                      form_data.append("award_year", $award_year_new);
                      form_data.append("add_details",$add_details_new);    
                      
                     //alert('additional_info');
                      // form_data.append("additional_info", $('#additional_info_new').val());
                      var jsonData = {
                        "project_type":$award_title_new,
                        "project_title":$award_for_new,
                        "production_name":$award_year_new,
                        "year":$add_details_new,
                        
                      }

                      console.log("jsonData", jsonData);
                      $.ajax({
                       //alert("1");

                      url: '<?php echo base_url('director/dir_award/'); ?>'+ $data,
                        type: 'POST',              
                        data : form_data,
                        processData: false,
                        contentType: false,
                        dataType: "json"
                      })
                       .done(function (res) {
                      //alert("hiii");
                       var awardDiv = document.getElementById('award_parent_div'+ $data);
                      awardDiv.classList.remove("show-border");
                     
                      console.log("RESULT---------------------------",res);
                      if(res.status="success"){
                        alert("Awards And Recognitions Experience Successfully.");
                           document.getElementById('award_title'+$data).readOnly = true;
                    document.getElementById('award_for'+$data).readOnly = true;
                     document.getElementById('award_year'+$data).readOnly = true;
                      document.getElementById('add_details'+$data).readOnly = true;
                       
                           document.getElementById('saveBtnAward'+$data).style.display = "none";
                      document.getElementById('hideSaveAward'+$data).style.display = "none";
                          
       //                  console.log($data);
       // $("hideSaveAward"+$data).hide();      

                        console.log($data);
       $("hideSaveAward"+$data).hide();
                   $(".hideIconaward"+$data).show();
                      
                     
                     // window.location.href="<?php // echo base_url('dashboard/userprofile')?>";
                      }
                      else if(res.status="fail"){
                        $("#error-box-award").show();            
                        $("#error-box-award").html(res.reason);
                      }
                      else{
                        console.log("Fail");
                      }
                        //alert(res);             
                    });
                    // .done(function (res) {
                    //   alert("hiii");
                    //   console.log("RESULT---------------------------",res);
                    //   if(res.status="success"){
                    //     alert("Award and Recognition updated Successfully.");
                    //   window.location.href="<?php  //echo base_url('dashboard')?>";
                    //   }
                    //   else if(res.status="fail"){
                    //     $("#error-box").show();            
                    //     $("#error-box").html(res.reason);
                    //   }
                    //   else{
                    //     console.log("Fail");
                    //   }
                    //   alert(res);             
                    // });
            }
            else{
             // alert("Please Enter All The Mandatory Fields");
            return false;
            }

                  
              //});
              } 
         
            function directorFormValidateAwards($data)
                {   
                 // alert("awards validation_status");
                    var status = true; 
      var $award_title_new=document.getElementById("award_title" +$data).value;
      var $award_for_new=document.getElementById("award_for" +$data).value;
      var $award_year_new=document.getElementById("award_year" +$data).value;
      var $add_details_new=document.getElementById("add_details" +$data).value;         

            var award_title=$award_title_new;
            var award_for=$award_for_new;
            var award_year=$award_year_new;
            var add_details=$add_details_new;

            
           
                    if(award_title.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Award Title.<strong>");
                      status = false;
                    }            
                    else if(award_for.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Award For.<strong>");
                      status = false;
                    }     
                    else if(award_year.trim() == '') { 
                      $("#error-box-award").show();            
                      $("#error-box-award").html("<strong> * Please Enter Award Year.<strong>");
                      status = false;
                    } 
                    
                    // else if(add_details.trim() == '') { 
                    //   $("#error-box").show();            
                    //   $("#error-box").html("<strong> * Please Additional Details.<strong>");
                    //   status = false;
                    // } 
                    
                    return status;
                    console.log(status);
                }

                  
            
        
              function newAward(id, awardresultdata)
              {
                   for(var i=0;i<awardresultdata.length;i++) {
                     if (awardresultdata[i].award_id == id) {
                     console.log("Inside IF: ", awardresultdata[i].award_id);
                   
                     var awardDiv = document.getElementById('award_parent_div'+id);
                  awardDiv.classList.add("show-border");

                    //$('input[type="text"], textarea').removeAttr('readonly');
                   document.getElementById('award_title'+id).readOnly = false;
                    document.getElementById('award_for'+id).readOnly = false;
                     document.getElementById('award_year'+id).readOnly = false;
                      document.getElementById('add_details'+id).readOnly = false;
                       
                           document.getElementById('saveBtnAward'+id).style.display = "block";
    document.getElementById('hidecloseaward'+id).style.display = "block";

                             $("#hideSaveAward"+id).show();
                             $("#hidecloseaward"+id).show();

                   $(".hideIconaward"+id).hide();

                     }
                     else
                     {
      console.log("Inside ELSE: ", awardresultdata[i].award_id);
                      //console.log("Inside IF: ", awardresultdata[i].award_id);
                      var tempId = awardresultdata[i].award_id;
                         var awardDiv = document.getElementById('award_parent_div'+tempId);
                  awardDiv.classList.remove("show-border");

                    //$('input[type="text"], textarea').removeAttr('readonly');
                   document.getElementById('award_title'+tempId).readOnly = true;
                    document.getElementById('award_for'+tempId).readOnly = true;
                     document.getElementById('award_year'+tempId).readOnly = true;
                      document.getElementById('add_details'+tempId).readOnly = true;
                       
                           document.getElementById('saveBtnAward'+tempId).style.display = "none";
                           document.getElementById('hidecloseaward'+tempId).style.display = "none";
                             $("#hideSaveAward"+tempId).hide();
                              $("#hidecloseaward"+tempId).hide();

                   $(".hideIconaward"+tempId).show();
                     }

                   }
                   $(".view-award-section").hide();

                  //$(".add-work-details").show();
                 $(".hideaddaward").hide();
                  $(".addawardhide").hide();
                  // $(".hideSaveWork").show();
                   $(".hideSaveAward").show();
                  $(".hideIconaward"+resultDataAward[i].award_id).show();
                 

              }
        </script>
      <!-- End  Awards And Recognition Section  -->
      <!-- Social Link Section  -->
                   <div class="tab-pane fade" id="nav-socialLink" role="tabpanel" aria-labelledby="nav-socialLink-tab">
                     <!-- <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                          <h3 class="txtred">Social Links </h3>
                      <p class="txtred">Please provide the supporting social links</p>
                       </div>
                     </div> -->
                      
                    
                   <div id="awards" style="background-color: #fff;">
                      <form class="" method="post" id="formId" action="" enctype="multipart/form-data" style="padding-left: 37px;padding-right: 37px;padding-top: 20px;padding-bottom: 20px;/* padding: 36px; */">

                        <?php 
                            foreach ($result as $value) {
                            //print_r($value);exit;
                             ?>
                           
                           <div class="add-more-block row" >
<!-- start -->


<!-- end -->

                        <div class="row" id="social_parent_div" style="
    width: 100%;
    text-align: center;
">

                            <div class="col-lg-12">
                        <div class="row">
                       <!-- <div class="col-lg-6 text-center "> -->
                         <!--  <h3 class="txtred" style="margin-right: -388px;">Social Links</h3> -->
                           <!--  </div> -->

                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hideIconsocial" style="">
                        
                        <i class="fa fa-edit" data-toggle="modal" onclick="newSocial()" style="
                        float: right;
          display: initial;
          font-size: 21px;
          padding-top: 9px;
       /*   margin-left: 282px;*/
    cursor: pointer;
    
          "></i>
                       </div>
                     </div>
                     </div>

<!-- strat -->
  

<!-- end -->



                            <!-- ************** -->
                           <div class="col-lg-12" >
                                    <!-- <div class="col-lg-6 "style="padding-left: 72px;padding-top: 15px;"> -->
                                     <div class="row">
                                      <div class="col-lg-12"> </div>
                                      
                                       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 15px;" id="stylechnage">
                                           
                                 <?php 

$facebook_url=$value['facebook_url'];

// echo $facebook_url;
 if (false === strpos($facebook_url, '://')) {
    $facebook_url = 'http://' . $facebook_url;
   
}else
{
   $facebook_url = $facebook_url;
}
$instagram_url=$value['instagram_url'];
if (false === strpos($instagram_url, '://')) {
    $instagram_url = 'http://' . $instagram_url;
    // echo $in_url;exit;
}
else
{
   $instagram_url = $instagram_url;
}

   $twitter_url=$value['twitter_url'];
   if (false === strpos($twitter_url, '://')) {
    $twitter_url = 'http://' . $twitter_url;
  // echo $tw_url;exit;
}
else
{
   $twitter_url = $twitter_url;
}

   $website_url=$value['website_url'];
    if (false === strpos($website_url, '://')) {
    $website_url = 'http://' . $website_url;
   // echo $wb_url;exit;
}
else
{
   $website_url = $website_url;
}
   $youtube_url=$value['youtube_url']; 
   // echo $youtube_url;exit;
   if (false === strpos($youtube_url, '://')) {
    // echo $youtube_url;exit;
    $youtube_url = 'http://' . $youtube_url;
   // echo $youfft_url;exit;
}
else
{
   $youtube_url = $youtube_url;
}
    $imdb_url=$value['imdb_url'];
    if (false === strpos($imdb_url, '://')) {
    $imdb_url = 'http://' . $imdb_url;
   // echo $fb_url;
}
else
{
   $imdb_url = $imdb_url;
}

                                 ?> 

<div class="col-lg-12" >
  <div class="row" style="padding-bottom: 12px;">
  <div class="col-lg-1">
 <a href="<?php echo $facebook_url;?>" target="_blank" style="cursor:pointer;">
     <i class="fa fa-facebook mr-2" style="
    color: #3B5998;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
  </div>
  <div class="col-lg-5">
      <input type="text" class="social-link-input-class" title="<?php echo $facebook_url;?>" value="<?php echo $facebook_url;?>"  id="facebook" style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;
          " readonly name="facebook"   placeholder="facebook"/>
  </div>
 

    <div class="col-lg-1">
      <a href="<?php echo $instagram_url;?>" target="_blank" style="cursor:pointer;"> <i class="fa fa-instagram mr-2"  style="
    color: #cd486b;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                
    </div>
    <div class="col-lg-5">
       <input type="text" style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 11px;*/cursor: pointer;/*color: #cd486b;*/
          "
 readonly class="social-link-input-class" title="<?php echo $instagram_url;?>" value="<?php echo $instagram_url;?>"  id="instagram"  name="instagram"   placeholder="Instagram"/>
    </div>  
  </div>
</div>


<div class="col-lg-12">
  <div class="row" style="padding-bottom: 12px;">
    <div class="col-lg-1">
  <a href="<?php echo $website_url;?>" target="_blank">
                                         

     <i class="fa fa-globe mr-2"  style="
    color: #cd486b;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i> </a>
    </div>
    <div class="col-lg-5">
        <input type="text"  readonly class="social-link-input-class" title="<?php  echo $website_url;?>" value="<?php  echo $website_url;?>"  id="website"  name="website"  style="
         /* padding: 5px;*/
          width: 100%;
          font-size: 14px;
          /*padding-left: 13px;*/
          cursor: pointer;
          "  placeholder="Website Link"/>
      
    </div>  
 
    <div class="col-lg-1">
       <a href="<?php echo $twitter_url;?>" target="_blank">
        <i class="fa fa-twitter mr-2"  style="
    color: #1DA1F2;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                          
    </div>
    <div class="col-lg-5">
       <input type="text" class="social-link-input-class" style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;/*color: #1DA1F2;*/
          " readonly value="<?php echo $twitter_url; ?>" title="<?php echo $twitter_url;?>" id="twitter"  name="twitter"   placeholder="Twitter"/>
    </div>  
  </div>
</div>


      <div class="col-lg-12">
  <div class="row" style="padding-bottom: 12px;">
    <div class="col-lg-1">
      <a href="<?php echo $youtube_url;?>" target="_blank">  <i class="fa fa-youtube mr-2"  style="
    color: #ff0000;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
    </div>
    <div class="col-lg-5">
       <input type="text" class="social-link-input-class " style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 20px;*/cursor: pointer;/*color: #ff0000;*/
          " title="<?php echo $youtube_url; ?>" readonly value="<?php echo $youtube_url; ?>"  id="youtube"  name="youtube"   placeholder="YouTube"/>
    </div>  
  
              <div class="col-lg-1">
                 <a href="<?php echo $imdb_url;?>" target="_blank">
                   <i class="fa fa-imdb mr-2"  style="
    color: #f5de50;font-size: 30px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 17px;
    text-align: center;
    padding-left: 24px;
"></i></a>
                
              </div>

                <div class="col-lg-5">
    <input type="text" readonly class="social-link-input-class" style="
          /*padding: 5px;*/
          width: 100%;
          font-size: 14px;
         /* padding-left: 25px;*/cursor: pointer;/*color: #f5de50;*/
          " value="<?php echo $imdb_url;?>" id="imdb"  name="imdb"   placeholder="IMDB"/>
                </div>            
                  </div>
                    </div>                                    <!-- background-color: #cecece94; -->
                                             


                                              
                                        <!-- *********** -->
 <!-- <div class="col-lg-6" style="
    padding-left: 130px;padding-top: 15px;
"> -->
                                         <!-- class="col-lg-6 col-md-12 col-sm-12 col-xs-12" -->
                                        

                                            
                                           

                                           
                                        </div>
                                       
                                           <div class="col-lg-12 text-right hideSaveSocial" style="
    margin-bottom: 20px;">
                                          

                                          <button type="button" name ="submit" value="submit" class="btn btn-default  pull-right" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    "id="btnDirSocialLinks">Save</button>
    <button type="button" class="btn btn-default  pull-right" id="closesocial" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    " onclick="goBacksocial()">Cancel</button>

    <script>
    function goBacksocial() {
             var socialDiv = document.getElementById('social_parent_div');
                      socialDiv.classList.remove("show-border");
               
               document.getElementById('facebook').readOnly = true;
                document.getElementById('instagram').readOnly = true;
                 document.getElementById('twitter').readOnly = true;
                  document.getElementById('youtube').readOnly = true;
                   document.getElementById('website').readOnly = true;
                    document.getElementById('imdb').readOnly = true;
                     document.getElementById('btnDirSocialLinks').readOnly = "none";
                     // document.getElementById('stylechnage').style.paddinBottom = "100px";

        $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
               //document.getElementById('stylechnage').style.paddingTop   "null";
               //document.getElementById("stylechnage").style.display = null;
              // document.getElementById.classList.remove("stylechnage");


// $("#stylechnage").removeAttr("style"); 
// $("div.stylechnage").removeAttr("style");
 // socialDiv.classList.remove("style");

                 var profilesaveDiv = document.getElementById('profile_parent_div');
                $(profilesaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-socialLink"]').tab('show');
            }
       });

     //document.getElementById('closesocial').readOnly = "none";


               $(".hideSaveSocial").hide();
                 $(".closesocial").hide();
              
                 $(".hideIconsocial").show();
               

       
                     
    }
    </script>











                                           
                                        </div>
                                     </div>
                                        <!-- ********** -->

                          </div>
                        </div>
                      </div>
                          <div class="col-md-12">
                            <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
                         
                              <?php } ?>
                                       
                  </form>
                   </div>
                </div>
                <script type="text/javascript">
         
              $("#btnDirSocialLinks").click(function(){
                 // var validation_status = directorFormValidatesoc();
            //var validation_status = directorFormValidatesoc();
            // console.log(validation_status);
            // if(validation_status == true ) {
              // $("#error-box").hide(); 
              var form_data = new FormData();   
              //form_data.append("directorId", $('#directorId').val());
                      form_data.append("facebook", $('#facebook').val());    
                      form_data.append("instagram", $('#instagram').val()); 
                      form_data.append("twitter", $('#twitter').val());
                      form_data.append("youtube", $('#youtube').val());    
                      form_data.append("website", $('#website').val()); 
                      form_data.append("imdb", $('#imdb').val());
                      
                      $.ajax({
                        url: '<?php echo base_url('director/dir_social_links/'); ?>',

                        type: 'POST',              
                        data : form_data,
                        processData: false,
                        contentType: false,
                        dataType: "json"
                      })
                    .done(function (res) {
                      //console.log(res.status);
                     if(res.status="success"){
                        var socialDiv = document.getElementById('social_parent_div');
                      socialDiv.classList.remove("show-border");
               
                        alert("Social Link Updated Successfully.");
                       // // location.reload();
                       // $('#soc_links').load(document.echo base_url('dashboard/sidebar')+  ' #soc_links');
                       
                 var soc_links = document.getElementById('soc_links').style.paddingLeft = "4px";
                
                 $('#soc_links').load(window.location.href + ' #soc_links');
                       $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var profilesaveDiv = document.getElementById('profile_parent_div');
                $(profilesaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-socialLink"]').tab('show');
            }
       });

          // var awards=document.getElementById('awards');
          // alert(awards);
          //  $('#awards').load(window.location.href + ' #awards');
            // $('#social_parent_div').load(window.location.href + ' #social_parent_divrerefresh');

            // $("social_parent_div").load('<?php echo base_url('dashboard/userprofile/');?>');

               document.getElementById('facebook').readOnly = true;
                document.getElementById('instagram').readOnly = true;
                 document.getElementById('twitter').readOnly = true;
                  document.getElementById('youtube').readOnly = true;
                   document.getElementById('website').readOnly = true;
                    document.getElementById('imdb').readOnly = true;
                     document.getElementById('btnDirSocialLinks').readOnly = "none";


     document.getElementById('closesocial').readOnly = "none";


               $(".hideSaveSocial").hide();
                 $(".closesocial").hide();
              
                 $(".hideIconsocial").show();
                        //window.location.href="<?php //echo base_url('dashboard')?>";
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
            // }
            function directorFormValidate()
                {   
                    var status = true;         
                  var facebook=$("#facebook").val();
            var instagram=$("#instagram").val();
            var twitter=$("#twitter").val();
            var youtube=$("#youtube").val();
            var website=$("#website").val();
            var imdb=$("#imdb").val();
                    if(facebook.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Name.<strong>");
                      status = false;
                    }            
                    else if(instagram.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Email-id.<strong>");
                      status = false;
                    }     
                    else if(twitter.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Mobile Number.<strong>");
                      status = false;
                    } 
                    
                    else if(youtube.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter City.<strong>");
                      status = false;
                    } 
                    else if(website.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Zipcode.<strong>");
                      status = false;
                    } 
                    else if(imdb.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Whatsapp Number.<strong>");
                      status = false;
                    } 
                    
                    return status;
                    console.log(status);
                }

                  
              }); 
              
            function newSocial()
            {
                 $(".hideSaveSocial").show();
                 $(".hideIconsocial").hide();
                  $(".closesocial").show();

                 var socialDiv = document.getElementById('social_parent_div');
                      socialDiv.classList.add("show-border");

  document.getElementById('stylechnage').style.paddingTop = "25px";
               document.getElementById('facebook').readOnly = false;
              document.getElementById('facebook').style.cursor = "initial";
              // document.getElementById("facebook").removeClass("a");
              // document.getElementById('facebook').attr('href')="#";  
                // document.getElementsByTagName("a")[0].removeAttribute("class");   

              // $('#link a').removeClass('btn')
                document.getElementById('instagram').readOnly = false;

                document.getElementById('instagram').style.cursor = "initial";
                  // document.getElementsByTagName("a")[1].removeAttribute("class");
                 document.getElementById('twitter').readOnly = false;
                  document.getElementById('twitter').style.cursor = "initial";
                  // document.getElementsByTagName("a")[2].removeAttribute("class");
                  document.getElementById('youtube').readOnly = false;
                   document.getElementById('youtube').style.cursor = "initial";
                  // document.getElementsByTagName("a")[3].removeAttribute("class");
                   document.getElementById('website').readOnly = false;
                    document.getElementById('website').style.cursor = "initial";
                  // document.getElementsByTagName("a")[4].removeAttribute("class");
                    document.getElementById('imdb').readOnly = false;
                     document.getElementById('imdb').style.cursor = "initial";
                  // document.getElementsByTagName("a")[5].removeAttribute("class");
                     document.getElementById('btnDirSocialLinks').readOnly = false;

 // $("a").attr("href", "javascript: void(0);" ); 

     document.getElementById('closesocial').readOnly = false;


               //      document.getElementById('btnDirectorProfile').readOnly = false;
            }  
        </script>

      <!-- End Social Link Section  -->
      <!--       Associations Section  -->
      <!-------new page-------- >

        <!-----new page end here ------------>





          <div class="tab-pane fade" id="nav-associations" role="tabpanel" aria-labelledby="nav-associations-tab">
      <style type="text/css">
        .add-more-block{
        border: 2px solid #ddd;
      }
      </style>
             <!-- <div class="row" style="margin:0 auto">
               
                       <div class="col-lg-12 text-center">
                          <h3 class="txtred">Associations</h3>
                      <p class="txtred">Tell us more about your associations</p>
                       </div>
                     </div> -->
                      <div class="col-lg-12">
                        <div class="row">
                       <div class="col-lg-6 text-center ">
                         <!--  <h3 class="txtred" style="margin-right: -388px;">Associations</h3> -->
                            </div>
                     <!--   <div class="col-lg-6 hideIconassoc">
                        
                        <i class="fa fa-edit" data-toggle="modal" onclick="newAssoc()" style="font-size: 34px;
          padding-top: 19px;
          margin-left: 382px;
    cursor: pointer;
    "></i>
                       </div> -->
                     </div>
                     </div>

               <div id="award" style="background-color: #fff;">
              <form class="form-inline" action="" method="post" style="
        margin-bottom: -22px;
    ">
                
                <!-- <div class="col-md-12 text-center"> -->
                  <!-- <br> -->
                  <!-- <h2>Education: Add educational Qualifications(if any)</h2><hr> -->
                <!-- </div> -->

                
                  
    <?php  $countresultassoc="SELECT COUNT(assoc_id) FROM director_assoc";
                    //echo $countresultwork;
                     $query=$this->db->query($countresultassoc);
                    
                   $queryresultassoc=$query->result_array('assoc_id');
                  // print_r($queryresu);
                  // Array ( [0] => Array ( [COUNT(work_id)] => 0 ) )
                   $queryresultassoc=$queryresultassoc[0]['COUNT(assoc_id)'];
                     $resultaddassoc = $this->db->select('*')->from('director_assoc')->get()->result_array();
                  ?>
                  <?php if($queryresultassoc>=1)
                  {?>
               

                  <div class="pull-right col-md-12" style="
        padding-top: 5px;
        padding-bottom: 5px;
    ">
                      
                                <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo(<?php echo htmlspecialchars(json_encode($resultaddassoc)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add More Associations</label></a>
                            </div>
                             <?php }
                           else
                          { ?>
                             <div class="pull-right col-md-12" style="
        padding-top: 5px;
        padding-bottom: 5px;
    ">
                      
                                <a href="javascript:void(0);" class="addAssocBtnDemo" onclick="Assocdemo(<?php echo htmlspecialchars(json_encode($resultaddassoc)); ?>)" title="Add field"> <i class="fa fa-d" aria-hidden="true"></i>&emsp;<label style="font-size: 20px; display: contents;color:green;cursor: pointer;">Add Associations</label></a>
                            </div>
                             <?php }?>

                              <form id="association">

      <div class="video-box col-md-12">
       <?php
                            $result = $this->db->select('*')->from('director_assoc')->get()->result_array();
                                           // print_r($result);exit;
                                          foreach ($result as $valu) {  ?>
        <div class="add-more-block row" id="assoc_parent_div<?php echo $valu['assoc_id']?>" style="margin-bottom: 10px;margin-left: 10px;margin-right: 10px;">
          <div class="col-lg-12 hideIconassoc<?php echo $valu['assoc_id']?>">
                        <i class="material-icons float-right" onclick="deleteAssoc(<?php echo $valu['assoc_id']?>)" style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;
          ">delete_forever</i>

                        <i class="fa fa-edit" data-toggle="modal" onclick="newAssoc(<?php echo $valu['assoc_id']?>, <?php echo htmlspecialchars(json_encode($result)) ?>)" style="
          float: right;
          font-size: 21px;
          padding-top: 19px;
          margin-left: 10px;
    cursor: pointer;
          "></i>

                  


                       </div>
          <!-- background-color: #ddd;margin: 0px"> -->
                    <div class="col-md-6">

      <div class="form-group row ">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail">Association Name</label>

            <span>:</span>
          <div>
            <input type="text" style="font-size: 14px;margin-left: 4px;" readonly class="form-control-plaintext association_name<?php echo $queryresultassoc;?> " class="form-control" readonly id="association_name<?php echo $valu['assoc_id']?>" name="association_name" value="<?php echo $valu['association_name'];?>" >
          </div>
      </div>
                                           


                                        </div>
                     <div class="col-md-6">
      <div class="form-group row">
          <label style="
    font-size: 14px;width: 150px;
" for="staticEmail" >Association ID</label>
<span>:</span>
          <div >

            <input type="text" style="font-size: 14px;margin-left: 4px;" readonly class="form-control-plaintext associaton_id<?php echo $queryresultassoc;?>" name="association_id" id="associaton_id<?php echo $valu['assoc_id']?>" value="<?php echo $valu['associaton_id'];?>" class="form-control" >
          </div>
      </div>
                                            
                                          
                                         
                                        </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideSaveAssoc" id="hideSaveAssoc<?php echo $valu['assoc_id']?>" style="
          
          padding: 20px;
          ">
          <button type="button"  name="submit" id="saveBtnAssoc<?php echo $valu['assoc_id']?>" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 27px;
    " onclick="GetAssoc(<?php echo $valu['assoc_id']?>)"
          class="btn btn-default btn-block" >Save</button>




    <button type="button" id="hidecloseasoc<?php echo $valu['assoc_id']?>" onclick="goBack(<?php echo $valu['assoc_id']?>)" style="
        text-align: right;
        float: right;
        margin-top: 0.3rem;
        width: 85px;
        /* margin-left: 743px; */
        /* float: right; */
        display: block;
        background-color: rgb(255, 0, 124);
        height: 40px;
        padding-left: 20px;
    " class="btn btn-default btn-block">Cancel</button>

    <script>
    function goBack($data) {
    var assocDiv = document.getElementById('assoc_parent_div'+$data);
                      assocDiv.classList.remove("show-border");
       
                     
       
               document.getElementById('association_name'+$data).readOnly = true;
                document.getElementById('associaton_id'+$data).readOnly = true;
                 
                  document.getElementById('saveBtnAssoc'+$data).style.display = "none";
     document.getElementById('hidecloseasoc'+$data).style.display = "none";

                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var projectsaveDiv = document.getElementById('assoc_parent_div');
                $(projectsaveDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-associations"]').tab('show');
            }
       });
                
       $(".hideSaveAssoc"+$data).hide();

    $(".hidecloseasoc"+$data).hide();
              $(".hideIconassoc"+$data).show();









                  // $(".hidecloseaward"+$data).hide();
                   
                      
       
                     
    }
    </script>
          


                             </div>
                  </div> 
               <!--    <div class="col-md-12">
                            <div id="error-box-assoc" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div>  -->
                  <?php } ?> 
                </div>
              </form>
               

                 <div class="video-box col-md-12 view-association-section" style="padding-top: 20px;padding-bottom: 10px;padding-right: 38px;/* margin-left: 10px; *//*margin-right: 74px;*/padding-left: 41px;">
                   <div class="add-more-block row"  style="
          
          margin-bottom: -1px;" >

      

         <!--  <style="background-color: #ddd;></style> -->
                    
     
                    <div class="col-md-6">
                    
                                          <div class="form-group">
                                            <label>Association Name</label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" class="form-control" id="association_name" name="association_name" style="
          padding: 5px;"  value="" >
                                            </div>
                                        
                                        </div>
                     <div class="col-md-6">
                        <button class="closeBtn" type="button" onclick="buttondemo()"> X </button>

                                            <div class="form-group">
                                              <label>Association ID</label>&nbsp;&nbsp;&nbsp;
                                              <input type="text" name="association_id" style="
          padding: 5px;" id="associaton_id" value="" class="form-control">
                                              <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
                                                <!-- <div class="row  pull-right">
                                              <button class=" " type="button" onclick="buttondemo()"> close </button>
                                            </div> -->
                                            </div>
                                          
                                         
                                        </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hideaddassoc"style="
          
          padding: 20px;
          ">
                                   <button type="button" onclick="AddAssoc()" name="submit" style="width: 110px;
          float: right; background-color: #ff007c;" class="btn btn-default btn-block">Add</button>

        <!--   id="btnDirectorWorkexp" -->
                             </div>

                                           <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right"style="
          
          padding: 20px;
          "> -->
                                          <div class="row  pull-right">
                                              
                                            </div>

                                      </div>
                                    </div> 

                               


<div class="col-md-12">
                            <div id="error-box-assoc" style="color:red;text-transform: initial;font-weight: bold;"></div>
                            </div> 
       

                
              </form>

      </div>
      </div>

                <script type="text/javascript">

                  function Assocdemo(resultDataAssoc)
      {
       // alert(10);
  console.log("resultDataAssoc", resultDataAssoc);

   for(var i=0;i<resultDataAssoc.length;i++)
         {
          //alert(resultDataAssoc[i].assoc_id);
            console.log("Inside IF: ", resultDataAssoc[i].assoc_id);
                  var assocDivdata = document.getElementById('assoc_parent_div'+resultDataAssoc[i].assoc_id);
                  assocDivdata.classList.remove("show-border");
                   document.getElementById('association_name'+resultDataAssoc[i].assoc_id).readOnly = true;
                  document.getElementById('associaton_id'+resultDataAssoc[i].assoc_id).readOnly = true; 
            document.getElementById('saveBtnAssoc'+resultDataAssoc[i].assoc_id).style.display = "block";



                  $(".view-association-section").show();
                 $(".hideaddassoc").show();
                  // $(".addworkhide").show();
                  $(".hideSaveAssoc").hide();
                   $(".hideIconassoc"+resultDataAssoc[i].assoc_id).show();
                
           
           }

   $(".view-association-section").show();
                 $(".hideaddassoc").show();
                  // $(".addworkhide").show();
                  $(".hideSaveAssoc").hide();
                   $(".hideIconassoc"+resultDataAssoc[i].assoc_id).show();
         

       }


      
      function AddAssoc()
        {
          var status = true; 
           var association_name=$("#association_name").val();
              //alert(project_type);
              var association_id=$("#association_id").val();

    if(association_name.trim() == '') { 
                      $("#error-box-assoc").show();            
                      $("#error-box-assoc").html("<strong> * Please Enter association Name.<strong>");
                      status = false;
                    }
                    else if(association_id == '') { 
                      $("#error-box-assoc").show();            
                      $("#error-box-assoc").html("<strong> * Please Enter Association Id.<strong>");
                      status = false;
                    }
                    
                  //  alert(status);         
          // $('.submit').click(function(){
              //var id = (this.id);
              if(status==true){
              var form_data = {            //repair
                //  work_id: id,
                  association_name: $('#association_name').val(),
                  association_id: $('#associaton_id').val(),
                 
              };

          $.ajax({
            
              url: '<?php echo base_url('director/add_director_assoc/'); ?>',//repair
              type: 'POST',
              data: form_data, // $(this).serialize(); you can use this too
              success: function(msg) {
                    alert("Associations Added Successfully..!! ");
                    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(msg){
                 var saveassocDiv = document.getElementById('assoc_parent_div');
                $(saveassocDiv).addClass("active");

               $("#showEditProfileForm").html(msg);

                console.log(msg);
                $('.nav-tabs a[href="#nav-associations"]').tab('show');

            }
       });

              }

         });
        }
        else{
          // alert(4);
          // alert("Please Enter All The Mandatory Fields");
         return false;
        
    }
        }
      function GetAssoc($data)
      {
      //alert("association_name" +$data);

       // var id=document.getElementById("project_type" +$data).value;

      var $association_name_new=document.getElementById("association_name" +$data).value;
      var $association_id_new=document.getElementById("associaton_id" +$data).value;

       //alert($association_name_new);
      updateAssoc($data);
      }


       function buttondemo()
       {
        $('.view-association-section').hide();
         document.getElementById("association_name1").value = '';
         document.getElementById("association_id1").value = '';
        }
      function deleteAssoc(id)
      {
        
              var r=confirm("Do you want to delete this Association?");
              if (r==true)
              {
                 
                  $.ajax({
                       
                        url: '<?php echo base_url('director/delete_assoc/'); ?>'+id,
                 
                      
                      })
                    .done(function (res) {
                      console.log(res);
                    if(res.status="success"){
    $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var assocDiv = document.getElementById('assoc_parent_div');
                $(assocDiv).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-associations"]').tab('show');
            }
       });


                        
                }
              });

                  
              
              }
              else
              {
                  return false;
              }
          }
      function updateAssoc($data){

             
              //alert($data);
      var $association_name_new=document.getElementById("association_name" +$data).value;
      var $association_id_new=document.getElementById("associaton_id" +$data).value;
     // alert($association_id_new);
      console.log(document.getElementById("associaton_id" +$data).value);
      console.log("Inside assoc function........................");
             // $("#btnDirectorAsso").click(function(){
            var validation_status_assoc = directorFormValidateassoc($data);
         //   alert(validation_status_assoc);
            console.log(validation_status_assoc);
            if(validation_status_assoc == true ) {
              $("#error-box-assoc").hide(); 
              var form_data = new FormData();     
                  //al

              //form_data.append("directorId", $('#directorId').val());
                      form_data.append("association_name",$association_name_new);    
                      form_data.append("associaton_id", $association_id_new); 

                      
                      var jsonData = {
                        "association_name":$association_name_new,
                        "associaton_id":$association_id_new,
                        
                      }

                      console.log("jsonDataassoc", jsonData);
                      
                      $.ajax({
                        url:'<?php echo base_url('director/dir_assoc/'); ?>'+ $data, 


                        type: 'POST',              
                        data : form_data,
                        processData: false,
                        contentType: false,
                        dataType: "json"
                      })
                    .done(function (res) {
                      //alert("hiii");
                      console.log("RESULT---------------------------",res);
                     var assocDiv = document.getElementById('assoc_parent_div'+$data);
                      assocDiv.classList.remove("show-border");
       
                      if(res.status="success"){
                        alert("Associations Added Successfully.");
       
               document.getElementById('association_name'+$data).readOnly = true;
                document.getElementById('associaton_id'+$data).readOnly = true;
                 
                  document.getElementById('saveBtnAssoc'+$data).style.display = "none";
    document.getElementById('hidecloseasoc'+$data).style.display = "none";
       $(".saveBtnAssoc"+$data).hide();
       $(".hidecloseasoc"+$data).hide();
       
              $(".hideIconassoc"+$data).show();




                    //  window.location.href="<?php // echo base_url('dashboard')?>";
                      }
                      else if(res.status="fail"){
                        $("#error-box-assoc").show();            
                        $("#error-box-assoc").html(res.reason);
                      }
                      else{
                        console.log("Fail");
                      }
                        //alert(res); 

                    });
                  //  alert(1);
                     $(".hideSaveAssoc"+$data).hide();
       $(".hidecloseasoc"+$data).hide();
       
              $(".hideIconassoc"+$data).show();
            }
            
    else{
      //alert("Please Add All The Mandatory Fields Of Associations");
      return false;
    }
                  
              //});
              } 

            function directorFormValidateassoc($data)
                {   
                  //var id=$data;
                 // alert(2);
                  console.log("directorFormValidateassoc", $data);
                    var status = true;         
      var $association_name_new=document.getElementById("association_name" +$data).value;
      var $association_id_new=document.getElementById("associaton_id" +$data).value;
      //alert($association_id_new);

      var association_name= $association_name_new;
            var association_id=$association_id_new;


                    if(association_name.trim() == '') { 
                       $("#error-box-assoc").show();            
                      
                        $("#error-box-assoc").html("<strong> * Please Enter Association Name.<strong>");
                    
                     status = false;
                     
                    }            
                    else if(association_id == '') { 
                      $("#error-box-assoc").show();            
                      $("#error-box-assoc").html("<strong> * Please Enter Association Id.<strong>");
                      status = false;
                    }     
                    console.log("validation_status....................",status);
                    return status;
                }

                  
              

             
            function newAssoc(id,assocresultData)
            {
              //$valu['assoc_id']
               console.log("resultData", assocresultData);
                for(var i=0;i<assocresultData.length;i++) {
                  if (assocresultData[i].assoc_id == id) {
                    console.log("Inside IF: ", assocresultData[i].assoc_id);
              var assocDiv = document.getElementById('assoc_parent_div'+id);
                      assocDiv.classList.add("show-border");
       
                 $('input[type="text"], textarea').removeAttr('readonly');
               document.getElementById('association_name'+id).readOnly = false;
                document.getElementById('associaton_id'+id).readOnly = false;
                 
                   document.getElementById('hidecloseasoc'+id).style.display = "block";
                  document.getElementById('saveBtnAssoc'+id).style.display = "block";
                   $("#hideSaveAssoc"+id).show();
              $(".hideIconassoc"+id).hide();
              $("#hidecloseasoc"+id).show();
              
                  }
                  else
                  {
                     console.log("Inside ELSE: ", assocresultData[i].assoc_id);
                    var tempId = assocresultData[i].assoc_id;
                     var assocDiv = document.getElementById('assoc_parent_div'+tempId);
                      assocDiv.classList.remove("show-border");
       
                 $('input[type="text"], textarea').removeAttr('readonly');
               document.getElementById('association_name'+tempId).readOnly = true;
                document.getElementById('associaton_id'+tempId).readOnly = true;
                 
                  document.getElementById('saveBtnAssoc'+tempId).style.display = "none";
                  document.getElementById('hideSaveAssoc'+tempId).style.display = "none";
               document.getElementById('hidecloseasoc'+tempId).style.display = "none";
               
                   $("#hideSaveAssoc"+tempId).hide();
              $(".hideIconassoc"+tempId).show();
              $(".hidecloseasoc"+tempId).hide();
              
                  }
                }
             
              $(".view-association-section").hide();
                 $(".hideaddassoc").hide();
                  // $(".addworkhide").show();
                  $(".hideSaveAssoc").show();
                   $(".hideIconassoc"+resultData[i].work_id).show();
                
            } 
        </script>

       <!--  End Associations  -->
              </div>
            
            </div>
          </div>
        </div>
      </section>
      <!-- ./Tabs -->
      <script type="text/javascript">
        
      </script>
      <script type="text/javascript">
        $('#addfiles').on('click', function(e){
        e.stopPropagation();
    $('#profile_pic').click();
    return false;
        // your code
    });
     $('#addscript').on('click', function(e){
        e.stopPropagation();
    $('#script_name').click();
    return false;
        // your code
    });

    // $('.addfiles').each(function(){$('#profile_pic')[0].click; return false});
    //   // $('.addfiles').on('click', function() { $('#profile_pic').click();return false;});
      // $('.addscript').on('click', function() { $('#script_name').click();return false;});

         $("#btnDirectorProfile").click(function(){
            var validation_status = directorFormValidate() ;
            //console.log(validation_status);
            if(validation_status == true ) {
              $("#error-box").hide(); 
              var form = $('form')[0];
              var form_data = new FormData(form);
                      form_data.append('profile_pic', $('input[type=file]')[0].files[0]);   
                      form_data.append('script_name', $('input[type=file]')[1].files[0]);   
                      form_data.append("companyName", $('#companyName').val());
                      form_data.append("email", $('#email').val());    
                      form_data.append("mobile", $('#mobile').val()); 
                      // form_data.append("password", $('#password').val());
                      form_data.append("address", $('#addhidden1').val());  

                      form_data.append("pincode", $('#pincode').val()); 
                      form_data.append("city", $('#city').val());

                      $.ajax({
                        url: '<?php echo base_url('director/director_editProfile/'); ?>',
                        type: 'POST',              
                        data : form_data,
                        processData: false,
                        contentType: false,
                        dataType: "json"
                      })
                    .done(function (res) {
                      console.log(res);
                    if(res.status="success"){
                        alert("Profile Updated Successfully.");
                        $.ajax({


           // url:'<?php //echo base_url('director/delete_proj/')?>',
             url:'<?php echo base_url('dashboard/myprofile')?>',
            success:function(response){
                 var profileDiv1 = document.getElementById('profile_parent_div');
                $(profileDiv1).addClass("active");

               $("#showEditProfileForm").html(response);

                console.log(response);
                $('.nav-tabs a[href="#nav-home"]').tab('show');
            }
       });
    
               


                 var prof_div = document.getElementById('prof_div').style.paddingBottom = "0px";
                //alert(prof_div);    
                 $('#prof_div').load(window.location.href + ' #prof_div');
               
            
                         var profileDiv = document.getElementById('profile_parent_div');
                      profileDiv.classList.remove("show-border");
         
          document.getElementById('profile_pic').readOnly = true;
         // document.getElementById('companyName').readOnly = false;
          //document.getElementById('email').readOnly = false;
              document.getElementById('mobile').readOnly = true;
          document.getElementById('addhidden1').readOnly = true;
          document.getElementById('pincode').readOnly = true;
          document.getElementById('city').readOnly = true;
          document.getElementById('script_name').readOnly = true;
           document.getElementById('btnDirectorProfile').readOnly = "none";
         document.getElementById('closeprofile').readOnly = "none";


        
  // $("#addhidden1").hide();
   // $("#addhidden").show();
   //       $("#addhidden1").hide();
   document.getElementById('form-control-plaintext').style.display = "none";
    // $("#addhidden").show();
            $(".hideImage").hide();
          $(".hideScript").hide();
          $(".showScript").hide();
            $(".hideSave").hide();
             $(".closeprofile").hide();
          
          $(".hideIcon").show();
                       // window.location.href="<?php echo base_url('dashboard')?>";
                       
                        
                      }
                      else if(res.status="fail"){
                        $("#error-box").show();            
                        $("#error-box").html(res.reason);
                      }
                      else{
                        console.log("Fail");
                      }
                      $("#workExperienceView").show();
                    });
            }
            function directorFormValidate()
                {   
              var status = true;         
              var companyName=$("#companyName").val();
              var email=$("#email").val();
              var mobile=$("#mobile").val();
              // var password=$("#password").val();
              var address=$("#addhidden1").val();
              var pincode=$("#pincode").val();
              var city=$("#city").val();
              // var confirmPassword=$("#confirmPassword").val();    
                    if(companyName.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Company Name.<strong>");
                      status = false;
                    }            
                    else if(email.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Your Email-id.<strong>");
                      status = false;
                    }     
                    else if(mobile.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Your Mobile Number<strong>");
                      status = false;
                    } 
                    // else if(address.trim() == '') { 
                    //   $("#error-box").show();            
                    //   $("#error-box").html("<strong> * Please Enter Your Address<strong>");
                    //   status = false;
                    // } 
                    else if(pincode.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Your Pincode<strong>");
                      status = false;
                    } 
                    else if(city.trim() == '') { 
                      $("#error-box").show();            
                      $("#error-box").html("<strong> * Please Enter Your City<strong>");
                      status = false;
                    } 
                    return status;
                    console.log(status);
                }
                  
              });
        </script>



      <script type="text/javascript">
        function newInfo()
        {
          //alert(1);
          $(".hideImage").show();
          $(".hideScript").show();
          $(".showScript").hide();
          $(".hideSave").show();
            $(".closeprofile").show();
          $(".hideIcon").hide();
          // addhidden
           $("#addhidden").hide();
         $("#addhidden1").show();
          // var profileDiv = document.getElementById('profile_parent_div');
          //             profileDiv.classList.add("show-border");
//document.getElementById('mobile').style.border-bottom="1px";
document.getElementById('mobile').style.borderBottom = "1px solid #000";
document.getElementById('addhidden1').style.borderBottom = "1px solid #000";
document.getElementById('pincode').style.borderBottom = "1px solid #000";
document.getElementById('city').style.borderBottom = "1px solid #000";
  // var prof_div = document.getElementById('prof_div').style.paddingBottom = "0px";
          document.getElementById('profile_pic').readOnly = false;
         // document.getElementById('companyName').readOnly = false;
          //document.getElementById('email').readOnly = false;
          document.getElementById('mobile').readOnly = false;
          document.getElementById('addhidden1').readOnly = false;
          document.getElementById('pincode').readOnly = false;
          document.getElementById('city').readOnly = false;
          document.getElementById('script_name').readOnly = false;
           document.getElementById('btnDirectorProfile').readOnly = false;
           document.getElementById('closeprofile').readOnly = false;

        }
      </script>
