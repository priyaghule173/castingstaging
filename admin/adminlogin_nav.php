<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-5">
					<div id="fh5co-logo"><a href="<?php echo base_url('welcome')?>">Casting Role Directors</a></div>
				</div>
				<div class="col-xs-7 text-right menu-1">
					<ul>
				<?php
				 if(!empty($this->session->userdata('ADMIN_ID')))
				 	{ ?>
					<li>
						<a href="<?php echo base_url('admin')?>">My Dashboard</a>
					</li>
                    
                    <li><a href="<?php echo base_url('welcome/admin_logout')?>">Logout</a></li>
				<?php } else{ ?>
					<li><a href="<?php echo base_url('welcome/admin_login')?>">Admin Login</a></li>
                    <li><a href="<?php echo base_url('welcome/admin_register')?>">Admin Register</a></li>
				<?php } ?>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>