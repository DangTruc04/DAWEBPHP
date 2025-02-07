<?php
include($level.'DB/DB2.php');
try
{
$visitor_ip = $_SERVER['REMOTE_ADDR'];//địa chỉ của thiết bị khi kết nối với internet.
// Thêm thông tin vào bảng site_visits
$stmt = $db->prepare("INSERT INTO truycap (visitor_ip) VALUES (:visitor_ip)");
$stmt->bindParam(':visitor_ip', $visitor_ip);
$stmt->execute();
$count_visits = $db->query("SELECT COUNT(*) FROM truycap")->fetchColumn(); 
}
catch(PDOException $e) {
    echo "Lỗi: " .$e->getMessage();
}
$db = null;
?>