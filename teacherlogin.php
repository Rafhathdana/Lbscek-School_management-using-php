﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
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
      cname    = username;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please enter username');
     cname.focus();
      return false;
   }
   }


</script>
<div class="fixed"><div class="title" align="center">TEACHER LOGIN</div>
<form id="form1" name="form1" method="post" action="editteacher.php">
           <div class='content'>  <div class='menu'>  ID NUMBER :- <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" /></div>
 <p>
              <div class='menu'>PASSWORD :-
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </div>
              </p>
            
<div class='menu'>                <input name="submit12" type="submit" class="menu" value="Login" onclick="verify();" />    <input name="Submit2" type="reset" class="menu" value="Reset" />
                </div></div>
                      </form></div>
  ﻿<?php
require("footer.php");
?>

