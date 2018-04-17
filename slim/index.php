<?php  
require 'vendor/autoload.php';
$app = new \Slim\App();
$app->get("/units/{name}",function($request, $response, $args){
	$Poids = array(
	'Kilogramme' => 1,
	'Hectogramme' => 10,
	'Decagramme' => 100,
	'Gramme' => 1000,
	'Dicigramme' => 10000,
	'Centigramme' => 100000,
	'Pound'=>2.20462,
	'Milligramme' => 1000000,
	'Ton' => 0.001,
	'Ounce' =>35.27396);
	$Longeurs = array(
	"Kilometer"=>0.001,
	"Hectometre"=>0.01,
	"Decametre"=>0.1,
	"Metre"=>1,
	"Decimetre"=>10,	 
	"Centimetre"=>100,
	"Millimetre"=>1000,
	"Micrometre"=>1000000,
	"Nanometre"=>1000000000,
	"Inche"=>39.37008,
	"Feet"=>3.28084,
	"Yard"=>1.09313,
	"Mile"=>0.000621
);
	$unites=array("Poids"=>$Poids,"Longeurs"=>$Longeurs);
 	if (isset($unites[$args['name']])) {
 	return $response->withJson($unites[$args['name']])->withHeader('Access-Control-Allow-Origin', '*'); 	
 	}


});
$app->run();
?>