﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿
<head>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



</head>
<?php
		
		include("student.php");
	extract($_POST);

if (isset($_SESSION[teacher]))
{
require("main2.php");
echo "<div class='str'>hello  :  "."$_SESSION[teacher]"."</div>";
  $Query="SELECT * from uploads where (department LIKE '%$_SESSION[depart]%' and semester LIKE '%teacher%') or (department = 'all' and semester LIKE '%teacher%') order by uptime DESC";

			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{ 	echo "<div class='fixed'><div class='title' align='center'>UPLOADED FILES TO TEACHERS"."</div>";     
					while($row=mysql_fetch_row($dbresult))
					{
				       			
        echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'"."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD$row[0]</a>"."</div>";
        echo "<div class='menu'>DELETE FILE  :"."$row[0]"."	&nbsp&nbspClick Here To     <a href='/tdeletefile2.php?rn=$row[0]'>Delete</a> <br>To Delete File It Should Uploaded By You"."</div>";
           echo "</div>";
				}	
			}	
			
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>No Files Uploaded TO TEACHERS"."</div></div>";     
			}	
			 
$Querys="SELECT * from uploads where (department LIKE '%$_SESSION[depart]%' and semester ='all') or (department = 'all' and semester ='all') order by uptime DESC ";

			$dbresult=mysql_query($Querys);

			if(mysql_num_rows($dbresult) >0)
				{ 	echo "<div class='fixed'><div class='title' align='center'>UPLOADED FILES TO ALL"."</div>";     
					while($row=mysql_fetch_row($dbresult))
					{
				       			
        echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'"."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD$row[0]</a>"."</div>";
        echo "<div class='menu'>DELETE FILE  :"."$row[0]"."	&nbsp&nbspClick Here To     <a href='/tdeletefile2.php?rn=$row[0]'>Delete</a> <br>To Delete File It Should Uploaded By You"."</div>";
           echo "</div>";
				}	
			}	
			
			else
			{
				echo "<div class='fixed'><div class='title' align='center'>No Files Uploaded TO ALL"."</div></div>";     
			}	


		
            require("footer.php");
					exit();

				}			
				?>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main1.php");
?>
<div class="fixed"><div class="title" align="center">ADMIN LOGIN</div>
<form id="form1" name="form1" method="post" action="editadmin.php">
           <div class='content'>  <div class='menu'>  ID Number:- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>PASSWORD :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
             <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
           ?>
<div class='menu'>                <input name="submit12" type="submit" class="menu" value="Login" " />  &nbsp&nbsp   <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div><div class='menu'>  IF YOU ARE STUDENT PLEASE <a href="studentlogin.php">LOGIN HERE</a>  </div>
                  </div>
</form></div>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("footer.php");
?>
