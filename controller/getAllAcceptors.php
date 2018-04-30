<?php
function getAllAcceptors(){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
$acceptors=@mysqli_query($connect,"select * from acceptor");
}
if($result!==false){
$result=array();
while($r = @mysqli_fetch_assoc($acceptors)) {
    $result[] = $r;
}
}
return $result;
}
?>
