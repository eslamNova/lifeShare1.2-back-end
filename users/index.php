<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/addUser.php";

require"../controller/getAllUsers.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$firstName=$_POST["firstName"];

$userName=$_POST["userName"];

$password=$_POST["password"];

$email=$_POST["email"];

$phone=$_POST["phone"];

$bloodType=$_POST["bloodType"];

$result=addUser($firstName,$userName,$password,$email,$phone,$bloodType);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){

              $result=getAllUsers();
if($result){
return response("200","ok",$result);
}else{
return response("400","Bad Request!",null);
}

}

?>
