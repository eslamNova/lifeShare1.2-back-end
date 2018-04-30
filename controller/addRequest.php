<?php
function addRequest($userNameA,$hospitalName,$address,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;

$ph = mysqli_query($connect,"SELECT phone FROM acceptor where userNameA = '$userNameA'");
$ph = mysqli_fetch_array($ph,MYSQLI_ASSOC);
$phV = $ph['phone'];

$hosID = mysqli_query($connect,"SELECT id FROM hospitals where Name = '$hospitalName'");
$hosID = mysqli_fetch_array($hosID,MYSQLI_ASSOC);
$hosIDV = $hosID['id'];

@mysqli_query($connect,"INSERT into requests (userNameA,hospitalName,address,bloodType) values ('$userNameA','$hospitalName','$address','$bloodType')");
@mysqli_query($connect,"UPDATE requests set phone = '$phV' where userNameA = '$userNameA' ");
@mysqli_query($connect,"UPDATE acceptor set hospitalID  = '$hosIDV' where userNameA = '$userNameA' ");

}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}
?>
