<?php
session_start();
setcookie("user", "Rakibul", time() - 36);
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/vendor_login.php"); // Redirecting To Home Page
}
?>