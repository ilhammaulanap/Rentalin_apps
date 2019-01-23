<?php
session_start();
unset($_SESSION['username']);
session_destroy();
echo "<script>(location.href='login.html')</script>";

?>