<?php

session_start();
unset($_SESSION["oturum_sahibi"]);
 header("location:uygulama4.php");   


?>