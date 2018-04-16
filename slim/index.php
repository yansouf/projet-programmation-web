<?php  
require 'vendor/autoload.php';
$app = new \Slim\App();
$app->get("/units/{name}",function($request, $response, $args){
	$Poids = array(
	'Kilograms' => 1,
	 "Pounds"=>2.20462,
	 'milligrams' => 1000000,
	 'Centigrams' => 100000,
	 'Dicigrams' => 10000,
	 'Grams' => 1000,
	 'Decagrams' => 100,
	 'Hectograms' => 10,
	 'Tons' => 0.001,
	 'Ounces' =>35.27396);	
	$Longeurs = array(
	 "Meters"=>1,
	 "Nanometer"=>1000000000,
	 "Microns"=>1000000,
	 "Millimeters"=>1000,
	 "Centimeter"=>100,
	 "Kilometers"=>0.001,
	 "Inches"=>39.37008,
	 "Feet"=>3.28084,
	 "Yards"=>1.09313,
	 "Miles"=>0.000621
);
	$unites=array("Poids"=>$Poids,"Longeurs"=>$Longeurs);
 	if (isset($unites[$args['name']])) {
 	return $response->withJson($unites[$args['name']])->withHeader('Access-Control-Allow-Origin', '*'); 	
 	}


});
$app->run();
?>