<?php
session_start();
// var_dump($_POST);
if(isset($_POST['submitcar']))
{
    foreach($_POST as $id=>$soluong)
    {
        if( ($soluong == 0) and (is_numeric($soluong)))
        {
            unset ($_SESSION['cart'][$id]);
        }
        elseif(($soluong > 0) and (is_numeric($soluong)))
        {
            $_SESSION['cart'][$id]['soluong']=$soluong;
        }
    }
// var_dump($_SESSION["cart"]);
// exit;
}