 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           <!--  <a class="navbar-brand" href="#pablo">Dashboard</a> -->
            <div class="logo">
              <a href="<?php echo base_url(); ?>" title="">
                 <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" />
              </a>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           <!--  <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item" style="color:#fff;">
                <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                  I am Director
                 <!--  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p> -->
                </a>
              </li>
              <li class="nav-item dropdown" style="color:#fff;">
                <a class="nav-link" href="#" onclick='popupFunction()' id="artisstLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p> -->
                  I am Artist
                </a>
               <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div> -->
              </li>
              <li class="nav-item" style="color:#fff;">
               <a class="nav-link" href="#pablo">
               Posted Jobs 
             </a></li>
             
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: red;"> 
                  <i class="material-icons" style="color:#fff;">person</i>
                   &nbsp;<?php echo $this->session->userdata('OFFICIAL_NAME'); ?>
                    <p class="d-lg-none d-md-block">
                    Account
                  </p>
               <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="logout" href="<?php echo base_url('dashboard/director_logout')?>">Logout</a></li>               
              </ul>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <script type="text/javascript">
        artisstLink

       function popupFunction()
        {
          alert('Logout the director And Then Login for Artist!!!');
        }
      </script>