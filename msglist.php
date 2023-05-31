﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<div class="fixed" ><div class="title" align="center">Whitefeet</div>
<div class="content">
<?php
if (isset($_SESSION[login]))
{echo"<div class='menu'>∆<a href='suploadmsg.php'>  COMPOSE </a></div>";
}
if (isset($_SESSION[teacher]))
{echo"<div class='menu'>∆<a href='tuploadmsg.php'>  COMPOSE </a></div>";
}
if (isset($_SESSION[admin]))
{echo"<div class='menu'>∆<a href='uploadmsg.php'>  COMPOSE </a></div>";
}
?>
<div class='menu'>∆<a href='msgview.php'>  INBOX </a></div><div class='menu'>∆<a href='sentedmsg.php'>  SENT </a></div><div class='menu'>∆<a href='trashmsg.php'>  TRASH </a></div></div></div>
