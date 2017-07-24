<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Up-to-date listing of the staple beers and limited releases currently being poured at our taproom.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog | Vice District Brewing</title>

    <link href="../css/cleancomplete.css" rel="stylesheet">
	 <link href="blog.css" rel="stylesheet">

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

		<div class="blog">
			<div class="bloglistsection">
            <h1>What's New</h1>
				<div class="blogblock">

					 <ul class="bloglist">
						 <?php
							 perch_blog_custom(array(
							   'count'      => 5,
							   'template'   => 'post_in_list.html',
							   'sort'       => 'postDateTime',
							   'sort-order' => 'DESC',
							 ));
						 ?>
				 	</ul>
               <div class="loadMore">
   				   <a href="javascript:void(0);">More Posts <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
               </div>

			 	</div>
			</div>

			<div class="blogsidebarsection loadfloat">
            <h1>&nbsp;</h1>
				<nav class="blogsidebar">
					<h2>Show:</h2>

				    <!--  By category listing -->
				    <?php perch_blog_categories(); ?>

				 </nav>
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
