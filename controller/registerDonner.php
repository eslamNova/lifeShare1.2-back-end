<?php
function registerDonner($userNameD,$userNameA){
	require "../model/connect.php";
	$result=connectToDB();
	if($result!==false){
		$connect=$result;
		$res = mysqli_query($connect,"SELECT donorID from requests where userNameA = '$userNameA' ");
		$res = mysqli_fetch_array($res,MYSQLI_ASSOC);
		$id = $res['donorID'];
		if ($id === NULL){
			$qu = mysqli_query($connect,"SELECT id from donner where userNameD = '$userNameD' ");
			$qu = mysqli_fetch_array($qu,MYSQLI_ASSOC);
			$idV = $qu['id'];
			@mysqli_query($connect,"UPDATE requests set donorID = '$idV' where userNameA = '$userNameA' ");
		}
		else {
			$res = mysqli_query($connect,"SELECT id from donner where userNameD = '$userNameD' ");
			$res = mysqli_fetch_array($res,MYSQLI_ASSOC);
			$idV = $res['id'];
			if ($id !== $idV) {
				@mysqli_query($connect,"CREATE TABLE temp (userNameA varchar(20),hospitalName varchar(20),address varchar(20),bloodType varchar(2),phone int,donorID int) SELECT TOP 1 * FROM requests WHERE userNameA = '$userNameA' ");
				@mysqli_query($connect,"UPDATE temp set donorID = '$idV' WHERE userNameA = '$userNameA'");
				@mysqli_query($connect,"INSERT INTO requests SELECT * FROM temp WHERE userNameA = '$userNameA'");
				@mysqli_query($connect,"DROP TABLE temp");
			}
		}
	}else{
		$result=false;
	}
	if($result!==false)
		$result=true;
	return $result;
}
?>