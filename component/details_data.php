<?php
$level = '../';
include($level . "DB/DB2.php");

$order_id = $_REQUEST['id'];

// Câu truy vấn để lấy thông tin đơn hàng
$sql_order = "SELECT `order_hd`.*, SUM(`order_detail`.quantity) AS slsp
FROM `order_hd`
INNER JOIN `order_detail` ON `order_hd`.ID = `order_detail`.order_id
INNER JOIN `user` ON `user`.fullname = `order_hd`.customer
WHERE `user`.user_name = :order_id
GROUP BY `order_hd`.ID;";

$result_order = $db->prepare($sql_order);
$result_order->bindValue(':order_id', $order_id, PDO::PARAM_STR);
$result_order->execute();
$order_info = $result_order->fetchAll();

// Câu truy vấn để lấy thông tin chi tiết đơn hàng
$sql_details = "SELECT * FROM `order_detail`
INNER JOIN `product` ON `order_detail`.product_id = `product`.ID
WHERE `order_detail`.order_id = :order_id";
$result_details = $db->prepare($sql_details);
$result_details->bindValue(':order_id', $order_id, PDO::PARAM_STR);
$result_details->execute();
$order_details = $result_details->fetchAll();
?>
