<?php

setcookie("uid", 0, time() + (86400 * 30), "/");
header("location: Dashboard.php");

?>