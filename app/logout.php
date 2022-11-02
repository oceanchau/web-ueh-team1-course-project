<?php
setcookie( "PHPSESSID", "", time()-3600, '/');
header("Location: http://localhost:5500/");
die();
?>