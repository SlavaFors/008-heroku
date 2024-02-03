<?php
session_start();
if ($_POST['user']) {
$_SESSION['user'] = $_POST['user'];
}
header('Location: index.php');