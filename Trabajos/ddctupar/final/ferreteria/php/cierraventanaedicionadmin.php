<?php 
session_start();
unset($_SESSION['edit']);
unset($_SESSION['insert']);
header('Location: ../index.php');
?>