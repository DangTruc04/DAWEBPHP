<?php 
$level="../";
include $level."DB/DB2.php";
$idsp = $_REQUEST['id'];

$SQL_str_review="select * from feedback where product_id=:idsp and st=1";

$review_detail = $db->prepare($SQL_str_review);
$review_detail ->bindValue(':idsp',$idsp,PDO::PARAM_STR);
$review_detail->execute();
$review_detail_row = $review_detail->fetchAll();
//var_dump($review_detail_row);


$SQL_str_sp="select * from product where ID=:idsp";

$sp_detail = $db->prepare($SQL_str_sp);
$sp_detail ->bindValue(':idsp',$idsp,PDO::PARAM_STR);
$sp_detail->execute();
$sp_detail_row = $sp_detail->fetchAll();


?>