<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="At the core of Vice District is our team. Check out who we are and available opportunities for you to get involved.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Our Family and Available Positions | Vice District Brewing</title>

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

      <?php perch_content('Owners Info'); ?>

      <div class="salesblock">

         <?php perch_content('Sales/Marketing Info'); ?>

      </div>
      <div class="bartendersblock">

         <?php perch_content('Bartenders Info'); ?>

      </div>

      <div class="privateformwrap" id="joblisting">
         <div class="reservationleft">
            <h1 class="calendarheader nomargin">Work With Us</h1>
            <div class="vertalignp">
               <div class="sectionmessage">
                  <?php perch_content('Jobs Message'); ?>
               </div>
                  <?php perch_content('Jobs Listing');?>
            </div>
         </div>
         <div class="reservationright">
            <img src='../images/staffphotos/team.jpg' class='img-responsive' alt="Brewery Employees"/>
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
