<?php 
require '../../config.php'; 

$vhosts = loadClass('Httpd')->getVirtualHosts();
echo "<pre>";
$data = array();

$data['vhosts'] = $vhosts;
$data['php_version'] = loadClass('Php')->getVersion();

echo json_encode($data,JSON_PRETTY_PRINT);



