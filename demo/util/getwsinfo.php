<?php

	function printWsMethodParam($soapClient) {
		//打印webservice服务端定义的方法和参数信息
		echo '<pre>';
	            echo '<h2>Types:</h2>';
	            $types = $soapClient->__getTypes();
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
	}

?>