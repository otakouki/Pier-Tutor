<?php
    function login_select($mail,$pass){
        session_start();
        session_regenerate_id();
        include('./MYSQL/mysql_conection.php');
        $stmt = mysqli_prepare( $con, 'SELECT * FROM users where mail = "' . $mail .'"');
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 0){
            return 0;
        }else{
            while( $row_data = mysqli_fetch_array( $result, MYSQLI_ASSOC) ) {

                if (hash( "sha256" , $pass) ==  $row_data['password']) {
                    //DBのユーザー情報をセッションに保存
                    $_SESSION['id'] = $row_data['user_id'];
                    $_SESSION['name'] = $row_data['user_name'];
                    $_SESSION['mail'] = $row_data['mail'];
                    return 1;
                } else {
                    return 2;
                }
            }
        }
    }

    function emergency_select(){
        include('./MYSQL/mysql_conection.php');
        $stmt = mysqli_prepare( $con, 'SELECT * FROM emergency');
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 0){
            return "0";
        }
        else{
            while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $rows[] = $res;
            }
            return $rows;
        }
    }

    function emergency_check_select($check_name){
        include('./MYSQL/mysql_conection.php');
        $stmt = mysqli_prepare( $con, 'SELECT * FROM emergency where check_name = "' . $check_name . '"');
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 0){
            return "0";
        }
        else{
            while($res = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $rows[] = $res;
            }
            return $rows;
        }
    }
?>