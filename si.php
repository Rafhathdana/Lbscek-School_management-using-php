﻿﻿<?php
		
		include("student.php");
	extract($_POST);
	$n=$_GET['n'];	
$ti=$_GET['ti'];
$id=$_GET['id'];
   $Querys="UPDATE chats SET stat =  'delete' where fromm = '$id' and subject = '$n' and timemsg = '$ti'";						$dbresultn=mysql_query($Querys); 
	include("msgview.php");
?>

