<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Up-to-date listing of the staple beers and limited releases currently being poured at our taproom.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beer On Tap | Vice District Brewing</title>

    <link href="../css/cleancomplete.css" rel="stylesheet">

	<link rel="icon" href="../images/icon.png">

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

  </head>
  <body>
     <?php include_once("../analyticstracking.php") ?>

     <?php include("../templates/agemodal.php") ?>

     <?php include("../templates/subpages/fixednav.php") ?>

     <?php include("../templates/subpages/mainnav.php") ?>

	<div class="main container loadfloat">

      <?php include("../templates/subpages/mobilenav.php") ?>

      <div class="carddivider beersintro">
         <div class="beersintroleft">
            <h1><span>What's On Tap</span></h1>
            <div>
            <p>
               We are often asked "What type of beers do you specialize in?". Our typical response is "Delicious". We are beer enthusiasts period.  Our beers are crafted 100% naturally. We do not filter or pasteurize our beers. We do not focus on any particular style because we want our patrons to experience and experiment with as many flavors as possible.
            </p>
            <p>
               With that being said it is important to us that each batch we make has an emphasis on being balanced in its presentation for drinkability. Therefore you will always find a wide selection of rotating and seasonal selections on tap in addition to our staple beers. Regardless if you are a novice or a self proclaimed beer guru, we have beers on tap that will please and delight you.
            </p>
            </div>
         </div>
         <div class="beersintroright loadfloat">
            <img src="../images/beers/Group.jpg" class="img-responsive" alt="Craft Beers"/>
         </div>
		</div>

		<div class="row beertitle">
			<h1><span>Staple Beers</span></h1>
		</div>
		<div class="carddivider">
			<div>

            <?php perch_content('Staple Beers'); ?>

			</div>
		</div>

		<div class="row beertitle">
			<h1><span>Limited Release Beers</span></h1>
		</div>

		<div class="carddivider">
			<?php perch_content('Limited Releases'); ?>
		</div>

      <div class="carddivider pastbeers">
         <div class="pastbeersleft">
            <h1><span>In Loving Memory</span></h1>
            <ul>
               <?php perch_content('Past Beers'); ?>
            </ul>
         </div>
         <div class="pastbeersright">
            <img src="../images/taproomphotos/tanks.jpg" class="img-responsive"/>
            <img src="../images/taproomphotos/tanks2.jpg" class="img-responsive hidden-xs"/>
         </div>
		</div>

	</div>

   <?php include("../templates/subpages/footer.php") ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

	<!-- Custom JS Files -->
	<script type="text/javascript" src="../js/customscripts.js"></script>


  </body>
</html>
