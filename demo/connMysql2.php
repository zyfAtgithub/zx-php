<?php
	header("Content-type: text/html;charset=utf-8");
	$con = new mysqli('10.1.159.203','root','chenmeng','test');
	if(!$con)
	    die("connect error:".mysqli_connect_error());
	else
	    echo "success connect mysql\n";
	$sql = "select name from user";
	$rs = $con->query($sql);
	$c = array();
	while($r = $rs->fetch_row()){
	    array_push($c,$r[0]);
	}

	print_r($c);
	
	$c = array_unique($c);
	
	$i=0;
	
	$zy = array();

	foreach($c as $row){
	    array_push($zy,$row);
	}

	//输出结果
	print_r($zy);

	//关闭连接
	$con->close();
?>

