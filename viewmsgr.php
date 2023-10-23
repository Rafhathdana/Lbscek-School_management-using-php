﻿<?php
		include("student.php");
	extract($_POST);
	$Query="SELECT * from chats where too='$id' or too='$rd' order by timemsg DESC";
			$dbresult=mysqli_query($conn,$Query);

			if(mysqli_num_rows($dbresult) >0)
				{ 	echo "<div class='fixed'><div class='title' align='center'>INBOX"."</div>";     
					while($row=mysqli_fetch_row($dbresult))
					{
			If($row[5]==offline)
{
        echo " <a href= '/notice.php?n=$row[2]&ti=$row[6]' style='text-decoration:none'><div class='unread'>$row[1]"."($row[4])"." &nbsp&nbsp&nbsp&nbsp $row[2]</a><br><br>&nbsp&nbsp <a href= '/vf.php?n=$row[2]&ti=$row[6]'   style='text-decoration:none'>DELETE</a>"." &nbsp&nbsp&nbsp SENT ON :'$row[6]'"."</div>";
			}	
		else
{
}
      If($row[5]==online)
{
   echo " <a href= '/notice.php?n=$row[2]&ti=$row[6]' style='text-decoration:none'><div class='readed'>$row[1]"."($row[4])"." &nbsp&nbsp&nbsp&nbsp $row[2]</a><br><br>&nbsp&nbsp <a href= '/vf.php?n=$row[2]&ti=$row[6]'  style='text-decoration:none'>DELETE</a>"." &nbsp&nbsp&nbsp SENT ON :'$row[6]'"."</div>";}
else
{
}


	}
}				
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>No message received"."</div></div>";     
			}

				
				?>
