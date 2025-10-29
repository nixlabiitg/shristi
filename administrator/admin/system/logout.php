<?php
session_start();
//unset($_SESSION['email_id']);

session_destroy();
header('location: ../index');
exit();
?>