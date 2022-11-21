<?php
//fetching current currencies
$fromCurrencyValue = $_POST['fromCurrencyValue'];
$toCurrencyValue = $_POST['toCurrencyValue'];
$req_url = "https://api.exchangerate.host/convert?from=$fromCurrencyValue&to=$toCurrencyValue";
//fetching rate from api
$response_json = file_get_contents($req_url);
if(false !== $response_json) {
    try {
        $response = json_decode($response_json);
        if($response->success === true) {
            echo $response_json;
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}  


?>