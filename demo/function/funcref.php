<?php  
	/**
		传递给函数的值默认情况下不会修改实际值(通过值调用)。 但我们可以通过传递值作为参考(引用)。

		默认情况下，传递给函数的值是通过值调用。 要传递值作为参考(引用)，您需要在参数名称前使用＆符号(&)。

		下面来看看一个在PHP中通过引用调用的简单示例。
	*/
	function adder(&$str2)  
	{  
	    $str2 .= 'Call By Reference';  //等同 $str2 =  $str2 + 'Call By Reference';
	}  
	$str = 'Hello ';  
	adder($str);  
	echo $str;  
?>