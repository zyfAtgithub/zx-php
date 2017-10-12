<?php   
    include("Service.php");  
    include("SoapDiscovery.class.php");   
    //! 第一个参数是类名，生成的wsdl文件就是以它来命名的；第二个参数是服务的名称，可以随便写  
    $disco = new SoapDiscovery('Service', 'soap');  
    $disco->getWSDL();  
?>  