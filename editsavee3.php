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
$fn=$_POST['editfn'];
$in=$_SESSION['admin'];
$mn=$_POST['editmn'];
$date=$_POST['editdate'];
$g=$_POST['editg'];
$blood=$_POST['editblood'];
$department=$_POST['editdepartment'];
$em=$_POST['editem'];
$cap1=strtoupper($fn);
$cap2=strtoupper($rn);
mkdir("uploads/admin/$cap2");
$target_dir = "uploads/admin/$cap2/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST['Submit']))
 {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
                $uploadOk = 1;
    } else {
        $yat="$fileToUpload File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
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
$dbresulta=mysqli_query($conn,$Query);

			if($dbresulta)
         {  
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
       { if (file_exists($photo)) {
If(unlink($photo)){
}}
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
      }  
?>
