<?php
require '../setup/dbconnect.php';

$apiRoot = "/api/demo/";
$httpVerb = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
$call = false;

// set the response code to 200 ok by default
// see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#4xx_Client_errors
$responseCode = 200;
$data = null;

// extract api end point from request uri 
if (strstr($path, $apiRoot) != false){
    $call = substr($path, strlen($apiRoot)); 
    if (strstr($call, "?") != false){
        $call = strstr($call, "?", true);
    }
}

// check that request was for product endpoint
if ($call != 'product') {
    $responseCode = 400;
} else {
    switch($httpVerb){
        case 'GET':  // GET request for querying data    
            if (array_key_exists('no', $_GET)) {
                $sql = "SELECT * FROM products WHERE no=".$_GET['no'];
                $result = $mysqli->query($sql); 
                if (is_bool($result)){
                        $responseCode = 204;
                } else {
                        $products = array();
                        while($row = $result->fetch_assoc()){
                            array_push($products, $row);
                        }
                        $data = json_encode($products);
                }
            } else {
                $responseCode = 400;
            }
        break;
        case 'POST':    // POST request for creation
        break;
        case 'PUT':     // PUT request for modification
        break;
        case 'DELETE':  // DELETE request for modification
        break;
    }
}

// output our http response
http_response_code($responseCode);
echo $data;

?>