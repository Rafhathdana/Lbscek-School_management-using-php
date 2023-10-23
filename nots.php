﻿<?php			
			include("student.php");
$Querye="SELECT * from chats where fromm = '$id' and subject = '$n' and timemsg = '$ti' order by timemsg ";						$dbresultm=mysqli_query($conn,$Querye);		
	if(mysqli_num_rows($dbresultm) >0)
				{  
while($row=mysqli_fetch_row($dbresultm))
					{ 
echo "<div class='fixed'><div class='titlev' align='center'>$row[2]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font align=right><a href= '/sf.php?n=$row[2]&ti=$row[6]'   style='text-decoration:none'>DELETE</a></font></div><div class='content'>";
 echo "<div class='menu'>From:$row[1]&nbsp&nbsp&nbsp Send on :- $row[6]"."</div>";
    echo "<div class='menu'>&nbsp&nbsp<xmp>$row[3]</xmp>"."</div>";          
	
if($row[7] !== 0)
{  echo "<div class='menu'>Attached File:-&nbsp<a href='$row[7]'>Click Here To Download</a>"."</div>";   
}
echo "</div></div>";		
}
}			
			else
			{
				
			}	
			
			
		

?>

