<?php
session_start();

$arr1 = $_SESSION['items_id'];
unset($arr1[$_GET['index']]);
$_SESSION['items_id'] = array_values($arr1);
echo count($_SESSION['items_id']);
?>