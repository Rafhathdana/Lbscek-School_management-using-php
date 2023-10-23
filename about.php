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
		
		extract($_POST);

if (isset($_SESSION['admin']))
{
require("main1.php");
echo "<div class='str'>hello  :  ".$_SESSION['admin']."</div>";
echo "<br><div class='fixed'><div class='title' align='center'>Student Management System</div><div class='content'><div class='str'> Abstract</div><div class='menu'>
Student Management System is website which is helpful for students as well as the school authorities. In the current system all the activities are done manually. Our Student Management System deals with the various activities related to the students. In the website we can register as a user and user has of two types, student and administrator. Administrator has the power to add new user and can edit and delete a user. A student can register as user and can add edit. The administrator can get detailed student information. All the users can get some details of student when They search for particular name and they can search based on blood group which will inform details of the student whom all have that particular blood."."</div></div></div>";



    require("footer.php");
					exit();

				}			
				
if (isset($_SESSION['login']))
{
require("main.php");
echo "<div class='str'>hello  :  ".$_SESSION['admin']."</div>";
echo "<br><div class='fixed'><div class='title' align='center'>Student Management System</div><div class='content'><div class='str'> Abstract</div><div class='menu'>
Student Management System is website which is helpful for students as well as the school authorities. In the current system all the activities are done manually. Our Student Management System deals with the various activities related to the students. In the website we can register as a user and user has of two types, student and administrator. Administrator has the power to add new user and can edit and delete a user. A student can register as user and can add edit. The administrator can get detailed student information. All the users can get some details of student when They search for particular name and they can search based on blood group which will inform details of the student whom all have that particular blood."."</div></div></div>";



    require("footer.php");
					exit();

				}			
				?>

<?php
require("main1.php");
echo "<br><div class='fixed'><div class='title' align='center'>Student Management System</div><div class='content'><div class='str'> Abstract</div><div class='menu'>
Student Management System is website which is helpful for students as well as the school authorities. In the current system all the activities are done manually. Our Student Management System deals with the various activities related to the students. In the website we can register as a user and user has of two types, student and administrator. Administrator has the power to add new user and can edit and delete a user. A student can register as user and can add edit. The administrator can get detailed student information. All the users can get some details of student when They search for particular name and they can search based on blood group which will inform details of the student whom all have that particular blood."."</div></div></div>";

?>
<div class="fixed"><div class="title" align="center">ADMIN LOGIN</div>
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
</form></div>

  <?php
require("footer.php");
?>

