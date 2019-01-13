<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}if(isset($_SESSION["artist_data"])){
    $mobile=$_SESSION["artist_data"]["mobile"];
$email=$_SESSION["artist_data"]["email"];
$name=$_SESSION["artist_data"]["name"];
$artist_id=$_SESSION["artist_data"]["id"];
}
//echo "<pre>";print_r($_SESSION);exit();
?>

<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="fh5co-logo"><a href="index.php">Casting Role</a></div>
				</div>
				<div class="col-xs-9 text-right menu-1">
					<ul>
                        
				
						<li class="has-dropdown">
							<a href="#">I am A director</a>
							<ul class="dropdown">
								<li><a href="director-login.php">Login</a></li>
                                <li><a href="director-register.php">Signup</a></li>
							</ul>
						</li>
                        <li class="has-dropdown">
							<a href="#">I am Artist</a>
							<ul class="dropdown">
								<li><a href="artistLogin.php">Login</a></li>
								<li><a href="register.php">Signup</a></li>
								
							</ul>
						</li>
						
						<li>  <a href="#">Posted Jobs</a> </li>
						
					</ul>
				</div>
			</div>
			
		</div>
	</nav>