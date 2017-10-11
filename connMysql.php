<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	header("Content-type: text/html; charset=utf-8"); 

	$servername = "localhost:3306";
	$username = "root";
	$password = "123456";
	 
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=activiti1", $username, $password);
	    echo "连接成功"; 
	}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
?>

<?php
	$cc = mysqli_connect("localhost:3306", "root", "123456");

	if ($cc) {
		echo "成功！";
	}
?>
<script type="text/javascript">
	
	$("sa").height(333);
</script>
</body>
</html>