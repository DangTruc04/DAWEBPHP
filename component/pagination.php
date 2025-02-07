<?php
include "../DB/DB2.php";

try {
    $sodong = sizeof($dssp);
    $kichthuoctrang = 9;
    if ($sodong % $kichthuoctrang == 0) {
        $sotrang = $sodong / $kichthuoctrang;
    } else {
        $sotrang = (int)($sodong / $kichthuoctrang) + 1;
    }
 

    if (isset($_GET['tranghientai'])) {
        $tranghientai = (int)$_GET['tranghientai'];
    } else {
        $tranghientai = 1;
    }

    // Đảm bảo $tranghientai là một số nguyên dương
    $tranghientai = max(1, $tranghientai);

    // Truy vấn dữ liệu tương ứng với trang hiện tại
    $SQL_str_danhsachsp_ptrang = "SELECT * FROM product LIMIT :x, :y";
    $dssanpham_ptrang = $db->prepare($SQL_str_danhsachsp_ptrang);
    $dssanpham_ptrang->bindValue(':x', ($tranghientai - 1) * $kichthuoctrang, PDO::PARAM_INT);
    $dssanpham_ptrang->bindValue(':y', $kichthuoctrang, PDO::PARAM_INT);
    $dssanpham_ptrang->execute();
    $dssanpham_ptrang_rowsdata = $dssanpham_ptrang->fetchAll();
    // Kiểm tra và hiển thị dữ liệu
    if ($dssanpham_ptrang_rowsdata) {
        // Hiển thị dữ liệu hoặc thực hiện các thao tác khác với dữ liệu ở đây
        // var_dump($dssanpham_ptrang_rowsdata);
    } else {
        echo "Không có dữ liệu để hiển thị.";
    }
} catch (PDOException $e) {

}
?>
