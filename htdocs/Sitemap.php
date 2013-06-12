<?php

/** 
 * Google stiemap api example, more at:
 * http://support.google.com/webmasters/bin/answer.py?hl=en&answer=156184

<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>http://www.example.com/</loc>
		<lastmod>2005-01-01</lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>
</urlset>

 */

// loop over all files that end in ".php" but do not include ".inc|.class" and
// or not explicitly excluded by $exclude = array()
$exclude = array("PEAR.php", "PEAR5.php", "Sitemap.php", 
                 "download.php", "stream.php");

// xml header
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\r\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\r\n";

// glob files "*.php"
foreach (glob("*.php") as $f) {
	if (
		$f == "." || 
		$f == ".." || 
		in_array($f, $exclude) ||
		strpos(strtolower($f), ".inc")
	) 
		continue;
	
	// handle file
	$uri = "/" . str_replace(".php", "", $f);
	$ranking = 0.8;
	
	if ($f == "index.php") {
		$ranking = 1.0;
		$uri = "/";
	}
	
	if ($f == "uav.php") {
		$ranking = 0.95;
	}
	
	echo " 
	<url>
		<loc>http://researchdrones.com$uri</loc>
		<lastmod>".date(/*"Y-m-d"*/ "c", filemtime($f))."</lastmod>
		<changefreq>weekly</changefreq>
		<priority>$ranking</priority>
	</url>\r\n";
	
}

// xml footer
echo "\r\n" . '</urlset>' . "\r\n";
?>
