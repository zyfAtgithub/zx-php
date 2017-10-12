<!DOCTYpE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>出错了！！</title>
	<style type="text/css">
		input {
			font-size: 12px
		}
		td {
			font-size: 12px
		}
		.p2 {
			font-size: 12px
		}
		.p6 {
			font-size: 12px;
			color: #1b6ad8
		}
		a {
			color: #1b6ad8;
			text-decoration: none
		}
		a:hover {
			color: red
		}
	</style>
</head>
<body oncontextmenu="return false" onselectstart="return false">
	<p align=center>　</p>
	<p align=center>　</p>
	<table cellSpacing=0 cellpadding=0 width=540 align=center border=0>
	  <tbody>
	    <tr>
	      <td vAlign=top height=270><div align=center><br>
	          <img height=211 src="error.gif" width=329><br><br>
	          <table cellSpacing=0 cellpadding=0 width="80%" border=0>
	            <tbody>
	              <tr>
	                <td>
	                	<font class=p2>&nbsp;&nbsp;&nbsp; 
		                	<font color=#ff0000>
		                		<img height=13 src="emessage.gif" width=12>&nbsp;无法访问本页的原因是：
		                	</font>
	                	</font>
	                </td>
	              </tr>
	              <tr>
	                <td height=8></td>
	              <tr>
	                <td>
                		<p>
            				<font color=#000000><br>
	                    	<?php
		                    	
		                    	$errMsg = isset($_GET['errMsg'])?$_GET['errMsg']:"未知！";
		                    	echo $errMsg;

	                    	?>
	                		</font>
	                	</p>
	               	</td>
	              </tr>
	            </tbody>
	          </table>
	        </div></td>
	    </tr>
	    <tr>
	      <td height=5></td>
	    <tr>
	      	<td align=middle>
	      		<center>
		          <table cellSpacing=0 cellpadding=0 width=480 border=0>
		            <tbody>
		              <tr>
		                <td width=6><IMG height=26 src="left.gif" width=7></td>
		                <td background=bg.gif>
		                	<div align=center>
		                		<font class=p6>
		                			<a  href="http://localhost:81/">返回首页</a>　 　|　　 
		                			<a href="javascript:window.opener=null;window.open('','_self');window.close();">关闭本页</a>
		                		</font>
		                	</div>
		               	</td>
		                <td width=7>
	                		<img src="right.gif">
	                	</td>
		              </tr>
		            </tbody>
		          </table>
	        	</center>
	   		</td>
	   	</tr>
	  </tbody>
	</table>
	<p align=center>　</p>
	<p align=center>　</p>
</body>
</html>