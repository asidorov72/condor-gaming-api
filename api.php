<?php

header("Content-Type:application/json");

require_once __DIR__ . '/config/autoload.php';

use \Database\Db;
use \Model\Data;
use \Controller\Transporter\TransporterController;


$data = new Data();
$transporter = new TransporterController();


if(!empty($_GET['name'])) {
  
	$name  = $_GET['name'];
	$res = $data->getVisits($name);
	
	if(empty($res)) {
		$transporter->Response(200,"Product Not Found",NULL);
	} else {
		$transporter->Response(200,"Product Found",$res);
	}
	
} else {
	$transporter->Response(400,"Invalid Request",NULL);
}
