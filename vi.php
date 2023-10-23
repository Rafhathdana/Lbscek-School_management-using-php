﻿<?php
		
		include("student.php");
	extract($_POST);
	$n=$_GET['n'];	
$ti=$_GET['ti'];
$id=$_GET['id'];
$rd=$_GET['rd'];
   $Querys="UPDATE chats SET status =  'delete' where (too = '$id' or too = '$rd') and subject = '$n' and timemsg = '$ti'";						$dbresultn=mysqli_query($conn,$Querys); 
	include("msgview.php");
?>

