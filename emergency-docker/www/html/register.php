<?php
//フォームからの値をそれぞれ変数に代入
$name = $_POST['name'];
$pass = hash( "sha256" , $_POST['pass']);
$mail = $_POST['mail'];
$department = $_POST['department'];

include('MYSQL/mysql_insert.php');
// sqlの発行
userAdd($name,$mail,$pass,$department);
?>
<META http-equiv="Refresh" content="0;URL=login_form.php">
