<?php
function addHospital($name,$address,$phone,$cost){
require "../model/connect.php";
$result=connectToDB();
if($result!==false && !empty($name) && !empty(address) && !empty(phone) && !empty(cost)){
$connect=$result;
@mysqli_query($connect,"insert into hospitals (name,address,phone,cost) values ('$name','$address','$phone','$cost')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}

?>
