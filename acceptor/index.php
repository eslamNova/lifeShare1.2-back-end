<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/addAcceptor.php";

require"../controller/getAllAcceptors.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$name=$_POST["name"];
$userNameA=$_POST["userNameA"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];

$result=addAcceptor($name,$userNameA,$email,$password,$phone);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){

              $result=getAllAcceptors();
if($result){
return response("200","ok",$result);
}else{
return response("400","Bad Request!",null);
}

}

?>
