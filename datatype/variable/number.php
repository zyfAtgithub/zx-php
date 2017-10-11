<?php 
	echo "整型：<br>";
	$x = 5985;
	var_dump($x);
	echo "<br>"; 
	$x = -345; // 负数 
	var_dump($x);
	echo "<br>"; 
	$x = 0x8C; // 十六进制数
	var_dump($x);
	echo "<br>";
	$x = 047; // 八进制数
	var_dump($x);

	echo "<br><br>浮点型：<br>";
	$x = 10.365;
	var_dump($x);
	echo "<br>"; 
	$x = 2.4e3;
	var_dump($x);
	echo "<br>"; 
	$x = 8E-5;
	var_dump($x);

	echo "<br><br>布尔型：<br>";
	echo "\$a = true;<br>\$b = false;"
?>