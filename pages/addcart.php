<?php
include("../DB/DB.php");
session_start();
$id=$_GET['item'];
$book=DP::run_query("Select * from books where id=?",[$id],2);
$title=$book[0]['title'];
$author=$book[0]['author'];
$price=$book[0]['price'];

if(isset($_SESSION['cart'][$id]))
{
    //tang sl sach co trong gio hang
    $_SESSION['cart'][$id]['soluong']=
    $_SESSION['cart'][$id]['soluong']+1;
}
else{
    //them mot sach moi vao gio hang
    $_SESSION['cart'][$id]=array("id"=>$id,"title"=>$title,"author"=>$author,"price"=>$price,"soluong"=>1);
}
var_dump($_SESSION);
header("location:cart.php")
?>
