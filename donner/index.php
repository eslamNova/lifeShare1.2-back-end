<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/addDonner.php";

require"../controller/getAllDonners.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$name=$_POST["name"];
$userNameD=$_POST["userNameD"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$bloodType=$_POST["bloodType"];



$result=addDonner($name,$userNameD,$email,$password,$phone,$bloodType);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){

              $result=getAllDonners();
if($result){
return response("200","ok",$result);
}else{
return response("400","Bad Request!",null);
}

}

?>
