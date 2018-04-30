<?php
function delReq($userNameA,$hospitalName,$address,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
@mysqli_query($connect,"DELETE FROM `requests` WHERE userNameA='$userNameA'");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
