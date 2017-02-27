<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="We offer rotating craft beers brewed and poured fresh in our South Loop taproom right on Michigan Avenue.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Microbrewery serving Chicago's South Loop | Vice District</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


	<!-- Custom CSS -->
	<link href="css/navbarreset.css" rel="stylesheet">
	<link href="css/customstyles.css" rel="stylesheet">

	<link rel="icon" href="images/icon.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
     <?php include_once("analyticstracking.php") ?>

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
				<!-- <div class="hidden-xs" id="bannerinfo">
					<a href="tel:+3122919022">
						<span class="glyphicon glyphicon-phone" ariad-hidden="true"></span>
						&#40;312&#41; 291 - 9022
					</a>
					</br></br>
					<a href="https://www.google.com/maps/dir//1454+S+Michigan+Ave,+Chicago,+IL+60605/" title="View a Google Map To Vice District's Taproom">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						1454 S Michigan Ave</br>Chicago, IL 60605
					</a>
				</div> -->
				<a href="index.php">
					<img src="images/centerlogo.png" class="img-responsive" id="centerlogo" alt="Vice District Brewing Co."/>
				</a>
				<div class="hidden-xs" id="emailsignup">
					<a href="#" onclick="return false;">
						<span id="closesignup"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></span>
					</a>
					<div class="signupheader">Stay in the Loop.</div>
					<div class="signuptext">Subscribe to our newsletter to see what's happening at Vice District</div>
					<?php perch_mailchimp_form('forms/VDBsubscribe'); ?>
				</div>
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
      <div class="panel-group hidden-sm hidden-md hidden-lg hidden-xl">
			<div class="panel panel-default">
				<div class="panel-heading" id="panelmobile">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapsemobile"><h1 class="panel-title"  id="titlemobile"><span class="glyphicon glyphicon-menu-hamburger glyphmobile" aria-hidden="true"></span></h1></a>
					</h4>
				</div>
				<div id="collapsemobile" class="panel-collapse collapse">
					<div class="panel-body" id="panelmobile">
                  <div class="mobileinners" id="">
      					<div><a href="https://www.yelp.com/biz/vice-district-taproom-chicago"><img class="" src="images/socialicons/yelpicon.svg" title="Yelp"/></a></div>
      					<div><a href="https://www.facebook.com/ViceDistrictBrewing/"><img class="" src="images/socialicons/facebookicon.svg" title="Facebook"/></a></div>
      					<div><a href="https://twitter.com/Vice_District"><img class="" src="images/socialicons/twittericon.svg" title="Twitter"/></a></div>
      					<div><a href="https://www.instagram.com/vice_district/"><img class="" src="images/socialicons/instagramicon.svg"title="Instagram"/></a></div>
      				</div>
                  <a href="beer.php">
							<div class="mobileinners">
								<div>Beer</div>
							</div>
						</a>
						<a href="taproom.php">
							<div class="mobileinners">
								<div>Taproom</div>
							</div>
						</a>
                  <a href="family.php">
							<div class="mobileinners">
								<div>Family</div>
							</div>
						</a>
						<a href="calendar.php">
							<div class="mobileinners">
								<div>Calendar</div>
							</div>
						</a>
                  <a href="contact.php">
							<div class="mobileinners">
								<div>Contact</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="mosaic">
			<div class="row">
				<div class="hidden-xs col-sm-4">
					<div class="row"><div class="col-xs-12" style="padding-right: 0px;"><img class="img-responsive" src="images/mosaic1.png" alt="Craft Beer"></div></div>
					<div class="row"><div class="col-xs-12" style="padding-right: 0px;"><img class="img-responsive" src="images/mosaic4-2.png" alt="Merchandise"></div></div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<div class="col-xs-5" style="padding-right: 0px;"><img class="img-responsive" src="images/mosaic2.png" alt="Bartender"></div>
						<div class="col-xs-7"><img class="img-responsive" src="images/mosaic3.png" alt="Craft Beer"></div>
					</div>
					<div class="row">
						<div class="col-xs-12"><img class="img-responsive" src="images/mosaic5.png" alt="Taproom Near Downtown"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="panels">
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading panelheading1">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapse1"><h2 class="panel-title">Who We Are <span class="glyphicon glyphicon-chevron-down"
                         aria-hidden="true"></span></h2></a>
					</h4>
				</div>
				<div id="collapse1" class="panelcollapse panel-collapse collapse">
					<div class="panel-body">
						<div class="media story">
                     <?php perch_content('Story'); ?>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<a href="family.php"><span class="pull-right panellink">More &nbsp;About &nbsp;Our &nbsp;Family<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></span></a>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading panelheading2">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapse2"><h2 class="panel-title">New Beer On Tap <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></h2></a>
					</h4>
				</div>
				<div id="collapse2" class="panelcollapse panel-collapse collapse">
					<div class="panel-body">

						<?php perch_content('New Releases'); ?>

						<div class="row">
							<div class="col-xs-12">
								<a href="beer.php"><span class="pull-right panellink">Complete &nbsp;Tap &nbsp;List<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></span></a>
							</div>
						</div>

					</div>
				</div>
		  </div>

		  <div class="panel panel-default">
				<div class="panel-heading panelheading3">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapse3"><h2 class="panel-title">Upcoming Events <span class="glyphicon glyphicon-chevron-down"
                         aria-hidden="true"></span></h2></a>
					</h4>
				</div>
				<div id="collapse3" class="panelcollapse panel-collapse collapse">
					<div class="panel-body">

                  <?php
                     perch_events_custom(array(
                         'count' => 6,
                         'filter' => 'eventDateTime',
                         'match' => 'gt',
                         'value' => date('Y-m-d'),
                         'sort' => 'eventDateTime',
                         'sort-order'=>'ASC',
                         'category' => array('festival', 'public-event'),
                         'template' => 'listing/vicedistrict/upcoming-events.html'
                     ));
                  ?>

						<div class="row">
							<div class="col-xs-12">
								<a href="calendar.php"><span class="pull-right panellink">Full &nbsp;Calendar<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></span></a>
							</div>
						</div>

					</div>
				</div>
			</div>

         <div class="bottompanelsflex">
            <div class="bottompanels">
               <a href="family.php#joblisting"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Work With Us</a>
            </div>
            <div class="bottompanels">
               <a href="contact.php#FAQs">FAQs<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
         </div>

		</div>
		</div>

	</div>


	<footer class="row-footer customfooter">

		<div class="row vertaligned">
			<div class="col-xs-12 col-sm-6 text-center nopadding">
				<div class="footertext row">
					<div class="col-md-6 col-sm-12 footertextleft">
						<a href="https://www.google.com/maps/place/Vice+District+Brewing+Company/@41.8624994,-87.6265913,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2c8464f6131d:0x3907d1208eaa2804!8m2!3d41.8624994!4d-87.6244026" title="View a Google Map To Vice District's Taproom">1454 S Michigan Ave</br>Chicago, IL 60605</a></br></br><a href="tel:+3122919022">&#40;312&#41; 291 - 9022</a>
					</div>
					<div class="col-md-6 col-sm-12 footertextright">
						Monday: Private Events</br>
						Tues-Thurs: 4PM-11PM</br>
						Friday: 4PM-1AM</br>
						Saturday: 2PM-1AM</br>
						Sunday: 2PM-9PM</br>
					</div>
               <div class="hidden-sm hidden-md hidden-lg hidden-xl">
                  <div class="mobilenewsletter">Subscribe to our newsletter</div>
                  <div>
                     <?php perch_mailchimp_form('forms/VDBsubscribe'); ?>
                  </div>
               </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 footermap">
				<a href="https://www.google.com/maps/place/Vice+District+Brewing+Company/@41.8624994,-87.6265913,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2c8464f6131d:0x3907d1208eaa2804!8m2!3d41.8624994!4d-87.6244026" title="View a Google Map To Vice District's Taproom">
					<img src="images/footermap.png" alt="Google Map of 1454 S Michigan Ave, Chicago, IL 60605" class="img-responsive footermap">
				</a>
			</div>
		</div>

		<div class="row text-center footerend">
			<div class="col-xs-12 col-sm-6 sitemap">
            <a href="taproom.php" class="sitemapinners">
					About
				</a>
				<a href="family.php" class="sitemapinners">
					Jobs
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

  </body>
</html>
