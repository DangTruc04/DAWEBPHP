<?php
include("../DB/DB.php");
session_start();
if(isset($_POST['addtocart']) && ($_POST['addtocart']))
{
$id=$_POST['addtocart'];
$sl = isset($_POST['sl']) ? $_POST['sl'] : 1;
$cart = DP::run_query("SELECT * FROM `product` WHERE ID=?", [$id], 2);
$name=$cart[0]['name'];
$price=$cart[0]['price'];
$thumbnail=$cart[0]['thumbnail'];
$variants=$cart[0]['variants'];
// var_dump($variants);exit;

if(isset($_SESSION['cart'][$id]))
{
    //tang sl sach co trong gio hang
    $_SESSION['cart'][$id]['soluong']+=$sl;
    

}
else{
    //them mot sach moi vao gio hang
    $_SESSION['cart'][$id]=array("ID"=>$id,"name"=>$name,"thumbnail"=>$thumbnail,"price"=>$price,"variants"=>$variants,"soluong"=>$sl);
}
var_dump($_SESSION);
var_dump($variants);
header("location:../pages/cart.php");
}
else
{
    header("location:../pages/login.php");
}
exit;
?>
