<?php
function getAllRequests(){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
$requests=@mysqli_query($connect,"select * from requests");
}
if($result!==false){
$result=array();
while($r = @mysqli_fetch_assoc($requests)) {
    $result[] = $r;
}
}
return $result;
}
?>
