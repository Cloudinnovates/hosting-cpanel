<?php
    $limit = 70;
	$sites[] = array('domins'=>array('link4learn.com','www.link4learn.com'),'folder'=>'panoramahmh','limit'=>'50');
    $sites[] = array('domins'=>array('panoramahmh.com','www.panoramahmh.com'),'folder'=>'l','limit'=>'1024');
	$sites[] = array('domins'=>array('fictionteam.com','www.fictionteam.com'),'folder'=>'f','limit'=>'1024');
	foreach($sites as $site) {foreach($site['domins'] as $domin) {$domins[$domin] = $site['folder'];}}
?>