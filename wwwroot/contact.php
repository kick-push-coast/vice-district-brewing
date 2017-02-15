<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact | Vice District Brewing Co.</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


	<!-- Custom CSS -->
	<link href="css/navbarreset.css" rel="stylesheet">
	<link href="css/customstyles.css" rel="stylesheet">

	<link rel="icon" href="images/icon.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Titillium+Web" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt|Shadows+Into+Light+Two" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/8eb7fdaca4.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		html, body, .container, .directions, .directionsright {
			min-height: 100%;
		}
	</style>

  </head>
  <body>

     <div class="modal fade" id="ageModal" tabindex="-1" role="dialog" aria-labelledby="ageModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <img class="img-responsive center-block" src="images/centerlogo.png"/>
             </div>
             <div class="modal-body">
                <p id="ageVerifyMessage">Are you 21 years of age or older?</p>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="ageVerified">Yes</button>
                <button type="button" class="btn btn-secondary" id="ageNotVerified">No</button>
             </div>
          </div>
      </div>
   </div>

     <div id="fixedbanner" class="fixedbanner hidden-xs">
       <div class="fixedflex">
 				<div class="fixedlink fixedimglink">
                <a href="index.php">
                   <img src="images/fixedlogoskyline.png" class="img-responsive fixedimg">
                </a>
             </div>
 				<div class="fixedlink ">
 					<div class="row fixedpadding"></div>
 					<a href="taproom.php">
 						<div class="fixedtext">
 							Taproom
 						</div>
 					</a>
 				</div>
 				<div class="fixedlink ">
 					<div class="row fixedpadding"></div>
 					<a href="family.php">
 						<div class="fixedtext">
 							Family
 						</div>
 					</a>
 				</div>
 				<div class="fixedlink ">
 					<div class="row fixedpadding"></div>
 					<a href="beer.php">
 						<div class="fixedtext">
 							Beer
 						</div>
 					</a>
 				</div>
 				<div class="fixedlink ">
 					<div class="row fixedpadding"></div>
 					<a href="calendar.php">
 						<div class="fixedtext">
 							Calendar
 						</div>
 					</a>
 				</div>
 				<div class="fixedlink ">
 					<div class="row fixedpadding"></div>
 					<a href="contact.php">
 						<div class="fixedtext">
 							Contact
 						</div>
 					</a>
 				</div>
          </div>

 			<!-- <div class="col-xs-2 fixedlogowrap">
 				<a href="index.php"><img src="images/fixedlogo.png" class="img-responsive fixedlogo center-block" id="centerlogo" alt="Vice District Brewing Co."/></a>
 			</div>
 			<div class="col-xs-10"></div> -->

 	</div>

	<div class="banner">
		<div id="banner" class="bannerinner">
			<div class="bannertop">
				<div class="hidden-xs" id="socialmedia">
					<div id="socialinners"><a href="https://www.yelp.com/biz/vice-district-taproom-chicago"><img class="img-responsive col-xs-12" src="images/socialicons/yelpicon.svg" title="Yelp"/></a></div>
					<div id="socialinners"><a href="https://www.facebook.com/ViceDistrictBrewing/"><img class="img-responsive col-xs-12" src="images/socialicons/facebookicon.svg" title="Facebook"/></a></div>
					<div id="socialinners"><a href="https://twitter.com/Vice_District"><img class="img-responsive col-xs-12" src="images/socialicons/twittericon.svg" title="Twitter"/></a></div>
					<div id="socialinners"><a href="https://www.instagram.com/vice_district/"><img class="img-responsive col-xs-12" src="images/socialicons/instagramicon.svg"title="Instagram"/></a></div>
				</div>
				<a href="index.php"><img src="images/centerlogo.png" class="img-responsive" id="centerlogo" alt="Vice District Brewing Co."/></a>
			</div>
			<div class="bannerbottom">
				<nav class="navbar hidden-xs">
					<ul class="nav list-unstyled">
						<div id="navleft">
							<a href="taproom.php">
								<li id="navinners">Taproom</li>
							</a>
							<a href="family.php">
								<li id="navinners">Family</li>
							</a>
							<a href="beer.php">
								<li id="navinners">Beer</li>
							</a>
						</div>
						<div id="navright">
							<a href="calendar.php">
								<li id="navinners">Calendar</li>
							</a>
							<a href="contact.php">
								<li id="navinners">Contact</li>
							</a>
							<a class="gearlink">
								<li id="navinners"><span id="geartitle">Gear</span><span id="gearwarning">Coming Soon</span></li>
							</a>
						</div>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="main container">
		<div class="panel-group hidden-sm hidden-md hidden-lg">
			<div class="panel panel-default">
				<div class="panel-heading" id="panelmobile">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapsemobile"><h1 class="panel-title"  id="titlemobile">Menu <span class="glyphicon glyphicon-menu-hamburger glyphmobile" aria-hidden="true"></span></h1></a>
					</h4>
				</div>
				<div id="collapsemobile" class="panel-collapse collapse">
					<div class="panel-body" id="panelmobile">
						<a href="beer.php">
							<div class="mobileinners">
								The Beer
							</div>
						</a>
						<a href="taproom.php">
							<div class="mobileinners">
								The Taproom
							</div>
						</a>
						<a href="calendar.php">
							<div class="mobileinners">
								Calendar
							</div>
						</a>
						<a href="contact.php">
							<div class="mobileinners">
								Contact Us
							</div>
						</a>
						<a href="">
							<div class="mobileinners">
								Gear Shop
							</div>
						</a>
					</div>
				</div>
         </div>
		</div>

      <div class="contactinfo">
         <div class="contactinfoleft">
            <h1>Get In Touch</h1>
            <div>
               <div class="vertflex contactlink">(312) 291 - 9022</div>
               <div class="vertflex contactlink contactemail"><a href="mailto:info@vicedistrictbrewing.com">info@vicedistrictbrewing.com</a></div>
               <div class="vertflex faqslink"><a href="#FAQs"><span>Frequently Asked Questions</span> <span class="glyphicon glyphicon-chevron-down"
                      aria-hidden="true"></span></a></div>
            </div>
         </div>
         <div class="contactinforight">
            <form action="" id="contactform">
               <textarea name="contactformmsg" placeholder="Write us a message..." required></textarea>
               <input type="text" placeholder="Your E-Mail Address" name="contactformemail" required>
               <input type="submit" value="Send">
            </form>
         </div>
      </div>

		<div class="directions">
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

	<footer class="row-footer customfooter">

		<div class="row text-center footerend">
			<div class="col-xs-12 col-sm-6 sitemap">
				<a href="taproom.php" class="sitemapinners">
					About
				</a>
				<a href="beer.php" class="sitemapinners">
					Product
				</a>
				<a href="calendar.php" class="sitemapinners">
					Calendar
				</a>
				<a href="contact.php" class="sitemapinners">
					Contact
				</a>
				<a class="sitemapinners">
					Shop
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 copyright">&#169; <?php echo date("Y"); ?> Vice District Brewing Co.</div>
		</div>
	</footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Custom JS Files -->
	<script type="text/javascript" src="js/customscripts.js"></script>
	<script type="text/javascript" src="js/googlemaps.js"></script>

	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNvZPIV8ixTZ_n-XEEiwpuSnMAqyouBK8&callback=initMap"
    async defer></script>


  </body>
</html>
