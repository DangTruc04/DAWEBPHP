<?php
$level = '../';
include $level."DB/DB2.php";
var_dump($_REQUEST['user-phone']);
// var_dump($_COOKIE['username']);exit;
if(isset($_COOKIE['username'])) {
    if (isset($_REQUEST['fullname'], $_REQUEST['user-phone'], $_REQUEST['user-adress'])) 
    {
        // Your code here
        $updatedFullName = $_REQUEST['fullname'];
        $updatedPhone = $_REQUEST['user-phone'];
        $updatedAddress = $_REQUEST['user-adress'];
        
        // Cập nhật thông tin người dùng trong cơ sở dữ liệu
        $updateUserSQL = "UPDATE user SET `fullname`= :fullname, `phone` = :phone WHERE user_name= :username";
        $stmt = $db->prepare($updateUserSQL);
        $stmt->bindParam(':fullname', $updatedFullName, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $updatedPhone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $updatedAddress, PDO::PARAM_STR);
        $stmt->bindParam(':username', $_COOKIE["username"], PDO::PARAM_STR);
        $stmt->execute();

        // Chuyển hướng đến trang hồ sơ sau khi cập nhật
        header('Location:../pages/my-account.php');
        exit;
    } 
    else {
        echo 'Không có dữ liệu được gửi đi.';
        exit;
    }
} else {
    header('location:../pages/login.php');
}
?>
