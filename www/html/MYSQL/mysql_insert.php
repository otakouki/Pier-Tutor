<?php
function userAdd($name,$mail,$pass,$department)
{
    include('./MYSQL/mysql_conection.php');
    $sql = "insert into users (user_name, mail,password, department) values ('" . $name ."', '" . $mail . "','" . $pass . "' , '" . $department . "')";
    $res = mysqli_query($con, $sql);
    if (!$res) {
        die(mysqli_error($con)); 
    }
    // 接続終了
    mysqli_close($con);
}

function emergency_riskAdd($name,$check_name,$situation,$mail){
    include('./MYSQL/mysql_conection.php');
    if($check_name == "安全"){
        $sql = "insert into emergency (user_name, check_name, situation) values ('" . $name ."', '". $check_name . "' , '" . $situation . "')";
    }else{
        $sql = "insert into emergency (user_name, mail, check_name, situation) values ('" . $name ."', '". $mail . "' , '" . $check_name ."','" . $situation . "')";
    }
    $res = mysqli_query($con, $sql);
    if (!$res) {
        die(mysqli_error($con)); 
    }
    // 接続終了
    mysqli_close($con);
}
function emergency_sefeAdd($name,$check_name,$mail){
    include('./MYSQL/mysql_conection.php');
    
    if($check_name == "安全"){
        $sql = "insert into emergency (user_name, check_name) values ('" . $name ."', '". $check_name . "')";
    }else{
        $sql = "insert into emergency (user_name, mail, check_name) values ('" . $name ."', '" . $mail ."','" . $check_name . "')";

    }
    $res = mysqli_query($con, $sql);
    if (!$res) {
        die(mysqli_error($con)); 
    }
    // 接続終了
    mysqli_close($con);
}