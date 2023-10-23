﻿<?php
		include("student.php");
	extract($_POST);
	$Query="SELECT * from chats where too='$id' and status='delete' order by timemsg DESC";
			$dbresult=mysqli_query($conn,$Query);

			if(mysqli_num_rows($dbresult) >0)
				{ 	echo "<div class='fixed'><div class='title' align='center'>Trash Box"."</div>";     
					while($row=mysqli_fetch_row($dbresult))
					{
			If($row[5]==delete)
{
        echo " <a href= '/notice.php?n=$row[2]&ti=$row[6]' style='text-decoration:none'><div class='unreadon'>$row[1]"."($row[4])"." &nbsp&nbsp&nbsp&nbsp $row[2]</a><br><br>&nbsp&nbsp <a href= '/lf.php?n=$row[2]&ti=$row[6]'   style='text-decoration:none'>UNDO TO INBOX</a>"." &nbsp&nbsp&nbsp&nbsp&nbsp <a href= '/tf.php?n=$row[2]&ti=$row[6]'   style='text-decoration:none'>DELETE PERMANENT</a>"." &nbsp&nbsp&nbsp SENT ON :'$row[6]'"."</div>";
			}	
		else
{
}
	}
}				
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>No message founded"."</div></div>";     
			}

				
				?>
