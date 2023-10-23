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
$rna=$_SESSION['rnna'];
$rma=$_SESSION['rnma'];
$ma=$_SESSION['teacher'];
$m="SELECT uploaded_by from uploads where file_name = '$rna' and file = '$rma'";
if(isset($_POST['Submit']))
 {			
		if($ma==m)
{
If(unlink($rma))
{
$Query="DELETE from uploads where file_name = '$rna' and file = '$rma' and uploaded_by='$ma'";
$dbresult=mysqli_query($conn,$Query);

			if($dbresult)
{
echo "<script type='text/javascript'>alert(\"File Successfully Deleted $rna \")</script>";
//header("location:editteacher.php");
include("editadmin.php");
}
else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your File Not Deleted\")</script>";
//header("location:updateteacher.php");
include("tdeletefile2.php");
}
}else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your File Not Deleted\")</script>";
//header("location:updateteacher.php");
include("tdeletefile2.php");
}
}
else
{
echo "<script type='text/javascript'>alert(\"The File You Are Trying To Delete Is Not Upload By You ! So File Was Not Deleted\")</script>";
//header("location:updateteacher.php");
include("tdeletefile2.php");
}

 }

?>

