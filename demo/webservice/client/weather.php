<?php
	
	include("../../util/getwsinfo.php");
	include("../../util/prettyjson.php");
	ini_set('soap.wsdl_cache_enabled', "0"); //关闭wsdl缓存

	//ws地址
	$ws = "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx?wsdl";
		try {
		$soapClient = new soapClient($ws);
	}
	catch(Exception $e) {
		header("Location: http://localhost:81/demo/common/error.html"); 
		exit;	
	}

	// printWsMethodParam($soapClient);
	
	$paras = array(array('byProvinceName'=>'江苏'));
	$suppertCity = $soapClient->__soapCall("getSupportCity",$paras);
	echo "<pre>";
	$jsonCity = json_encode($suppertCity, JSON_UNESCAPED_UNICODE);
	echo prettyPrint($jsonCity);
	
	echo "<br>";
	echo "<pre>";
	$parasByCity = array(array('theCityName'=>'南京'));
	$dataByCity = $soapClient->__soapCall("getWeatherbyCityName",$parasByCity);
	$dataByCityJson = json_encode($dataByCity, JSON_UNESCAPED_UNICODE);
	echo prettyPrint($dataByCityJson);
?>