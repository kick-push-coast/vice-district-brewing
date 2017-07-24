<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Find your preferred way of contacting Vice District. Get directions to our South Loop taproom and Homewood taproom (coming soon).">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact and Directions | Vice District Brewing</title>

   <link href="../css/cleancomplete.css" rel="stylesheet">

	<link rel="icon" href="../images/icon.png">

   <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/8eb7fdaca4.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '207875076388501'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=207875076388501&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <!-- No JS fallbacks -->
    <noscript>
      <style>
         html{display:block}
         .container{opacity:1}
         .loadfloat {-webkit-transform:translate(0px,0px);transform:translate(0px,0px);}
         #emailsignup{margin-right:0}
         .collapse {display: block;}
      </style>
    </noscript>

	<style>
		html, body, .container, .directions, .directionsright {
			min-height: 100%;
		}
	</style>

  </head>
  <body>
     <?php include_once("../analyticstracking.php") ?>

     <?php include("../templates/agemodal.php") ?>

     <?php include("../templates/subpages/fixednav.php") ?>

     <?php include("../templates/subpages/mainnav.php") ?>

	<div class="main container loadfloat">

      <?php include("../templates/subpages/mobilenav.php") ?>

      <div class="contactinfo">
         <div class="contactinfoleft">
            <h1>Contact</h1>
            <div>
               <div class="vertflex contactlink"><a href="tel:+13122919022"><span class="hidden-sm hidden-md hidden-lg hidden-xl">Phone: </span>&#40;312&#41; 291 - 9022</a></div>
               <div class="vertflex contactlink contactemail"><a href="mailto:info@vicedistrictbrewing.com"><span class="hidden-sm hidden-md hidden-lg hidden-xl">Email: </span>info@vicedistrictbrewing.com</a></div>
               <div class="vertflex contactlink hidden-sm hidden-md hidden-lg hidden-xl mobileaddress"><a href="https://www.google.com/maps/place/Vice+District+Brewing+Company/@41.8624994,-87.6265913,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2c8464f6131d:0x3907d1208eaa2804!8m2!3d41.8624994!4d-87.6244026" title="View a Google Map To Vice District's Taproom">1454 S Michigan Ave</br>Chicago, IL 60605</a>
               </div>
               <div class="vertflex faqslink hidden-xs"><a href="#FAQs"><span>Frequently Asked Questions</span> <span class="glyphicon glyphicon-chevron-down"
                      aria-hidden="true"></span></a></div>
            </div>
         </div>
         <div class="contactinforight loadfloat">
            <? perch_content('Contact Form'); ?>
         </div>
      </div>

		<div class="directions hidden-xs">
			<div class="directionsleft">
				<h1>Get Here</h1>
				<div>
               <div class="vertflex locationcontrols">
                  <ul>
                     <li class='locationcontrol' id='southloop' style="border: 1px solid #dbae51;"><a href="#" onclick="return false;" id="centersouthloop">South Loop</a></li>
                     <li class='locationcontrol' id='homewood' style="border: 1px solid rgba(0,0,0,0);"><a href="#" onclick="return false;" id="centerhomewood">Homewood</a></li>
                  </ul>
               </div>
					<div class="vertflex">
						<a href="https://www.google.com/maps/place/Vice+District+Brewing+Company/@41.8624994,-87.6265913,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2c8464f6131d:0x3907d1208eaa2804!8m2!3d41.8624994!4d-87.6244026" title="View a Google Map To Vice District's Taproom" class="contactlink address" id="address">1454 S Michigan Ave</br>Chicago, IL 60605</a>
					</div>
					<div  class="vertflex" id="nearbyVenues">
						<h3>From nearby venues</h3>
						<ul>
							<li><a href="#" onclick="return false;" id="soldierfield">Soldier Field</a></li>
							<li><a href="#" onclick="return false;" id="mccormickplace">McCormick Place</a></li>
							<li><a href="#" onclick="return false;" id="unitedcenter">United Center</a></li>
						</ul>
					</div>
					<div  class="vertflex" id="nearbyPublicTransit">
						<h3>From public transportation</h3>
						<ul>
							<li><a href="#" onclick="return false;" id="busstop">1510 S Michigan Stop</br>
							<i class="fa fa-bus" aria-hidden="true"></i>&nbsp;1, 3, 4, 12</a></li>
							<li><a href="#" onclick="return false;" id="rooseveltstation">Roosevelt Station</br>
							<i class="fa fa-subway" aria-hidden="true"></i>&nbsp;Green, Orange, Red</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="directionsright">
				<div id="map"></div>
			</div>
         <div class="directionsrightpad">
            <h1>&nbsp;</h1>
            <div></div>
         </div>
		</div>

      <div class="FAQs" id="FAQs">

         <h1>FAQ<span>s</span></h1>

         <?php perch_content('FAQs'); ?>

      </div>

	</div>

   <?php include("../templates/subpages/footer.php") ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

	<!-- Custom JS Files -->
	<script type="text/javascript" src="../js/customscripts.js"></script>
	<script type="text/javascript" src="../js/googlemaps.js"></script>

	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNvZPIV8ixTZ_n-XEEiwpuSnMAqyouBK8"
    defer></script>


  </body>
</html>
