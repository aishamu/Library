<?php 
SESSION_start();
include 'dbc.php';

$email= $_POST['email'];
$pwd= $_POST['pwd'];


if(empty($email) || empty($pwd)){
header("Location: ../staff_login.php?error=empty");
    exit();
}
else{
   
$sql= "select * from staff where email='$email' and pwd='$pwd' ";
$result= $db_conn->query($sql); // use the query in the db connection and save it in $result 

if(!$row = $result->fetch_assoc()){
header("Location: ../staff_login.php?error=wrong");
    exit();
} else {
    $_SESSION['user']= $row['s_name'];
    $_SESSION['activation']= $row['activation'];
    $_SESSION['previlage']= $row['previlage'];
    
 header('Location: ../staff_login.php');
    
}
}

//$row = $result->fetch_assoc();
//echo $row['p_name'];
 //header('Location: ../login.php'); // to move to specific page after regsiteration.
