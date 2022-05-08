<?php

session_start();
$username = $_SESSION['name'];
$situation_selectbox = $_POST['pref'];
if (isset($_SESSION['id'])) {
    include('./MYSQL/mysql_select.php');
    if($situation_selectbox == "all"){
        $all = $situation_selectbox;
        $situation_selectbox = "全て";
        $emergency = emergency_select();
    }else if($situation_selectbox == "safe"){
        $safe = $situation_selectbox;
        $situation_selectbox = "安全";
        $emergency = emergency_check_select($situation_selectbox);
    }else if($situation_selectbox == "risk"){
        $risk = $situation_selectbox;
        $situation_selectbox = "危険";
        $emergency = emergency_check_select($situation_selectbox);
    }else{
        $situation_selectbox = "--";
        $emergency = emergency_select();
    }

    
    
    if($emergency == 0){
        $no = 0;
    }else{
        $no = 1;
        $date = $emergency['date'];
        $name = $emergency['user_name'];
        $check = $emergency['check_name'];
        $situation = $emergency['situation'];
        $sen = '<hr noshade>';
    }

} else {//ログインしていない時
        ?>
        <META http-equiv="Refresh" content="0;URL=./login_form.php">
        <?php
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>

<header>
    <h1>緊急連絡掲示板</h1>
    <nav class="gnav">
        <ul class="menu">
            <li><a href="./logout.php">ログアウト</a></li>
            <li><a href="./emergency.php">安否登録</a></li>
        </ul>
        
    </nav>
    <form method="post" action="index.php">

    <select class="menu" name="pref" onchange="this.form.submit()">
    <option value="" selected><?=$situation_selectbox?></option>
        <option value="all" >全て</option>
        <option value="safe">安全</option>
        <option value="risk">危険</option>
    </select>
    </form>
</header>

<body>

<h1>こんにちは<?=htmlspecialchars($username, \ENT_QUOTES, 'UTF-8')?>さん</h1>
    <?php
    if($no == 0){
        ?>
        <a>データがまだありません。</a>
        <button type="button" onclick="location.href='./emergency.php'">安否登録</button>
        <?php
    }else{
        foreach($emergency as $row){        
        ?>
        <p>投稿日:<?=$row['date']?></p>
        <p>投稿者:<?=$row['user_name']?></p>
        <?php
        if($row['check_name'] == "危険"){?>
        <p>mail:<?=$row['mail']?></p>
        <?php }?>
        <p>状態<?=$row['check_name']?></p>
        <p>状態の詳細<?=$row['situation']?></p>
        <hr noshade>
        <?php
        }
    }
    ?>
</body>
</html>