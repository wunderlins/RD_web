<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>ResearchDrones LLC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ResearchDrones LLC is specialized in producing small Unmanned Aerial Vehicles (UAV) for research, conservation and environmental applications. ResearchDrones LLC is based in Switzerland.">
    <meta name="author" content="ResearchDrones LLC">

    <!-- Le styles -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
		#myCarousel {	
			margin-left: auto;
	  	margin-right: auto; 
	  	width: 1024px;
  	}
    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: absolute; 
      z-index: 9;
      top: 100px;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 2px 2px rgba(0,0,0,.6);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 685px;
    }
    .carousel img {
/*      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%; 
*/      
      height: 685px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 700px;
      padding: 0 20px;
      margin-top: 380px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="lib/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="icon" href="assets/ico/favicon.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  <style type="text/css"></style><style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--a class="brand" href="./home_files/home.html">Project name</a-->
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <?php include("nav.inc.php"); ?>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/carousel/rd_logo.png" alt="ResearchDrones LLC Logo">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/carousel/uav.png" alt="ResearchDrones Maja UAV">
          <div class="container">
            <div class="carousel-caption">
              <h1>Maja UAV</h1>
              <p class="lead">Your eye in the sky.</p>
              <a class="btn btn-large btn-primary" href="uav">Learn more »</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/carousel/training.png" alt="Training">
          <div class="container">
            <div class="carousel-caption">
              <h1>Training</h1>
              <p class="lead">Boosting efficiency and effectiveness.</p>
              <a class="btn btn-large btn-primary" href="training">Learn more »</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="assets/carousel/post.png" alt="Training">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mapping</h1>
              <p class="lead">Mapping landscapes at high resolution and low cost.</p>
              <!--a class="btn btn-large btn-primary" href="training">Learn more »</a-->
            </div>
          </div>
        </div>
        
        <div class="item">
          <img src="assets/carousel/protect.png" alt="Training">
          <div class="container">
            <div class="carousel-caption">
              <h1>Protecting wildlife</h1>
              <p class="lead">Spotting and counting rare animals.</p>
              <!--a class="btn btn-large btn-primary" href="training">Learn more »</a-->
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
		
		<div class="container">

			<div class="row">
				<div class="span4">
					<h2>Maja UAV</h2>
					<p>A fully autonomous, small and affordable Unmanned Aerial Vehicle (UAV) for aerial mapping and surveys. The Maja UAV is controlled by a user-friendly Mission Planner software on a Windows or Android laptop. A real-time telemetry link displays the UAV location on a map on the laptop, as well as essential flight data (altitude, battery power). Control commands can also be sent to the UAV. The UAV has a large payload bay and can carry up to 0.5-1.0 kg of payload (depending on configuration).</p>
				</div>
				<div class="span4">
					<h2>Training</h2>
					<p>Operating a UAV in difficult environments requires training. ResearchDrones' solutions are in use around the globe. We can help you operate a drone in your environment and for your application.<br/><br/><br/><br/></p>
			 </div>
				<div class="span4">
					<h2>Shop</h2>
					<p>ResearchDrones' UAV solutions are available through our online shop.
					</p>
					<img src="assets/maja_1.jpg" alt="Maja UAV" width="165" class="img-polaroid img-rounded"/>
					&nbsp;&nbsp;
					<img src="assets/maja_0.jpg" alt="Maja UAV" width="165" class="img-polaroid img-rounded"/>
				</div>
			</div>
			<div class="row">
				<br /><br />
				<div class="span4">
					<p><a class="btn" href="uav">View details &raquo;</a></p>
				</div>
				<div class="span4">
					<p><a class="btn" href="training">View details &raquo;</a></p>
				</div>
				<div class="span4">
					<p><a class="btn" href="/shop/">View details &raquo;</a></p>
				</div>
			</div>

			<hr>
			<footer>
				<p>&copy; ResearchDrones LLC, 2013</p>
			</footer>
		</div>

		<?php include("footer.inc.php"); ?>
		    
    <script>
      !function ($) {
        $(function(){
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="lib/holder.js"></script>
  

</body></html>
