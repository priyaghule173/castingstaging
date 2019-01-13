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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>

  .fh5co-cover{
    height: auto;
  }

  .input-group{
    margin-bottom: 15px;
  }
  .myWizard{

    padding-bottom: 0px !important;
  } 
  #error-box{
    color: red;
    font-size: 11px;
  }
  .fh5co-cover{
    height: auto;
  }

  .input-group{
    margin-bottom: 10px;
  }


  </style>

</head>
<body class="ltgreybckground">

  <div class="fh5co-loader"></div>

  <?php echo include_once('adminlogin_nav.php'); ?>

  <div class="container">

    <br><br><br><br>
    <div class="container">

     <div class="row">
      <div class="col-lg-4 col-md-4 artistdashboard_leftsction">
               <img class="img-responsive" src="<?php echo base_url()?>assets/images/sample-user.jpg">
                 <p><?php echo "Email-id:" .$this->session->userdata('EMAIL_ID');?></p>
                 <br>
                  <a href="<?php echo base_url('admin/editAdminProfile')?>">
                      <div class="green-btnfull">
                     Edit My Profile
                      </div>
                  </a>
                  <a href="<?php echo base_url('admin/manage_directors')?>">
                      <div class="green-btnfull">
                     Manage Directors
                      </div>
                  </a>
                   <a href="<?php echo base_url('admin/job_post_request')?>">
                      <div class="green-btnfull">
                     Job Post Request </div>
                  </a>
                    <a href="<?php echo base_url('admin/manage_artists')?>">
                      <div class="green-btnfull">
                    Manage Artist </div>
                  </a>
              </div> 
  <div class="col-lg-8">
   <div class="data_card">
     <h1 class="header1 text-uppercase text-center">Manage Directors</h1>
     <p class="paragraph_text text-center">Loreum Loreum Loreum</p>
     <br>
     <ul class="nav nav-tabs">
      <?php
      $Pending = $this->db->select('count(a_id) as total')->from('artists')->where('status','0')->get()->result_array();
      ?>
      <li class="active"><a data-toggle="tab" href="#tab1">Pending Artist Approval</a></li>
      <?php
     // $Approved = $this->db->select('count(a_id) as total')->from('artists')->where('status','1')->get()->result_array();
      ?>
      <li><a data-toggle="tab" href="#tab2">Active/ Approved Artists</a></li>
      <?php
     // $Rejected = $this->db->select('count(a_id) as total')->from('artists')->where('status','2')->get()->result_array();
      ?>
      <li><a data-toggle="tab" href="#tab3">Rejected Artists</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="tab1" class="tab-pane fade in active">
        <div class="box-body table-responsive no-padding">
          <table id="example2" class="table table-hover">
            <thead style="font-size: 12px;">
              <th>Artist</th>
              <th>Phone</th>
              <th>Email</th>
              <th>City</th>
              <th>Current Status</th>
              <th>Created Date</th>
              <th>Action</th>
            </thead>

            <tbody style="font-size: 12px;">
              <?php
              foreach ($result as $row) {
                ?>
                <tr>
                  <td>
                    <?php echo $row['name'];?>
                  </td>
                  <td>
                    <?php echo $row['contact_no']?>
                  </td>
                  <td>
                    <?php echo $row['email_id']?>
                  </td>
                  <td>
                    <?php echo $row['city']?>
                  </td>
                  <td>
                    <?php echo "Pending"; ?>
                  </td>
                  <td>
                    <?php echo $row['created_date']?>
                  </td>
                  <td>
                    <select name="emp_active" onchange="showUser(this.value,<?= $row['a_id']?>)">
                      <option disabled="disabled" selected="selected">Select Action</option>
                      <option value="0">Pending</option>
                      <option value="1">Approved</option>
                      <option value="2">Rejected</option>
                    </select>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>       
          </table>
        </div>
      </div>
      <div id="tab2" class="tab-pane fade">
        <div class="box-body table-responsive no-padding">
          <table id="example4" class="table table-hover">
            <thead style="font-size: 12px;">
             <th>Artist</th>
             <th>Phone</th>
             <th>Email</th>
             <th>City</th>
             <th>Current Status</th>
             <th>Created Date</th>
             <th>Activated Date</th>
           </thead>
           <?php
           foreach ($result1 as $row) {
            ?>
            <tr>
             <td>
              <?php echo $row['name'];?>
            </td>
            <td>
              <?php echo $row['contact_no']?>
            </td>
            <td>
              <?php echo $row['email_id']?>
            </td>
            <td>
              <?php echo $row['city']?>
            </td>
            <td>
              <?php echo "Active"; ?>
            </td>
            <td>
              <?php echo $row['created_date']; ?>
            </td>
            <td>
              <?php echo $row['activated_date']; ?>
            </td>


          </tr>
          <?php
        }
        ?>
      </tbody>           
    </table>
  </div>
</div>
<div id="tab3" class="tab-pane fade">
  <div class="box-body table-responsive no-padding">
    <table id="example4" class="table table-hover">
      <thead style="font-size: 12px;">
        <th>Artist</th>
        <th>Phone</th>
        <th>Email</th>
        <th>City</th>
        <th>Current Status</th>
        <th>Created Date</th>
        <th>Rejected Date</th>
        <th>Action</th>

      </thead>
      <?php
      foreach ($result2 as $row) {
        ?>
        <tr>
          <td>
            <?php echo $row['name'];?>
          </td>
          <td>
            <?php echo $row['contact_no']?>
          </td>
          <td>
            <?php echo $row['email_id']?>
          </td>
          <td>
            <?php echo $row['city']?>
          </td>
          <td>
            <?php echo "Rejected"; ?>
          </td>
          <td>
            <?php echo $row['created_date']; ?>
          </td>
          <td>
            <?php echo $row['activated_date']; ?>
          </td>
          <td>
            <select name="emp_active" onchange="showUser(this.value,<?= $row['a_id']?>)">
              <option disabled="disabled" selected="selected">Select Action</option>
              <option value="0">Pending</option>
              <option value="1">Approved</option>
              <option value="2">Rejected</option>
            </select>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>           
  </table>
</div>
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
<script type="text/javascript">

function showUser(str,AID)
{
  var AID_new = AID;
  var art_action = str;
  $.ajax({
    type: "POST",
    url: "<?php echo base_url('admin/update_artist_status')?>",
    data: {'a_id': AID_new ,'status' :art_action},
    success: function () {
      alert("Status Updated Successfully!..");
      window.location.href = "<?php echo base_url('admin/manage_artists')?>";     
    }
  });
}
</script>
</body>
</html>

