<?php
function getAllHospitals(){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
$hospitals=@mysqli_query($connect,"select * from hospitals");
}
if($result!==false){
$result=array();
while($r = @mysqli_fetch_assoc($hospitals)) {
    $result[] = $r;
}
}
return $result;
}
?>
