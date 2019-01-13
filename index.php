<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Casting Role</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <!-- Styles -->
   <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="assets/css/revolution.css" media="screen" />
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/mystyle.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/slick.css" type="text/css" />
   <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="assets/css/color/color.css" title="color" />
   <!-- REVOLUTION STYLE SHEETS -->
   <link rel="stylesheet" type="text/css" href="assets/css/revolution/settings.css">
   <link rel="stylesheet" type="text/css" href="assets/css/revolution/layers.css">
   <link rel="stylesheet" type="text/css" href="assets/css/revolution/navigation.css">
</head>
<style type="text/css">
   .logout:hover
   {
   color:red !important;
   }
</style>
<body>
   <div class="theme-layout">
   <header class="stick">
      <div class="container">
         <div class="logo"><a href="http://www.castingrole.com/staging2" title=""><img src="assets/images/new-casting-logo.png" alt="" /></a></div>
         <!-- Logo -->
         <?php if( $this->session->userdata('OFFICIAL_NAME'))
            { ?>
         <nav>
            <ul>
               <li><a href="<?php echo base_url('dashboard/tables'); ?>" title="">Posted Jobs</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: red;"> <i class="fa fa-user"></i> &nbsp;<?php echo $this->session->userdata('OFFICIAL_NAME'); ?>
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a class="logout" href="<?php echo base_url('dashboard'); ?>" title="">Dashboard</a>
                     </li>
                     <li>
                        <a class="logout" href="<?php echo base_url('dashboard/director_logout')?>">Logout</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
         <?php } elseif($this->session->userdata('name')) { ?>
         <nav>
            <ul>
               <li><a href="<?php echo base_url('dashboard/tables'); ?>" title="">Posted Jobs</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: red;"> <i class="fa fa-user"></i> &nbsp;<?php echo $this->session->userdata('name'); ?>
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a class="logout" href="<?php echo base_url('dashboard'); ?>" title="">Dashboard</a>
                     </li>
                     <li>
                        <a class="logout" href="<?php echo base_url('dashboard/artist_logout')?>">Logout</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
         <?php } else { ?>
         <nav>
            <ul>
               <!-- <li><a href="<?php //echo base_url('welcome/signup'); ?>" title="">Director</a> -->
               <!-- <div class="megamenu wdth530">
                  <div class="col-md-4">
                  	<a href="index17.html" title="">Home Version 17</a>
                  	<a href="index18.html" title="">Home Version 18</a>
                  	<a href="index19.html" title="">Home Version 19</a>
                  	<a href="index20.html" title="">Home Version 20</a>
                  	<a href="index21.html" title="">Home Version 21</a>
                  	<a href="index22.html" title="">Home Version 22</a>
                  </div>
                  </div> -->
               <!-- </li> -->
               <!-- Mega menu -->
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Director
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a class="logout" href="<?php echo base_url('welcome/common_login'); ?>" title="">Login</a>
                     </li>
                     <li>
                        <a class="logout" href="<?php echo base_url('welcome/director_registration')?>">Register</a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Artist
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a class="logout" href="<?php echo base_url('welcome/common_login'); ?>" title="">Login</a>
                     </li>
                     <li>
                        <a class="logout" href="<?php echo base_url('welcome/signupArtist')?>">Register</a>
                     </li>
                  </ul>
               </li>
               <!-- <li><a href="<?php //echo base_url('dashboard/tables'); ?>" title="">Artist</a> -->
               <!-- <ul>
                  <li><a href="404.html" title="">404 Page</a></li>
                  <li><a href="blog1.html" title="">Blog Pages</a>
                  	<ul>
                  		<li><a href="blog1.html" title="">Blog Page 1</a></li>
                  		<li><a href="blog2.html" title="">Blog Page 2</a></li>
                  		<li><a href="blog3.html" title="">Blog Page 3</a></li>
                  	<li><a href="blog4.html" title="">Blog Page 4</a></li>
                  	<li><a href="blog5.html" title="">Blog Page 5</a></li>
                  		<li><a href="blog-single.html" title="">Blog Single Page</a></li>
                  	</ul> -->
               <!-- </li>
                  <li><a href="commingsoon.html" title="">Comming Soon</a></li>
                  <li><a href="profile.html" title="">Profile Page</a></li>
                  </ul> -->
               <!-- </li> -->
               <li>
                  <a href="#" title="">Posted Jobs</a>
                  <!-- <ul>
                     <li><a href="single-product.html" title="">Single Product Page</a></li>
                     <li><a href="cart.html" title="">Cart Page</a></li>
                     <li><a href="checkout.html">Checkout Page</a></li>
                     </ul> -->
               </li>
               <!-- <li><a href="portfolio1.html" title="">Portfolio Pages</a>
                  <ul>
                  	<li><a href="portfolio1.html" title=""><i class="fa fa-gg"></i> Portfolio Page 1</a></li>
                  	<li><a href="portfolio2.html" title=""><i class="fa fa-gg"></i> Portfolio Page 2</a></li>
                  	<li><a href="portfolio3.html" title=""><i class="fa fa-gg"></i> Portfolio Page 3</a></li>
                  	<li><a href="single-project1.html" title=""><i class="fa fa-gg"></i> Single Project Pages</a>
                  		<ul>
                  			<li><a href="single-project1.html" title=""><i class="fa fa-gg"></i> Single Project 1</a></li>
                  			<li><a href="single-project2.html" title=""><i class="fa fa-gg"></i> Single Project 2</a></li>
                  			<li><a href="single-project3.html" title=""><i class="fa fa-gg"></i> Single Project 3</a></li>
                  			<li><a href="single-project4.html" title=""><i class="fa fa-gg"></i> Single Project 4</a></li>
                  			<li><a href="single-project5.html" title=""><i class="fa fa-gg"></i> Single Project 5</a></li>
                  			<li><a href="single-project6.html" title=""><i class="fa fa-gg"></i> Single Project 6</a></li>
                  			<li><a href="single-project7.html" title=""><i class="fa fa-gg"></i> Single Project 7</a></li>
                  		</ul>
                  	</li>
                  </ul>
                  </li>
                  <li><a href="about1.html" title="">About Us</a>
                  <ul>
                  	<li><a href="about1.html" title=""><i class="fa fa-gg"></i> About Page 1</a></li>
                  	<li><a href="about2.html" title=""><i class="fa fa-gg"></i> About Page 2</a></li>
                  	<li><a href="about3.html" title=""><i class="fa fa-gg"></i> About Page 3</a></li>
                  	<li><a href="about4.html" title=""><i class="fa fa-gg"></i> About Page 4</a></li>
                  </ul>
                  </li> -->
               <!-- 	<li><a href="contact1.html" title="">Contact</a>
                  <ul>
                  	<li><a href="contact1.html" title=""><i class="fa fa-gg"></i> Contact Page 1</a></li>
                  	<li><a href="contact2.html" title=""><i class="fa fa-gg"></i> Contact Page 2</a></li>
                  	<li><a href="contact3.html" title=""><i class="fa fa-gg"></i> Contact Page 3</a></li>
                  	<li><a href="contact4.html" title=""><i class="fa fa-gg"></i> Contact Page 4</a></li>
                  </ul>
                  </li> -->
            </ul>
         </nav>
         <?php } ?>
         <!-- Navigation -->
         <div class="header-options">
            <form>
               <input type="text" placeholder="Enter Your Search" />
               <button><i class="fa fa-search"></i></button>
            </form>
            <!-- <div class="cart">
               <ul>
                  <li>
                     <a href="#" title=""><i class="fa fa-remove"></i></a>
                     <img src="images/resource/shopping-cart1.jpg" alt="" />
                     <div class="cart-product-detail">
                        <strong><a href="#" title="">Toasted Cumin Shortbread</a></strong>
                        <span>Price  </span>
                        <input id="counter" type="number" value="1" min="0" max="10" />
                     </div>
                  </li>
                  <li>
                     <a href="#" title=""><i class="fa fa-remove"></i></a>
                     <img src="images/resource/shopping-cart1.jpg" alt="" />
                     <div class="cart-product-detail">
                        <strong><a href="#" title="">Toasted Cumin Shortbread</a></strong>
                        <span>Price  </span>
                        <input id="counter2" type="number" value="1" min="0" max="10" />
                     </div>
                  </li>
               </ul>
               <div class="shopcart-total">
                  <span>SUBTOTAL    <i>3</i>   ITEMS    .00</span>
                  <a class="coloured-btn" href="checkout.html" title="">Checkout</a>
               </div>
            </div> -->
            <!-- Cart -->
            <!-- <a class="cart-open" href="#" title=""><i class="fa fa-shopping-cart"></i><span>4</span></a>
               <a class="open-search" href="#" title=""><i class="fa fa-search"></i></a> -->
         </div>
         <!-- Header Options-->
      </div>
   </header>
   <!-- Header  -->
   <div class="responsive-header">
      <div class="responsive-bar">
         <span class="open-menu"><i data-target="menu" class="fa fa-align-justify"></i></span>
         <div class="logo"><a href="http://www.castingrole.com/staging2" title=""><img src="assets/images/new-casting-logo.png" alt="" /></a></div>
         <!-- Logo -->
         <span class="open-links"><i data-target="links" class="fa fa-search"></i></span>
      </div>
      <div class="responsive-links menu">
         <ul>
            <li class="menu-item-has-children">
               <a href="#" title="">Home Pages</a>
               
            </li>
            <li class="menu-item-has-children">
               <a href="#" title="">Pages</a>
               <ul>
                  <li><a href="404.html" title="">404 Page</a></li>
                  <li class="menu-item-has-children">
                     <a href="blog1.html" title="">Blog Pages</a>
                     <ul>
                        <li><a href="blog1.html" title="">Blog Page 1</a></li>
                        <li><a href="blog2.html" title="">Blog Page 2</a></li>
                        <li><a href="blog3.html" title="">Blog Page 3</a></li>
                        <li><a href="blog4.html" title="">Blog Page 4</a></li>
                        <li><a href="blog5.html" title="">Blog Page 5</a></li>
                        <li><a href="blog-single.html" title="">Blog Single Page</a></li>
                     </ul>
                  </li>
                  <li><a href="commingsoon.html" title="">Comming Soon</a></li>
                  <li><a href="profile.html" title="">Profile Page</a></li>
               </ul>
            </li>
            <li class="menu-item-has-children">
               <a href="#" title="">Shop</a>
               <ul>
                  <li><a href="single-product.html" title="">Single Product Page</a></li>
                  <li><a href="cart.html" title="">Cart Page</a></li>
                  <li><a href="checkout.html">Checkout Page</a></li>
               </ul>
            </li>
            
            <li class="menu-item-has-children">
               <a href="about1.html" title="">About Us</a>
               <!-- <ul>
                  <li><a href="about1.html" title=""><i class="fa fa-gg"></i> About Page 1</a></li>
                  <li><a href="about2.html" title=""><i class="fa fa-gg"></i> About Page 2</a></li>
                  <li><a href="about3.html" title=""><i class="fa fa-gg"></i> About Page 3</a></li>
                  <li><a href="about4.html" title=""><i class="fa fa-gg"></i> About Page 4</a></li>
               </ul> -->
            </li>
            <li class="menu-item-has-children">
               <a href="contact1.html" title="">Contact</a>
               <!-- <ul>
                  <li><a href="contact1.html" title=""><i class="fa fa-gg"></i> Contact Page 1</a></li>
                  <li><a href="contact2.html" title=""><i class="fa fa-gg"></i> Contact Page 2</a></li>
                  <li><a href="contact3.html" title=""><i class="fa fa-gg"></i> Contact Page 3</a></li>
                  <li><a href="contact4.html" title=""><i class="fa fa-gg"></i> Contact Page 4</a></li>
               </ul> -->
            </li>
         </ul>
      </div>
      <div class="responsive-links other">
         <form>
            <input type="text" placeholder="Enter Your Search" />
            <button><i class="fa fa-search"></i></button>
         </form>
      </div>
   </div>
   <!-- Responsive Header -->
   <section>
      <div class="block no-padding">
         <div class="row">
            <div class="col-md-12">
               <div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="height: 500px !important;margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
                  <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                  <div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none; height: 500px !important;opacity: 0.8;" data-version="5.0.7">
                     <ul>
                        <li data-index="slide1" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"    data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 1" data-description="" >
                           <!-- MAIN IMAGE -->
                           <img src="assets/images/banner2.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina style="">
                           <!-- LAYER NR. 1 -->
                           <i class="tp-caption layer1 tp-resizeme" 
                              id="slide1-layer1" 
                              data-x="center" data-hoffset="" 
                              data-y="300" data-voffset="-150" 
                              data-width="['auto','auto','auto','auto']"
                              data-height="['auto','auto','auto','auto']"
                              data-transform_idle="o:1;"
                              data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-start="1000" 
                              data-splitin="chars" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              data-elementdelay="0.05" 
                              style="font-size:30px; letter-spacing:1px;">find your future
                           </i>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption layer2 tp-resizeme" 
                              id="slide1-layer2" 
                              data-x="center" data-hoffset="" 
                              data-y="340" data-voffset="" 
                              data-width="['auto','auto','auto','auto']"
                              data-height="['auto','auto','auto','auto']"
                              data-transform_idle="o:1;tO:0% 50%;"
                              data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                              data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                              data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                              data-start="2000" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              data-elementdelay="0.05" 
                              style="font-size:55px;letter-spacing:1px;">Casting Role
                           </div>
                           <!-- LAYER NR. 3 -->
                           <i class="tp-caption layer3 tp-resizeme" 
                              id="slide1-layer3" 
                              data-x="center" data-hoffset="" 
                              data-y="420" data-voffset="" 
                              data-width="['auto','auto','auto','auto']"
                              data-height="['auto','auto','auto','auto']"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                              data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-start="3000" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              style="font-size:20px; letter-spacing:1px;padding:5px 20px;background-color: green;">You've Got Talent? We've got Jobs
                           </i>
                           <!-- LAYER NR. 4 -->
                           <a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9 green-btn" 
                              id="slide1-layer4" 
                              data-x="center" data-hoffset="" 
                              data-y="500" data-voffset="" 
                              data-width="['auto','auto','auto','auto']"
                              data-height="['auto','auto','auto','auto']"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                              data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-start="3300" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              style="font-size:13px; padding:15px 35px;background-color: green;">Get Started
                           </a>
                        </li>
                        <!-- <li data-index="slide2" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 2" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                           
                           <i class="tp-caption layer5 tp-resizeme" 
                           	id="slide2-layer1" 
                           	data-x="center" data-hoffset="" 
                           	data-y="300" data-voffset="-150" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="1000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:20px; letter-spacing:5px;">Barber shop labels and haircut vector
                           </i>
                            
                           <div class="tp-caption layer2 tp-resizeme" 
                           	id="slide2-layer2" 
                            	data-x="center" data-hoffset="" 
                            	data-y="340" data-voffset="10" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:{-50,50};y:{-5,50};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	data-start="1090" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-weight:700; font-size:60px;letter-spacing:2px;">WE ARE BEST DESIGN
                           </div>
                           
                           <a class="tp-caption layer6 tp-resizeme" 
                           	id="slide2-layer3" 
                           	data-x="center" data-hoffset="" 
                           	data-y="460" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"							 
                           	 data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="1000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05"									style="font-weight:700; font-size:17px;letter-spacing:4px;padding-bottom:10px">LEARN MORE
                           </a>
                           </li> -->
                        <!-- <li data-index="slide3" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 3" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           
                           <i class="tp-caption layer1 tp-resizeme" 
                           	id="slide3-layer1" 
                           	 data-x="120" data-hoffset="" 
                           	 data-y="300" data-voffset="-70" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;tO:0% 50%;" 
                           	 data-transform_in="x:-50px;rY:-90deg;opacity:0;s:2000;e:Back.easeOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	data-start="2000" 
                           	data-splitin="lines" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:30px; letter-spacing:1px;">Ultimate Website Builder Kit.
                           </i>
                           
                           <div class="tp-caption layer2 tp-resizeme" 
                           	id="slide3-layer2" 
                           	data-x="0" data-hoffset="" 
                           	data-y="340" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;tO:0% 50%;"
                           	data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:55px;letter-spacing:1px;">WELCOME TO ORGAN
                           </div>
                           
                           <i class="tp-caption layer7 tp-resizeme" 
                           	id="slide3-layer3" 
                           	data-x="100" data-hoffset="" 
                           	data-y="420" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3000" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:20px; letter-spacing:1px;padding:5px 20px;">When you want <span>the possibilities to</span> be limitless
                           </i>
                           
                           <a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide3-layer4" 
                           	data-x="250" data-hoffset="" 
                           	data-y="500" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3300" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">SEE MORE
                           </a>
                           </li> -->
                        <!-- <li data-index="slide4" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 4" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           
                           <div class="tp-caption layer2 tp-resizeme" 
                           	id="slide4-layer1" 
                           	 data-x="0" data-hoffset="" 
                           	 data-y="350" data-voffset="10" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 									style="font-size:55px;letter-spacing:1px;">LOVE TECHNOLOGY
                           </div>
                           
                           <i class="tp-caption layer7 tp-resizeme" 
                           	id="slide4-layer2" 
                           	 data-x="30" data-hoffset="" 
                           	 data-y="415" data-voffset="-70" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:20px;font-family: playfair display; letter-spacing:2px;">bad design is smoke <span>while good</span> design is a mirror.
                           </i>
                           
                           <a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide4-layer3" 
                           	data-x="200" data-hoffset="" 
                           	data-y="470" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3300" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">SEE MORE
                           </a>
                           </li> -->
                        <!-- <li data-index="slide5" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 5" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           
                           <i class="tp-caption layer1 tp-resizeme" 
                           	id="slide5-layer1" 
                           	 data-x="center" data-hoffset="" 
                           	 data-y="450" data-voffset="-70" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:30px; letter-spacing:1px;">Ultimate Website Builder Kit.
                           </i>
                           
                           <div class="tp-caption layer2 tp-resizeme" 
                           	id="slide5-layer2" 
                           	data-x="center" data-hoffset="" 
                           	data-y="490" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;tO:0% 50%;"
                           	data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:55px;letter-spacing:1px;">WELCOME TO ORGAN
                           </div>
                           
                           <i class="tp-caption layer7 tp-resizeme" 
                           	id="slide5-layer3" 
                           	data-x="center" data-hoffset="" 
                           	data-y="570" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3000" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:20px; letter-spacing:1px;padding:5px 20px;">When you want <span>the possibilities to</span> be limitless
                           </i>
                           
                           <a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide5-layer4" 
                           	data-x="center" data-hoffset="" 
                           	data-y="630" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3300" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">SEE MORE
                           </a>
                           </li> -->
                        <!-- <li data-index="slide6" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 6" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           
                           <a href="#" class="tp-caption layer8 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide6-layer1" 
                           	data-x="0" data-hoffset="" 
                           	data-y="350" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="1000" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:30px;width: 94px;height: 94px;line-height: 94px"><i class="fa fa-play"></i>
                           </a>
                           
                           <div class="tp-caption layer2 tp-resizeme" 
                           	id="slide6-layer2" 
                           	data-x="0" data-hoffset="" 
                           	data-y="470" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;" 
                           	 data-transform_in="x:{-50,50};y:{-5,50};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	data-start="3490" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 									style="font-size:50px;letter-spacing:0;">Ultimate Website Builder Design
                           </div>
                           
                           <div class="tp-caption layer7 tp-resizeme" 
                           	id="slide6-layer3" 
                           	 data-x="0" data-hoffset="" 
                           	 data-y="540" data-voffset="-70" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:20px; letter-spacing:2px;">When you want the possibilities to be limitless
                           </div>								
                           
                           <a href="#" class="tp-caption layer9 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide6-layer4" 
                           	data-x="0" data-hoffset="" 
                           	data-y="600" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3300" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">SEE MORE
                           </a>
                           
                           
                           <a href="#" class="tp-caption layer9 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide6-layer5" 
                           	data-x="160" data-hoffset="" 
                           	data-y="600" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3600" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">PURCHASE
                           </a>
                           </li> -->
                        <!-- <li data-index="slide7" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/1366x768"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 7" data-description="">
                           <img src="http://placehold.it/1366x768"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                           
                           <div class="tp-caption layer10 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide7-layer1" 
                           	data-x="600" data-hoffset="" 
                           	data-y="200" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:90deg;rY:0;rZ:0;sX:3;sY:3;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="1000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-elementdelay="0.05" 
                           	style="font-size:125px; ">The new
                           </div>
                           
                           <div class="tp-caption layer10 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide7-layer2" 
                           	data-x="580" data-hoffset="" 
                           	data-y="320" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:90deg;rY:0;rZ:0;sX:3;sY:3;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="1500" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-elementdelay="0.05" 
                           	style="font-size:125px; ">Big Thing
                           </div>
                           
                           <i class="tp-caption layer7 tp-resizeme" 
                           	id="slide7-layer3" 
                           	 data-x="650" data-hoffset="" 
                           	 data-y="480" data-voffset="-70" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	 data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                           	 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                           	 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="2000" 
                           	data-splitin="chars" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	data-elementdelay="0.05" 
                           	style="font-size:20px;color:#2e2e2e; font-family: playfair display; letter-spacing:2px;">bad design is smoke <span>while good</span> design is a mirror.
                           </i>
                           
                           <a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
                           	id="slide7-layer4" 
                           	data-x="830" data-hoffset="" 
                           	data-y="550" data-voffset="" 
                           	data-width="['auto','auto','auto','auto']"
                           	data-height="['auto','auto','auto','auto']"
                           	data-transform_idle="o:1;"
                           	data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           	data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                           	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           	data-start="3300" 
                           	data-splitin="none" 
                           	data-splitout="none" 
                           	data-responsive_offset="on" 
                           	style="font-size:13px; padding:15px 35px;">SEE MORE
                           </a>
                           
                           </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="block">
         <div class="container">
            <div class="row">
               <div class="col-md-12 column">
                  <div class="center-title">
                     <span>Consectetuer Adipiscing</span>
                     <h2 style="color: green;">Working of Casting Role</h2>
                  </div>
                  <div class="simple-services style2">
                     <div class="row">
                        <div class="col-md-3">
                           <div class="simple-service fadeinleftbig delay1">
                              <i class="pe-7s-science" style="color: green;"></i>
                              <h4>EASY TO USE</h4>
                              <p>Class aptent taciti sociosutn tora torquent corem ipsum.</p>
                              <!-- <span>7819</span> -->
                           </div>
                           <!-- Simple Service -->
                        </div>
                        <div class="col-md-3">
                           <div class="simple-service fadeinleftbig delay2">
                              <i class="pe-7s-lintern" style="color: green;"></i>
                              <h4>FIND PEERFECT TALENTS</h4>
                              <p>Class aptent taciti sociosutn tora torquent corem ipsum.</p>
                              <!-- <span>930</span> -->
                           </div>
                           <!-- Simple Service -->
                        </div>
                        <div class="col-md-3">
                           <div class="simple-service fadeinleftbig delay3">
                              <i class="pe-7s-timer" style="color: green;"></i>
                              <h4> ACCESS TO  JOBS</h4>
                              <p>Class aptent taciti sociosutn tora torquent corem ipsum.</p>
                              <!-- <span>8974</span> -->
                           </div>
                           <!-- Simple Service -->
                        </div>
                        <div class="col-md-3">
                           <div class="simple-service fadeinleftbig delay3">
                              <i class="pe-7s-bandaid" style="color: green;"></i>
                              <h4> EASY TO USE</h4>
                              <p>Class aptent taciti sociosutn tora torquent corem ipsum.</p>
                              <!-- <span>238</span> -->
                           </div>
                           <!-- Simple Service -->
                        </div>
                     </div>
                  </div>
                  <!-- Simple Services -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Register link for director: section-->
   <section>
      <div class="block" style="background: #f0f0f0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 column" style="padding: 20px 0px;">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tab-mockup"><img src="assets/images/staging_director.png" alt="" style="width: 100%;" /></div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tab-details style2 dark">
                           <div class="tab-description">
                              <!-- <span>Consectetuer Adipiscing</span> -->
                              <h4 style="color: #000;">Director</h4>
                              <p style="color: #000;font-size: 17px; */">Trained at London Central Saint Martin school of arts & specialising in the Music and Movie industries, I also have a strong background in Marketing, Communication and Sales that allows me to understand  Trained at London Central Saint Martin school of arts & specialising in the Music and Movie industries, I also have a strong background in Marketing, Communication and Sales that allows me to understand </p>
                              <a title="" href="#" class="coloured-btn" style="background-color: green;" >Register/Login</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="block" style="background: #ffffff;">
         <!-- background-color: #ffc0cbe0; -->
         <div class="container">
            <div class="row">
               <div class="col-md-12 column" style="padding: 20px 0px;">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tab-details style2 dark">
                           <div class="tab-description">
                              <!-- <span>Consectetuer Adipiscing</span> -->
                              <h4 style="color: #000;">Artists</h4>
                              <p style="color: #000;font-size: 17px; */">Trained at London Central Saint Martin school of arts & specialising in the Music and Movie industries, I also have a strong background in Marketing, Communication and Sales that allows me to understand  Trained at London Central Saint Martin school of arts & specialising in the Music and Movie industries, I also have a strong background in Marketing, Communication and Sales that allows me to understand </p>
                              <a title="" href="#" class="coloured-btn" style="background-color: green;">Register/Login</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tab-mockup"><img src="assets/images/staging_artist.png" alt="" style="width: 100%;" /></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="block blackish" style="background: url('assets/images/director_banner.jpg');background-size: cover;">
         <div class="parallax still" data-velocity="-.1" 
            style="background: -webkit-radial-gradient(center center, circle cover, rgba(255, 255, 95, 0.93), rgba(255, 255, 0, 0.56), rgba(255, 255, 0, 0.45)) 50% -32.2px;"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="side-title light center">
                     <span>Way to go near of success</span>
                     <h1 style="color: #fff;font-size: 40px;">Job Opportunities</h1>
                  </div>
                  <div class="parallax-tabs">
                     <ul class="nav nav-tabs" id="myTabs">
                        <li class="active"><a data-toggle="tab" href="#tab1"><i class="fa fa-edit"></i>Dancer</a></li>
                        <li ><a data-toggle="tab" href="#tab2"><i class="fa fa-anchor"></i>Singer</a></li>
                        <!-- <li><a data-toggle="tab" href="#tab4"><i class="fa fa-google-wallet"></i>Model</a></li> -->
                        <!-- <li><a data-toggle="tab" href="#tab5"><i class="fa fa-google-wallet"></i>Comedian</a></li>  -->
                        <li><a data-toggle="tab" href="#tab3"><i class="fa fa-google-wallet"></i>choreographer</a></li>
                        <li><a data-toggle="tab" href="#tab4"><i class="fa fa-gg"></i>Actor</a></li>
                        <li><a data-toggle="tab" href="#tab5"><i class="fa fa-google-wallet"></i>Model</a></li>
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <div id="tab1" class="tab-pane fade in active">
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="image"><img src="http://placehold.it/570x384" alt="" /></div>
                              </div>
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>CREATE ONLINE WEBSITE WITH ONLY 1-CLICK</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>
                              
                              </div>
                              
                              </div> -->
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>Dancer</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>										
                              </div>
                              <div class="col-md-6">
                              	<div class="image" style="width: 44%;"><img src="images/dancer.jpg" alt="" /></div>
                              </div>
                              </div>  -->
                           <section>
                              <div class="block" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/redChili.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Contemporary Dancer</h5> -->
                                                            <!-- <i>Contemporary Dancer in mumbai</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title: Classical Dancer</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Classical Dancer</h5> -->
                                                            <!-- <i>looking actor in pune</i> -->
                                                         </div>
                                                         <!-- <span>Job posts: 2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title: Classical Dancer</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/vinod1.png" alt="" style="background-color: #fff;" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Hip-hop Dancer</h5> -->
                                                            <!-- <i>Trained Hip-hop Dancer</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:3</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title: Hip-hop Dancer</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Simple Price Table -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <div id="tab2" class="tab-pane fade ">
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>Singer</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>									
                              </div>
                              <div class="col-md-6">
                              	<div class="image" style="width: 83%;"><img src="images/singer.jpg" alt="" /></div>
                              </div>
                              </div> -->
                           <section>
                              <div class="block" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/redChili.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Singer</h5> -->
                                                            <!-- <i>looking singer in mumbai</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Singer in pune</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Singer</h5> -->
                                                            <!-- <i>looking singer in pune</i> -->
                                                         </div>
                                                         <!-- <span>Job posts: 2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Singer in mumbai</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of  workers, peons within the age of 20 - 50 years for an    Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/vinod1.png" alt="" style="background-color: #fff;" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>singer</h5> -->
                                                            <!-- <i>singer in thane</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:3</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Singer in thane.</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Simple Price Table -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>Musician</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>										
                              </div>
                              <div class="col-md-6">
                              	<div class="image" style="width: 83%;"><img src="images/Musician.jpg" alt="" /></div>
                              </div>
                              </div> -->
                           <section>
                              <div class="block" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/redChili.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>choreographer</h5> -->
                                                            <!-- <i>looking choreographer in mumbai</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:choreographer in pune</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>choreographer</h5> -->
                                                            <!-- <i>looking choreographer in pune</i> -->
                                                         </div>
                                                         <!-- <span>Job posts: 2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:choreographer in mumbai</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/vinod1.png" alt="" style="background-color: #fff;" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>choreographer</h5> -->
                                                            <!-- <i>choreographer in thane</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:3</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:choreographer in pune</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Simple Price Table -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                           <!-- <div class="row">
                              <div class="col-md-12">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>CREATE ONLINE WEBSITE WITH ONLY 1-CLICK</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>									
                              </div>
                              </div> -->
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>Comedian</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>									
                              </div>
                              <div class="col-md-6">
                              	<div class="image" style="width: 68%;"><img src="Images/comedian.jpg" alt="" /></div>
                              </div>
                              </div> -->
                           <section>
                              <div class="block" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Lead Actor</h5> -->
                                                            <!-- <i>looking Lead Actor in mumbai</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Lead Actor</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>character Actor</h5> -->
                                                            <!-- <i>looking character Actor in pune</i> -->
                                                         </div>
                                                         <!-- <span>Job posts: 2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:character Actor</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Background Actor</h5> -->
                                                            <!-- <i>Background Actor in thane</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:3</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Background Actor</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of  workers, peons within the age of 20 - 50 years for an  a Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Simple Price Table -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                           <!-- <div class="row">
                              <div class="col-md-12">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>CREATE ONLINE WEBSITE WITH ONLY 1-CLICK</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>									
                              </div>
                              </div> -->
                           <!-- <div class="row">
                              <div class="col-md-6">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>choreographer</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>								
                              </div>
                              <div class="col-md-6">
                              	<div class="image" style="width: 55%;"><img src="images/choreographer.jpg" alt="" /></div>
                              </div>
                              </div> -->
                           <section>
                              <div class="block" style="margin-top:-50px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="simple-price-table">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Fashion model</h5> -->
                                                            <!-- <i>looking fashion model in mumbai</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Fashion model</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Advertising model </h5> -->
                                                            <!-- <i>Advertising model in pune</i> -->
                                                         </div>
                                                         <!-- <span>Job posts: 2</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Advertising model</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of  workers, peons within the age of 20 - 50 years for an  Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="simple-table">
                                                      <div class="simple-table-top">
                                                         <img src="assets/images/phantomfilms.jpg" alt="" />
                                                         <div class="table-top-title">
                                                            <!-- <h5>Magazine Print model</h5> -->
                                                            <!-- <i>Magazine Print model in thane</i> -->
                                                         </div>
                                                         <!-- <span>Job posts:3</span> -->
                                                      </div>
                                                      <div class="simple-table-bottom">
                                                         <h5 class="jobtitle">Job Title:Magazine model</h5>
                                                         <ul>
                                                            <li>We are seeking for female actors to play the role of institute workers, peons within the age of 20 - 50 years for an Untitled Sports Film.</li>
                                                            <li>Age Group 20 - 50  years</li>
                                                            <!-- <li>PHP5 Enabled</li> -->
                                                            <!-- <li>24h Support</li> -->
                                                         </ul>
                                                         <a title="" href="#" class="dark-btn">View Job</a>
                                                      </div>
                                                   </div>
                                                   <!-- Simple Tabs -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Simple Price Table -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <div id="tab7" class="tab-pane fade">
                           <!-- <div class="row">
                              <div class="col-md-12">
                              	<div class="simple-parallax-text">
                              		<span>Consectetuer Adipiscing</span>
                              		<h3>CREATE ONLINE WEBSITE WITH ONLY 1-CLICK</h3>
                              		<p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                              		<a class="coloured-btn" href="#" title="">Read More</a>
                              	</div>									
                              </div>
                              </div> -->
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="simple-parallax-text">
                                    <span>Consectetuer Adipiscing</span>
                                    <h3>Script Writer</h3>
                                    <p>who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
                                    <a class="coloured-btn" href="#" title="">Read More</a>
                                 </div>
                                 <!-- Simple Parallax -->										
                              </div>
                              <div class="col-md-6">
                                 <div class="image" style="width: 80%;"><img src="assets/images/script_writter.jpg" alt="" /></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
   <section>
   <div class="block" style="background-color: #f0f0f0; ">
   <div class="container">
   <div class="row">
   <div class="col-md-12 column">
   <div class="center-title">
   <span>Consectetuer Adipiscing</span>
   <h2 >Testimonials</h2>
   </div>					
   <div class="ceo-carousel">
   <div class="ceo-message">
   <img alt="" src="assets/images/testimonial2.png" style="width: 20%;">
   <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue </blockquote>
   <strong>REENA SCOT</strong>
   <span>Founder</span>
   </div>
   <div class="ceo-message">
   <img alt="" src="assets/images/testimonial2.png" style="width: 20%;">
   <blockquote> A quis nisly Ut vehicula gravida dui in pulvinar donecLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue </blockquote>
   <strong>REENA SCOT</strong>
   <span>Founder</span>
   </div>				
   <div class="ceo-message">
   <img alt="" src="assets/images/testimonial2.png" style="width: 20%;">
   <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus pretium rhoncus diam elit consequat eget augue </blockquote>
   <strong>REENA SCOT</strong>
   <span>Founder</span>
   </div>
   </div><!-- CEO Carousel -->
   </div>
   </div>
   </div>
   </div>
   </section>
   <!-- <section>
      <div class="block">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12 column">
      				<div class="center-title">
      					<span>Consectetuer Adipiscing</span>
      					<h2>potential with Organ</h2>
      				</div>
      				<div class="mockup"><img src="images/mockup.png" alt="" /></div>
      				<div class="all-services">
      					<div class="row">
      						<div class="col-md-3">
      							<div class="service fadeinleft">
      								<span><i class="pe-7s-wristwatch"></i></span>
      								<i>Consectetuer </i>
      								<strong>Our Strategy</strong>
      								<p>It's the year of the entreprneur Thank in part, to social media</p>
      								<a href="#" title=""><i class="fa fa-arrow-right"></i></a>
      							</div>
      						</div>
      						<div class="col-md-3">
      							<div class="service fadeinleft delay3">
      								<span><i class="pe-7s-ticket"></i></span>
      								<i>Consectetuer </i>
      								<strong>Extensive Pack</strong>
      								<p>It's the year of the entreprneur Thank in part, to social media</p>
      								<a href="#" title=""><i class="fa fa-arrow-right"></i></a>
      							</div>
      						</div>
      						<div class="col-md-3">
      							<div class="service fadeinleft delay2">
      								<span><i class="pe-7s-timer"></i></span>
      								<i>Consectetuer </i>
      								<strong>Our Approach</strong>
      								<p>It's the year of the entreprneur Thank in part, to social media</p>
      								<a href="#" title=""><i class="fa fa-arrow-right"></i></a>
      							</div>
      						</div>
      						<div class="col-md-3">
      							<div class="service fadeinleft delay3">
      								<span><i class="pe-7s-wine"></i></span>
      								<i>Consectetuer </i>
      								<strong>clean code</strong>
      								<p>It's the year of the entreprneur Thank in part, to social media</p>
      								<a href="#" title=""><i class="fa fa-arrow-right"></i></a>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      </section> -->
   <!-- 
      <section>
      	<div class="block blackish">
      		<div class="parallax" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1600x1200) no-repeat 50% 0;"></div>
      		<div class="container">
      			<div class="row">
      				<div class="col-md-12 column">
      					<div class="parallax-text lightbox">
      						<span>agency or advert agency is a service</span>
      						<h4>How we work in company</h4>
      						<a href="#" title="" class="dark-btn"><i class="pe-7s-play"></i> Play Video</a>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section> -->
   <!-- <section>
      <div class="block gray less-spacing">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12 column">
      				<div class="side-title">
      					<span>Consectetuer Adipiscing</span>
      					<h2>WHO WE ARE</h2>
      				</div>					
      			</div> -->
   <!-- <div class="col-md-6 column">
      <div class="text">
      	<p>Trained at London Central Saint Martin school of arts & specialising in the Music and Movie industries, I also have a strong background in Marketing, Communication and Sales that allows me to understand the needs of businesses and their</p>
      	<p>I also have a strong background in Marketing, Communication and Sales that allows me to understand the needs</p>
      </div> -->
   <!-- Text -->
   <!-- </div>
      <div class="col-md-6 column">
      	<div class="progressbars">
      		<div class="skill fadeinright">
      			<span><i class="pe-7s-medal"></i>TOP PROJECT<strong>70%</strong></span>
      			<div class="progress">
      				<div class="progress-bar wdth70"></div>							
      			</div> -->
   <!-- </div> -->
   <!-- Skill -->
   <!-- <div class="skill fadeinright">
      <span><i class="pe-7s-paint-bucket"></i>WEB DESIGN<strong>42%</strong></span>
      <div class="progress">
      	<div class="progress-bar wdth42"></div>							
      </div>
      </div> -->
   <!-- Skill -->
   <!-- <div class="skill fadeinright"> -->
   <!-- 	<span><i class="pe-7s-science"></i>CLEAN CODE<strong>69%</strong></span>
      <div class="progress">
      	<div class="progress-bar wdth69"></div>							
      </div>
      </div> -->
   <!-- Skill -->
   <!-- </div> -->
   <!-- Progress Bars -->
   <!-- 				</div>
      </div>
      </div>
      </div>
      </section>
      -->
   <!-- <section>
      <div class="block">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12 column">
      				<div class="center-title">
      					<span>Consectetuer Adipiscing</span>
      					<h2>Meet Our Creative Team</h2>
      				</div>
      				<div class="team">
      					<div class="row">
      						<div class="col-md-4">
      							<div class="member fadeinupbig">
      								<a href="#" title=""><img src="http://placehold.it/370x454" alt="" />	</a>
      								<div class="member-name">
      									<h4><a href="#" title="">Simon Grieshaber</a></h4>
      									<span>PHP Programmer</span>
      								</div>
      								<div class="skill">
      									<strong>70%</strong>
      									<div class="progress">
      										<div class="progress-bar wdth70"></div>							
      									</div>
      								</div>
      							</div>
      						</div>
      						<div class="col-md-4">
      							<div class="memberfadeinupbig delay2">
      								<a href="#" title=""><img src="http://placehold.it/370x454" alt="" />	</a>
      								<div class="member-name">
      									<h4><a href="#" title="">Simon Grieshaber</a></h4>
      									<span>PHP Programmer</span>
      								</div>
      								<div class="skill">
      									<strong>90%</strong>
      									<div class="progress">
      										<div class="progress-bar wdth90"></div>							
      									</div>
      								</div>
      							</div>
      						</div>
      						<div class="col-md-4">
      							<div class="memberfadeinupbig delay3">
      								<a href="#" title=""><img src="http://placehold.it/370x454" alt="" /></a>
      								<div class="member-name">
      									<h4><a href="#" title="">Simon Grieshaber</a></h4>
      									<span>PHP Programmer</span>
      								</div>
      								<div class="skill">
      									<strong>84%</strong>
      									<div class="progress">
      										<div class="progress-bar wdth84"></div>							
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      </section>
      -->
   <!-- <section>
      <div class="block remove-gap">
      	<div class="row">
      		<div class="col-md-12 column">
      			<div class="center-title">
      				<span>Consectetuer Adipiscing</span>
      				<h2>ORGAN COMPANY PROJECTS</h2>
      			</div>
      			<div class="row no-gap">
      				<div class="masonary">
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>					
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>				
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>				
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>					
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>					
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>				
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>					
      					</div>
      					<div class="col-md-3">
      						<div class="project">
      							<img src="http://placehold.it/383x356" alt="" />
      							<div class="project-hover">
      								<h4>FULL HEADER SLIDER</h4>
      								<span>Organ Project</span>
      								<div class="lightbox"><a href="http://placehold.it/1000x800" title=""><i class="pe-7s-search"></i></a></div>
      								<a href="#" title=""><i class="pe-7s-link"></i></a>
      							</div>
      						</div>				
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      </section>
      
      -->
   <!-- <section>
      <div class="block remove-gap">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12 column">
      				<div class="center-title">
      					<span>Consectetuer Adipiscing</span>
      					<h2>OUR PROJECTS PACKAGES</h2>
      				</div>				
      			</div>
      			<div class="price-packages">
      				<div class="row">
      					<div class="col-md-4">
      						<div class="price-table">
      							<div class="round-img"><img src="images/resource/table1.jpg" alt="" /></div>
      							<div class="price">$100.00</div>
      							<div class="table-name">
      								<h5>HTML DEVELOPMENT</h5>
      								<span>PHP Programmer</span>
      							</div>
      							<ul>
      								<li>4GB Webspace Included</li>
      								<li>2 Domains</li>
      								<li>PHP5 Enabled</li>
      								<li>24h Support</li>
      							</ul>
      							<a class="dark-btn" href="#" title="">Contact Us</a>
      						</div>
      					</div>
      					<div class="col-md-4">
      						<div class="price-table">
      							<div class="round-img"><img src="images/resource/table2.jpg" alt="" /></div>
      							<div class="price">$300.00</div>
      							<div class="table-name">
      								<h5>WORDPRESS DEVELOPMENT</h5>
      								<span>PHP Programmer</span>
      							</div>
      							<ul>
      								<li>4GB Webspace Included</li>
      								<li>2 Domains</li>
      								<li>PHP5 Enabled</li>
      								<li>24h Support</li>
      							</ul>
      							<a class="dark-btn" href="#" title="">Contact Us</a>
      						</div>
      					</div>
      					<div class="col-md-4">
      						<div class="price-table">
      							<div class="round-img"><img src="images/resource/table3.jpg" alt="" /></div>
      							<div class="price">$500.00</div>
      							<div class="table-name">
      								<h5>JOOMLA DEVELOPMENT</h5>
      								<span>PHP Programmer</span>
      							</div>
      							<ul>
      								<li>4GB Webspace Included</li>
      								<li>2 Domains</li>
      								<li>PHP5 Enabled</li>
      								<li>24h Support</li>
      							</ul>
      							<a class="dark-btn" href="#" title="">Contact Us</a>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      </section>
      -->
   <!-- section>
      <div class="block">
      <div class="parallax png" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(images/parallax.png) no-repeat 50% 0;"></div>
      	<div class="container">
      		<div class="row">
      			<div class="col-md-offset-4 col-md-8 column">
      				<div class="side-title center">
      					<span>Consectetuer Adipiscing</span>
      					<h2>WHO WE ARE</h2>
      				</div>					
      				<div class="agency-details">
      					<div class="row">
      						<div class="col-md-6">
      							<div class="detail-box bounceinup">
      								<h4>ABOUT US</h4>
      								<p>Fusce vitae nulla at lorem pretium semper. Curab itur laoreet, lectus ac dignissim vestibul</p>
      								<a href="#" title="">KNOW MORE</a>
      							</div>
      						</div>
      						<div class="col-md-6">
      							<div class="detail-box bounceinup delay2">
      								<h4>OUR PROJECTS</h4>
      								<p>Fusce vitae nulla at lorem pretium semper. Curab itur laoreet, lectus ac dignissim vestibul</p>
      								<a href="#" title="">KNOW MORE</a>
      							</div>
      						</div>
      						<div class="col-md-6">
      							<div class="detail-box bounceinup delay3">
      								<h4>SUBSCRIBE WITH US</h4>
      								<form class="subscribe">
      									<input type="text" placeholder="Subscribe With Us" />
      									<button><i class="fa fa-envelope"></i></button>
      								</form>
      							</div>
      						</div>
      						<div class="col-md-6">
      							<div class="detail-box bounceinup delay4">
      								<h4>ACHIEVEMENTS</h4>
      								<p>Fusce vitae nulla at lorem pretium semper. Curab itur laoreet, lectus ac dignissim vestibul</p>
      								<a href="#" title="">KNOW MORE</a>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      </section>
      -->
   <section>
   <div class="block no-padding">
   <div class="row">
   <div class="col-md-12 column">
   <div class="about-projects" >
   <div class="about-project-detail" >
   <img src="assets/images/advisory2.jpg" alt="" />
   <div class="abt-project-overlay">
   <div class="abt-project-inner">
   <span>About Us</span>
   <h3>Advisory Member of Casting Information</h3>
   <p style="color:#000;">who is often responsible for a major business function and who sometimes reports to a vice president (note that in some financial services companies the title. who is often responsible for a major business function and who sometimes reports to a vice president .</p>
   <!-- <a title="" href="#" class="coloured-btn"><i class="fa fa-play"></i>PLAY VIDEO</a> -->
   </div>
   </div>
   </div><!-- About Project Detail -->
   <div class="about-project-carousel">
   <div class="project-slide">							
   <div class="portfolio">
   <img src="assets/images/ad_1.jpeg" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">John Doe</a></h4>
   <span>Managing Director</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   <div class="portfolio">
   <img src="assets/images/ad_2.jpeg" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Jack Doe</a></h4>
   <span>Casting Head</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   </div><!-- Project Slide -->
   <div class="project-slide">							
   <div class="portfolio">
   <img src="assets/images/ad_3.jpeg" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Jade Doe</a></h4>
   <span>Production Head</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   <div class="portfolio">
   <img src="assets/images/ad_4.jpeg" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Julee Doe</a></h4>
   <span>Artist Trainer</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   </div><!-- Project Slide -->
   <div class="project-slide">							
   <div class="portfolio">
   <img src="assets/images/James_Doe.png" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">James Doe</a></h4>
   <span>Committee Member</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   <div class="portfolio">
   <img src="assets/images/Jane_Doe.png" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Jane Doe</a></h4>
   <span>Committee Member</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   </div><!-- Project Slide -->
   <div class="project-slide">							
   <div class="portfolio">
   <img src="assets/images/Jennifer_Doe.png" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Jennifer Doe</a></h4>
   <span>Committee Member</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   <div class="portfolio">
   <img src="assets/images/Jules_Doe.png" alt="" />
   <div class="portfolio-hover">
   <h4><a href="#" title="">Jules Doe</a></h4>
   <span>Committee Member</span>
   <a href="#" title=""><i class="fa fa-link"></i></a>
   </div>
   </div><!-- Portfolio -->
   </div><!-- Project Slide -->
   </div><!-- About Project Carousel -->
   </div><!-- About Projects -->
   </div>
   </div>
   </div>
   </section>
   <!--  Footer New -->
   <section>
   <div class="block blackish">
   <div class="parallax" data-velocity="-.2" style="background: #000;"></div>
   <div class="container">
   <div class="row">
   <div class="col-md-offset-2 col-md-8 column">
   <div class="about-section">
   <!-- <a href="#" title=""><img src="assets/images/new-casting-logo.png" alt="" style="width:25%;" /></a> -->
   <!-- <p>Dunt, et egestas magna molestie. Etiam bibendum dolor malesuada erat tincidunt, et egestas magna molestie. Etiam bibendum dolor malesuada erat tincidunt, et egestas </p> -->
   <div class="social-share">
   <a href="#" title=""><i class="fa fa-facebook"></i></a>
   <a href="#" title=""><i class="fa fa-twitter"></i></a>
   <a href="#" title=""><i class="fa fa-google-plus"></i></a>
   <a href="#" title=""><i class="fa fa-dribbble"></i></a>
   <a href="#" title=""><i class="fa fa-linkedin"></i></a>
   </div>
   <ul>
   <li><i class="fa fa-home"></i> Mumbai</li>
   <li><i class="fa fa-envelope"></i> info@castingrole.com</li>
   <li><i class="fa fa-phone"></i> +900-78601 : +900-14578</li>
   </ul>
   </div>
   </div>
   </div>
   </div>
   </div>
   </section>
   <!-- <footer>
      <div class="block">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3 column">
      				<div class="widget">
      					<h4 class="widget-title">CONTACT INFO</h4>
      					<div class="about-widget">
      						<p>Rained at London Central Saint Martin school of arts & specialising in the Music and Movie industries. </p>
      						<ul>
      							<li><i class="fa fa-home"></i> Uk Street, Green Home City, London.</li>
      							<li><i class="fa fa-envelope-o"></i> info@yourtheme.com</li>
      							<li><i class="fa fa-phone"></i> +710-73602 : +924-15588</li>
      						</ul>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-3 column">
      				<div class="widget">
      					<h4 class="widget-title">LATEST NEWS</h4>
      					<div class="news-widget">
      						<div class="news">
      							<div class="news-img"><img src="http://placehold.it/98x98" alt="" /></div>
      							<div class="news-detail">
      								<h4><a href="#" title="">A Clean Website Gives More Experience Visit</a></h4>
      								<span>7 DECEMBER 2015</span>
      							</div>
      						</div>
      						<div class="news">
      							<div class="news-img"><img src="http://placehold.it/98x98" alt="" /></div>
      							<div class="news-detail">
      								<h4><a href="#" title="">A Clean Website Gives More Experience Visit</a></h4>
      								<span>7 DECEMBER 2015</span>
      							</div>
      						</div>
      					</div>												
      				</div>
      			</div>
      			<div class="col-md-3 column">
      				<div class="widget">
      					<h4 class="widget-title">OUR GALLERY</h4>
      					<div class="gallery-widget lightbox">
      						<a href="http://placehold.it/1000x700" title=""><img src="http://placehold.it/134x94" alt="" /></a>
      						<a href="http://placehold.it/1000x700" title=""><img src="http://placehold.it/134x94" alt="" /></a>
      						<a href="http://placehold.it/1000x700" title=""><img src="http://placehold.it/134x94" alt="" /></a>
      						<a href="http://placehold.it/1000x700" title=""><img src="http://placehold.it/134x94" alt="" /></a>
      						<a class="small-btn" href="#" title="">View All</a>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-3 column">
      				<div class="widget">
      					<h4 class="widget-title">PROJECT INTRO</h4>
      					<div class="news-widget">
      						<div class="news">
      							<div class="news-img"><img src="http://placehold.it/98x98" alt="" /></div>
      							<div class="news-detail">
      								<h4><a href="#" title="">A Clean Website Gives More Experience Visit</a></h4>
      								<span>7 DECEMBER 2015</span>
      							</div>
      						</div>
      						<div class="news">
      							<div class="news-img"><img src="http://placehold.it/98x98" alt="" /></div>
      							<div class="news-detail">
      								<h4><a href="#" title="">A Clean Website Gives More Experience Visit</a></h4>
      								<span>7 DECEMBER 2015</span>
      							</div>
      						</div>
      					</div>											
      				</div>
      			</div>
      
      
      		</div>
      	</div>
      </div>
      </footer> -->
   <!-- <div class="bottom-footer">
      <p>Copyright Usertheme 2017. All Rights Reserved</p>
      </div> -->
   </div>
   <script type="text/javascript">
      $('ul.nav li.dropdown').hover(function() {
       $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
      }, function() {
       $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
      });
   </script>
   <!-- MAIN JQUERY AND MODERANIZER.JS -->
   <script type="text/javascript" src="<?=base_url();?>assets/js/modernizr.custom.97074.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-2.2.3.min.js"></script>	
   <!-- REVOLUTION JS FILES -->
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/jquery.themepunch.tools.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
   <!-- REVOLUTION JS EXTENITONS FILES -->
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.actions.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.carousel.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.kenburn.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.layeranimation.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.migration.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.navigation.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.parallax.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.slideanims.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/revolution.extension.video.min.js"></script>
   <!-- REVOLUTION JS INITIALIZATION -->
   <script type="text/javascript" src="<?=base_url();?>assets/js/revolution/initialize.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.poptrox.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.scrolly.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.isotope.min.js"></script>
   <script type="text/javascript" src="<?=base_url();?>assets/js/isotope-initialize.js"></script>
   <script src="<?=base_url();?>assets/js/bootstrap-number-input.js" ></script>
   <script src="<?=base_url();?>assets/js/enscroll-0.5.2.min.js"></script> <!-- Custom Scroll bar -->
   <script type="text/javascript" src="<?=base_url();?>js/onscreen.js"></script>
   <!-- <script type="text/javascript" src="<?=base_url();?>assets/js/visible.js"></script> -->
   <script type="text/javascript" src="<?=base_url();?>assets/js/script.js"></script>
</body>