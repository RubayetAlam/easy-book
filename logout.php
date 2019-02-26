<?php
session_start();
unset($_SESSION["flag"]);
session_destroy();
header("Location:login.php?msg=Logged Out");
?>