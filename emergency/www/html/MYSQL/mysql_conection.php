<?php
define('HOST','emergency-db-1');
define('USR','ecc');
define('PASS','ecc');
define('DB','emergency');
if (!$con = mysqli_connect(HOST, USR, PASS, DB)) {
    //データベースに接続できないときのメッセージ
    die('データベースに接続できません');
}
    mysqli_set_charset($con, 'utf8');
?>