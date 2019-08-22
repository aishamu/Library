<?php

// Parents Accounts
if(isset($p_id)){
function p_edit_account($db_conn,$p_id){
if(isset($_POST['editaccount'])){
    $sql = "UPDATE parents SET
        title=          '".$_POST['title']."',
        p_name  =       '".$_POST['p_name']."',
        pwd =           '".$_POST['pwd']."',
        email =         '".$_POST['email']."',
        mobile =        '".$_POST['mobile']."',
        job =           '".$_POST['job']."',
        location =      '".$_POST['location']."',
        nationality =   '".$_POST['nationality']."',
        title2 =        '".$_POST['title2']."',
        p_name2 =       '".$_POST['p_name2']."',
        mobile2 =       '".$_POST['mobile2']."',
        job2 =          '".$_POST['job2']."',
        location2 =     '".$_POST['location2']."',
        nationality2 =  '".$_POST['nationality2']."',
        title3 =        '".$_POST['title3']."',
        r_name =        '".$_POST['r_name']."',
        relationship =  '".$_POST['relationship']."',
        mobile3 =       '".$_POST['mobile3']."' 
        WHERE p_id=     '".$p_id."'
    ";
    $result = $db_conn->query($sql);

    header("Location: details.php?p_id=".$p_id."");
}
}
}

// Child Accounts
function c_edit_account($db_conn,$c_id){
if(isset($_POST['ceditaccount'])){
    $csql = "UPDATE child SET
    
        c_name  =       '".$_POST['c_name']."',
        gender =        '".$_POST['gender']."',
        dob =           '".$_POST['dob']."',
        nationality =   '".$_POST['nationality']."',
        p_id =          '".$_POST['p_id']."',
        c_level =       '".$_POST['c_level']."',
        c_class =       '".$_POST['c_class']."',
        sleeping_time = '".$_POST['sleeping_time']."',
        fav_game =      '".$_POST['fav_game']."', 
        med_history =   '".$_POST['med_history']."' 
        WHERE c_id=     '".$c_id."'
    ";
    $result = $db_conn->query($csql);

    header("Location: details.php?c_id=".$c_id."");
}
}

// staff Accounts
function s_edit_account($db_conn,$s_id){
if(isset($_POST['seditaccount'])){
    $sql = "UPDATE staff SET
    
        s_name  =       '".$_POST['s_name']."',
        pwd =        '".$_POST['pwd']."',
        email =           '".$_POST['email']."',
        mobile =   '".$_POST['mobile']."',
        role =          '".$_POST['role']."',
        nationality =       '".$_POST['nationality']."'
        WHERE s_id=     '".$s_id."'
    ";
    $result = $db_conn->query($sql);

    header("Location: details.php?s_id=".$s_id."");
}
}