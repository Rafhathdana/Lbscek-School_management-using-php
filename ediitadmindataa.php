﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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

if (isset($_SESSION[admin]))
{
$Query="SELECT * from adminlbs where id = '$_SESSION[admin]' and password = '$_SESSION[rafh]' ";
$dbresult=mysql_query($Query);
require("main1.php");
            
		if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
						 echo "<div class='str'>hello  :  "."$row[0]"."</div>";
				
echo "<div class='fixed'><div class='title' align='center'>EDIT ADMIN DATA</div>"	;
echo "<form method=post name=f1 action=''>";
				echo "<div class='content'><div class='menu'>ID Number:	&nbsp&nbsp" . "$row[1]  <br>";
				echo "<font color = red> University Register Number can't changed </font> " . "</div>";
echo "<div class='menu'>Photo:
		&nbsp&nbsp" . "<div class='galery'><img src='$row[9]'></div><br>";
				echo "<font color = red> Edit Photo </font> :  " . "<input type='file' name='fileToUpload' id='fileToUpload'>" . "</div>";
echo "<div class='menu'>FULL NAME:
		&nbsp&nbsp" . "$row[0]  <br>";
				echo "<font color = red> Edit Full Name </font> :  " . "<input name = editfn id = editfn type = text value = '$row[0]'>" . "</div>";
echo "<div class='menu'>Password:		&nbsp&nbsp" . "$row[2]  <br>";
				echo "<font color = red> Edit Password: </font> :  " . "<input name = editpad id = editpad type = password value = '$row[2]'>" . "</div>";
echo "<div class='menu'>MOBILE NUMBER:
		&nbsp&nbsp" . "$row[3]  <br>";
				echo "<font color = red> Edit Mobile Number </font> :  " . "<input name = editmn id = editmn type = text value = '$row[3]'>" . "</div>";

echo "<div class='menu'>Date Of Birth:
		&nbsp&nbsp" . "$row[4]  <br>";
				echo "<font color = red> Edit Date Of Birth </font> :  " . "<input name = editdate id = editdate type = text value = '$row[4]'>" . "</div>";
echo "<div class='menu'>Gender  : 	&nbsp&nbsp " . "$row[5] <br>";
				
				echo "<font color = red> Edit Gender </font> :  ";
				
				echo "<select name='editg' id = 'editg'><option  value='$row[5]'>$row[5]</option><option value='Male'>Male</option><option value='Female'>Famale</option></select>" . "</div>";

echo "<div class='menu'>Blood Group:
		&nbsp&nbsp" . "$row[6]  <br>";
				echo "<font color = red> Edit blood group </font> :  ";
				
				echo "<select name='editblood' id = 'editblood'><option  value='$row[6]'>$row[6]</option><option value='ab+'>AB +ve</option>
<option value='ab-'>AB -ve</option>
<option value='a+'>A +ve</option>
<option value='a-'>A -ve</option>
<option value='b+'>B +ve</option>
<option value='b-'>B -ve</option>
<option value='o+'>O +ve</option>
<option value='o-'>O -ve</option></select>" . "</div>";

echo "<div class='menu'>DEPARTMENT:
		&nbsp&nbsp" . "$row[7]  <br>";
				echo "<font color = red> Edit Department </font> :  ";
				
				echo "<select name='editbranch' id = 'editbranch'><option  value='$row[7]'>$row[7]</option><option value='CSE'>CSE</option><option value='IT'>IT</option><option value='EC'>EC</option><option value='CIVIL'>CIVIL</option><option value='MECHNICAL'>MECHNICAL</option><option value='EEE'>EEE</option></select>" . "</div>";
echo "<div class='menu'>Email:		&nbsp&nbsp" . "$row[8]  <br>";
				echo "<font color = red> Edit Email </font> :  " . "<input name = editem id = editem type = text value = '$row[8]'>" . "</div></div>";
               echo "<div class='title' align='center'><input name='Submit' type='Submit' value='Update' />   &nbsp&nbsp<input name='submit2' type='reset' value='Reset' />";
echo "</div></div></form></div>";

         
				}	
			
			}	
				
			
			else
			{
				
			}	
			require("footer.php");
     if(isset($_POST['Submit']))
 {
$fn=$_POST['editfn'];
$in=$_SESSION[admin];
$mn=$_POST['editmn'];
$date=$_POST['editdate'];
$g=$_POST['editg'];
$blood=$_POST['editblood'];
$department=$_POST['editdepartment'];
$em=$_POST['editem'];
$cap1=strtoupper($fn);
$cap2=strtoupper($rn);
$fileToUpload=$_POST['fileToUpload'];
	if ($fileToUpload=" ") {
   echo "hai";
$orgin="uploads/admin/$cap2/$cap2.jpg";
         $photo="$orgin";
       $Query = "UPDATE adminlbs SET name =  '$cap1', id =  '$cap2', password =  '$pad', mobile_number =  '$mn', dob =  '$date', gender =  '$g', blood_group =  '$blood', department =  '$department', email =  '$em', photo ='$photo' where id = '$cap2' and password = '$pad'";
$dbresulta=mysql_query($Query);
l			if($dbresulta)
         {  
echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
          //header("location:editadmin.php");
include("editadmin.php");
        }
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
          //header("location:editadmindata.php");
include("editadmindata.php");
}
}
else{
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
                $uploadOk = 1;
    } else {
        $yat="$fileToUpload File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    $nar="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $mer="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    $ner="Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $ser=" So, your file was not uploaded.";
       echo "<script type='text/javascript'>alert(\"$yat$nar$mer$ner$ser\")</script>";
//header("location:editadmindata.php");
include("editadmindata.php");
// if everything is ok, try to upload file
}
 else {
        $orgin="uploads/admin/$cap2/$cap2.jpg";
         $photo="$orgin";
       $Query = "UPDATE adminlbs SET name =  '$cap1', id =  '$cap2', password =  '$pad', mobile_number =  '$mn', dob =  '$date', gender =  '$g', blood_group =  '$blood', department =  '$department', email =  '$em', photo ='$photo' where id = '$cap2' and password = '$pad'";
$dbresulta=mysql_query($Query);
	if($dbresulta)
         {  
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
       { 
                  if (rename("$target_file","$orgin"));
      {    echo "<script type='text/javascript'>alert(\"Record Successfully Updated\")</script>";
          //header("location:editadmin.php");
include("editadmin.php");
        } }}
      else
         {
           echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Updated\")</script>";
          //header("location:editadmindata.php");
include("editadmindata.php");
}}
		
      }  }    
					exit();
				}			
				?>
﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main.php");
?><div class="fixed"><div class="title" align="center">ADMIN LOGIN</div>
<form id="form1" name="form1" method="post" action="editadmin.php">
           <div class='content'>  <div class='menu'>  ID Number:- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>password :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
           
<div class='menu'>                <input name="submit12" type="submit" class="menu" value="Login" " />  &nbsp&nbsp   <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div><div class='menu'>  New Student ? <a href="insertstudent.php">Register Now</a>  </div>
                  </div>
</form></div>

