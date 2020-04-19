<?php
session_start();
include('connection.php');
$id = $_GET['id'];
$qty = $_GET['qty'];
$query = "UPDATE cart set quantity='".$qty."' WHERE id=".$id;
mysqli_query($link,$query);
echo json_encode("success");

?>