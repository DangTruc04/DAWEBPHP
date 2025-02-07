<?php 
$sql="select* from product WHERE `deleted` = 1";
$result = $db ->prepare($sql);
$result->execute();
$dssp = $result -> fetchAll();

$sql1="SELECT * FROM `product` WHERE `deleted` = 1 ORDER by ID DESC;";
$result = $db ->prepare($sql1);
$result->execute();
$dssp1 = $result -> fetchAll();
// var_dump($dsorder);
// exit;

$sql2="SELECT * FROM `category` WHERE `deleted` = 1";
$result = $db ->prepare($sql2);
$result->execute();
$dssp2 = $result -> fetchAll();
?>  
