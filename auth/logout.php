<?php
session_start();
session_unset();
session_destroy();

// Clear the cookie
setcookie("remember_token", "", time() - 3600, "/");

header("Location: login.php");
exit;
