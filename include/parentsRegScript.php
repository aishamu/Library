<?php
SESSION_start();
include 'dbc.php';

$title= $_POST['title'];
$p_name= $_POST['p_name'];
$pwd= $_POST['pwd'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$job= $_POST['job'];
$location= $_POST['location'];
$nationality= $_POST['nationality'];
$title2= $_POST['title2'];
$p_name2= $_POST['p_name2'];
$mobile2= $_POST['mobile2'];
$job2= $_POST['job2'];
$location2= $_POST['location2'];
$nationality2= $_POST['nationality2'];
$title3= $_POST['title3'];
$r_name= $_POST['r_name'];
$relationship= $_POST['relationship'];
$mobile3= $_POST['mobile3'];


if(empty($title) || empty($p_name) || empty($pwd) || empty($email) || empty($mobile) || empty($job) || empty($location) || empty($nationality) || empty($title2) || empty($p_name2) || empty($mobile2) || empty($job2) || empty($location2) || empty($nationality2) || empty($title3) || empty($r_name) || empty($relationship) || empty($mobile3) ){
header("Location: ../register_parent.php?error=empty");
exit();
} 
    else{

        $sql = "SELECT email FROM parents WHERE email='$email'";
        $result= $db_conn->query($sql);
        $emailcheck = mysqli_num_rows($result);
        if($emailcheck > 0){
            header("Location: ../register_parent.php?error=email");
            exit();
        } 
        else {


$sql= "INSERT INTO parents (title, p_name, pwd, email, mobile, job, location, nationality, title2, p_name2, mobile2, job2, location2, nationality2, title3, r_name, relationship, mobile3 ) VALUES ('$title', '$p_name', '$pwd', '$email', '$mobile', '$job', '$location', '$nationality', '$title2', '$p_name2', '$mobile2', '$job2', '$location2', '$nationality', '$title3', '$r_name', '$relationship', '$mobile3') ";



$result= $db_conn->query($sql); // use the query in the db connection and save it in $result 
//$row = $result->fetch_assoc();
//echo $row['p_name'];
 header('Location: ../login.php?success'); // to move to specific page after regsiteration.

            }
        }

//echo $title."<br>";
//echo $p_name."<br>";
//echo $pwd."<br>";
//echo $email."<br>";
//echo $mobile."<br>";
//echo $job."<br>";
//echo $location."<br>";
//echo $nationality."<br>";
//echo $title2."<br>";
//echo $p_name2."<br>";
//echo $mobile2."<br>";
//echo $job2."<br>";
//echo $location2."<br>";
//echo $nationality2."<br>";
//echo $title3."<br>";
//echo $r_name."<br>";
//echo $relationship."<br>";
//echo $mobile3."<br>";


//$sql= "INSERT INTO parents (title, p_name, pwd, email, mobile, job, location, nationality, title2, p_name2, mobile2, job2, location2, nationality2, title3, r_name, relationship, mobile3 ) VALUES ('mr.', 'wwww', 'ttttttt', '6666666@kkkkk.com', 'kkkkkkkkkkkk', 'kkkkkkkkkkkkk', 'kkkkkkkkkkk', 'kkkkkkkkkkkkkkk', 'kkkk', 'kkkkkkkkkkk', 'kkkkkkkkkkkkkkkkk', 'kkkkkkkkkkkk', 'kkkkkkkkkkkkk', 'kkkkkkkkkkk', 'kkkk', 'kkkkkkkkkk', 'kkkkkkkkkkkkkk', 'kkkkkkkkkkkkk') ";
