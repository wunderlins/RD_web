<?php
$GLOBALS["g"]["hero"]["bg"] = "hero_1.png";
$GLOBALS["g"]["hero"]["title"] = "Files";
$GLOBALS["g"]["hero"]["slogan"] = "Files and documentation.<br/><br/>";

require_once 'MIME/Type.php';

// get a listing of all files in files/ ordered by date
$files = scandir("files/");

function list_by_type($file_exts, $files, $exclude=false) { ?>
			<div class="row">
				<?php foreach($files as $f) { 
					if($f == "." || $f == ".." ) continue;
					
					$ext_match = false;
					foreach($file_exts as $file_ext) {
						$ext_len = strlen($file_ext);
						if(strtolower(substr($f, $ext_len * -1)) == strtolower($file_ext))  {
							$ext_match = true;
							break;
						}
					}
					
					if (!$ext_match) continue;
				?>
				<div class="span6">
					<a href="lib/stream?f=<?echo urlencode($f);?>"
						><img class="pull-left file-ico" src="assets/download.png" alt="" width="48" 
						style="margin-right: 2em;" /></a>
					<!--h4><?php echo preg_replace("/\.[A-Za-z0-9]+$/", "", basename($f)); ?></h4-->
					<h4><?php echo $f; ?></h4>
					<div>Last modified: 
					<?php echo date("Y-m-d", filemtime("files/$f")); ?></div>
					<div>File type: <?php echo MIME_Type::autoDetect("files/$f"); ?></div>
				</div>
				<?php } ?>
			</div>
			<div class="section-end">
<?php
}

function display_current($display, $download, $description=NULL) { ?>
				<?php 
				if(file_exists($download)) { 
					$f = basename($download);
				}
				?>
				<div class="span6">
					<a href="<?echo $download;?>"
						><img class="pull-left file-ico" src="assets/download.png" alt="" width="48" 
						style="margin-right: 2em;" /></a>
					<h4><?php 
						echo $display; 
						if (isset($f)) {
							echo " <small>($f)</small>";
						}
					?></h4>
					<?php if(file_exists($download)) { ?>
					<div>Last modified: 
					<?php echo date("Y-m-d", filemtime($download)); ?></div>
					<div>File type: <?php echo MIME_Type::autoDetect($download); ?></div>
					<?php } ?>
					<?php if($description) { ?>
					<div><?php echo $description; ?></div>
					<?php } ?>
				</div>
<?php
}

include("lib/header.php"); 

?><style type="text/css">
.section-end {
	clear: both;
	padding-top: 0em;
}
.file-ico {
	padding: 16px 0px 48px 0px;
	vertical-align: top;
}
</style><?php


?>

			<div class="row">
				<div class="span12"><h3>Recommended Software</h3></div>
				<?php 
					display_current(
						"Mission Planner 1.2.52", 
						"http://ardupilot.com/downloads/?did=59", 
						"Official ArduPilot Mission Planner fow Windows. Windows 7 is supported out of the box. Windows XP support with .NET update. Experimental Windows 8 support."
					);
					display_current(
						"Microsoft .NET 3.5+", 
						"http://www.microsoft.com/net/download.aspx", 
						"Windows XP users need to install .NET 3.5 or later for Mission Planner."
					);
					display_current(
						"Andropilot", 
						"https://play.google.com/store/apps/details?id=com.geeksville.andropilot&hl=en", 
						"Android Mission Planner for ArduPiot Mega. Requires possibility to attach telemetry transmitter/receiver (usb-host mode, OTG)."
					);
					display_current(
						"Stable ArduPlane", 
						"files/ArduPlane-2.71.hex"
					);
				?>

			</div>
			<div class="section-end">

<div class="row"><div class="span12"><h3>Documentation</h3></div></div><?php
list_by_type(array(".pdf"), $files);
?><?php

?>
<div class="row"><div class="span12"><h3>Scripts</h3></div></div><?php
list_by_type(array(".bas", ".lua"), $files);
?><?php

?>
<div class="row"><div class="span12"><h3>Supported Firmware</h3></div><div class="span12">Note: ArduPlane 2.73 in testing. Featured new L1 navigation controler, unfinished.</div></div><?php
list_by_type(array(".hex"), $files);
?><?php

include("lib/footer.php"); ?>

