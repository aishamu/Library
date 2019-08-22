<?php 

$db_conn = mysqli_connect('localhost','root',"",'kg');

if(!$db_conn){
die("connection failed". mysqli_connect_error());    
}

