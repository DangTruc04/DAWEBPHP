<?php
if(isset($_COOKIE['username']))
{
    setcookie('username', '',time()-3600,'/');
    header('location:../pages/login.php');
// header('location:../content/login_customer.php');
}

?>