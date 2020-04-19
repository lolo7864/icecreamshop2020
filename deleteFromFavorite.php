<?php
session_start();
include('connection.php');
$id = $_GET['id'];
$query = 'DELETE FROM favorites WHERE id='.$id;
mysqli_query($link,$query);
echo json_encode("success");