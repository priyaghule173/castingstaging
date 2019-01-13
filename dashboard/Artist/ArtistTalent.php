
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casting Role</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

  <!-- Radio & Checkboxes style  -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/checkbox.css">

  <!-- Modernizr JS -->
  <script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  

<!-- Tabs -->
<section id="tabs">
  <div class="container">
   
    <div class="row">
      <div class="col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
           <a class="nav-item nav-link" id=onclick="myFunction('')" data-toggle="tab" href="<?php echo base_url('dashboard/Artist/ArtistTalent')?>" role="tab" aria-controls="nav-profile" aria-selected="true">Talent</a>

            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sub-Talent</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Interests</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Physical Attributes</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Social Links</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Media</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Experience</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Education</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Additional Info</a>
          </div>
        </nav>
      
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          
              
              <body>
            <div class="fh5co-loader"></div>
  
  <div id="page">

  <div id="fh5co-started">
  
    <div class="container myWizard">
    
      <div class="row animate-box">
        
        <div class="col-md-12">
          <div class="col-md-12 text-center">
            <br>
            <h2>Please Complete the Registration Process</h2><hr>
          </div>
          <div class="col-md-12">



            <form class="form-inline" action="" method="post">
                                  <div class="col-md-12">
                                       <div class="block">
                                        <?php 
                                        
                   //   $talent=explode(',', talent_name);
                                        $talent_name = $this->db->select('*')->from('talent')->get()->result_array();
                                        //print_r($talent_name);
                                    foreach ($talent_name as $key ) {  ?>
                    <div class="checkbox-inline">
                                    <label class="chkcontainer">
                              <?php echo $key['talent_name']; ?>
                              <input type="checkbox" name="talent_name[]" value="<?php echo $key['talent_id'];?>" id="talent_name">
                              <span class="checkmark"></span>
                                                    
                            </label>
                          </div>
                      <?php
                                      }
                                  ?>
                      
                    </div>
                                  </div>
                                 
                                  <div class="row  pull-right"><br>
                  <button type="submit" name="submit" class="btn btn-default btn-block" id="btnArtistTalentRegister">Next</button>
                </div>
            </form>
          </div>
          
        </div>
          
      </div>
    </div>
  </div>

  <?php echo include_once('footer.php'); ?>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

  </body>
  <!-- jQuery -->
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <!-- countTo -->
  <script src="<?php echo base_url()?>assets/js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
  <script type="text/javascript">
$("#btnArtistTalentRegister").click(function(){
      var validation_status = artistFormValidate();
      console.log(validation_status);
      if(validation_status == true ) {
        $("#error-box").hide(); 
        var form_data = new FormData();   
                  
                
                $('input[name="talent_name[]"]:checked').each(function (index, member) {
                  var value = $(member).val();
                    form_data.append('talent_name[]', value);
                });
                $.ajax({

                  url: '<?php echo base_url('artist/artist_talent/'); ?>',
                  type: 'POST',              
                  data : form_data,
                  processData: false,
                  contentType: false,
                  dataType: "json"
                })
              .done(function (res) {
                //console.log(res.status);
                if(res.status="success"){
                  alert("Job Posted Successfully.");
                  window.location.href="<?php echo base_url('artist/artistSubTalent')?>";
                }
                else if(res.status="fail"){
                  $("#error-box").show();            
                  $("#error-box").html(res.reason);
                }
                else{
                  console.log("Fail");
                }
                  alert(res);             
              });
      }
      function artistFormValidate()
          {   
              var status = true;         
              
              var talent_name=$("#talent_name").val();
                       
                if(talent_name=='') { 
                $("#error-box").show();            
                $("#error-box").html("<strong> * Please select atleast one Talent.<strong>");
                status = false;
              }
              
              return status;
              console.log(status);
          }

            
        }); 
  
  </script>





          
          </div>
          
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->
          
       
   
   </html>
