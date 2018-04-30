<?php
function connectToDB(){
$result=true;
$host="localhost";
$user="root";
$password="";
$database="lifeshare1.2";

$connect= @mysqli_connect($host,$user,$password,$database);

if($result!=false)
return $connect;
return false;
}
?>
