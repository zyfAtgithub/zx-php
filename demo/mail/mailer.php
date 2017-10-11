<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php邮件发送</title>
</head>
<body>
	<?php  
	   ini_set("sendmail_from", "15295778261@163.com");  
	   $to = "1534708324@qq.com";//change receiver address  
	   $subject = "This is subject";  
	   $message = "This is simple text message.";  
	   $header = "From:15295778261@163.com \r\n";  

	   $result = mail ($to,$subject,$message,$header);  

	   if( $result == true ){  
	      echo "Message sent successfully...";  
	   }else{  
	      echo "Sorry, unable to send mail...";  
	   }  
	?>
</body>
</html>