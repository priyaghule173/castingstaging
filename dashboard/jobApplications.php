<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url();?>assets/adminimages/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Casting Role
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets/admincss/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url();?>assets/demo/demo.css" rel="stylesheet" />


</head>
<style type="text/css">
  
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=base_url();?>assets/adminimages/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
       <!--  <a href="Images/big-logo.png" class="simple-text logo-normal"> -->
          <img  class="simple-text logo-normal" src="<?=base_url();?>assets/images/testimonial2.png" alt="" style="width: 50%;margin: 0 auto;" />
        <!-- </a> -->
      </div>
      <?php echo include_once('sideBar.php'); ?> 
    </div>




    <div class="main-panel">
      <!-- Navbar -->
     <?php echo include_once('navbar.php'); ?> 
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!--<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Job Applications</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Job Title
                        </th>
                        <th>
                          Curent Status
                        </th>
                        <th>
                          Artists Applications
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li >
                <a href="https://www.creative-tim.com" style="font-size: 20px;">
                  Organ
                </a>
              </li>
             <!--  <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li> -->
              <li>
                <a href="https://www.creative-tim.com/license">
                  terms & conditions
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Wonderkind technology</a> 
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/adminjs/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/adminjs/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/adminjs/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/adminjs/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/adminjs/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/adminjs/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/adminjs/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>