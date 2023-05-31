﻿﻿﻿﻿﻿﻿﻿﻿<?php
require("main.php");
?></body><head>
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

<body>

<SCRIPT LANGUAGE="JavaScript">

function verify() 
{

   var cname;
   with(window.document.form1)
   {
      cname    = blood;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please choose Blood Group');
     cname.focus();
      return false;
   }
   }


</script>
<div class="fixed"><div class="title" align="center">Search Blood</div>
<form action = "/searchblood1.php" method="post" name="form1" class="menu" id="form1">
                   
<div class='menu'>Blood Group :	&nbsp&nbsp<select name="blood">
<option >select Blood Group</option>
<option value="ab+">AB +ve</option>
<option value="ab-">AB -ve</option>
<option value="a+">A +ve</option>
<option value="a-">A -ve</option>
<option value="b+">B +ve</option>
<option value="b-">B -ve</option>
<option value="o+">O +ve</option>
<option value="o-">O -ve</option>
</select>
</div><div class='menu'>                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
                     </div></div>   </form></div>
  ﻿<?php
require("footer.php");
?>

