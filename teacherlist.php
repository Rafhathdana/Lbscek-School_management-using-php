﻿<?php			
			include("student.php");
			$teacherSession = $_SESSION['teacher'];

			$Query = "SELECT * FROM chats WHERE too = '$teacherSession' AND status = 'offline' ORDER BY timemsg DESC";
							$dbresult=mysqli_query($conn,$Query);
$s=0;
			if(mysqli_num_rows($dbresult) >0)
				{   echo "<div class='fixed'><div class='title' align='center'>LATEST NOTICE OR MESSAGE TO YOU</div><div class='content'>";
while($row=mysqli_fetch_row($dbresult))
{
if($s!==5)
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
			$departSession = $_SESSION['depart'];

$Query = "SELECT * FROM uploads WHERE 
    (department LIKE '%$departSession%' AND semester LIKE '%teacher%') OR 
    (department = 'all' AND semester LIKE '%teacher%') OR 
    (department LIKE '%$departSession%' AND semester ='all') OR 
    (department = 'all' AND semester ='all') 
    ORDER BY uptime DESC LIMIT 6";

		echo "<div class='fixed'><div class='title' align='center'>Latest Uploaded Files</div><div class='content'>";
				$dbresult=mysqli_query($conn,$Query);
			if(mysqli_num_rows($dbresult) >0)
				{
					
while($row=mysqli_fetch_row($dbresult))
{
  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
             
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<div class="fixed"><div class="title" align="center">Select Categories</div><div class="content"><div class='menu'>∆<a href='/editteacherdata.php'>  Edit My Profile</a></div></div></div>
<div class="fixed"><div class="title" align="center">Uploads</div><div class="content"><div class='menu'>∆<a href='/tuploadfile.php'>  New Upload</a></div><div class='menu'>∆<a href='/tdeletefile.php'>  Delete Uploaded file </a></div><div class='menu'>∆<a href='/tviewfile.php'>  View All Uploaded file </a></div><div class='menu'>∆<a href='/tuploadmsg.php'> Send Individual Notice,File or message </a></div></div></div>
<?php			
			include("msglist.php");
?>
<div class="fixed"><div class="title" align="center">Student Area</div><div class="content"><div class='menu'>∆<a href='insertstudent.php'>  Add new student</a></div><div class='menu'>∆<a href='updateteacher.php'>  Update Student</a></div><div class='menu'>∆<a href='deleteteacher.php'>  Delete Student</a></div><div class='menu'>∆<a href='searchnamet.php'>  Search</a></div><div class='menu'>∆<a href='classwiset.php'>  Class Wise Student List</a></div></div></div>

