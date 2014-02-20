<?php
	include('sites.php');
	function dirsize($dir) {
		@$dh = opendir($dir);
		$size = 0;
		while ($file = @readdir($dh)) {
			if ($file != "." and $file != "..") {
				$path = $dir."/".$file;
				if (is_dir($path)) {
					$size += dirsize($path); // recursive in sub-folders
				}
				elseif (is_file($path)) {
					$size += filesize($path); // add file
				}
			}
		}
		@closedir($dh);
		return $size;
	}
?>
	
<?php
	foreach($sites as $site) {
        error_reporting(0);
		$size = floor((dirsize($site['folder'])/1024)/1024);
		$total += $size;
?>
<?php

	}
	echo $total;
?>

		
	