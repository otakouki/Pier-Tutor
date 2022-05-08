<?php
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    include('./MYSQL/mysql_select.php');
    $login = login_select($mail,$pass);
    if($login == 0){
        ?>
        <script>
            alert('そのユーザはいません。新規登録するか、別のユーザーでログインしてください!');
        </script>
        <META http-equiv="Refresh" content="0;URL=login_form.php">
        <?php
    }else{
        if($login == 1){
            ?>
            <META http-equiv="Refresh" content="0;URL=index.php">
            <?php
        }else if($login == 2){
            ?>
            <META http-equiv="Refresh" content="0;URL=login_form.php">
            <?php
        }
    }

?>