<?php
$level = '../';
include $level."DB/DB2.php";
session_start();

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
$note = $_REQUEST['note'];
$status = 'Delivering';
$pay = $_REQUEST['pay'];
$money = $_SESSION['total'];
$day = date('Y-m-d H:i:s');
$deleted = 1;

$SQL_str_themhd = "INSERT INTO `order_hd`(`order_date`, `customer`, `phone`, `address`, `note`, `status`, `payment_method`, `total_money`, `deleted`) VALUES (:day, :name, :phone, :address, :note, :status, :pay, :money, :deleted)";

$ketqua = $db->prepare($SQL_str_themhd);
$ketqua->bindValue(':day', $day, PDO::PARAM_STR);
$ketqua->bindValue(':name', $name, PDO::PARAM_STR);
$ketqua->bindValue(':phone', $phone, PDO::PARAM_STR);
$ketqua->bindValue(':address', $address, PDO::PARAM_STR);
$ketqua->bindValue(':note', $note, PDO::PARAM_STR); 
$ketqua->bindValue(':status', $status, PDO::PARAM_STR);
$ketqua->bindValue(':pay', $pay, PDO::PARAM_STR);
$ketqua->bindValue(':money', $money, PDO::PARAM_INT); 
$ketqua->bindValue(':deleted', $deleted, PDO::PARAM_INT);
$ketqua->execute();

//lay id_hd cuoi cung
$last_id = $db->lastInsertId();

//vong lap lay id san pham bo vao order_detail
foreach ($_SESSION['cart'] as $id => $product) {
    $id_pro = $product['ID'];
    $quantity = $product['soluong'];
    $price = $product['price'] * $product['soluong'];
    $created = $day;

    // Thêm sản phẩm vào bảng order_detail
    $SQL_str_orderdetail = "INSERT INTO `order_detail`(`order_id`, `product_id`, `quantity`, `price`, `created`) VALUES (:last_id, :id_pro, :quantity, :price, :created)";
    $stmt = $db->prepare($SQL_str_orderdetail);
    $stmt->bindValue(':last_id', $last_id, PDO::PARAM_INT);
    $stmt->bindValue(':id_pro', $id_pro, PDO::PARAM_STR);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindValue(':price', $price, PDO::PARAM_INT);
    $stmt->bindValue(':created', $created, PDO::PARAM_STR);
    $stmt->execute();
}

// Xóa giỏ hàng sau khi đã đặt hàng thành công
unset($_SESSION['cart']);




header('location:../index.php');
?>