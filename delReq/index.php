<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/delReq.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$userNameA=$_POST["userNameA"];
$hospitalName=$_POST["hospitalName"];
$address=$_POST["address"];
$bloodType=$_POST["bloodType"];

$result=delReq($userNameA,$hospitalName,$address,$bloodType);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}

?>
