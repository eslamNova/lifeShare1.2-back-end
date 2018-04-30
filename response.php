<?php

function response($status,$status_message,$data){
         header('HTTP/1.1 '.$status);
$response["Status"]=$status;
$response["status_message"]=$status_message;
$response["data"]=$data;

$response_json=json_encode($response);

echo $response_json;
}


?>
