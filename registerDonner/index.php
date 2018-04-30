<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/registerDonner.php";

require"../controller/getAllDonners.php";

require"../controller/getAllRequests.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$userNameD=$_POST["userNameD"];
$userNameA=$_POST["userNameA"];

$result=registerDonner($userNameD,$userNameA);

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