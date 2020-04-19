<?php
session_start();
$userid = 0;
if(isset($_SESSION['userid'])){
	$userid = $_SESSION['userid'];
}
include('connection.php');
if(isset($_POST['comment'])){
	$query = 'INSERT INTO comment (productid,comment,userid)  VALUES ("'.$_POST['productid'].'","'.$_POST['comment'].'","'.$userid.'")';
	
	mysqli_query($link,$query);
header('Location:details.php?id='.$_POST['productid']);
}