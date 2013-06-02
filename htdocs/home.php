<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Carousel Template · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
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

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      /*min-width: 100%; */
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
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
        <div class="item">
          <img src="assets/photos/DSC03476.JPG" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="./home_files/home.html">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="assets/photos/DSC_0727.JPG" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="./home_files/home.html">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/photos/DSC_0815.JPG" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="./home_files/home.html">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFJklEQVR4Xu3Y2yulfxTH8eUUVw43pCTlEModLoSIPxsp5XTFCJEklBwTF3Kevt8yjf3bP/Ya0xr70/upaTJ7TetZn/Wa5/vsqbi6uno1LhIoMYEKwJSYFGU5AcAAwZUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBADjiotiwGDAlQBgXHFRDBgMuBIAjCsuigGDAVcCgHHFRTFgMOBKADCuuCgGDAZcCQDGFRfFgMGAKwHAuOKiGDAYcCUAGFdcFAMGA64EAOOKi2LAYMCVAGBccVEMGAy4EgCMKy6KAYMBVwKAccVFMWAw4EoAMK64KAYMBlwJAMYVF8WAwYArAcC44qIYMBhwJQAYV1wUAwYDrgQA44qLYsBgwJUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBMoazMnJiW1ubuaBp6en/zP4/v6+pV+/f/7y8mI7Ozt2cXFhr6+v1tzcbD09PVZZWflpcNH9Pr2hf1BQtmDSwu/u7vLyi4F5fn62xcVFe3h4yDDeQB0cHNje3p719/fnv7e1tZXBtLe3fxh/dL9/YKGklmUL5vDwMC95ZmamKJjj42O7vLy08/Pzd5+vrKzY7e2tjY+PZ0gLCwtWX19vQ0NDtrS0lP9sZGTE3sDV1dXlz46Ojv5qv+Hh4ZIW9N2KyhbMW5DFwKSlp+V3d3fb+vr6OzDz8/P29PRkU1NTGcfc3JxVVVXZ5OSknZ6e2sbGhg0MDNj19XVGMjg4aI2Njb/29jf7fTcMpdyPJJizs7N8VI2Ojtrs7Ow7MIULTz9XVFRkQOlKT6DHx0e7v7+31tbWX0fXR0C/0q+UJX2nGkkwq6ur1tTUlJ8whUCKPWGqq6ttYmIi7yUt/8ePHxlRAldbW/tuX8WeMF/p950wlHIvkmDelloYwNjYWD6ibm5u3r3DNDQ05PeUdKUjKb33pOOqs7PTOjo6PgXzlX6lLOk71UiC+T3gwidCelne3d21vr6+XLa9vW29vb3W1taWv2qvra1ZV1dXfulN36gSpPRS/NGR9Kf9vhOEUu+lbMH837/qwv+PKQSTnhzp/SYdPenYaWlpyUdXArK8vGw1NTWWvsGkuvQ+k35PP6ejrNj1p/1S73K8yhZMOYatcM+AUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMPwH8cN2mTmL0hgAAAABJRU5ErkJggg==">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="./home_files/home.html">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFJklEQVR4Xu3Y2yulfxTH8eUUVw43pCTlEModLoSIPxsp5XTFCJEklBwTF3Kevt8yjf3bP/Ya0xr70/upaTJ7TetZn/Wa5/vsqbi6uno1LhIoMYEKwJSYFGU5AcAAwZUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBADjiotiwGDAlQBgXHFRDBgMuBIAjCsuigGDAVcCgHHFRTFgMOBKADCuuCgGDAZcCQDGFRfFgMGAKwHAuOKiGDAYcCUAGFdcFAMGA64EAOOKi2LAYMCVAGBccVEMGAy4EgCMKy6KAYMBVwKAccVFMWAw4EoAMK64KAYMBlwJAMYVF8WAwYArAcC44qIYMBhwJQAYV1wUAwYDrgQA44qLYsBgwJUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBMoazMnJiW1ubuaBp6en/zP4/v6+pV+/f/7y8mI7Ozt2cXFhr6+v1tzcbD09PVZZWflpcNH9Pr2hf1BQtmDSwu/u7vLyi4F5fn62xcVFe3h4yDDeQB0cHNje3p719/fnv7e1tZXBtLe3fxh/dL9/YKGklmUL5vDwMC95ZmamKJjj42O7vLy08/Pzd5+vrKzY7e2tjY+PZ0gLCwtWX19vQ0NDtrS0lP9sZGTE3sDV1dXlz46Ojv5qv+Hh4ZIW9N2KyhbMW5DFwKSlp+V3d3fb+vr6OzDz8/P29PRkU1NTGcfc3JxVVVXZ5OSknZ6e2sbGhg0MDNj19XVGMjg4aI2Njb/29jf7fTcMpdyPJJizs7N8VI2Ojtrs7Ow7MIULTz9XVFRkQOlKT6DHx0e7v7+31tbWX0fXR0C/0q+UJX2nGkkwq6ur1tTUlJ8whUCKPWGqq6ttYmIi7yUt/8ePHxlRAldbW/tuX8WeMF/p950wlHIvkmDelloYwNjYWD6ibm5u3r3DNDQ05PeUdKUjKb33pOOqs7PTOjo6PgXzlX6lLOk71UiC+T3gwidCelne3d21vr6+XLa9vW29vb3W1taWv2qvra1ZV1dXfulN36gSpPRS/NGR9Kf9vhOEUu+lbMH837/qwv+PKQSTnhzp/SYdPenYaWlpyUdXArK8vGw1NTWWvsGkuvQ+k35PP6ejrNj1p/1S73K8yhZMOYatcM+AUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMPwH8cN2mTmL0hgAAAABJRU5ErkJggg==">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="./home_files/home.html">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFJklEQVR4Xu3Y2yulfxTH8eUUVw43pCTlEModLoSIPxsp5XTFCJEklBwTF3Kevt8yjf3bP/Ya0xr70/upaTJ7TetZn/Wa5/vsqbi6uno1LhIoMYEKwJSYFGU5AcAAwZUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBADjiotiwGDAlQBgXHFRDBgMuBIAjCsuigGDAVcCgHHFRTFgMOBKADCuuCgGDAZcCQDGFRfFgMGAKwHAuOKiGDAYcCUAGFdcFAMGA64EAOOKi2LAYMCVAGBccVEMGAy4EgCMKy6KAYMBVwKAccVFMWAw4EoAMK64KAYMBlwJAMYVF8WAwYArAcC44qIYMBhwJQAYV1wUAwYDrgQA44qLYsBgwJUAYFxxUQwYDLgSAIwrLooBgwFXAoBxxUUxYDDgSgAwrrgoBgwGXAkAxhUXxYDBgCsBwLjiohgwGHAlABhXXBQDBgOuBMoazMnJiW1ubuaBp6en/zP4/v6+pV+/f/7y8mI7Ozt2cXFhr6+v1tzcbD09PVZZWflpcNH9Pr2hf1BQtmDSwu/u7vLyi4F5fn62xcVFe3h4yDDeQB0cHNje3p719/fnv7e1tZXBtLe3fxh/dL9/YKGklmUL5vDwMC95ZmamKJjj42O7vLy08/Pzd5+vrKzY7e2tjY+PZ0gLCwtWX19vQ0NDtrS0lP9sZGTE3sDV1dXlz46Ojv5qv+Hh4ZIW9N2KyhbMW5DFwKSlp+V3d3fb+vr6OzDz8/P29PRkU1NTGcfc3JxVVVXZ5OSknZ6e2sbGhg0MDNj19XVGMjg4aI2Njb/29jf7fTcMpdyPJJizs7N8VI2Ojtrs7Ow7MIULTz9XVFRkQOlKT6DHx0e7v7+31tbWX0fXR0C/0q+UJX2nGkkwq6ur1tTUlJ8whUCKPWGqq6ttYmIi7yUt/8ePHxlRAldbW/tuX8WeMF/p950wlHIvkmDelloYwNjYWD6ibm5u3r3DNDQ05PeUdKUjKb33pOOqs7PTOjo6PgXzlX6lLOk71UiC+T3gwidCelne3d21vr6+XLa9vW29vb3W1taWv2qvra1ZV1dXfulN36gSpPRS/NGR9Kf9vhOEUu+lbMH837/qwv+PKQSTnhzp/SYdPenYaWlpyUdXArK8vGw1NTWWvsGkuvQ+k35PP6ejrNj1p/1S73K8yhZMOYatcM+AUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMgAkMW6EVYBS2GDgDYALDVmgFGIUtBs4AmMCwFVoBRmGLgTMAJjBshVaAUdhi4AyACQxboRVgFLYYOANgAsNWaAUYhS0GzgCYwLAVWgFGYYuBMwAmMGyFVoBR2GLgDIAJDFuhFWAUthg4A2ACw1ZoBRiFLQbOAJjAsBVaAUZhi4EzACYwbIVWgFHYYuAMPwH8cN2mTmL0hgAAAABJRU5ErkJggg==">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="./home_files/home.html">View details »</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


  
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="./home_files/home.html">Back to top</a></p>
        <p>© 2013 Company, Inc. · <a href="./home_files/home.html">Privacy</a> · <a href="./home_files/home.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster
    <script src="./home_files/jquery.js"></script>
    <script src="./home_files/bootstrap-transition.js"></script>
    <script src="./home_files/bootstrap-alert.js"></script>
    <script src="./home_files/bootstrap-modal.js"></script>
    <script src="./home_files/bootstrap-dropdown.js"></script>
    <script src="./home_files/bootstrap-scrollspy.js"></script>
    <script src="./home_files/bootstrap-tab.js"></script>
    <script src="./home_files/bootstrap-tooltip.js"></script>
    <script src="./home_files/bootstrap-popover.js"></script>
    <script src="./home_files/bootstrap-button.js"></script>
    <script src="./home_files/bootstrap-collapse.js"></script>
    <script src="./home_files/bootstrap-carousel.js"></script>
    <script src="./home_files/bootstrap-typeahead.js"></script>
     -->
    <script src="lib/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="./home_files/holder.js"></script>
  

</body></html>
