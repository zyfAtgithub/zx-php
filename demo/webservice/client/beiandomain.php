<?php

	ini_set('soap.wsdl_cache_enabled', "0"); //关闭wsdl缓存

	$soap = new SoapClient('http://42.123.92.19:10019/beian/CDNWebService/queryService?wsdl');

	$enterpriseId = "9442eecaf806442b9ff6ef7aba09d1ce";
	$request = "22";
	$randVal = "9jhIo6f33I4iidu0e6oa";
	$pwdHash = "6e3902cb9485fd852ee3884a552bdb874f75352d4a9a5c98420284a2cfe66c41";
	$encryptAlgorithm = 22;
	$hashAlgorithm = 22;

	//打印webservice服务端定义的方法和参数信息
	echo '<pre>';
            echo '<h2>Types:</h2>';
            $types = $soap->__getTypes();
            foreach ($types as $type) {
                $type = preg_replace(
                        array('/(\w+) ([a-zA-Z0-9]+)/', '/\n /'),
                        array('<font color="green">${1}</font> <font color="blue">${2}</font>', "\n\t"),
                        $type
                );
                echo $type;
                echo "\n\n";
            }
	echo '</pre>';
	$paras     =   array(array('arg0'=>$enterpriseId,
						'arg1'=>$request,
						'arg2'=>$randVal,
						'arg3'=>$pwdHash,
						'arg4'=>$encryptAlgorithm,
						'arg5'=>$hashAlgorithm
						));
	$aryResult	=	$soap->__soapCall('query_accelerate_info',$paras);

	// var_dump($aryResult);

	//获取 返回的对象中的 return字段（string）
	// print_r($aryResult->return);
	echo '<pre>';
	$json = json_encode($aryResult, JSON_UNESCAPED_UNICODE);

	print_r($json);

	$xml = simplexml_load_string($aryResult->return);

	var_dump($xml);

	$jsonEncoded= json_encode($xml, JSON_UNESCAPED_UNICODE);

	echo "<br>";

	echo "json:<br>", $jsonEncoded;

	//获取json中的值
	$jsonDecoded = json_decode($jsonEncoded);
	echo "<br>code:", $jsonDecoded->code;

?>