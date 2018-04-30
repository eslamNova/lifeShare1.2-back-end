<?php
function getAllDonners(){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
$donners=@mysqli_query($connect,"select * from donner");
}
if($result!==false){
$result=array();
while($r = @mysqli_fetch_assoc($donners)) {
    $result[] = $r;
}
}
return $result;
}
?>
