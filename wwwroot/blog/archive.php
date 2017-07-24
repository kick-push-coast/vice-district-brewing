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


  </head>
  <body>
     <?php include_once("../analyticstracking.php") ?>

     <?php include("../templates/agemodal.php") ?>

     <?php include("../templates/subpages/fixednav.php") ?>

     <?php include("../templates/subpages/mainnav.php") ?>

	<div class="main container loadfloat">

      <?php include("../templates/subpages/mobilenav.php") ?>

		<!--  change cols2-nav-right to cols2-nav-left if you want the sidebar on the left -->
		<div class="blog">

			<div class="bloglistsection">
			   <h1>What's New</h1>
				<div class="blogblock">
					<!-- this is an example blog homepage showing a simple call to perch_blog_recent_posts()

					Posts are displayed using the templates stored in perch/apps/perch_blog/templates/blog you can edit these as you wish, making sure that the
					paths used in these templates are correct for your installation.
					 -->
					 <ul class="bloglist">

				    <?php
				        // defaults for all modes
				        $posts_per_page = 5;
				        $template 		= 'post_in_list.html';
				        $sort_order		= 'DESC';
				        $sort_by		= 'postDateTime';

				        // Have we displayed any posts yet?
				        $posts_displayed = false;

				        /*
				        	perch_get() is used to get options from the URL.

							e.g. for the URL
								/blog/archive.php?cat=news

							perch_get('cat') would return 'news' because cat=news.


							The code below looks for different options in the URL, and then displays different types of listings based on it.
				        */


				        /* --------------------------- POSTS BY CATEGORY --------------------------- */
				        if (perch_get('cat')) {


				            perch_blog_custom(array(
									'category'   => perch_get('cat'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));

				            $posts_displayed = true;
				        }


				        /* --------------------------- POSTS BY TAG --------------------------- */
				        if (perch_get('tag')) {
				            echo '<h1>Archive of: '.perch_blog_tag(perch_get('tag'), true).'</h1>';

				            perch_blog_custom(array(
									'tag'   	 => perch_get('tag'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));

				            $posts_displayed = true;
				        }



				        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
				        if (perch_get('year')) {

							$year              = intval(perch_get('year'));
							$date_from         = $year.'-01-01 00:00:00';
							$date_to           = $year.'-12-31 23:59:59';
							$title_date_format = '%Y';


				            // Month and Year?
				            if (perch_get('month')) {
								$month             = intval(perch_get('month'));
								$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
								$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
								$title_date_format = '%B, %Y';
				            }

				            echo '<h1>Posts from '.strftime($title_date_format, strtotime($date_from)).'</h1>';

				            perch_blog_custom(array(
									'filter'     => 'postDateTime',
									'match'      => 'eqbetween',
									'value'      => $date_from.','.$date_to,
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));

				            $posts_displayed = true;
				        }



				        /* --------------------------- POSTS BY AUTHOR --------------------------- */
				        if (perch_get('author')) {

				        	echo '<h1>Posts by '.perch_blog_author(perch_get('author'), array(
				        											'template' => 'author_name.html',
				        											), true).'</h1>';


				        	perch_blog_custom(array(
									'author'   	 => perch_get('author'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));

				            $posts_displayed = true;
				        }


				      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

				      	if ($posts_displayed == false) {

				      		// No other options have been used; no posts have been displayed yet.
				      		// So display all posts.

				      		echo '<h1>Archive</h1>';

				      		perch_blog_custom(array(
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));

				      	}

				    	?>
				 	</ul>
               <div class="loadMore">
   				   <a href="javascript:void(0);">More Posts <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
               </div>

		   	 </div>
		    </div>

		    <div class="blogsidebarsection">
             <h1>&nbsp;</h1>
		   	 <nav class="blogsidebar">
		   		 <h2>Show:</h2>
		   		  <!-- The following functions are different ways to display archives. You can use any or all of these.

		   		  All of these functions can take a parameter of a template to overwrite the default template, for example:

		   		  perch_blog_categories('my_template.html');

		   		  -->
		   		  <!--  By category listing -->
                 <?php perch_blog_categories(); ?>
		   		  <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		   		  <!-- <?php perch_blog_date_archive_months(); ?> -->
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
