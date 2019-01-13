<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-5">
					<div id="fh5co-logo"><a href="<?php echo base_url('welcome')?>">Casting Role Directors</a></div>
				</div>
				<div class="col-xs-7 text-right menu-1">
					<ul>
				<?php
				 if(!empty($this->session->userdata('DIRECTOR_ID')))
				 	{ ?>
					<li>
						<a href="<?php echo base_url('director')?>">My Dashboard</a>
					</li>
                    <li>
						<a href="<?php echo base_url('director/director_postjob')?>">Post a Job</a>
					</li>
					<!-- <li><a href="work.php">My Posts</a></li> -->
                    <li><a href="<?php echo base_url('welcome/director_logout')?>">Logout</a></li>
				<?php } else{ ?>
					<li><a href="<?php echo base_url('welcome/director_login')?>">Director Login</a></li>
                    <li><a href="<?php echo base_url('welcome/director_register')?>">Director Register</a></li>
				<?php } ?>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>