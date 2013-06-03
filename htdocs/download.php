<?php
$GLOBALS["g"]["hero"]["bg"] = "hero_1.png";
$GLOBALS["g"]["hero"]["title"] = "Files";
$GLOBALS["g"]["hero"]["slogan"] = "Files and documentation.<br/><br/>";

// get a listing of all files in files/ ordered by date
$files = scandir("files/");

include("header.php"); ?>
			<div class="row">
				<?php foreach($files as $f) { 
					if($f == "." || $f == ".." ) continue;
				?>
				<div class="span6">
					<a href="stream?f=<?echo urlencode($f);?>"
						><img class="pull-left" src="assets/download.png" alt="" width="80" 
						style="margin-right: 2em;" /></a>
					<!--h4><?php echo preg_replace("/\.[A-Za-z0-9]+$/", "", basename($f)); ?></h4-->
					<h4><?php echo $f; ?></h4>
					<div>Last modified: 
					<?php echo date("Y-m-d", filemtime("files/$f")); ?></div>
				</div>
				<?php } ?>
			</div>
			<div style="clear: both;">
<?php include("footer.php"); ?>

