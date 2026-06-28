<?php
session_start();
session_destroy();
header('Location: ../Main_Pages/login.html');
exit();
?>
