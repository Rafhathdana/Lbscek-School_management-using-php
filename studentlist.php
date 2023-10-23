﻿<?php			
			include("student.php");
			$rafSession = $_SESSION['raf'];
			$loginSession = $_SESSION['login'];
			$Query = "SELECT * FROM chats WHERE (too = '$rafSession' OR too = '$loginSession') AND status = 'offline' ORDER BY timemsg DESC";
			$dbresult=mysqli_query($conn,$Query);
$s=0;
			if(mysqli_num_rows($dbresult) >0)
				{   echo "<div class='fixed'><div class='title' align='center'>LATEST NOTICE OR MESSAGE TO YOU</div><div class='content'>";
while($row=mysqli_fetch_row($dbresult))
{
if($s!==10)
               					{  echo "<div class='menu'><a href= '/notice.php?n=$row[2]&ti=$row[6]'>$row[2] &nbsp&nbsp FROM $row[1]</a>"."</div>";
                 $s++;
  				}	
  				}	echo "</div></div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
			
<?php			
			include("student.php");
            echo "<div class='fixed'><div class='title' align='center'>Uploaded Files</div><div class='content'>";

			$departmentSession = $_SESSION['departmen'];
$semesterSession = $_SESSION['se'];

$Query = "SELECT * FROM uploads WHERE 
    (department LIKE '%$departmentSession%' AND semester LIKE '%$semesterSession%') OR 
    (department = 'all' AND semester LIKE '%$semesterSession%') OR 
    (department LIKE '%$departmentSession%' AND semester ='all') OR 
    (department = 'all' AND semester ='all') 
    ORDER BY uptime DESC LIMIT 6";
		
$dbresult=mysqli_query($conn,$Query);
			if(mysqli_num_rows($dbresult) >0)
				{
while($row=mysqli_fetch_row($dbresult))
{
echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
echo "<div class='dana'>∆<a href='/sviewfiles.php'> View All Files</a></div>";
		}	
			
			else
			{
				
			}	
			
			
?>
		
</div></div><div class="fixed"><div class="title" align="center">Select Categories</div><div class="content"><div class='menu'>∆<a href='/editstudentdata.php'>  Edit My Profile</a></div><div class='menu'>∆<a href='/sviewfiles.php'> View All Files</a></div><div class='menu'>∆<a href='/suploadmsg.php'> Send Individual Notice,File or message </a></div></div></div>
<?php			
			include("msglist.php");
		?>



