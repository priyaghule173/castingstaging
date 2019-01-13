<?php
	$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$last_part = explode("/", $url);
	$last_part = end($last_part);
?>
<div class="container">
	<div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="list-group list-group-horizontal">
                <a href="<?php echo base_url('artist/artistDetails')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistDetails')?>") { echo 'active';} ?>">General</a>
			    <a href="<?php echo base_url('artist/artistTalent')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistTalent')?>"){ echo 'active';} ?>">Talent</a>
			    <a href="<?php echo base_url('artist/artistSubTalent')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistSubTalent')?>"){ echo 'active';} ?>">Sub-Talent</a>

			    <a href="<?php echo base_url('artist/artistInterests')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistInterests')?>"){ echo 'active';} ?>">Interests</a>

			    <a href="<?php echo base_url('artist/artistPhyAtt')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistDetails')?>"){ echo 'active';} ?>">Physical Attributes</a>

			    <a href="<?php echo base_url('artist/artistSocialLinks')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistDetails')?>") { echo 'active';} ?>">Social Links</a>

			    <a href="<?php echo base_url('artist/artistMedia')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistMedia')?>") { echo 'active';} ?>">Media</a>
			    <a href="<?php echo base_url('artist/artistExperience')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistDetails')?>"){ echo 'active';} ?>">Experience</a>
			    <a href="<?php echo base_url('artist/artistEducation')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistEducation')?>")  { echo 'active';} ?>">Education</a>
			    
			   	<a href="<?php echo base_url('artist/artistAddInfo')?>" class="list-group-item <?php if($last_part=="<?php echo base_url('artist/artistAddInfo')?>") { echo 'active';} ?>">Additional Info</a>
            </div>
        </div>
	</div>
</div>