﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
extract($_POST);

if (isset($_SESSION[admin]))
{
require("main1.php");
}
else{
if (isset($_SESSION[teacher]))
{
require("main2.php");
}
else{
require("main.php");
}
}
?></body><head>
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

<body>

<SCRIPT LANGUAGE="JavaScript">

function verify() 
{

   var cname;
   with(window.document.form1)
   {
      cname    = blood;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please choose Blood Group');
     cname.focus();
      return false;
   }
   }


</script>
<div class="fixed"><div class="title" align="center">Search Blood</div>
<form action = "/searchblood1.php" method="post" name="form1" class="menu" id="form1">
                   
<div class='menu'>Blood Group :	&nbsp&nbsp<select name="blood">
<option >select Blood Group</option>
<option value="ab+">AB +ve</option>
<option value="ab-">AB -ve</option>
<option value="a+">A +ve</option>
<option value="a-">A -ve</option>
<option value="b+">B +ve</option>
<option value="b-">B -ve</option>
<option value="o+">O +ve</option>
<option value="o-">O -ve</option>
</select>
</div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
                     </div></div>   </form></div>
  
<?php



			$blood=$_POST['blood'];
			
			if($blood =='')
			{
			echo 'No Result found please try again';
			return false;
			}
			
		
			
			
			//echo $blood;
			
			include("student.php");
			
			$Query="SELECT * from student  where blood_group ='$blood' order by district ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
					echo "<div class='fixed'><div class='title' align='center'>Search Result In Student"."</div>";   	while($row=mysql_fetch_row($dbresult))
					{
				       			
  
                echo "<div class='dana'>Name  :  "."$row[0]"."</div>";
	  		  echo "<div class='menu'>Date of Birth  :  "."$row[4]"."</div>";
	    		 echo "<div class='menu'>Gender  :  "."$row[5]"."</div>";
                 echo "<div class='menu'>Blood Group  :  "."$row[6]"."</div>";
	    		 echo "<div class='menu'>Email  :  "."$row[13]"."</div>";
                 echo "<div class='menu'>Mobile Number  :  "."$row[14]"."</div>";
	             echo "<div class='menu'>House Name  :  "."$row[23]"."</div>";
                 echo "<div class='menu'>Land Mark  :  "."$row[24]"."</div>";
	    		 echo "<div class='menu'>District  :  "."$row[25]"."</div>";
           echo "</div></div></div>";
				}	
			}	
			
			else
			{
				
			}	
			
			$Query="SELECT * from teacherlbs  where blood_group ='$blood' order by district ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
				echo "<div class='fixed'><div class='title' align='center'>Search Result In TEACHER"."</div>";     	while($row=mysql_fetch_row($dbresult))
					{
				       			
	
                echo "<div class='dana'>Name  :  "."$row[0]"."</div>";
	  		  echo "<div class='menu'>Date of Birth  :  "."$row[4]"."</div>";
	    		 echo "<div class='menu'>Gender  :  "."$row[5]"."</div>";
                 echo "<div class='menu'>Blood Group  :  "."$row[6]"."</div>";
	    		 echo "<div class='menu'>Email  :  "."$row[8]"."</div>";
                 echo "<div class='menu'>Mobile Number  :  "."$row[3]"."</div>";
	             echo "<div class='menu'>House Name  :  "."$row[11]"."</div>";
                 echo "<div class='menu'>Land Mark  :  "."$row[12]"."</div>";
	    		 echo "<div class='menu'>District  :  "."$row[13]"."</div>";
           echo "</div></div></div>";
				}	
			}	
			
			else
			{
				
			}	
			
		
		
?>
﻿<?php
require("footer.php");
?>

