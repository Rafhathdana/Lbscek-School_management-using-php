﻿﻿<?php
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

if(isset($submit))
{		
session_destroy();
				$Query="SELECT * from student where register_number = '$username' and admission_number = '$password' ";
               $dbresult=mysqli_query($conn,$Query);						if(mysqli_num_rows($dbresult)<1)
	{
		$found="N";
        require("main.php");
	}
	else
	{ session_start();
		$_SESSION['login']=$username;
        $_SESSION['raf']=$password;
       
	}
}
if (isset($_SESSION['login']))
{$dbresult=mysqli_query($conn,$Query);
require("main.php");
while($row=mysqli_fetch_row($dbresult))
					{	
				 echo "<div class='str'>hello  :  "."$row[0]"."</div>";
        $_SESSION['departmen']=$row[9];
        $_SESSION['se']=$row[10];

	 		}
             require("studentlist.php");
require("footer.php");
					exit();

				}			
				?>

<div class="fixed"><div class="title" align="center">STUDENT LOGIN</div>
<form id="form1" name="form1" method="post" action="">
           <div class='content'>  <div class='menu'>  University Registration Number:- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>Admission Number :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
             <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
           ?>
<div class='menu'>                <input name="submit" type="submit" class="menu" value="Login" " />  &nbsp&nbsp   <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div><div class='menu'>  New Student ? <a href="insertstudent.php">Register Now</a>  </div>
                  </div>
</form></div>
