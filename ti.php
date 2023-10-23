﻿<?php
		
		include("student.php");
	extract($_POST);
	$n=$_GET['n'];	
$ti=$_GET['ti'];
$id=$_GET['id'];
$rd=$_GET['rd'];
   $Querys="UPDATE chats SET status =  'completedelete' where (too = '$id' or too = '$rd') and subject = '$n' and timemsg = '$ti'";						$dbresultn=mysqli_query($conn,$Querys); 
$Queryl="DELETE from chats where status = 'completedelete' and stat = 'delete' and file='0'";
$dbresultl=mysqli_query($conn,$Queryl);
$Query="SELECT * from chats where status = 'completedelete' and stat = 'delete'";
$dbresult=mysqli_query($conn,$Query);
	if(mysqli_num_rows($dbresult) >0)
				{ 	
while($row=mysqli_fetch_row($dbresult))
					{
			If($row[7]!=0)
{
If(unlink($row[7]))
{
$Queryl="DELETE from chats where status = 'completedelete' and stat = 'delete' and file='$row[7]'";
$dbresultl=mysqli_query($conn,$Queryl);
     		}	}	
}
}

	include("msgview.php");
?>

