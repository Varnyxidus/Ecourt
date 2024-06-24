<?php
session_start();

if (!isset($_SESSION['Id'])) {
    header('Location: index.php');
}

$username = $_SESSION['name'];
?>