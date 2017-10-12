<?php
header ( "Content-Type: text/html; charset=utf-8" );
/*
* 指定WebService路径并初始化一个WebService客户端
*/
$ws = "http://localhost:81/demo/webservice/server/Service.php?wsdl";//webservice服务的地址
$client = new SoapClient ($ws);
/*
* 获取SoapClient对象引用的服务所提供的所有方法
*/
echo ("SOAP服务器提供的开放函数:");
echo ('<pre>');
var_dump ( $client->__getFunctions () );//获取服务器上提供的方法
echo ('</pre>');
echo ("SOAP服务器提供的Type:");
echo ('<pre>');
var_dump ( $client->__getTypes () );//获取服务器上数据类型
echo ('</pre>');
echo $client->Add(23,23);
?>