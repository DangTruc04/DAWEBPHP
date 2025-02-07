<?php

if (isset($_POST['txtusername'])) {
    $user_name = $_POST['txtusername'];
    $pass = $_POST['txtpassword'];

    $user = DP::run_query("SELECT * FROM user WHERE user_name=? AND pass=?", [$user_name, $pass], 2);

    if (sizeof($user) > 0) {
        $trangthai = $user[0]['deleted'];
        $tinhtrang=$user[0]['status'];

        setcookie('username', $user_name, time() + 3600, '/');

        if ($trangthai == 0) {
            echo 'Tài khoản đã bị xóa';
            setcookie('username', '', time() - 3600, '/');
        }
        elseif ($tinhtrang == 'Disabled') {
            echo 'Tài khoản đã bị khóa';
            setcookie('username', '', time() - 3600, '/');
        }
        else {
            header('location:../index.php');
            exit; 
        }
    } else {
        echo "<font color='red'>Đăng nhập không thành công!!!</font>";
    }
}
?>
