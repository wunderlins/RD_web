<?php

$page = basename($_SERVER['SCRIPT_FILENAME'], ".php");

if (!isset($GLOBALS["g"]["hero"]["text_bg"])) {
	$GLOBALS["g"]["hero"]["text_bg"] = "#EEE";
	$GLOBALS["g"]["hero"]["text_fg"] = "#333";
}
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $GLOBALS["g"]["hero"]["title"]; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $GLOBALS["g"]["hero"]["slogan"]; ?>">
		<meta name="author" content="ResearchDrones LLC">

		<!-- Le styles -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--link href="lib/bootstrap/css/cerulean.min.css" rel="stylesheet"-->
		<link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			
			td {vertical-align: middle ! important;}
			
		.hero-unit {
			background-image: url(assets/<?php echo $GLOBALS["g"]["hero"]["bg"]; ?>);
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
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="./" class="brand" style="padding: 7px 5px 5px 25px; color:white;"
					><img style="vertical-align: middle !important; margin-top: 0px; border: 0; padding-top: 0px;" src="assets/logo_small.png" alt="" /> <span style="font-size: 14px; font-weight: bold;">ResearchDrones<span></a>
					<div class="nav-collapse collapse">
					<?php include("nav.inc.php"); ?>
						<!--form class="navbar-form pull-right">
							<input class="span2" type="text" placeholder="Email">
							<input class="span2" type="password" placeholder="Password">
							<button type="submit" class="btn">Sign in</button>
						</form-->
					</div><!--/.nav-collapse -->

				</div>
			</div>
		</div>

		<div class="container">

			<!-- Main hero unit -->
			<div class="hero-unit">
				<h1 style="color: <?php echo $GLOBALS["g"]["hero"]["text_fg"]; ?>; text-shadow: 1px 1px 1px <?php echo $GLOBALS["g"]["hero"]["text_bg"]; ?>"><?php echo $GLOBALS["g"]["hero"]["title"]; ?></h1>
				<p style="color: <?php echo $GLOBALS["g"]["hero"]["text_fg"]; ?>; text-shadow: 1px 1px 1px <?php echo $GLOBALS["g"]["hero"]["text_bg"]; ?>"><?php echo $GLOBALS["g"]["hero"]["slogan"]; ?></p>
				<?php if (isset($GLOBALS["g"]["hero"]["link"])) { ?>
				<p><a href="<?php echo $GLOBALS["g"]["hero"]["link"]; ?>" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				<?php } ?>
			</div>

