<?php

	ini_set('soap.wsdl_cache_enabled', "0"); //关闭wsdl缓存

	$soap = new SoapClient('http://localhost:81/demo/webservice/server/Service.php?wsdl');
	echo $soap->Add(28, 2);
	echo $soap->__soapCall('Add',array(28,2))//或这样调用

 ?>