<?php
function addAcceptor($name,$userNameA,$email,$password,$phone){
require "../model/connect.php";
$result=connectToDB();
if($result!==false ){
$connect=$result;
@mysqli_query($connect,"insert into acceptor (name,userNameA,email,password,phone) values ('$name','$userNameA','$email','$password','$phone')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
