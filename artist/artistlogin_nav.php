<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="fh5co-logo"><a href="<?php echo base_url('welcome')?>">Casting Role Artists</a></div>
				</div>
				<div class="col-xs-9 text-right menu-1">
					<ul>
				<?php
				 if(!empty($this->session->userdata('ARTIST_ID')))
				 	{ ?>
						<li>
							<a href="<?php echo base_url('artist')?>">My Dashboard</a>
							
						</li>
                        <li>
							<a href="<?php echo base_url('artist/view_jobs')?>">View Jobs</a>
							
						</li>
						
						<li><a href="<?php echo base_url('artist/my_application')?>">My Applications</a></li>
                        <li><a href="<?php echo base_url('welcome/artist_logout')?>">Logout</a></li>
						<?php } else{ ?>
						<li><a href="<?php echo base_url('welcome/artistLogin')?>">Artist Login</a></li>
                    <li><a href="<?php echo base_url('welcome/register')?>">Artist Register</a></li>
				    <?php } ?>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>