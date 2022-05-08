<?php
//フォームからの値をそれぞれ変数に代入
$name = $_POST['name'];
$check_name = $_POST['check_name'];
$situation = $_POST['situation'];
session_start();
$mail = $_SESSION['mail'];
// sqlの発行
include('./MYSQL/mysql_insert.php');
if($situation != ""){
    print "situationあり";
    emergency_riskAdd($name,$check_name,$situation,$mail);
}else{
    emergency_sefeAdd($name,$check_name,$mail);
    print "situationなし";
}

?>
<META http-equiv="Refresh" content="0;URL=index.php">