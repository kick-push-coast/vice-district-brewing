<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Family | Vice District Brewing Co.</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

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
						<a href="Beer.php">
							<div class="mobileinners">
								The Beer
							</div>
						</a>
						<a href="taproom.php">
							<div class="mobileinners">
								The Taproom
							</div>
						</a>
						<a href="Calendar.php">
							<div class="mobileinners">
								Calendar
							</div>
						</a>
						<a href="Contact.php">
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

      <div class="ownersblock">
         <div class="ownersleft container">
            <div class="row vertflex">
               <img class="col-xs-6" src="images/staffphotos/q.jpeg"/>
               <img class="col-xs-6" src="images/staffphotos/curtis.jpg"/>
            </div>
            <div class="row vertflex">
               <img class="col-xs-12" src="images/staffphotos/curtis_q_aydan.jpg"/>
            </div>
            <div class="row vertflex">
               <img class="col-xs-12" src="images/staffphotos/aydan.jpg"/>
            </div>
         </div>
         <div class="ownersright">
            <h1>Our Family</h1>
            <div>
               <div class="vertflex">
               <p>
                  <h3>Quintin Cole and Curtis Tarver, co-owners of Vice District Brewing</h3>
                  Quintin Cole and Curtis Tarver created Vice District Brewing as a place for people to come together, relax with one another, and to help foster an environment of diversity and inclusion on Chicago’s Southside. It is not uncommon to see both co-owners at the taproom on any given evening, putting in work over a beer or reconnecting with the community.

                  <blockquote>“I especially enjoy the taproom. I enjoy being able to come in and see new people and reconnect with others. I also enjoy seeing something that was a simple basement recipe improved upon and served in the taproom. It is fun to see how recipes change and how people react.”</blockquote>

                  Quintin works full time as the Regional Vice President for Integrity Rehab Group, which specializes in providing onside out-patient Physical and Occupational Therapy services for medical practices. Curtis is a shareholder at Saulter Tarver P.C., where he specializes in plaintiff’s catastrophic injury and complex litigation for the Chicago-land area.

               </p>
               </div>
               <div class="vertflex">
               <p>
                  <h3>Aydan Connor, Head Brewer of Vice District Brewing</h3>
                  Aydan initially moved to the Midwest in 2004 from Pleasanton, CA in pursuit of a degree in trombone performance at Northwestern University. He relocated to Eugene, OR in 2011 and took a job at Falling Sky Fermentation Supply Shop to immerse himself into the craft of brewing. In 2012, Aydan moved back to Chicago and took a position as manager of Brew & Grow in Chicago. Since then, Aydan set up and worked as head brewer at a nano-brewery for Pleasant House in Southwest, MI (2013) and came back to Chicago to be Head Brewer at Motor Row Brewing (2014) under guidance of his long-time mentor. In January of 2016, Aydan became the Head Brewer of Vice District Brewing.

                  <blockquote>“Brewing is everything that I was looking for in a career. It satisfies my interest in fermentation science, artistic taste, engineering, problem solving, physical labor, and…beer! I think of beer as performance in a glass — like making music, brewing allows you to practice towards perfect — it is this drive that excites me about making beer day in and day out.”</blockquote>
               </p>
               </div>
            </div>
         </div>
      </div>
      <div class="salesblock">
         <div class="salesemployee">
            <div class="salesimg">
               <img class="img-responsive" src="images/staffphotos/emily_o.jpg"/>
            </div>
            <div class="salesinfo">
               <h3>Emily O.</h3>
               <h4>Sales & Marketing</h4>
               <div>Favorite Beer: Habitual</div>
               <div>Email: marketing@vicedistricbrewing.com</div>
            </div>
         </div>
         <div class="salesemployee">
            <div class="salesimg">
               <img class="img-responsive" src="images/staffphotos/diego.jpg"/>
            </div>
            <div class="salesinfo">
               <h3>Diego</h3>
               <h4>Brewery Ambassador & Marketing</h4>
               <div>Favorite Beer: Metrosexual</div>
               <div>Email: diego@vicedistricbrewing.com</div>
            </div>
         </div>
      </div>
      <div class="bartendersblock">
         <div class="bartender">
            <img src="images/staffphotos/antwan.jpg" class="img-responsive"/>
            <h3>Antwan</h3>
            <h4>Bartender</h4>
            <span>Favorite Beer: Habitual</span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/bweza.jpg" class="img-responsive"/>
            <h3>Bweza</h3>
            <h4>Bartender</h4>
            <span>Favorite Beer: Red Headed Stunt Dubbel</span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/janelle.jpg" class="img-responsive"/>
            <h3>Janelle</h3>
            <h4>Bartender</h4>
            <span></span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/mary.jpg" class="img-responsive"/>
            <h3>Mary</h3>
            <h4>Bartender</h4>
            <span></span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/emily_r.jpg" class="img-responsive"/>
            <h3>Emily R.</h3>
            <h4>Bartender</h4>
            <span></span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/christal.jpg" class="img-responsive"/>
            <h3>Christal</h3>
            <h4>Bartender</h4>
            <span>Favorite Beer: Habitual</span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/cody.jpg" class="img-responsive"/>
            <h3>Cody</h3>
            <h4>Bartender</h4>
            <span>Favorite Beer: Cluster</span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/sylvia.jpg" class="img-responsive"/>
            <h3>Sylvia</h3>
            <h4>Bartender</h4>
            <span></span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/christine.jpg" class="img-responsive"/>
            <h3>Christine</h3>
            <h4>Bartender</h4>
            <span></span>
         </div>
         <div class="bartender">
            <img src="images/staffphotos/noemi.jpg" class="img-responsive"/>
            <h3>Noemi</h3>
            <h4>Bartender</h4>
            <span>Favorite Beer: Cluster</span>
         </div>
      </div>

	</div>

	<footer class="row-footer customfooter">

		<div class="row vertaligned">
			<div class="col-xs-12 col-sm-6 text-center">
				<div class="footertext row">
					<div class="col-md-6 col-sm-12 footertextleft">
						<a href="https://www.google.com/maps/dir//1454+S+Michigan+Ave,+Chicago,+IL+60605/" title="View a Google Map To Vice District's Taproom">1454 S Michigan Ave</br>Chicago, IL 60605</a></br></br><a href="tel:+3122919022">&#40;312&#41; 291 - 9022</a>
					</div>
					<div class="col-md-6 col-sm-12 footertextright">
						Monday: Private Events Only</br>
						Tues-Thurs: 4PM-11PM</br>
						Friday: 4PM-1AM</br>
						Saturday: 2PM-1AM</br>
						Sunday: 2PM-9PM</br>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 footermap">
				<a href="https://www.google.com/maps/dir//1454+S+Michigan+Ave,+Chicago,+IL+60605/" title="View a Google Map To Vice District's Taproom">
					<img src="images/footermap.png" alt="Google Map of 1454 S Michigan Ave, Chicago, IL 60605" class="img-responsive footermap">
				</a>
			</div>
		</div>

		<div class="row text-center footerend">
			<div class="col-xs-12 col-sm-6 sitemap">
				<a href="taproom.php" class="sitemapinners">
					About
				</a>
				<a href="Beer.php" class="sitemapinners">
					Product
				</a>
				<a href="Calendar.php" class="sitemapinners">
					Calendar
				</a>
				<a href="Contact.php" class="sitemapinners">
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

  </body>
</html>
