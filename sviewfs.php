	<?php			
			include("student.php");
			$departmentSession = $_SESSION['departmen'];
$semesterSession = $_SESSION['se'];

$Query = "SELECT * FROM uploads WHERE department LIKE '%$departmentSession%' AND semester LIKE '%$semesterSession%' ORDER BY uptime DESC";

				$dbresult=mysqli_query($conn,$Query);

			if(mysqli_num_rows($dbresult) >0)
				{
					echo "<div class='fixed'><div class='title' align='center'>Uploaded Files To Your Class " . $_SESSION['se'] . " " . $_SESSION['departmen'] . "</div><div class='content'>";

		while($row=mysqli_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
echo "</div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$semesterSession = $_SESSION['se'];

$Query = "SELECT * FROM uploads WHERE department = 'all' AND semester LIKE '%$semesterSession%' ORDER BY uptime DESC";


						$dbresult=mysqli_query($conn,$Query);


			if(mysqli_num_rows($dbresult) >0)
				{		
					$seSession = $_SESSION['se'];

echo "<div class='fixed'><div class='title' align='center'>Uploaded Files To YOUR YEAR " . $seSession . "</div><div class='content'>";

	while($row=mysqli_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                 echo "</div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>

<?php			
			include("student.php");
			$departmentSession = $_SESSION['departmen'];

$Query = "SELECT * FROM uploads WHERE department LIKE '%$departmentSession%' AND semester = 'all' ORDER BY uptime DESC";


						$dbresult=mysqli_query($conn,$Query);


			if(mysqli_num_rows($dbresult) >0)
				{
			echo "<div class='fixed'><div class='title' align='center'>Uploaded Files To YOUR DEPARTMENT".$_SESSION['departmen']."</div><div class='content'>";
	while($row=mysqli_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
          echo "</div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
<?php			
			include("student.php");
			$Query="SELECT * from uploads where department = 'all' and semester ='all' order by uptime DESC";
		
			$dbresult=mysqli_query($conn,$Query);

			if(mysqli_num_rows($dbresult) >0)
				{
				echo "<div class='fixed'><div class='title' align='center'>Uploaded Files To ALL</div><div class='content'>";
		while($row=mysqli_fetch_row($dbresult))
					{  echo "<div class='menu'>File Name  :  "."$row[0]"."	&nbsp&nbsp UPLOADED ON :'$row[6]'<br>UPLOADED '$row[5]':-'$row[4]' "."</div>";
          echo "<div class='menu'>"."&nbsp&nbsp<a href ='$row[3]'download>CLICK HERE TO DOWNLOAD  $row[0]</a>"."</div>";}
                echo "</div>";
			}	
			
			else
			{
				
			}	
			
			
		
		
?>
		
