﻿<?php
session_start();
?>
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

if(isset($submit12))
{		
session_destroy();
				$Query="SELECT * from teacherlbs where id = '$username' and password = '$password' ";
               $dbresult=mysqli_query($conn,$Query);						if(mysqli_num_rows($dbresult)<1)
	{
		$found="N";
       
	}
	else
	{  session_start();
		$_SESSION['teacher']=$username;
        $_SESSION['rafha']=$password;
       
	}
}
if (isset($_SESSION['teacher']))
{
require("main2.php");
$teacherId = $_SESSION['teacher'];
$rafhaPassword = $_SESSION['rafha'];

$Query = "SELECT * FROM teacherlbs WHERE id = '$teacherId' AND password = '$rafhaPassword'";
$dbresult=mysqli_query($conn,$Query);
while($row=mysqli_fetch_row($dbresult))
					{	
				 echo "<div class='str'><div class='clear'>hello  :  $row[0] <div class='gallery'><img src='$row[9]'></div></div></div>";	
 $_SESSION['depart']=$row[7];
}
             require("teacherlist.php");
require("footer.php");
					exit();

				}			
				?>

<?php
require("main.php");
?><div class="fixed"><div class="title" align="center">TEACHER LOGIN</div>
<form id="form1" name="form1" method="post" action="">
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
</form></div><?php
require("footer.php");
?>
