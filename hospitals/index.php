<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/addHospital.php";

require"../controller/getAllHospitals.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$name=$_POST["name"];

$address=$_POST["address"];

$phone=$_POST["phone"];

$cost=$_POST["cost"];

$result=addHospital($name,$address,$phone,$cost);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){

              $result=getAllHospitals();
if($result){
return response("200","ok",$result);
}else{
return response("400","Bad Request!",null);
}

}

?>
