﻿﻿<?php
session_start();

include("student.php");
extract($_POST);
$n = $_GET['n'];
$ti = $_GET['ti'];

if (isset($_SESSION['admin'])) {
    $id = $_SESSION['admin'];
} else {
    if (isset($_SESSION['teacher'])) {
        $id = $_SESSION['teacher'];
    } else {
        if (isset($_SESSION['login'])) {
            $id = $_SESSION['login'];
            $rd = $_SESSION['raf'];
        } else {
            // Handle the case where no session variable is set
        }
    }
}

$m = "/vi.php?n=$n&ti=$ti&id=$id&rd=$rd";
echo "$m";
?>

<p id="demo"></p>
<script>
var y = "<?php echo $m; ?>";
var myObject = {
  fullName: function() {
    if (confirm("conformation to delete") ) {
    location.replace(y)
  } else {
location.replace("/msgview.php")
  }
  }
}
x = myObject.fullName();
</script>
