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
	$n=$_GET['n'];	
$ti=$_GET['ti'];
if (isset($_SESSION['admin']))
{
require("main1.php");
				 echo "<div class='str'>hello  :  "."$_SESSION['admin']"."</div>";
$id=$_SESSION['admin'];
echo "<div style='clear: left;'>";
require("msglist.php");
require("viewmsg.php");
echo "</div>";
require("footer.php");
exit();
}
else{
if (isset($_SESSION['teacher']))
{
require("main2.php");
				 echo "<div class='str'>hello  :  "."$_SESSION['teacher']"."</div>";
$id=$_SESSION['teacher'];
require("msglist.php");
require("viewmsg.php");
require("footer.php");
exit();
}
else{
if (isset($_SESSION['login']))
{
require("main.php");
				 echo "<div class='str'>hello  :  "."$_SESSION['login']"."</div>";
$id=$_SESSION['login'];
$rd=$_SESSION['raf'];
require("msglist.php");
require("viewmsgr.php");
require("footer.php");
exit();
} 
else {
}
}
}
?>

    <?php
require("main.php");
?><div class="fixed"><div class="title" align="center">Please LOGIN</div>
           <div class='content'>  <div class='menu'>  <a href="studentlogin.php">STUDENT LOGIN</a>  </div>  <div class='menu'>  <a href="teacherlogin.php">TEACHER LOGIN</a>  </div>  <div class='menu'>  <a href="adminlogin.php">ADMIN LOGIN</a>  </div><div class='menu'>  New Student ? <a href="insertstudent.php">Register Now</a>  </div>
                  </div>
</div>
 <?php
require("footer.php");
?>


