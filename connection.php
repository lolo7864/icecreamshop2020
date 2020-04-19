<?php 

$link = mysqli_connect("localhost", "root", "", "icecream");
// $link = mysqli_connect("localhost:3308","root","","im_here_as");    
if(!$link){
 die("Cloud not connect to database");
}
?>
