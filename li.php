﻿﻿﻿﻿<?php
		
		include("student.php");
	extract($_POST);
	$n=$_GET['n'];	
$ti=$_GET['ti'];
$id=$_GET['id'];
$rd=$_GET['rd'];

   $Querys="UPDATE chats SET status =  'online' where (too = '$id' or too = '$rd') and subject = '$n' and timemsg = '$ti'";						$dbresultn=mysql_query($Querys); 
	include("msgview.php");
?>

