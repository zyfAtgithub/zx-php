<?php
	$xmlNode = simplexml_load_file('example.xml');
	$arrayData = xmlToArray($xmlNode);
	echo json_encode($arrayData);
?>