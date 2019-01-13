<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casting Role</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="Casting Role" />
  <meta name="keywords" content="" />
  
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">




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

  <!-- Modernizr JS -->
  <script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
<style>
    
</style>
  </head>
  <body class="ltgreybckground">
    
  <div class="fh5co-loader"></div>
        

  <?php echo include_once('artistlogin_nav.php'); ?>
        
<div class="container">
        
        <br><br><br><br>
        <div class="container">
        
           <div class="row">

            <div class="col-lg-4 col-md-4 artistdashboard_leftsction">
               <img class="img-responsive" src="<?php echo base_url()?>assets/images/sample-user.jpg">
                 <h3>Shraddha Patil</h3>
                 <div class="artistdashboard_yellowstrip text-center">
                     <h4>50</h4>
                     <p>Casting Role Tokens</p>
                     <div class="row">
                         <div class="col-lg-12">
                            <a class="drkbtn">
                   
                         Purchase Tokens  
                      
                     
                     </a>
                         
                         </div>
                       
                         
                     </div>
                    
                 </div>
                 <br>
                 
                  <a href="<?php echo base_url('artist/editArtistProfile') ?>">
                      
                      <div class="green-btnfull">
                     Edit My Profile
                      </div></a>
             
                 
                  <a href="<?php echo base_url('artist/my_portfolio') ?>">
                      
                      <div class="green-btnfull">
                    My Portfolio
                      </div>
                    </a>
               
              </div>  
               
                <div class="col-lg-8 col-md-8 artistdashboard_right
              <div class="col-lg-8 col-lg-offset-2">
                 <div class="data_card">
                   <h1 class="header1 text-uppercase text-center"> Edit Profile</h1>
                     
                  <br>
                     
                     <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                        <form>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" id="title" placeholder="Enter Title of the Job Post">
                        </div>
                                                    
                       <div class="form-group">

                        <select class="form-control" id="artistCategory" style="width:100%;">
                       <option value="none" selected>Select The Type of Artist Category</option>
                          <option value="">Model</option>
                          <option value="">Actor</option>
                          <option value="">Singer</option>
                        </select>
                      </div>
                      <div class="form-group">
                  <textarea class="form-control" rows="5" id="jobDescription" placeholder="Enter Job Description"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="ageFrom" placeholder="Age Group from">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" id="ageUpto" placeholder="Age Group upto">
                    </div>
                  </div>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="languages" placeholder="Languages Known">
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="location" placeholder="Location">
                  </div>        
                   <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <input type="date" class="form-control" id="date" placeholder="Last Date for Entry Submission">
                  </div>                      
        <br>       
        <div class="input-group">
          <h4 class="ltheader4  text-uppercase">Gender who can apply for this Job</h4>
          <ul class="list-inline">
           <li>
              <label class="chkcontainer">
                   Male
                  <input type="checkbox" id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
               <li>
              <label class="chkcontainer">
                   Female
                  <input type="checkbox" id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
               <li>
              <label class="chkcontainer">
                   Other
                  <input type="checkbox" id="gender">
                  <span class="checkmark"></span>
                                                    
              </label>
              </li>
          </ul>                                          
        </div>                                          
        
      
        <div class="col-md-12">
          <div id="error-box" style="color:red;text-transform: initial;font-weight: bold;"></div>
          <input type="hidden" id="directorId" >
            <button type="button" class="btn-default green-btn" id="btnDirJobPost">Post This Job</button><br>
          </div>                                                   
      </form>
      </div>
      </div>
       </div>
      </div>
    </div>
  </div>
 </div>

  <?php echo include_once('footer.php'); ?>


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
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

  </body>
</html>

