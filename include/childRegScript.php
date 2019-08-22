<?php
SESSION_start();
include 'dbc.php';

$c_name= $_POST['c_name'];
$gender= $_POST['gender'];
$dob= $_POST['dob'];
$nationality= $_POST['nationality'];
$p_id= $_POST['p_id'];
$c_level= $_POST['c_level'];
$c_class= $_POST['c_class'];
$sleeping_time= $_POST['sleeping_time'];
$fav_game= $_POST['fav_game'];
$med_history= $_POST['med_history'];

//
//echo $c_name."<br>"; 
//echo $gender."<br>"; 
//echo $dob."<br>"; 
//echo $nationality."<br>"; 
//echo $p_id."<br>"; 
//echo $c_level."<br>"; 
//echo $c_class."<br>"; 
//echo $sleeping_time."<br>"; 
//echo $fav_game."<br>"; 
//echo $med_history."<br>"; 






if(empty($c_name) || empty($dob) || empty($nationality) || empty($c_class) || empty($sleeping_time) || empty($fav_game) || empty($med_history) ){
header("Location: ../register_child.php?error=empty");
exit();
} 
    else{

        


$sql= "INSERT INTO child (c_name ,gender ,dob ,nationality ,p_id ,c_level ,c_class ,sleeping_time ,fav_game ,med_history ) VALUES ('$c_name', '$gender', '$dob', '$nationality', '$p_id', '$c_level', '$c_class', '$sleeping_time', '$fav_game', '$med_history' ) ";



$result= $db_conn->query($sql); // use the query in the db connection and save it in $result 

 header('Location: ../register_child.php?success'); // to move to specific page after regsiteration.

            }
        
