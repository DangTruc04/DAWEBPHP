<?php 
$level="../";
include $level."DB/DB.php";
$idsp = $_REQUEST['id'];

$SQL_str_sp="select * from product where ID=:idsp";

$sp_detail = $db->prepare($SQL_str_sp);
$sp_detail ->bindValue(':idsp',$idsp,PDO::PARAM_STR);
$sp_detail->execute();
$sp_detail_row = $sp_detail->fetchAll();


$idloaisp=$_REQUEST['id'];
$SQL_loaisp="select * from `product` where category_id in (SELECT category_id FROM product WHERE ID=:idsp)";

$loaisp_detail=$db->prepare($SQL_loaisp);
$loaisp_detail ->bindValue(':idsp',$idloaisp,PDO::PARAM_STR);
$loaisp_detail->execute();
$loaisp_detail_row = $loaisp_detail->fetchAll();
// var_dump($loaisp_detail_row);


// $SQL_str_danhsachloaisp="select * from category ";
// $danhsachloaisp_detail = $db->prepare($SQL_str_danhsachloaisp);
// $danhsachloaisp_detail->execute();
// $danhsachloaisp_detail_row = $danhsachloaisp_detail->fetchAll();


?>