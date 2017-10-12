<?php
	
	include("../../util/getwsinfo.php");
	include("../../util/prettyjson.php");
	//ws地址
	$ws = "http://www.webxml.com.cn/webservices/qqOnlineWebService.asmx?wsdl";
	//输入QQ号码（String）检测QQ在线状态。返回数据（String）Y = 在线；N = 离线 ；E = QQ号码错误....
	
	try {
		$client = new SoapClient($ws);
	}
	catch(Exception $e) {
		header("Location: http://localhost:81/demo/common/error/error.php?errMsg=网络异常！"); 
		exit;	
	}
	// printWsMethodParam($client);
	echo "客户端提交数据的方式：", $_SERVER['REQUEST_METHOD'],"<br>";
	$qqCode = isset($_POST["qq"])?$_POST["qq"]:"1534708324";
	echo "需要查询的QQ号是：", $qqCode, "<br>";
	$paras = array(array('qqCode'=>$qqCode));
	$res = $client->__soapCall('qqCheckOnline',$paras);

	// var_dump($res);

	echo $qqCode, "是否在线：", $res->qqCheckOnlineResult;
?>