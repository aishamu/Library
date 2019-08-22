<?php
SESSION_start();
include 'dbc.php';


$s_name= $_POST['p_name'];
$pwd= $_POST['pwd'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$role= $_POST['role'];
$nationality= $_POST['nationality'];

if(empty($s_name) || empty($pwd) || empty($email) || empty($mobile) || empty($role) || empty($nationality) ){
header("Location: ../register_staff.php?error=empty");
exit();
} 
    else{

        $sql = "SELECT email FROM staff WHERE email='$email'";
        $result= $db_conn->query($sql);
        $emailcheck = mysqli_num_rows($result);
        if($emailcheck > 0){
            header("Location: ../register_staff.php?error=email");
            exit();
        } 
        else {


$sql= "INSERT INTO staff (s_name, pwd, email, mobile, nationality, role ) VALUES ('$s_name', '$pwd', '$email', '$mobile', '$nationality', '$role') ";



$result= $db_conn->query($sql); // use the query in the db connection and save it in $result 
//$row = $result->fetch_assoc();
//echo $row['p_name'];
 header("Location: ../staff_login.php?success"); // to move to specific page after regsiteration.

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
