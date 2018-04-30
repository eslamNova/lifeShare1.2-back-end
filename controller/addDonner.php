<?php
function addDonner($name,$userNameD,$email,$password,$phone,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
@mysqli_query($connect,"insert into donner (name,userNameD,email,password,phone,bloodType) values ('$name','$userNameD','$email','$password','$phone','$bloodType')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
