﻿﻿﻿﻿﻿﻿﻿﻿<?php
		include("student.php");
	extract($_POST);
	$Query="SELECT * from chats where fromm='$id' order by timemsg DESC";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{ 	echo "<div class='fixed'><div class='title' align='center'>SENTED"."</div>";     
					while($row=mysql_fetch_row($dbresult))
					{
			If($row[8]==sented)
{
        echo " <a href= '/notices.php?n=$row[2]&ti=$row[6]' style='text-decoration:none'><div class='unreadon'>$row[1]"."($row[4])"." &nbsp&nbsp&nbsp&nbsp $row[2]</a><br><br>&nbsp&nbsp <a href= '/sf.php?n=$row[2]&ti=$row[6]'   style='text-decoration:none'>DELETE</a>"." &nbsp&nbsp&nbsp SENT ON :'$row[6]'"."</div>";
			}	
		else
{
}
      If($row[8]==forwarded)
{
   echo " <a href= '/notices.php?n=$row[2]&ti=$row[6]' style='text-decoration:none'><div class='readedon'>$row[1]"."($row[4])"." &nbsp&nbsp&nbsp&nbsp $row[2]</a>&nbsp&nbsp&nbsp(forwarded)<br><br>&nbsp&nbsp <a href= '/sf.php?n=$row[2]&ti=$row[6]'  style='text-decoration:none'>DELETE</a>"." &nbsp&nbsp&nbsp SENT ON :'$row[6]'"."</div>";}
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
