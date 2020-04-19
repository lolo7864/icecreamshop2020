<?php
session_start();
include('connection.php');
$id = $_GET['id'];
$userid = 0;
if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}
$query = 'INSERT INTO favorites (productid,userid) VALUES ("'.$id.'","'.$userid.'")';
mysqli_query($link,$query);
echo json_encode("success");